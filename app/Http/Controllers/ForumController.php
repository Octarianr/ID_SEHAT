<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Topic;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index() {
        
        $result = Topic::latest();

        if (request('search')) {
            $result->where('topic', 'like', '%' . request('search') . '%')
                    ->orWhere('content', 'like', '%' . request('search') . '%');
        }

        $topic = $result->paginate(6)->withQueryString();
        return view('forum.index', compact(['topic']));
    }

    public function create(Request $request) {
        $request->request->add(['user_id' => auth()->user()->id]);
        $topic = Topic::create($request->all());
        
        return redirect()->back()->with('success', 'Terkirim');
    }

    public function show(Topic $topic)
    {
        return view('forum.show', compact(['topic']));
    }

    public function store(Request $request)
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        $comment = Comment::create($request->all());
        return redirect()->back()->with('success', 'Terkirim');
    }
}

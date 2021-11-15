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
        Topic::create($request->all());
        
        return redirect()->back()->with('success', 'Terkirim');
    }

    public function show(Topic $topic)
    {
        return view('forum.show', compact(['topic']));
    }

    public function destroy(Topic $topic)
    {
        $this->authorize('admin');
        
        $comments = $topic->comment();

        foreach($comments->get() as $comment) {
            $comment->child()->delete();
        }

        $comments->delete();
        $topic->delete();

        return redirect('/forum')->with('success', 'Terhapus');
    }
}

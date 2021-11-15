<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        Comment::create($request->all());

        return redirect()->back()->with('success', 'Terkirim');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('admin');

        foreach($comment->get() as $komen) {
            $komen->child()->delete();
        }

        Comment::destroy($comment->id);

        return redirect()->back()->with('success', 'Terhapus');
    }

}
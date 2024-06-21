<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Idea;

class CommentController extends Controller
{
    public function store(Idea $idea, Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->idea_id = $idea->id;
        $comment->save();
        return redirect()->route('idea.show', $idea->id)->with('success', 'Comment was added successfully.');
    }
}

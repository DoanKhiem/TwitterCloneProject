<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Idea;

class CommentController extends Controller
{
    public function store(Idea $idea, CreateCommentRequest $request)
    {
        $validated = $request->validated();

        $validated['idea_id'] = $idea->id;
        $validated['user_id'] = auth()->id();
        Comment::create($validated);
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment was added successfully.');
    }
}

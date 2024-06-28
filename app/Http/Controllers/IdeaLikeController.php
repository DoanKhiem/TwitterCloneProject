<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaLikeController extends Controller
{
    public function like(Idea $idea) {
        $idea->likes()->toggle(auth()->user());

        return redirect()->route('dashboard')->with('success', 'Idea was liked successfully.');
    }

    public function unlike(Idea $idea) {
        $idea->likes()->toggle(auth()->user());

        return redirect()->route('dashboard')->with('success', 'Idea was unliked successfully.');

    }
}

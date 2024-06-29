<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea) {
        return view('ideas.show', ['idea' => $idea]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|min:5|max:240',
        ]);

        $validated['user_id'] = auth()->id();
//        $idea = Idea::create($request->all());
        Idea::create($validated);
        return redirect()->route('dashboard')->with('success', 'Idea was added successfully.');
    }

    public function destroy(Idea $idea)
    {
//        if ($idea->user_id !== auth()->id()) {
//            abort(403);
//        }
        $this->authorize('delete', $idea);
        $idea->delete();
        return redirect()->route('dashboard')->with('success', 'Idea was deleted successfully.');

    }

    public function edit(Idea $idea) {
        $this->authorize('update', $idea);
        $editing = true;
        return view('ideas.show', ['idea' => $idea, 'editing' => $editing]);
    }

    public function update(Idea $idea, Request $request) {
        $this->authorize('update', $idea);
        $validated = $request->validate([
            'content' => 'required|min:5|max:240',
        ]);
        $idea->update($validated);
//        $idea->content = $request->content;
//        $idea->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea was updated successfully.');
    }
}

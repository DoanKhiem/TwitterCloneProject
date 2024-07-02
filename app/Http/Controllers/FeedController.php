<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $followingIDs = auth()->user()->followings()->pluck('user_id');

//        dd($followingIDs);

//        $ideas = Idea::whereIn('user_id', $followingIDs)->latest();

//        if(request()->has('search')) {
////            $ideas = $ideas->where('content', 'like', '%' . request('search') . '%');
//            $ideas = $ideas->search(request('search', ''));
//        }

        $ideas = Idea::when(request()->has('search'), function($query) {
            $query->search(request('search', ''));
        })->orderBy('created_at', 'desc')->paginate(5);

        return view('dashboard', ['ideas' => $ideas]);
    }
}

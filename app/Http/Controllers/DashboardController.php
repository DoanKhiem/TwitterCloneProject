<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        $idea = new Idea([
//            'content' => 'That is a test idea 2',
//        ]);
//        $idea->save();
//        $ideas = Idea::orderBy('created_at', 'desc');
//        if(request()->has('search')) {
//            $ideas = $ideas->search(request('search', ''));
////            $ideas = $ideas->where('content', 'like', '%' . request('search') . '%');
//        }

        $ideas = Idea::when(request()->has('search'), function($query) {
            $query->search(request('search', ''));
        })->orderBy('created_at', 'desc')->paginate(5);
//        $idea = new Idea();
//        $idea->content = 'That is a test idea 1';
//        $idea->likes = 0;
//        $idea->save();

        // top users
//        $topUsers = User::withCount('ideas')->orderBy('ideas_count', 'desc')->take(5)->get();
        return view('dashboard', [
            'ideas' => $ideas,
//            'topUsers' => $topUsers,
        ]);
    }


}

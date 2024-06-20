<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        $idea = new Idea([
//            'content' => 'That is a test idea 2',
//        ]);
//        $idea->save();
        $ideas = Idea::orderBy('created_at', 'desc')->paginate(5);
//        $idea = new Idea();
//        $idea->content = 'That is a test idea 1';
//        $idea->likes = 0;
//        $idea->save();
        return view('dashboard', ['ideas' => $ideas]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
//        if (Gate::denies('admin')) {
//            abort(403);
//        }
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::latest()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function ideas()
    {
        $ideas = Idea::latest()->paginate(5);
        return view('admin.ideas.index', compact('ideas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function follow(User $user)
    {
        auth()->user()->followings()->attach($user);

        return redirect()->route('users.show', $user)->with('success', 'You are now following ' . $user->name);
    }

    public function unfollow(User $user)
    {
        auth()->user()->followings()->detach($user);

        return redirect()->route('users.show', $user)->with('success', 'You are now unfollowing ' . $user->name);
    }
}

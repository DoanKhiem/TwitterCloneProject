<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'John Doe',
                'age' => 20
            ],
            [
                'name' => 'Đoàn Khiêm',
                'age' => 25
            ],
            [
                'name' => 'Đoàn Hai',
                'age' => 17
            ]
        ];
        return view('dashboard', ['users' => $users]);
    }
}

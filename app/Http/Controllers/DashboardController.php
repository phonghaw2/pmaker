<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        // dd($user->name);
        return view('home.dashboard.index',[
            'title' => 'Dashboard',
            'content' => 'general',
            'data' => $user,
        ]);
    }

    public function appearance() {
        return view('home.dashboard.index',[
            'title' => 'Dashboard',
            'content' => 'appearance'
        ]);
    }

    public function article() {
        return view('home.dashboard.index',[
            'title' => 'Dashboard',
            'content' => 'article',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $user_id;

    public function __construct()
    {
        $this->user_id = auth()->user()->id;
    }

    public function index() {
        $user = User::where('id', $this->user_id)->first();
        dd($user);
        return view('home.dashboard.index',[
            'title' => 'Dashboard',
            'content' => 'general'
        ]);
    }

    public function appearance() {
        return view('home.dashboard.index',[
            'title' => 'Dashboard',
            'content' => 'appearance'
        ]);
    }
}

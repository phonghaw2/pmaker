<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;

class DashboardController extends Controller
{
    private object $user;

    public function __construct()
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
            $this->user = User::where('id', $user_id)->first();
            FacadesView::share('data', $this->user);
        }
    }

    public function index()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'general',
        ]);
    }

    public function appearance()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'appearance',
        ]);
    }

    public function navbar()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'navbar',
        ]);
    }

    public function article()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'article',
        ]);
    }

    public function series()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'series',
        ]);
    }

    public function pages()
    {
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'pages',
        ]);
    }
}

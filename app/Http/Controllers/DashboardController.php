<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Series;
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
            $this->user->user_code = md5($this->user->name . 'salt' . $this->user->id);
            FacadesView::share('data', $this->user);
        }
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $test = User::find($user_id)->getBlog();

        $user = Blog::find(1)->user;
        // $user = Blog::where('id', 1)->first();
        dd($test);
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
        $series = Series::all();
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'series',
            'series'    => $series
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

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;

class PortfolioController extends Controller
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

    public function index() {
        return view('home.dashboard.index-portfolio',[
            'title'     => 'Dashboard | Portfolio',
            'content'   => 'appearance',
        ]);
    }

    public function link() {
        return view('home.dashboard.index-portfolio',[
            'title'     => 'Dashboard | Portfolio',
            'content'   => 'link',
        ]);
    }
}

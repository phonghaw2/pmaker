<?php

namespace App\Http\Controllers;

use App\Enums\PatternLinkEnum;
use App\Models\Article;
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
        // Get pattern of link social media
        $pattern = PatternLinkEnum::asArray();
        // Get user blog information
        $blog_info = Blog::whereUserId($this->user->id)->first();
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'general',
            'blog'   => $blog_info,
            'pattern'   => $pattern,
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
        $articles = Article::getArticleInfo($this->user->id);
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'article',
            'articles'   => $articles,
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

    public function tagMultiLink()
    {
        $tags = getLinkTag($this->user->id);
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'tag-multi-link',
            'tags'   => $tags,
        ]);
    }
}

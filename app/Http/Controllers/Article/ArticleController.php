<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('home.article.index');
    }

    public function draft()
    {
        return view('home.article.draft');
    }
}

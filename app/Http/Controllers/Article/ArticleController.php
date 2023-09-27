<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\TagMultiLink;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('home.article.index');
    }

    public function draft()
    {
        $tags = TagMultiLink::allTags(auth()->user()->id);
        return view('home.article.draft',[
            'tags'    => $tags
        ]);
    }
}

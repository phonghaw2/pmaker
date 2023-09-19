<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\Tags\StoreMultiLinkRequest;
use App\Models\Article;
use App\Models\TagMultiLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;

class TagMultiLinkController extends Controller
{
    use ResponseTrait;
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

    public function create()
    {
        $articles = Article::where('user_id', $this->user->id)->all();
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'create-tag',
            'article'   => $articles,
        ]);
    }

    public function store(StoreMultiLinkRequest $request)
    {
        try {
            TagMultiLink::create($request->validated());
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }

    public function destroy()
    {
        $tags = TagMultiLink::deleteTags(2, 4);
        if ($tags) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'Something wrong!');
        }
    }
}

<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    use ResponseTrait;

    private object $model;

    public function __construct()
    {
        $this->model = Post::query();
        $this->table = (new Post())->getTable();

        View::share('title', ucwords($this->table));
        View::share('table', $this->table);
        view()->share([
            'types' => $types,
            'tores' => $tores,
        ]);

    }
    public function index(request $request)
    {
        $selectedType = $request->get('type');
        $selectedTore = $request->get('tore');


        return view('admin.article.posts.index',[
            'selectedType' => $selectedType,
            'selectedTore' => $selectedTore,
        ]);
    }


    public function create()
    {
        return view('admin.article.posts.create');
    }


    public function store(StoreRequest $request)
    {
        try {
            Post::create($request->validated());

            return $this->successResponse(message:'Successfully Posted');
        } catch (\Throwable $th) {
            return $this->errorResponse();
        }


    }

    public function updateStatus(Request $request)
    {
        Post::where('id', $request->id)
            ->update([
                'status' => PostStatusEnum::APPROVE,
            ]);
        return $this->successResponse();
    }


    public function show($postId)
    {
        $post = $this->model
                ->findOrFail($postId);
        return view('admin.posts.show',[
            'post' => $post,
        ]);
    }


    public function check(request $request)
    {
        $selectedType = $request->get('type');
        $selectedTore = $request->get('tore');

        $query = $this->model->clone()
            ->where('status', '0')
            ->latest()  ;
        if (!empty($selectedTore) && $selectedTore !== '0' ) {
            $query->where('tore', $selectedTore);
        }
        if (!empty($selectedType) && $selectedType !== '0') {
            $query->where('type', $selectedType);
        }
        $data = $query->paginate(10)
            ->appends([
                'tore' => $selectedTore,
                'type' => $selectedType,
            ]);



        return View('admin.posts.check', [
            'data' => $data,
            'selectedTore' => $selectedTore,
            'selectedType' => $selectedType,
        ]);
    }
}

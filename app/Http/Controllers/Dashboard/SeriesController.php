<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\Series\StoreRequest;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;

class SeriesController extends Controller
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
        $series = Series::all();
        return view('home.dashboard.index',[
            'title'     => 'Dashboard',
            'content'   => 'create-series',
            'series'    => $series
        ]);
    }

    public function store(StoreRequest $request)
    {
        try {
            $arr = $request->validated();
            // $arr['cover'] = optional($request->file('image'))->store('cover-series');

            $series = Series::create($arr);
            if($request->hasFile('cover')){
                $cover = $request->cover;
                $image_new_name = time() . '.' . $cover->getClientOriginalExtension();
                $cover->move('storage/app/cover-series/', $image_new_name);
                $series->cover = '/storage/app/cover-series/' . $image_new_name;
                $series->save();
            }

            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}

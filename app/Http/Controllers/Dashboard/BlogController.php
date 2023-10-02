<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreInformationRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(StoreInformationRequest $request)
    {
        try {
            $arr = $request->validated();

            $series = Series::create($arr);
            $series->cover = '';
            $series->user_id = auth()->user()->id;

            // If have cover of series, save it on storage and get a name of pic
            if($request->hasFile('cover')){
                $cover = $request->cover;
                $image_new_name = auth()->user()->id . time() . '.' . $cover->getClientOriginalExtension();
                $cover->move('storage/cover-series/', $image_new_name);
                $series->cover = '/storage/cover-series/' . $image_new_name;
            }
            // Insert
            $series->save();

            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse($th->getMessage());
        }
    }
}

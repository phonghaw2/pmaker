<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreInformationRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(StoreInformationRequest $request)
    {
        try {
            $arr = $request->validated();

            $series = Series::create($arr);
            $series->cover = '';
            $series->user_id = $this->user->id;

            // If have cover of series, save it on storage and get a name of pic
            if($request->hasFile('cover')){
                $cover = $request->cover;
                $image_new_name = $this->user->id . time() . '.' . $cover->getClientOriginalExtension();
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

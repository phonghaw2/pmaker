<?php

namespace App\Http\Controllers\gms;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Models\Social;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        return view('gms.template.index', [
            'nav' => 'template',
        ]);
    }

    public function social(request $request)
    {
        $query = Social::query();
        $media = $request->get('media');

        $platform = $query->distinct()
                    ->pluck('platform');

        if(!empty($media) && $media != 'all' ){
            $query->where('platform', $media);
        };

        $data = $query->get();
            // ->appends($request->all());

        return view('gms.template.index', [
            'nav' => 'social',
            'social' => $data,
            'platform' => $platform,
        ]);
    }

}

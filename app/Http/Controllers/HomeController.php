<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test()
    {
        return view('home.test');
    }

    public function main()
    {
        return view('home.main');
    }

    public function index()
    {
        return view('home.index');
    }

    public function demo()
    {
        return view('home.demo');
    }

    public function editor($type)
    {
        if ($type == 'blog') {
            $type = 'hhe';
        }
        return view('home.editor');
    }

    public function check(request $request)
    {
        dd($request->get('data'));
    }
}

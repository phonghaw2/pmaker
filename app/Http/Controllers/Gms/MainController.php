<?php

namespace App\Http\Controllers\Gms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('gms.index');;
    }
}

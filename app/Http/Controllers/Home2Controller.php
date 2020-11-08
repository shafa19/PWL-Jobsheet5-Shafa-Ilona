<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class Home2Controller extends Controller
{
    public function __invoke(){
    	return view('home2');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}

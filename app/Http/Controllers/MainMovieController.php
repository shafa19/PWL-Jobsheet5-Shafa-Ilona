<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class MainMovieController extends Controller
{
    public function __invoke(){
    	$movie = Cache::remember('movie', 60, function () {
            return Movie::all();
        });
        return view('main-movie')
            ->with('movie', $movie);
    }

    public function __construct(){
        $this->middleware('auth');
    }
}

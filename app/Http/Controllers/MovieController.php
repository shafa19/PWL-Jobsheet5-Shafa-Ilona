<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Str;


class MovieController extends Controller
{
    public function __invoke($id){
    	$movie = Movie::find($id);
    	$movie = json_decode(json_encode($movie));
    	return view('movies', ['id'=> $id])->with(compact('movie'));
    }
}

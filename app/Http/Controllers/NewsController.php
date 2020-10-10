<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function __invoke($id){
    	$movie = Movie::find($id);
    	$movie = json_decode(json_encode($movie));
    	return view('news', ['id'=> $id])->with(compact('movie'));
    }
}
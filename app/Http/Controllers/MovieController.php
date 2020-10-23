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
	
	public function index(){
		$movie = Movie::all();
		return view('manage',['movies' => $movie]);
	}

	public function add(){
		return view('addmovie');
	}

	public function create(Request $request){
		Movie::create([
			'title' => $request->title,
			'synopsis' => $request->synopsis,
			'rating' => $request->rating,
			'review' => $request->review
		]);
		return redirect('/manage');
	}

	public function edit($id){
		$movie = Movie::find($id);
		return view('editmovie',['movies'=>$movie]);
	}

	public function update($id, Request $request){
		$movie = Movie::find($id);
		$movie->title = $request->title;
		$movie->synopsis = $request->synopsis;
		$movie->rating = $request->rating;
		$movie->review = $request->review;
		$movie->save();
		return redirect('/manage');
	}

	public function delete($id){
		$movie = Movie::find($id);
		$movie->delete();
		return redirect('/manage');
	}
}

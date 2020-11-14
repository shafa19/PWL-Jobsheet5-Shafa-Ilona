<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PDF;


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
		if($request->file('poster')){
			$poster = $request->file('poster')->store('images','public');
		}
		Movie::create([
			'title' => $request->title,
			'synopsis' => $request->synopsis,
			'rating' => $request->rating,
			'review' => $request->review,
			'poster' => $poster
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

		if($movie->poster && file_exists(storage_path('app/public/'.$movie->poster))){
			\Storage::delete('public/'.$movie->poster);
		}
		$poster = $request->file('poster')->store('images','public');
		$movie->poster = $poster;

		$movie->save();
		return redirect('/manage');
	}

	public function delete($id){
		$movie = Movie::find($id);
		$movie->delete();
		return redirect('/manage');
	}

	public function __construct(){
		//$this->middleware('auth');
		$this->middleware(function($request, $next){
			if(Gate::allows('manage-articles')) return $next($request);
			abort(403, 'Anda tidak memiliki cukup hak akses');
		});
	}

	public function print_pdf(){
		$movie = Movie::all();
		$pdf = PDF::loadview('movies_pdf',['movies'=>$movie]);
		return $pdf->stream();
	}
}

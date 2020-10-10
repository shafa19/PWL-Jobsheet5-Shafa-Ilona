<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __invoke($id){
    	$article = Article::find($id);
    	$article = json_decode(json_encode($article));
    	return view('index-post', ['id'=> $id])->with(compact('article'));
    }
}

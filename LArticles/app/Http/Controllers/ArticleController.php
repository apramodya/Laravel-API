<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Http\Requests;
use App\Article;
use \App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{

	public function index()
    {
    	//get articles
	    $articles = Article::paginate(15);

	    return ArticleResource::collection($articles);
    }

	public function show($id)
	{
		// get single article
		$article = Article::findOrFail($id);
		return new ArticleResource($article);
	}

	public function store(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
	public function index()
	{
		$articles = Article::orderBy('id', 'desc')->paginate(15);
		return view('article.list')->with(compact('articles'));
	}

	public function show($id)
	{
		return view('article.post');
	}
}

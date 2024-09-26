<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articolo;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function index(){
        $articles = Article::all();

        return view('admin.article.index', compact('articles'));
    }

    public function show(Article $article){
        return view('admin.article.show', compact('article'));

    }
}

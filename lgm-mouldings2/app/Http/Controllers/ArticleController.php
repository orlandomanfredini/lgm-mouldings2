<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articolo;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function index(){
        $articoli = Article::all();

        return view('admin.article.index', compact('articoli'));
    }
}

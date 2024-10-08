<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articolo;
use App\Models\Category;
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

    public function create(){
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.article.create', compact('categories'));
    }

    public function store(Request $request){
        $form_data = $request->validate([
            'article'=> 'required',
            'color' => 'required',
            'material' => 'required|max:80',
            'description' => 'nullable',
            'iamge'=> 'nullable',
            'storage'=> 'required',
            'price' => 'required'

        ]) ;

        $form_data = $request->all();

        $new_article = Article::create($form_data);

        $new_article -> save();

        return to_route('admin.article.show', $new_article);

    }

    public function edit(Article $article){

        $categories = Category::orderBy('name', 'asc')->get();

        return view('admin.article.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article){

        $form_data = $request->validate([
            'article'=> 'required',
            'color' => 'required',
            'material' => 'required|max:80',
            'description' => 'nullable',
            'iamge'=> 'nullable',
            'storage'=> 'required',
            'price' => 'required'

        ]) ;

        
        $form_data = $request->all();
        $article->fill($form_data);
        $article->save();

        return view('admin.article.show', compact('article'));

    }

    public function destroy(Article $article){
        $article->delete();

        return to_route('admin.article.index');

    }
}

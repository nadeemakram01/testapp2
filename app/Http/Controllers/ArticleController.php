<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\category;

class ArticleController extends Controller{

//        public function  index() {
//        return "This is my new Article Controller";
//    }


//    public function index(){
//        $articles = DB::table('articles')->get();
//        $testing = "Passing data...";
//        return view("articles.index", compact("articles"));
//    }

//    public function  index() {
//        $testing = "passing data...";
//        return view('articles.index', compact("testing"));
//    }

    public function  index() {
        $articles = DB::table('articles')->get();
        return view('articles.index', compact("articles"));

    }



    public function show($article){
        $article = Article::find($article);

       return view("articles.show", compact("article"));

    }
    public function create() {
        $categories = Category::all()->pluck('name', 'id');
        return view('articles.create', compact("categories"));
    }


    public function store(ArticleRequest $request) {
        $category = Category::findOrFail($request->category_id);
        $article = new Article($request->all());
        $article->author_id = 1;
        $article->category()->associate($category)->save();
        return redirect('articles');
    }





}

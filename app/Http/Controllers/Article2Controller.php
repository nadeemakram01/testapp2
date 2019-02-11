<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Article2;


class Article2Controller extends Controller{
//    public function  index() {
//        return "This is my new Article Controller";
//    }

//    public function  index() {
//        $testing = "passing data...";
//        return view('articles.index2', compact("testing"));
//    }

    public function  index() {
      $articles2 = DB::table('articles2')->get();
      return view('articles.index2', compact("articles2"));

    }

    public function show($articles2)
    {
        $articles2 = Article2::find($articles2);

        return view("articles.show2", compact("articles2"));

    }
















}

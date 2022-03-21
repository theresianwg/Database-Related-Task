<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "name" => "Theresia Nawangsih",
            "email" => "theresianwg@its.ac.id",
            "title" => "Halaman Artikel Berita",
            // "articles" => Article::all(),
            "articles" => Article::latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article
        ]);
        
    }

}
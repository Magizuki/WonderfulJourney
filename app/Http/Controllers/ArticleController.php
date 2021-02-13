<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function getAllArticle(){
        $articles = Article::paginate(9);
        return view('home', ['Name' => 'home', 'articles' => $articles]);
    }

    public function getFullStoryArticle(Request $request){
        
    }

    public function getCategorizeArticle(){

    }



}

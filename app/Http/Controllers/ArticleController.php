<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function getAllArticle(){
        $articles = Article::paginate(9);
        return view('home', ['Name' => 'home', 'articles' => $articles]);
    }

    public function getFullStoryArticle($id){
        $article = Article::where("id","=",$id)->first();
        return View('fullstory',['Name' => 'fullstory','article' => $article]);
    }

    public function getCategorizeArticle($category){
        $articles = Article::where("category_id","=",$category)->paginate(9);
        $category = Category::where("id","=",$category)->first();
        
        return view('blogcategory',['Name' => 'blogcategory', 'articles' => $articles, 'category' => $category, 'count' => count($articles)]);
    }



}

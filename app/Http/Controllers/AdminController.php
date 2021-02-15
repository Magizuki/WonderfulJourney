<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function showUserMenu(){
        $users = User::where('role','=','User')->paginate(20);
        return view('admin.usermenu', ['users' => $users, 'Name' => 'usermenu']);
    }

    public function deleteUser($id){
        $articles = Article::where('user_id','=',$id)->get();
        foreach($articles as $article){
            Article::destroy($article->id);
        }
        User::destroy($id);
        return redirect(url('/admin/usermenu'));
    }

    public function showUserArticleMenu($id){
        $articles = Article::where('user_id','=',$id)->paginate(9);
        return view('admin.user_articlemenu',['articles' => $articles, 'Name' => 'UserArticleMenu', 'user_id' => $id]);
    }

    public function deleteUserArticle($user_id,$article_id){
        Article::destroy($article_id);
        return redirect(url('/admin/usermenu/'.$user_id));
    }

}

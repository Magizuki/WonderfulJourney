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

}

<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile(){
        return view('user.profilemenu', ['Name' => 'profile']);
    }

    public function updateUserProfile($id,Request $request){
        $this->validate($request, [
            'name' => 'required|min:4|max:255',
            'email' => 'required|email',
            'phone' => 'required|min:12|max:12',
        ]);
        $email = $request->email;
        $duplicate_email = count(User::where('email','=',$email)->get());

        if($duplicate_email == 0){
            User::where('id','=',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);
            return redirect()->back()->with('alert', 'Update Profile Success');    
        }
        return redirect()->back()->with('alert', 'Email already exist');  
    }

    public function showBlogMenu($id){
        $blog = Article::where('user_id','=',$id)->paginate(15);
        return view('user.blogmenu', ['articles' => $blog, 'Name' => 'blog']);
    }

    public function deleteArticle($id){
        Article::destroy($id);
        return redirect()->back();
    }
}

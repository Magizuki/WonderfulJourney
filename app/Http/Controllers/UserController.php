<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
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

    public function showCreateBlog(){
        $categories = Category::get();
        return view('user.createblog',['Name' => 'blog', 'categories' => $categories]);
    }

    public function doCreateBlog($id, Request $request){

        $this->validate($request, [
            'title' => 'required|min:4|max:255',
            'story' => 'required|min:20',
            'photo' => 'required|mimes:jpeg,jpg,png'
        ]);

        $photoname = $request->photo->getClientOriginalName();
        $request->photo->storeAs('',$photoname,'public');

        Article::create([
            'user_id' => $id,
            'category_id' => $request->category,
            'title' => $request->title,
            'image' => $photoname,
            'description' => $request->story
        ]);

        return redirect(url('/user/blogmenu/'.Auth::user()->id));

    }
}

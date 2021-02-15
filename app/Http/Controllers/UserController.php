<?php

namespace App\Http\Controllers;

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

        User::where('id','=',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect(url('/user/profilemenu'));
    }
}

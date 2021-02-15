<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function showRegister(){
        return view('auth.register', ['Name' => 'register']);
    }

    public function doRegister(Request $request){

        $email = $request->email;
        $duplicate_email = count(User::where('email','=',$email)->get());

        $this->validate($request, [
            'name' => 'required|min:4|max:255',
            'email' => 'required|email',
            'phone' => 'required|min:12|max:12',
            'password' => 'required|min:4|max:255',
            'confirmpassword' => 'required|min:4|max:255'
        ]);

        if($duplicate_email == 0){
            $pass1 = $request->password;
            $pass2 = $request->confirmpassword;
            if($pass1 == $pass2 && $request->agreement != null){
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->password = Hash::make($request->password);
                $user->role = "User";
                $user->save();
                return redirect(url('/wonderful-world/login'));
            }
        }
        return redirect()->back()->with('alert', 'email are already exist or confirm password is not same with password or agreement not checked');
    }

    public function showLogin(){
        return view('auth.login', ['Name' => 'login']);
    }

    public function doLogin(Request $request){

        $credential = $request->only( 'email', 'role', 'password');

        if(Auth::attempt($credential)){
            return redirect(url('/greeting'));
        }

        return redirect()->back()->with('alert', 'name or password incorrect');

    }

    public function doLogout(){
        Auth::logout();
        return redirect(url('/'));
    }


}

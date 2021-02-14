@extends('layouts.MasterPage')

@section('title', 'Login')

@section('CSS_Inline')
    
    <style>

        .button{
            margin: auto;
            text-align: center;
        }

        .form{
            margin: auto;
            width: 40%
        }

        #role{
            width: 100%;
        }

    </style>

@endsection

@section('content')

    @if (Auth::check())
        <script>window.location = "/greeting" </script>
    @endif

    <div class="form">
        <br>
        <h1>Login</h1>
        <br>
        <form method="POST" action="/doLogin">
            @csrf
            <div class="form-group">
                <label for="role"><b>Login as :</b></label>
                <br>
                <select class="custom-select" name="role" id="role">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="email"><b>Email :</b></label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <br>
            <div class="form-group">
                <label for="password"><b>Password :</b></label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <br>
            <div class="button">
                <button type="submit" class="btn btn-outline-primary" id="button">Login</button>
            </div>  
        </form>
        <br>
    </div>

    <script>
        var error_message = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist == true){
            alert(error_message);
        }
    </script>
        
@endsection
    

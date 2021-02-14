@extends('layouts.MasterPage')

@section('title', 'Register')

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

    </style>

@endsection

@section('content')

    @if (Auth::check())
        <script>window.location = "/greeting" </script>
    @endif

    <div class="form">
        <br>
        <h1>Register</h1>
        <br>
        <form method="POST" action="/doRegister">
            @csrf
            <div class="form-group">
                <label for="name"><b>Name :</b></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" >
                 
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="email"><b>Email :</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="phone"><b>Phone :</b></label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="password"><b>Password :</b></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="confirmpassword"><b>Confirm Password :</b></label>
                <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" id="confirmpassword" name="confirmpassword">

                @error('confirmpassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agreement" name="agreement">
                <label class="form-check-label" for="agreement">
                  I agree terms and conditions
                </label>
            </div>
            <br>
            <div class="button">
                <button type="submit" class="btn btn-outline-primary" id="button">Register</button>
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
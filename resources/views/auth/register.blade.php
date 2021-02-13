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

    <div class="form">
        <br>
        <h1>Register</h1>
        <br>
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="name"><b>Name :</b></label>
                <input type="text" class="form-control" id="name" >
            </div>
            <br>
            <div class="form-group">
                <label for="email"><b>Email :</b></label>
                <input type="email" class="form-control" id="email">
            </div>
            <br>
            <div class="form-group">
                <label for="phone"><b>Phone :</b></label>
                <input type="text" class="form-control" id="phone">
            </div>
            <br>
            <div class="form-group">
                <label for="password"><b>Password :</b></label>
                <input type="password" class="form-control" id="password">
            </div>
            <br>
            <div class="form-group">
                <label for="confirmpassword"><b>Confirm Password :</b></label>
                <input type="password" class="form-control" id="confirmpassword">
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="agreement">
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
    
  
@endsection
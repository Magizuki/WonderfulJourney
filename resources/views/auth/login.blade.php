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

        #select{
            width: 100%;
        }

    </style>

@endsection

@section('content')

<div class="form">
    <br>
    <h1>Login</h1>
    <br>
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="role"><b>Login as :</b></label>
            <br>
            <select class="custom-select" id="select">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="email"><b>Email :</b></label>
            <input type="email" class="form-control" id="email">
        </div>
        <br>
        <div class="form-group">
            <label for="password"><b>Password :</b></label>
            <input type="password" class="form-control" id="password">
        </div>
        <br>
        <div class="button">
            <button type="submit" class="btn btn-outline-primary" id="button">Register</button>
        </div>  
    </form>
    <br>
</div>
    
@endsection
    

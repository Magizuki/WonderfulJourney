@extends('layouts.MasterPage')

@section('title', ' Profile')

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
        <h1>Profile</h1>
        <br>
        <form method="POST" action="/user/profilemenu/{{Auth::user()->id}}">
            @csrf
            <div class="form-group">
                <label for="name"><b>Name :</b></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{Auth::user()->name}}" id="name" name="name" >
                 
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="email"><b>Email :</b></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror " value="{{Auth::user()->email}}" id="email" name="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="phone"><b>Phone :</b></label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{Auth::user()->phone}}" id="phone" name="phone">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <br>
            <div class="button">
                <button type="submit" class="btn btn-outline-primary" id="button">Update</button>
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
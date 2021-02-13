@extends('layouts/MasterPage')

@section('title', 'Full Story')

@section('CSS_Inline')

    <style>
        
        .container{
            text-align: center;
        }

        .description{
            margin: auto;
            width: 50%
        }

        img{
            width: 400px;
            height: 350px;
        }

    </style>

@endsection

@section('content')

    <br>
    <div class="container">
        <h1>{{$article->title}}</h1>
        <br>
        <img src="{{$article->image}}" class="rounded" alt="Article Image">
        <br>
        <br>
        <div class="description">{{$article->description}}</div>
        <br>
        <button type="button" class="btn btn-outline-primary" onclick="window.location = '{{url()->previous()}}'">Back</button>
    </div>
    <br>
@endsection
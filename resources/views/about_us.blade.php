@extends('layouts/MasterPage')

@section('title', 'About-Us')

@section('CSS_Inline')

    <style>

        .title{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .description{
            text-align: center;
            margin: auto;
            width: 50%
        }

    </style>

@endsection

@section('content')
    
    @if (Auth::check())
        <script>window.location = "/greeting" </script>
    @endif
    
    <div class="container">
        <br>
        <h1 class="title">About Us</h1>
        <br>
        <div class="description">
            Wonderful Journey is a website for Indonesia Tourism to share their thought when travelling
            in Indonesia, with this website, various tourism can create blogs about their travelling experience in Indonesia.   
        </div>
    </div>

@endsection
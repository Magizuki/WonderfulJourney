@extends('layouts.MasterPage')

@section('title', 'User Article Menu')

@section('CSS_Inline')

    <style>

        .description{
            overflow: hidden;
            height: 50px; 
        }

        .blueLink{
            color: blue;
            text-decoration: none;
        }

        .col{
            height: 200px;
        }

    </style>

@endsection

@section('content')
    
    <div class="container">
        <br>
        @if (count($articles) == 0)
            <h1>No Blog</h1>
        @else
            <div class="row row-cols-3">
                @foreach ($articles as $article)
                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                        <button type="button" class="btn btn-outline-primary" onclick="window.location = '/admin/usermenu/{{$user_id}}/delete/{{$article->id}}'">Delete</button>
                    </div>
                @endforeach
                {{$articles->links()}}
            </div>
            <br>
        @endif

        <br>
        

    </div>


@endsection
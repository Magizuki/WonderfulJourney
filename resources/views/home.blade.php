@extends('layouts/MasterPage')

@section('title', 'Home')

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

@if (Auth::check())
    <script>window.location = "/greeting" </script>
@endif
    
<div class="container">
    <br>
    <div class="row row-cols-3">

        @foreach ($articles as $article)

            <div class="col">
                <h3>{{$article->title}}</h3>
                <div class="description">
                    {{$article->description}}
                </div>
                <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                <p class="font-italic">Category : <a href="" class="blueLink"><i>{{$article->Category->name}}</i></a></p>
                
            </div>

            <div class="col">
                <h3>{{$article->title}}</h3>
                <div class="description">
                    {{$article->description}}
                </div>
                <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                <p class="font-italic">Category : <a href="" class="blueLink"><i>{{$article->Category->name}}</i></a></p>
                
            </div>

            <div class="col">
                <h3>{{$article->title}}</h3>
                <div class="description">
                    {{$article->description}}
                </div>
                <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                <p class="font-italic">Category : <a href="" class="blueLink"><i>{{$article->Category->name}}</i></a></p>
                
            </div>

            <div class="col">
                <h3>{{$article->title}}</h3>
                <div class="description">
                    {{$article->description}}
                </div>
                <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                <p class="font-italic">Category : <a href="" class="blueLink"><i>{{$article->Category->name}}</i></a></p>
                
            </div>

            <div class="col">
                <h3>{{$article->title}}</h3>
                <div class="description">
                    {{$article->description}}
                </div>
                <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                <p class="font-italic">Category : <a href="" class="blueLink"><i>{{$article->Category->name}}</i></a></p>
                
            </div>

        @endforeach
        {{$articles->links()}}
    </div>
    <br>
</div>

@endsection
    

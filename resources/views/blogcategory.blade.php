@extends('layouts/MasterPage')

@section('title', 'Blog in categorize')

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

        .categorytitle{
            font-family: 'Courier New', Courier, monospace;
        }

        h2{
            text-align: center;
        }

    </style>

@endsection

@section('content')

    @if (Auth::check())
        <script>window.location = "/greeting" </script>
    @endif

    <br>
    <div class="container">
        <h1 class="categorytitle">{{$category->name}}</h1>
        <br>
        @if($count > 0)
            <div class="row row-cols-3">

                @foreach ($articles as $article)

                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                    
                    </div>

                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                    
                    </div>

                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                    </div>

                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                    </div>

                    <div class="col">
                        <h3>{{$article->title}}</h3>
                        <div class="description">
                            {{$article->description}}
                        </div>
                        <p>...<a href="/fullstory/{{$article->id}}" class="blueLink">full story</a></p>
                    </div>

                @endforeach
                {{$articles->links()}}
            </div>
        @else
            <h2>Blog are empty in this category</h2>
        @endif
        
        <br>
    </div>

    
@endsection
    

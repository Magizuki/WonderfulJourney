@extends('layouts.MasterPage')

@section('title', ' Blog Menu')

@section('CSS_Inline')
    <style>
        .table_container{
            margin: auto;
            width: 50%
        }
        
        .blueLink{
            color: blue;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="table_container">
        <button type="button" class="btn btn-outline-primary" onclick="window.location = '/user/createblog'">Create Blog</button>
        @if (count($articles) == 0)
            <br>
            <br>
            <h1>No Blog</h1>
        @else
            <br>
            <br>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td> <a href="/fullstory/{{$article->id}}" class="blueLink">{{$article->title}}</a></td>
                            <td><button type="button" class="btn btn-outline-primary" onclick="window.location = '/user/blogmenu/delete/{{$article->id}}'">Delete</button></td> 
                        </tr>
                    @endforeach
                    {{$articles->links()}}
                </tbody>
            </table> 
        @endif
    </div>
@endsection
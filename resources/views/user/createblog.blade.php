@extends('layouts.MasterPage')

@section('title', 'Create Blog')

@section('CSS_Inline')
    <style>

        .form{
            margin: auto;
            width: 40%
        }

        .button{
            margin: auto;
            text-align: center;
        }

        #category{
            width: 100%;
        }

    </style>
@endsection

@section('content')

    <div class="form">
        <br>
        <h3>New Blog</h3>
        <br>
        <form method="POST" action="/user/createblog/doCreateBlog/{{Auth::user()->id}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title"><b>Title :</b></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Title Here">

                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="category"><b>Category :</b></label>
                <br>
                <select class="custom-select" name="category" id="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="formFile" class="form-label"><b>Photo :</b></label>
                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo">

                @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="form-group">
                <label for="story"><b>Story :</b></label>
                <textarea class="form-control @error('story') is-invalid @enderror" rows="3" id="story" name="story"></textarea>

                @error('story')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <br>
            <div class="button">
                <button type="submit" class="btn btn-outline-primary" id="button">Create</button>
            </div>  
        </form>
        <br>
    </div>
    
@endsection
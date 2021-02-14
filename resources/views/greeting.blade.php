@extends('layouts.MasterPage')

@section('title', 'Greeting')

@section('CSS_Inline')
    <style>

    </style>
@endsection

@section('content')

    @if (!Auth::check())
        <script>window.location = "/" </script>
    @endif
    
    <br>
    <div class="container">
        Welcome {{Auth::user()->name}}
    </div>

@endsection
    

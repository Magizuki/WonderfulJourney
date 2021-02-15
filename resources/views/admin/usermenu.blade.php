@extends('layouts.MasterPage')

@section('title', 'User Menu')

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
        @if (count($users) == 0)
            <h1>No User</h1>
        @else
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> <a href="/admin/usermenu/{{$user->id}}" class="blueLink">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td><button type="button" class="btn btn-outline-primary" onclick="window.location = '/delete/user/{{$user->id}}'">Delete</button></td> 
                        </tr>
                    @endforeach
                    {{$users->links()}}
                </tbody>
            </table> 
        @endif
    </div>
@endsection


    

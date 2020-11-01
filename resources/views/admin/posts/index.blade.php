@extends('layouts.admin')



@section('content')

    <h1>Post</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category?$post->category->name:'Uncategorized'}}</td>
                    <td><img height="50" src="images/{{$post->photo?$post->photo->file:'nothing'}}" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffforHumans()}}</td>
                    <td>{{$post->updated_at->diffforHumans()}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

    @stop

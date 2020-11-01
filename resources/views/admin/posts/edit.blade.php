@extends('layouts.admin')



@section('content')

<h1>Edit Post</h1>


{!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id',[''=>'Choose Categories']+$categories,null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('photo_id', 'File') !!}
    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description:') !!}
    {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Submit('Update Post',['class'=>'form-control']) !!}
</div>



{!! Form::close() !!}



@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@stop

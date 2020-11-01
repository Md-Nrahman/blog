@extends('layouts.admin')



@section('content')
    <h1>Categories</h1>


    <div class="col-sm-6">
        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::Submit('Update Category',['class'=>'form-control']) !!}
        </div>



        {!! Form::close() !!}
    </div>


    <div class="col-sm-6">
        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}





        <div class="form-group">
            {!! Form::Submit('Delete Category',['class'=>'btn btn-danger']) !!}
        </div>



        {!! Form::close() !!}
    </div>

@stop

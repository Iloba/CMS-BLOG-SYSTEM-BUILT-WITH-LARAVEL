@extends('layouts.app')

@section('content') <br>
    <h1> Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'Method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'Placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'Placeholder' => 'body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       
        {!! Form::close() !!}
@endsection
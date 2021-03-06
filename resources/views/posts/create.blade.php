@extends('layouts.app')

@section('content') <br>
    <h1> Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store', 'Method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'Placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'Placeholder' => 'body Text'])}}
        </div>
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
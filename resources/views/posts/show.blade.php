@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-info">Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}, by {{$post->user->name}}</small> <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
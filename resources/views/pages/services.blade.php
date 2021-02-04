@extends('layouts.app')
@section('content') <br>
        <h1>{{$title}}</h1>
        <ul class="list-group">
            @if (count($services) > 0)
                @foreach ($services as $service)
                 <li class="list-group-item">{{$service}}</li>
                @endforeach
            @endif
        </ul>
       
@endsection

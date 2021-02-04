@extends('layouts.app') 
@section('content')
    <h2>{{$weare}}</h2>
    <h2>{{$wedo}}</h2>
    <ul>
        @if (count($coreValues) > 0)
            @foreach ($coreValues as $coreValue)
                <li>{{$coreValue}}</li>
            @endforeach
        @endif
    </ul>
@endsection

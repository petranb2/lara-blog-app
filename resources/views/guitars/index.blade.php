@extends('layouts.app')
@section('title','Guitars Page')
@section('content')
<h1>Guitars Page</h1>
<div>
    @foreach ($guitars as $guitar)
    <div>
        <h3>{{$guitar["name"]}}</h3>
        <h5>{{$guitar["id"]}}</h5>
    </div>
    @endforeach
</div>
@endsection
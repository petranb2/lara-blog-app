@extends('layouts.app')
@section('title','Guitars Show Page')
@section('content')
<h1>Guitars List Page</h1>
<div>
    <h3>{{$guitar["name"]}}</h3>
    <h5>{{$guitar["id"]}}</h5>
</div>
@endsection
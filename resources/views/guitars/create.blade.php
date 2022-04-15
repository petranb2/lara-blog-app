@extends('layouts.app')
@section('title','Guitars Create Page')
@section('content')
    <h1>Guitars Create Page</h1>
    <div class="w3-container w3-margin">


        <div class="w3-card-4" style="width:50%">
            <div class="w3-container w3-green">
                <h2>Input Form</h2>
            </div>

            <form class="w3-container" method="POST" action="{{route( 'guitars.store')}}">
                @csrf
                <p>
                    <input class="w3-input" type="text" name="guitar_name" value="{{ old('guitar_name')}}">
                    <label>Guitar Name</label>
                @error('guitar_name')
                <div class="w3-text-red">
                    {{ $message}}
                </div>
                @enderror
                </p>
                <p>
                    <input class="w3-input" type="text" name="brand" value="{{ old('brand')}}">
                    <label>Brand</label>
                @error('brand')
                <div class="w3-text-red">
                    {{ $message}}
                </div>
                @enderror
                </p>
                <p>
                    <input class="w3-input" name="year" type="number" min="1900" max="2099" step="1"
                           value="{{ old('year')}}">
                    <label>Year made</label>
                @error('year')
                <div class="w3-text-red">
                    {{ $message}}
                </div>
                @enderror
                </p>
                <p>
                    <button class="w3-button w3-black w3-round-large" type="submit">Submit</button>
                </p>
            </form>
        </div>
    </div>
@endsection

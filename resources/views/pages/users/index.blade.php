@extends('layouts.app')

@section('title','')

@section('content')
{{ Auth::user()->name }}


<form action="/profile">
    <input type="file" name="image" id="">
    <input type="submit">
</form>
@endsection
@extends('layouts.app')

@section('title','')

@section('content')
{{ Auth::user()->uName }}


<form action="/profile">
    <input type="file" name="image" id="">
    <input type="submit">
</form>
@endsection
@extends('layouts.app')

@section('title','')

@section('content')
{{ Auth::user()->name }}
@endsection
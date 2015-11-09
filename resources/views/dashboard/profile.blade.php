@extends('layouts.dashboard')

@section('content')

    <h1>{{ Auth::user()->name }}</h1>

@stop('content')
@extends('layouts.frontend.master')

@section('content')
    <div id="app">
        <Home />
    </div>
    <a href="{{ route('admin') }}" class="btn btn-primary">Admin Page</a>
@endsection
@extends('layouts.frontend.master')

@section('content')
    <div id="app">
    <h1>FE - Here!</h1>

        <a href="{{ route('admin') }}" class="btn btn-primary">Admin Page</a>
    </div>
@endsection
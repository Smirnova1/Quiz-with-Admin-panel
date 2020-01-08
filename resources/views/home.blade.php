@extends('layouts.app')
@section('content')
    <div class="px-5">
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('CategoryController@index')}}">Select category</a></li>
        </ul>
    </div>
@endsection
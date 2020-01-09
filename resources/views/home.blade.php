@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <ul class="list-unstyled">
            <li><a class="custom-link title-text"
                   href="{{action('CategoryController@index')}}">Select category</a></li>
        </ul>
    </div>
@endsection
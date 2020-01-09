@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('HomeController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <ul class="list-unstyled">
            @foreach($categories as $category)
                <li><a class="custom-link"
                       href="{{action('CategoryController@show', $category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
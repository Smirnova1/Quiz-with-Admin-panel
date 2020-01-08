@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\IndexController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('Admin\CategoryController@create')}}">ADD CATEGORY</a></li>
            @foreach($categories as $category)
                <li><a class="custom-link" href="{{action('Admin\CategoryController@show', $category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>

    </div>
@endsection
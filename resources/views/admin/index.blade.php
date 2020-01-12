@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('Admin\CategoryController@index')}}">Categories</a></li>
            <li><a class="custom-link" href="{{action('Admin\TopicController@index')}}">Topics</a></li>
            <li><a class="custom-link" href={{action('Admin\QuestionController@index')}}>Questions</a></li>
        </ul>
    </div>
@endsection
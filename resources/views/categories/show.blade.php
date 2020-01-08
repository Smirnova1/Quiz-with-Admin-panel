@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('CategoryController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>

        <div>{{$category->name}}</div>
        <div>Select topic:</div>
        <ul class="list-unstyled">
            @foreach($category->topics as $topic)
                <li><a class="custom-link" href="{{action('TopicController@show', $topic->id)}}">{{$topic->name}}</a></li>
            @endforeach
                <li><a class="custom-link" href="{{action('TopicController@index')}}">All topics</a></li>
        </ul>

    </div>
@endsection
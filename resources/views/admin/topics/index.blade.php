@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\IndexController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('Admin\TopicController@create')}}">ADD TOPIC</a></li>
            @foreach($topics as $topic)
                <li><a class="custom-link" href="{{action('Admin\TopicController@show', $topic->id)}}">{{$topic->name}}</a></li>
            @endforeach
        </ul>

    </div>
@endsection
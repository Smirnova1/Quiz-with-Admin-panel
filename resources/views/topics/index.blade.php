@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{action('CategoryController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>

        <ul class="list-unstyled">
            @foreach($topics as $topic)
                <li><a class="custom-link"
                       href="{{action('TopicController@show', $topic->id)}}">{{$topic->name}}</a></li>
            @endforeach
        </ul>

    </div>
@endsection
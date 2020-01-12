@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <ul class="list-unstyled">
            <li><a class="custom-link title-text"
                   href="{{action('Admin\TopicController@create')}}">ADD TOPIC</a></li>
            @foreach($topics as $topic)
                <li><a class="custom-link"
                       href="{{action('Admin\TopicController@show', $topic->id)}}">{{$topic->name}}</a></li>
            @endforeach
        </ul>
        {{ $topics->links() }}
    </div>
@endsection
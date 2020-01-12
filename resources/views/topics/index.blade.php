@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <ul class="list-unstyled">
            @foreach($topics as $topic)
                <li><a class="custom-link"
                       href="{{action('TopicController@show', $topic->id)}}">{{$topic->name}}</a></li>
            @endforeach
        </ul>
        {{ $topics->links() }}
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <ul class="list-unstyled">
            <li><a class="custom-link title-text"
                   href="{{action('Admin\QuestionController@create')}}">ADD QUESTION</a></li>
            @foreach($questions as $question)
                <li><a class="custom-link" href="{{action('Admin\QuestionController@show', $question->id)}}">
                        {{$question->text}}
                    </a>
                </li>
            @endforeach
        </ul>
        {{ $questions->links() }}
    </div>
@endsection
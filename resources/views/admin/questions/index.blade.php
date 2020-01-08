@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\IndexController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('Admin\QuestionController@create')}}">ADD QUESTION</a></li>
            @foreach($questions as $question)
                <li><a class="custom-link" href="{{action('Admin\QuestionController@show', $question->id)}}">
                        {{$question->text}}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
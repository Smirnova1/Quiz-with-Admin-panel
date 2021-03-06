@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <a class="custom-link" href="{{action('Admin\QuestionController@edit', $question->id)}}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit
        </a>
        <form method="POST" action="{{action('Admin\QuestionController@destroy', $question->id)}}"
              accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn custom-link content" onclick="return confirm(&quot;Confirm delete?&quot;)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
        <div class="title-text">{{$question->text}}</div>
        <div class="title-text">Type:</div>
        <div>{{$question->type}}</div>
        <div class="title-text">Options:</div>
        <ul class="list-unstyled">
            @foreach($question->options as $option)
                <li>{{$option->text}}</li>
            @endforeach
        </ul>
        <div class="title-text">Correct options:</div>
        <ul class="list-unstyled">
            @foreach($question->getCorrectOptions() as $key => $value)
                <li>{{$value}}</li>
            @endforeach
        </ul>
        <div class="title-text">Topics:</div>
        <ul class="list-unstyled">
            @foreach($question->topics as $topic)
                <li>{{$topic->name}}</li>
            @endforeach
        </ul>

    </div>
@endsection
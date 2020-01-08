@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\QuestionController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <a class="custom-link" href="{{action('Admin\QuestionController@edit', $question->id)}}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit
        </a>
        <form method="POST" action="{{action('Admin\QuestionController@destroy', $question->id)}}"
              accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn custom-link" onclick="return confirm(&quot;Confirm delete?&quot;)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
        <div>{{$question->text}}</div>
        <div>Type: {{$question->type}}</div>
        <div>Options:</div>
        <ul class="list-unstyled">
            @foreach($question->options as $option)
                <li>{{$option->text}}</li>
            @endforeach
        </ul>
        <div>Correct options:</div>
        <ul class="list-unstyled">
            <li>{{$question->getCorrectOptions()}}</li>
        </ul>
        <div>Topics:</div>
        <ul class="list-unstyled">
            @foreach($question->topics as $topic)
                <li>{{$topic->name}}</li>
            @endforeach
        </ul>

    </div>
@endsection
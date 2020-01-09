@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{action('Admin\OptionController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <a class="custom-link" href="{{action('Admin\OptionController@edit', $option->id)}}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit
        </a>
        <form method="POST" action="{{action('Admin\OptionController@destroy', $option->id)}}" accept-charset="UTF-8"
              style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn custom-link content"
                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
        <div class="title-text">{{$option->text}}</div>
        @if($option->is_correct == 1)
            <div>This is correct option.</div>
        @endif
        <div class="title-text">Question:</div>
        @if(!empty($option->question->text))
            <div>{{$option->question->text}}</div>
            <div class="title-text">Type of question:</div>
            <div>{{$option->question->type}}</div>
        @endif

    </div>
@endsection
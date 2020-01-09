@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{action('Admin\TopicController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <a class="custom-link" href="{{action('Admin\TopicController@edit', $topic->id)}}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit
        </a>
        <form method="POST" action="{{action('Admin\TopicController@destroy', $topic->id)}}" accept-charset="UTF-8"
              style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn custom-link content" onclick="return confirm(&quot;Confirm delete?&quot;)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
        <div class="title-text">{{$topic->name}}</div>
        <div class="title-text">Categories:</div>
        <ul class="list-unstyled">
            @foreach($topic->categories as $category)
                <li>{{$category->name}}</li>
            @endforeach
        </ul>

    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{action('Admin\CategoryController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <a class="custom-link" href="{{action('Admin\CategoryController@edit', $category->id)}}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit
        </a>
        <form method="POST" action="{{action('Admin\CategoryController@destroy', $category->id)}}"
              accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn custom-link content"
                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
            </button>
        </form>
        <div class="title-text">{{$category->name}}</div>
        <div class="title-text">Topics:</div>
        <ul class="list-unstyled">
            @foreach($category->topics as $topic)
                <li>{{$topic->name}}</li>
            @endforeach
        </ul>

    </div>
@endsection
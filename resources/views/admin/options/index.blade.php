@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\OptionController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <ul class="list-unstyled">
            <li><a class="custom-link" href="{{action('Admin\OptionController@create')}}">ADD OPTION</a></li>
            @foreach($options as $option)
                <li><a class="custom-link"
                       href="{{action('Admin\OptionController@show', $option->id)}}">{{$option->text}}</a></li>
            @endforeach
        </ul>

    </div>
@endsection
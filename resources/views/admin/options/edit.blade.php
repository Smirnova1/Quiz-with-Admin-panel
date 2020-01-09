@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{action('Admin\OptionController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <div class="title-text">Edit Option #{{ $option->id }}</div>

        <form method="POST" action="{{action('Admin\OptionController@update', $option->id)}}"
              accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.options.form', ['formMode' => 'edit'])

        </form>


    </div>
@endsection
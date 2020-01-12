@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <div class="title-text">Edit Topic #{{ $topic->id }}</div>
        <form method="POST" action="{{action('Admin\TopicController@update', $topic->id)}}"
              accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.topics.form', ['formMode' => 'edit'])

        </form>


    </div>
@endsection
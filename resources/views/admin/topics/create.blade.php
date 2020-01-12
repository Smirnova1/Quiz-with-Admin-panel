@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <div class="title-text">Create new Topic:</div>
        <form method="POST" action="{{action('Admin\TopicController@store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.topics.form', ['formMode' => 'create'])

        </form>

    </div>
@endsection
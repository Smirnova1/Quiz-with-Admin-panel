@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <div class="title-text">Edit Question #{{ $question->id }}</div>

        <form method="POST" action="{{action('Admin\QuestionController@update', $question->id)}}"
              accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.questions.form', ['formMode' => 'edit'])

        </form>


    </div>
@endsection
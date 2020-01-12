@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <div class="title-text">Create new Category:</div>
        <form method="POST" action="{{action('Admin\CategoryController@store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.categories.form', ['formMode' => 'create'])

        </form>

    </div>
@endsection
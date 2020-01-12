@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <div class="title-text">Edit Category #{{ $category->id }}</div>

        <form method="POST" action="{{action('Admin\CategoryController@update', $category->id)}}"
              accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.categories.form', ['formMode' => 'edit'])

        </form>


    </div>
@endsection
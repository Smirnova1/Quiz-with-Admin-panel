@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\CategoryController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <div>Edit Category #{{ $category->id }}</div>

        <form method="POST" action="{{action('Admin\CategoryController@update', $category->id)}}"
              accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.categories.form', ['formMode' => 'edit'])

        </form>


    </div>
@endsection
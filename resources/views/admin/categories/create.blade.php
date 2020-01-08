@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\CategoryController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <div>Create new Category:</div>
        <form method="POST" action="{{action('Admin\CategoryController@store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.categories.form', ['formMode' => 'create'])

        </form>

    </div>
@endsection
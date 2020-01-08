@extends('layouts.app')
@section('content')
    <div class="px-5">
        <a class="custom-link" href="{{action('Admin\OptionController@index')}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <div>Create new Option:</div>
        <form method="POST" action="{{action('Admin\OptionController@store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('admin.options.form', ['formMode' => 'create'])

        </form>

    </div>
@endsection
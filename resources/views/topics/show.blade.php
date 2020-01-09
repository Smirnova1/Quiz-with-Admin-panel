@extends('layouts.app')
@section('content')
    <div class="px-5 content">
        <a class="custom-link" href="{{url()->previous()}}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            back
        </a>
        <div class="title-text">{{$topic->name}}</div>

        <form method="POST" action="{{action('ResultController@store')}}" accept-charset="UTF-8"
              class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('topics.form')

        </form>

    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <ul class="list-unstyled">
            <li><a class="custom-link title-text"
                   href="{{action('Admin\CategoryController@create')}}">ADD CATEGORY</a></li>
            @foreach($categories as $category)
                <li><a class="custom-link"
                       href="{{action('Admin\CategoryController@show', $category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>

        {{ $categories->links() }}

    </div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="px-5 content">

        @include('back')

        <ul class="list-unstyled">
            @foreach($categories as $category)
                <li><a class="custom-link"
                       href="{{action('CategoryController@show', $category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
        {{ $categories->links() }}
    </div>
@endsection
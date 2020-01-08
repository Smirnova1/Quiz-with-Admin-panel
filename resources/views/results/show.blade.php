@extends('layouts.app')
@section('content')
    <div class="px-5">
        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col" class="font-weight-bold text-secondary">{{$result->user->name}}, your results are:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Date:</th>
                <td> {{$result->created_at}}</td>
            </tr>
            <tr>
                <th scope="row">Topic:</th>
                <td> {{$result->topic->name}}</td>
            </tr>
            </tbody>
        </table>
        <table class="table table-borderless">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">Your answer</th>
                <th scope="col">Correct answer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result->userOptions()->get() as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->question}}</td>
                    <td>{{$item->user_option }}</td>
                    <td>{{$item->correct_option }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
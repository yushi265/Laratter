@extends('layouts.app')

@section('content')
    <div class="container">
        @include('users.card')
        @foreach ($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection

@extends('app')

@section('content')
@include('nav')
    <div class="container">
        @include('maypages.card')
        @foreach ($articles as $article)
            @include('articles.card')
        @endforeach
    </div>
@endsection

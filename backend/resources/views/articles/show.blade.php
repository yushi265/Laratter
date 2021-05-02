@extends('app')

@section('title', '投稿詳細')

@section('content')
    @include('nav')
    <div class="container">
        <p>投稿詳細</p>
        @include('articles.card')
    </div>
@endsection

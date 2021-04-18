@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($articles as $article)
        @include('articles.card')
    @endforeach
</div>
@endsection

@extends('layouts.app')

@section('title', '投稿編集')

@section('content')
    <div class="container">
        @include('articles.errors')
        <div class="card  ">
            <div class="card-body">
                <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
                    <p>投稿編集</p>
                    @method('patch')
                    @include('articles.form')
                    <button type="submit" class="btn btn-primary btn-block mb-4">編集</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', '新規投稿')

@section('content')
    <div class="container">
        <div class="card  ">
            <div class="card-body">
                <form action="{{ route('articles.store') }}" method="POST">
                    <p>新規投稿</p>
                    @include('articles.form')
                    <button type="submit" class="btn btn-primary btn-block mb-4">投稿</button>
                </form>
            </div>
        </div>
    </div>
@endsection
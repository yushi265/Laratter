<div class="card mt-3 mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $article->user->name}}</h5>
        <p>{{$article->created_at}}</p>
        <p class="card-text">
            {{ $article->body }}
        </p>
        <a href="{{ route('articles.edit', ['article' => $article]) }}" type="button" class="btn btn-primary">編集</a>
        <button type="button" class="btn btn-danger">削除</button>
    </div>
</div>

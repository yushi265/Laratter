<div class="card mt-3 mb-3">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('users.show', ['name' => $article->user->name]) }}">
                {{ $article->user->name }}
            </a>
        </h5>
        <p>{{ $article->created_at }}</p>
        <p class="card-text">
            <a href="{{ route('articles.show', ['article' => $article]) }}">
                {{ $article->body }}
            </a>
        </p>
        @if (Auth::id() === $article->user_id)
            <a href="{{ route('articles.edit', ['article' => $article]) }}" type="button"
                class="btn btn-primary">編集</a>
            <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">削除</button>
            </form>
        @endif
        <article-like :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
            :initial-count-likes='@json($article->count_likes)' :authorized='@json(Auth::check())'
            endpoint='{{ route('articles.like', ['article' => $article]) }}'>
        </article-like>
    </div>
    @foreach ($article->tags as $tag)
        @if ($loop->first)
            <div class="card-body pt-0 pb-4 pl-3">
                <div class="card-text line-height">
        @endif
        <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
            {{ $tag->hashtag }}
        </a>
        @if ($loop->last)
    </div>
    </div>
@endif
@endforeach
</div>

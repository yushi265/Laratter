<div class="card mt-3 mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $article->user->name}}</h5>
        <p>{{$article->created_at}}</p>
        <p class="card-text">
            {{ $article->body }}
        </p>
    </div>
</div>

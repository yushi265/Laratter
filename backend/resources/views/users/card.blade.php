<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text">
        </p>
        <follow-button
            :initial-followed-by='@json($user->isFollowedBy(Auth::user()))'
            :authorized='@json(Auth::check())'
            endpoint='{{ route('users.follow', ['name' => $user->name])}}'
        >
        </follow-button>
    </div>
</div>

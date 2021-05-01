<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text">
        </p>
        <follow-button
            :initial-followed-by='@json($user->isFollowedBy(Auth::user()))'
        >
        </follow-button>
    </div>
</div>

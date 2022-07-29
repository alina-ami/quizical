<div class="card card-background card-background-mask-primary mb-4">
    <div class="card-body d-flex flex-column justify-content-center text-center">
        <h4 class="text-white mb-0 mt-2 up">Answers</h4>
        <h4 class="text-white mb-0 up">{{ $user->answers_count }}</h4>
    </div>
</div>

<div class="card card-background card-background-mask-primary mb-4">
    <div class="card-body d-flex flex-column justify-content-center text-center">
        <h4 class="text-white mb-0 mt-2 up">Total of points</h4>
        <h4 class="text-white mb-0 up">{{ $user->total_points_earned }}</h4>
    </div>
</div>

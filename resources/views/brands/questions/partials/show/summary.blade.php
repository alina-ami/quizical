    <div class="card h-100">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <h6 class="mb-0">Question Profile</h6>
                </div>
                <div class="col-md-4 text-end">
                    <a href="{{ route('brands.questions.edit', $question->id) }}">
                        <i class="fa-solid fa-pen-to-square text-secondary text-sm" data-bs-toggle="tooltip"
                            data-bs-placement="top" aria-hidden="true" aria-label="Edit Question"></i><span
                            class="sr-only">Edit Profile</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <p class="text-sm">
                {{ $question->title }}
            </p>
            <hr class="horizontal gray-light my-1">

            <p class="mb-0">Target</p>
            <ul class="list-group">
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">Answers:</strong>
                    &nbsp; {{ $question->min_reach }}
                </li>
                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                    <strong class="text-dark">Age:</strong>
                    &nbsp; {{ $question->min_age }} - {{ $question->max_age }} years
                </li>
                <li class="list-group-item border-0 ps-0 text-sm">
                    <strong class="text-dark">Genders:</strong>
                    &nbsp;
                    @foreach ($question->genders as $gender)
                        <span class="badge badge-primary">{{ $gender }}</span>
                    @endforeach
                </li>
                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                    <strong class="text-dark">Due Date:</strong>
                    &nbsp; {{ $question->due_at->format('Y/m/d') }}
                </li>
            </ul>


        </div>
    </div>

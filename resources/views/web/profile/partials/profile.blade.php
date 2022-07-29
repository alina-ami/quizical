<div class="card me-4 ">
    <div class="card-header pb-0 p-3">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Apprentice level</h6>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('web.profile.create') }}">
                    <i class="fa-solid fa-user-pen text-secondary text-sm"></i>
                    <span class="text-secondary">&nbsp;Edit profile</span>

                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0 text-primary"></h6>
            </div>
        </div>
    </div>
    <div class="card-body p-3">
        <hr class="horizontal gray-light my-1">

        <ul class="list-group">
            <li class="list-group-item border-0 ps-0 text-sm">
                <strong class="text-dark">Answers:</strong>
                &nbsp; {{ $user->answers_count }}
            </li>
            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                <strong class="text-dark">Points earned for answers:</strong>
                &nbsp; {{ $user->total_points_earned % 2 }}
            </li>
            <li class="list-group-item border-0 ps-0 text-sm">
                <strong class="text-dark">Points earned for relevance:</strong>
                &nbsp; {{ $user->total_points_earned % 2 }}
            </li>
            <li class="list-group-item border-0 ps-0 text-sm">
                <strong class="text-dark">No of questions answered:</strong>
                &nbsp; {{ $user->answers_count }}
            </li>
        </ul>

        <ul class="list-group mt-3">
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold">You need 25 more points to reach the
                            next
                            level</span>
                        <span class="ms-auto text-sm font-weight-bold">40%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-gradient-success w-40" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold">You need 7 more points to get your next
                            reward!</span>
                        <span class="ms-auto text-sm font-weight-bold">75%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                            <div class="progress-bar bg-gradient-info w-75" role="progressbar" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

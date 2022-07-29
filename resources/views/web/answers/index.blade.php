@extends('web._layout.app')

@section('content')
    <div class="offset-md-1">
        <h4 class="mb-4">Your answers</h4>

        <div class="row mb-4 ms-1">
            <div class=" col-12 col-md-7 me-4 card">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0 text-primary">Apprentice level</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <hr class="horizontal gray-light my-1">

                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 text-sm">
                            <strong class="text-dark">Answers:</strong>
                            &nbsp; {{ $answersCount }}
                        </li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                            <strong class="text-dark">Points earned for answers:</strong>
                            &nbsp; {{ $user->total_points_earned - 2 }}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm">
                            <strong class="text-dark">Points earned for relevance:</strong>
                            &nbsp; {{ $user->total_points_earned - 3 }}
                        </li>
                        <li class="list-group-item border-0 ps-0 text-sm">
                            <strong class="text-dark">No of questions answered:</strong>
                            &nbsp; {{ $answersCount }}
                        </li>
                    </ul>

                    <ul class="list-group mt-3">
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="w-100">
                                <div class="d-flex mb-2">
                                    <span class="me-2 text-sm font-weight-bold">You need 25 more points to reach the next
                                        level</span>
                                    <span class="ms-auto text-sm font-weight-bold">40%</span>
                                </div>
                                <div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-gradient-success w-40" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="w-100">
                                <div class="d-flex mb-2">
                                    <span class="me-2 text-sm font-weight-bold">You need 7 more points to get your next reward!</span>
                                    <span class="ms-auto text-sm font-weight-bold">75%</span>
                                </div>
                                <div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-gradient-info w-75" role="progressbar"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12, col-md-4 mt-4">
                <div class="col-12 card card-background card-background-mask-primary mb-4">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <h4 class="text-white mb-0 mt-2 up">Answers</h4>
                        <h4 class="text-white mb-0 up">{{ $answersCount }}</h4>
                    </div>
                </div>

                <div class="col-12 card card-background card-background-mask-primary mb-4">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <h4 class="text-white mb-0 mt-2 up">Total of points</h4>
                        <h4 class="text-white mb-0 up">{{ $user->total_points_earned }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <x-table :headers="['Question', 'Answer', 'Points earned']" :data="$answers">
                @foreach ($answers as $item)
                    <tr>
                        <td>{{ $item->question->title }}</td>
                        <td>{{ $item->answer }}</td>
                        <td class="text-end">{{ $item->points_earned }}</td>
                        {{-- <td class="align-middle">
                            <x-row-actions :model="$item" base-route="web.answers" />
                        </td> --}}
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
@endsection

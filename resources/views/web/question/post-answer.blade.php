@extends('web._layout.app')

@section('content')
<div class="col-lg-9 col-12 mx-auto">
    <div class="card card-body mt-4">
        <h5 class="mb-0">{{$question->title}}</h5>
        <hr class="horizontal dark my-3">

        <div>
            <p>Your answer was submitted successfully! ✅</p>
            <p>You earned <strong>{{$answer->points_earned}}</strong> points.</p>
        </div>

        <div class="row d-flex justify-content-center">
            <a href="{{route('web.home')}}" class="col-5">
                <button class="btn bg-gradient-primary">Discover more challenges</button>
            </a>
        </div>
    </div>
</div>
@endsection

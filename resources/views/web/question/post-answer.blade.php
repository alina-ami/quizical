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

        <a href="{{route('web.home')}}">
            <button class="col-6 btn bg-gradient-primary">Discover more challenges</button>
        </a>
    </div>
</div>
@endsection

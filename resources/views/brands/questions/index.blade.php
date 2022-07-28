@extends('brands._layout.app')

@section('content')
    @include('brands.questions.partials.index.statistics')

    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 mb-4">
            @include('brands.questions.partials.index.add-question')
        </div>
    </div>
@endsection

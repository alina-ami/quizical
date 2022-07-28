@extends('web._layout.app')

@section('content')
<div class="col-lg-9 col-12 mx-auto">
    <div class="card card-body mt-4">
        <h5 class="mb-0">{{$question->title}}</h5>
        <hr class="horizontal dark my-3">

        <x-form action="{{route('web.questions.store-answer', ['question' => $question])}}" method="POST">
            <x-textarea label="Answer" name="answer" />

            <div class="d-flex justify-content-center mt-4">
                <button type="submit" name="button" class="btn bg-gradient-primary m-0 ms-2">Submit</button>
            </div>
        </x-form>
    </div>
</div>
@endsection

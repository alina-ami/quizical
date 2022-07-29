@extends('web._layout.app')

@section('content')
    <div class="container content">
        <h2 class="mb-1">
            <span class="text-muted">Hello</span>
            {{ Auth::user()->name }}
        </h2>
        <h3 class="mb-4">Let's start winning!</h3>
        <div class="row">
            @foreach ($questions as $question)
                <div class="col-12 col-md-6">
                    <x-question-view :question="$question" buttonName="Answer" />
                </div>
            @endforeach

            <div class="col-12">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
@endsection

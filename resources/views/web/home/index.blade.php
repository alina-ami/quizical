@extends('web._layout.app')

@section('content')
    <div class="offset-1">
        <h2 class="mb-1">Hello</h2>
        <h2 class="mb-4">{{ Auth::user()->name }}</h2>

        <div class="row">
            @foreach($questions as $question)
                <x-question-view :question="$question" buttonName="Answer" />
            @endforeach
        </div>
    </div>
@endsection

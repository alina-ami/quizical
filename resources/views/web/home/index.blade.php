@extends('web._layout.app')

@section('content')
    <h2 class="mb-1">Hello</h2>
    <h2 class="mb-4">{{ Auth::user()->name }}</h2>

    @foreach($questions as $question)
        <x-question-view :title="$question->title" :brand="$question->brand->name" buttonName="Answer" />
    @endforeach

    <br><br><br>
    <a href="{{ route('brands.auth.login') }}">Login brand</a>
@endsection

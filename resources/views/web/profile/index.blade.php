@extends('web._layout.app')

@section('content')
    <div class="container content">
        <h4 class="mb-4">Your answers</h4>

        <div class="row mb-4 ms-1">
            <div class="col-12 col-md-7">
                @include('web.profile.partials.profile')</div>

            <div class="col-12 col-md-5">
                @include('web.profile.partials.score')</div>


            <div class="col-12 mt-5">
                <x-table :headers="['Question', 'Answer', 'Points earned']" :data="$answers">
                    @foreach ($answers as $item)
                        <tr>
                            <td>{{ Str::limit($item->question->title, 75) }}</td>
                            <td>{{ Str::limit($item->answer, 75) }}</td>
                            <td class="text-end">{{ $item->points_earned }}</td>
                        </tr>
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>
@endsection

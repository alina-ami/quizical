@extends('web._layout.app')

@section('content')
    <div class="offset-md-1">
        <h2 class="mb-1">Hello</h2>
        <h2 class="mb-4">{{ Auth::user()->name }}</h2>


        <div>
            <x-table :headers="['Question', 'Answer', 'Points earned']" :data="$answers">
                @foreach ($answers as $item)
                    <tr>
                        <td>{{ $item->question_id }}</td>
                        <td>{{ $item->answer }}</td>
                        <td class="text-end">{{ $item->points_earned }}</td>
                        <td class="align-middle">
                            <x-row-actions :model="$item" base-route="web.answers" />
                        </td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
@endsection

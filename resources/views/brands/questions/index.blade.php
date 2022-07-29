@extends('brands._layout.app')

@section('content')
    <div class="d-sm-flex justify-content-between">
        <div>
            <a href="{{ route('brands.questions.create') }}" class="btn btn-icon bg-gradient-primary">New Question</a>
        </div>
    </div>

    <x-table :headers="['Question', 'Review', 'Responses', 'Due Date', 'Actions']" :data="$questions">
        @foreach ($questions as $item)
            <tr>
                <td><a href="{{ route('brands.questions.show', $item->id) }}">{{ $item->title }}</a></td>
                <td>
                    <x-question-reaction :value="$item->title" />
                </td>
                <td class="text-end">{{ strlen($item->title) }}</td>
                <td class="text-end">{{ $item->due_at->format('Y/m/d') }}</td>
                <td class="align-middle">
                    <x-row-actions :model="$item" base-route="brands.questions" />
                </td>
            </tr>
        @endforeach
    </x-table>
@endsection

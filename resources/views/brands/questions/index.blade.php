@extends('brands._layout.app')

@section('content')
    <div class="d-sm-flex justify-content-between">
        <div>
            <a href="{{ route('brands.questions.create') }}" class="btn btn-icon bg-gradient-primary">New Question</a>
        </div>
    </div>

    <x-table :headers="['Question', 'Sentiment', '# Answers', 'Due Date', 'Actions']" :data="$questions">
        @foreach ($questions as $item)
            <tr>
                <td><a href="{{ route('brands.questions.show', $item->id) }}">{{ Str::limit($item->title, 70) }}</a></td>
                <td>
                    <x-question-reaction :value="$item->sentiment" />
                </td>
                <td class="text-end">{{ $item->answers_count }}</td>
                <td class="text-end">{{ $item->due_at->format('Y/m/d') }}</td>
                <td class="align-middle">
                    <x-row-actions :model="$item" base-route="brands.questions" />
                </td>
            </tr>
        @endforeach
    </x-table>
@endsection

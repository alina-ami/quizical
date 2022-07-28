@extends('brands._layout.app')

@section('content')
    {{-- @include('brands.questions.partials.index.statistics') --}}

    <div class="d-sm-flex justify-content-between">
        <div>
            <a href="{{ route('brands.questions.create') }}" class="btn btn-icon bg-gradient-primary">New Question</a>
        </div>
    </div>

    <x-table :headers="['ID', 'Question', 'Review', 'Answers', 'Due Date']" :data="$questions">
        @foreach ($questions as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    @switch(strlen($item->title) % 3)
                        @case(0)
                            <a
                                class="btn btn-rounded btn-outline-success mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
                                Positive
                            </a>
                        @break

                        @case(1)
                            <a
                                class="btn btn-rounded btn-outline-default mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
                                Neutral
                            </a>
                        @break

                        @case(2)
                            <a
                                class="btn btn-rounded btn-outline-danger mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
                                Negative
                            </a>
                        @break

                        @default
                    @endswitch
                </td>
                <td class="text-end">{{ $item->answers_count }}</td>
                <td class="text-end">{{ $item->due_at->format('Y-m-d') }}</td>
                <td class="align-middle">
                    <x-row-actions :model="$item" base-route="brands.questions" />
                </td>
            </tr>
        @endforeach
    </x-table>
@endsection

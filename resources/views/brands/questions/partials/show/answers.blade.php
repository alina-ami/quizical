<div class="mt-5">
    <h4 class="mb-3">Answers</h4>
    <x-table :headers="['Answer', 'Review', 'Answer Date']" :data="$answers" no-results-message="No results available at this moment. Please try again later.">
        @foreach ($answers as $item)
            <tr>
                <td>{{ $item->answer }}</td>
                <td><x-question-reaction :value="$item->answer" /></td>
                <td class="text-end">{{ $item->due_at->format('Y/m/d') }}</td>
            </tr>
        @endforeach
    </x-table>
</div>

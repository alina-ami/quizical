<div class="mt-5">
    <h4 class="mb-3">Answers</h4>
    <x-table :headers="['Answer', 'Sentiment', 'Answer Date']" :data="$answers" no-results-message="No results available at this moment. Please try again later.">
        @foreach ($answers as $item)
            <tr>
                <td>{{ Str::limit($item->answer, 70) }}</td>
                <td><x-question-reaction :value="$item->sentiment['type']" /></td>
                <td class="text-end">{{ $item->created_at->format('Y/m/d') }}</td>
            </tr>
        @endforeach
    </x-table>
</div>

<div class="mb-3">
    @if ($label)
        <x-label :for="$name" class="form-label">{{ $label }}</x-label>
    @endif

    <select {{ $attributes->merge(['class' => 'form-control']) }} name="{{ $name }}" id="{{ $id }}"
        multiple></select>
    <x-error :field="$name" />
</div>


@push('scripts')
    <script>
        if (document.getElementById('{{ $id }}')) {
            new Choices(document.getElementById('{{ $id }}'), {
                removeItemButton: true
            }).setChoices(@json($options), 'value', 'label', false);
        }
    </script>
@endpush

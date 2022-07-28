<div class="mb-3">
    @if ($label)
        <x-label :for="$name" class="form-label">{{ $label }}</x-label>
    @endif

    <input name="{{ $name }}" type="{{ $type }}" id="{{ $id }}"
        @if ($value) value="{{ $value }}" @endif
        {{ $attributes->merge(['class' => 'form-control']) }} />
    <x-error :field="$name" />
</div>

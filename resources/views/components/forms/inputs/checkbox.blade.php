<div class="mb-3 inline">
    <input name="{{ $name }}" type="checkbox" id="{{ $id }}"
        @if ($value) value="{{ $value }}" @endif {{ $checked ? 'checked' : '' }}
        {{ $attributes }} />

    @if ($label)
        <x-label :for="$name" class="form-label">{{ $label }}</x-label>
    @endif
</div>

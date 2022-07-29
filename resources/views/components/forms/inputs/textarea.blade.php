<div class="mb-3">
    @if ($label)
        <x-label :for="$id" class="form-label">{{ $label }}</x-label>
    @endif

    <textarea name="{{ $name }}" id="{{ $id }}" rows="{{ $rows }}"
        {{ $attributes->merge(['class' => 'form-control']) }}>{{ old($name, $value ?: $slot) }}</textarea>

    <x-error :field="$name" />
</div>

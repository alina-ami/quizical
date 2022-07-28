<input name="{{ $name }}" type="email" id="{{ $id }}"
    @if ($value) value="{{ $value }}" @endif
    {{ $attributes->merge(['class' => 'form-control form-control-lg']) }} />
<x-error :field="$name" />

<input
    name="{{ $name }}"
    type="password"
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'form-control form-control-lg']) }}
/>
<x-error :field="$name" />

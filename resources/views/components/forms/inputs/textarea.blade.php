<textarea
    name="{{ $name }}"
    id="{{ $id }}"
    rows="{{ $rows }}"
    {{ $attributes->merge(['class' => 'form-control form-control-lg']) }}
>{{ old($name, $slot) }}</textarea>
<x-error :field="$name" />

@error($field, $bag)
    <div {{ $attributes->merge(['class' => 'text-danger small']) }}>
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </div>
@enderror

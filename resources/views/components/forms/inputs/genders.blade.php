@if ($label)
    <x-label :for="$name">{{ $label }}</x-label>
@endif

<div class="" role="group" id="{{ $id }}">
    @foreach ($genderValues as $gender)
        <input type="{{ $type }}" class="btn-check" id="{{ $gender }}" value="{{ $gender }}"
            name="{{ $name }}" autocomplete="off" {{ $isSelected($gender) ? 'checked' : '' }}>
        <label class="btn btn-outline-primary" for="male">{{ ucfirst($gender) }}</label>
    @endforeach
</div>

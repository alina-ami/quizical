@if ($label)
    <x-label :for="$name">{{ $label }}</x-label>
@endif

<div class="" role="group" id="{{ $id }}">
    <input type="{{ $type }}" class="btn-check" id="male" value="male" name="{{ $name }}" autocomplete="off">
    <label class="btn btn-outline-primary" for="male">Male</label>

    <input type="{{ $type }}" class="btn-check" id="female" value="female" name="{{ $name }}" autocomplete="off">
    <label class="btn btn-outline-primary" for="female">Female</label>

    <input type="{{ $type }}" class="btn-check" id="non-binary" value="non-binary" name="{{ $name }}" autocomplete="off">
    <label class="btn btn-outline-primary" for="non-binary">Non-binary</label>

    <input type="{{ $type }}" class="btn-check" id="transgender" value="transgender" name="{{ $name }}"
        autocomplete="off">
    <label class="btn btn-outline-primary" for="transgender">Transgender</label>

    <input type="{{ $type }}" class="btn-check" id="intersex" value="intersex" name="{{ $name }}" autocomplete="off">
    <label class="btn btn-outline-primary" for="intersex">Intersex</label>

    <input type="{{ $type }}" class="btn-check" id="Unspecified" value="unspecified" name="{{ $name }}"
        autocomplete="off">
    <label class="btn btn-outline-primary" for="Unspecified">Unspecified</label>
</div>

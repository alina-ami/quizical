<div class="mb-3">
    @if ($label)
        <x-label :for="$name" class="form-label">{{ $label }}</x-label>
    @endif

    <input x-data="{
        picker: null,
        initPicker() {
            if (this.picker) return;

            this.picker = flatpickr(this.$el, {{ $jsonOptions() }});
        }
    }" x-on:mouseenter="initPicker()" name="{{ $name }}" type="text"
        id="{{ $id }}" placeholder="{{ $placeholder }}"
        @if ($value) value="{{ $value }}" @endif {{ $attributes }} />

    <x-error :field="$name" />
</div>

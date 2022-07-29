@switch(strlen($value) % 3)
    @case(0)
        <a class="btn btn-rounded btn-outline-success mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
            Positive
        </a>
    @break

    @case(1)
        <a class="btn btn-rounded btn-outline-default mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
            Neutral
        </a>
    @break

    @case(2)
        <a class="btn btn-rounded btn-outline-danger mb-0 me-2 text-xs btn-sm align-items-center justify-content-center">
            Negative
        </a>
    @break

    @default
@endswitch

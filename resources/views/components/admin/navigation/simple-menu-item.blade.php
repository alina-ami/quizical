<li class="nav-item">
    <a class="nav-link" href="{{ $url }}">
        @if ($icon)
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center me-2">
                <i class="{{ $icon }} text-danger"></i>
            </div>
        @endif

        @if ($nested)
            <span class="sidenav-mini-icon text-xs">{{ $label[0] }}</span>
            <span class="sidenav-normal"> {{ $label }} </span>
        @else
            <span class="nav-link-text ms-1">{{ $label }}</span>
        @endif
    </a>
</li>

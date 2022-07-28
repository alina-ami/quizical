<li class="nav-item">
    <a data-bs-toggle="collapse" href="#{{ $id }}" class="nav-link" aria-controls="{{ $id }}"
        role="button" aria-expanded="false">
        <span class="nav-link-text ms-1">{{ $label }}</span>
    </a>
    <div class="collapse" id="{{ $id }}">
        <ul class="nav {{ $level > 1 ? 'nav-sm flex-column' : 'ms-4 ps-3' }}">
            {{ $slot }}
        </ul>
    </div>
</li>



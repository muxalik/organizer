<li {{ $attributes->class($item) }}>
    <a href="{{ $href }}" {{ $attributes->class($link) }}>
        <i class="menu-icon tf-icons bx {{ $icon }}"></i>
        <div>{{ $title }}</div>
    </a>
    {{ $slot }}
</li>
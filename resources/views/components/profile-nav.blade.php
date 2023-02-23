@props(['active', 'user'])
@php
    $pages = [
        'Profile' => 'bx-user',
        'Teams' => 'bx-group',
        'Projects' => 'bx-grid-alt',
        'Connections' => 'bx-link-alt',
    ];
@endphp

<!-- Navbar pills -->
<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            @foreach ($pages as $page => $icon)
                <li class="nav-item">
                    <a class="nav-link @if (str()->lower($active) === str()->lower($page)) active @endif"
                        href="{{ route('user.' . str()->lower($page), ['user' => $user->id]) }}">
                        <i class="bx {{ $icon }} me-1"></i>{{ $page }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<!--/ Navbar pills -->

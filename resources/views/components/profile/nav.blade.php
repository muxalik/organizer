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
        <ul class="nav nav-pills flex-column flex-sm-row mb-4 nav-fill" role="tablist">
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#profile"
                    aria-controls="profile" aria-selected="true"><i class="bx bx-user me-1"></i> Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#teams"
                    aria-controls="teams" aria-selected="true"><i class="bx bx-group me-1"></i> Teams</button>
            </li>
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#projects"
                    aria-controls="projects" aria-selected="true"><i class="bx bx-grid-alt me-1"></i> Projects</button>
            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#connections" aria-controls="connections" aria-selected="true"><i
                        class="bx bx-link-alt me-1"></i> Connections</button>
            </li>
        </ul>
    </div>
</div>
<!--/ Navbar pills -->

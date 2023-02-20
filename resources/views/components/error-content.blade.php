@props(['status', 'image'])

<!-- Content -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">{{ __("errors.status.{$status}") }}</h2>
        <p class="mb-4 mx-2">
            {{ __("errors.message.{$status}") }}
        </p>
        {{ $slot }}
        <div class="mt-4">
            <img src="{{ $image }}" alt="page-error" width="500" class="img-fluid">
        </div>
    </div>
</div>
<!--/ Content -->

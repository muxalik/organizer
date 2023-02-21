@props(['status', 'image'])

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed no-touch" dir="ltr">

<head>
    <x-head title="Error {{ $status }}">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-misc.css">
    </x-head>
</head>

<body>

    <!-- Layout Content -->
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
    <!--/ Layout Content -->

    <x-scripts></x-scripts>
</body>

</html>

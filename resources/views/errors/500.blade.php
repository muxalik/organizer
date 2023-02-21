<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed no-touch" dir="ltr">
@php($status = 500)

<head>
    <x-head title="Error {{ $status }}">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-misc.css">
    </x-head>
</head>

<body>

    <!-- Layout Content -->
    <x-error-content :$status
        image="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/page-misc-error-light.png">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
    </x-error-content>
    <!--/ Layout Content -->

    <x-scripts></x-scripts>
</body>

</html>

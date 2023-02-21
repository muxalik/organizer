<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed no-touch" dir="ltr">
@php($status = 403)

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
        <div class="d-flex gap-2">
            <a href="{{ route('login.form') }}" class="btn btn-primary">Log in</a>
            <a href="{{ route('register.form') }}" class="btn btn-primary">Create account</a>
        </div>
    </x-error-content>
    <!--/ Layout Content -->

    <x-scripts></x-scripts>
</body>

</html>

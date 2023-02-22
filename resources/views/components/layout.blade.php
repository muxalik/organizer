<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed no-touch" dir="ltr">

<head>
    <x-head :$title>
        {{ $head }}
    </x-head>
</head>

<body>
    <!-- Layout Content -->
    {{ $content }}
    <!--/ Layout Content -->
    <x-scripts>
        {{ $scripts }}
    </x-scripts>
</body>

</html>

@props(['active', 'user'])

<x-layout title="Organizer - Profile">
    <x-slot:head>

        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-profile.css" />

        <!-- Vendor Styles -->
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    </x-slot:head>
    <x-slot:content>

        <x-wrapper>

            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">User Profile /</span> {{ $active }}
            </h4>

            <x-profile-header></x-profile-header>

            <x-profile-nav :$active :$user></x-profile-nav>

            {{ $slot }}

        </x-wrapper>

    </x-slot:content>
    <x-slot:scripts>
        <script
            src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/pages-profile.js">
        </script>
    </x-slot:scripts>
</x-layout>

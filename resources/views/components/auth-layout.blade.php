<x-layout :$title>
    <x-slot:head title="Organizer - Register">
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-auth.css">
    </x-slot:head>
    <x-slot:content>
        <div class="authentication-wrapper authentication-cover">
            <div class="authentication-inner row m-0">
                <!-- /Left Text -->
                <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                    <div class="w-100 d-flex justify-content-center">
                        {{ $image }}
                    </div>
                </div>
                <!-- /Left Text -->
                {{ $slot }}
            </div>
        </div>
    </x-slot:content>
    <x-slot:scripts>
        <script src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/js/pages-auth.js">
        </script>
    </x-slot:scripts>
</x-layout>

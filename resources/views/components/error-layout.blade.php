@props(['status', 'image'])

<x-layout title="Error {{ $status }}">
    <x-slot:head>
        <link rel="stylesheet"
            href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/pages/page-misc.css">
    </x-slot:head>
    <x-slot:content>
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
    </x-slot:content>
    <x-slot:scripts></x-slot:scripts>
</x-layout>

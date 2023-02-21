@extends('layouts.layout')

@php($status = 500)

@section('title', "Error {$status}")

@section('content')
    <x-error-content :$status
        image="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/page-misc-error-light.png">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
    </x-error-content>
@endsection

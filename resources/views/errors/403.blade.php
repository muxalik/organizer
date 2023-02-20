@extends('layouts.layout')

@php($status = 403)

@section('title', "Error {$status}")

@section('content')
    <x-error-content :$status
        image="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/page-misc-error-light.png">
        <div class="d-flex gap-2">
            <a href="{{ route('login.form') }}" class="btn btn-primary">Log in</a>
            <a href="{{ route('register.form') }}" class="btn btn-primary">Create account</a>
        </div>
    </x-error-content>
@endsection
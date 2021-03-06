<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('add_styles')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('add_scripts')
</head>
<body>
{{-- HEADER --}}
@include('app_header')

    <main class="main col no-padding">
        @yield('content')
    </main>

{{-- FOOTER --}}
@include('app_footer')

{{-- MODAL --}}
<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document"></div>
</div>
@include('widgets.callback_widget')
@yield('scripts')
</body>
</html>
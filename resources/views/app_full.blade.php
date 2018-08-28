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
<div class="callback-widget">
    <div class="row">
        <div class="col-4">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="#04d20b" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-phone-incoming">
                <polyline points="16 2 16 8 22 8"></polyline>
                <line x1="23" y1="1" x2="16" y2="8"></line>
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>

        </div>
        <div class="col-4">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#1962ff" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>

        </div>
        <div class="col-4">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-phone-incoming">
                <polyline points="16 2 16 8 22 8"></polyline>
                <line x1="23" y1="1" x2="16" y2="8"></line>
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>

        </div>
    </div>
</div>
@yield('scripts')
</body>
</html>
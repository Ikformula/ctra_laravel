<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="{{ $_ENV['APP_URL'] }}">
    <meta charset="utf-8">
    <meta name="author" content="Bartholomew Asuquo, asuquobartholomewi@gmail.com, +2348184496562">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('dashlite/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>@yield('title') | {{ app_name() }}</title>
    <!-- StyleSheets  -->
    @stack('before-styles')
    <link rel="stylesheet" href="{{ asset('dashlite/assets/css/dashlite.css?ver=1.8.0') }}">
{{--    <link id="skin-default" rel="stylesheet" href="{{ asset('dashlite/assets/css/theme.css?ver=1.8.0') }}">--}}
    <link id="skin-theme" rel="stylesheet" href="{{ asset('dashlite/assets/css/skins/theme-blue.css?ver=1.8.0') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css')}}">
    <style>
        .print-only {
            display: none;
        }

        @media print {
            .print-only {
                display: block;
            }
        }
    </style>
    @stack('after-styles')
</head>

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                @yield('content')
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
@stack('before-scripts')
<script src="{{ asset('dashlite/assets/js/bundle.js?ver=1.8.0') }}"></script>
<script src="{{ asset('dashlite/assets/js/scripts.js?ver=1.8.0') }}"></script>
<!-- Toastr -->
<script src="{{ asset('js/toastr/toastr.min.js')}}"></script>
@include('includes.partials.messages')
@stack('after-scripts')
</body>
</html>

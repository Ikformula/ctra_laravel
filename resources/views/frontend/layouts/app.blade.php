<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="{{ $_ENV['APP_URL'] }}/dashlite">
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
    @stack('after-styles')
</head>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <!-- wrap @s -->
    <div class="nk-wrap ">
       @include('frontend.includes.header')
        <!-- content @s -->
        <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-xl">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="content-page">

                            <div class="nk-block">
                                @include('includes.partials.messages')
                                @yield('content')
                            </div><!-- .nk-block -->
                        </div><!-- .content-page -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
        <!-- footer @s -->
{{--        <div class="nk-footer nk-footer-fluid bg-lighter">--}}
{{--            <div class="container-xl">--}}
{{--                <div class="nk-footer-wrap">--}}
{{--                    <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
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

@extends('frontend.layouts.auth-layout')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
        <div class="brand-logo pb-4 text-center">
            <a href="{{ route('frontend.index') }}" class="logo-link">
                <img class="logo-light logo-img logo-img-lg" src="{{ asset('dashlite/images/logo.png') }}" srcset="{{ asset('dashlite/images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('dashlite/images/logo-dark.png') }}" srcset="{{ asset('dashlite/images/logo-dark2x.png 2x') }}" alt="logo-dark">
            </a>
            <h4>Government of Cross River State</h4>
            <h6>Commercial Transport Regulatory Agency, Calabar, Cross River</h6>
        </div>
        <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-des">
                            <p>Commercial Vehicle Registration System</p>
                        </div>
                        <h4 class="nk-block-title">Sign-In</h4>
                    </div>
                </div>
                <form action="{{ route('frontend.auth.login.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="default-01">Email</label>
                        </div>
                        <input type="text" class="form-control form-control-lg" name="email" id="default-01" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Password</label>
{{--                            <a class="link link-primary link-sm" href="html/pages/auths/auth-reset-v2.html">Forgot Code?</a>--}}
                        </div>
                        <div class="form-control-wrap">
                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your passcode">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </div>
                </form>
{{--                <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="html/pages/auths/auth-register-v2.html">Create an account</a>--}}
{{--                </div>--}}


            </div>
        </div>
    </div>

@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush

@extends('frontend.layouts.app')

@section('title', __('navs.frontend.dashboard') )

@section('content')

    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">@yield('title')</h3>
                <div class="nk-block-des text-soft">
                    <p>Cross River State Commercial Vehicle Registration Platform</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
{{--                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>--}}
{{--                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Renewal</span></a></li>--}}
                            <li><a href="{{ route('frontend.licence.reg.form') }}" title="New Registration" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-plus"></em> New Registration</a></li>

                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-8">
                <div class="card card-bordered bg-blue-dim h-100">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-3">
                            <div class="card-title">
                                <h6 class="title">Overview</h6>
                                <p>Statistics of registrations and renewals
{{--                                    <a href="#" class="link link-sm">Detailed Stats</a>--}}
                                </p>
                            </div>

                        </div><!-- .card-title-group -->
                        <div class="nk-order-ovwg">
                            <div class="row g-4 align-end">

                                <div class="col-xxl-4">
                                    <div class="row g-4">
                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data buy">
                                                <div class="amount">{{ number_format($total['new_reg']) }} </div>
                                                <div class="info">Today <strong>{{ number_format($today['new_reg']) }} </strong></div>
                                                <div class="title"><em class="icon ni ni-note-add"></em> New Registrations</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xxl-12">
                                            <div class="nk-order-ovwg-data sell">
                                                <div class="amount">{{ number_format($total['rens']) }} </div>
                                                <div class="info">Today <strong>{{ number_format($today['rens']) }} </strong></div>
                                                <div class="title"><em class="icon ni ni-update"></em> Renewals</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div>
                        </div><!-- .nk-order-ovwg -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-4">
                <div class="card card-bordered h-100">
                    <div class="card-inner-group">

                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-note-add"></em>
                                    <div class="title">Start Renewal Process</div>
                                    <form class="form-inline my-2 my-lg-0" action="{{ route('frontend.search.reg') }}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" name="reg_num" placeholder="Reg. Number">
                                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner">
                            <div class="nk-wg-action">
                                <div class="nk-wg-action-content">
                                    <em class="icon ni ni-calendar-alt"></em>
                                    <div class="title">View Single Day Records</div>
                                    <form class="form-inline my-2 my-lg-0" action="{{ route('frontend.get.for.date') }}" method="post">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="date" name="the_date" placeholder="Select Date">
                                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">View</button>
                                    </form>
                                </div>

                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card-inner-group -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-lg-12">
                <div class="card card-bordered card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title"><span class="mr-2">Recent Registrations</span> <a href="{{ route('frontend.reg.list') }}" class="link d-none d-sm-inline">See History</a></h6>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0 border-top">
                        <div class="nk-tb-list nk-tb-orders">
                           @include('includes.partials.reg-records-table')
                        </div>
                    </div><!-- .card-inner -->
                    <div class="card-inner-sm border-top text-center d-sm-none">
                        <a href="{{ route('frontend.reg.list') }}" class="btn btn-link btn-block">See History</a>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->

        </div><!-- .row -->
    </div><!-- .nk-block -->
@endsection

@push('after-scripts')
    <script src="{{ asset('dashlite/assets/js/charts/gd-default.js?ver=1.8.0') }}"></script>
@endpush

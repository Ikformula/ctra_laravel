@extends('frontend.layouts.app')

@section('title', 'Registrations' )

@section('content')

    <div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">VEHICLE REGISTRATIONS</h4>
        </div>
    </div>
        <div class="card card-bordered card-full">
            <div class="card-inner">
                <div class="card-title-group">
                    <div class="card-title">
                        <h6 class="title"><span class="mr-2">Registrations</span> </h6>
                    </div>

                </div>
            </div><!-- .card-inner -->
            <div class="card-inner p-0 border-top">
                <div class="nk-tb-list nk-tb-orders">
                    @include('includes.partials.reg-records-table')
                </div>
            </div><!-- .card-inner -->
            <div class="card-footer">
                {{ $vehicles->links() }}
            </div><!-- .card-inner -->
        </div><!-- .card -->
</div><!-- .nk-block -->

@endsection

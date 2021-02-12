@extends('frontend.layouts.auth-layout')

@section('title', 'Renewal Printout '.$vehicle->form_num.\Carbon\Carbon::now()->toDateTimeString() )

@section('content')
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body p-2" style="font-size: {{ $_ENV['PRINT_ZOOM'] }}ch">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <img src="{{ asset('img/Coat_of_arms_of_Nigeria.png') }}" width="100">

                    <div class="nk-block-head-content text-center">
                        <p>COMMERCIAL TRANSPORT REGULATORY AGENCY<br>
                            100, MARIAN ROAD, CALABAR</p>
                        <h5 class="nk-block-title title text-uppercase">Vehicle and Owner Registration</h5>

                    </div>

                    <img src="{{ asset('dashlite/images/logo.png') }}" width="100">

                </div>

                <div class="row gy-2">
                    <div class="col-md-6">
                        <h6>Last Renewed On {{ $vehicle->renDate() }}</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6>Form Number: {{ $vehicle->form_num }}</h6>
                    </div>
                </div>
                <div class="row gy-2">
                    <div class="col-md-7">
                        <div class="card card-bordered">
                            <div class="card-header">
                                <h5>Vehicle Owner Bio Data</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-bordered">
                                    <tbody>

                                    <tr>
                                        <td>Name</td>
                                        <td><strong>{{ $vehicle->owner()->first_name }} {{ $vehicle->owner()->mid_name }}  {{ $vehicle->owner()->last_name }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Office Address</td>
                                        <td><strong>{{ $vehicle->owner()->office_address }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Residential Address</td>
                                        <td><strong>{{ $vehicle->owner()->residential_address }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Numbers</td>
                                        <td><strong>{{ $vehicle->owner()->phone_num_one }} / {{ $vehicle->owner()->phone_num_two }}</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-header">
                                <h5>Vehicle Particulars</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Registration Number</td>
                                        <td><strong>{{ $vehicle->reg_num }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Type of Vehicle</td>
                                        <td><strong>{{ $vehicle->type }}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Vehicle License Number</td>
                                        <td><strong>{{ $vehicle->license_number }}</strong>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Chassis Number</td>
                                        <td><strong>{{ $vehicle->chassis_number }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Engine Number</td>
                                        <td><strong>{{ $vehicle->engine_number }}     </strong>                </td>
                                    </tr>
                                    <tr>
                                        <td>Insurance Number</td>
                                        <td><strong>{{ $vehicle->insurance }}   </strong>                  </td>
                                    </tr>

                                    <tr>
                                        <td>Sticker Type</td>
                                        <td><strong> {{ $vehicle->sticker_type }} </strong>                  </td>
                                    </tr>

                                    <tr>
                                        <td>Sticker Number</td>
                                        <td><strong>{{ $vehicle->sticker_number }}  </strong>                  </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="card-header">
                                <h5>Driver's Bio Data</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><strong>{{ $vehicle->driver()->first_name }} {{ $vehicle->driver()->last_name }}  {{ $vehicle->driver()->mid_name }} </strong></td>
                                    </tr>

                                    <tr>
                                        <td>Residential Address</td>
                                        <td><strong>{{ $vehicle->driver()->residential_address }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Numbers</td>
                                        <td><strong>{{ $vehicle->driver()->phone_number_one }} / {{ $vehicle->driver()->phone_number_two }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Driver License Number</td>
                                        <td><strong>{{ $vehicle->driver()->license_number }}</strong></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-header">
                                <h5>Guarantor's Biodata</h5>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><strong>{{ $vehicle->guarantor()->first_name }} {{ $vehicle->guarantor()->last_name }} {{ $vehicle->guarantor()->mid_name }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Office Address</td>
                                        <td><strong>{{ $vehicle->guarantor()->office_address }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Residential Address</td>
                                        <td><strong>{{ $vehicle->guarantor()->residential_address }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td><strong>{{ $vehicle->guarantor()->phone_number_one }}</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Owner's Passport</strong>
                                    </div>
                                    <img src="{{ $vehicle->owner()->passport }}" class="card-img-bottom" alt="">
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Guarantor's Passport</strong>
                                    </div>
                                    <img src="{{ asset('license_reg_files/guarantor_photos/'.$vehicle->guarantor()->guarantor_id_photo) }}" class="card-img-bottom" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Driver's Photograph</strong>
                                    </div>
                                    <img src="{{ $vehicle->driver()->photograph }}" class="card-img-bottom" alt="">

                                </div>
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Driver's Thumbprint</strong>
                                    </div>
                                    <img src="{{ asset('license_reg_files/thumbprints/'.$vehicle->driver()->thumbprint) }}" class="card-img-bottom" style="max-height: 200px; max-width: 150px;" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-12">
                        <div class="card card-bordered">
                            <div class="card-body p-1">
                                <strong>Guarantor's Identification</strong>
                            </div>
                            <img src="{{ asset('license_reg_files/guarantor_identifications/'.$vehicle->guarantor()->guarantor_identification) }}" class="card-img-bottom" style="max-height: 300px" alt="">
                        </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                        <div class="card card-bordered">
                            <div class="card-body p-1">
                                <strong>Photograph of Vehicle </strong>
                            </div>
                            <img src="{{ asset('license_reg_files/vehicle_photos/'.$vehicle->photo) }}" class="card-img-bottom" style="max-height: 300px" alt="">
                        </div>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="row gy-2">
                    <div class="col-md-12">
                        <div class="card card-bordered">
                            <div class="card-body">
                                <div class="mt-0 pt-1 mb-4 text-center">
                                    <strong>Office Use</strong>
                                </div>
                                <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                        Chairman/Executive Secretary____________________________________________________________
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            Signature
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br class="print-only">
                                        ___________________________________
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                            Date
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        window.onload= function(){ window.print(); }
    </script>
@endpush

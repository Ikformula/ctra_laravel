@extends('frontend.layouts.auth-layout')

@section('title', 'Registration Printout '.$vehicle->form_num.\Carbon\Carbon::now()->toDateTimeString() )


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
                <div class="row mt-2 mb-5">
                    <div class="col-md-6">
                        <div class="card card-bordered">
                            <div class="card-body p-0">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td> <strong>Owner's Passport</strong></td>
                                        <td><img src="{{ $vehicle->owner()->passport }}" class="card-img-bottom" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td><strong>{{ $vehicle->owner()->first_name }} {{ $vehicle->owner()->mid_name }}  {{ $vehicle->owner()->last_name }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td><strong>{{ $vehicle->owner()->gender }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><strong>{{ $vehicle->owner()->dob_day }}-{{ $vehicle->owner()->dob_month }}-{{ $vehicle->owner()->dob_year }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Marital Status</td>
                                        <td><strong>{{ $vehicle->owner()->marital_status }}</strong></td>
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

                                    <tr>
                                        <td>Occupation</td>
                                        <td><strong>{{ $vehicle->owner()->occupation }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Religion</td>
                                        <td><strong>{{ $vehicle->owner()->religion }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Email</td>
                                        <td><strong>{{ $vehicle->owner()->email }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Village</td>
                                        <td><strong>{{ $vehicle->owner()->village }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>L.G.A. of Origin</td>
                                        <td><strong>{{ $vehicle->owner()->lga_origin }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>State of Origin</td>
                                        <td><strong>{{ $vehicle->owner()->state_origin }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Nationality</td>
                                        <td><strong>{{ $vehicle->owner()->nationality }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Name of NOK</td>
                                        <td><strong>{{ $vehicle->owner()->nok }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>Relationship With NOK</td>
                                        <td><strong>{{ $vehicle->owner()->relationship }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td>NOK Phone Number</td>
                                        <td><strong>{{ $vehicle->owner()->nok_phone }}</strong></td>
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
                                        <td> <strong>Photograph of Vehicle </strong></td>
                                        <td><img src="{{ asset('license_reg_files/vehicle_photos/'.$vehicle->photo) }}" class="card-img-bottom" style="max-height: 200px; width: auto;" alt=""></td>
                                    </tr>
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
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Driver's Photograph</strong>
                                    </div>
                                    <img src="{{ $vehicle->driver()->photograph }}" class="card-img-bottom" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-bordered">
                                    <div class="card-body p-1">
                                        <strong>Driver's Thumbprint</strong>
                                    </div>
                                    <img src="{{ asset('license_reg_files/thumbprints/'.$vehicle->driver()->thumbprint) }}" class="card-img-bottom" style="max-height: 200px; max-width: 150px;" alt="">
                                </div>
                            </div>
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
                                    <td>Gender</td>
                                    <td><strong>{{ $vehicle->driver()->gender }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td><strong>{{ $vehicle->driver()->dob_day }}-{{ $vehicle->driver()->dob_month }}-{{ $vehicle->driver()->dob_year }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Marital Status</td>
                                    <td><strong>{{ $vehicle->driver()->marital_status }}</strong></td>
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

                                <tr>
                                    <td>Occupation</td>
                                    <td><strong>{{ $vehicle->driver()->occupation }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Religion</td>
                                    <td><strong>{{ $vehicle->driver()->religion }}</strong></td>
                                </tr>

                                <tr>
                                    <td>L.G.A. of Origin</td>
                                    <td><strong>{{ $vehicle->driver()->lga_origin }}</strong></td>
                                </tr>

                                <tr>
                                    <td>State of Origin</td>
                                    <td><strong>{{ $vehicle->driver()->state_origin }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Nationality</td>
                                    <td><strong>{{ $vehicle->driver()->nationality }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Name of NOK</td>
                                    <td><strong>{{ $vehicle->driver()->nok }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Relationship With NOK</td>
                                    <td><strong>{{ $vehicle->driver()->relationship }}</strong></td>
                                </tr>

                                <tr>
                                    <td>NOK Phone Number</td>
                                    <td><strong>{{ $vehicle->driver()->nok_phone }}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-header">
                            <h5>Guarantor's Bio-data</h5>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>Guarantor's Photo <br> <img src="{{ asset('license_reg_files/guarantor_photos/'.$vehicle->guarantor()->guarantor_id_photo) }}" class="card-img-bottom" style="max-height: 150px; width: auto;" alt=""></td>
                                    <td>Guarantor's Identification <br> <img src="{{ asset('license_reg_files/guarantor_identifications/'.$vehicle->guarantor()->guarantor_identification) }}" class="card-img-bottom" style="max-height: 150px; width: auto;" alt=""></td>
                                </tr>
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
                                <tr>
                                    <td>Religion</td>
                                    <td><strong>{{ $vehicle->guarantor()->religion }}</strong></td>
                                </tr>

                                <tr>
                                    <td>L.G.A. of Origin</td>
                                    <td><strong>{{ $vehicle->guarantor()->lga_origin }}</strong></td>
                                </tr>

                                <tr>
                                    <td>State of Origin</td>
                                    <td><strong>{{ $vehicle->guarantor()->state_origin }}</strong></td>
                                </tr>

                                <tr>
                                    <td>Nationality</td>
                                    <td><strong>{{ $vehicle->guarantor()->nationality }}</strong></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-top: 20%"></div>
                <div class="row mt-5">
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

@extends('frontend.layouts.app')

@section('title', 'License Registration' )

@push('after-styles')
    <style>
        #my_camera{
            width: 320px;
            height: 240px;
        }
    </style>
@endpush

@section('content')

    <div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">VEHICLE & OWNER NEW REGISTRATION</h4>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            <form action="{{ route('frontend.licence.reg.store') }}" class="nk-wizard nk-wizard-simple is-alter" method="post" enctype="multipart/form-data">
                @csrf
                <div class="nk-wizard-head">
                    <h5>Step 1 - Owner's Biodata</h5>
                </div>
                <div class="nk-wizard-content">
                    <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label" for="reg_num">Registration Number</label>
                            <div class="form-control-wrap">
                                <input value="{{ old('reg_num') }}" type="text" class="form-control" id="reg_num" name="reg_num" required>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <label class="form-label">Check Uniqueness of Reg. Number</label>
                            <button class="btn btn-primary btn-dim" onclick="checkReg()" type="button">Check</button>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-dismissible alert-warning" id="reg_alert_warning" style="display: none">
                                <h4 class="alert-heading">Notice</h4>
                                <p class="mb-0">This registration number already exists in this system's database</p>
                            </div>
                            <div class="alert alert-dismissible alert-success" id="reg_alert_success" style="display: none">
                                <h4 class="alert-heading">Notice</h4>
                                <p class="mb-0">This registration number is unique in this system's database</p>
                            </div>
                        </div>
                    </div>

                    <span class="preview-title-lg overline-title">Owner Bio-data</span>
                    <div class="row gy-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="fw-first-name">First Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('first_name') }}" type="text" class="form-control" id="fw-first-name" name="first_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="fw-last-name">Last Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('last_name') }}" type="text" class="form-control" id="fw-last-name" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="mid_name">Other Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('mid_name') }}" type="text" class="form-control" id="mid_name" name="mid_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="fw-gender">Gender</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="fw-gender" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="fw-marital_status">Marital Status</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="fw-marital_status" name="marital_status">
                                            <option value="Single" selected="selected">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="occupation">Occupation</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('occupation') }}" type="text" class="form-control" id="occupation" name="occupation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="dob_year">Date of Birth - Year</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="dob_year" name="dob_year">
                                                    @include('includes.partials.year-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="dob_month">DOB Month</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="dob_month" name="dob_month">
                                                    @include('includes.partials.month-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="dob_day">DOB Day</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="dob_day" name="dob_day">
                                                    @include('includes.partials.day-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div><!-- .col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="office_address">Office Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('office_address') }}" type="text" class="form-control" id="office_address" name="office_address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="residential_address">Residential Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('residential_address') }}" type="text" class="form-control" id="residential_address" name="residential_address">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="phone_num_one">Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('phone_num_one') }}" type="text" class="form-control" id="phone_num_one" name="phone_num_one">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="phone_num_two">Additional Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('phone_num_two') }}" type="text" class="form-control" id="phone_num_two" name="phone_num_two">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('email') }}" type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="village">Village</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('village') }}" type="text" class="form-control" id="village" name="village">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="lga_origin">LGA or Origin</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('lga_origin') }}" type="text" class="form-control" id="lga_origin" name="lga_origin">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="state_origin">State of Origin</label>
                                <div class="form-control-wrap ">
                                    <select class="form-control" id="state_origin" name="state_origin">
                                        @include('includes.partials.state-options')
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="nationality">Nationality</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('nationality') }}" type="text" class="form-control" id="nationality" name="nationality">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="religion">Religion</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="religion" name="religion">
                                            <option value="Christian" selected="selected">Christian</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Traditional">Traditional</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->


                        <div class="col-md-3">
                            <label class="form-label" for="passport">Owner's Photograph</label>
                            <textarea id="passport" name="passport" style="display: none"></textarea>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#camera-modal" onclick="setEntity('owner')" id="owner_photo_modal_button">Capture Owner's Photo</button>
                        </div>


                    </div>
                </div>
                <div class="nk-wizard-head">
                    <h5>Step 2 - NOK & Vehicle Data</h5>
                </div>
                <div class="nk-wizard-content">
                    <span class="preview-title-lg overline-title">Next of Kin Data</span>
                    <div class="row gy-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="nok">Next of Kin Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('nok') }}" type="text" class="form-control" id="nok" name="nok">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="relationship">NOK Relationship</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('relationship') }}" type="text" class="form-control" id="relationship" name="relationship">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="nok_phone">NOK Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('nok_phone') }}" type="text" class="form-control" id="nok_phone" name="nok_phone">
                                </div>
                            </div>
                        </div>
                    </div>


                    <span class="preview-title-lg overline-title mt-3">Vehicle Particulars</span>
                    <div class="row gy-2">



                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="type">Type</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('type') }}" type="text" class="form-control" id="type" name="type">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="license_number">License Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('license_number') }}" type="text" class="form-control" id="license_number" name="license_number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="colour">Colour</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('colour') }}" type="text" class="form-control" id="colour" name="colour">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="chassis_number">Chassis Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('chassis_number') }}" type="text" class="form-control" id="chassis_number" name="chassis_number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="engine_number">Engine Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('engine_number') }}" type="text" class="form-control" id="engine_number" name="engine_number">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="insurance">Insurance Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('insurance') }}" type="text" class="form-control" id="insurance" name="insurance">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="year_manufactured">Year Manufactured</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="year_manufactured" name="year_manufactured">
                                            @include('includes.partials.year-options')
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="photo">
                                    Photograph of Vehicle
                                </label>
                                <div class="form-control-wrap">
                                    <input type="file" required accept="image/*" class="form-control" id="photo" name="vehicle_photo">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="sticker_type">Sticker Type</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="sticker_type" name="sticker_type">
                                            <option>OC</option>
                                            <option>SC</option>
                                            <option>Keke</option>
                                            <option>DV</option>
                                            <option>MB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="sticker_number">Sticker Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('sticker_number') }}" type="text" class="form-control" id="sticker_number" name="sticker_number">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nk-wizard-head">
                    <h5>Step 3 - Driver's Biodata</h5>
                </div>
                <div class="nk-wizard-content">
                    <span class="preview-title-lg overline-title">Driver's Data</span>
                    <div class="row gy-2">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_first_name">First Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_first_name') }}" type="text" class="form-control" id="driver_first_name" name="driver_first_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_last_name">Last Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_last_name') }}" type="text" class="form-control" id="driver_last_name" name="driver_last_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_mid_name">Other Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_mid_name') }}" type="text" class="form-control" id="driver_mid_name" name="driver_mid_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_gender">Gender</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="driver_gender" name="driver_gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_marital_status">Driver's Marital Status</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="driver_marital_status" name="driver_marital_status">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="thumbprint">Thumbprint</label>
                                <div class="form-control-wrap">
                                    <input type="file" required accept="image/*" class="form-control" id="thumbprint" name="thumbprint">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
{{--                            <div class="form-group">--}}
                                <label class="form-label" for="driver_photograph">Driver's Photograph</label>
{{--                                <div class="form-control-wrap">--}}
{{--                                    <input type="file" required capture="user" accept="image/*" class="form-control" id="driver_photograph" name="driver_photograph">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <textarea id="driver_photograph" name="driver_photograph" style="display: none"></textarea>
                            <button value="{{ old('') }}" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#camera-modal" onclick="setEntity('driver')" id="driver_photo_modal_button">Capture Driver's Photo</button>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_dob_year">Date of Birth - Year</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="driver_dob_year" name="driver_dob_year">
                                                    @include('includes.partials.year-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_dob_month">DOB Month</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="driver_dob_month" name="driver_dob_month">
                                                    @include('includes.partials.month-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_dob_day">DOB Day</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="driver_dob_day" name="driver_dob_day">
                                                    @include('includes.partials.day-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- .col -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_office_address">Office Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_office_address') }}" type="text" class="form-control" id="driver_office_address" name="driver_office_address">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_residential_address">Residential Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_residential_address') }}" type="text" class="form-control" id="driver_residential_address" name="driver_residential_address">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_phone_number_one">Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_phone_number_one') }}" type="text" class="form-control" id="driver_phone_number_one" name="driver_phone_number_one">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_phone_number_one">Additional Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('') }}" type="text" class="form-control" id="driver_phone_number_one" name="driver_phone_number_one">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_occupation">Occupation</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_occupation') }}" type="text" class="form-control" id="driver_occupation" name="driver_occupation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_license_number">Driver's License Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_license_number') }}" type="text" class="form-control" id="driver_license_number" name="driver_license_number">
                                </div>
                            </div>
                        </div>

{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="form-label" for="driver_vehicle_type">Vehicle Type</label>--}}
{{--                                <div class="form-control-wrap">--}}
{{--                                    <input value="{{ old('') }}" type="text" class="form-control" id="driver_vehicle_type" name="driver_vehicle_type">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_lga_origin">L.G.A of Origin</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_lga_origin') }}" type="text" class="form-control" id="driver_lga_origin" name="driver_lga_origin">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_state_origin">State of Origin</label>
                                <div class="form-control-wrap ">
                                    <select class="form-control" id="driver_state_origin" name="driver_state_origin">
                                        @include('includes.partials.state-options')
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_nationality">Nationality</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_nationality') }}" type="text" class="form-control" id="driver_nationality" name="driver_nationality">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="driver_religion">Religion</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="driver_religion" name="driver_religion">
                                            <option value="Christian" selected="selected">Christian</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Traditional">Traditional</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->

                    </div>
                    <div class="row gy-2">
                        <div class="col-md-12">
                            <span class="preview-title-lg overline-title mt-3">Driver Next of Kin Data</span>
                        </div>
                    </div>
                    <div class="row gy-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_nok">Next of Kin Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_nok') }}" type="text" class="form-control" id="driver_nok" name="driver_nok">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_relationship">NOK Relationship</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_relationship') }}" type="text" class="form-control" id="driver_relationship" name="driver_relationship">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="driver_nok_phone">NOK Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('driver_nok_phone') }}" type="text" class="form-control" id="driver_nok_phone" name="driver_nok_phone">
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="nk-wizard-head">
                    <h5>Step 4 - Guarantor's Data</h5>
                </div>
                <div class="nk-wizard-content">
                    <span class="preview-title-lg overline-title">Guarantor's Data</span>
                    <div class="row gy-2">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_first_name">First Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_first_name') }}" type="text" class="form-control" id="guarantor_first_name" name="guarantor_first_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_last_name">Last Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_last_name') }}" type="text" class="form-control" id="guarantor_last_name" name="guarantor_last_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_mid_name">Other Name</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_mid_name') }}" type="text" class="form-control" id="guarantor_mid_name" name="guarantor_mid_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_gender">Gender</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="guarantor_gender" name="guarantor_gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_office_address">Office Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_office_address') }}" type="text" class="form-control" id="guarantor_office_address" name="guarantor_office_address">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_residential_address">Residential Address</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_residential_address') }}" type="text" class="form-control" id="guarantor_residential_address" name="guarantor_residential_address">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_phone_number_one">Phone Number</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_phone_number_one') }}" type="text" class="form-control" id="guarantor_phone_number_one" name="guarantor_phone_number_one">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_occupation">Occupation</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_occupation') }}" type="text" class="form-control" id="guarantor_occupation" name="guarantor_occupation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_lga_origin">L.G.A of Origin</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_lga_origin') }}" type="text" class="form-control" id="guarantor_lga_origin" name="guarantor_lga_origin">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_state_origin">State of Origin</label>
                                <div class="form-control-wrap ">
                                    <select class="form-control" id="guarantor_state_origin" name="guarantor_state_origin">
                                        @include('includes.partials.state-options')
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_nationality">Nationality</label>
                                <div class="form-control-wrap">
                                    <input value="{{ old('guarantor_nationality') }}" type="text" class="form-control" id="guarantor_nationality" name="guarantor_nationality">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_religion">Religion</label>
                                <div class="form-control-wrap ">
                                    <div class="form-control-select">
                                        <select class="form-control" id="guarantor_religion" name="guarantor_religion">
                                            <option value="Christian" selected="selected">Christian</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Traditional">Traditional</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_passport">Guarantor's Passport Photo</label>
                                <div class="form-control-wrap">
                                    <input type="file" required accept="image/*" class="form-control" id="guarantor_passport" name="guarantor_passport">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="guarantor_identification">Guarantor's Identification</label>
                                <div class="form-control-wrap">
                                    <input type="file" required accept="image/*" class="form-control" id="guarantor_identification" name="guarantor_identification">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5 mb-5">
                        <div class="col-md-4">
                            <button type="submit" class="btn  btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@endsection

@push('after-scripts')
    <script>
        function checkReg(){
            $('.alert-dismissible').fadeOut();
            let token = '{{ csrf_token() }}';//Select input values with the data you want to send
            let reg_num = $('#reg_num').val();
            let url = 'reg-num-exists';

            fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                method: 'post',
                credentials: "same-origin",
                body: JSON.stringify({
                    reg_num: reg_num,
                    _token: token
                })
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if(data.count != 0){
                        $('#reg_alert_warning').fadeIn();
                    }else{
                        $('#reg_alert_success').fadeIn();
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

    </script>
    @include('frontend.includes.webcam')
@endpush

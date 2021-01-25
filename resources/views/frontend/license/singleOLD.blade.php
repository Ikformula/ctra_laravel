@extends('frontend.layouts.app')

@section('title', $vehicle->form_num )

@section('content')

    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Form Number: @yield('title')</h3>
                <div class="nk-block-des text-soft">
                    <p>Registered on {{ $vehicle->created_at->toDaydateTimeString() }}</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-printer-fill"></em><span>Print</span></a></li>
                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Renewal</span></a></li>
                            <li><a href="{{ route('frontend.licence.reg.form') }}" title="New Registration" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-plus"></em></a></li>

                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->

    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('frontend.licence.reg.store') }}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="row gy-4">
                    <div class="col-md-3">
                        <div class="card card-bordered">
                            <img src="{{ asset('license_reg_files/owners_passports/'.$vehicle->owner()->passport) }}" class="card-img-top" alt="">
                            <div class="card-inner">
                                <h5 class="card-title">Owner's Passport</h5>
                                <div class="form-group">
                                    <label class="form-label" for="">Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" multiple class="custom-file-input" id="" name="photo">
                                            <label class="custom-file-label" for="">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <span class="preview-title-lg overline-title">Owner Biodata</span>
                        <div class="row gy-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="fw-first-name">First Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->first_name }}" class="form-control" id="fw-first-name" name="first_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="fw-last-name">Last Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->last_name }}" class="form-control" id="fw-last-name" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="mid_name">Other Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->mid_name }}" class="form-control" id="mid_name" name="mid_name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="fw-gender">Gender</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="fw-gender" name="gender">
                                                <option selected value="{{ $vehicle->owner()->gender }}">{{ $vehicle->owner()->gender }}</option>
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
                                                <option selected value="{{ $vehicle->owner()->marital_status }}">{{ $vehicle->owner()->marital_status }}</option>
                                                <option value="Single">Single</option>
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
                                        <input type="text" value="{{ $vehicle->owner()->occupation }}" class="form-control" id="occupation" name="occupation">
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
                                                        <option selected value="{{ $vehicle->owner()->dob_year }}">{{ $vehicle->owner()->dob_year }}</option>
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
                                                        <option selected value="{{ $vehicle->owner()->dob_month }}">{{ $vehicle->owner()->dob_month }}</option>
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
                                                        <option selected value="{{ $vehicle->owner()->dob_day }}">{{ $vehicle->owner()->dob_day }}</option>
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
                                        <input type="text" value="{{ $vehicle->owner()->office_address }}" class="form-control" id="office_address" name="office_address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="residential_address">Residential Address</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->residential_address }}" class="form-control" id="residential_address" name="residential_address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone_num_one">Phone Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->phone_num_one }}" class="form-control" id="phone_num_one" name="phone_num_one">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone_num_two">Additional Phone Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->phone_num_two }}" class="form-control" id="phone_num_two" name="phone_num_two">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" value="{{ $vehicle->owner()->email }}" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="village">Village</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->village }}" class="form-control" id="village" name="village">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="lga_origin">LGA or Origin</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->lga_origin }}" class="form-control" id="lga_origin" name="lga_origin">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="state_origin">State of Origin</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control" id="state_origin" name="state_origin">
                                            <option selected value="{{ $vehicle->owner()->state_origin }}">{{ $vehicle->owner()->state_origin }}</option>
                                            @include('includes.partials.state-options')
                                        </select>
                                    </div>
                                </div>
                            </div><!-- .col -->

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="nationality">Nationality</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->nationality }}" class="form-control" id="nationality" name="nationality">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="religion">Religion</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="religion" name="religion">
                                                <option selected value="{{ $vehicle->owner()->religion }}">{{ $vehicle->owner()->religion }}</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Traditional">Traditional</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->


                        </div>

                        <span class="preview-title-lg overline-title">Next of Kin Data</span>
                        <div class="row gy-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="nok">Next of Kin Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->nok }}" class="form-control" id="nok" name="nok">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="relationship">NOK Relationship</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->relationship }}" class="form-control" id="relationship" name="relationship">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="nok_phone">NOK Phone Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" value="{{ $vehicle->owner()->nok_phone }}" class="form-control" id="nok_phone" name="nok_phone">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                    <hr class="bg-lighter">

                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="card card-bordered">
                                <img src="{{ asset('license_reg_files/vehicle_photos/'.$vehicle->photo) }}" class="card-img-top" alt="">
                                <div class="card-inner">
                                    <h5 class="card-title">Vehicle Photograph</h5>
                                    <div class="form-group">
                                        <label class="form-label" for="">Upload</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="" name="">
                                                <label class="custom-file-label" for="">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <span class="preview-title-lg overline-title mt-3">Vehicle Particulars</span>
                            <div class="row gy-2">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="reg_num">Registration Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->reg_num }}" class="form-control" id="reg_num" name="reg_num">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="type">Type</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->type }}" class="form-control" id="type" name="type">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="license_number">License Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->license_number }}" class="form-control" id="license_number" name="license_number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="colour">Colour</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->colour }}" class="form-control" id="colour" name="colour">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="chassis_number">Chassis Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->chassis_number }}" class="form-control" id="chassis_number" name="chassis_number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="engine_number">Engine Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->engine_number }}" class="form-control" id="engine_number" name="engine_number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="insurance">Insurance Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->insurance }}" class="form-control" id="insurance" name="insurance">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="year_manufactured">Year Manufactured</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="year_manufactured" name="year_manufactured">
                                                    <option value="{{ $vehicle->year_manufactured }}" selected>{{ $vehicle->year_manufactured }}</option>
                                                    @include('includes.partials.year-options')
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <hr class="bg-lighter">

                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="card card-bordered">
                                <img src="{{ asset('license_reg_files/driver_photos/'.$vehicle->driver()->photograph) }}" class="card-img-top" alt="">
                                <div class="card-inner">
                                    <h5 class="card-title">Driver's Photograph</h5>
                                    <div class="form-group">
                                        <label class="form-label" for="">Upload</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="driver_photograph" name="driver_photograph">
                                                <label class="custom-file-label" for="">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-bordered">
                                <img src="{{ asset('license_reg_files/thumbprints/'.$vehicle->driver()->thumbprint) }}" class="card-img-top" alt="">
                                <div class="card-inner">
                                    <h5 class="card-title">Driver's Thumbprint</h5>
                                    <div class="form-group">
                                        <label class="form-label" for="">Upload</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="thumbprint" name="thumbprint">
                                                <label class="custom-file-label" for="">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9">
                            <span class="preview-title-lg overline-title">Driver's Data</span>
                            <div class="row gy-2">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_first_name">First Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->first_name }}" class="form-control" id="driver_first_name" name="driver_first_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_last_name">Last Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->last_name }}" class="form-control" id="driver_last_name" name="driver_last_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_mid_name">Other Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->mid_name }}" class="form-control" id="driver_mid_name" name="driver_mid_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_gender">Gender</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="driver_gender" name="driver_gender">
                                                    <option value="{{ $vehicle->driver()->gender }}" selected>{{ $vehicle->driver()->gender }}</option>
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
                                                    <option value="{{ $vehicle->driver()->marital_status }}" selected>{{ $vehicle->driver()->gender }}</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->


                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="form-label" for="driver_dob_year">Date of Birth - Year</label>
                                                <div class="form-control-wrap ">
                                                    <div class="form-control-select">
                                                        <select class="form-control" id="driver_dob_year" name="driver_dob_year">
                                                            <option value="{{ $vehicle->driver()->dob_year }}" selected>{{ $vehicle->driver()->dob_year }}</option>
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
                                                            <option value="{{ $vehicle->driver()->dob_month }}" selected>{{ $vehicle->driver()->dob_month }}</option>
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
                                                            <option value="{{ $vehicle->driver()->dob_day }}" selected>{{ $vehicle->driver()->dob_day }}</option>
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
                                            <input type="text" value="{{ $vehicle->driver()->office_address }}" class="form-control" id="driver_office_address" name="driver_office_address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_residential_address">Residential Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->residential_address }}" class="form-control" id="driver_residential_address" name="driver_residential_address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_phone_number_one">Phone Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->phone_number_one }}" class="form-control" id="driver_phone_number_one" name="driver_phone_number_one">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_phone_number_one">Additional Phone Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->phone_number_one }}" class="form-control" id="driver_phone_number_one" name="driver_phone_number_one">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_occupation">Occupation</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->occupation }}" class="form-control" id="driver_occupation" name="driver_occupation">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_license_number">Driver's License Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->license_number }}" class="form-control" id="driver_license_number" name="driver_license_number">
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-label" for="driver_vehicle_type">Vehicle Type</label>--}}
{{--                                        <div class="form-control-wrap">--}}
{{--                                            <input type="text" value="{{ $vehicle->driver()->vehicle_type }}" class="form-control" id="driver_vehicle_type" name="driver_vehicle_type">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_lga_origin">L.G.A of Origin</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->lga_origin }}" class="form-control" id="driver_lga_origin" name="driver_lga_origin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_state_origin">State of Origin</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control" id="driver_state_origin" name="driver_state_origin">
                                                <option value="{{ $vehicle->driver()->state_origin }}" selected>{{ $vehicle->driver()->state_origin }}</option>
                                                @include('includes.partials.state-options')
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- .col -->

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_nationality">Nationality</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->nationality }}" class="form-control" id="driver_nationality" name="driver_nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_religion">Religion</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="driver_religion" name="driver_religion">
                                                    <option value="{{ $vehicle->driver()->religion }}" selected>{{ $vehicle->driver()->religion }}</option>
                                                    <option value="Christian">Christian</option>
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
                                            <input type="text" value="{{ $vehicle->driver()->nok }}" class="form-control" id="driver_nok" name="driver_nok">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_relationship">NOK Relationship</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->relationship }}" class="form-control" id="driver_relationship" name="driver_relationship">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="driver_nok_phone">NOK Phone Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->driver()->nok_phone }}" class="form-control" id="driver_nok_phone" name="nok_phone">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <hr class="bg-lighter">

                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="card card-bordered">
                                <img src="{{ asset('license_reg_files/guarantor_photos/'.$vehicle->guarantor()->guarantor_id_photo) }}" class="card-img-top" alt="">
                                <div class="card-inner">
                                    <h5 class="card-title">Guarantor's Photograph</h5>
                                    <div class="form-group">
                                        <label class="form-label" for="">Upload</label>
                                        <div class="form-control-wrap">
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input" id="guarantor_passport" name="guarantor_passport">
                                                <label class="custom-file-label" for="">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9">
                            <span class="preview-title-lg overline-title">Guarantor's Data</span>
                            <div class="row gy-2">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_first_name">First Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->first_name }}" class="form-control" id="guarantor_first_name" name="guarantor_first_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_last_name">Last Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->last_name }}" class="form-control" id="guarantor_last_name" name="guarantor_last_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_mid_name">Other Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->mid_name }}" class="form-control" id="guarantor_mid_name" name="guarantor_mid_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_gender">Gender</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="guarantor_gender" name="guarantor_gender">
                                                    <option selected value="{{ $vehicle->guarantor()->gender }}">{{ $vehicle->guarantor()->gender }}</option>
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
                                            <input type="text" value="{{ $vehicle->guarantor()->office_address }}" class="form-control" id="guarantor_office_address" name="guarantor_office_address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_residential_address">Residential Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->residential_address }}" class="form-control" id="guarantor_residential_address" name="guarantor_residential_address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_phone_number_one">Phone Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->phone_number_one }}" class="form-control" id="guarantor_phone_number_one" name="guarantor_phone_number_one">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_occupation">Occupation</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->occupation }}" class="form-control" id="guarantor_occupation" name="guarantor_occupation">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_lga_origin">L.G.A of Origin</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->lga_origin }}" class="form-control" id="guarantor_lga_origin" name="guarantor_lga_origin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_state_origin">State of Origin</label>
                                        <div class="form-control-wrap ">
                                            <select class="form-control" id="guarantor_state_origin" name="guarantor_state_origin">
                                                <option selected value="{{ $vehicle->guarantor()->state_origin }}">{{ $vehicle->guarantor()->state_origin }}</option>
                                                @include('includes.partials.state-options')
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- .col -->

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_nationality">Nationality</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $vehicle->guarantor()->nationality }}" class="form-control" id="guarantor_nationality" name="guarantor_nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="guarantor_religion">Religion</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="guarantor_religion" name="guarantor_religion">
                                                    <option selected value="{{ $vehicle->guarantor()->religion }}">{{ $vehicle->guarantor()->religion }}</option>
                                                    <option value="Christian">Christian</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Traditional">Traditional</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->

                            </div>

                        </div>
                    </div>
                    <div class="row gy-5">
                        <div class="col-md-4">
                            <button type="submit" class="btn  btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

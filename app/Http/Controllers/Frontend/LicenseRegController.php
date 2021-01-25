<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Guarantor;
use App\Models\Owner;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LicenseRegController extends Controller
{
    public function regForm()
    {
        return view('frontend.license.registration');
    }

    public function storeReg(Request $request)
    {
        // vehicle particulars
        $vehicle = new Vehicle();
        $vehicle->reg_num = $request->reg_num;
        $vehicle->type = $request->type;
        $vehicle->make = $request->make;
        $vehicle->capacity = $request->capacity;
        $vehicle->license_number = $request->license_number;
        $vehicle->year_manufactured = $request->year_manufactured;
        $vehicle->colour = $request->colour;
        $vehicle->chassis_number = $request->chassis_number;
        $vehicle->engine_number = $request->engine_number;
        $vehicle->insurance = $request->insurance;
        $vehicle->sticker_number = $request->sticker_number;
        $vehicle->sticker_type = $request->sticker_type;
        $now = Carbon::now();
        $vehicle->reg_year = $now->year;
        $vehicle->reg_month = $now->monthName;
        $vehicle->reg_day = $now->day;
        $vehicle->ren_year = $now->year;
        $vehicle->ren_month = $now->monthName;
        $vehicle->ren_day = $now->day;
        if ($request->hasFile('vehicle_photo')) {
            $file = $request->file('vehicle_photo');
            $name = substr($request->first_name, 0, 3) . '_' . substr($request->last_name, 0, 3) . '_' . $vehicle->reg_year . '_' . $vehicle->reg_month . '_' . rand(100, 999) . '_' . $vehicle->reg_num . '.' . $file->getClientOriginalExtension();

            $target_path = public_path('/license_reg_files/vehicle_photos/');
            if ($file->move($target_path, $name)) {
                $vehicle->photo = $name;
            }
        }

        if(!$vehicle->save()){
            return redirect()->back()->withInput()->withErrors('Unable to save data. Please confirm select and file upload fields and try again');
        }

        $vehicle->form_num = $now->year.$now->month.$now->day.$vehicle->id;
        $vehicle->save();

        $owner = new Owner();
        $owner->vehicle_id = $vehicle->id;
        $owner->first_name = $request->first_name;
        $owner->last_name = $request->last_name;
        $owner->mid_name = $request->mid_name;
        $owner->gender = $request->gender;
        $owner->dob_year = $request->dob_year;
        $owner->dob_month = $request->dob_month;
        $owner->dob_day = $request->dob_day;
        $owner->marital_status = $request->marital_status;
        $owner->office_address = $request->office_address;
        $owner->residential_address = $request->residential_address;
        $owner->phone_num_one = $request->phone_num_one;
        $owner->phone_num_two = $request->phone_num_two;
        $owner->email = $request->email;
        $owner->occupation = $request->occupation;
        $owner->village = $request->village;
        $owner->lga_origin = $request->lga_origin;
        $owner->state_origin = $request->state_origin;
        $owner->nationality = $request->nationality;
        $owner->religion = $request->religion;
        $owner->nok = $request->nok;
        $owner->relationship = $request->relationship;  // relationship with NOK
        $owner->nok_phone = $request->nok_phone;

        if ($request->hasFile('passport')) {
            $file = $request->file('passport');
            $name = substr($request->first_name, 0, 3) . '_' . substr($request->last_name, 0, 3) . '_' . time() . '_' . rand(100, 999) . '_' . $vehicle->form_num . '.' . $file->getClientOriginalExtension();

            $target_path = public_path('/license_reg_files/owners_passports/');

            if ($file->move($target_path, $name)) {
                // save file name in the database
                $owner->passport = $name;
            }
        }

        if(!$owner->save()){
            $vehicle->destroyRecord();
            return redirect()->back()->withInput()->withErrors('Unable to save data. Please confirm select and file upload fields and try again');
        }

        $driver = new Driver();
        $driver->vehicle_id = $vehicle->id;
        $driver->first_name = $request->driver_first_name;
        $driver->last_name = $request->driver_last_name;
        $driver->mid_name = $request->driver_mid_name;
        $driver->gender = $request->driver_gender;
        $driver->dob_year = $request->driver_dob_year;
        $driver->dob_month = $request->driver_dob_month;
        $driver->dob_day = $request->driver_dob_day;
        $driver->marital_status = $request->driver_marital_status;
        $driver->office_address = $request->driver_office_address;
        $driver->residential_address = $request->driver_residential_address;
        $driver->phone_number_one = $request->driver_phone_number_one;
        $driver->phone_number_two = $request->driver_phone_number_two;
        $driver->email = $request->driver_email;
        $driver->occupation = $request->driver_occupation;
        $driver->village = $request->driver_village;
        $driver->lga_origin = $request->driver_lga_origin;
        $driver->state_origin = $request->driver_state_origin;
        $driver->nationality = $request->driver_nationality;
        $driver->religion = $request->driver_religion;
        $driver->license_number = $request->driver_license_number;
        $driver->nok = $request->driver_nok;
        $driver->relationship = $request->driver_relationship;  // relationship with NOK
        $driver->nok_phone = $request->driver_nok_phone;

//        if ($request->hasFile('driver_photograph')) {
//            $file = $request->file('driver_photograph');
//            $name = substr($request->driver_first_name, 0, 3) . '_' . substr($request->driver_last_name, 0, 3) . '_' . $vehicle->reg_year . '_' . $vehicle->reg_month . '_' . rand(100, 999) . '_' . $vehicle->reg_num . '.' . $file->getClientOriginalExtension();
//
//            $target_path = public_path('/license_reg_files/driver_photos/');
//            if ($file->move($target_path, $name)) {
//                $driver->photograph = $name;
//            }
//        }

        $driver->photograph = $request->driver_photograph;

        if ($request->hasFile('thumbprint')) {
            // thumbprint
            $file = $request->file('thumbprint');
            $name = substr($request->driver_first_name, 0, 3) . '_' . substr($request->driver_last_name, 0, 3) . '_' . $vehicle->reg_year . '_' . $vehicle->reg_month . '_' . rand(100, 999) . '_thumbprint_' . $vehicle->reg_num . '.' . $file->getClientOriginalExtension();

            $target_path = public_path('/license_reg_files/thumbprints/');
            if ($file->move($target_path, $name)) {
                $driver->thumbprint = $name;
            }
        }

        if(!$driver->save()){
            $vehicle->destroyRecord();
            return redirect()->back()->withInput()->withErrors('Unable to save data. Please confirm select and file upload fields and try again');
        }



        $guarantor = new Guarantor();
        $guarantor->vehicle_id = $vehicle->id;
        $guarantor->first_name = $request->guarantor_first_name;
        $guarantor->last_name = $request->guarantor_last_name;
        $guarantor->mid_name = $request->guarantor_mid_name;
        $guarantor->gender = $request->guarantor_gender;
        $guarantor->office_address = $request->guarantor_office_address;
        $guarantor->residential_address = $request->guarantor_residential_address;
        $guarantor->phone_number_one = $request->guarantor_phone_number_one;
        $guarantor->occupation = $request->guarantor_occupation;
        $guarantor->village = $request->guarantor_village;
        $guarantor->lga_origin = $request->guarantor_lga_origin;
        $guarantor->state_origin = $request->guarantor_state_origin;
        $guarantor->nationality = $request->guarantor_nationality;
        $guarantor->religion = $request->guarantor_religion;

        if ($request->hasFile('guarantor_passport')) {
            // thumbprint
            $file = $request->file('guarantor_passport');
            $name = substr($request->guarantor_first_name, 0, 3) . '_' .
                    substr($request->guarantor_last_name, 0, 3) . '_' .
                    $vehicle->reg_year . '_' . $vehicle->reg_month . '_' .
                    rand(100, 999) .
                    '_guarantor_passport_' .
                    $vehicle->reg_num . '.' .
                    $file->getClientOriginalExtension();

            $target_path = public_path('/license_reg_files/guarantor_photos/');
            if ($file->move($target_path, $name)) {
                $guarantor->guarantor_id_photo = $name;
            }
        }

        if(!$guarantor->save()){
            $vehicle->destroyRecord();
            return redirect()->back()->withInput()->withErrors('Unable to save data. Please confirm select and file upload fields and try again');
        }


        $show_route = route('frontend.search.reg').'?reg_num='.$vehicle->reg_num;
        return redirect($show_route)->withFlashSuccess('Registration Completed Successfully');
    }

    public function singleRegistration(Request $request)
    {
        $count = Vehicle::where('reg_num', $request->reg_num)->count();
        if($count){
            $vehicle = Vehicle::where('reg_num', $request->reg_num)->first();
            return view('frontend.license.single')->with([
                'vehicle' => $vehicle
            ]);
        }

        return redirect()->back()->withErrors('Invalid Registration Number');
    }


    public function printRegistration(Request $request)
    {
        $count = Vehicle::where('reg_num', $request->reg_num)->count();
        if($count){
            $vehicle = Vehicle::where('reg_num', $request->reg_num)->first();
            return view('frontend.license.print')->with([
                'vehicle' => $vehicle
            ]);
        }

        return redirect()->back()->withErrors('Invalid Registration Number');
    }


}

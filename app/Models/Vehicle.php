<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Vehicle extends Model
{
    public function driver()
    {
        return Driver::where('vehicle_id', $this->id)->first();
    }

    public function owner()
    {
        return Owner::where('vehicle_id', $this->id)->first();
    }

    public function guarantor()
    {
        return Guarantor::where('vehicle_id', $this->id)->first();
    }

    public function renDate()
    {
        return $this->ren_year.'-'.$this->ren_month.'-'.$this->ren_day;
    }

    public function destroyRecord(){
        $del = Driver::where('vehicle_id', $this->id)->delete();
        $del = Owner::where('vehicle_id', $this->id)->delete();
        $del = Guarantor::where('vehicle_id', $this->id)->delete();
        $this->delete();
        Log::info('Deleted all records for vehicle with id '. $this->id);
        return 'true';
    }

}

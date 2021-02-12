<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Carbon\Carbon;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $total['rens'] = Vehicle::where('ren_day', '!=', null)->count();
        $total['new_reg'] = Vehicle::count();
        $today['rens'] = Vehicle::whereDate('updated_at', Carbon::today())->where('ren_day', '!=', null)->count();
        $today['new_reg'] = Vehicle::whereDate('created_at', Carbon::today())->count();
//        last ten registrations
        $vehicles = Vehicle::where('reg_year', '!=', null)->orderBy('id', 'DESC')->take(10)->get();
        return view('frontend.user.dashboard')->with([
            'today' => $today,
            'total' => $total,
            'vehicles' => $vehicles
        ]);
    }
}

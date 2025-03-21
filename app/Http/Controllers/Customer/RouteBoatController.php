<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteBoatController extends Controller
{
    public function indexrouteBoat()
    {
        $tuyentau = DB::table('tuyens')->where('loaikinhdoanh_id','2')->get();
        return view('customer.routeBoat', [
            'tuyentau' => $tuyentau,
        ]);
        // return view('customer.homepage');
        // return $ben;
    }

    public function get_chitiettuyentau($id_tuyen){
        $chitiettuyentau = DB::table('chitiettuyens')->where('tuyen_id',$id_tuyen)->get();
        return $chitiettuyentau;
    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteCarController extends Controller
{
    public function indexroutesCar()
    {
        $tuyenxe = DB::table('tuyens')->where('loaikinhdoanh_id','1')->get();
        return view('customer.routesCar', [
            'tuyenxe' => $tuyenxe,
        ]);
        // return view('customer.homepage');
        // return $ben;
    }

    public function get_chitiettuyenxe($id_tuyen){
        $chitiettuyentau = DB::table('chitiettuyens')->where('tuyen_id',$id_tuyen)->get();
        return $chitiettuyentau;
    }
}

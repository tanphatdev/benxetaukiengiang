<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonvivantaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.donvivantai');
    }
    public function get_donvivantaitau(){
        $donvivantaitau = DB::table('donvikinhdoanhs')
        ->where('loaikinhdoanh_id',2)->get();
        return $donvivantaitau;
    }
    public function get_donvivantaixe(){
        $donvivantaixe = DB::table('donvikinhdoanhs')
        ->where('loaikinhdoanh_id',1)->get();
        return $donvivantaixe;
    }
}

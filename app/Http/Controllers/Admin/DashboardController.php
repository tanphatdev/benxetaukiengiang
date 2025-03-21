<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index (){
        $bentauxe = DB::table('bens')->where('ben_phancap','1')->get();
        $countdonvivantai = DB::table('bens')
            ->where('ben_phancap','1')
            ->rightJoin('donvikinhdoanhs','donvikinhdoanhs.ben_id','=','bens.ben_id')
            ->get();
        
        return view (
            'admin.dashboard',
            [
                'bentauxe' => $bentauxe,
                'countdonvivantai' => $countdonvivantai
            ]
        );
    }

    public function getchituyenByBendi(Request $request){
        $ben_id = $request->ben_id;
        $loaiben_id = $request->loaiben_id;
        $chitiettuyen = DB::table('bens')
        ->join('tuyens','tuyens.tuyen_bendi','=','bens.ben_id')
        ->where('ben_id',$ben_id)->count();
        return [$chitiettuyen,$ben_id,$loaiben_id];
    }

    public function getdonviByBendi(Request $request){
        $ben_id =$request->ben_id;
        $sldonvikinhdoanh = DB::table('donvikinhdoanhs')->where('ben_id',$ben_id)->count();
        // ->join('bens','donvikinhdoanhs.ben_id','=','bens.ben_id')
        
        return [$sldonvikinhdoanh,$ben_id];
    }
}

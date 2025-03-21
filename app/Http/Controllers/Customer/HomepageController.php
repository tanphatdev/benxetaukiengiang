<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomepageController extends Controller
{
    public function index()
    {
        $noidi = DB::table('bens')->where('loaiben_id','1')->where('ben_phancap','1')->get();
        $benchinh = DB::table('bens')->where('ben_phancap','1')->get();
        // return dd($benchinh);
        return view('customer.homepage', [
            'noidi' => $noidi,
            'benchinh'=>$benchinh
        ]);
        // return view('customer.homepage');
        // return $ben;
    }
    public function getbenxe_noidi(){
        $xenoidi = DB::table('bens')->where('loaiben_id','1')->where('ben_phancap','1')->get();
        return $xenoidi;
    }
    public function getbenxetau_noiden(Request $request){
        $bendi_id = $request->bendi_id;
        $xenoiden = DB::table('tuyens')
                        ->join('bens', 'tuyens.tuyen_benden', '=', 'bens.ben_id')
                        ->where('tuyen_bendi',$bendi_id)->get();
        return $xenoiden;
    }
    public function getbentau_noidi(){
        $taunoidi = DB::table('bens')->where('loaiben_id','2')->where('ben_phancap','1')->get();
        return $taunoidi;
    }
    public function getbentau_noiden(Request $request){
        $taunoiden = DB::table('tuyens')->where('tuyen_bendi',$request)->get();
        return $taunoiden;
    }
    public function gettuyenxetau(Request $request,$action){
        $noidi_id = $request->noidi;
        $noiden_id = $request->noiden;
        if($noidi_id == 0){
            return redirect('/')->with('status', 'Vui lòng chọn nơi đi !!!');
            // return $noidi_id;
        }else{
            $tennoidi = DB::table('bens')->where('ben_id',$noidi_id)->first();
            $tennoiden = DB::table('bens')->where('ben_id',$noiden_id)->first();
            $tuyenxetau = DB::table('tuyens')
            ->join('chitiettuyens','tuyens.tuyen_id','=','chitiettuyens.tuyen_id')
            ->join('donvikinhdoanhs','donvikinhdoanhs.donvikinhdoanh_id','=','chitiettuyens.donvikinhdoanh_id')
            ->where('tuyen_bendi',$noidi_id)
            ->where('tuyen_benden',$noiden_id)->get();
            return view('customer.detailRoute',[
                'tuyentauxe' => $tuyenxetau,
                'title' => $action,
                'tennoidi' => $tennoidi,
                'tennoiden'=> $tennoiden
            ]);
        }
        
    }
    public function GetTimeByIdChiTietTuyen(Request $request){
        $chitiettuyen_id = $request->chitiettuyen_id;
        $time = DB::table('giokhoihanhs')->where('chitiettuyen_id',$chitiettuyen_id)->get();
        return $time;
    }

    public function GetTuyenTauByIDBenDi(Request $request,$ben_id){
        $tuyentau = DB::table('tuyens')->where('loaikinhdoanh_id','2')->where('tuyen_bendi',$ben_id)->get();
        return view('customer.routeBoat', [
            'tuyentau' => $tuyentau,
        ]);
    }

    public function GetTuyenXeByIDBenDi(Request $request,$ben_id){
        $tuyenxe = DB::table('tuyens')->where('loaikinhdoanh_id','1')->where('tuyen_bendi',$ben_id)->get();
        return view('customer.routesCar', [
            'tuyenxe' => $tuyenxe,
        ]);
    }

}

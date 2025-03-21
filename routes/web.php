<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Customer\PostController as CustomerPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\Customer\HomepageController@index');
Route::get('/getbenxe_noidi', 'App\Http\Controllers\Customer\HomepageController@getbenxe_noidi');
Route::get('/getbentau_noidi', 'App\Http\Controllers\Customer\HomepageController@getbentau_noidi');
Route::get('/getbenxetau_noiden', 'App\Http\Controllers\Customer\HomepageController@getbenxetau_noiden');
Route::get('/gettuyenxetau/{action}', 'App\Http\Controllers\Customer\HomepageController@gettuyenxetau');
Route::get('/GetTimeByIdChiTietTuyen','App\Http\Controllers\Customer\HomepageController@GetTimeByIdChiTietTuyen');
Route::get('/routeBoat/{ben_id}','App\Http\Controllers\Customer\HomepageController@GetTuyenTauByIDBenDi');
Route::get('/routesCar/{ben_id}','App\Http\Controllers\Customer\HomepageController@GetTuyenXeByIDBenDi');

//RouteBoatController
Route::get('/routeBoat','App\Http\Controllers\Customer\RouteBoatController@indexrouteBoat');
Route::get('/get_chitiettuyentau/{id_tuyen}','App\Http\Controllers\Customer\RouteBoatController@get_chitiettuyentau');

//RouteCarController
Route::get('/routesCar','App\Http\Controllers\Customer\RouteCarController@indexroutesCar');
Route::get('/get_chitiettuyenxe/{id_tuyen}','App\Http\Controllers\Customer\RouteCarController@get_chitiettuyenxe');
Route::get('/intro', function () { return view('customer.intro'); });

Route::get('/posts', [CustomerPostController::class, 'index']);
Route::get('/posts/{id}', [CustomerPostController::class, 'detail']);

//==================Admin====================//
Route::group(['prefix' => 'manager'], function () {
    Route::get('dashboard', 'App\Http\Controllers\Admin\DashboardController@index');
    Route::get('donvivantai','App\Http\Controllers\Admin\DonvivantaiController@index');
    Route::get('donvivantai/get_donvivantaixe','App\Http\Controllers\Admin\DonvivantaiController@get_donvivantaixe');
    Route::get('donvivantai/get_donvivantaitau','App\Http\Controllers\Admin\DonvivantaiController@get_donvivantaitau');
    Route::get('tuyenvantai', function () { return view('admin.tuyenvantai'); });
    Route::get('tuyenvantai/ABC1', function () { return view('admin.chitiettuyen'); });
    Route::get('getchituyenByBendi','App\Http\Controllers\Admin\DashboardController@getchituyenByBendi');
    Route::get('getdonviByBendi','App\Http\Controllers\Admin\DashboardController@getdonviByBendi');
});

Route::get('/manager/posts', [AdminPostController::class, 'manager'] );
Route::get('/manager/posts/create', [AdminPostController::class, 'showCreate'] );
Route::post('/manager/posts/create', [AdminPostController::class, 'create'] );
Route::get('/manager/posts/update/{id}', [AdminPostController::class, 'showUpdate'] );
Route::post('/manager/posts/update', [AdminPostController::class, 'update'] );
Route::delete('/manager/posts/{id}', [AdminPostController::class, 'delete'] );

Auth::routes();

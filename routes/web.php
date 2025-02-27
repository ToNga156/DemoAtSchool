<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/tong', function () {
//     return view('tong');
// });
// Route::post('/tong', function (Request $request) {
//     $a = $request->input('a', 0);
//     $b = $request->input('b', 0);
//     $sum = $a + $b;
    
//     return view('tong', compact('a', 'b', 'sum'));
// });
use App\Http\Controllers\ControllerTong;
use App\Http\Controllers\ControllerNotView;
use App\Http\Controllers\ControllerVidu3;
use App\Http\Controllers\PostController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;

Route::get('/tong', [ControllerTong::class, 'tong']); 
Route::post('/tong', [ControllerTong::class, 'tinhTong']);

// Route::get('/vdnameroute', function () {
//     return view('vdnameroute')->name('add');
// });

// Không dùng Controller và View
Route::get('/onlyRoute', function (Request $request) {
    return 'Hello';
});
//Không dùng view
Route::get('/NotView', [ControllerNotView::class, 'hello']);
//Vidu3
Route::get('/Vidu3', [ControllerVidu3::class, 'vidu3']);

//----------------------------------------------------------------
// Route::group(['prefix'=>'tutorial'], function() {
//     Route::get('/aws', function() {
//         echo 'aws tutorial';
//     })
// });

// Route::get('/post', [PostController::class, 'index']);
Route::resource('/postindex', PostController::class);
Route::get('/postcreate', [PostController::class, 'create']);

//btvn
Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'displayInfor']);

//btvn
Route::get('index', [PageController::class, 'getIndex']);
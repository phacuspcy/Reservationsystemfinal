<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('user.index');
// });
// Route::get('/template', function () {
//     return view('layouts.template');
// });
// Route::get('/header', function () {
//     return view('layouts.header');
// });
// Route::get('/slidebar', function () {
//     return view('layouts.slidebar');
// });
// Route::get('/index', function () {
//     return view('user.index');
// });
// Route::get('/subjects', function () {
//     return view('user-menu.subjects');
// });
// Route::get('/cancelreservation', function () {
//     return view('user-menu.cancelreservation');
// });
// Route::get('/history', function () {
//     return view('user-menu.history');
// });
// Route::get('/reservation', function () {
//     return view('user-menu.reservation');
// });
// Route::get('/stat-reservation', function () {
//     return view('user-menu.stat-reservation');
// });
// Route::get('/stat-grade', function () {
//     return view('user-menu.stat-grade');
// });
// Route::get('/logout', function () {
//     return view('auth.logout');
// });
// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/Basketball', function () {
    return view('user-menu.basketball');
});

Route::get('/Badminton', function () {
    return view('user-menu.badminton');
});

Route::get('/Dancing', function () {
    return view('user-menu.dancing');
});

Route::get('/Tabletennis', function () {
    return view('user-menu.tabletennis');
});

Route::get('/Volley', function () {
    return view('user-menu.volley');
});

// Route::get('/reservationadmin', function () {
//     return view('admin.reservationadmin');
// }); 

// Route::get('/editgrade', function () {
//     return view('admin.gradeadmin');
// });

// Route::get('/editreservation', function () {
//     return view('admin.reservationadmin');
// });

// Route::get('/editsubject', function () {
//     return view('admin.subjectadmin');
// });

// Route::get('/editsubjectadmin', function () {
//     return view('admin.editsubjectadmin');
// });

// Route::get('/editstat', function () {
//     return view('admin.editstatreservation');
// });

// Route::get('/editgradeadmin', function () {
//     return view('admin.editgrade');
// });

// Route::get('/editstatadmin', function () {
//     return view('admin.editstatadmin');
// });

//ROUTE ABOUT
Route::get('/template',[AboutController::class,'template']);
Route::get('/header',[AboutController::class,'header']);
Route::get('/slidebar',[AboutController::class,'slidebar']);
Route::get('/logout',[AboutController::class,'logout']);
Route::get('/login',[AboutController::class,'login']);

//ROUTE USER
Route::get('/',[UserController::class,'index']);
Route::get('/subjects',[UserController::class,'subjects']);
Route::get('/reservation',[UserController::class,'reservation']);
Route::get('/reservation1',[UserController::class,'reservation1']);
Route::get('/canclereservation',[UserController::class,'canclereservation']);
Route::get('/history',[UserController::class,'history']);
Route::get('/statreservation',[UserController::class,'statreservation']);
Route::get('/statgrade',[UserController::class,'statgrade']);

//ROUTE ADMIN
Route::get('/managesubject',[AdminController::class,'managesubject']);
Route::get('/managereservation',[AdminController::class,'managereservation']);
Route::get('/managestatic',[AdminController::class,'managestatic']);
Route::get('/editstatadmin',[AdminController::class,'editstatadmin']);
Route::get('/editgrade',[AdminController::class,'editgrade']);
Route::get('/managegradeadmin',[AdminController::class,'managegradeadmin']);
Route::get('/addsubject',[AdminController::class,'addsubject']);
Route::get('/editsubject',[AdminController::class,'editsubject']);

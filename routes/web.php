<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.index');
});
Route::get('/template', function () {
    return view('layouts.template');
});
Route::get('/header', function () {
    return view('layouts.header');
});
Route::get('/slidebar', function () {
    return view('layouts.slidebar');
});
// Route::get('/index', function () {
//     return view('user.index');
// });
Route::get('/subjects', function () {
    return view('user-menu.subjects');
});
Route::get('/cancelreservation', function () {
    return view('user-menu.cancelreservation');
});
Route::get('/history', function () {
    return view('user-menu.history');
});
Route::get('/reservation', function () {
    return view('user-menu.reservation');
});
Route::get('/stat-reservation', function () {
    return view('user-menu.stat-reservation');
});
Route::get('/stat-grade', function () {
    return view('user-menu.stat-grade');
});
Route::get('/logout', function () {
    return view('auth.logout');
});
Route::get('/login', function () {
    return view('auth.login');
});

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

Route::get('/reservationadmin', function () {
    return view('admin.reservationadmin');
}); 

Route::get('/editgrade', function () {
    return view('admin.gradeadmin');
});

Route::get('/editreservation', function () {
    return view('admin.reservationadmin');
});

Route::get('/editsubject', function () {
    return view('admin.subjectadmin');
});

Route::get('/editsubjectadmin', function () {
    return view('admin.editsubjectadmin');
});

Route::get('/editstat', function () {
    return view('admin.editstatreservation');
});
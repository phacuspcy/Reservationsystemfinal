<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('user.index');
    }
    function subjects(){
        return view('user-menu.subjects');
    }
    function reservation(){
        return view('user-menu.reservation');
    }
    function reservation1(){
        return view('user-menu.reservation1');
    }
    function canclereservation(){
        return view('user-menu.canclereservation');
    }
    function history(){
        return view('user-menu.history');
    }
    function statreservation(){
        return view('user-menu.statreservation');
    }
    function statgrade(){
        return view('user-menu.statgrade');
    }
}   
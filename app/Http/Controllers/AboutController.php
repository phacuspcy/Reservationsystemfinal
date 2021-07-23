<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function template(){
        return view('layouts.template');
    }
    function header(){
        return view('layouts.header');
    }
    function slidebar(){
        return view('layouts.slidebar');
    }
    function login(){
        return view('auth.login');
    }
    function logout(){
        return view('auth.logout');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function editsubject(){
        return view('admin.subjectadmin');
    }
    function editreservation(){
        return view('admin.editreservation');
    }
    function editstat(){
        return view('admin.editstatreservation');
    }
    function editstatadmin(){
        return view('admin.editstatadmin');
    }
    function editgrade(){
        return view('admin.editgrade');
    }
    function editgradeadmin(){
        return view('admin.editgradeadmin');
    }
}

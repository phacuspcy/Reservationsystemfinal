<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function managesubject(){
        return view('admin.managesubject');
    }
    function managereservation(){
        return view('admin.managereservation');
    }
    function managestatic(){
        return view('admin.managestatic');
    }
    function editstatadmin(){
        return view('admin.editstatadmin');
    }
    function editgrade(){
        return view('admin.editgrade');
    }
    function managegradeadmin(){
        return view('admin.managegradeadmin');
    }
    function addsubject(){
        return view('admin.addsubject');
    }
    function editsubject(){
        return view('admin.editsubject');
    }
}

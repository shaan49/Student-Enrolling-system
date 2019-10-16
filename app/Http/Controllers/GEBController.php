<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GEBController extends Controller
{
    public function geb(){


    	$geb_student_info=DB::table('student_tbl')->where(['student_department' =>4])->get();



    	$system_student=view('admin.geb')->with('geb_student_info', $geb_student_info);
    	return view('layout')->with('geb', $system_student);
    	return view('admin.geb');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AllstudentsController extends Controller
{
    public function allstudent(){
    	
    	$all_student_info=DB::table('student_tbl')->get();

    	$manage_student=view('admin.allstudent')->with('all_student_info', $all_student_info);
    	return view('layout')->with('allstudent', $manage_student);

    }

    public function student_delete($student_id){

    		DB::table('student_tbl')->where('student_id', $student_id)->delete();

    		return Redirect::to('/allstudent');

    }

    public function studentView($student_id){

    	$student_description_view=DB::table('student_tbl')->select('*')
        ->where('student_id', $student_id)->first();

      $student_description=view('admin.studentView')->with('student_profile', $student_description_view);
      return view('layout')->with('admin.studentView', $student_description);

       

    }

    public function studentEdit($student_id){
         $student_description_view=DB::table('student_tbl')->select('*')
         ->where('student_id',$student_id)->first();
        
   $manage_student=view('admin.studentEdit')->with('student_profile', $student_description_view);
   return view('layout')->with('studentEdit', $manage_student);

      }
      public function studentUpdate(Request $request, $student_id){
    
        $data=array();

        $data['student_name']=$request->student_name;
         $data['student_roll']=$request->student_roll;
          $data['student_fathersname']=$request->student_fathersname;
           $data['student_mothersname']=$request->student_mothersname;
            $data['student_email']=$request->student_email;
             $data['student_address']=$request->student_address;
              $data['student_password']=$request->student_password;
               $data['student_admissionyear']=$request->student_admissionyear;

               DB::table('student_tbl')->where('student_id',$student_id)->update($data);

               Session::put('exception', 'student update successfully');
               return Redirect::to('allstudent');

}

}

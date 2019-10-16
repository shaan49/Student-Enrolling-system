<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

session_start();

class AddstudentsController extends Controller
{		
	private $table='student_tbl';


    public function addstudent(){
    	return view('admin.addstudent');
    }

      public function save_student(Request $request){
    	

    		$student_name=$request->student_name;
    		$student_roll=$request->student_roll;
    		$student_fathersname=$request->student_fathersname;
    		$student_mothersname=$request->student_mothersname;
    		$student_phone=$request->student_phone;
    		$student_email=$request->student_email;
    		$student_address=$request->student_address;
    		$student_password=md5($request->student_password);
    		$student_department=$request->student_department;
    		$student_admissionyear=$request->student_admissionyear;
    		$student_image=$request->file('student_image');
    		



    		 if ($student_image) {
           $student_image_filename = $student_image->getClientOriginalName();
           $student_image->move(public_path('images'),$student_image_filename);
       }
       else{
            $student_image_filename ='noimagesjpg';
       }
    		

 DB::table($this->table)->insert(
        [
                'student_name'        =>$student_name,
                'student_roll' =>$student_roll,
                'student_fathersname'=>$student_fathersname,
                'student_mothersname'    =>$student_mothersname,
                'student_phone'    =>$student_phone,
                'student_email'    =>$student_email,
                'student_address'    =>$student_address,
                'student_password'    =>$student_password,
                'student_department'    =>$student_department,
                'student_admissionyear'    =>$student_admissionyear,
                'student_image'    =>$student_image



        ]
    );

    		
    		 //set message 
       \Session ::flash('message','Student Added Successfully');
       //redirect
        return \ Redirect::to('/allstudent');
    }

}

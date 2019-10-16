<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
class TeacherController extends Controller
{	private $table='teachers_tbl';
 

    public function addTeacher(){

    	return view('admin.addteacher');
    }
        public function saveteacher(Request $request){
    	

    		$teachers_name=$request->teachers_name;
    		$teachers_phone=$request->teachers_phone;
    		$teachers_address=$request->teachers_address;
    		$teachers_department=$request->teachers_department;
    		
    		



    	

 DB::table($this->table)->insert(
        [
                'teachers_name'        =>$teachers_name,
                'teachers_phone' =>$teachers_phone,
                'teachers_address'=>$teachers_address,
                'teachers_department'    =>$teachers_department,
                


        ]
    );
 \Session ::flash('message','Teacher Added Successfully');
       //redirect
        return \ Redirect::to('/allteachers');

}	
	
	 public function allTeacher(){
    	
    	$all_teacher_info=DB::table('teachers_tbl')->get();

    	$manage_teacher=view('admin.allteachers')->with('all_teacher_info', $all_teacher_info);
    	return view('layout')->with('allteachers', $manage_teacher);

    }

    public function teacherView($teachers_id){
            $teacher_description_view=DB::table('teachers_tbl')->select('*')
        ->where('teachers_id', $teachers_id)->first();

      $teacher_description=view('admin.teacherView')->with('teacher_profile', $teacher_description_view);
      return view('layout')->with('admin.teacherView', $teacher_description);


    }
    public function teacherEdit($teachers_id){

               $teacher_description_view=DB::table('teachers_tbl')->select('*')
         ->where('teachers_id',$teachers_id)->first();
        
   $manage_teacher=view('admin.teacherEdit')->with('teacher_profile', $teacher_description_view);
   return view('layout')->with('teacherEdit', $manage_teacher);

      }



            public function teacherUpdate(Request $request, $teachers_id){
    
        $data=array();

        $data['teachers_name']=$request->teachers_name;
         $data['teachers_phone']=$request->teachers_phone;
          $data['teachers_address']=$request->teachers_address;
           $data['teachers_department']=$request->teachers_department;
            

               DB::table('teachers_tbl')->where('teachers_id',$teachers_id)->update($data);

               Session::put('exception', 'teacher update successfully');
               return Redirect::to('/allteachers');

}
            
             public function teacherDelete($teachers_id){

            DB::table('teachers_tbl')->where('teachers_id', $teachers_id)->delete();

            return Redirect::to('/allteachers');
}


        


}


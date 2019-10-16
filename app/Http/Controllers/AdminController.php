<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller

{
    private $table='admin_tbl';


      public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id,', null);

        return Redirect::to('/backend');
      }


    public function admin_dashboard(){
      return view('admin.dashboard'); 
    }


  public function login_dashboard(Request $request){
  		$email = $request->admin_email;
  		$password = md5($request->admin_password);
  		$result= DB::table('admin_tbl')
  		->where('admin_email',$email)
  		->where('admin_password', $password)
  		->first();


  		if ($result) {
        Session::put('admin_email',$result->admin_email);
       
  			return Redirect::to('admin_dashboard');
  		}

  		else{
       Session::put('exception','Email or Password invalid');
  			return Redirect::to('/backend');


  		}

  }

  public function view(){

    return view('admin.view');
  }

  public function settings(){

    return view('admin.settings');
  }
  public function admin_signup(){
          return view('admin.admin_signup');
            }
     public function admin_save(Request $request){
      

        $admin_name=$request->admin_name;
        $admin_phone=$request->admin_phone;
        $admin_password=md5($request->admin_password);
        $admin_email=$request->admin_email;
  
 DB::table($this->table)->insert(
        [
                'admin_name'        =>$admin_name,
                'admin_phone' =>$admin_phone,
                'admin_password'=>$admin_password,
                'admin_email'    =>$admin_email,
                


        ]
    );

        
         //set message 
       \Session ::flash('message','Student Added Successfully');
       //redirect
        return \ Redirect::to('/admin_dashboard');
    }

     public function admin_view($admin_id){

      //$admin_description_view=DB::table('admin_tbl')->select('*')
      //  ->where('admin_id', $admin_id)->first();

     // $admin_description=view('admin.view')->with('admin_profile', $admin_description_view);
      //return view('layout')->with('admin.view', $admin_description);

       return view('admin.admin_view');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutionController extends Controller
{
    public function tutionfees(){
    	return view('admin.tution_fees');
    }
}

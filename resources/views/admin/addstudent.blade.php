@extends('layout')
@section('content')

     <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                      	 <p class="alert-success"><?php
              $message=Session::get('message');
              if ($message) {
                echo "$message";
                Session::put('message', null);
              }
              ?></p>
                          <h2 class="card-title">Basic form elements</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('save_student')}}">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                          	
       <input type="text" class="form-control p-input" value="{{ old('student name') }}" required autofocus name="student_name" aria-describedby="emailHelp" placeholder="Student Name">
                              </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                          	
       <input type="text" class="form-control p-input" value="{{ old('student roll') }}" required autofocus name="student_roll" aria-describedby="emailHelp" placeholder="Student Roll">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Fathers Name</label>
                                  <input type="text" class="form-control p-input" value="{{ old('student fathers name') }}" required autofocus name="student_fathersname" placeholder="Student Fathers Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mothers Name</label>
                                  <input type="text" class="form-control p-input" value="{{ old('student mothers name') }}" required autofocus name="student_mothersname"  placeholder="Student Mothers Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" value="{{ old('student phone') }}" required autofocus name="student_phone" placeholder="Student Phone">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" value="{{ old('student email') }}" required autofocus name="student_email" placeholder="Student Email">
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" value="{{ old('student address') }}" required autofocus name="student_address" placeholder="Student Address">
                              </div>
                            
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" value="{{ old('student password') }}" required autofocus name="student_password" placeholder="Student Password">
                              </div>
                              
                           <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <button type="submit" class="btn btn-secondary">
                                      	<input type="file" name="student_image">
                                      	</button>
                                      </i>Browse</label>
                                      
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" value="{{ old('student admission year') }}" required autofocus name="student_admissionyear" placeholder="Admission Year">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Student Department</label>
                                  <select class="form-control p-input" value="{{ old('student department') }}" required autofocus name="student_department">
                                  	<option>Choose Department</option>
                                  	<option  value="1">CSE</option>
                                  	<option value="2">BBA</option>
                                  	<option value="3">EEE</option>
                                  	<option value="4">GEB</option>
                                  	<option value="5">MBA</option>
                                  	
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
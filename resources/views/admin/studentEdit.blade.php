@extends('layout')
@section('content')

     <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                      	 <p class="alert-success"><?php
              $exception=Session::get('exception');
              if ($exception) {
                echo "$exception";
                Session::put('exception', null);
              }
              ?></p>
                          <h2 class="card-title">Basic form elements</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('update_student', $student_profile->student_id)}}">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                          	
       <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Student Name" value="{{ $student_profile->student_name }}">
                              </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                          	
       <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" value="{{ $student_profile->student_roll }}" >
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Fathers Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" value="{{ $student_profile->student_fathersname }}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mothers Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" value="{{ $student_profile->student_mothersname }}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{ $student_profile->student_phone }}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" value="{{ $student_profile->student_email }}">
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address"value="{{ $student_profile->student_address }}" >
                              </div>
                            
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{ $student_profile->student_password }}">
                              </div>
                              
                           <div class="form-group">
                                    
                                      
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear"  value="{{ $student_profile->student_admissionyear }}">
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
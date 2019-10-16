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
                          <form class="forms-sample" method="post" action="{{URL::to('teacher_update', $teacher_profile->teachers_id)}}">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                          	
       <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Teacher Name" value="{{ $teacher_profile->teachers_name }}">
                              </div> 
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" value="{{ $teacher_profile->teachers_phone }}">
                              </div>                             
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address"value="{{ $teacher_profile->teachers_address }}" >
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department</label>
                                  <input type="text" class="form-control p-input" name="teachers_department"value="{{ $teacher_profile->teachers_department }}" >
                              </div>

                      <div class="form-group">
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection
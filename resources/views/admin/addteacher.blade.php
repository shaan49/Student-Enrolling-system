@extends('layout')
@section('content')

     <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                         
                          <h2 class="card-title">ADD Teacher</h2>
                          <form class="forms-sample" method="post" action="{{URL::to('save_teacher')}}">
                            {{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                            
       <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Teacher Name">
                              </div>
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                            
       <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" placeholder="Teacher Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" placeholder="Teacher Address">
                              </div>
                            
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Department</label>
                                  <select class="form-control p-input" name="teachers_department">
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
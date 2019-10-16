@extends('layout')

@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($mba_student_info as $view_student)
                      <tr>
                          <td>{{$view_student->student_roll}}</td>
                          <td>{{$view_student->student_name}}</td>
                          <td>{{$view_student->student_phone}}</td>
                          <td>no image</td>
                         
                           <td>{{$view_student->student_address}}</td>
                          <td>
                            
                @if($view_student->student_department== 1)
                <span class="label label-success">{{'CSE'}}</span>
                @elseif($view_student->student_department== 2)
                <span class="label label-success">{{'BBA'}}</span>
                @elseif($view_student->student_department== 3)
                <span class="label label-success">{{'EEE'}}brack</span>
                @elseif($view_student->student_department== 4)
                <span class="label label-success">{{'GEB'}}</span>
                @elseif($view_student->student_department== 5)
                <span class="label label-success">{{'MBA'}}</span>
                @endif
                  

                          </td>
                         
                          
                    
                          <td>
                            <button class="btn btn-outline-primary sm-2">View</button>
                            <button class="btn btn-outline-warning sm-2">edit</button>
                            <button class="btn btn-outline-danger sm-2">Delete</button>
                          </td>
                      </tr>
                      @endforeach
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection
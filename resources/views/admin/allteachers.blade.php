@extends('layout')

@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All teachers </h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          
                          <th>Teachers Name</th>
                          <th>Teachers Phone</th>
                          <th>TeachersAddress</th>
                          <th>Teachers Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_teacher_info as $view_teacher)
                      <tr>
                          <td>{{$view_teacher->teachers_name}}</td>
                          <td>{{$view_teacher->teachers_phone}}</td>
                          <td>{{$view_teacher->teachers_address}}</td>

                       
                         
                          
                          <td>
                          	
								@if($view_teacher->teachers_department== 1)
								<span class="label label-success">{{'CSE'}}</span>
								@elseif($view_teacher->teachers_department== 2)
								<span class="label label-success">{{'BBA'}}</span>
								@elseif($view_teacher->teachers_department== 3)
								<span class="label label-success">{{'EEE'}}</span>
								@elseif($view_teacher->teachers_department== 4)
								<span class="label label-success">{{'GEB'}}</span>
								@elseif($view_teacher->teachers_department== 5)
								<span class="label label-success">{{'MBA'}}</span>
								@endif
									

                          </td>
                         
                          
                    
                          <td>
           <a href="{{ URL::to('/teacherView',$view_teacher->teachers_id) }}"><button class="btn btn-outline-primary sm-2">View</button></a>
           <a href="{{ URL::to('/teacherEdit',$view_teacher->teachers_id) }}">
            <button class="btn btn-outline-warning sm-2">edit</button>
          </a>

            <a  href="{{ URL::to('teacher_delete',$view_teacher->teachers_id)}} ">
          <button class="btn btn-outline-danger sm-2" class="alert alert-warning" >Delete</button>
        </a>
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
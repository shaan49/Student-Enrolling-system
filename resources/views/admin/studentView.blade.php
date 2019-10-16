@extends('layout')
@php

	function convert_department ($value){

		$values=[
			1=>'CSE',
			2=>'BBA',
			3=>'EEE',
			4=>'GEB',
			5=>'MBA',
			
		];
		return $values[$value];
	}
@endphp

@section('content')
  

	<table>
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p style="font-size: 30px;" class="name">{{ $student_profile->student_name }}</p>
                   <p class="designation">{{ $student_profile->student_id}}</p>
                  <p class="designation">{{ convert_department($student_profile->student_department )}}</p>
                  <a class="email" href="#">{{ $student_profile->student_email }}</a>
                  <a class="number" href="#">{{ $student_profile->student_phone }}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>This is the profile you looking for the main thisn i wanted to know the shoe of life but thorow in th cornet at the main section</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                     <b><i>Fathers name: </i></b>
                      <span style="font-size: 18px;">{{ $student_profile->student_fathersname }} </span>
                    </a>
                    <a class="social-link">
                    <b> <i> Student Mothers Name:</i></b>
                      <span style="font-size: 18px;">{{ $student_profile->student_mothersname }}</span>
                    </a>
                    <a class="social-link">
                    <b> <i> Student Department:</i></b>
                      <span style="font-size: 18px;">{{ convert_department($student_profile->student_department )}}</span>
                    </a>
                    <a class="social-link">
                    <b> <i> Student Address:</i></b>
                      <span style="font-size: 18px;">{{ $student_profile->student_address }}</span>
                    </a>
                    <a class="social-link">
                    <b> <i> Student Admission Year:</i></b>
                      <span style="font-size: 18px;">{{ $student_profile->student_admissionyear }}</span>
                    </a>
                   
                  </div>
                  </table>
              </div>
                </div>
              </div>
            </div>
            
</div>


@endsection
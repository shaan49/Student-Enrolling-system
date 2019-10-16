@extends('layout')
@section('content')
  <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <a href="/allstudent">
                  <h2 class="card-title">All Students</h2>
                  @php

                  $student=DB::table('student_tbl')
                          ->count('student_id')

                  @endphp
                 <p style="font-size: 30px; font-family: cursive; text-align: center;">{{ $student }}</p>
                </div>
              </a>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <a href="/allteachers">
                <div class="card-body">

                  <h2 class="card-title">All Teacher</h2>

                  @php
                  $teacher=DB::table('teachers_tbl')
                      ->count('teachers_id')
                  @endphp
                   <p style="font-size: 30px; font-family: cursive; text-align: center;">{{ $teacher }}</p>
                </div>
              </a>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <a href="{{ URL::to('tutions_fees') }}"> 
                <div class="card-body">
                  <h2 class="card-title">Tution Fees</h2>
                   <p style="font-size: 30px; font-family: cursive; text-align: center;">3500tk monthly</p>
                </div>
              </a>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                   <p style="font-size: 30px; font-family: cursive; text-align: center;">Revenue</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          

         
       

        
            
@endsection
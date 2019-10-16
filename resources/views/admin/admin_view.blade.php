@extends('layout')

@section('content')
  

  <table>
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p style="font-size: 30px;" class="name">{{ $admin_profile->admin_name }}</p>
                   <p class="designation">{{ $admin_profile->admin_id}}</p>
                  
                  <a class="email" href="#">{{ $admin_profile->admin_email }}</a>
                  <a class="number" href="#">{{ $admin_profile->admin_phone }}</a>
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
                    
                   
                    <a class="social-link">
                    <b> <i> Admin Address:</i></b>
                      <span style="font-size: 18px;">{{ $admin_profile->admin_address }}</span>
                    </a>
                   
                   
                  </div>
                  </table>
              </div>
                </div>
              </div>
            </div>
            
</div>


@endsection
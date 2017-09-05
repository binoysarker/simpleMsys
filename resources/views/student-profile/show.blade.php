@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Show Student Profile
@endsection
@section('student-profile')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          {{-- displaying information about the student --}}
        <div class="card">
        @if ($studentprofile)
          <img src="{{ url('/storage') }}{{'/'.$studentprofile->profile}} " style="height: 16rem; width: 16rem;" alt="img">
       
          <div class="card-block">
            <h4 class="card-title">Student Detail</h4>
            <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Student Name:</strong>
                  {{$studentprofile->student_name}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Father Name:</strong>
                  {{$studentprofile->student_fatherName}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Mother Name:</strong>
                  {{$studentprofile->student_motherName}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Mobile Number:</strong>
                  {{$studentprofile->student_mobileNumber}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Email Address:</strong>
                  {{$studentprofile->student_email}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Student Subject:</strong>
                  {{$studentprofile->student_subject}}
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                  <strong>Student Address:</strong>
                  {{$studentprofile->student_address}}
                </li>
              </ul>
                
                  @else
                <h2 class="title_two singlecourse_price wow fadeInLeft">No Data to display. Please create a student profile</h2>
                <a href="{{ url('/msys/student-profile') }}{{'/'.$studentprofile->id}}" class="btn btn-primary">Create Student Profile</a>      
              
              @endif
          </div>
        </div>
      </div>

      {{-- side bar section --}}
      @include('partials.sidebar')
    </div>
  </div>
@endsection
    
    
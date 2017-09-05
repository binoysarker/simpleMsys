@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Student Profile
@endsection
@section('student-profile')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

        {{-- message section --}}
        @include('partials.message')
      
        <table class="table table-hover table-sm ">
          <legend>All students Detail</legend>
          <a href="{{ url('/msys/student-profile/create') }}" class="btn btn-info" title="">Create Student Profile</a>
          <thead>
            <tr>
              <th>Name</th>
              <th>FatherName</th>
              <th>MotherName</th>
              <th>MobileNumber</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Student Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($studentprofile as $profile)
              {{-- expr --}}
              <tr>
                <td><a href="{{ url('/msys/student-profile/'.$profile->id) }}">{{substr($profile->student_name, 0,6)."..."}}</a></td>
                <td>{{substr($profile->student_fatherName, 0,6)."..."}}</td>
                <td>{{substr($profile->student_motherName, 0,6)."..."}}</td>
                <td>{{substr($profile->student_mobileNumber, 0,6)."..."}}</td>
                <td>{{substr($profile->student_email, 0,6)."..."}}</td>
                <td>{{substr($profile->student_subject, 0,6)."..."}}</td>
                <td>{{substr($profile->student_address, 0,6)."..."}}</td>
                <td>
                  <form action="{{ url('msys/student-profile') }}{{'/'.$profile->id}}" method="post">
                     {{csrf_field()}}
                     {{method_field('DELETE')}}
                     
                      <a href="{{ url('msys/student-profile') }}{{'/'.$profile->id.'/edit'}} " class="btn btn-warning btn-sm" title="">Edit</a>
                      <input type="submit" name="submit" style="cursor: pointer;" value="Delete" class="btn btn-danger btn-sm">
                  </form>
                </td>
              </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>

     {{-- iff need create another thing here --}}

    </div>
  </div>
@endsection
    
    
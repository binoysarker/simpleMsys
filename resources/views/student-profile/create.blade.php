@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Creat Student Profile
@endsection
@section('student-profile')
  <div class="container mb-2">
    <div class="row">
      <div class="col-lg-8">

        {{-- displaying error message from the server --}}
        @include('partials.errormessage')

        <form action="{{ url('/msys/student-profile') }}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}} 
          <fieldset class="form-group">
            <label for="name1">Student name</label>
            <input type="text" name="student_name" id="name1" class="form-control" required="" placeholder="Student name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name2">Father name</label>
            <input type="text" name="student_fatherName" id="name2" class="form-control" required="" placeholder="Father name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name3">Mother name</label>
            <input type="text" name="student_motherName" id="name3" class="form-control" required="" placeholder="Mother name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Mobile Number</label>
            <input type="number" maxlength="15" id="name4" name="student_mobileNumber" class="form-control" required="" placeholder="Mobile Number">
          </fieldset>
          <fieldset class="form-group">
            <label for="name5">Email address</label>
            <input type="email" id="name5" name="student_email" class="form-control" required="" placeholder="Email address">
          </fieldset>
          <fieldset class="form-group">
            <label for="name5">Subject</label>
            <input type="text" id="name5" name="student_subject" class="form-control" required="" placeholder="Subject">
          </fieldset>
          <fieldset class="form-group">
            <label for="name6">Upload Image</label>
            <input type="file" id="name6" name="profile" class="form-control" required="" placeholder="Upload Image">
          </fieldset>
          <fieldset class="form-group">
            <label for="name7">student Address</label>
            <textarea class="form-control"  id="name7" name="student_address" rows="5" required="" placeholder="Your home address"></textarea>
          </fieldset>
          <fieldset >
            <input type="submit" name="submit" class="btn btn-primary" style="cursor: pointer;" value="Apply Now" >
            <br>
          </fieldset>
        </form>
      </div>

      {{-- side bar section --}}
      @include('partials.sidebar')

    </div>
  </div>

  
@endsection
    

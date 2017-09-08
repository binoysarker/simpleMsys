@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Edit Student Profile
@endsection
@section('student-profile')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

        {{-- displaying error message from the server --}}
        @include('partials.errormessage')

        <form action="{{ url('msys/student-profile') }}{{"/".$studentprofile->id}}" method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <fieldset class="form-group">
            <label for="name1">Student name</label>
            <input type="text" id="name1" class="form-control" name="student_name" required="" value="{{$studentprofile->student_name}}" placeholder="Your name">
          <fieldset class="form-group">
            <label for="name2">Father name</label>
            <input type="text" id="name2" class="form-control" name="student_fatherName" required="" value="{{$studentprofile->student_fatherName}}" placeholder="Father name">
          <fieldset class="form-group">
            <label for="name3">Mother name</label>
            <input type="text" id="name3" class="form-control" name="student_motherName" required="" value="{{$studentprofile->student_motherName}}" placeholder="Mother name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Mobile Number</label>
            <input type="number" id="name4" class="form-control" name="student_mobileNumber" required="" value="{{$studentprofile->student_mobileNumber}}" placeholder="Mobile name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Email address</label>
            <input type="text" id="name6" class="form-control" name="student_email" required="" value="{{$studentprofile->student_email}}" placeholder="Subject">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Subject</label>
            <input type="text" id="name6" class="form-control" name="student_subject" required="" value="{{$studentprofile->student_subject}}" placeholder="Subject">
          </fieldset>
          <fieldset class="form-group">
            <label for="name5">Year</label>
            <input type="number" id="name5" class="form-control" name="year" required="" value="{{$studentprofile->year}}" placeholder="Year">
          </fieldset>
          <fieldset class="form-group">
            <label for="name6">Home Address</label>
            <textarea class="wp-form-control wpcf7-textarea" id="name6" name="student_address" required="" value="" cols="30" rows="10" placeholder="Your home
            address">{{$studentprofile->student_address}}</textarea>
          </fieldset>
          <fieldset>
            <input type="submit" name="submit" value="Update Profile" style="cursor: pointer;" class="btn btn-primary">
          </fieldset>
        </form>
      </div>

      {{-- side bar section --}}
      @include('partials.sidebar')
    </div>
  </div>
@endsection
    
    
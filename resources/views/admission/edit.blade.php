@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Edit Admission Result
@endsection
@section('admission')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        
        {{-- message section --}}
        @include('partials.message')

        {{-- displaying error message from the server --}}
        @include('partials.errormessage')

        <form action="{{ url('msys/admission/'.$showStudentDetail->id) }}" method="POST">
          {{csrf_field()}} 
          {{method_field('PUT')}}
          <fieldset class="form-group">
            <label for="name1">Student name</label>
            <input type="text" id="name1" name="student_name" class="form-control" required="" value="{{$showStudentDetail->student_name}} " placeholder="Student name">
          <fieldset class="form-group">
            <label for="name2">Student Class</label>
            <input type="number" id="name2" name="student_class" class="form-control" required="" value="{{$showStudentDetail->student_class}}" placeholder="{{$showStudentDetail->student_class}}">
          </fieldset>
          <fieldset class="form-group">
            <label for="name3">Roll number</label>
            <input type="number" id="name3" name="student_roll" class="form-control" required="" value="{{$showStudentDetail->student_roll}}" placeholder="{{$showStudentDetail->student_roll}} ">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Student Result</label>
            <input type="text" id="name4" maxlength="15" name="student_result" required="" value="{{$showStudentDetail->student_result}} " class="form-control" placeholder="Student Result">
          </fieldset>
          <fieldset>
            <input type="submit" name="submit" class="btn btn-primary" style="cursor: pointer;" value="Update Student Date">
          </fieldset>
          
        </form>
      </div>

      {{-- side bar section --}}
      @include('partials.sidebar')

    </div>
  </div>

  
@endsection
    

@extends('layouts.master')
@section('title')
  {{-- expr --}}
  Create Admission Result
@endsection
@section('admission')
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

        {{-- displaying error message from the server --}}
        @include('partials.errormessage')

        <form action="{{ url('/msys/admission') }}" method="POST">
          {{csrf_field()}} 
          <fieldset class="form-group">
            <label for="name1">Student name</label>
            <input type="text" name="student_name" id="name1" class="form-control" required="" placeholder="Student name">
          </fieldset>
          <fieldset class="form-group">
            <label for="name2">Student Class</label>
            <input type="number" name="student_class" id="name2" class="form-control" required="" placeholder="Student Class">
          </fieldset>
          <fieldset class="form-group">
            <label for="name3">Roll number</label>
            <input type="number" name="student_roll" id="name3" class="form-control" required="" placeholder="Roll number">
          </fieldset>
          <fieldset class="form-group">
            <label for="name4">Student Result</label>
            <input type="text" id="name4" name="student_result" class="form-control" required="" placeholder="Student Result">
          </fieldset>
          <fieldset>
            <input type="submit" name="submit" class="btn btn-primary" value="Create">
          </fieldset>
        </form>
      </div>

      {{-- side bar section --}}
      @include('partials.sidebar')
    </div>
  </div>

  
@endsection
    

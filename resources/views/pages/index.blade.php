@extends('layouts.master')
@section('title')
	{{-- expr --}}
	Home Page
@endsection
@section('homeContent')
	{{-- expr --}}
	<div class="container">
	  <div class="row">
	    <div class="col-lg-8">
	      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	        </ol>
	        <div class="carousel-inner" role="listbox">
	          <div class="carousel-item active">
	            <img class="d-block img-fluid" src="{{ asset('image/luxmi-2.jpg') }}" alt="First slide">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block img-fluid" src="{{ asset('image/school-exam.jpg') }}" alt="Second slide">
	          </div>
	          <div class="carousel-item">
	            <img class="d-block img-fluid" src="{{ asset('image/classroom.jpg') }}" alt="Third slide">
	          </div>
	        </div>
	        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>
	    </div>
		
		{{-- sidebar section --}}

	    @include('partials.sidebar')
	  </div>
	  	{{--second row for displaying result according to the search result--}}
		<div class="row">
			<div class="col-lg-12">
                {{--display message section--}}
                @include('partials.message')

				{{--form section--}}
                <h2> Search here to display information about the student</h2>
				<form action="{{url('/msys/getResult')}}" method="post" class="form-inline">
                    {{csrf_field()}}
					<div class="form-group">
                        <select class="custom-select" name="year">
							<option value="2017" selected>2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
						</select>
                    </div>
                    <div class="form-group">
						<select class="custom-select" name="class">
							<option selected value="10">class10</option>
							<option value="9">class9</option>
							<option value="8">class8</option>
							<option value="7">class7</option>
							<option value="6">class6</option>
							<option value="5">class5</option>
							<option value="4">class4</option>
							<option value="3">class3</option>
							<option value="2">class2</option>
							<option value="1">class1</option>
						</select>
					</div>
                    <div class="form-group">
						<select class="custom-select" name="options">
							<option selected value="result">Result</option>
							<option value="studentDetail">Student Detail</option>
						</select>
					</div>
                    <div class="form-group">
						<input type="submit" value="Search" class="btn btn-primary">
					</div>
                </form>

                {{--table to display the seaerch result--}}
                <table class="table table-hover">
                @if(isset($profile))
                        <legend><h2>Student Detail information</h2></legend>
                    @foreach($profile as $data)
                            <thead>

                            <tr>
                                    <th>Year</th>
                                    <th>Name</th>
                                    <th>class</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data->year}}</td>
                                    <td>{{$data->student_name}}</td>
                                    <td>{{$data->find($data->id)->result->student_class}}</td>
                                    <td>{{$data->student_fatherName}}</td>
                                    <td>{{$data->student_motherName}}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    @endif
                @if(isset($result))
                        <legend><h2>Student Result information</h2></legend>
                    @foreach($result as $data)
                            <thead>

                            <tr>
                                <th>Year</th>
                                <th>Name</th>
                                <th>class</th>
                                <th>Result</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$data->find($data->id)->profile->year}}</td>
                                    <td>{{$data->find($data->id)->profile->student_name}}</td>
                                    <td>{{$data->student_class}}</td>
                                    <td>{{$data->student_result}}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                        @endif
                </table>
			</div>
		</div>
	</div>

	  
@endsection
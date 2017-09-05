@extends('layouts.master')
@section('title')
	{{-- expr --}}
	Admission Home
@endsection
@section('admission')
	{{-- expr --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="jumbotron">
					<h1 class="display-3">Admission Result!</h1>
					<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<hr class="m-y-md">
					<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
					</p>
				</div>

				{{-- message section --}}
				@include('partials.message')


				{{-- table section --}}
				<table class="table table-hover">
				  <caption>Individual Student result</caption>
				  <span><a href="{{ url('msys/admission/create') }}" class="btn btn-primary">Create Admission Result</a></span>
				  <thead>
				    <tr>
				      <th>Name</th>
				      <th>Class</th>
				      <th>Roll</th>
				      <th>Result</th>
				      <th>Action</th>
				    </tr>
				  </thead>
				  <tbody>
				   @if ($results->isEmpty())
				     {{"No data is in the array"}}
				   @else
				     {{-- false expr --}}
				    @foreach ($results as $result)
				      {{-- expr --}}
				      <tr>
				        <td><a href="{{ url('/msys/student-profile/'.$result->id) }}">{{$result->student_name}} <i class="fa fa-eye"></i></a></td>
				        <td>{{$result->student_class}}</td>
				        <td>{{$result->student_roll}}</td>
				        <td>{{$result->student_result}}</td>
				        <td>
				          <form action="{{ url('msys/admission') }}{{'/'.$result->id}}" method="post">
				             {{csrf_field()}}
				             {{method_field('DELETE')}}
				             
				              <a href="{{ url('/msys/admission') }}{{'/'.$result->id.'/edit'}} " class="btn btn-warning" title="">Edit</a>
				              <input type="submit" name="submit" style="cursor: pointer;" value="Delete" class="btn btn-danger">
				          </form>
				        </td>
				      </tr>
				    @endforeach
				   @endif
				  </tbody>
				</table>
			</div>

			{{-- side bar section --}}
			@include('partials.sidebar')

		</div>
	</div>

	
@endsection
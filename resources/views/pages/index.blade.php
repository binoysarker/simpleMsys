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
	</div>

	  
@endsection
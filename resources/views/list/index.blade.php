@extends('layouts.master')
@section('title')
	{{-- expr --}}
	Ajax Student result List 
@endsection
@section('ajax-list')
	{{-- expr --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				{{-- table section --}}
				<table class="table table-hover" id="divreload">
				{{-- message section --}}
				@include('partials.message')

				<legend>
					<strong>Ajax Student List</strong> 
					<span><a type="button" id="addNew" class="btn btn-primary btn-sm" style="cursor: pointer;" data-toggle="modal" data-target="#modal-1"><i class="fa fa-plus"></i>Add Item</a></span>
				</legend>
					<thead>
						<tr>
							<th>Name</th>
						    <th>Class</th>
						    <th>Roll</th>
						    <th>Result</th>
						</tr>
					</thead>
					<tbody>
							@foreach ($showData as $data)
							<tr class="ourItem" data-toggle="modal" data-target="#modal-1" style="cursor: pointer;">
								{{csrf_field()}}
								{{-- expr --}}
								<input type="hidden" name="" value="{{$data->id}}" id="Itemid">
								<td id="student_name">{{$data->student_name}} </td>
								<td id="student_class">{{$data->student_class}} </td>
								<td id="student_roll">{{$data->student_roll}} </td>
								<td id="student_result">{{$data->student_result}} </td>
							</tr>
							@endforeach
					</tbody>
				</table>




				{{-- modal section --}}

				<div class="modal fade" id="modal-1">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title" id="title">Add Item</h4>
							</div>
							<div class="modal-body">
							
								{{csrf_field()}}
								<input type="hidden" name="" value="" id="addId">

								<p><input type="text" id="addName" class="form-control" required="" placeholder="Student name"></p>
								<p><input type="number" id="addClass" class="form-control" required="" value="" placeholder="Student Class" ></p>
								<p><input type="number" id="addRoll" class="form-control" required="" value="" placeholder="Student Roll" ></p>
								<p><input type="text" id="addResult" class="form-control" required="" placeholder="Student Result"></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" id="delete" data-dismiss="modal" style="display: none;">Delete</button>
								<button type="button" class="btn btn-info" id="save-changes" data-dismiss="modal" style="display: none;">Save Changes</button>
								<button type="button" class="btn btn-primary" id="addButton" data-dismiss="modal" style="cursor: pointer;">Add New</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->


				<!-- {{-- ajax coding section--}}
				<script type="text/javascript" charset="utf-8">
					$(document).ready(function() {
				
						
				
						
				
						
					});
				</script> -->
			</div>
		</div>
	</div>
@endsection
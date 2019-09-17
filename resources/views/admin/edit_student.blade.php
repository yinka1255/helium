<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | Edit Student</title>
	@include('admin.includes.head')

</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	@include('admin.includes.sidemenu')
	<div class="main-content">
		@include('admin.includes.header')
		<hr />
		
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-8">
						<ol class="breadcrumb bc-3">
							<li>
								<a href="{{url('admin/index')}}"><i class="fa-home"></i>Dashboard</a>
							</li>
							<li>
								<a href="{{url('admin/students')}}">Students</a>
							</li>
							<li class="active">
								<a href="#">Edit Students</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
								{{--<a href="{{url('admin/new_admin')}}" class="btn btn-primary"><i class="entypo-user"> </i> Add new</a>--}}
						</div>
					</div>
				</div>
				<br/><br/>
				<form role="form" method="post" action="{{url('admin/update_student')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$student->id}}" />
					<input type="hidden" name="ward1_id" value="{{$wards[0]->id}}" />
					<input type="hidden" name="ward2_id" value="{{$wards[1]->id}}" />
					<div class="row">
						<div class="form-group col-md-12">
							<label for="field-2" class="col-sm-2 control-label">Student's Name</label>
							<div class="col-sm-7">
								<input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Name" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="field-2" class="col-sm-2 control-label">Student ID</label>
							<div class="col-sm-7">
								<input type="text" name="student_id" class="form-control" value="{{$student->student_id}}" placeholder="Student ID" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="field-2" class="col-sm-2 control-label">Class</label>
							<div class="col-sm-7">
								<select name="class_id" class="form-control" required>
									@foreach($class_rooms as $class)
									@if($student->class_id == $class->id)
									<option value="{{$class->id}}" selected>{{$class->name}}</option>
									@else
									<option value="{{$class->id}}" >{{$class->name}}</option>
									@endif
									@endforeach
								</select>
								</select>
							</div>
						</div>
						{{--
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Guardian's Name</label>
							<div class="col-sm-8">
								<input type="text" name="ward1_name" class="form-control" value="{{$wards[0]->name}}" placeholder="Ward1 Name" required>
							</div>
						</div>
						--}}
					</div>
					{{--
					<div class="row">
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Guardian's Phone</label>
							<div class="col-sm-8">
								<input type="text" name="ward1_phone" class="form-control" value="{{$wards[0]->phone}}" placeholder="Ward1 Phone" required>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Guardian's Email</label>
							<div class="col-sm-8">
								<input type="email" name="ward1_email" class="form-control" value="{{$wards[0]->email}}" placeholder="Ward1 Email" required>
							</div>
						</div>
					</div>
					--}}
					{{-- <div class="row">
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Ward2 Name</label>
							<div class="col-sm-8">
								<input type="text" name="ward2_name" class="form-control" value="{{$wards[1]->name}}" placeholder="Ward2 Name" required>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Ward2 Phone</label>
							<div class="col-sm-8">
								<input type="text" name="ward2_phone" class="form-control" value="{{$wards[1]->phone}}" placeholder="Ward2 Phone" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="field-2" class="col-sm-4 control-label">Ward2 Email</label>
							<div class="col-sm-8">
								<input type="email" name="ward2_email" class="form-control"  value="{{$wards[1]->email}}" placeholder="Ward2 Email" required>
							</div>
						</div>
					</div> --}}
					<div class="row">
						<div class="form-group col-md-12">
							<label for="field-2" class="col-sm-2 control-label" style="padding-top: 30px;">Guardian</label>
							<div class="col-sm-7">
								<p>If guardian does not exist below, add new here: <a href="{{url('admin/wards')}}" >Add new guardian </a></p>
								<select name="ward_id" id="ward_input" class="form-control" required>
									@foreach($wards_data as $ward)
									@if($wards[0]->id == $ward->id)
									<option value="{{$ward->id}}" selected>{{$ward->name}} - {{$ward->phone}} - {{$ward->email}}</option>
									@else
									<option value="{{$ward->id}}" >{{$ward->name}} - {{$ward->phone}} - {{$ward->email}}</option>
									@endif
									@endforeach
								</select>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-7">
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-default">Update student</button>
						</div>
					</div>
				</form>
				<br/>
				
			</div>
		</div>
		
		<br />
		<br />
		
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('public/admin/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/rickshaw/rickshaw.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/datatables/datatables.css')}}">
	<script src="{{asset('public/admin/js/datatables/datatables.js')}}"></script>
	@include('admin.includes.script')
	
</body>
</html>
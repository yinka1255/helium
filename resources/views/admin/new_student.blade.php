<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | New Student</title>
	@include('admin.includes.head')
	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
	<style>
		.select2 {
          visibility: visible !important;
      }
	</style>
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
								<a href="#">New Students</a>
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
				<form role="form" method="post" action="{{url('admin/save_student')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Student's Name</label>
						<div class="col-sm-7">
							<input type="text" name="name" class="form-control" placeholder="Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Student ID</label>
						<div class="col-sm-7">
							<input type="text" name="student_id" class="form-control" placeholder="Student ID" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Class</label>
						<div class="col-sm-7">
							<select name="class_id" class="form-control" required>
								@foreach($class_rooms as $class)
								<option value="{{$class->id}}" >{{$class->name}}</option>
								@endforeach
							</select>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label" style="padding-top: 30px;">Guardian</label>
						<div class="col-sm-7">
							<p>If guardian does not exist below, add new here: <a href="{{url('admin/wards')}}" >Add new guardian </a></p>
							<select name="ward_id" id="ward_input" class="form-control" required>
								@foreach($wards as $ward)
								<option value="{{$ward->id}}" >{{$ward->name}} - {{$ward->phone}} - {{$ward->email}}</option>
								@endforeach
							</select>
							</select>
						</div>
					</div>
					{{--
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Guardian's Name</label>
						<div class="col-sm-5">
							<input type="text" name="ward1_name" class="form-control" placeholder="Ward1 Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Guardian's Phone</label>
						<div class="col-sm-5">
							<input type="text" name="ward1_phone" class="form-control" placeholder="Ward1 Phone" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Guardian's Email</label>
						<div class="col-sm-5">
							<input type="email" name="ward1_email" class="form-control" placeholder="Ward1 Email" required>
						</div>
					</div>
					--}}
					{{-- <div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Ward2 Name</label>
						<div class="col-sm-5">
							<input type="text" name="ward2_name" class="form-control" placeholder="Ward2 Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Ward2 Phone</label>
						<div class="col-sm-5">
							<input type="text" name="ward2_phone" class="form-control" placeholder="Ward2 Phone" required>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Ward2 Email</label>
						<div class="col-sm-5">
							<input type="email" name="ward2_email" class="form-control" placeholder="Ward2 Email" required>
						</div>
					</div> --}}
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							<button type="submit" class="btn btn-default">Create student</button>
						</div>
					</div>
				</form>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
	<script>
	$(document).ready(function(){
        function matchCustom(params, data) {
          // If there are no search terms, return all of the data
          if ($.trim(params.term) === '') {
            return data;
          }

          // Do not display the item if there is no 'text' property
          if (typeof data.text === 'undefined') {
            return null;
          }

          // `params.term` should be the term that is used for searching
          // `data.text` is the text that is displayed for the data object
          if (data.text.indexOf(params.term) > -1) {
            var modifiedData = $.extend({}, data, true);
            modifiedData.text += ' (matched)';

            // You can return modified objects from here
            // This includes matching the `children` how you want in nested data sets
            return modifiedData;
          }

          // Return `null` if the term should not be displayed
          return null;
      }
        $("#ward_input").select2({
          matcher: matchCustom,
          width: '100%'
        });
      });
	  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| Wards</title>
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
							<li class="active">
								<a href="#">Wards</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
							<a href="javascript:void(0)" onclick='newWardModal()' class="btn btn-primary"><i class="entypo-users"> </i> Add new guardian</a>
						</div>
					</div>
				</div>
				<h3>Guardians</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Guardian</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($responses as $key=>$response)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td>{{$response->name}}</td>
							<td>{{$response->email}}</td>
							<td>{{$response->phone}}</td>
							<td>
								<a href="{{url('admin/manage_wards_students/'.$response->id)}}" class="btn btn-success btn-sm btn-icon icon-left">
									<i class="entypo-users"></i>
									Manage Wards
								</a>
								<a href="javascript:void(0)" onclick='openEditModal("{{$response->id}}", "{{$response->name}}", "{{$response->email}}", "{{$response->phone}}")' class="btn btn-primary btn-sm btn-icon icon-left">
									<i class="entypo-pencil"></i>
									Edit
								</a>
								{{--
								<a href="{{url('admin/delete_student/'.$response->id)}}" class="btn btn-danger btn-sm btn-icon icon-left">
									<i class="entypo-cancel"></i>
									Delete
								</a>
								--}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
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
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			
		} );

		function newWardModal(){
			$("#newWard").modal("toggle");
		}
		function openEditModal(id, name, email, phone){
			$("#id").val(id);
			$("#name").val(name);
			$("#email").val(email);
			$("#phone").val(phone);
			$("#editWard").modal("toggle");
		}
	</script>
</body>
<div id="newWard" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">New ward</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/new_ward')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Name</label>
					<div class="col-md-12">
						<input type="text" name="name" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Email</label>
					<div class="col-md-12">
						<input type="email" name="email" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Phone</label>
					<div class="col-md-12">
						<input type="phone" name="phone" class="form-control" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class=" col-md-12">
						<button type="submit" class="btn btn-default pull-right">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	
	</div>
</div>
<div id="editWard" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Edit ward</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/edit_ward')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" name="id" id="id" />
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Name</label>
					<div class="col-md-12">
						<input type="text" name="name" id="name" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Email</label>
					<div class="col-md-12">
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Phone</label>
					<div class="col-md-12">
						<input type="phone" name="phone" id="phone" class="form-control" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class=" col-md-12">
						<button type="submit" class="btn btn-default pull-right">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>
	
	</div>
</div>
</html>
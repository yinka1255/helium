<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| {{$class->name}}'s Students</title>
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
					<div class="col-xs-6">
						<ol class="breadcrumb bc-3">
							<li>
								<a href="{{url('admin/index')}}"><i class="fa-home"></i>Dashboard</a>
							</li>
							<li>
								<a href="{{url('admin/classes')}}"><i class="fa-book"></i>Classes</a>
							</li>
							<li class="active">
								<a href="#">{{$class->name}}'s Students</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-6">
						<div class="pull-right">
							<a href="{{url('admin/new_class_bill/'.$class->id)}}" class="btn btn-primary"><i class="entypo-credit-card"> </i> Manage bill for this class</a>
							<a href="javascript:void(0)" onclick="openPromotionModal()" class="btn btn-success"><i class="entypo-users"> </i>Promote all students in this class</a>
						</div>
					</div>
				</div>
				<h3>{{$class->name}}'s Students</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th width="60%">Student</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $key=>$response)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td>{{$response->name}}</td>
							<td>
								<a href="{{url('admin/edit_student/'.$response->id)}}" class="btn btn-primary btn-sm btn-icon icon-left">
									<i class="entypo-pencil"></i>
									Manage
								</a>
								<a href="{{url('admin/delete_student/'.$response->id)}}" class="btn btn-danger btn-sm btn-icon icon-left">
									<i class="entypo-cancel"></i>
									Delete
								</a>
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

		function openPromotionModal(){
			$("#promotionModal").modal("toggle");
		}
	</script>
</body>

<div id="promotionModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Promote {{$class->name}}'s Students</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/promote')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" value="{{$class->id}}" name="id" />
				<div class="form-group">
					<label for="field-2" class="col-sm-2 control-label">New Class</label>
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
					<div class="col-sm-offset-2 col-sm-5">
						<button type="submit" class="btn btn-default">Promote now</button>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| Bills</title>
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
								<a href="#">Bills</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
							{{--<a href="{{url('admin/new_bill')}}" class="btn btn-primary"><i class="entypo-book"> </i> Add new</a>--}}
						</div>
					</div>
				</div>
				<h3>All Bills</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Title</th>
							<th>Type</th>
							<th>Name</th>
							<th>Session</th>
							<th>Term</th>
							<th>Amount</th>
							<th>Due date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bills as $key=>$bill)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td>{{$bill->title}}</td>
							@if($bill->type == 1)
							<td>Class</td>
							@elseif($bill->type == 2)
							<td>Student</td>
							@endif
							<td>{{$bill->class_name}}</td>
							<td>{{$bill->session_name}}</td>
							<td>{{$bill->term}}</td>
							<td>{{$bill->amount}}</td>
							<td>{{$bill->due_date}}</td>
							<td>
								@if($bill->type == 1)
								<a href="{{url('admin/bill_class_details/'.$bill->type_id.'/'.$bill->id)}}" class="btn btn-success btn-sm btn-icon icon-left">
									<i class="entypo-users"></i>
									Manage
								</a>
								@elseif($bill->type == 2)
								<a href="{{url('admin/manage_student_bill/'.$bill->id)}}" class="btn btn-success btn-sm btn-icon icon-left">
									<i class="entypo-users"></i>
									Manage
								</a>
								@endif
								<a href="{{url('admin/delete_bill/'.$bill->id)}}" class="btn btn-danger btn-sm btn-icon icon-left">
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
	</script>
</body>
</html>
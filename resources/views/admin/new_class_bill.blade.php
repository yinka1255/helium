<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| New Class Bill</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
				<div class="col-xs-8">
					<ol class="breadcrumb bc-3">
						<li>
							<a href="{{url('admin/index')}}"><i class="fa-home"></i>Dashboard</a>
						</li>
						<li>
							<a href="{{url('admin/classes')}}"><i class="fa-book"></i>Classes</a>
						</li>
						<li>
							<a href="{{url('admin/classe_students/'.$class->id)}}">{{$class->name}}'s Students</a>
						</li>
						<li class="active">
							<a href="#">New class bill for {{$class->name}}</a>
						</li>
					</ol>
				</div>
				<div class="col-xs-4">
					<div class="pull-right">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#newBill" class="btn btn-primary"><i class="entypo-book"> </i> Add new bill for this class</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Bills for {{$class->name}}</h3>
					</div>
				</div>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Title</th>
							<th>Type</th>
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
							<td>{{$bill->session_name}}</td>
							<td>{{$bill->term}}</td>
							<td>{{$bill->amount}}</td>
							<td>{{$bill->due_date}}</td>
							<td>
								<a href="{{url('admin/class_bill_details/'.$class->id.'/'.$bill->id)}}" class="btn btn-success btn-sm btn-icon icon-left">
									<i class="entypo-users"></i>
									Manage
								</a>
								
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
	<script src="{{asset('public/admin/js/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('public/admin/js/ckeditor/adapters/jquery.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	@include('admin.includes.script')
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			$( "#datepicker" ).datepicker();
			
		} );
	</script>
</body>

<div id="newBill" class="modal fade" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">New bill</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/save_class_bill')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" name="class_id" value="{{$class->id}}" />
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Session</label>
					<div class="col-md-12">
						<select name="session_id" class="form-control" required>
							@foreach($sessions as $session)
							<option value="{{$session->id}}">{{$session->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Term</label>
					<div class="col-md-12">
						<select name="term" class="form-control" required>
							<option >1st Term</option>
							<option >2nd Term</option>
							<option >3rd Term</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Amount</label>
					<div class="col-md-12">
						<input type="number" name="amount" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Due date</label>
					<div class="col-md-12">
						<input type="text" name="due_date" class="form-control" id="datepicker" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Title</label>
					<div class="col-md-12">
						<input type="text" name="title" class="form-control" placeholder="Title" required>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Description</label>
					<div class="col-md-12">
						<textarea name="description" class="form-control ckeditor required">
							
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<div class=" col-md-12">
						<button type="submit" class="btn btn-default pull-right">Create bill</button>
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
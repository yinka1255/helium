<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | Manage Student Bills</title>
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
								<a href="#">Manage Student bills</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#newBill" class="btn btn-primary"><i class="entypo-book"> </i> Add new bill for this student</a>
						</div>
					</div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-6">
						<table style="width: 100%;">
							<tr>
								<td class="grey">
									Student
								</td>
								<td class="light">
										{{$student->name}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Student ID
								</td>
								<td class="light">
										{{$student->student_id}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Class
								</td>
								<td class="light">
									{{$student->class_name}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Guardian's name
								</td>
								<td class="light">
									{{$wards[0]->name}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Guardian's Phone
								</td>
								<td class="light">
									{{$wards[0]->phone}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Guardian's Email
								</td>
								<td class="light">
									{{$wards[0]->email}}
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br/>
				<h3>{{$student->name}}'s unsettled bills</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Title</th>
							<th>Session</th>
							<th>Term</th>
							<th>Due date</th>
							<th>Amount due</th>
							<th>Amount paid</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bill_details as $key=>$bill_detail)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td>{{$bill_detail->title}}</td>
							<td>{{$bill_detail->session_name}}</td>
							<td>{{$bill_detail->term}}</td>
							<td>{{$bill_detail->due_date}}</td>
							<td>₦{{number_format($bill_detail->amount)}}</td>
							<td>₦{{number_format($bill_detail->total)}}</td>
							<td>
								@if($bill_detail->amount >= $bill_detail->total)
									<button type="button" onclick='openPaymentModal("{{$bill_detail->student_id}}", "{{$bill_detail->bill_id}}","{{$bill_detail->id}}")' class="btn btn-success"><i class="entypo-check"> </i> Manual payment</button>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<br/>
				<hr>
				<h3>{{$student->name}}'s payments</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Title</th>
							<th>Session</th>
							<th>Term</th>
							<th>Due date</th>
							<th>Amount due</th>
							<th>Amount paid</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($transactions as $key=>$transaction)
						<tr class="odd gradeX">
							<td>{{$key + 1}}</td>
							<td>{{$transaction->bill_title}}</td>
							<td>{{$transaction->session_name}}</td>
							<td>{{$transaction->term}}</td>
							<td>{{$transaction->created_at}}</td>
							<td>₦{{number_format($transaction->amount)}}</td>
							<td>₦{{number_format($transaction->amount_paid)}}</td>
							<td>
								@if($transaction->amount >= $transaction->total)
									<button type="button" onclick='openPaymentModal("{{$transaction->student_id}}", "{{$transaction->bill_id}}","{{$transaction->id}}")' class="btn btn-success"><i class="entypo-check"> </i> Manual payment</button>
								@endif
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
	<script>
		function openPaymentModal(studentId, billId, billDetailsId){
			$("#student_id").val(studentId);
			$("#bill_id").val(billId);
			$("#bill_details_id").val(billDetailsId);
			$("#newPayment").modal("show");
		}
	</script>
	
</body>

<div id="newPayment" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Make manual payment for {{$student->name}}</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/manual_payment')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" id="student_id" name="student_id" />
				<input type="hidden" id="bill_id" name="bill_id" />
				<input type="hidden" id="bill_details_id" name="bill_details_id" />
				<div class="form-group">
					<label for="field-2" style="text-align: left !important;" class="col-sm-2 control-label">Amount</label>
					<div class="col-md-12">
						<input type="number" name="amount" class="form-control" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class=" col-md-12">
						<button type="submit" class="btn btn-default pull-right">Make payment</button>
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

<div id="newBill" class="modal fade" role="dialog">
	<div class="modal-dialog">
	
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">New bill</h4>
		</div>
		<div class="modal-body">
			<form role="form" method="post" action="{{url('admin/save_student_bill')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" name="student_id" value="{{$student->id}}" />
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
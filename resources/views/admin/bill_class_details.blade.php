<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon - Admin Panel| Class Bill Details</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	@include('admin.includes.head')

	<style>
		#student_name{
			color:#0bdede;
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
								<a href="{{url('admin/bills')}}"><i class="fa-book"></i>Bills</a>
							</li>
							
							<li class="active">
								<a href="#">{{$class->name}} Bill Details</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
							{{--<a href="javascript:void(0)" data-toggle="modal" data-target="#newBill" class="btn btn-primary"><i class="entypo-book"> </i> Add new</a>--}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
					</div>
					<div class="col-md-5">
						<table style="width: 100%;">
							<tr>
								<td class="grey">
									Class
								</td>
								<td class="light">
										{{$class->name}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Title
								</td>
								<td class="light">
										{{$bill->title}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Session
								</td>
								<td class="light">
									{{$bill->session_name}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Term
								</td>
								<td class="light">
									{{$bill->term}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Amount
								</td>
								<td class="light">
									₦{{number_format($bill->amount)}}
								</td>
							</tr>
							<tr>
								<td class="grey">
									Due date
								</td>
								<td class="light">
									{{$bill->due_date}}
								</td>
							</tr>
						</table>
					</div>
				</div>
				<br/>
				<h3>{{$class->name}} Bill Details</h3>
				<table class="table table-bordered datatable" id="table-1">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Student</th>
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
							<td>{{$bill_detail->student_name}}</td>
							<td>{{$bill->due_date}}</td>
							<td>₦{{number_format($bill->amount)}}</td>
							<td>₦{{number_format($bill_detail->total)}}</td>
							<td>
								@if($bill->amount >= $bill_detail->total)
								<button type="button" onclick='openPaymentModal("{{$bill_detail->student_id}}", "{{$bill_detail->bill_id}}","{{$bill_detail->id}}","{{$bill_detail->student_name}}")' class="btn btn-success"><i class="entypo-check"> </i> manual payment</button>
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

		function openPaymentModal(studentId, billId, billDetailsId, studentName){
			$("#student_id").val(studentId);
			$("#bill_id").val(billId);
			$("#bill_details_id").val(billDetailsId);
			$("#student_name").html(studentName);
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
			<h4 class="modal-title">Make manual payment for <span id="student_name"></span></h4>
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


	  
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>Neon | Edit Admin user</title>
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
								<a href="{{url('admin/admins')}}">Admin users</a>
							</li>
							<li class="active">
								<a href="#">Edit Admin user</a>
							</li>
						</ol>
					</div>
					<div class="col-xs-4">
						<div class="pull-right">
								<a href="{{url('admin/new_admin')}}" class="btn btn-primary"><i class="entypo-user"> </i> Add new</a>
						</div>
					</div>
				</div>
				<br/><br/>
				<form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/update_admin')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$admin->id}}" />
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-5">
							<input type="text" name="name" class="form-control" value="{{$admin->name}}" placeholder="Name" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="email" name="email" value="{{$admin->email}}" class="form-control" placeholder="Email" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-5">
							<input type="text" name="phone" value="{{$admin->phone}}" class="form-control" placeholder="Phone" disabled>
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-5">
							<input type="text" name="password" class="form-control" value="password" placeholder="Password" disabled>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							<button type="submit" class="btn btn-default">Update user info</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<hr>
		<br />
		@if($permissions != null)
		<div class="row">
			<div class="col-md-12">
			<h3><b>Permissions</b></h3><br/>
			<form role="form" method="post" action="{{url('admin/save_permissions')}}" class="form-horizontal ">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{$admin->id}}" />
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper">
								<input type="checkbox" @if($permissions->session_1 == "on") checked @endif id="session_1" name="session_1" >
							</label>
							<label>View sessions</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->session_2 == "on") checked @endif id="session_2" name="session_2" ></label>
							<label>View, Add sessions</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->session_3 == "on") checked @endif id="session_3" name="session_3" ></label>
							<label>View, Add, Edit sessions</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox"  @if($permissions->student_1 == "on") checked @endif  id="student_1" name="student_1" ></label>
							<label>View students</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->student_2 == "on") checked @endif  id="student_2" name="student_2" ></label>
							<label>View, Add students</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->student_3 == "on") checked @endif  id="student_3" name="student_3" ></label>
							<label>View, Add, Edit students</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->bill_1 == "on") checked @endif  id="bill_1" name="bill_1" ></label>
							<label>View bill</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->bill_2 == "on") checked @endif  id="bill_2" name="bill_2" ></label>
							<label>View, Add bill</label>
						</div>
					</div>
					{{--
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->bill_3 == "on") checked @endif  id="bill_3" name="bill_3" ></label>
							<label>View, Add, Edit bill</label>
						</div>
					</div>
					--}}
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->transaction_1 == "on") checked @endif  id="transaction_1" name="transaction_1" ></label>
							<label>View transaction</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->transaction_2 == "on") checked @endif id="transaction_2" name="transaction_2" ></label>
							<label>Make manual payment</label>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->admin_1 == "on") checked @endif id="admin_1" name="admin_1" ></label>
							<label>View admin users</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->admin_2 == "on") checked @endif id="admin_2" name="admin_2" ></label>
							<label>Add admin users</label>
						</div>
					</div>
					<div class="col-md-3">
						<div class="checkbox">
							<label class="cb-wrapper"><input type="checkbox" @if($permissions->admin_3 == "on") checked @endif id="admin_3" name="admin_3" ></label>
							<label>Manage admin users</label>
						</div>
					</div>
				</div>
				
				<div class="form-group" style="margin-top: 20px;">
					<div class="col-sm-12 pull-right">
						<button type="submit" class="btn btn-default">Update user info</button>
					</div>
				</div>
			</form>
		<br /><br/><br/>
		
		</div>
		@else
		<div class="row">
				<div class="col-md-12">
				<h3><b>Permissions</b></h3><br/>
				<form role="form" method="post" action="{{url('admin/save_permissions')}}" class="form-horizontal ">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$admin->id}}" />
					<div class="row">
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper">
									<input type="checkbox"  id="session_1" name="session_1" >
								</label>
								<label>View sessions</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox"  id="session_2" name="session_2" ></label>
								<label>View, Add sessions</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="session_3" name="session_3" ></label>
								<label>View, Add, Edit sessions</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="student_1" name="student_1" ></label>
								<label>View students</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox"  id="student_2" name="student_2" ></label>
								<label>View, Add students</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="student_3" name="student_3" ></label>
								<label>View, Add, Edit students</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="bill_1" name="bill_1" ></label>
								<label>View bill</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="bill_2" name="bill_2" ></label>
								<label>View, Add bill</label>
							</div>
						</div>
						{{--
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="bill_3" name="bill_3" ></label>
								<label>View, Add, Edit bill</label>
							</div>
						</div>
						--}}
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox"  id="transaction_1" name="transaction_1" ></label>
								<label>View transaction</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="transaction_2" name="transaction_2" ></label>
								<label>Make manual payment</label>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="admin_1" name="admin_1" ></label>
								<label>View admin users</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="admin_2" name="admin_2" ></label>
								<label>Add admin users</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="checkbox">
								<label class="cb-wrapper"><input type="checkbox" id="admin_3" name="admin_3" ></label>
								<label>Manage admin users</label>
							</div>
						</div>
					</div>
					
					<div class="form-group" style="margin-top: 20px;">
						<div class="col-sm-12 pull-right">
							<button type="submit" class="btn btn-default">Update user info</button>
						</div>
					</div>
				</form>
			<br /><br/><br/>
			
			</div>
		@endif



	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{asset('public/admin/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/rickshaw/rickshaw.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/js/datatables/datatables.css')}}">
	<script src="{{asset('public/admin/js/datatables/datatables.js')}}"></script>
	@include('admin.includes.script')
	
</body>
</html>
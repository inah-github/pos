<!DOCTYPE html>
<html>
<head>
	<title>Point of Sales System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<!-- Offline -->
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/jquery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">	
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../custom.css">

	<link rel="shortcut icon" href="../logo1.ico" type="image/x-icon"/>


	<!-- Internal_CSS -->
	<style type="text/css">
		body{
		    background-image: url(logo.jpg);
		    background-repeat: ;
		    background-size: 600px 600px;
		    background-position: center;
		    background-position-y: 55px;		
		}
	</style>
	
	<!-- <script type="text/javascript">
	    $(window).on('load',function(){
	        $('#myCustomer').modal('show');
	    });
	</script> -->

</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:" class="navbar-brand">&copy;POS</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-plus-square"></i>&nbsp;Manage&nbsp;<i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu">
						<li class=""><a href="customer.php" type="button">Customer</a></li>
						<li class="active"><a href="supplier.php">Supplier</a></li>
						<li><a href="javascript:">Product</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-clipboard">&nbsp;</i>Reports&nbsp;<i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="javascript:">Sales Report</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-cogs"></i> Maintenance&nbsp;<i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu">
						<li><a href="javascript:">Backup Database</a></li>
						<li><a href="javascript:">Restore Database</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	
	<!-- Customer_Modal -->
	<div class="supplier-information">
		<div id="mySupplier" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal Content -->
				<div class="modal-content">
					<!-- Mdal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 style="text-align: center;">New Customer Information</h3>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-group">
								<label for="">Customer Name</label>
								<input type="text" name="" class="form-control" placeholder="Customer Name">
							</div>
							<div class="form-group">
								<label for="">Customer Account Number</label>
								<input type="text" name="" class="form-control" placeholder="Customer Account Number">
							</div>
							<div class="form-group">
								<label for="">Contact Number</label>
								<input type="text" name="" class="form-control" placeholder="Contact Number">
							</div>
							<div class="form-group">
								<label for="">Address</label>
								<textarea class="form-control" placeholder="Customer Address"></textarea>
							</div>
							<div class="form-group">
								<label for="">Customer Type</label>
								<select class="form-control">
									<option value="walk-in">Walk-in</option>
									<option value="refular">Regular</option>
									<option value="refular">Member</option>
								</select>
							</div>
							<!-- Modal Footer -->
							<div class="modal-footer">
								<input type="reset" class="btn btn-md btn-warning" name="" value="Cancel">
								<input type="button" class="btn btn-md btn-primary" name="" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Customer_Table_Information -->
	<div class="customer-info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- <img style="width: 72px; height: 72px; float: left;" src="../logo.jpg"> -->
					<i style="float: left; margin-right: 20px;" class="fa fa-users fa-5x"></i>
					<h1 class="customer-heading">Supplier Details</h1>
					<br>
				</div>
				<div class="col-md-12">	
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="supplier.php">Supplier</a></li>
						<!-- <a style="float: right;" href="javascript:" type="button" class="btn btn-md btn-primary add-customer" data-toggle="modal" data-target="#myCustomer"><i class="fa fa-plus-circle"></i>&nbsp;New Customer</a> -->
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="customer-search">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<input class="form-control search" type="text" id="myInput" placeholder="Search Customers" title="Type in a name">
					</div>
				</div>
				<div class="col-md-4">
					<a style="float: right;" href="javascript:" type="button" class="btn btn-md btn-primary add-customer" data-toggle="modal" data-target="#mySupplier"><i class="fa fa-plus-circle fa-lg"></i>&nbsp;New Supplier</a>
				</div>
			</div>
		</div>
	</div>

	<div class="show-entries">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<h5 style="float: left; margin-right: 10px;">Show</h5>					
						<select class="form-control" style="width: 8%;">
							<option value="5">5</option>
							<option value="10">10</option>
							<option value="15">15</option>
							<option value="20">20</option>
							<option value="all">All</option>
						</select>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="customer-table">
		<div class="container-fluid">			
			<div class="table-responsive">
				<?php
					echo '<table class="table-striped" border="0" width="100%">';
					echo "<tr>
						<th>Customer ID</th>
						<th>Customer Name</th>
						<th>Customer Account Number</th>
						<th>Contact Number</th>
						<th>Address</th>						
						<th class='actions' colspan=3>Actions</th>
					</tr>";

					echo "<tr>
						<td>Cust-00000001</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='view' type='button' class='btn btn-md btn-primary'><i class='fa fa-eye fa-lg'></i>&nbsp;View</a></td>
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i>&nbsp;Update</a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000002</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='view' type='button' class='btn btn-md btn-primary'><i class='fa fa-eye fa-lg'></i>&nbsp;View</a></td>
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i>&nbsp;Update</a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000003</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='view' type='button' class='btn btn-md btn-primary'><i class='fa fa-eye fa-lg'></i>&nbsp;View</a></td>
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i>&nbsp;Update</a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000004</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='view' type='button' class='btn btn-md btn-primary'><i class='fa fa-eye fa-lg'></i>&nbsp;View</a></td>
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i>&nbsp;Update</a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					

					// View_Blotter
					// $view = mysqli_query($conn,"SELECT * FROM tbl_blotter");
					// while($row = mysqli_fetch_assoc($view)){
					// 	$db_id = $row["blotter_id"];
					// 	$db_date = $row["blotter_date"];
					// 	$db_complainant = $row["complainant"];
					// 	$db_complainant_contact = $row["complainant_contact"];
					// 	$db_complainant_address = $row["complainant_address"];
					// 	$db_defendant = $row["defendant"];
					// 	$db_defendant_contact = $row["defendant_contact"];
					// 	$db_defendant_address = $row["defendant_address"];
					// 	$db_complain = $row["complain"];

					
					// 	echo "<tr>
					// 		<td>$db_id</td>
					// 		<td>$db_date</td>
					// 		<td>$db_complainant</td>
					// 		<td>$db_complainant_contact</td>
					// 		<td>$db_complainant_address</td>
					// 		<td>$db_defendant</td>
					// 		<td>$db_defendant_contact</td>
					// 		<td>$db_defendant_address</td>
					// 		<td>$db_complain</td>
					//		<td><a id='view' type='button' class='btn btn-md btn-primary'><i class='fa fa-eye fa-lg'></i>&nbsp;View</a></td>
					//		<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i>&nbsp;Update</a></td>
					//		<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					// 	</tr>";
					// }
					echo "</table>";


				?>
			</div>
		</div>
	</div>

	<div class="text-center" style="margin-top: 30px;">
		<div class="container-fluid">
			<ul class="pagination">
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			</ul>
		</div>
	</div>

	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Point of Sales</title>

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

	<style type="text/css">
		body{
		    background-image: url(logo.jpg);
		    background-repeat: ;
		    background-size: 600px 600px;
		    background-position: center;
		    background-position-y: 55px;		
		}

	</style>
	

</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<img style="width: 48px; height: 48px; float: left;" src="../INFINITY.png">
				<a href="javascript:" class="navbar-brand">&copy;POS</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-plus-square"></i>&nbsp;Entries&nbsp;<i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu">
						<li class=""><a href="javascript:" data-toggle="modal" data-target="#myProductBrand">Product Brand</a></li>
						<li class=""><a href="javascript:" data-toggle="modal" data-target="#myProductCategory">Product Category</a></li>
						<li class=""><a href="javascript:">Customer Type</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-plus-square"></i>&nbsp;Manage&nbsp;<i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu">
						<li class=""><a href="customer.php" type="button">Customer</a></li>
						<li class=""><a href="supplier.php">Supplier</a></li>
						<li class=""><a href="javascript:">Product</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="javascript:"><i class="fa fa-clipboard">&nbsp;</i>Reports&nbsp;<i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="javascript:">Sales Report</a></li>
						<li><a href="javascript:">Customer Masterlist</a></li>
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

	<!-- Product Brand -->
	<div class="product-brand">
		<div class="modal fade" id="myProductBrand" role="dialog">
			<div class="modal-dialog">
				<!-- Modal Content -->
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 style="text-align: center">Add Product Brand</h3>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-group">
								<label for="">Product Brand ID</label>
								<input type="text" name="" placeholder="Product ID" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Product Brand Code</label>
								<input type="text" name="" placeholder="Product Code" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Product Brand</label>
								<input type="text" name="" placeholder="Product Brand" class="form-control">
							</div>
							<!-- Modal Footer -->
							<div class="modal-footer">
								<div class="form-group">
									<input type="reset" class="btn btn-md btn-primary" name="" value="Cancel">
									<input type="submit" class="btn btn-md btn-primary" name="" value="Submit">
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Category -->
	<div class="product-category">
		<div class="modal fade" id="myProductCategory" role="dialog">
			<div class="modal-dialog">
				<!-- Modal Content -->
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 style="text-align: center">Add Product Category</h3>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-group">
								<label for="">Product Category ID</label>
								<input type="text" name="" placeholder="Product Category ID" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Product Category Code</label>
								<input type="text" name="" placeholder="Product Catgory Code" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Product Category</label>
								<input type="text" name="" placeholder="Product Category" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Product Brand</label>
								<select class="form-control">
									<option value="">--Select Brand--</option>
									<option value="asus">Asus</option>
									<option value="dell">Dell</option>
									<option value="lenovo">Lenovo</option>
								</select>
							</div>
							<!-- Modal Footer -->
							<div class="modal-footer">
								<div class="form-group">
									<input type="reset" class="btn btn-md btn-primary" name="" value="Cancel">
									<input type="submit" class="btn btn-md btn-primary" name="" value="Submit">
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>
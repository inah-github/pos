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
		<!-- Font Awesome 5.0-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


	<!-- Offline -->
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/jquery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">	
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../custom.css">

	<link rel="shortcut icon" href="../logo1.ico" type="image/x-icon"/>

	<style>

		body {
		    font-family: "Lato", sans-serif;
		}

		.sidenav .closebtn {
		    position: absolute;
		    top: 0;
		    left: 140px;
		    font-size: 36px;
		    margin-left: 50px;
		}

		/* Fixed sidenav, full height */
		.sidenav {
			height: 100%;
		    width: 0;
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    left: 0;
		    background-color: #111;
		    overflow-x: hidden;
		    transition: 0.10s;
		    padding-top: 60px;
		}

		/* Style the sidenav links and the dropdown button */
		.sidenav a, .dropdown-btn {
		    padding: 6px 8px 6px 16px;
		    text-decoration: none;
		    font-size: 14px;
		    color: #818181;
		    display: block;
		    border: none;
		    background: none;
		    width: 100%;
		    text-align: left;
		    cursor: pointer;
		    outline: none;

		}

		/* On mouse-over */
		.sidenav a:hover, .dropdown-btn:hover {
		    color: #f1f1f1;
		}

		/* Main content */
		.main {
		    /*margin-left: 150px;  Same as the width of the sidenav */
		    font-size: 14px; /* Increased text to enable scrolling */
		    padding: 0px 10px;
		}

		/* Add an active class to the active dropdown button */
		.active {
		    /*background-color: #f8f5f5;*/
		    color: white;
		}

		/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
		.dropdown-container {
		    display: none;
		    background-color: #262626;
		    padding-left: 8px;
		}

		/* Optional: Style the caret down icon */
		/*.fa {
		    float: right;
		    padding-right: 5px;
		}*/
		

		/* Some media queries for responsiveness */
		@media screen and (max-height: 450px) {
		    .sidenav {padding-top: 15px;}
		    .sidenav a {font-size: 18px;}
		}	
</style>
	

</head>
<body>

	

<div class="sidenav" id="mySidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="javascript:"><i style="left: right; padding-right: 5px;" class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
	<a href="javascript:"><i style="left: right; padding-right: 5px;" class="fas fa-box-open"></i>&nbsp;Customers</a>
	<!-- Dropdown_Entries -->
	<button class="dropdown-btn"><i style="left: right; padding-right: 5px;" class="fas fa-box-open"></i>&nbsp;Customers<i style="float: right; padding-right: 5px;" class="fa fa-plus"></i></button>
	<div class="dropdown-container">
		<a href="javascript:">Customer Type</a>
		<a href="customer.php">Customer Information</a>
	</div>
	<button class="dropdown-btn"><i style="left: right; padding-right: 5px;" class="fas fa-box-open"></i>&nbsp;Product<i style="float: right; padding-right: 5px;" class="fa fa-plus"></i></button>
	<div class="dropdown-container">
		<a href="javascript:">Product Brand</a>
		<a href="javascript:">Product Category</a>
		<a href="javascript:">Product Information</a>
	</div>
	<button class="dropdown-btn"><i style="left: right; padding-right: 5px;" class="fas fa-box-open"></i>&nbsp;Sales<i style="float: right; padding-right: 5px;" class="fa fa-plus"></i></button>
	<div class="dropdown-container">
		<a href="javascript:">Product Brand</a>
		<a href="javascript:">Product Category</a>
		<a href="javascript:">Product Information</a>
	</div>
	<button class="dropdown-btn"><i style="left: right; padding-right: 5px;" class="fas fa-barcode"></i>&nbsp;Barcode<i style="float: right; padding-right: 5px;" class="fa fa-plus"></i></button>
	<div class="dropdown-container">
		<a href="javascript:">Product Brand</a>
		<a href="javascript:">Product Category</a>
		<a href="javascript:">Product Information</a>
	</div>
	<button class="dropdown-btn"><i style="left: right; padding-right: 5px;" class="fas fa-box-open"></i>&nbsp;Reports<i style="float: right; padding-right: 5px;" class="fa fa-plus"></i></button>
	<div class="dropdown-container">
		<a href="javascript:">Product Brand</a>
		<a href="javascript:">Product Category</a>
		<a href="javascript:">Product Information</a>
	</div>
	
</div>


<!-- Page content -->
<div class="main" id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;&nbsp;&copy;POS</span>
			</div>
			<div class="col-md-40" style="margin-top: 8px;">
				<span style="float: right; padding: 0px 20px; font-size:18px;cursor:pointer">Admin<i class="fa fa-caret-down"></i></span>
			</div>
		</div>
	</div>
	<br>

  <!-- Customer_Table_Information -->
	<div class="customer-info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- <img style="width: 72px; height: 72px; float: left;" src="../logo.jpg"> -->
					<i style="float: left; margin-right: 20px;" class="fa fa-users fa-5x"></i>
					<h1 class="customer-heading">Customer Details</h1>
					<br>
				</div>
				<div class="col-md-12">	
					<ul class="breadcrumb">
						<li><a href="index.php">Dashboard</a></li>
						<li class="active"><a href="customer.php">Customer</a></li>
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
					<a style="float: right;" href="javascript:" type="button" class="btn btn-md btn-primary add-customer" data-toggle="modal" data-target="#myCustomer"><i class="fa fa-plus-circle fa-lg"></i>&nbsp;New Customer</a>
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
						<select class="form-control" style="width: 10%;">
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
						<th class='actions' colspan=2>Actions</th>
					</tr>";

					echo "<tr>
						<td>Cust-00000001</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i></a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000002</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i></a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000003</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i></a></td>
						<td><a id='delete' type='button' class='btn btn-md btn-danger'><i class='fa fa-trash fa-lg'></i>&nbsp;Delete</a></td>
					</tr>";

					echo "<tr>
						<td>Cust-00000004</td>
						<td>Customer Name</td>
						<td>Customer Account Number</td>
						<td>Contact Number</td>
						<td>Address</td>						
						<td><a id='update' type='button' class='btn btn-md btn-warning'><i class='fa fa-edit fa-lg'></i></a></td>
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
</div>


<script>

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
	document.getElementById("mySidenav").style.display ="block";
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.body.style.backgroundColor = "rgba(255,255,255,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}


</script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

	
</body>
</html>
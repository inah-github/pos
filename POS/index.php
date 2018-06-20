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


	<!-- Offline -->
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/jquery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">	
	<script type="text/javascript" src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="custom.css">

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


<div class="container-fluid">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="1.jpg" alt="Los Angeles" style="width:100%;">
		</div>

		<div class="item">
			<img src="2.jpg" alt="Chicago" style="width:100%;">
		</div>

		<div class="item">
			<img src="3.jpg" alt="New york" style="width:100%;">
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
</div>


	<div class="login-panel">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 login-section">
					<form method="POST" action="">
						<div class="login-title">
							<h2>Login Here</h2>
							<h4>MEMBER PORTAL LOGIN</h4>
							<br>
						</div>
						<div class="form-group">
							<!-- <label for=""></label> -->
							<input type="text" name="" class="form-control" placeholder="Input Username">
						</div>
						<div class="form-group">
							<!-- <label for=""></label> -->
							<input type="passsword" name="" class="form-control" placeholder="Input Password">
							<br>
						</div>
						<div class="form-group">
							<a href="javascript:" type="button" class="btn btn-md btn-primary" onclick="window.location.href='admin'">Login</a>
						</div>
					</form>					
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
			
</body>
</html>
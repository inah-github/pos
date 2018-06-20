<?php

$conn = mysqli_connect("localhost","root","","pos");
if (mysqli_connect_errno()){
	echo "Not Connected";
	else{
		echo "Connected";
	}
}


?>
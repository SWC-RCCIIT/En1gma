<?php 

ob_start();
session_start();

$con = mysqli_connect("localhost","root","","hackathon");

if (mysqli_connect_errno()) {
	echo "Failed to Connect".mysqli_connect_errno();

}
 ?>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "logincredentials";

$link = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($link,$db);

$uid = $_POST["uid"];
$pass1 = $_POST["upassword1"];
$pass2 = $_POST["upassword2"];

$registerQueryLogin = "INSERT INTO logindata (userID,password) VALUES ('$uid',''$upassword1')";

$success = mysqli_query($link,$registerQueryLogin);

?>

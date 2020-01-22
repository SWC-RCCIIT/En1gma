<?php
  
    if (isset($_POST['submit'])) 
    {
    	$username = $_POST['user'];
    	$password = $_POST['pass'];

    	$loginQuery = "SELECT * FROM userlogin WHERE username = '$userLoggedIn' AND password = '$upassword'"; //select from the existing database

    	$success = mysqli_query($con,$loginQuery);
    	if (mysqli_num_rows($success)!=1)
    		$errorArray['invalidLogin']="Login not authorised!";
    	else {
    		$row=mysqli_fetch_array($success); //fetching the column of database table and storing 
            //echo "Hi ".$row[1];//printing the second element in the array
            $_SESSION['currentUserId'] = $row[0];
            $_SESSION['userLoggedIn'] = True;
            header('Location:includes/data.html');

    	}

    //session variables are the array which will run and store until the programs run.

    }

?>
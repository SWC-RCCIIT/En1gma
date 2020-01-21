<?php
	
	if(isset($_POST['submit']))
	{
		$uid = $_POST['uid'];
		$ulat = $_POST['ulat'];
		$ulong = $_POST['ulong'];
		


		$registerQueryDetails = "INSERT INTO coordinates(uid,ulat,ulong) VALUES ('$uid','$ulat','$ulong') ";

		$success = mysqli_query($con,$registerQueryDetails);

		$success1 = mysqli_query($con,$registerQueryCoordinates);

		if($success && $success1) {


			// $q = "SELECT uid FROM userlogin WHERE uid = '$uid' AND upassword = '$upassword' ";
		 //    $s = mysqli_query($con,$q);
		 //    $r = mysqli_fetch_array($s);
		 //    $id = $r[0];


			// $pinfo = pathinfo($_FILES['ufile']);
			// $textn = $pinfo['extension'];
		   
		}
	}
			
		

?>

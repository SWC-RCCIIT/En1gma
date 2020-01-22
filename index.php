<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "loginCredentials"; //here in place of loginCredentials change it with the name of the database u are using

  $link = mysqli_connect($host,$user,$password,$db);
  mysqli_select_db($link,$db);

  $uid = $_POST['UID'];
  $pass = $_POST['pass'];

  if($uid == "" or $pass == ""){
    header('location:index.html');
  }
  else {
  if ($uid == "admin" and $pass = "admin"){
    header('location:data.html');
    }
  else{
  $sql = "select * from logindata where userID='$uid'
    && password='$pass'";
    $result = mysqli_query($link, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
      header('location:geo.html');
      // here it should be to the geolocation file
    }else{
      header('location:index.html');
    }
  }
}

?>

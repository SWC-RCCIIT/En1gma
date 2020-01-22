<?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "logincredentials";

  //$file =  $_POST["ufile"];
  $file =  "Book1.csv";

  $link = mysqli_connect($host,$user,$password,$db);
  mysqli_select_db($link,$db);

  $num = 0;
  //$data = array();

  $sql = "SELECT * FROM dangerzone";
  $result = mysqli_query($link, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    echo $row["longitude"]. " " . $row["latitude"]. "<br>";
    }
    } else {
    echo "0 results";
  }


  $fh = fopen($file,"r");
  while(! feof($fh)){
    $data = fgetcsv($fh, 1000);
    print_r($data); // print the array
    if (!($data[0] == 0 && $data[1] == 0)) {
      $sql = "INSERT INTO dangerzone(latitude, longitude) VALUES ('$data[0]','$data[1]')";
      //echo $sql;
      if (mysqli_query($link, $sql)) {
       echo "New record created successfully";
      } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($link);
      }
    }
    echo "<br>";
    $num++;
  }
  echo $num-1;
  $fh.close();


?>

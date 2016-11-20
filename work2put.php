<?php

  $serverName = "localhost";
  $userName = "58xxxxxxxx";
  $userPassword = "58xxxxxxxx";
  $dbName = "db58xxxxxxxx";
  $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
/* 
 if(mysqli_connect_errno($conn)){
    echo "Connect to database f";
  }
  else{

    echo "OK";
  } */

   $m = $_POST['feedback']; 
//  echo = $m;
//  $sql = "INSERT INTO feedback (id,message) VALUES (DEFAULT,'".$_POST["feedback"]"')";
$sql = "INSERT INTO feedback (message) VALUES ('$m')";
$query = mysqli_query($conn,$sql);

  if($query) {
    echo "successfully.";
  }
  else{
    echo "Error!!!";
  }

  mysqli_close($conn);
?>
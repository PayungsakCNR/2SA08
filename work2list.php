<?php
 $conn = mysqli_connect("localhost","58xxxxxxxx","58xxxxxxxx","db58xxxxxxxx");

 $sql = "SELECT id,message FROM feedback";
 $result = mysqli_query($conn,$sql);
 
 if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
      echo "id:" . $row["id"] . "Feedback:" . $row["message"] . "<br>";
    }

  }
  else{
    echo "No result";
  }


mysqli_close($conn);


?>
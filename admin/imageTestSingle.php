<?php
   header("Content-type: image/jpeg");
   $con = mysqli_connect("localhost:8889", "test", "test", "store") or die('Error on line 3');

   $query = "SELECT picture from products WHERE prodid = 4";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $picture = $row['picture'] . '.jpg';
   echo $picture;
?>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "gaming store";
    
      $conn = mysqli_connect($servername, $username, $password,$db);
      if (!$conn) {
          die("conn failed" .mysqli_connect_error());
        }
?>
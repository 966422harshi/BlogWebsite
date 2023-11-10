<?php
  $dbhost= "localhost";
  $dbuser= "root";
  $dbpass= "";
  $dbname= "BlogWebBase";

  $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  if(!$conn){
    die("Could not connect to the database".mysqli_connect_error());
  }
?>
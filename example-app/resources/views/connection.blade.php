<?php
$dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "9weken";

  //connects to database
  $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  echo "Connected successfully";
  ?>
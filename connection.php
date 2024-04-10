<?php

  // Assigns to variables the credentials used connect to the database
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "users";

  // Connects to the database, returns boolean value
  $conn = new mysqli($hostname, $username, $password, $dbname);

  // Checks if the connection succeded or not
  if ($conn) {
    echo "CONNECTED SUCCESSFULLY TO ". $dbname . " DATABASE <br />";
  }
  else {
    echo "FAILED TO CONNECT TO " . $dbname . "DATABASE <br />";
  }

?>
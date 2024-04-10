<?php

  // Connects to the database
  require("connection.php");

  // Checks if data was sent in the HTTP request through the submit input
  // If data was sent, it assigns them to variables and displays them
  if (isset($_GET["submit"])) {
    $vid = $_GET["id"];
    $vname = $_GET["name"];
    $vage = $_GET["age"];
    echo "ID: " . $vid . " Name: " . $vname . " Age: " . $vage;
  }

  // Defines the query to be performed in the database
  $sql = "INSERT INTO students VALUES ('$vid', '$vname', '$vage')";
  // Performs the query and returns a boolean value used to check if the query succeded or not
  if ($conn -> query ($sql)) {
    echo "Information inserted successfully.";
  }
  else {
    echo "Failed to insert information.";
  }

  // Closes the connection with the database
  mysqli_close($conn);

?>
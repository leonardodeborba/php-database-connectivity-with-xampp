<?php

  // Connects to the database
  require("connection.php");

  // Defines the query to be performed in the database
  $sql = "INSERT INTO students VALUES (5, 'Woods', 19)";
  // The function performs the query and returns a boolean value
  // Checks the boolean value returned to see if the query succeded
  if ($conn -> query($sql)) {
    echo "Information inserted successfully.";
  }
  else {
    echo "Failed to insert information" . $conn -> error;
  }

  // Closes the connection with the database
  mysqli_close($conn);

?>
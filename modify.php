<?php
  // Connects to the database
  require("connection.php");

  // Defines the query to be performed in the database
  $delete = "DELETE FROM students WHERE id=1";
  // Performs the query and returns a boolean value used to check if the query succeded or not
  $delete_result = $conn -> query($delete);
  
  // Checks if the query succeded or not
  if ($delete) {
    echo "Row deleted successfully. <br />";
  }
  else {
    echo "Failed to delete row. <br />";
  }

  // Defines the query to be performed in the database
  $update = "UPDATE students SET name='Updated' WHERE id=2";
  // Performs the query and returns a boolean value used to check if the query succeded or not
  $update_result = $conn -> query($update);

  // Checks if the query succeded or not
  if ($update_result) {
    echo "Name updated successfully. <br />";
  }
  else {
    echo "Failed to update name. <br />";
  }

  // Closes the connection with the database
  mysqli_close($conn);

?>
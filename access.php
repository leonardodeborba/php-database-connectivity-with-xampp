<?php 

  // Connects to the database
  require("connection.php");
  
  // Defines the query to be performed in the database
  $sql = "SELECT * FROM students";
  // Performs the query and returns a boolean value used to check if the query succeded or not
  $result = $conn -> query($sql);

  // Display the data in table form
  echo "
  <table border='1'>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
    </tr>
  ";
  // Checks if the query returned data
  if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else {
      "No data was found.";
    }
  
  // Closes the connection with the database
  mysqli_close($conn);

?>
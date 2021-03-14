<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kowshik_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aiclform_table";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table border='1'>";
    echo"<tr><th>firstName</th><th>lastName</th><th>Contact</th><th>emailId</th><th>messagetext</th></tr>";
    echo "<tr><td>" . $row['firstName'] . "</td>";
    echo "<tr><td>" . $row['lastName'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
    echo "<tr><td>" . $row['emailId'] . "</td>";
    echo "<td>" . $row['messagetext'] . "</td></tr>";
    echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
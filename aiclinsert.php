<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kowshik_db";
// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contact = $_POST['Contact'];
$emailId = $_POST['emailId'];
$messagetext = $_POST['Message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO aiclform_table (firstName,lastName contact,emailId,messagetext)
VALUES ('$firstName','$lastName','$contact','$emailId','$messagetext')";
if ($conn->query($sql) === TRUE) 
{
  echo "New record inserted successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
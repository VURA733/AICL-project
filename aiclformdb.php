<html>
<head>
<h1>first program</h1>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
//Create connection
$conn=new mysqli($servername,$username,$password);
//Check connection
if($conn->connect_error){
    die("unable to connect" . $conn->connect_error);
}
echo "connected successfully!!!";
// Create database
$sql = "CREATE DATABASE aiclform_table";
if ($conn->query($sql) === TRUE) {//passing the sql here
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();//closing connection
?>
</body>
</html>
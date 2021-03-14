<html>
<head>
<h1>first program</h1>
<body>
<?php
$servername="localhost";//our servername is localhost
$username="root";//xampp username is root
$password="";//no password avlbl
//create connection
$conn=new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error){
    die("connection cannot be established" . $conn->connect_error);
}
echo "connection established!!!";
$conn->close();?>
</body>
</html>
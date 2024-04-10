<?php
$conn=mysqli_connect("localhost","root","","taskmanager");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>
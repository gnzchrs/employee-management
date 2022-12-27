<?php
$host = 'localhost';  
$user = 'gonz';  
$password = 'gonz';  
$dbname = 'employee_management';  
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  echo "<script>console.log('connected to database...' );</script>";
?>

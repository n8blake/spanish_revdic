<?php
// Create connection
$con=mysqli_connect("localhost","blakeink_spanish","spanish123","blakeink_spanish");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = $_GET["search"]

$result = mysqli_query($con,"SELECT " . $query . "FROM Spanish_test");

while($row = mysqli_fetch_array($result))
  {
  echo $row['Word'];
  echo "<br>";
  }


?>
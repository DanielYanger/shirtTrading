<?php
$servername = "sql9.freemysqlhosting.net:3306";
$username = "sql9341272";
$password = "Z2fRnGBXTl";
$dbname = "sql9341272";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Inventory (teamNumber, teamName, year, type, tradingStatus, notes) 
VALUES ($_POST[teamNumber], '$_POST[teamName]', $_POST[year], '$_POST[type]', '$_POST[tradingStatus]', '$_POST[notes]')";

if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
} 

else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
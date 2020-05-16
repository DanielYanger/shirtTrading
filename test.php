<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t-shirts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO shirts (teamNumber, teamName, Year, Tradablitly) 
VALUES ($_POST[teamnumber], '$_POST[teamname]', $_POST[year], $_POST[trade])";

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
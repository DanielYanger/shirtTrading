<?php

$connect = mysql_connect("localhost:3306", "root", ""); 

if (!connect) 
{ 
    die('Connection Failed: ' . mysql_error()); 
}

mysql_select_db(t-shirts, $connect);


$user_info = "INSERT INTO shirts ('teamNumber', 'teamName', 'Year', 'Condition', 'Tradablitly') 
 VALUES ('$_POST[teamnumber]', '$_POST[teamname]', '$_POST[year]', '$_POST[condition]', '$_POST[trade]')"; 


if (!mysql_query($user_info, $connect)) 
{ 
    die('Error: ' . mysql_error()); 
}

echo "Your information was added to the database.";

mysql_close($connect); 

?>

//'$_POST[team number]', '$_POST[team name]', '$_POST[year]', '$_POST[condition]', '$_POST[trade]'
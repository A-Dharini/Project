<?php
	

$serverName="localhost";
$userName="root";
$password="Dharini@203";
$dbName="test";




$conn=new mysqli($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno()){
	echo "Failed to connect to the database server!";
	exit();
}


?>
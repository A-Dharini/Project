<?php

include 'connection.php';

$name = mysqli_real_escape_string($conn,$_POST["title"]);
$desc = mysqli_real_escape_string($conn,$_POST["description"]);
$sdat=date("d/m/Y H:i:s");


echo "hey there".$name.$desc.$sdat;

$sql="INSERT INTO notes(Name, description)VALUES(?,?)";

$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ss",
		       $name,
		       $desc);

mysqli_stmt_execute($stmt);



echo "New record created successfully";


?>
<meta http-equiv="refresh" content = "0; url = http://192.168.3.11:8080/zial/try.php" />
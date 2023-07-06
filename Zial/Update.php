<?php
session_start();
include 'connection.php';

$name = mysqli_real_escape_string($conn,$_POST["title"]);
$desc = mysqli_real_escape_string($conn,$_POST["description"]);
$udat=date("Y/m/d H:i:s");


$id = $_COOKIE["myvar"];






echo "hey there".$name.$id.$desc.$udat;


$sql = "UPDATE notes SET Name=?, Description=?, UpdatedAt=? WHERE Id=?";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssi", $name, $desc, $udat, $id);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Record updated successfully";
} else {
    echo "Update failed";
}

$url = "http://192.168.3.11:8080/zial/view.php?variable=" . urlencode($name);
?>
<meta http-equiv="refresh" content="0; url=<?php echo $url; ?>">
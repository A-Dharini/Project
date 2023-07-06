<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New note</title>
	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/	bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="function.js"></script>
	
	<style>
		body{
			background-color:#e6f2ff;
			color:#005580;
		}
		.button{
			padding-top: 30px;
    			padding-bottom: 15px;

		}
		
	</style>
		
</head>
<body>

<?php 


if (isset($_GET['variable'])){
	$ddata = urldecode($_GET['variable']);
	
}

?>
	<?php include 'nav.php';


	?>

	
	<div class="container-fluid bg-1">
	
	<div class="container">
	

	
	<h1><?php echo "DELETION"; ?></h1>
  	
	
<?php 

include 'connection.php';


$name = mysqli_real_escape_string($conn,$_POST["title"]);

$query = "DELETE FROM notes where Name='$name'";
$data =  mysqli_query($conn,$query);



if($data){
	echo "Successfully deleted";
}
else{
	echo "nope";
}
?>


	

	</div>

	</div>

<meta http-equiv="refresh" content = "0; url = http://192.168.3.11:8080/zial/try.php" />	


</body>
</html>

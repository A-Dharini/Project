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
	

	
	<h1><?php echo $ddata; ?></h1>
  	
	
<?php 

include 'connection.php';


$query = "SELECT Description FROM notes where Name='$ddata'";
$data =  mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);

$id = $result['Id'];


setcookie("myvar", $id, time() + 3600, "/");

$des = str_replace(["\\r\\n", "\\'"], ["", "'"], $result['Description']);

?>


	<form id="myForm" method="post">
		<div class="form-group1" style="color:#333333;">
			<label for="name">Title:</label>
			<input type="text" class="form-control" id="for" name="title" style="background-color: #f8f8f8" value="<?php echo $ddata; ?>" readonly>
		
			<label for="notes">Notes:</label>
                <textarea class="form-control"  id="notes" name="description" style="background-color: #f8f8f8" readonly ><?php echo $des;?></textarea>
		</div>

		
		
		<div class="button">
		
		<input type="submit" name="edit" value="Edit" onclick="setFormAction('edit.php')" class="btn btw-primary active" style="margin-right: 15px;">
		<input type="submit" name="edit" value="Delete" onclick="setFormAction('delete.php')" class="btn btn-primary active">
		</div>
	</form>
	
	<script>
  	function setFormAction(url) {
    		document.getElementById('myForm').action = url;
  	}
	</script>

	

	</div>

	</div>

	


</body>
</html>

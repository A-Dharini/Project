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
	<?php include 'nav.php';?>

	
	<div class="container-fluid bg-1">
	
	<div class="container">
	

	
	<h1>New Note:</h1>
  	<p style="color:#333333;">Happy writing!</p>
	

	<form action="insert.php" method="post">
		<div class="form-group1" style="color:#333333;">
			<label for="name">Title:</label>
			<input type="text" class="form-control" id="for" name="title" style="background-color: #f8f8f8" required autofocus="autofocus">
		
			<label for="notes">Notes:</label>
                <textarea class="form-control" rows="20" id="notes" name="description" style="background-color: #f8f8f8"></textarea>
		</div>

		
		
		<div class="button">
		<input type="submit" value="Save" class="btn btn-primary active" style="margin-right: 15px;">
		
		</div>
	</form>

	

	</div>

	</div>

	


</body>
</html>
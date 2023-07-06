<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New note</title>
	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/	bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<?php include 'nav.php';?>
	

	<div class="container">
	<h1>New Note:</h1>
  	<p>Happy writing!</p>
	

	<form>
		<div class="form-group">
			<label for="name">Title:</label>
			<input type="text" class="form-control" id="for">
		</div>

		<div class="form-group">
			<label for="notes">Notes:</label>
			<textarea class="form-control" rows="20" id="notes"></textarea>
		</div>
	</form>

	</div>
</body>
</html>
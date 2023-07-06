<!DOCTYPE html>
<html lang="en">
<head>
	<title>NOTES</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
		.bg-1 {
    			background-color:  #e6f2ff; 
    			color: #005580 ;
			padding-bottom: 75px;
  		}
		body{
			background-color: #005580;
		}
		.list-group{
			padding-top: 15px;
    			padding-bottom: 15px;
			font-size:14px;
		}
		
  	</style>

  
</head>
<body onload="first()">

	<?php include 'nav.php';?>

	
	<div class="container-fluid bg-1">
	<div class="container">
	<h1>Your Notes:</h1>

		
	
	
	
	

	

		
	
	
	
	

<?php 

include 'connection.php';


$query = "SELECT * FROM notes";
$data =  mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


 



//echo $total;

if($total !=0){
	//echo "records";
?>


<div style="display: flex; justify-content: space-between; font-size:20px;">
	<b><p >Title</p></b>
	<b><p>Last Edited On</p></b>
</div>


<div class="list-group">


<?php
	
	while($result=mysqli_fetch_assoc($data))
	{	
		

?>
		
                <a class="list-group-item" href="#" data-variable="<?php echo $result['Name']; ?>" onclick="myFunction(this); return false;">
		
		
		 <div style="display: flex; justify-content: space-between;">
			
		 <p><?php echo $result['Name']; ?></p>
		<p> <?php 
				if($result['UpdatedAt']==NULL){
					echo $result['CreatedAt']; 
				}
				else{
					echo $result['UpdatedAt'];
				}
		?></p>
		</div>
		</a>
		
                
            

	
<?php	
	}

}
else{
	echo "<h4>Welcome to PaperTrail! This website lets you collectively create notes as and when you wish! You can also edit and delete them .<h4>";
	echo '<a href="create.php"><i>Click here to get started with your first note!</i></a><br>';
	
}


?>

<script>
			 
    			function myFunction(element) {
				
				let variable= element.getAttribute("data-variable");

		
       				window.location.href = "view.php?variable=" + encodeURIComponent(variable);
        
    			}
</script>
	

</div>

</div>
</div>
	


</body>
</html>
	
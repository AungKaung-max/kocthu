<?php 

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="conveniencestore";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	mysqli_select_db($conn,$dbname);
			
	$id=$_GET['id'];
	$result=mysqli_query($conn,"SELECT * FROM productname WHERE id=$id");
	$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
		<div class="container mt-5">
			<h1 class="text-info">Update Product</h1>
		<form class="mt-4" method="post" action="cat-update.php">
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	  		<div class="mb-3">
	   		<label for="name" class="form-label">Product Name</label>
	    	<input type="text" class="form-control" id="name" name="name"
	    	value="<?php echo $row['name'];?>">
	   		<div class="form-text">Please enter Product name.</div>
	  		</div>

	  		

  			<input type="submit" class="btn btn-info text-white" value="Submit">
		</form>
		</div>
</body>
</html>
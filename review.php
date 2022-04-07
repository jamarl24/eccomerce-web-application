<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Stored Cross Site Scripting Attack Test</title>
<link rel="stylesheet" 
href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link id='stylecss' type="text/css" rel="stylesheet" href="style2.css">

</head>
<body>
<div class = "container">
    <div class="card">
    <form action="" method="get">
        <div>
            <label for="userName" class="title">Name:</label>
            <input type="text" name="userName" placeholder="Enter your name">
        </div>
        
        <div>
            <label for="review" class="title">Product Review:</label>
            <textarea name="review" cols="45" rows="10" placeholder="Write a review on the product"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Post</button>
		
    </form>
    </div>
</div>
<div>
<?php
if(!empty($_GET['userName']) && !empty($_GET['review']))
{
	
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$dbname = "ecommercedb";
	
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$connection) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = $_GET["userName"];
	$rev = $_GET["review"];

	$query = "INSERT INTO xssreviews (user_name, review) VALUES ('$name', '$rev')";

	if (mysqli_query($connection, $query)) {
	  echo "<p class='db'>review posted</p>";
	} else {
	  echo "Error with your review: " . $query . "<br>" . mysqli_error($connection);
	}
	
	
	// Show All records
	$query = "SELECT * FROM xssreviews";
	$result = mysqli_query($connection, $query);
?>
	<div class="comments">

	
    <?php
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		echo "<p class = 'db'>".$row['user_name']."</p><p class = 'db'>".$row['review']."</p>";
	  }
	} else {
	  echo "No reviews Yet.";
	}

	mysqli_close($connection);

}
?>
</div>
</div>
</body>
</html>
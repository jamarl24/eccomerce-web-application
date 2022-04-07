<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page (index.html)
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>User Login</title>
<link rel="stylesheet" 
href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link id='stylecss' type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
    <div class="invoice">
        <h2><p>Thank you <?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"]; ?> Your Purchase has been made</p></h2>
        <h4><p>Your receipt number is xxxx-xxxx-xxxx and you have been charged $<?php echo $_POST["price"] ?></p></h4>
        <p><?php echo $_POST["img"]  ?></p>
        <a href="products">Return back to Store </a>
    </div>
</body>
</html>
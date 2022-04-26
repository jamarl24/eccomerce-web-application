<?php 

require_once("db_config.php");

    if(isset($_POST["signup"]))
    {
        $email=$_POST["email"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $password=$_POST["password"];
    
        $sql ="INSERT INTO users (email, first_name,last_name, password) 
        VALUES ('$email', '$firstname', '$lastname','$password')";
       
        mysqli_query($link,$sql);

        header("location: index.html");
    }

?>
<html>
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" 
    href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
</head>

    <body>
    <div class="container">
        <div class="card">
            <p><h1>Sign Up</h1></p>

            <form method="POST" action="signup.php" >
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your first name">
                </div>

                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your last name">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                </div>
                <button type="submit" name = "signup" class="btn btn-primary">Sign up</button>
              
            </form>

         </div>
    </div>
</body>

</html>
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
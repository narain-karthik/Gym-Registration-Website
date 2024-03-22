<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM userlog WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO userlog VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
        nav a:hover {
            background-color: #555;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        h1 {
            margin-top: 40px;
            text-align: center;
			
        }
    </style>
</head>
<body>
    <header>
	 <img class="logo" src="logo.png" alt="Logo" width="100px" > <!-- Placeholder logo -->
        <h1>WELCOME TO ATOM FITNESS</h1> 
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
       <center>
	    <img src="image\create.png" width="100px" height="100px"><br>
		 <h5>REGISTRATION</h5>
    <form method="POST" action="">
        NAME: <input type="text" placeholder="Name" name="name"><br><br>
        USERNAME: <input type="text" placeholder="Username" name="username"><br><br>
        EMAIL: <input type="email" placeholder="Email" name="email"><br><br>
        PASSWORD: <input type="password" placeholder="Password" name="password"><br><br>
        CONFIRM PASSWORD:<input type="password" placeholder="Confirm Password" name="confirmpassword"><br><br>
        <button type="submit" name="submit">Register</button>

    </form>
    
    <br>
    <a href="login.php">Login Page</a>
	</center>
    </div>
</body>
</html>

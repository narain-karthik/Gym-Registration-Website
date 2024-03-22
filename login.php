<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  header("Location: member.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM userlog WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location:member.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
       <a href="admin.php" style="margin-left:10px;">ADMIN LOGIN</a>
        <center>
            
            <img src="image/login.png" width="100px" height="100px"></a>
          <h5>USER LOGIN</h5>
            <form action="" method="POST">
              USERNAME:  <input type="Text" placeholder="Username or Email" name="usernameemail"><br><br>
              PASSWORD: <input type="password" placeholder="Password" name="password"><br><br>
              <button type="submit" name="submit">Login</button><br><br>
              <a href="register.php" >Create an New Account</a>
            </form>
            
        </center>

    </div>
</body>
</html>

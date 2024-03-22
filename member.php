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
	   <div class="container">
	   <img src="image/form.png" width="100px" height="100px"></a><br>
        <h2>GYM REGISTRATION FORM</h2>
		 
        <form action="submit.php" method="POST">
         <center>  FULLNAME:  <input type="text" name="full_name" placeholder="Full Name" required><br><br>
            EMAIL ID : <input type="email" name="email" placeholder="Email" required><br><br>
            PHONE NUMBER: <input type="tel" name="phone" placeholder="Phone" required><br><br>
            ADDRESS: <textarea name="address" placeholder="Address" required></textarea><br><br>
            GENDER : <select name="gender" required><br><br>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
           DATE OF BIRTH : <input type="date" name="birth_date" required><br><br>
           PACKAGE : <select name="package" required><br><br>
                <option value="">Select Package</option>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select><br><br>
            WEIGHT: <input type="number" name="weight" placeholder="Weight (kg)" step="0.01" required><br><br>
            HEIGHT: <input type="number" name="height" placeholder="Height (cm)" step="0.01" required><br><br>
            <button type="submit">Register</button></center><br>
				<a href="login.php" style="margin-left:10px;">LOGOUT</a>
			 </center>
        </form>
    </div>

	   </center>
	   
	   
    </div>
</body>
</html>

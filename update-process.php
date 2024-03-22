<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE members set id='" . $_POST['id'] . "', full_name='" . $_POST['full_name'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "' ,address='" . $_POST['address']   .  "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM members WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<title>Update Data</title>
<head>

</head>
<body>
<form  method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="Update.php">ORPHANAGE DATABASE</a>
</div>
<input type="hidden" name="ID" placeholder="MEMBER ID" value="<?php echo $row['id']; ?>">
FULLNAME:<input type="text" name="full_name" placeholder="Full Name"  value="<?php echo $row['full_name']; ?>"><br><br>
            EMAIL ID : <input type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"><br><br>
            PHONE NUMBER: <input type="tel" name="phone" placeholder="Phone" required><br><br>
            ADDRESS: <textarea name="address" placeholder="Address" value="<?php echo $row['address']; ?>"></textarea><br><br>
            GENDER : <select name="gender" value="<?php echo $row['gender']; ?>"><br><br>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
           DATE OF BIRTH : <input type="date" name="birth_date" value="<?php echo $row['birth_date']; ?>"><br><br>
           PACKAGE : <select name="package" value="<?php echo $row['package']; ?>"><br><br>
                <option value="">Select Package</option>
                <option value="Basic">Basic</option>
                <option value="Standard">Standard</option>
                <option value="Premium">Premium</option>
            </select><br><br>
            WEIGHT: <input type="number" name="weight" placeholder="Weight (kg)" step="0.01" value="<?php echo $row['weight']; ?>"><br><br>
            HEIGHT: <input type="number" name="height" placeholder="Height (cm)" step="0.01" value="<?php echo $row['height']; ?>"><br><br>
          <input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>
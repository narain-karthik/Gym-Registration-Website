<?php
// Include the database connection file
include_once 'db.php';

// Retrieve form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];
$package = $_POST['package'];
$weight = $_POST['weight'];
$height = $_POST['height'];

// Insert data into the database
$sql = "INSERT INTO members (full_name, email, phone, address, gender, birth_date, package, weight, height) VALUES ('$full_name', '$email', '$phone', '$address', '$gender', '$birth_date', '$package', '$weight', '$height')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

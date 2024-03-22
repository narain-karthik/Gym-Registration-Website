<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM members");
?>
<!DOCTYPE html>
<html>
    <center>
 <head>
   <title>Update Data</title>
   UPDATE MEMBERS DATA
 </head>
</center>
 <style>
  body {
  background-image: url("image/bg4.jpg");
}
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
  </style>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
      <td>MEMBER ID</td>
    <td>MEMBER NAME</td>
    <td>EMAIL ID</td>
    <td>ADDRESS</td>
    <td>GENDER</td>
    <td> DATE OF BIRTH</td>
    <td>PACKAGE</td>
	 <td>PACKAGE</td>
    <td>WEIGHT</td>
    <td>HEIGHT</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
      <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["full_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["birth_date"]; ?></td>
   
    <td><?php echo $row["package"]; ?></td>
    <td><?php echo $row["weight"]; ?></td>
    <td><?php echo $row["height"]; ?></td>

		<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
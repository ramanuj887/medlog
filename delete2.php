<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
  
	$sql = " DELETE FROM student where rollno='$rollno'";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>


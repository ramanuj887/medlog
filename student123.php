<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

      $name=mysqli_real_escape_string($conn, $_POST['name']);
	    $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
      $address=mysqli_real_escape_string($conn, $_POST['address']);
      $mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
      $email=mysqli_real_escape_string($conn, $_POST['email']);
      $department=mysqli_real_escape_string($conn, $_POST['department']);
      $course=mysqli_real_escape_string($conn, $_POST['course']);

	   
	   
	   

$sql = " INSERT INTO student(rollno,fullname,department,course,address,telephone,email) VALUES 
('$rollno','$name','$department','$course','$address','$mobile','$email')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>


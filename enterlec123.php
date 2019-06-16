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
      $dep1=mysqli_real_escape_string($conn, $_POST['dep1']);
      $dep2=mysqli_real_escape_string($conn, $_POST['dep2']);
      $dep3=mysqli_real_escape_string($conn, $_POST['dep3']);
      $dep4=mysqli_real_escape_string($conn, $_POST['dep4']);
	   
	   
	   

$sql = " INSERT INTO lecture(rollno,fullname,department,course,address,telephone,email,dependent1,dependent2,dependent3,dependent4) VALUES 
('$rollno','$name','$department','$course','$address','$mobile','$email','$dep1','$dep2','$dep3','$dep4')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>


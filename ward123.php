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
       $disease=mysqli_real_escape_string($conn, $_POST['disease']);
       $admit=mysqli_real_escape_string($conn, $_POST['admit']);
	      $left='2000-11-11';
	      $doctor=mysqli_real_escape_string($conn, $_POST['doctor']);
	   
	   

$sql = " INSERT INTO ward(name,rollno,disease,admitted,discharge,examinedby) VALUES 
('$name','$rollno','$disease','$admit','$left','$doctor')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>


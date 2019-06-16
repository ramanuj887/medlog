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
       $test=mysqli_real_escape_string($conn, $_POST['test']);
       $result=mysqli_real_escape_string($conn, $_POST['result']);
	      $testby=mysqli_real_escape_string($conn, $_POST['testby']);
	      $doctor=mysqli_real_escape_string($conn, $_POST['doctor']);
	    $date=mysqli_real_escape_string($conn, $_POST['date']);
     
	   

$sql = " INSERT INTO lab(name,rollno,test,result,labreport,examinedby,date) VALUES 
('$name','$rollno','$test','$result','$testby','$doctor','$date')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>


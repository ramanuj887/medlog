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
	   $date=mysqli_real_escape_string($conn, $_POST['date']);
	   $disease=mysqli_real_escape_string($conn, $_POST['disease']);
	   $medicinetab1=mysqli_real_escape_string($conn, $_POST['medicinetab1']);
       $medicinetab2=mysqli_real_escape_string($conn, $_POST['medicinetab2']);
	   $medicinetab3=mysqli_real_escape_string($conn, $_POST['medicinetab3']);
	   $medicinetab4=mysqli_real_escape_string($conn, $_POST['medicinetab4']);
	   $medicinetab5=mysqli_real_escape_string($conn, $_POST['medicinetab5']);
	   $quantity1=mysqli_real_escape_string($conn, $_POST['quantity1']);
	   $quantity2=mysqli_real_escape_string($conn, $_POST['quantity2']);
	   $quantity3=mysqli_real_escape_string($conn, $_POST['quantity3']);
	   $quantity4=mysqli_real_escape_string($conn, $_POST['quantity4']);
	   $quantity5=mysqli_real_escape_string($conn, $_POST['quantity5']);
	   $checkeddoctor=mysqli_real_escape_string($conn, $_POST['checkeddoctor']);
	   
	   
	   
	   

$sql = " INSERT INTO treatment(name,rollno,treat_date,disease,tab1,tab2,tab3,tab4,tab5,qty1,qty2,qty3,qty4,qty5,examinedby) VALUES 
('$name','$rollno','$date','$disease','$medicinetab1','$medicinetab2','$medicinetab3','$medicinetab4','$medicinetab5','$quantity1','$quantity2','$quantity3','$quantity4','$quantity5','$checkeddoctor')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location: datacheck.php');
} else {
      header('location: dataentry.php');
}
mysqli_close($conn);

?>







   </body>
</html>

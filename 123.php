<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

       $dis=mysqli_real_escape_string($conn, $_POST['dis']);
     $admit=mysqli_real_escape_string($conn, $_POST['dateadmit']);
     $discharge=mysqli_real_escape_string($conn, $_POST['discharge']);
     
     
     
$sql = "UPDATE ward SET discharge='$discharge' where rollno='$dis' AND admitted='$admit'";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:datacheck.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


</body>
</html>

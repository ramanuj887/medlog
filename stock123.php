<!DOCTYPE html>

<html>
 
<body>
       <center>
 
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

       $name=mysqli_real_escape_string($conn, $_POST['name']);
	     $code=mysqli_real_escape_string($conn, $_POST['code']);
       $quantity=mysqli_real_escape_string($conn, $_POST['qty']);
       $exp=mysqli_real_escape_string($conn, $_POST['exp']);
	   
	$sql = " INSERT INTO stock(medicinename,code,quantity,expirydate) VALUES 
('$name','$code','$quantity','$exp')";



if (mysqli_query($conn, $sql) === TRUE) {
  echo "Data " ;
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$final=0;
$x=0;
$sql2 = "SELECT name,quantity  FROM finalstock";
$result1= mysqli_query($conn, $sql2);

if (mysqli_num_rows($result1) > 0) {
     while($row = mysqli_fetch_assoc($result1)) {
                     if(strcmp($row["name"],$name)==0){
                      $x=1;
                      $final=$row["quantity"]+$quantity;
                   $sql3="UPDATE finalstock SET quantity='$final' where name='$name'";
                    }
                  }
                }

                if($x==0)
                {
                $sql3= " INSERT INTO finalstock(name,quantity) VALUES ('$name','$quantity')";
                     }

if (mysqli_query($conn, $sql3) === TRUE) {
  echo "enterd ";
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql4 = " INSERT INTO stockdup(medicinename,code,quantity,expirydate) VALUES 
('$name','$code','$quantity','$exp')";


if (mysqli_query($conn, $sql4) === TRUE) {
  echo " successfully";
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>

<br>
<br>



<a href="datacheck.php"><img src="home.png" width="60px" height="60px"></a>

</center>

   </body>
</html>


<!DOCTYPE html>
 <head>
 <style >
    body{

         color: black;
        background-image: url("ades.jpg");
        background-size :cover; 
        text-align: center;
    }

.class1{

  width: 500px;

}
h1{
  color: brown;
}

    </style>
    </head>

<body>

<center><h1> Stock-Medicine Details </h1></center> 
<br><br><br>
    <center>
     <div class="class1"> 
<center>
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

 $med=mysqli_real_escape_string($conn, $_POST['name']);

  $sql1 = "SELECT name,quantity
  FROM finalstock";
$x=0;
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
     while($row = mysqli_fetch_assoc($result1)) {
                     if($row["name"]==$med){
                       $x=1;
                      echo "<h2> Medicine Name : " . $med . " <br> ".   " Available Quantity : " . $row["quantity"] ."<br></h2>";
                       }
                     }
                   }


if($x==0){
   echo "<h3>No Stock Details </h3>";
    }

mysqli_close($conn);

?>
<br>
    <a href="datacheck.php"><img src="home.png" width="60px" height="60px"></a>
</center>
</div>
</center>
</body>
</html>



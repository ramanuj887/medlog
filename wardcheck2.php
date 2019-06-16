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

<center><h1> Ward Details </h1></center> 
<br><br><br>
    <center>
     <div class="class1"> 
<center>
<?php

$conn = new mysqli("localhost", "root", "123", "medicalcenter");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

 $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
  $sql1 = "SELECT fullname,rollno,department,course
  FROM student";

$result1= mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
                     if($row['rollno']==$rollno){

    
              
                   echo "<h2><b> Fullname: " . $row["fullname"]."<br> ". "  Roll no : " . $row["rollno"]. " <br> ".   " Department : " . $row["department"]. "<br>"." Course :".$row["course"]."<br> </h2></b> ";
    }
  }   }

echo "<h2> Ward results : </h2>";
echo "<br><br>";

 
 	$sql = "SELECT name,rollno,disease,admitted,discharge,examinedby 
  FROM ward";

$result= mysqli_query($conn, $sql);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
                     if($row['rollno']==$rollno){
                                     $date=date("2000-11-11");
                                     $chck=strtotime($date);
                                     $expire=$row['discharge'];
                                     $exp=strtotime($expire);

                               if($chck==$exp){
                             $x=1;
              
                         echo "<h3> Disease :  " . $row["disease"]. "<br>" . " Admitted date: " . $row["admitted"]. " <br> ".   "Discharge date : Onboard " ." <br>" ." Examined By : " . 
                              $row["examinedby"]. " <br> </h3> ".  "<hr>" ;
    }
else 
                     {
                          $x=1;
              
                         echo "<h3> Disease :  " . $row["disease"]. "<br>" . " Admitted date: " . $row["admitted"]. " <br> ".   "Discharge date : ". $row["discharge"]." <br>" ." Examined By : " . 
                              $row["examinedby"]. " <br> </h3> ".  "<hr>" ;


}

 }   }}
                  

                                      
if($x==0){
   echo "<h3>No ward Details<\h3>";
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



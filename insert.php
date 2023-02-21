<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "state";

//value from



$filename =  $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "images/".$filename;
move_uploaded_file($tempname,$folder);


$id = $_POST ["id"];
$stdimg = $POST["stdimg"];
$dname = $_POST ["dname"];
$dpopulation = $_POST ["dpopulation"];
$noofblocks = $_POST ["noofblocks"];
$noofpanchyats = $_POST ["noofpanchyats"];
$noofvillages = $_POST ["noofvillages"];
$userid = $_POST ["userid"];

$password = $_POST ["passwords"];



//connection

$conn = Mysqli_connect($server,$user,$pass,$dbname);
   {
    $row="INSERT INTO districts (id,stdimg,dname,dpopulation,noofblocks,noofpanchyats
    ,noofvillages,userid,passwords ) VALUES('$id','$folder','$dname','$dpopulation','$noofblocks', '$noofpanchyats','$noofvillages','$userid','$password')";
    $result=mysqli_query($conn,$row);
   }

   if($result){
    header("Location:homepage.php");
   }
  


   
?>
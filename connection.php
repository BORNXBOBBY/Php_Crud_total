<?php
$url="localhost";
$server="root";
$pass="";
$dbname="state";
$conn=Mysqli_connect($url,$server,$pass,$dbname);
if(!$conn){
    die("Database Is not connected".mysqli_error($conn));
}
?>
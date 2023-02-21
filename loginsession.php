<?php
session_start();
$url = "localhost";
$server = "root";
$pass = "";
$dbname = "state";
$conn = mysqli_connect($url, $server, $pass, $dbname);
if (!$conn) {
    echo "Database is not connected" ;
}

if(isset($_POST['save']))
{   
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM districts WHERE  id='$id' and passwords='$passwords'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["dname"]= $row['dname'];
        $_SESSION["stdimg"]= $row['stdimg'];
        $_SESSION["passwords"]=$row['passwords'];
        $_SESSION['IS_LOGIN'] = 'yes';
        $_SESSION['start'] = time(); 
       
        
        header("Location: test.php");   
    }
    else
    {
        echo "Invalid  Username /Password";
    }   
}
?>
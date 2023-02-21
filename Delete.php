<?php
  include_once 'connection.php';
  $id=$_GET['id'];
  
  $sql="DELETE FROM districts WHERE id ='$id'";
  if(mysqli_query($conn,$sql)){
    echo "delete is successful";
  }
  else{
    echo "error";
  }
  

?>
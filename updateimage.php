<?php
  include 'connection.php';
  $id=$_POST['id'];
  $file=$_FILES['photo'];
   $dname=$_POST['dname'];
   $dpopulation=$_POST['dpopulation'];
   $noofblocks=$_POST['noofblocks'];
   $noofpanchyats=$_POST['noofpanchyats'];
   $noofvillages=$_POST['noofvillages'];
   $userid=$_POST['userid'];
   $passwords=$_POST['passwords'];



$fille_name=$file['name'];
$fille_size=$file['size'];
$fille_tmp=$file['tmp_name'];
$fille_type=$file['type'];
$pic="images/".$fille_name;
move_uploaded_file($fille_tmp,$pic);

$sql="UPDATE `districts` SET `stdimg`='$pic',`dname`='$dname',`dpopulation`='$dpopulation',`noofblocks`='$noofblocks',
      `noofpanchyats`='$noofpanchyats',`noofvillages`='$noofvillages',`userid`='$userid',`passwords`='$passwords'  WHERE `id`='$id'";
if(mysqli_query($conn,$sql)){
  // echo "update is successful";
  header('location:homepage.php');
}

else{
  echo "NOT UPDATE";
}
mysqli_close($conn);
  
?>




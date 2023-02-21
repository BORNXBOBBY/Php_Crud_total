<?php
  include_once 'connection.php';
  $id=$_GET['id'];
  $sql="SELECT * FROM districts WHERE id ='$id'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    
    while($row=mysqli_fetch_assoc($result)){
?>
<html>
<head>
    <title>
      update
    </title>
</head>

<body>
<table border="2px">
    <form method="post" action="updateimage.php" enctype="multipart/form-data">

     <tr>
        <td>Id</td>
        <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
    </tr>
    <tr>
        <td>Img</td>
        <td>
            <img src="<?php echo $row['stdimg']; ?>" height="100px" width="100%"  alt="">
            <input type="file" name="photo" value="<?php echo $row['stdimg']; ?>">
        </td> 
    </tr>
    
    <tr>
        <td>dname</td>
        <td><input type="text" name="dname" value="<?php echo $row['dname']; ?>"></td> 
    </tr>    
    <tr>
        <td>dpopulation</td>
        <td><input type="text" name="dpopulation" value="<?php echo $row['dpopulation']; ?>"></td>
    </tr>
    <tr>
        <td>noofblocks</td>
        <td><input type="text" name="noofblocks" value="<?php echo $row['noofblocks']; ?>"></td>
    </tr>
    <tr>
        <td>no of panchayats</td>
        <td><input type="text" name="noofpanchyats" value="<?php echo $row['noofpanchyats']; ?>"></td>
    </tr>
    <tr>
        <td>noofvillages</td>
        <td><input type="text" name="noofvillages" value="<?php echo $row['noofvillages']; ?>"></td>
    </tr>
   
    <tr>
        <td>userid</td>
        <td><input type="text" name="userid" value="<?php echo $row['userid']; ?>"></td>
    </tr>
   <tr>
    <td>passwords</td>
    <td><input type="text" name="passwords" value="<?php echo $row['passwords']; ?>"></td>
   </tr>
    <tr>
        <td><input type="submit" name="abc"></td>
    </tr>
    



</form>
</table>
</body>
</html>
<?php
    }
}
?>




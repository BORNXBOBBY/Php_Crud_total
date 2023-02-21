<?php 
include_once 'connection.php';

$sql = mysqli_query($conn,"SELECT * FROM districts");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>user account</title>
  
</head>
<body align= "center">
    <?php
   echo "<h1 style='color: red;'>Home page</h1>";
    
    ?>
    <a  href="loginform.php"> <button>Already user</button> </a>
   <a href="form.php"> <button> Signup</button> </a> <br> <br> <br>
<?php include_once 'display.php';
?>

</form>
</table>
</body>
</html>
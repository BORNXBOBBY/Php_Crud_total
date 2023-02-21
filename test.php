
<?php
    include_once "new_page.php";

?>


           
            <html>
                Welcome
                <?php
                    echo $_SESSION['dname'];
                    echo $_SESSION['stdimg'];
                    echo "<a href='logout.php'>Log out</a>";
                ?>
            </html>




<?php
include 'connection.php';
$sql = mysqli_query($conn, "SELECT * FROM districts WHERE id = '".$_SESSION['id']."'");
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
$i= 0;
while($row = mysqli_fetch_array($sql))
{
    ?>
<a href="updateform.php ?id=<?php echo $row["id"]; ?>">Edit</a>
<?php
    $i++;
}
?>

<?php
   date_default_timezone_set('Asia/Kolkata');
   echo $_SESSION['dname'] . "<b> you have logged in . </b>" ."<br>" ;
   
   echo "<br>" . " Your current time = " . date("h:i:sa (e)");
 ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    setInterval(function(){
   check_user();
   },2000);

  function check_user(){
 jQuery.ajax({
  url:'new_page.php',
  type:'post',
  data:'type=ajax',
  success:function(result){
    if(result=='logout'){window.location.href='logout.php';}}});
 }


</script>
</body>
</html>
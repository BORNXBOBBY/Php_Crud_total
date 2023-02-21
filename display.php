<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Document</title>
</head>
<body>
<?php 
include("connection.php");
error_reporting(0);

$query ="SELECT * FROM districts";
$data =  mysqli_query($conn, $query);


?>

    
    <h2 align="center" ><mark>Displaying all records</mark></h2>
 <center><table border="3" cellspacing="7" width="100%">
    <tr>
           <th width="10%">Id</th>
         <th width="20%">stdimg</th>
        <th width="10%">dname</th>
         <th width="10%">dpopulation</th>
         <th width="10%">noofblocks</th>
         <th width="10%">noofpanchyats</th>
         <th width="10%">noofvillages</th>
         <th width="10%">userid</th>
         <th width="10%">passwords</th>
</tr>
<?php
 $i=0;
   while($result= mysqli_fetch_assoc($data))
   {
?>
       <tr>
              <td><?php echo $result["id"] ?></td>
               <td> <img src="<?php echo $result["stdimg"] ?>"height='100px' width='100px' > </td>
              <td><?php echo $result["dname"] ?></td>
              <td><?php echo $result["dpopulation"] ?></td>
              <td><?php echo $result["noofblocks"] ?></td>
              <td><?php echo $result["noofpanchyats"] ?></td>
              <td><?php echo $result["noofvillages"] ?></td>
              <td><?php echo $result["userid"] ?></td>
              <td><?php echo $result["passwords"] ?></td>
         </tr>
    <?php
   }
  $i++;
   ?>

</table>
</center>

</body>
</html>
    
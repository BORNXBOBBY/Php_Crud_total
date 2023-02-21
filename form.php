<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
<form align="center"    action = "insert.php" method= "post" enctype="multipart/form-data">
<?php
echo "<h1 style='color: red;'>Insert page</h1>";
?>
<label>Id</label>
  <input type="text" name= "id" /> <br>
  <br>
  <label>Image</label>
  <input style="border:1px solid;" type="file" name="uploadfile"> <br>
  <br>
  <label>D-name</label>
  <input type="text"  name= "dname"/><br>
  <br>
  <label>D-population</label>
  <input type="text" name= "dpopulation" /> <br>
  <br>
  <label>No.of.blocks</label>
  <input type="text"  name= "noofblocks" /> <br>
  <br>
  <label>No.of.panchyats</label>
  <input type="text" name= "noofpanchyats" /> <br>
  <br>
  <label>No.of.villages</label>
  <input type="text"  name= "noofvillages" /> <br>
  <br>
  <label>User Id</label>
  <input type="text"  name= "userid" /> <br>
  <br>
  <label>passwords</label>
  <input type="text"  name= "passwords" /> <br>
<br>
<button type = "text"> Submit </button>
<button  type="reset"> Reset </button>
</form>
</body>
</html>
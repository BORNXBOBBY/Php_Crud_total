<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body align="center">
<?php
echo "<h1 style='color: red;'>Login page</h1>";
?>

<form action="loginsession.php" method="post">
  <label for="userid"> Id:</label><br>
  <input type="text" id="id" name="id" required placeholder="id"><br>
  <label for="password">Password:</label><br>
  <input type="text" id="passwords" name="passwords" required placeholder="passwords"><br><br>
  <input type="submit" value="Login" name="save">
  <input type="reset" value="Reset" name="reset">
</form>
</body>
</html>
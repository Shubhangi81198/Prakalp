<?php
session_start();
    $usernm=$_SESSION['username'];
    echo"$usernm";
    $pwd=$_POST["fname"];
    $con=mysqli_connect("localhost","root","","login");
    $query="update users SET code='$pwd' where username='$usernm' ";
    mysqli_query($con,$query);
?>
<form action="display.php" method="post">
  <input type="submit" name="display" value="DISPLAY GROUP">
</form>

<?php
session_start();
    $usernm=$_SESSION['username'];
    echo"$usernm";
    $pwd=$_POST["pwd"];
    $con=mysqli_connect("localhost","root","","login");
    $query="update users SET code='$pwd' where username='$usernm' ";
    mysqli_query($con,$query);
?>

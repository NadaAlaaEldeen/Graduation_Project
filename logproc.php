<?php
require"dbcon.php";
$mail=$_POST["email"];
$pass=$_POST["password"];

$query="select * from login where email='$mail' and password='$pass'";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>=1)
{
echo'<script> alert("you are a validate user . logged in successfully ") </script>';
  require"intro.php";
}
else{
    echo'<script> alert("Invalid username/password") </script>';
    require"login.php";
}
mysqli_close($con);
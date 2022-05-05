<?php
#code database connection from another php page
require"dbcon.php";
#save form entered values in variables
$uname=$_POST["username"];
$pass=$_POST["password"];
$repass=$_POST["repassword"];
$mail=$_POST["email"];
#checking  for empty feildes
if($uname==""||$pass==""||$repass==""||$mail=="")
{
  echo'<script> alert("Empty Feild")</script>';
  require("signup.php");
}
#checking  for simalir passs
else if($pass!=$repass)
{
  echo'<script> alert("Password Doesn\'t match")</script>';
  require("signup.php");
}
#checking  for mail validaty
else if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
{
    echo'<script> alert("In valid Email")</script>';
    require("signup.php");
}
else{
    $sql1="select * from login where name='$uname' ";
    $res=mysqli_query($con,$sql1) or die(mysqli_error($con));
    if(mysqli_num_rows($res)>=1)
    {
        echo'<script> alert("User Name Already Taken Try Again ")</script>';
    require("signup.php");
    }
    else
    {
        $sql2="insert into login (name,password,email) values('$uname','$pass','$mail')";
        mysqli_query($con,$sql2);
        echo'<script> alert("Registration Success")</script>';
        require("login.php");
    }
}
mysqli_close($con);
?>
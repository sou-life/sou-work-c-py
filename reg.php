<?php
error_reporting(0);
require('server.php');
$userid = "";
$name = $_POST["username"];
$email = $_POST["email"];
$passwd = $_POST["password"];
$passwd1 = $_POST["password1"];
session_start();
if(isset($_POST['submit']))
{
 $sql = "INSERT INTO signup(userid,username,email,password,password1) VALUES ('$userid','$name','$email','$passwd','$passwd1')";
if ($conn->query($sql) === TRUE) {
header('location:index.php');
}
else
{
echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
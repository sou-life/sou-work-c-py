<?php
require('server.php');
$errors = array();
if(isset($_POST['submit']))
{
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
if(count($errors) === 0)
{
$passwd = ($password);
$query = "SELECT * FROM signup WHERE username = '$username' AND password ='$password'";
$results = mysqli_query($conn,$query);
if(mysqli_num_rows($results) == 1)
{
$_session['username'] = $username;

$_session['success'] = "you are now logged in";
header('location:user.php');
}
else if($username == "sou" && $password == "12345678")
{
    header('location: admin.html');
}
else{
    header('location: error.html');
}
}
}
?>
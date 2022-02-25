<?php
session_start();
error_reporting(0);
if (isset($_SESSION['uname'])){

    header("Location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Iantechie Systems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p><h1>Welcome to Iantechie Systems</h1></p>
    
    <p>This has been a simple demonstration of HTML, CSS, JS AND PHP on XAMP Server.</p>
    
    <p>Continue checking my repo if interested especially for learning purposes</p>
    Done exploring? Click Here > <a href="logout.php">Log out</a>
</body>
</html>
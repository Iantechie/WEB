<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_SESSION['uname'])){
    header("Location:welcome.php");
}
if (isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE uname = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result ->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uname'] = $row['uname'];
        header("Location:welcome.php"); 
    }else{
        $message = "<h6> Username or Password <h6> ";
        echo "Your ". $message . " is wrong";
    }

}

?>
<!-- FIND HTML CODE BELOW  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Iantechie Sytsems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-reg">
        <div class="reg-form">
            <form action="login.php" method="POST">
                <h3>Sign in Here</h3>
                <input type="text" name="uname" placeholder="Enter Username" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <button name="submit" class="btn">Log in</button>
                <p>Don't have an account?<a href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>

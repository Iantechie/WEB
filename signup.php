<?php
include 'config.php'; #invoking the code inside config file
session_start(); #starting session
error_reporting(0); # basically for catching errors
#checking session
if (isset($_SESSION['uname'])){
    #if session is set, redirect to specified page
    header("Location:welcome.php");

}
#code to execute when user submits form data
if(isset($_POST['submit'])){
    #declare variables to be submitted
    $username = $_POST['uname'];
    $password = md5($_POST['password']);
    $cpassword = md($_POST['cpassword']);

    #check if password and confirm password match
    if ($password==$cpassword){
        #check if user exists
        $sql = "SELECT * FROM admin WHERE uname = '$username'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0){
            echo "<script> alert('User already exists')</script>";
        }else{ 
            $sql = "INSERT INTO admin (uname, password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $username = ""; #this sets values empty after submiting
                $password = "";
                $cpassword = "";
                // echo "<script>alert('User added successfully!')</script>";
                header("Location:login.php"); #Redirect user to login page
            }else{
                echo " <script>alert('Something went wrong!')</script> ";
            }
        }
    }else{
        echo "<script>alert('Password dont match')</script>";

     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Iantechie Sytsems</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-reg">
        <div class="reg-form">
            <form action="signup.php" method="POST">
                <h3>Registration form</h3>
                <input type="text" name="uname" placeholder="Enter Username" required><br>
                <input type="password" name="password" placeholder="Enter Password" required><br>
                <input type="password" name="cpassword" placeholder="Confirm Password" required><br>
                <button name="submit" class="btn">Register</button>
                <p>Already have an account?<a href="login.php">Login</a></p>

            </form>
        </div>
    </div>
</body>
</html>
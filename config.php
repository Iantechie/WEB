<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mister";

#Note Using PDO way of connection: Useful when connecting to multiple databases
// try{
//     $conn = new PDO("mysql:host=servername;dbname=mister", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connection  Succesful";
// }catch(PDOException $e){
//     echo "Connection failed" . $e->getMessage();
// }

#Note this a procedural way of connecting to the DB : Simple and easy!

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("Connection failed!");
}

?>
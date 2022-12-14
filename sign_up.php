<?php

require_once "dbconnect.php";

$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];


$sql="INSERT INTO customer (name, username, email, phoneno, password) VALUES ('$name','$username','$email','$phoneno','$password')";

  

if (mysqli_query($connection, $sql)){
            header('Location: categories.html');
        }

?>
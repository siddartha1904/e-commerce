<?php

require_once "dbconnect.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$city=$_POST['city'];
$message=$_POST['message'];


$sql="INSERT INTO feedback (firstname, lastname, email, city, message) VALUES ('$firstname','$lastname','$email','$city','$message')";

  

if (mysqli_query($connection, $sql)){
            header('Location: categories.html');
        }

?>
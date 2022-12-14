


<?php

require_once "dbconnect.php";

        
$username=$_POST['username'];   
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];


$sql="UPDATE customer set email='$email', phoneno='$phoneno', password='$password' WHERE username='$username'";
if (mysqli_query($connection, $sql)){ 
            header('Location: categories.html');
        }

?>
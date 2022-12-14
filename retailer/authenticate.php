<?php  

require_once "dbconnect.php";
session_start();
if (isset($_POST['username']) and isset($_POST['password'])){
	

$username = $_POST['username'];
$password = $_POST['password'];
$name="";


$query = "SELECT * FROM retailer WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
}

if ($count == 1){
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            header('Location: home.php');

        }else{
           header('Location: index.html');
}
}
?>
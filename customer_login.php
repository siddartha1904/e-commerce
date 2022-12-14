<?php  

require_once "dbconnect.php";

if (isset($_POST['user']) and isset($_POST['pass'])){
	

$username = $_POST['user'];
$password = $_POST['pass'];



$query = "SELECT * FROM customer WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
            header('Location: categories.html');

        }else{
           header('Location: customer_login.html');
}
}
?>
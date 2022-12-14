<?php  

require_once "dbconnect.php";
session_start();
if (isset($_POST['id']) and isset($_POST['password'])){
	

$id = $_POST['id'];
$password = $_POST['password'];
$name="";


$query = "SELECT * FROM admin WHERE id='$id' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
}

if ($count == 1){
            $_SESSION['id'] = $id;
            $_SESSION['name'] = $name;
            header('Location: home.php');

        }else{
           header('Location: index.html');
}
}
?>
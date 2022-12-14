<?php
$connect = mysqli_connect("localhost","root","","sda_db");

$requestPayload = file_get_contents("php://input");
$array = json_decode($requestPayload, true);
var_dump($array);

foreach($array as $row){
    $sql="INSERT INTO orders(id,title,price,amount) VALUES('".$row["id"]."','".$row["title"]."','".$row["price"]."','".$row["amount"]."')";
    mysqli_query($connect,$sql);
    
}
?>
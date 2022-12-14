<?php

require_once "dbconnect.php";
session_start();
echo "<center><h1>Welcome ".$_SESSION['name']." !!</h1></center>";
$selected = $_POST['category'];
$id="";
$desc="";
$category="";
$stock="";
$price="";



$query = "SELECT * FROM product WHERE category='$selected'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
?>
<style>
table {
  width: 50%;
  height: 50%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 5%;
  
}

th {
  height: 50px;
}
th {
  background-color: #2980B9;
  color: white;
}

table, th, td {
    
    border-collapse: collapse;
    text-align:center;
  }
</style>    

<table border="2">
   <tr>
      <th>ID</th>
      <th>Description</th>
      <th>Category</th>
      <th>Stock</th>
      <th>Price</th>
    </tr>


<?php 
if ($count > 0) 
{
    while($row=mysqli_fetch_array($result))
    {
        print "<tr> <td>";
        echo $id=$row['id'];
        print "</td> <td>";
        echo $desc=$row['descri']."<br/>";
        print "</td> <td>";
        echo $category=$row['category']."<br/>";
        print "</td> <td>";
        echo $stock=$row['stock']."<br/>";
        print "</td> <td>";
        echo $price=$row['price']."<br/>";
        print "</td> </tr>";

        
    }
}

?> 


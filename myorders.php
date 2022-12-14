<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- StyleSheet -->
  <link rel="stylesheet" href="categories.css" />
  <title>Shopping Cart Project</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="nav">
    <div class="nav__center container">
      <div class="nav__logo">
        <h1>V<span>Shop</span></h1>
      </div>

      <ul class="nav__list">
        <li><a href="categories.html">Home</a></li>
        <li><a href="myorders.php">My Orders</a></li>
        <li><a href="update_customer_information.html">Update Details</a></li>
        <li><a href="feedback.html">Feedback</a></li>
        <a href="index.html" class="login">Logout</a>
        <div class="cart__icon">
          <h2>cart</h2>
          <span class="item__total">0</span>
        </div>
      </ul>

      <div class="hamburger">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-menu"></use>
        </svg>
      </div>
    </div>
  </nav>
  <!-- Navigation -->

  <!-- Products -->
  
  <?php

require_once "dbconnect.php";
$id="";
$title="";
$price="";
$amount="";
$query = "SELECT * FROM orders";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
?>


  <section>
  <!--for demo wrap-->
  <h1>Your Orders</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          
          <th>Title</th>
          <th>Amount</th>
          <th>Price</th>
        </tr>
        <?php 
if ($count > 0) 
{
    while($row=mysqli_fetch_array($result))
    {
        print "<tr> <td>";
        echo $title=$row['title']."<br/>";
        print "</td> <td>";
        echo $amount=$row['amount']."<br/>";
        print "</td> <td>";
        echo $price="Rs " .$row['price']."<br/>";
        print "</td> </tr>";
       

        
    }
}

?> 
      </thead>
    </table>
  </div>
 
</section>
  





  
<style>
  h1{
  font-size: 40px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
  border-radius: 10px;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 20px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
font-family: "Poppins", sans-serif;
}
section{
  margin: 10%;
}



</style>    

  <script type="module" src="app.js"></script>
  <script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
  </script>
</body>

</html>
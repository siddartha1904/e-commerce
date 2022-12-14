

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- StyleSheet -->
  <link rel="stylesheet" href="styles.css" />
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
  <section class="products">
    <div class="product__center">
      
    </div>
  </section>

  <section class="cart__overlay">
    <div class="cart">
      <span class="close__cart">
        <svg>
          <use xlink:href="./images/sprite.svg#icon-cross"></use>
        </svg>
      </span>
      <h1>Your Cart</h1>
      <div class="cart__centent">
        
      </div>

      <div class="cart__footer">
        <h3>Total: Rs <span class="cart__total">0</span></h3>
        <button class="clear__cart btn">Clear Cart</button>
        <button class="check__out btn">Proceed To Checkout</button>
      </div>
    </div>
  </section>
  <div id="orders">
    <p id="orderid"></p>
    <p id="ordertitle"></p>
    <p id="orderprice"></p>
    <p id="orderamount"></p>
  </div>
 
  
</body>
<script src="laptop_products.js"></script>
</html>
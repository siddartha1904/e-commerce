<head>
    <title>
        Home Page
    </title>
    <link rel="stylesheet" href="home.css" >
</head>

<body>
<header>
            <h1><?php
        session_start();
        // logout
        if(isset($_POST['but_logout'])){
            session_destroy();
            header('Location: index.html');
        }
        echo "Welcome ".$_SESSION['name']." !!";
        ?>
        </h1>
        <form method='post' action="" class="logout">
            <input class="btn" type="submit" value="Logout" name="but_logout">
        </form>
    </header>    

    <div class="wrapper">
       
        <div class="index">
            <h1 class="title">
                Feedbacks Recieved
            </h1>
                <div class="input_field">
                    <a href="retailer_feedbacks.php"><button class="btn">View</button></a>
                </div>
        </div>
        
    </div>

    <div class="wrapper">
       
        <div class="index">
            <h1 class="title">
                Orders Recieved
            </h1>
                <div class="input_field">
                    <a href="retailer_orders.php"><button class="btn">View</button></a>
                </div>
        </div>
        
    </div>

    

</body>
</html>
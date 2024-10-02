<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
    
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
     
   }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/resturant4.css">
    <title> Salt & Sugar Restaurant </title>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"img class="logo"> <i class="fas fa-utensils"></i> QuickPlate </a>
    

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="searchBox">
        <label for="searchBox" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <a href="admin/login.php"> 
            <div class="fas fa-user" id="login-btn"></div>
        </a>
        <div class="fas fa-bars" id="menu-btn"></div>
        
        <div class="fas fa-search" id="search-btn"></div>
        <a href="cart.php">
        <div class="fas fa-shopping-cart" id="cart-btn">
      <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      ?>
      <span><?php echo $row_count; ?></span>
       </div>
           </a>
     
        
    </div>

    <nav class="navbar">
        
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="rest1menu.php">Resturants</a></li>
            <li><a href="rest1menu.php">Menu Categories</a></li>
            <li><a href="cart.php">My cart</a></li>
            <li><a href="admin/login.php">My Acoount</a></li>
            <li><a id="login" href="admin/login.php">Login</a></li>
            
        </ul>
        </nav>

     
</header>


<div class="image" data-aos="fade-down">
        <img src = "images/res4.jpg" alt="">
        <div class="restaurant-name">Salt & Sugar</div>
    </div>







      <!-- Main Content -->
      <div id="main-content">
            <!-- Pizza Section -->
            <div class="menu-category" id="pizza">
    <h2>Pizza</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://img.lovepik.com/photo/50077/4812.jpg_wh860.jpg" alt="Seafood Pizza">
                <h3>Seafood Pizza</h3>
                <div class="price">$12.99</div>
                <input type="hidden" name="product_name" value="Seafood Pizza">
                <input type="hidden" name="product_price" value="12.99">
                <input type="hidden" name="product_image" value="https://img.lovepik.com/photo/50077/4812.jpg_wh860.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.bostonmagazine.com/wp-content/uploads/sites/2/2013/06/pizza-main.jpg" alt="Double Chicken & Cheese Pizza">
                <h3>Double Chicken & Cheese Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Double Chicken & Cheese Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.bostonmagazine.com/wp-content/uploads/sites/2/2013/06/pizza-main.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.epicuricloud.com/wp-content/uploads/2020/02/Homemade-Pizza-Crust-Sauce-close-up-front-scaled.jpg" alt="BBQ Pizza">
                <h3>BBQ Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="BBQ Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.epicuricloud.com/wp-content/uploads/2020/02/Homemade-Pizza-Crust-Sauce-close-up-front-scaled.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.simplyrecipes.com/thmb/rLl58QZmVP4C3zSlpkKBo72EUws=/2000x1333/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__09__easy-pepperoni-pizza-lead-3-8f256746d649404baa36a44d271329bc.jpg" alt="Devilled Chicken Pizza">
                <h3>Devilled Chicken Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Devilled Chicken Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.simplyrecipes.com/thmb/rLl58QZmVP4C3zSlpkKBo72EUws=/2000x1333/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__09__easy-pepperoni-pizza-lead-3-8f256746d649404baa36a44d271329bc.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://2.bp.blogspot.com/-xKZmaz86O8o/UxC9_-NJSnI/AAAAAAAAAcI/kU_TsyBSR80/s1600/pizza.jpg" alt="Tandoori Chicken Pizza">
                <h3>Tandoori Chicken Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Tandoori Chicken Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://2.bp.blogspot.com/-xKZmaz86O8o/UxC9_-NJSnI/AAAAAAAAAcI/kU_TsyBSR80/s1600/pizza.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>
   
            <!-- Burgers and Sandwiches Section -->
            <div class="menu-category" id="burgers">
    <h2>Burgers and Sandwiches</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Classic Cheese Burger.jpg" alt="Classic Cheese Burger">
                <h3>Classic Cheese Burger</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Classic Cheese Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="images/Classic Cheese Burger.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Club Sandwich.jpg" alt="Club Sandwich">
                <h3>Club Sandwich</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Club Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="images/Club Sandwich.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Grilled Chicken Sandwich.jpg" alt="Grilled Chicken Sandwich">
                <h3>Grilled Chicken Sandwich</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Grilled Chicken Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="images/Grilled Chicken Sandwich.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Chicken Burger.jpg" alt="Chicken Burger">
                <h3>Chicken Burger</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Chicken Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="images/Chicken Burger.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>

            <!-- Pasta Section -->
            <div class="menu-category" id="pasta">
    <h2>Salads</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.wikihow.com/images/e/e0/Make-a-Healthy-Salad-that-Tastes-Good-Intro.jpg" alt="Cheese Pasta">
                <h3>Cheese Pasta</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Cheese Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="images/Cheese Pasta.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Lasagna.jpg" alt="Lasagna">
                <h3>Lasagna</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Lasagna">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="images/Lasagna.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Chicken Pasta.jpg" alt="Chicken Pasta">
                <h3>Chicken Pasta</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Chicken Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="images/Chicken Pasta.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>

            <!-- Beverages Section -->
            
            <div class="menu-category" id="beverages">
    <h2>Beverages</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Strawberry Banana Smoothie.jpg" alt="Strawberry Banana Smoothie">
                <h3>Strawberry Banana Smoothie</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Banana Smoothie">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Strawberry Banana Smoothie.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Cappuccino.jpg" alt="Cappuccino">
                <h3>Cappuccino</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Cappuccino">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Cappuccino.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Oreo Milkshake.jpg" alt="Oreo Milkshake">
                <h3>Oreo Milkshake</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Oreo Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Oreo Milkshake.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Chocolate Milkshake.jpg" alt="Chocolate Milkshake">
                <h3>Chocolate Milkshake</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Chocolate Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Chocolate Milkshake.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Strawberry Lemonade.jpg" alt="Strawberry Lemonade">
                <h3>Strawberry Lemonade</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Lemonade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Strawberry Lemonade.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Sparkling Mint Limeade.jpg" alt="Sparkling Mint Limeade">
                <h3>Sparkling Mint Limeade</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Sparkling Mint Limeade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="images/Sparkling Mint Limeade.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>

            <!-- Seafood Section -->
            <div class="menu-category" id="seafood">
    <h2>Seafood</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Seafood Rice.jpg" alt="Seafood Rice">
                <h3>Seafood Rice</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Seafood Rice">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="images/Seafood Rice.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Fish and Chips.jpg" alt="Fish and Chips">
                <h3>Fish and Chips</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish and Chips">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="images/Fish and Chips.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Fish Tacos.jpg" alt="Fish Tacos">
                <h3>Fish Tacos</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish Tacos">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="images/Fish Tacos.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="images/Shrimp Scampi.jpg" alt="Shrimp Scampi">
                <h3>Shrimp Scampi</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Shrimp Scampi">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="images/Shrimp Scampi.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>

<!-- menu section ends -->







<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> canada </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> packages </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> contact </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +94-734922 </a>
            <a href="#"> <i class="fas fa-phone"></i> +94-32684620 </a>
            <a href="#"> <i class="fas fa-envelop"></i> QuickPlate@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> colombo 7, SriLanka </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

   

</section>

<!-- footer section ends -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>
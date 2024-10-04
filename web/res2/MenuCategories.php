
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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Great British Resturant</title>
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
        <a href="../admin/login.php"> 
            <div class="fas fa-user" id="login-btn"></div>
        </a>
        <div class="fas fa-bars" id="menu-btn"></div>
        
        <div class="fas fa-search" id="search-btn"></div>
        <a href="../cart.php">
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
            <li><a class="active" href="../index.php">Home</a></li>
            <li><a href="../reslisting.php">Resturants</a></li>
            <li><a href="../rest1menu.php">Menu Categories</a></li>
            <li><a href="../cart.php">My cart</a></li>
            <li><a href="../admin/login.php">My Acoount</a></li>
            <li><a id="login" href="../admin/login.php">Login</a></li> 
        </ul>
    </nav>
</header>


<!-- Slider/Carousel Section -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <img src="images/1.jpg" alt="1">
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide">
        <img src="images/2.jpg" alt="2">
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide">
        <img src="images/3.jpg" alt="3">
      </div>
    </div>
    <!-- Pagination and Navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
  

<!-- Menu Page HTML Structure -->
<h1> Great British  Our Menu</h1>
<!-- menu section starts  -->
<div id="menu">

        <!-- Sidebar/Left Panel -->
        <div id="sidebar">
            <h3 id="filter-cat">Filter by Categories</h3>
            <ul>
                <li><a href="#pizza">Pizza</a></li>
                <li><a href="#burgers">Burgers & Sandwiches</a></li>
                <li><a href="#pasta">Pasta</a></li>
                <li><a href="#beverages">Beverages</a></li>
                <li><a href="#seafood">Seafood</a></li>
            </ul>
            <h3 class="filter" id="filter-price">Price Range</h3>
            <input type="range" id="price-range" min="0" max="15" step="1">
            <span id="price-value">$15</span>
            <button id="apply-filter">Apply Filter</button>
        </div>

        <!-- Main Content -->
        <div id="main-content">
            <!-- Pizza Section -->
            <div class="menu-category" id="pizza">
    <h2>Pizza</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://recipesblob.oetker.in/assets/d8a4b00c292a43adbb9f96798e028f01/1272x764/pizza-pollo-arrostojpg.jpg" alt="Seafood Pizza">
                <h3>Seafood Pizza</h3>
                <div class="price">$12.99</div>
                <input type="hidden" name="product_name" value="Seafood Pizza">
                <input type="hidden" name="product_price" value="12.99">
                <input type="hidden" name="product_image" value="https://recipesblob.oetker.in/assets/d8a4b00c292a43adbb9f96798e028f01/1272x764/pizza-pollo-arrostojpg.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1EXyUNjrliNeMfxpuMoI_olyhT1t0rb5ICQ&s" alt="Double Chicken & Cheese Pizza">
                <h3>Double Chicken & Cheese Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Double Chicken & Cheese Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1EXyUNjrliNeMfxpuMoI_olyhT1t0rb5ICQ&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzdhSR2qXdCZsVWQ32vSlkWwInG1csQV7Iw&s" alt="BBQ Pizza">
                <h3>BBQ Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="BBQ Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrzdhSR2qXdCZsVWQ32vSlkWwInG1csQV7Iw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://cookingwithcarbs.com/wp-content/uploads/2021/06/spicy-sausage-pizza-final8-min.jpg" alt="Devilled Chicken Pizza">
                <h3>Devilled Chicken Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Devilled Chicken Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://cookingwithcarbs.com/wp-content/uploads/2021/06/spicy-sausage-pizza-final8-min.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_N3IAlrGDX2LbETK6xSJk5Kk2aoc4xYruIg&s" alt="Tandoori Chicken Pizza">
                <h3>Tandoori Chicken Pizza</h3>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Tandoori Chicken Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_N3IAlrGDX2LbETK6xSJk5Kk2aoc4xYruIg&s">
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
                <img src="https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic-1200x675.jpg" alt="Classic Cheese Burger">
                <h3>Classic Cheese Burger</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Classic Cheese Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic-1200x675.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm1IfTDN_3xF1ijjMh9V_mLhaxFuVyr2x6xw&s" alt="Club Sandwich">
                <h3>Club Sandwich</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Club Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm1IfTDN_3xF1ijjMh9V_mLhaxFuVyr2x6xw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Grilled-Chicken-Sandwich-750x750.jpg" alt="Grilled Chicken Sandwich">
                <h3>Grilled Chicken Sandwich</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Grilled Chicken Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://www.licious.in/blog/wp-content/uploads/2020/12/Grilled-Chicken-Sandwich-750x750.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.thecookierookie.com/wp-content/uploads/2021/09/bbq-burgers-recipe-6-650x845.jpg" alt="Chicken Burger">
                <h3>Chicken Burger</h3>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Chicken Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://www.thecookierookie.com/wp-content/uploads/2021/09/bbq-burgers-recipe-6-650x845.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>

            <!-- Pasta Section -->
            <div class="menu-category" id="pasta">
    <h2>Pasta</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://i.ytimg.com/vi/NdyLWpTlnU4/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLByvzsiqOkDQtipraJqmCyJCW2YKg" alt="Cheese Pasta">
                <h3>Cheese Pasta</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Cheese Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://i.ytimg.com/vi/NdyLWpTlnU4/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLByvzsiqOkDQtipraJqmCyJCW2YKg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGzsjXkw8qdig3EucYlEEnIyvxhFvE7eKDlA&s" alt="Lasagna">
                <h3>Lasagna</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Lasagna">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGzsjXkw8qdig3EucYlEEnIyvxhFvE7eKDlA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6KHezCmJsFBd72usobBy9ag35EbSC44jBg&s" alt="Chicken Pasta">
                <h3>Chicken Pasta</h3>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Chicken Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6KHezCmJsFBd72usobBy9ag35EbSC44jBg&s">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLfrA6std0HcGmRQBx2MpTqC42jO0LBE0pwg&s" alt="Strawberry Banana Smoothie">
                <h3>Strawberry Banana Smoothie</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Banana Smoothie">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLfrA6std0HcGmRQBx2MpTqC42jO0LBE0pwg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://merriam-webster.com/assets/mw/images/article/art-wap-landing-mp-lg/cappuccino-2029-e80b7c6d318c7862df2c4c8623a11f99@1x.jpg" alt="Cappuccino">
                <h3>Cappuccino</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Cappuccino">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://merriam-webster.com/assets/mw/images/article/art-wap-landing-mp-lg/cappuccino-2029-e80b7c6d318c7862df2c4c8623a11f99@1x.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb896kUCBZgtlrovM_eJakZ1DbhWigQWxh7g&s" alt="Oreo Milkshake">
                <h3>Oreo Milkshake</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Oreo Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb896kUCBZgtlrovM_eJakZ1DbhWigQWxh7g&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6TFt4OggSK8D5xNS5KsJ9ZpCsd4JXFwR9JA&s" alt="Chocolate Milkshake">
                <h3>Chocolate Milkshake</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Chocolate Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6TFt4OggSK8D5xNS5KsJ9ZpCsd4JXFwR9JA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzwDPX2ma17GgiTy7gkH7MeaJvPrS_ChgIFQ&s" alt="Strawberry Lemonade">
                <h3>Strawberry Lemonade</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Lemonade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzwDPX2ma17GgiTy7gkH7MeaJvPrS_ChgIFQ&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaFQ9OzvK22KWgWUlsC92vS75ry6MaXwXKgg&s" alt="Sparkling Mint Limeade">
                <h3>Sparkling Mint Limeade</h3>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Sparkling Mint Limeade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaFQ9OzvK22KWgWUlsC92vS75ry6MaXwXKgg&s">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYfmWL3tkbxJvmCcMyy5GAdXc7vJF3CGbOCw&s" alt="Seafood Rice">
                <h3>Seafood Rice</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Seafood Rice">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYfmWL3tkbxJvmCcMyy5GAdXc7vJF3CGbOCw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNBnTafa8O09UWCdV3hyoFF5jDBxLXqqy4Jg&s" alt="Fish and Chips">
                <h3>Fish and Chips</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish and Chips">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNBnTafa8O09UWCdV3hyoFF5jDBxLXqqy4Jg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyrNPYhhUB3UhsD2vpb5ePRpirDhjVUne2A&s" alt="Fish Tacos">
                <h3>Fish Tacos</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish Tacos">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyrNPYhhUB3UhsD2vpb5ePRpirDhjVUne2A&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyrNPYhhUB3UhsD2vpb5ePRpirDhjVUne2A&s" alt="Shrimp Scampi">
                <h3>Shrimp Scampi</h3>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Shrimp Scampi">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyrNPYhhUB3UhsD2vpb5ePRpirDhjVUne2A&s">
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

<script>
    function showMessage(event, productName) {
        event.preventDefault(); // Prevent form submission
        const messageDiv = document.getElementById('cart-message');
        messageDiv.textContent = `${productName} has been added to your cart!`;
        messageDiv.style.display = 'block';
        
        // Optionally, reset the form after showing the message
        setTimeout(() => {
            messageDiv.style.display = 'none';
        }, 3000); // Hide message after 3 seconds
    }
</script>

</body>
</html>
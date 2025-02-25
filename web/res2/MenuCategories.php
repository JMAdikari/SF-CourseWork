
<?php

@include '../config.php';

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
    <title>Yue Chuan Resturant</title>
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
<h1>Yue Chuan Our Menu</h1>
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
                        <img src="images/Seafood Pizza.jpg " alt="Seafood Pizza">
                        <h3>Seafood Pizza</h3>
                        <p>$12.99</p>
                        <button onclick="addToCart('Seafood Pizza', 12.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Double Chicken & Cheese Pizza.jpg" alt="Double Chicken & Cheese Pizza">
                        <h3>Double Chicken & Cheese Pizza</h3>
                        <p>$13.99</p>
                        <button onclick="addToCart('Double Chicken & Cheese Pizza', 13.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/BBQ Chicken Pizza.jpg" alt="BBQ Pizza">
                        <h3>BBQ Pizza</h3>
                        <p>$13.99</p>
                        <button onclick="addToCart('BBQ Pizza', 13.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Devilled Chicken Pizza .jpg" alt="Devilled Chicken Pizza">
                        <h3>Devilled Chicken Pizza</h3>
                        <p>$13.99</p>
                        <button onclick="addToCart('Devilled Chicken Pizza', 13.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Tandoori Chicken.jpg" alt="Tandoori Chicken Pizza">
                        <h3>Tandoori Chicken Pizza</h3>
                        <p>$13.99</p>
                        <button onclick="addToCart('Tandoori Chicken Pizza', 13.99)">Add to cart</button>
                    </div>
                </div>
            </div>    
            <!-- Burgers and Sandwiches Section -->
            <div class="menu-category" id="burgers">
                <h2>Burgers and Sandwiches</h2>
                <div class="category">
                    <div class="menu-item">
                        <img src="images/Classic Cheese Burger.jpg" alt="Classic Cheese Burger">
                        <h3>Classic Cheese Burger</h3>
                        <p>$8.99</p>
                        <button onclick="addToCart('Classic Cheese Burger', 8.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Club Sandwich.jpg" alt="Club Sandwich">
                        <h3>Club Sandwich</h3>
                        <p>$8.99</p>
                        <button onclick="addToCart('Club Sandwich', 8.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Grilled Chicken Sandwich.jpg" alt="Grilled Chicken Sandwich">
                        <h3>Grilled Chicken Sandwich</h3>
                        <p>$8.99</p>
                        <button onclick="addToCart('Grilled Chicken Sandwich', 8.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Chicken Burger.jpg" alt="Chicken Burger">
                        <h3>Chicken Burger</h3>
                        <p>$8.99</p>
                        <button onclick="addToCart('Chicken Burger', 8.99)">Add to cart</button>
                    </div>
                </div>
            </div>
            <!-- Pasta Section -->
            <div class="menu-category" id="pasta">
                <h2>Pasta</h2>
                <div class="category">
                    <div class="menu-item">
                        <img src="images/Cheese Pasta.jpg" alt="Cheese Pasta">
                        <h3>Cheese Pasta</h3>
                        <p>$10.99</p>
                        <button onclick="addToCart('Cheese Pasta', 10.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Lasagna.jpg" alt="Lasagna">
                        <h3>Lasagna</h3>
                        <p>$10.99</p>
                        <button onclick="addToCart('Lasagna', 10.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Chicken Pasta.jpg" alt="Chicken Pasta">
                        <h3>Chicken Pasta</h3>
                        <p>$10.99</p>
                        <button onclick="addToCart('Chicken Pasta', 10.99)">Add to cart</button>
                    </div>
                </div>
            </div>
            <!-- Beverages Section -->
            <div class="menu-category" id="beverages">
                <h2>Beverages</h2>
                <div class="category">
                    <div class="menu-item">
                        <img src="images/Strawberry Banana Smoothie.jpg" alt="Strawberry Banana Smoothie">
                        <h3>Strawberry Banana Smoothie</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Strawberry Banana Smoothie', 5.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Cappuccino.jpg" alt="Cappuccino">
                        <h3>Cappuccino</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Cappuccino', 5.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Oreo Milkshake.jpg" alt="Oreo Milkshake">
                        <h3>Oreo Milkshake</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Oreo Milkshake', 5.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Chocolate Milkshake.jpg" alt="Chocolate Milkshake">
                        <h3>Chocolate Milkshake</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Chocolate Milkshake', 5.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Strawberry Lemonade.jpg" alt="Strawberry Lemonade">
                        <h3>Strawberry Lemonade</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Strawberry Lemonade', 5.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Sparkling Mint Limeade.jpg" alt="Sparkling Mint Limeade">
                        <h3>Sparkling Mint Limeade</h3>
                        <p>$5.99</p>
                        <button onclick="addToCart('Sparkling Mint Limeade', 5.99)">Add to cart</button>
                    </div>
                </div>
            </div>
            <!-- Seafood Section -->
            <div class="menu-category" id="seafood">
                <h2>Seafood</h2>
                <div class="category">
                    <div class="menu-item">
                        <img src="images/Seafood Rice.jpg" alt="Seafood Rice">
                        <h3>Seafood Rice</h3>
                        <p>$11.99</p>
                        <button onclick="addToCart('Seafood Rice', 11.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Fish and Chips.jpg" alt="Fish and Chips">
                        <h3>Fish and Chips</h3>
                        <p>$11.99</p>
                        <button onclick="addToCart('Fish and Chips', 11.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Fish Tacos.jpg" alt="Fish Tacos">
                        <h3>Fish Tacos</h3>
                        <p>$11.99</p>
                        <button onclick="addToCart('Fish Tacos', 11.99)">Add to cart</button>
                    </div>
                    <div class="menu-item">
                        <img src="images/Shrimp Scampi.jpg" alt="Shrimp Scampi">
                        <h3>Shrimp Scampi</h3>
                        <p>$11.99</p>
                        <button onclick="addToCart('Shrimp Scampi', 11.99)">Add to cart</button>
                    </div>
                </div>
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
<script src="js/navbar_script.js"></script>
<script src="js/script.js"></script>
<script>

AOS.init({
    duration:800,
    delay:400
});
</script>

</body>
</html>
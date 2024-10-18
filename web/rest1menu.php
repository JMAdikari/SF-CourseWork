<?php

@include 'config.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file cdn link  -->
    
    <link rel="stylesheet" href="css/resmenu.css">
    <title> Menu Categories </title>

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
            <li><a href="reslisting.php">Resturants</a></li>
            <li><a href="rest1menu.php">Menu Categories</a></li>
            <li><a href="cart.php">My cart</a></li>
            
            <li><a href="admin/login.php">My Acoount</a></li>
            <li><a id="login" href="admin/login.php">Login</a></li>
            
        </ul>
        </nav>

     
</header>

<!-- header section ends -->

<br>
<br>
<br>
<h1 class="heading">Menu Categories</h1>

<!-- offer section -->
<section class="home" id="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="content">
                    <span>Our Special Offers</span>
                    <h3>Juicy Burger</h3>
                    <p>Sink your teeth into our mouthwatering burger, grilled to perfection and loaded with fresh toppings!</p>
                    <a href="resturant4.php" class="btn">Order Now</a>
                </div>
                <div class="image">
                    <img src="images/resmenuimg/off7.jpg" alt="Spicy Noodles">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content">
                    <span>Buy One Get One free</span>
                    <h3>Grilled Chicken Delight</h3>
                    <p>Enjoy our tender grilled chicken, marinated in special spices and served with a side of savory sauce.</p>

                    <a href="#" class="btn">Order Now</a>
                </div>
                <div class="image">
                    <img src="images/resmenuimg/off1.jpg" alt="Classic Burger">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="content">
                    <span>Fammily Offer</span>
                    <h3>Cheesy Pizza</h3>
                    <p>Indulge in our freshly baked pizza, topped with gooey cheese and your choice of delicious toppings!</p>
                    <a href="#" class="btn">Order Now</a>
                </div>
                <div class="image">
                    <img src="images/resmenuimg/off3.jpg" alt="Classic Burger">
                </div>
            </div>
            <!-- Add more swiper-slide items as needed -->
        </div>
        <!-- Add Pagination if needed -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation if needed -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


<!-- offer section end -->

<!-- popular dishes section  -->

<section class="dishes" id="dishes">


    <h2 class="heading">popular Menu Categories</h2>

    <div class="menu-container">
        <div class="menu-card">
            <img src="images/resmenuimg/pop1.jpg" alt="Dish 1" class="menu-image">
            <div class="menu-content">
                <h2 class="menu-title"> Burgers: Savor the Flavor!</h2>
                <p class="menu-description">"Our Burgers is a mouth-watering delight, featuring a juicy, perfectly seasoned beef patty grilled to perfection. It's topped with melted cheddar cheese, crisp lettuce, fresh tomatoes, tangy pickles, and a dollop of creamy mayo, all sandwiched between a toasted sesame seed bun. Every bite is packed with flavor, making it the ultimate comfort food!"</p>
                <p class="menu-price">20$ - 40$</p>
                <div class="menu-rating">★★★★☆</div>
                <a href="resturant4.php" class="btn">Order Now</a>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXSH5sF5LdtmDfNxiht4k2WWrOr7Ykr5ewkQ&s" alt="Dish 2" class="menu-image">
            <div class="menu-content">
                <h2 class="menu-title"> Pizza: A Slice of Happiness!</h2>
                <p class="menu-description">Dive into our delicious selection of pizzas, where every slice is a masterpiece crafted with love. Our pizzas feature a perfectly baked crust, hand-tossed to achieve the ideal balance of crispy and chewy. Topped with a rich, savory tomato sauce, our signature blend of mozzarella cheese, and an array of fresh, high-quality ingredients, each pizza is a celebration of flavor.</p>
                <p class="menu-price">30$ - 45$</p>
                <div class="menu-rating">★★★★☆</div>
                <a href="res5.php" class="btn">Order Now</a>
        
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.rodpub.com/images/102/819_main.jpg" alt="Dish 3" class="menu-image">
            <div class="menu-content">
                <h2 class="menu-title">Beverages: Refreshing Delights!</h2>
                <p class="menu-description">Quench your thirst with our exquisite selection of beverages . we offer something for everyone. Indulge in our handcrafted smoothies, bursting with fresh fruits and nutrients, or try our signature shakes, creamy and decadent for a sweet treat. For those looking for something more unique, explore our selection of artisanal juices and flavored lemonades</p>
                <p class="menu-price">10$ - 35$</p>
                <div class="menu-rating">★★★★★</div>
                <a href="resturant4.php" class="btn">Order Now</a>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaWOLW5xDoR6Xd2HxLskZ_BqYhoMFqjxgnMA&s" alt="Dish 4" class="menu-image">
            <div class="menu-content">
                <h2 class="menu-title">PAppetizers: A Culinary Journey!</h2>
                <p class="menu-description">Kick off your meal with our mouthwatering selection of appetizers. Designed to tease your palate and prepare you for the main course, our appetizers offer a mix of crispy, savory, and flavorful small bites. Whether you're craving something light and fresh, our appetizers feature a variety of options to suit every taste.  each dish is crafted to perfection and served with signature dipping sauces.</p>
                <p class="menu-price">20$ - 35$</p>
                <div class="menu-rating">★★★★★</div>
                <a href="res5.php" class="btn">Order Now</a>
            </div>
        </div>
    </div>
      
</section>
 <!-- popular dishes section end  -->

<!--Special menu-->


    <div class="gallery-container">
        <h1 class="heading">Our Special Menu</h1>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <div class="card-container">
            <div class="card">
                <img src="images/resmenuimg/p3.jpg" alt="Food 1">
                <div class="description">Delicious Pizza</div>
                <div class="menu-rating">★★★★★</div>
                <a href="res2/MenuCategories.php" class="btn">Order Now</a>
                
                
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm1.jpg" alt="Food 2">
                <div class="description">Tasty Sushi</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm3.jpg" alt="Food 3">
                <div class="description">Fresh Salad</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm4.jpg" alt="Food 4">
                <div class="description">Juicy Burger</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm7.jpg" alt="Food 5">
                <div class="description">Pasta Bolognese</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm8.jpg" alt="Food 6">
                <div class="description">Spicy Tacos</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm2.jpg" alt="Food 7">
                <div class="description">Grilled Steak</div>
            </div>
            <div class="card">
                <img src="images/resmenuimg/spm6.jpg" alt="Food 8">
                <div class="description">Creamy Ice Cream</div>
            </div>
        </div>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>



    




 <!-- menu section  -->
 <h1 class="heading" >Our Menu</h1>
        <div class="menu-container2">
            
           
            <div class="food-category">
                
                <h2 class="category-title">English Breakfast</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/b1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/b2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/b3.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/b4.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/b6.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/b8.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/b9.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/b5.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/b7.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                </div>
            </div>

            <div class="food-category">
                <h2 class="category-title">Sri Lankan Dishes</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/sl1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/sl2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/sl3.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/sl7.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/sl4.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/sl5.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/sl8.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                 
                    
                </div>
            </div>


            <div class="food-category">
                <h2 class="category-title">Pizza</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/p1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/p2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/p3.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/p4.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/p5.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/p6.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/p7.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/p8.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                    
                </div>
            </div>

            <div class="food-category">
                <h2 class="category-title">Noodles & Macarooni</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/nm1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/nm2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/nm3.jpeg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/nm4.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/nm5.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/nm9.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/nm7.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/nm6.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                    
                </div>
            </div>
            <div class="food-category">
                <h2 class="category-title">Cool Drinks & Smoothies</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/cd.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/cd1.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/cd2.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/cd3.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/cd4.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/cd5.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/cd6.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/cd7.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                    
                </div>
            </div>

            <div class="food-category">
                <h2 class="category-title">Burger & Hotdog</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/bur1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/bur2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/bur4.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/bur5.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/pop1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/sum3.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/sum1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/sum2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                    
                </div>
            </div>
            <div class="food-category">
                <h2 class="category-title">Side Dishes & Soup</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/fm1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/fm2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/fm3.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/s1.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/s2.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/s3.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/s4.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/s7.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/s8.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                </div>
            </div>
            <div class="food-category">
                <h2 class="category-title">Deserts</h2>
                <div class="food-items">
                    <!-- Food items -->
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/d1.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/d2.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/d3.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/d4.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/d7.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/d8.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 1">
                        <img src="images/resmenuimg/d5.jpg" alt="Food 1">
                        <p>Food 1</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/d6.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    <div class="food-item" data-description="Delicious description of Food 2">
                        <img src="images/resmenuimg/d9.jpg" alt="Food 2">
                        <p>Food 2</p>
                    </div>
                    
                </div>
            </div>
            <!-- Repeat similar blocks for remaining categories (2 to 10) -->
        </div>
    
        <!-- Modal Popup -->
        <div id="popup-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <img id="modal-image" src="web/burgur.jpg" alt="Food Image" class="modal-image">
                <p id="modal-description" class="modal-description">qwe ertuuv sghjnb xcvbn wzcvbhnj sedftgyhuj </p>
            </div>
        </div>
    
    
    <!-- menu section end-->
    
    










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

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



<!-- footer section ends -->
<script src="js/resmenu.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->


</body>
</html>
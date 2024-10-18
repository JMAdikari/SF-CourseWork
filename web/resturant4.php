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
     <!-- Pizza Section -->
<div class="menu-category" id="pizza">
    <h2>Pizza</h2>
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://img.lovepik.com/photo/50077/4812.jpg_wh860.jpg" alt="Seafood Pizza">
                <h3>Seafood Pizza</h3>
                <p>Loaded with fresh seafood, mozzarella, and a flavorful tomato base.</p>
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
                <p>Twice the chicken, double the cheese, all on a crispy crust.</p>
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
                <p>Smoky BBQ sauce, tender chicken, and melty cheese on a thin crust.</p>
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
                <p>Spicy devilled chicken with fresh veggies and mozzarella cheese.</p>
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
                <p>Fusion of Indian tandoori flavors with classic pizza toppings.</p>
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa9Qq1rV_svdydH5u3O8r5ZmT8udMBnSuKeA&s" alt="Classic Cheese Burger">
                <h3>Classic Cheese Burger</h3>
                <p>A juicy beef patty topped with melted cheese, fresh lettuce, and a toasted bun.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Classic Cheese Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa9Qq1rV_svdydH5u3O8r5ZmT8udMBnSuKeA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhH6OB52yz8CRDI2K22UHnqTka6839nA9kIQ&s" alt="Club Sandwich">
                <h3>Club Sandwich</h3>
                <p>A triple-decker sandwich filled with grilled chicken, crispy bacon, and fresh veggies.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Club Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhH6OB52yz8CRDI2K22UHnqTka6839nA9kIQ&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_xn5s4vqjKax0AxBw0tfEN5zOK3oa6h-LRg&s" alt="Grilled Chicken Sandwich">
                <h3>Grilled Chicken Sandwich</h3>
                <p>Tender grilled chicken breast topped with fresh veggies and a tangy sauce.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Grilled Chicken Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_xn5s4vqjKax0AxBw0tfEN5zOK3oa6h-LRg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToU3SE9hl5CiP6QMaROzp9WU7oAUhGsenzmQ&s" alt="Chicken Burger">
                <h3>Chicken Burger</h3>
                <p>Crispy fried chicken fillet with creamy mayo, lettuce, and pickles on a soft bun.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Chicken Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToU3SE9hl5CiP6QMaROzp9WU7oAUhGsenzmQ&s">
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
                <img src="https://ourlittlechateau.com/wp-content/uploads/2023/07/img_0420.jpg" alt="Cheese Pasta">
                <h3>Cheese Pasta</h3>
                <p>Creamy, rich pasta topped with a blend of melted cheeses for an indulgent treat.</p>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Cheese Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://ourlittlechateau.com/wp-content/uploads/2023/07/img_0420.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ4Z0Icx4vgx8hcQcSEhoRwaS-0v-Is9rk-g&s" alt="Lasagna">
                <h3>Lasagna</h3>
                <p>Layers of pasta, rich meat sauce, and creamy cheese baked to perfection.</p>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Lasagna">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ4Z0Icx4vgx8hcQcSEhoRwaS-0v-Is9rk-g&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/7b/7f/4c/passta.jpg" alt="Chicken Pasta">
                <h3>Chicken Pasta</h3>
                <p>Tender chicken served over perfectly cooked pasta with a creamy, flavorful sauce.</p>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Chicken Pasta">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://media-cdn.tripadvisor.com/media/photo-s/08/7b/7f/4c/passta.jpg">
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
                <img src="https://www.tastingtable.com/img/gallery/homemade-and-handmade-cappuccino-recipe/intro-1672767700.jpg">
                <h3>Homemade (and Handmade) Cappuccino </h3>
                <p> café-bought cappuccino  handmade version </p>
                <div class="price">$3.99</div>
                <input type="hidden" name="product_name" value="Homemade (and Handmade) Cappuccino ">
                <input type="hidden" name="product_price" value="3.99">
                <input type="hidden" name="product_image" value="https://www.tastingtable.com/img/gallery/homemade-and-handmade-cappuccino-recipe/intro-1672767700.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvAypg0X-emBZaiRL2o1084DTKZ8HwwkBuqw&s" alt="Cappuccino">
                <h3>Cappuccino</h3>
                <p>A rich and frothy coffee drink, perfect for starting your day.</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Cappuccino">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvAypg0X-emBZaiRL2o1084DTKZ8HwwkBuqw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://insanelygoodrecipes.com/wp-content/uploads/2024/02/Oreo-Shakes-on-a-table.jpg" alt="Oreo Milkshake">
                <h3>Oreo Milkshake</h3>
                <p>Indulge in a creamy, cookie-filled milkshake made with classic Oreos.</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Oreo Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://insanelygoodrecipes.com/wp-content/uploads/2024/02/Oreo-Shakes-on-a-table.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DV90iKSWpb5TtG3RHJd6R92uil4lpZyOxg&s" alt="Chocolate Milkshake">
                <h3>Chocolate Milkshake</h3>
                <p>A rich, decadent milkshake made with creamy chocolate ice cream.</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Chocolate Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6DV90iKSWpb5TtG3RHJd6R92uil4lpZyOxg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ50NC-4HKPIDJfY94b9i3SfU27b-Lya67_rg&s" alt="Strawberry Lemonade">
                <h3>Strawberry Lemonade</h3>
                <p>A sweet and tangy combination of strawberries and lemonade.</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Lemonade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ50NC-4HKPIDJfY94b9i3SfU27b-Lya67_rg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqzeJ8IYVYPVy1cFDDqx0QE7aWVH6_Yzy2ww&s" alt="Sparkling Mint Limeade">
                <h3>Lemonade</h3>
                <p>A refreshing and fizzy drink infused with lime and fresh mint.</p>
                <div class="price">$7.99</div>
                <input type="hidden" name="product_name" value="Lemonade">
                <input type="hidden" name="product_price" value="7.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqzeJ8IYVYPVy1cFDDqx0QE7aWVH6_Yzy2ww&s">
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
                <img src="https://www.simplyrecipes.com/thmb/5kgwG5CL6hmqqw1sv3ux6R3IJIU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2018__07__Seafood-Paella-METHOD-4-2097126e6d7443e1ac71158ca2af5e3e.jpg" alt="Seafood Rice">
                <h3>Seafood Paella</h3>
                <p>This saffron-infused paella recipe is loaded with mussels, clams, and shrimp. Grill it in your ...</p>
                <div class="price">$15.99</div>
                <input type="hidden" name="product_name" value="Seafood Paella">
                <input type="hidden" name="product_price" value="15.99">
                <input type="hidden" name="product_image" value="https://www.simplyrecipes.com/thmb/5kgwG5CL6hmqqw1sv3ux6R3IJIU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2018__07__Seafood-Paella-METHOD-4-2097126e6d7443e1ac71158ca2af5e3e.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://media-cdn2.greatbritishchefs.com/media/1v2hy1oz/img25981.whqc_768x512q80.jpg" alt="Fish and Chips">
                <h3>Fish and Chips</h3>
                <p>Classic battered fish served with crispy golden fries.</p>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish and Chips">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://media-cdn2.greatbritishchefs.com/media/1v2hy1oz/img25981.whqc_768x512q80.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ46g32vV0ZDjdAQHfrOjgkKPmITgQ8vKGhoA&s" alt="Fish Tacos">
                <h3>Fish Tacos</h3>
                <p>Soft tortillas filled with grilled fish, fresh veggies, and tangy sauce.</p>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Fish Tacos">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ46g32vV0ZDjdAQHfrOjgkKPmITgQ8vKGhoA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe8w3eC1poNkQbxDW0tEfM1r4LlJJ5-ML5eA&s" alt="Shrimp Scampi">
                <h3>Shrimp Scampi</h3>
                <p>Sautéed shrimp in a garlic butter sauce, served over pasta.</p>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Shrimp Scampi">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe8w3eC1poNkQbxDW0tEfM1r4LlJJ5-ML5eA&s">
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
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
    <link rel="stylesheet" href="css/res5.css">
    <title> Season to Taste Restaurant </title>

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
        <img src = "images/res5.jpg" alt="">
        <div class="restaurant-name">Season to Taste</div>
    </div>
    <br>
    <br>
    <h1>Specialty Items</h1>
    <h2 class="heading">Pizza Menu</h2>
    <div class="menu-category" id="pizza">
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA8u5NZ6tERitPKsmJHd0690iSJY4Hg671zivut2wH93rZJ5hx8QcEedeZTpeFbtvwbsI&usqp=CAU" alt="Seafood Pizza">
                <h3>Seafood Pizza</h3>
                <p>Loaded with fresh seafood, mozzarella, and a flavorful tomato base.</p>
                <div class="price">$12.99</div>
                <input type="hidden" name="product_name" value="Seafood Pizza">
                <input type="hidden" name="product_price" value="12.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSA8u5NZ6tERitPKsmJHd0690iSJY4Hg671zivut2wH93rZJ5hx8QcEedeZTpeFbtvwbsI&usqp=CAU">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1EXyUNjrliNeMfxpuMoI_olyhT1t0rb5ICQ&s" alt="Double Chicken & Cheese Pizza">
                <h3>Double Chicken & Cheese Pizza</h3>
                <p>Twice the chicken, double the cheese, all on a crispy crust.</p>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Double Chicken & Cheese Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1EXyUNjrliNeMfxpuMoI_olyhT1t0rb5ICQ&s">
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
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIgpFX9jduj5QO9Ku1ZvBFzjOgGJaLhG-uvKUySZLLXfjb7vJxzBUCuG4BOtchf_sWwg4&usqp=CAU" alt="Devilled Chicken Pizza">
                <h3>Devilled Chicken Pizza</h3>
                <p>Spicy devilled chicken with fresh veggies and mozzarella cheese.</p>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Devilled Chicken Pizza">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.simplyrecipes.com/thmb/rLl58QZmVP4C3zSlpkKBo72EUws=/2000x1333/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2019__09__easy-pepperoni-pizza-lead-3-8f256746d649404baa36a44d271329bc.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
    </div>
</div>



        




    <br>
    <br>
   
    <h2 class="heading">Burgers & Sandwiches</h2>
    
    <div class="menu-category" id="pizza">
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAOSXAHxZ6vHHnFt2xW9CWt07f7TqPQv_NxQ&s" alt="Seafood Pizza">
                <h3>Classic Cheese Burger</h3>
                <p>Loaded with fresh seafood, mozzarella, and a flavorful tomato base.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Classic Cheese Burger">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAOSXAHxZ6vHHnFt2xW9CWt07f7TqPQv_NxQ&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.foodandwine.com/thmb/pwFie7NRkq4SXMDJU6QKnUKlaoI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Ultimate-Veggie-Burgers-FT-Recipe-0821-5d7532c53a924a7298d2175cf1d4219f.jpg" alt="Double Chicken & Cheese Pizza">
                <h3>The Perfect Basic Burger</h3>
                <p>Twice the chicken, double the cheese, all on a crispy crust.</p>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="The Perfect Basic Burger">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.foodandwine.com/thmb/pwFie7NRkq4SXMDJU6QKnUKlaoI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Ultimate-Veggie-Burgers-FT-Recipe-0821-5d7532c53a924a7298d2175cf1d4219f.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://olo-images-live.imgix.net/11/11ab389f75a041d7a03d472d95c66241.jpg?auto=format%2Ccompress&q=60&cs=tinysrgb&w=500&h=333&fit=fill&fm=png32&bg=transparent&s=1577813213cbefd1f13ae3de91d4e06a" alt="BBQ Pizza">
                <h3>Club Sandwich</h3>
                <p>Smoky BBQ sauce, tender chicken, and melty cheese on a thin crust.</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Club Sandwich">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://olo-images-live.imgix.net/11/11ab389f75a041d7a03d472d95c66241.jpg?auto=format%2Ccompress&q=60&cs=tinysrgb&w=500&h=333&fit=fill&fm=png32&bg=transparent&s=1577813213cbefd1f13ae3de91d4e06a">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.andy-cooks.com/cdn/shop/articles/20241012025815-andy-20cooks-20-20balkan-20burger-20recipe.jpg?v=1728701977&width=1080">
                <h3>Burger King Is Debuting Three Chicken Sandwiches</h3>
                <p>Spicy devilled chicken with fresh veggies and mozzarella cheese.</p>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Burger King Is Debuting Three Chicken Sandwiches">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://www.andy-cooks.com/cdn/shop/articles/20241012025815-andy-20cooks-20-20balkan-20burger-20recipe.jpg?v=1728701977&width=1080">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>




        
    <br>
    <br>
   
    <h2 class="heading">Seafood</h2>
    
    <div class="menu-category" id="pizza">
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmzR3rsBZ5AMw68FUv3iS1F_YmxoEmw3BnKA&s" alt="Seafood Pizza">
                <h3>Spicy Seafood Fried Rice</h3>
                <p>Loaded with fresh seafood, mozzarella, and a flavorful tomato base.</p>
                <div class="price">$11.99</div>
                <input type="hidden" name="product_name" value="Spicy Seafood Fried Rice">
                <input type="hidden" name="product_price" value="11.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmzR3rsBZ5AMw68FUv3iS1F_YmxoEmw3BnKA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbMVz4_lOaYrS5iLHPOk8SgPrH0assWVnIag&s" alt="Double Chicken & Cheese Pizza">
                <h3>Crispy Panko Fish Tacos</h3>
                <p>Recipe for beer battered panko fish tacos. Fried fish with perfect crunch & amazing flavor. Sour ...</p>
                <div class="price">$12.99</div>
                <input type="hidden" name="product_name" value="Crispy Panko Fish Tacos">
                <input type="hidden" name="product_price" value="12.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbMVz4_lOaYrS5iLHPOk8SgPrH0assWVnIag&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk8zV_dLSdOLx68kz0W73zsPGE440N9bYLIQ&s" alt="BBQ Pizza">
                <h3> Frozen Seafood Medley</h3>
                <p>Smoky BBQ sauce, tender chicken</p>
                <div class="price">$10.99</div>
                <input type="hidden" name="product_name" value="Frozen Seafood Medley">
                <input type="hidden" name="product_price" value="10.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk8zV_dLSdOLx68kz0W73zsPGE440N9bYLIQ&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAO7yCikqdU-rD-zit54m3E0vyQOoEzuC4HA&s">
                <h3>Seafood Cajun</h3>
                <p>Seafood boil or seafood cajun is an delicious seafood recipe is made by sea foods like crabs, ...</p>
                <div class="price">$15.99</div>
                <input type="hidden" name="product_name" value="Seafood Cajun">
                <input type="hidden" name="product_price" value="15.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAO7yCikqdU-rD-zit54m3E0vyQOoEzuC4HA&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>







        <br>
    <br>
    <h1>Beverages</h1>

        <div class="menu-category" id="pizza">
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlZ3baYbOV5PEFqzoqcywDngVsBSTfzx8Rzw&s" alt="Seafood Pizza">
                <h3>Strawberry Avocado Smoothie</h3>
                <p>This five-minute smoothie has a fruity strawberries and cream theme with some sneaky avocado that ...</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Strawberry Avocado Smoothie">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlZ3baYbOV5PEFqzoqcywDngVsBSTfzx8Rzw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy1w-LAYRgRBOEzrRPQit9DqWVuALy_7ja7Q&s" alt="Double Chicken & Cheese Pizza">
                <h3>Oreo Cookie Milkshake</h3>
                <p> Oreo Cookie Milkshake Recipe is made with a homemade Oreo cream filling to take it over-the-top ...</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Oreo Cookie Milkshake">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy1w-LAYRgRBOEzrRPQit9DqWVuALy_7ja7Q&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzixmJm1j6aLFZpncyOjQHSS3vI1BSrFLaow&s" alt="BBQ Pizza">
                <h3>Homemade Lemonade</h3>
                <p>Made with freshly squeezed lemon juice</p>
                <div class="price">$5.99</div>
                <input type="hidden" name="product_name" value="Homemade Lemonade">
                <input type="hidden" name="product_price" value="5.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzixmJm1j6aLFZpncyOjQHSS3vI1BSrFLaow&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://www.girlgonegourmet.com/wp-content/uploads/2023/04/Strawberry-Lemonade-1.jpg">
                <h3>Strawberry Lemonade</h3>
                <p>Cold and refreshing strawberry lemonade made from scratch with fresh lemon juice, frozen ...</p>
                <div class="price">$8.99</div>
                <input type="hidden" name="product_name" value="Strawberry Lemonade">
                <input type="hidden" name="product_price" value="8.99">
                <input type="hidden" name="product_image" value="https://www.girlgonegourmet.com/wp-content/uploads/2023/04/Strawberry-Lemonade-1.jpg">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>


        
        <br>
    <br>
    <h1>Appetizers</h1>
    
    
    <div class="menu-category" id="pizza">
    <div class="category">
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjzexmBmxtCQPAeLOvgjb3yNMwxIBGnxV85w&s" alt="Seafood Pizza">
                <h3>Ham & Cheese Puff Pastry</h3>
                <p> Ham and Cheese appetizers are sure to be a hit!                </p>
                <div class="price">$9.99</div>
                <input type="hidden" name="product_name" value="Ham & Cheese Puff Pastry">
                <input type="hidden" name="product_price" value="9.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjzexmBmxtCQPAeLOvgjb3yNMwxIBGnxV85w&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsVnDHFZOWQSoyUrzRTKl8PUuSGWiNqWIkFw&s" alt="Double Chicken & Cheese Pizza">
                <h3>Easy Layered Cheese</h3>
                <p>Gorgeous layered cheese appetizers with deli-style sliced cheeses</p>
                <div class="price">$7.99</div>
                <input type="hidden" name="product_name" value="Easy Layered Cheese">
                <input type="hidden" name="product_price" value="7.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsVnDHFZOWQSoyUrzRTKl8PUuSGWiNqWIkFw&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr_C7rsgYS26o--xa1aalpszHTibAK04VsBg&s" alt="BBQ Pizza">
                <h3>Karen's Skewered Shrimp Scampi </h3>
                <p>Sautéed Shrimp in a Hearty Garlic Herbal Butter Sauce Skewered</p>
                <div class="price">$13.99</div>
                <input type="hidden" name="product_name" value="Karen's Skewered Shrimp Scampi ">
                <input type="hidden" name="product_price" value="13.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr_C7rsgYS26o--xa1aalpszHTibAK04VsBg&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        <div class="menu-item">
            <form action="" method="post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLL88pSzxwhSUB-z99jOW__wXWtKP3WXZ5ow&s" alt="Devilled Chicken Pizza">
                <h3>Puff Pastry Asparagus</h3>
                <p>puff pastry asparagus appetizer is a delicious vegan snack </p>
                <div class="price">$6.99</div>
                <input type="hidden" name="product_name" value="Puff Pastry Asparagus">
                <input type="hidden" name="product_price" value="6.99">
                <input type="hidden" name="product_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLL88pSzxwhSUB-z99jOW__wXWtKP3WXZ5ow&s">
                <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
            </form>
        </div>
        

        




     




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
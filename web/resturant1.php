<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
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
    <link rel="stylesheet" href="css/resturant1.css">
    <title> Girl & The Goat Restaurant </title>

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
            <li><a href="reslisting.php">Resturants</a></li>
            <li><a href="rest1menu.php">Menu Categories</a></li>
            <li><a href="cart.php">My cart</a></li>
            <li><a href="admin/login.php">My Acoount</a></li>
            <li><a id="login" href="admin/login.php">Login</a></li>
            
        </ul>
        </nav>

     
</header>


<section class="home" id="home">

    <div class="image" data-aos="fade-down">
        <img src = "images/resturant1.jpg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3> Girl & The Goat</h3>
        <p>At Girl & The Goat, we believe that every meal should be an unforgettable journey for your taste buds. Our carefully crafted dishes are made from the finest ingredients, creating a symphony of flavors that transport you to a world of culinary bliss. Join us and discover a haven where every bite is a celebration of taste and every visit is a cherished memory.</p>
        <a href="reslisting.php" class="btn">More Resturants..</a>
    </div>

</section>

<!-- Featured Section with Inline CSS -->
<section style="padding: 40px; text-align: center;">
    <h2 style="font-size: 36px; margin-bottom: 20px;"> Girl & The Goat Our Meals</h2>
    <div style="display: flex; justify-content: space-around;">
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://wallpaperaccess.com/full/767042.jpg" alt="Grilled Chicken" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Grilled Chicken</h3>
            <p>"A classic Caesar salad topped with juicy grilled chicken, crunchy croutons, and Parmesan cheese."</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$12.99</p>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://wallpapercave.com/wp/wp3376127.jpg" alt="Veggie Delight" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Margherita Pizza</h3>
            <p>A simple yet delicious pizza topped with fresh mozzarella, basil, and a drizzle of olive oil.</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$10.99</p>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://www.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2015/03/04/Interactivity/Images/iStock_000050497740_Full.jpg?t=20170517" alt="Steak Sandwich" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Vegan Buddha Bowl</h3>
            <p>A nutritious blend of quinoa, roasted vegetables, avocado, and a tangy tahini dressing.</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$14.99</p>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://wallpaperaccess.com/full/767042.jpg" alt="Grilled Chicken" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Grilled Chicken</h3>
            <p>"A classic Caesar salad topped with juicy grilled chicken, crunchy croutons, and Parmesan cheese."</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$12.99</p>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://www.washingtonpost.com/rf/image_1484w/2010-2019/WashingtonPost/2015/03/04/Interactivity/Images/iStock_000050497740_Full.jpg?t=20170517" alt="Steak Sandwich" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Vegan Buddha Bowl</h3>
            <p>A nutritious blend of quinoa, roasted vegetables, avocado, and a tangy tahini dressing.</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$14.99</p>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://www.fryingpanadventures.com/wp-content/uploads/2020/10/image-137-scaled-e1604152201367.jpeg" alt="Steak Sandwich" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Vegan Buddha Bowl</h3>
            <p>A nutritious blend of quinoa, roasted vegetables, avocado, and a tangy tahini dressing.</p>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$14.99</p>
        </div>
    </div>
</section>




   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<div class="container">

<section class="products">

   <h1 class="heading">Our Resturant Latest Products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>








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
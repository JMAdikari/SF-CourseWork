<?php

@include 'config.php';


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
    <link rel="stylesheet" href="css/index.css">

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
            <li><a href="Resturants.html">Resturants</a></li>
            <li><a href="rest1menu.php">Menu Categories</a></li>
            <li><a href="cart.php">My cart</a></li>
            <li><a id="login" href="admin/login.php">Login</a></li>
            
            
        </ul>
        </nav>

     
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image" data-aos="fade-down">
        <img src = "images/burgermain.jpg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3> Let us satisfy your hunger, one delivery at a time. </h3>
        <p>We are dedicated to delivering delicious food right to your door, offering a convenient and reliable way to satisfy your hunger with just a few clicks. Whether you're craving a quick bite or a full meal, we ensure fast, fresh, and hassle-free delivery every time.</p>
        <a href="rest1menu.html" class="btn">Order now</a>
    </div>

</section>

<!-- home section ends -->

<!-- filter form section starts  -->



<!-- filter form section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> our <span>Foods</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://cdn.tasteatlas.com/images/dishes/b05a0af72ad845f3a6abe16143d7853a.jpg?mw=2000" alt="">
                <h3> <i class="fas fa-utensils"></i> Pizza </h3>
            </div>
            <div class="content">
                <div class="price"> 700.Rs <span>1000.Rs</span> </div>
                <p>A classic Italian pizza with a crispy thin crust, topped with fresh mozzarella cheese, ripe tomatoes, and fragrant basil, drizzled with olive oil for the perfect blend of flavors.</p>
                <a href="resturant1.php" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic-1200x675.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i>  Classic Beef Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 800.Rs <span>1200.Rs</span> </div>
                <p>  A juicy beef patty grilled to perfection, topped with fresh lettuce, ripe tomatoes, onions, and a slice of melted cheese, all nestled in a toasted sesame seed bun. Served with a side of crispy fries and ketchup.</p>
                <a href="res2/MenuCategories.php" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="https://www.wikihow.com/images/e/e0/Make-a-Healthy-Salad-that-Tastes-Good-Intro.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i> Garden Fresh Salad </h3>
            </div>
            <div class="content">
                <div class="price"> 500.Rs<span>700.Rs</span> </div>
                <p> A vibrant mix of crisp lettuce, cucumbers, cherry tomatoes, and crunchy croutons, tossed in a light vinaigrette. Topped with shredded carrots and a sprinkle of Parmesan cheese for a refreshing, healthy option.</p>
                <a href="resturant4.php" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/riceandcurry.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i> Rice and Curry </h3>
            </div>
            <div class="content">
                <div class="price"> 650.Rs <span>750.Rs</span> </div>
                <p> Aromatic basmati rice served with tender chicken cooked in a rich, flavorful curry sauce made with a blend of traditional spices, coconut milk, and herbs. Accompanied by a side of pickles and papadam.</p>
                <a href="res2/MenuCategories.php" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/iced.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i>  Iced Lemonade </h3>
            </div>
            <div class="content">
                <div class="price"> 300.Rs <span>350.Rs</span> </div>
                <p>  A refreshing drink made with freshly squeezed lemons, ice, and a touch of sweetness. Perfect for quenching your thirst on a hot day, served ice-cold with a slice of lemon.</p>
                <a href="MenuCategories.html" class="btn"> Order now</a>
            </div>
        </div>

        
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/sushi.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i>   Sushi Roll Platter </h3>
            </div>
            <div class="content">
                <div class="price"> 340.Rs <span>400.Rs</span> </div>
                <p>  A variety of sushi rolls including fresh tuna, salmon, and avocado rolls, paired with pickled ginger, wasabi, and soy sauce. A perfect choice for sushi lovers looking for a fresh and light meal.</p>
                <a href="MenuCategories.html" class="btn"> Order now</a>
            </div>
        </div>

        
        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-6.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i>  BBQ </h3>
            </div>
            <div class="content">
                <div class="price"> 900.Rs <span>1300.Rs</span> </div>
                <p>  Succulent chicken wings marinated in a smoky BBQ sauce, grilled to perfection for a sticky, flavorful bite. Served with a side of coleslaw and dipping sauce for the ultimate BBQ experience.</p>
                <a href="MenuCategories.html" class="btn"> Order now</a>
            </div>
        </div>



        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/butter.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i>   Butter Chicken </h3>
            </div>
            <div class="content">
                <div class="price"> 290.99 <span>350.99</span> </div>
                <p>  A creamy and mildly spiced curry made with marinated chicken simmered in a rich tomato and butter sauce. Served with fluffy basmati rice or warm naan bread.</p>
                <a href="#" class="btn"> Order now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->


<!-- Featured Section with Inline CSS -->
<section style="padding: 40px; text-align: center;">
    <h2 style="font-size: 36px; margin-bottom: 20px;">Popular Meals</h2>
    <div style="display: flex; justify-content: space-around;">
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://www.pepperdelight.com/wp-content/uploads/2016/01/ChickenPasta1.jpg" alt="Grilled Chicken" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Chicken Pasta with White Sauce</h3>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$12.99</p>
            <a href="resturant1.php" class="btn"> Order now</a>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://img.lovepik.com/photo/50077/4812.jpg_wh860.jpg" alt="Veggie Delight" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Seafood Pizza</h3>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$10.99</p>
            <a href="resturant4.php" class="btn"> Order now</a>
        </div>
        <div style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 30%; text-align: center;">
            <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Grilled-Chicken-Sandwich-750x750.jpg" alt="Steak Sandwich" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
            <h3 style="margin: 10px 0;">Grilled Chicken Sandwich</h3>
            <p style="font-size: 18px; font-weight: bold; color: #ab6806;">$14.99</p>
            <a href="res2/MenuCategories.php" class="btn"> Order now</a>
        </div>
    </div>
</section>

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <h1 class="heading"> our <span>offers</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up">
            <h3> basic plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">3000</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>10 days</li>
                <li>food and drinks</li>
                
            </ul>
            <a href="index.php" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> standard plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">5000</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>20 days</li>
                <li>food and drinks</li>
                
            </ul>
            <a href="index.php" class="btn">choose plan</a>
        </div>

        <div class="box" data-aos="zoom-in-up">
            <h3> premium plan </h3>
            <div class="price">
                <span>Rs</span>
                <span class="amount">9000</span>
                <span>/mo</span>
            </div>
            <ul>
                <li>30 days</li>
                <li>food and drinks</li>
               
                
            </ul>
            <a href="index.php" class="btn">choose plan</a>
        </div>

    </div>

</section>

<!-- pricing section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>Review</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="">
                <h3>   Michael K</h3>
                <p>"Fast and reliable! My food always arrives on time and still hot. QuickPlate makes ordering so easy."</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.png" alt="">
                <h3> Emily W</h3>
                <p>
                    "Great variety of restaurants to choose from, and the delivery is super efficient. I'm impressed!"
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.png" alt="">
                <h3>  John D</h3>
                <p>
                    "I've tried several food delivery apps, but QuickPlate is by far the best. Excellent service and user-friendly!"
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3> Lisa M</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

      

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="" data-aos="zoom">

        <div class="inputBox">
            <input type="text" placeholder="name" data-aos="fade-up">
            <input type="email" placeholder="email" data-aos="fade-up">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number" data-aos="fade-up">
            <input type="text" placeholder="subject" data-aos="fade-up">
        </div>

        <textarea name="" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>
        
        <input type="submit" value="send message" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- blog section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/img1.jpg" alt="">
            </div>
            <div class="content">
                <h3>What is bombay and hyderabadi biryani?</h3>
                <a href="https://natashaskitchen.com/" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>How many types of burger are there?</h3>
                <a href="https://createmycookbook.com/home_family_alt?msclkid=83d58ca11fc515a40f05ea5d57948db5&utm_source=bing&utm_medium=cpc&utm_campaign=New%20CMC&utm_term=%2Bfamily%20%2Brecipe%20%2Bcookbook&utm_content=Family%20Cookbook" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/img3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Did you know some facts about pizza?</h3>
                <a href="https://smittenkitchen.com/" class="btn">read more</a>
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st jan, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- blog section ends -->

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
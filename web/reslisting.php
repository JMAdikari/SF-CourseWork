<?php

@include 'config.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
 
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="css/ResListing copy.css"> <!-- to link css file change here -->

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
    <!-- Main Content -->
    <div class="main-container flex pt-20">
        <!-- Filter Section -->
        <div class="filter-section flex flex-col">
          <div class="topic">Sort</div>
          <button class="filter-button">Popular </button>
          <button class="filter-button">Distance</button>
          <button class="filter-button">Customer Rating</button>
          <button class="filter-button">Delivery Time</button>
          <button class="filter-button">Minimum Order</button>
          <button class="filter-button">Delivery Fee</button>
          <button class="filter-button">Discount</button>
  
          <div class="topic">Filter</div>
          <button class="filter-button">4 Stars</button>
          <button class="filter-button">Low Delivery Fee</button>
          <button class="filter-button">Offers</button>
          <button class="filter-button">Hygiene Ratings</button>
  
          <div class="topic">What's On Your Mind?</div>
          <div class="category-buttons">
            <div class="category-button">
              <img src="images/assets/eaters-collective-ddZYOtZUnBk-unsplash.jpg" alt="Rice" />
              <span>Rice</span>
            </div>
            <div class="category-button">
              <img
                src="images/assets/seafood.jpg"
                alt="Seafood"
              />
              <span>Seafood</span>
            </div>
            <div class="category-button">
              <img
                src="images/assets/allen-rad-OCHMcVOWRAU-unsplash.jpg"
                alt="Burgers"
              />
              <span>Burgers</span>
            </div>
            <div class="category-button">
              <img
                src="images/assets/pexels-enginakyurt-2347311.jpg"
                alt="Noodles"
              />
              <span>Noodles</span>
            </div>
            <div class="category-button">
              <img
                src="images/assets/pizza.jpg"
                alt="Pizza"
              />
              <span>Pizza</span>
            </div>
            <div class="category-button">
              <img src="images/assets/images-25.jpeg" alt="BBQ" />
              <span>BBQ</span>
            </div>
          </div>
        </div>
  
        <!-- Restaurants Sections -->
        <div class="w-full ml-5 mt-5 ">
          <section class="restaurant-section">
            <div class="topic">Nearby Restaurants</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Italian Bistro">
                <img
                  src="images/resturant1.jpg"
                  alt="Italian Bistro"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Girl & The Goat </div>
                <p><strong>Location:</strong>  Randolph St <br> </p>
                <p><strong>Cuisine:</strong>American</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                 <!-- View on Map Button -->
                 <button class="view-menu-btn" onclick="window.location.href='resturant1.php'">View Restaturant</button>
                 <!-- View Menu Button -->
                 <button class="view-menu-btn" onclick="window.location.href='https://maps.app.goo.gl/t53BJEUucSSmT6Uh7'">View On Map</button>
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Ceylon Taste">
                <img
                  src="https://www.grillsseafood.com/wp-content/uploads/2018/03/Grills-Lakeside-tiki-bar-restaurant-deck-waterfront-florida-orlando-winter-park-attractions-1.jpg"
                  alt="Taco Fiesta"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Salt & Sugar</div>
                <p><strong>Location:</strong>4, 18, Gonawala</p>
                <p><strong>Cuisine:</strong> Sri Lankan</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <!-- View on Map Button -->
                <button class="view-menu-btn" onclick="window.location.href='resturant4.php'">View Restaturant</button>
                <!-- View Menu Button -->
                <button class="view-menu-btn" onclick="window.location.href='https://maps.app.goo.gl/v86f9iJ2DDwrNGms9'">View On Map</button>
              </div>
              <div class="restaurant-card" data-name="Sushi House">
                <img
                  src="https://a.cdn-hotels.com/gdcs/production54/d1315/f0fa24f3-521e-4e64-8ef9-9b31724d4c67.jpg"
                  alt="Sushi House"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Great British </div>
                <p><strong>Location:</strong> 36 James's St  </p>
                <p><strong>Cuisine:</strong>British </p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <!-- View on Map Button -->
                <button class="view-menu-btn" onclick="window.location.href='res2/MenuCategories.php'">View Restaturant</button>
                <!-- View Menu Button -->
                <button class="view-menu-btn" onclick="window.location.href='https://maps.google.com/?q=Taco+Fiesta+456+Nearby+Avenue'">View On Map</button>
              </div>
              
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Hela Rasa">
                <img
                  src="https://www.insplosion.com/blog/wp-content/uploads/2020/12/The-Top-5-Most-Beautiful-Restaurants-in-Toronto-1.jpg"
                  alt="Hela Rasa"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Yue Chuan</div>
                <p><strong>Location:</strong> 789 Nearby Blvd</p>
                <p><strong>Cuisine:</strong>Chinese</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <!-- View on Map Button -->
                <button class="view-menu-btn" onclick="window.location.href='resturant1.php'">View Restaturant</button>
                <!-- View Menu Button -->
                <button class="view-menu-btn" onclick="window.location.href='https://maps.app.goo.gl/2TpNzp4FNkrzaCn79'">View On Map</button>
              </div>
            </div>
          </section>
          <section class="restaurant-section">
            <div class="topic">Sri Lankan Restaurants</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Hela Rasa">
                <img
                  src="images/assets/pexels-cottonbro-5607882.jpg"
                  alt="Hela Rasa"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Hela Rasa</div>
                
                <p><strong>Cuisine:</strong> Sri Lankan</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
               
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Ceylon Taste">
                <img
                  src="images/assets/image-result-for-curry-leaf-restaurant-colombo-buf-1.jpeg"
                  alt="Ceylon Taste"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Ceylon Taste</div>
                
                <p><strong>Cuisine:</strong> Sri Lankan</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
                
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Rice & Curry">
                <img
                  src="images/assets/sri1.jpeg"
                  alt="Ceylon Taste"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Rice & Curry</div>
                
                <p><strong>Cuisine:</strong> Sri Lankan</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Curry Leaf">
                <img
                  src="images/assets/Sri-Lanka-6-scaled.jpg"
                  alt="Curry Leaf"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Curry Leaf</div>
                
                <p><strong>Cuisine:</strong> Sri Lankan</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
            </div>
          </section>
          <section class="restaurant-section">
            <div class="topic">Indian Restaurants</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Indian food corner">
                <img
                  src="images/assets/indian1.jpg"
                  alt="Indian food corner"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Indian food Corner</div>
                
                <p><strong>Cuisine:</strong> Indian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Masala Majesty">
                <img
                  src="images/assets/indian4.jpg"
                  alt="Masala Majesty"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Masala Majesty</div>
                
                <p><strong>Cuisine:</strong> Indian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <div class="restaurant-card" data-name="Indian Kitchen">
                <img
                  src="images/assets/rumman-amin-ltN0BZhlvxY-unsplash.jpg"
                  alt="Indian Kitchen"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Indian Kitchen</div>
                
                <p><strong>Cuisine:</strong> Indian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Nutmeg">
                <img
                  src="images/assets/pexels-cottonbro-5371919.jpg"
                  alt="Nutmeg"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Nutmeg</div>
                
                <p><strong>Cuisine:</strong> Indian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
            </div>
          </section>
          
          <section class="restaurant-section">
            <div class="topic">Chinese Restaurants</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Yun's Kitchen">
                <img
                  src="images/assets/chinese1.jpg"
                  alt="Yun's Kitchen"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Yun's kitchen</div>
                
                <p><strong>Cuisine:</strong> Chinese</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Dragon Kitchen">
                <img
                  src="images/assets/chinese2.jpg"
                  alt="Dragon Kitchen"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Dragon Kitchen</div>
                
                <p><strong>Cuisine:</strong> Chinese</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
                
              </div>
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Tasty china">
                <img
                  src="images/assets/chinese5.jpg"
                  alt="Tasty China"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Tasty China</div>
                
                <p><strong>Cuisine:</strong> Chinese</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <div class="restaurant-card" data-name="Hot pot">
                <img
                  src="images/assets/chinese4.jpg"
                  alt="Hot pot"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Hot pot</div>
               
                <p><strong>Cuisine:</strong> Chinese</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              
            </div>
          </section>
          <section class="restaurant-section">
            <div class="topic">Italian Restaurants</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Italian Bistro">
                <img
                  src="images/assets/italian1.jpg"
                  alt="Italian Bistro"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Pizza Saves</div>
                
                <p><strong>Cuisine:</strong> Italian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Italian Bistro">
                <img
                  src="images/assets/italian.jpg"
                  alt="Pizza Fiesta"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Italian Bistro</div>
                
                <p><strong>Cuisine:</strong> Italian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Italian Corner">
                <img
                  src="images/assets/italian2.jpg"
                  alt="Italian Corner"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Italian Corner</div>
                
                <p><strong>Cuisine:</strong> Italian</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
            </div>
          </section>
          <section class="restaurant-section">
            <div class="topic">cafe and juice bars</div>
            <div class="restaurant-list">
              <!-- Restaurant 1 -->
              <div class="restaurant-card" data-name="Cool Zone">
                <img
                  src="images/assets/cafe4.jpg"
                  alt="Cool Zone"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Cool zone</div>
                
                <p><strong>Cuisine:</strong> Drinks</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 2 -->
              <div class="restaurant-card" data-name="Drinks and bites">
                <img
                  src="images/assets/caf3.jpg"
                  alt="Drinks and bites"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Drinks and bites</div>
                
                <p><strong>Cuisine:</strong> Beverages</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <!-- Restaurant 3 -->
              <div class="restaurant-card" data-name="Viki's">
                <img
                  src="images/assets/cafe3.jpg"
                  alt="Viki's"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Viki's</div>
                
                <p><strong>Cuisine:</strong> Bakery items</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">☆</span> (4.5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              <div class="restaurant-card" data-name="cool Bar">
                <img
                  src="images/assets/cafe2.jpg"
                  alt="Cool Bar"
                  class="restaurant-img"
                />
                <div class="restaurant-name">Cool Bar</div>
                
                <p><strong>Cuisine:</strong> Beverages & snacks</p>
                <p>
                  <strong>Rating:</strong> <span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span
                  ><span class="star">★</span><span class="star">★</span> (5/5)
                </p>
                <button class="view-menu-btn">View Menu</button>
              </div>
              
            </div>
          </section>
        </div>
    </div>
     <!-- Overlay for popup -->
<div class="popup-overlay hidden"></div>

<!-- Popup for displaying location or message -->
<div id="location-popup" class="popup hidden">
  <div class="popup-content">
    <h3 class="popuph3">Welcome!</h3>
    <p id="popup-text">Please allow location access for better restaurant suggestions.</p>
    <button onclick="closePopup()">Close</button>
  </div>
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
<script src="js/ResListing copy.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>
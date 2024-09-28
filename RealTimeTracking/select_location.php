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
  <link rel="stylesheet" href="css/resturants.css">
  <title>Select Location</title>

</head>

<body>

  <!-- header section starts  -->
  <header class="header">
    <a href="#" class="logo"> <i class="fas fa-utensils"></i> QuickPlate </a>

    <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="searchBox">
      <label for="searchBox" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <a href="login.php">
        <div class="fas fa-user" id="login-btn"></div>
      </a>
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
      <a href="cart.html">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
      </a>
    </div>

    <nav class="navbar">
      <ul>
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="Resturants.html">Resturants</a></li>
        <li><a href="MenuCategories.html">Menu Categories</a></li>
        <li><a href="TrackOrder.html">Track Order</a></li>
        <li><a href="cart.html">My cart</a></li>
        <li><a href="myacc.html">My Account</a></li>
        <li><a id="login" href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- The real-time tracking and API connection goes here -->
  <section class="home" id="home">
    <div id="map" style="height: 400px;"></div>
    <?php $orderId = isset($_GET['id']) ? $_GET['id'] : ''; ?>

    <section class="" id="">
      <!-- Input for address -->
      <input type="text" id="address" placeholder="Enter your address">
      <button onclick="geocodeAddress()">Find Location</button>
    </section>

    <script>
      let map;
      let marker;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: { lat: 6.8145, lng: 80.0867 } // Centered at Homagama, Sri Lanka
        });

        marker = new google.maps.Marker({
          map: map,
          position: { lat: 6.8145, lng: 80.0867 } // Default position
        });

        // Allow user to place marker by clicking on the map
        map.addListener('click', function (event) {
          var clickedLocation = event.latLng;
          marker.setPosition(clickedLocation);
          map.setCenter(clickedLocation);
        });


      }

      function geocodeAddress() {
        var address = document.getElementById('address').value;
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({ 'address': address }, function (results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            marker.setPosition(results[0].geometry.location);
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
      <?php
      // Include the database connection file
      require 'database.php'; // Ensure this file contains the code to connect to your database
      
      if (isset($_POST['address']) && isset($_POST['order_id'])) {
        $address = $_POST['address'];
        $orderId = $_POST['order_id'];

        // Prepare the SQL statement to update the address
        $sql = "UPDATE orders SET flat = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('si', $address, $orderId);

        // Execute the statement
        if ($stmt->execute()) {
          echo "Address updated successfully!";
        } else {
          echo "Error updating address: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
      }
      ?>

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPf46tjRUjW-LOlV7eBU5oxVwoQ7HtVaQ&callback=initMap"
      async defer></script>
  </section>

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
        <a href="#"> <i class="fas fa-envelope"></i> QuickPlate@gmail.com </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> colombo 7, SriLanka </a>
      </div>
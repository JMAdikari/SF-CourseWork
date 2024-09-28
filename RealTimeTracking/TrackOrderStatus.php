<?php
include 'config.php';

session_start(); // Start the session

// Check if the user is logged in and set $user_id
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  // Handle the case where the user is not logged in
  echo "You need to log in to view your orders.";
  exit;
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
  <link rel="stylesheet" href="css/trackorder.css">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


</head>

<body>

  <!-- header section starts  -->

  <header class="header">

    <a href="#" class="logo" img class="logo"> <i class="fas fa-utensils"></i> QuickPlate </a>


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

        <li><a href="login.html">My Acoount</a></li>
        <li><a id="login" href="login.php">Login</a></li>

      </ul>
    </nav>


  </header>


  <section class="home" id="home">

  <div class="container">
    <div class="title-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2 >Order <b>Details</b></h2>
          </div>
          <div class="col-sm-6 text-right">
            <a href="" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
            <a href="#" onclick="window.print()" class="btn btn-info"><i class="material-icons">&#xE24D;</i> <span>Print</span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="table-wrapper" id="empty">
      <table class="table table-striped table-hover text-center">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Method</th>
            <th>Flat</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Pin Code</th>
            <th>Total Products</th>
            <th>Total Price</th>
            <th>Order Status</th>
            <th>Items</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM `order` WHERE `user_id`= $user_id";
          $result = mysqli_query($conn, $sql);
          $counter = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $orderId = $row['id'];
            $name = $row['name'];
            $number = $row['number'];
            $email = $row['email'];
            $method = $row['method'];
            $flat = $row['flat'];
            $street = $row['street'];
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $pin_code = $row['pin_code'];
            $total_products = $row['total_products'];
            $total_price = $row['total_price'];
            $order_status = $row['order_status'];

            $counter++;

            echo '<tr>
              <td>' . $orderId . '</td>
              <td>' . $name . '</td>
              <td>' . $number . '</td>                                   
              <td>' . $email . '</td>
              <td>' . $method . '</td>
              <td>' . $flat . '</td>
              <td>' . $street . '</td>
              <td>' . $city . '</td>
              <td>' . $state . '</td>
              <td>' . $country . '</td>
              <td>' . $pin_code . '</td>
              <td>' . $total_products . '</td>
              <td>' . $total_price . '</td>
              <td><a href="#" data-toggle="modal" data-target="#orderStatus' . $orderId . '" class="view"><i class="material-icons">&#xE5C8;</i></a></td>
              <td><a href="#" data-toggle="modal" data-target="#orderItem' . $orderId . '" class="view" title="View Details"><i class="material-icons">&#xE5C8;</i></a></td>
            </tr>';
          }

          if ($counter == 0) {
            ?>
            <script> document.getElementById("empty").innerHTML = '<div class="col-md-12 my-5"><div class="card"><div class="card-body cart"><div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3"><h3><strong>You have not ordered any items.</strong></h3><h4>Please order to make me happy :)</h4> <a href="index.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a> </div></div></div></div>';</script> <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php
  include 'partials/orderStatusModel.php';
  include 'partials/orderItemModel.php';
  include 'partials/orderManage.php';
  ?>
</section>


  <!-- footer section ends -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>



  </script>



  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

  <script>

    AOS.init({
      duration: 800,
      delay: 400
    });

</body >

</html >
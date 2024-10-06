<?php

// Include the config file
include '../config.php';

// Start the session
session_start();

$user_id = $_SESSION['user_id'];

// Redirect to login page if user is not logged in
if(!isset($user_id)){
   header('location:login.php');
   exit(); // Always add exit() after header redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>User Page</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file links -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user.css">

</head>
<body>

<h1 class="title"> <span>User</span> Profile Page </h1>

<section class="profile-container">

   <?php
      // Fetch user profile from the database
      $select_profile = mysqli_query($conn, "SELECT * FROM `user` WHERE userID = '$user_id'") or die('query failed');
      
      if(mysqli_num_rows($select_profile) > 0){
         $fetch_profile = mysqli_fetch_assoc($select_profile);
      } else {
         echo '<p>User not found!</p>';
      }
   ?>

   <div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="Profile Image">
      <h3><?= $fetch_profile['username']; ?></h3>
      <a href="user_profile_update.php" class="btn">Update Profile</a>
      <a href="logout.php" class="delete-btn">Logout</a>
      <div class="flex-btn">
         <a href="user_page.php" class="option-btn">My Orders</a>
         <a href="../index.php" class="option-btn">Home</a>
      </div>
   </div>

</section>

<!-- My Account Section -->
<section class="my-account">
    <div class="container">
        <!-- Order History -->
        <div class="order-history">
            <h3>Order History</h3>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001234</td>
                        <td>09/10/2024</td>
                        <td>Delivered</td>
                        <td>$25.00</td>
                    </tr>
                    <tr>
                        <td>#001235</td>
                        <td>09/05/2024</td>
                        <td>In Progress</td>
                        <td>$18.50</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn">Track All Orders</button>
        </div>
    </div>
</section>

</body>
</html>

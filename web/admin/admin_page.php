<?php

// Include the config file
include '../config.php';

// Start the session
session_start();

$admin_id = $_SESSION['admin_id'];

// Redirect to login page if the admin is not logged in
if(!isset($admin_id)){
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

   <title>Admin Page</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1 class="title"> <span>Admin</span> Profile Page </h1>

<section class="profile-container">

   <?php
      // Fetch the admin's profile from the database using MySQLi
      $select_profile = mysqli_query($conn, "SELECT * FROM `user` WHERE userID = '$admin_id'") or die('query failed');

      if(mysqli_num_rows($select_profile) > 0){
         $fetch_profile = mysqli_fetch_assoc($select_profile);
      }
   ?>

   <div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="Profile Picture">
      <h3><?= $fetch_profile['username']; ?></h3>
      <a href="admin_profile_update.php" class="btn">Update Profile</a>
      <a href="insertadmin.php" class="btn">Edit Foods</a>
      <a href="products.php" class="btn">View Foods</a>
      <a href="insertadmin.php" class="btn">Update Foods</a>
      <a href="admin_profile_update.php" class="btn">Edit Restaurant</a>
      <a href="admin_profile_update.php" class="btn">Modify Orders</a>
      <a href="logout.php" class="delete-btn">Logout</a>
   </div>

</section>

</body>
</html>

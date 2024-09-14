<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Admin Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1 class="title"> <span>Admin</span> Profile Page </h1>

<section class="profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `user` WHERE userID = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="Profile Picture">
      <h3><?= $fetch_profile['username']; ?></h3>
      <a href="admin_profile_update.php" class="btn">Update Profile</a>
      <a href="insertadmin.php" class="btn">Edit Foods</a>
      <a href="products.php" class="btn">View Foods</a>
      <a href="admin_update.php?edit=2" class="btn">Update Foods</a>
      <a href="admin_profile_update.php" class="btn">Edit Resturant</a>
      <a href="admin_profile_update.php" class="btn">Modify Orders</a>
      <a href="logout.php" class="delete-btn">Logout</a>
   </div>

</section>

</body>
</html>

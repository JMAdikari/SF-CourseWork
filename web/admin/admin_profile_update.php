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

if(isset($_POST['update'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   
   // Update username and email
   $update_profile = mysqli_query($conn, "UPDATE `user` SET username = '$name', email = '$email' WHERE userID = '$admin_id'") or die('query failed');

   $old_image = $_POST['old_image'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   if(!empty($image)){

      if($image_size > 2000000){
         $message[] = 'Image size is too large';
      }else{
         // Update image
         $update_image = mysqli_query($conn, "UPDATE `user` SET image = '$image' WHERE userID = '$admin_id'") or die('query failed');

         if($update_image){
            move_uploaded_file($image_tmp_name, $image_folder);
            unlink('uploaded_img/'.$old_image);
            $message[] = 'Image has been updated!';
         }
      }

   }

   $old_pass = $_POST['old_pass'];
   $previous_pass = md5($_POST['previous_pass']);
   $previous_pass = filter_var($previous_pass, FILTER_SANITIZE_STRING);
   $new_pass = md5($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = md5($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   // Update password
   if(!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($previous_pass != $old_pass){
         $message[] = 'Old password does not match!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'Confirm password does not match!';
      }else{
         $update_password = mysqli_query($conn, "UPDATE `user` SET password = '$confirm_pass' WHERE userID = '$admin_id'") or die('query failed');
         $message[] = 'Password has been updated!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Admin Profile Update</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<h1 class="title"> Update <span>Admin</span> Profile </h1>

<section class="update-profile-container">

   <?php
      // Fetch admin profile
      $select_profile = mysqli_query($conn, "SELECT * FROM `user` WHERE userID = '$admin_id'") or die('query failed');
      $fetch_profile = mysqli_fetch_assoc($select_profile);
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
      <div class="flex">
         <div class="inputBox">
            <span>Username : </span>
            <input type="text" name="name" required class="box" placeholder="Enter your name" value="<?= $fetch_profile['username']; ?>">
            <span>Email : </span>
            <input type="email" name="email" required class="box" placeholder="Enter your email" value="<?= $fetch_profile['email']; ?>">
            <span>Profile Pic : </span>
            <input type="hidden" name="old_image" value="<?= $fetch_profile['image']; ?>">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
            <span>Old Password :</span>
            <input type="password" class="box" name="previous_pass" placeholder="Enter previous password">
            <span>New Password :</span>
            <input type="password" class="box" name="new_pass" placeholder="Enter new password">
            <span>Confirm Password :</span>
            <input type="password" class="box" name="confirm_pass" placeholder="Confirm new password">
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="Update Profile" name="update" class="btn">
         <a href="admin_page.php" class="option-btn">Go Back</a>
      </div>
   </form>

</section>

</body>
</html>

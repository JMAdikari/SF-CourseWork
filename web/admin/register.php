<?php

// Include the config file
include '../config.php';

if(isset($_POST['submit'])){

   // Sanitize inputs
   $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $pass = md5(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
   $cpass = md5(filter_var($_POST['cpass'], FILTER_SANITIZE_STRING));
   $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

   // Handle the uploaded image
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   // Check if the user already exists
   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already exists!';
   } else {
      if($pass != $cpass){
         $message[] = 'Confirm password does not match!';
      } elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      } else {
         // Insert user data
         $insert = mysqli_query($conn, "INSERT INTO `user`(username, email, password, address, image) VALUES('$username', '$email', '$cpass', '$address', '$image')") or die('query failed');

         if($insert){
            // Move uploaded image to folder
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Registered successfully!';
            header('location:login.php');
         }
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
   <title>Register</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
   // Display messages if any
   if(isset($message)){
      foreach($message as $msg){
         echo '
         <div class="message">
            <span>'.$msg.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
   
<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Register Now</h3>
      <input type="text" required placeholder="Enter your username" class="box" name="username">
      <input type="email" required placeholder="Enter your email" class="box" name="email">
      <input type="password" required placeholder="Enter your password" class="box" name="pass">
      <input type="password" required placeholder="Confirm your password" class="box" name="cpass">
      <input type="text" required placeholder="Enter your address" class="box" name="address">
      <input type="file" name="image" required class="box" accept="image/jpg, image/png, image/jpeg">
      <p>Already have an account? <a href="login.php">Login now</a></p>
      <input type="submit" value="Register Now" class="btn" name="submit">
   </form>

</section>

</body>
</html>

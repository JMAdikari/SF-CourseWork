<?php

// Include the config file
include '../config.php';

session_start();

if(isset($_POST['submit'])){

   // Sanitize the input
   $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $pass = md5(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

   // MySQLi query to select user based on email and password
   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   // Check if the user exists
   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);

      // Check if the user is an admin or regular user
      if($row['user_type'] == 'admin'){
         $_SESSION['admin_id'] = $row['userID'];
         header('location:admin_page.php');
      } elseif($row['user_type'] == 'user'){
         $_SESSION['user_id'] = $row['userID'];
         header('location:user_page.php');
      } else {
         $message[] = 'No user found!';
      }

   } else {
      $message[] = 'Incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

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
      <h3>Login Now</h3>
      <input type="email" required placeholder="Enter your email" class="box" name="email">
      <input type="password" required placeholder="Enter your password" class="box" name="pass">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
      <input type="submit" value="Login Now" class="btn" name="submit">
      <a href="../index.php" class="btn">Back to Home</a>
   </form>

</section>

</body>
</html>

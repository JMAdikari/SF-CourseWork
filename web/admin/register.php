<?php

include 'config.php';

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $username = filter_var($username, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
   $address = $_POST['address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/'.$image;

   $select = $conn->prepare("SELECT * FROM `user` WHERE email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'user already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password does not match!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = $conn->prepare("INSERT INTO `user`(username, email, password, address, image) VALUES(?,?,?,?,?)");
         $insert->execute([$username, $email, $cpass, $address, $image]);
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
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

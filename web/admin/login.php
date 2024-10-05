<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `user` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['userID'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['userID'];
         header('location:user_page.php');

      }else{
         $message[] = 'No user found!';
      }
      
   }else{
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

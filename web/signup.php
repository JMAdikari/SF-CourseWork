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
    <link rel="stylesheet" href="css/signup.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"img class="logo"> <i class="fas fa-utensils"></i> QuickPlate </a>
    

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
            
            <li><a href="myacc.html">My Acoount</a></li>
            <li><a id="login" href="login.php">Login</a></li>
            
        </ul>
        </nav>

     
</header>


<div class="container">
    
    <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $address = $_POST["address"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_BCRYPT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat) OR empty($address) ) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM user WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{


            
            $sql = "INSERT INTO user (username, email, password,address) VALUES ( ?, ?, ?,? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssss",$fullName, $email, $passwordHash , $address);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

    <form action="signup.php" method="post">
        <h3>Sign Up</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Full Name:">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email:">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password:">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
        </div>

        <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Address:">
         </div>

        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Register" name="submit">
        </div>
    </form>
    <div>
    <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
  </div>
</div>




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
            <a href="#"> <i class="fas fa-envelop"></i> QuickPlate@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> colombo 7, SriLanka </a>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

   

</section>

<!-- footer section ends -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

AOS.init({
    duration:800,
    delay:400
});

</script>

</body>
</html>
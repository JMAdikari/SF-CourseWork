



<?php

@include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

   <!-- Font Awesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS File Link -->
   <link rel="stylesheet" href="css/products.css">
   
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<div class="container">

<section class="products">

   <h1 class="heading">All Products</h1>

   <table class="product-table">
      <thead>
         <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
         </tr>
      </thead>
      <tbody>
         <?php
      
         $select_products = mysqli_query($conn, "SELECT * FROM `products`");
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_product = mysqli_fetch_assoc($select_products)){
         ?>
         <tr>
            <td><img src="<?php echo $fetch_product['image']; ?>" alt=""></td>
            <td><?php echo $fetch_product['name']; ?></td>
            <td>$<?php echo $fetch_product['price']; ?>/-</td>
               <form action="" method="post">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
               </form>
            </td>
         </tr>
         <?php
            };
         };
         ?>
      </tbody>
   </table>

</section>

</div>

<!-- Custom JS File Link -->
<script src="js/script.js"></script>

</body>
</html>

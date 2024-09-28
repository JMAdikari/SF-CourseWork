<?php 
    $itemModalSql = "SELECT * FROM `order`";
    $itemModalResult = mysqli_query($conn, $itemModalSql);
    while($itemModalRow = mysqli_fetch_assoc($itemModalResult)){
        $orderid = $itemModalRow['id'];
        $userid = $itemModalRow['user_id'];
    
?>

<!-- Modal -->
<div class="modal fade" id="orderItem<?php echo $orderid; ?>" tabindex="-1" role="dialog" aria-labelledby="orderItem<?php echo $orderid; ?>" aria-hidden="true" style="width: -webkit-fill-available;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(111 202 203);">
                <h5 class="modal-title" id="orderItem<?php echo $orderid; ?>">Order Items (<b>Order Id: <?php echo $orderid; ?></b>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"><?php



// Include database configuration
include 'config.php'; 

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    echo "User not logged in.";
    exit;
}


$itemModalSql = "SELECT * FROM `order` WHERE `user_id`= $user_id";
$itemModalResult = mysqli_query($conn, $itemModalSql);
while ($itemModalRow = mysqli_fetch_assoc($itemModalResult)) {
    $orderid = $itemModalRow['id'];

    ?>

    <!-- Modal -->
    <div class="modal fade" id="orderItem<?php echo $orderid; ?>" tabindex="-1" role="dialog"
        aria-labelledby="orderItem<?php echo $orderid; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderItem<?php echo $orderid; ?>">Order Items</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table text">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="px-3">Item</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="text-center">Quantity</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="text-center">Price</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="text-center">Image</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Correct query to fetch items in the order
                                        $mysql = "SELECT * FROM `cart` WHERE `id` = $orderid";
                                        $myresult = mysqli_query($conn, $mysql);
                                        while ($myrow = mysqli_fetch_assoc($myresult)) {
                                            // Fetch details of items
                                            $name = $myrow['name'];
                                            $price = $myrow['price'];
                                            $image = $myrow['image'];
                                            $itemQuantity = $myrow['quantity'];

                                            echo '<tr>
                                                    <td>' . $name . '</td>
                                                    <td class="text-center">' . $itemQuantity . '</td>
                                                    <td class="text-center">' . $price . '</td>
                                                    <td class="text-center"><img src="' . $image . '" alt="Item Image" style="width: 50px; height: 50px;"></td>
                                                </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
}
?>

            
                <div class="container">
                    <div class="row">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table text">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="px-3">Item</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="text-center">Quantity</div>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $mysql = "SELECT * FROM `checkout` WHERE orderId = $orderid";
                                    $myresult = mysqli_query($conn, $mysql);
                                    while($myrow = mysqli_fetch_assoc($myresult)){
                                        $pizzaId = $myrow['pizzaId'];
                                        $itemQuantity = $myrow['itemQuantity'];
                                        
                                        $itemsql = "SELECT * FROM `pizza` WHERE pizzaId = $pizzaId";
                                        $itemresult = mysqli_query($conn, $itemsql);
                                        $itemrow = mysqli_fetch_assoc($itemresult);
                                        $pizzaName = $itemrow['pizzaName'];
                                        $pizzaPrice = $itemrow['pizzaPrice'];
                                        $pizzaDesc = $itemrow['pizzaDesc'];
                                        $pizzaCategorieId = $itemrow['pizzaCategorieId'];

                                        echo '<tr>
                                                <th scope="row">
                                                    <div class="p-2">
                                                    <img src="/OnlinePizzaDelivery/img/pizza-'.$pizzaId. '.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> '.$pizzaName. '</h5><span class="text-muted font-weight-normal font-italic d-block">Rs. ' .$pizzaPrice. '/-</span>
                                                    </div>
                                                    </div>
                                                </th>
                                                <td class="align-middle text-center"><strong>' .$itemQuantity. '</strong></td>
                                            </tr>';
                                    }
                                ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    }
?>
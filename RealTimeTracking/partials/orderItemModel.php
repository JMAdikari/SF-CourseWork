<?php



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

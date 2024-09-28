<?php

include 'config.php';

session_start(); // Start the session

// Check if the user is logged in and set $user_id
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Handle the case where the user is not logged in
    echo "You need to log in to view your orders.";
    exit;
}

?>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Center the table wrapper on the page */
        .table-wrapper {
            background: #fff;
            padding: 10px 15px;
            /* Reduced padding */
            margin: 30px auto;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            max-width: 100%;
            /* Set the table width to full page */
            overflow-x: auto;
            /* Enable horizontal scroll for smaller screens */
        }

        /* Styling for table */
        table {
            max-width: 100%;
            /* Set a maximum width */
            width: auto;
            /* Allow the width to adjust automatically */
            table-layout: auto;
            /* Change to auto for flexible column width */
            font-size: 14px;
            /* Set a smaller font size */
        }

        /* Prevent long content from overflowing */
        table td,
        table th {
            word-wrap: break-word;
            /* Wrap long words to avoid overflow */
            white-space: nowrap;
            /* Prevent text from wrapping */
            overflow: hidden;
            /* Hide overflowing text */
            text-overflow: ellipsis;
            /* Show ellipsis for overflow */
            padding: 8px;
            /* Decreased padding */
        }

        /* Table title */
        .table-title {
            color: #000;
            background: #F79F1F;
            /* Set table title background to yellow */
            padding: 16px 25px;
            margin: -20px -25px 10px;
            border-radius: 14px 14px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-wrapper .btn {
            float: right;
            color: #333;
            background-color: #fff;
            border-radius: 3px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-wrapper .btn:hover {
            color: #333;
            background: #f2f2f2;
        }

        .table-wrapper .btn.btn-primary {
            color: #fff;
            background: #03A9F4;
        }

        .table-wrapper .btn.btn-primary:hover {
            background: #03a3e7;
        }

        .table-title .btn {
            font-size: 13px;
            border: none;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 8px;
            /* Decreased padding */
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 80px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.view {
            width: 30px;
            height: 30px;
            color: #2196F3;
            border: 2px solid;
            border-radius: 30px;
            text-align: center;
        }

        table.table td a.view i {
            font-size: 22px;
            margin: 2px 0 0 1px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            table {
                font-size: 12px;
                /* Adjust font size for smaller screens */
            }

            table td,
            table th {
                padding: 4px;
                /* Further reduce padding */
            }
        }
    </style>
</head>

<body>


    <div class="container" style="margin-top:98px;background: aliceblue;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Order <b>Details</b></h2>
                    </div>
                    <div class="col-sm-8">
                        <a href="" class="btn btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh
                                List</span></a>
                        <a href="#" onclick="window.print()" class="btn btn-info"><i class="material-icons">&#xE24D;</i>
                            <span>Print</span></a>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover text-center" id="NoOrder">
                <thead style="background-color: rgb(111 202 203);">
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Method</th>
                        <th>Flat</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Pin Code</th>
                        <th>Total Products</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                        <th>Items</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `order` WHERE `user_id`= $user_id";
                    $result = mysqli_query($conn, $sql);
                    $counter = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $orderId = $row['id'];
                        $userId = $row['user_id'];
                        $name = $row['name'];
                        $number = $row['number'];
                        $email = $row['email'];
                        $method = $row['method'];
                        $flat = $row['flat'];
                        $street = $row['street'];
                        $city = $row['city'];
                        $state = $row['state'];
                        $country = $row['country'];
                        $pin_code = $row['pin_code'];
                        $total_products = $row['total_products'];
                        $total_price = $row['total_price'];
                        $order_status = $row['order_status'];

                        $counter++;

                        echo '<tr>
                                    <td>' . $orderId . '</td>
                                    <td>' . $userId . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $number . '</td>                                   
                                    <td>' . $email . '</td>
                                    <td>' . $method . '</td>
                                    <td>' . $flat . '</td>
                                    <td>' . $street . '</td>
                                    <td>' . $city . '</td>
                                    <td>' . $state . '</td>
                                    <td>' . $country . '</td>
                                    <td>' . $pin_code . '</td>
                                    <td>' . $total_products . '</td>
                                    <td>' . $total_price . '</td>
                                    <td><a href="#" data-toggle="modal" data-target="#orderStatus' . $orderId . '" class="view"><i class="material-icons">&#xE5C8;</i></a></td>                                   
                                    <td><a href="#" data-toggle="modal" data-target="#orderItem' . $orderId . '" class="view" title="View Details"><i class="material-icons">&#xE5C8;</i></a></td>
                                    
                                </tr>';
                    }

                    if ($counter == 0) {
                        ?>
                        <script> document.getElementById("empty").innerHTML = '<div class="col-md-12 my-5"><div class="card"><div class="card-body cart"><div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3"><h3><strong>You have not ordered any items.</strong></h3><h4>Please order to make me happy :)</h4> <a href="index.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a> </div></div></div></div>';</script> <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include 'partials/_orderStatusModal.php';
    include 'partials/_orderItemModal.php';

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
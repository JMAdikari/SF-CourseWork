<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $order_id = $_POST['id'];

    $query = "UPDATE orders SET delivery_lat='$lat', delivery_lng='$lng' WHERE id='$id'";
    mysqli_query($conn, $query);
}
?>

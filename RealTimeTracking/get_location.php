<?php
include 'database.php';

$order_id = $_GET['order_id'];
$result = mysqli_query($conn, "SELECT delivery_lat, delivery_lng FROM orders WHERE order_id='$order_id'");
$row = mysqli_fetch_assoc($result);

echo json_encode([
    'lat' => $row['delivery_lat'],
    'lng' => $row['delivery_lng']
]);
?>

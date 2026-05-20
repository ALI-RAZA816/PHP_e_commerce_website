<?php 

    include "config.php";
    $ORDER_STATUS = mysqli_real_escape_string($conn, $_POST['orderstatus']);
    $ORDER_ID = mysqli_real_escape_string($conn, $_POST['order_id']);

    $query = "UPDATE orders SET order_status = '{$ORDER_STATUS}' WHERE id = {$ORDER_ID}";
    $result = mysqli_query($conn, $query);

?>
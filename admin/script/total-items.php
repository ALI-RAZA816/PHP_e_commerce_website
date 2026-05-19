<?php 
    include "config.php";
    session_start();
    $query = "SELECT COUNT(*) AS total FROM cart";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row['total'];
?>
<?php 

    include "config.php";
    $QUANTITY = mysqli_real_escape_string($conn, $_POST['quantity']);
    $PRODUCT_ID = mysqli_real_escape_string($conn, $_POST['productId']);

    $query = "UPDATE cart SET quantity = {$QUANTITY} WHERE id = {$PRODUCT_ID}";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    
?>
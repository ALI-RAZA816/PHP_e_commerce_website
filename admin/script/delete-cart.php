<?php 

    include "config.php";
    $DELETE_ID = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM cart WHERE id = {$DELETE_ID}";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "Product deleted from cart";
        die();
    }

?>
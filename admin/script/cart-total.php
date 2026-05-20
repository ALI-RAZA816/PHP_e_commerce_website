<?php 

    include "config.php";
    $SHIPPING_FEE = 2;
    $query = "SELECT SUM(quantity * price) AS total FROM cart";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $subtotal = $row['total'] + $SHIPPING_FEE;
        $output = "<p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Subtotal</span><span><span>$</span>{$row['total']}.00</span></p>
        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Shipping Fee</span><span><span>$</span> {$SHIPPING_FEE}.00</span></p>
        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span class='fw-bold'>Total</span><span><span>$</span>{$subtotal}.00</span></p>";
        echo $output;
        }else{
            $output = "<p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Subtotal</span><span>$00.00</span></p>
            <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Shipping Fee</span><span><span>$</span> {$SHIPPING_FEE}.00</span></p>
            <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span class='fw-bold'>Total</span><span>$00.00</span></p>";
            echo $output;
    }

?>
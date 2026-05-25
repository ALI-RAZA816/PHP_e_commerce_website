<?php 

    include "config.php";
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!isset($_SESSION['name']) || !isset($_SESSION['email']) || !isset($_SESSION['role'])){
            echo "Create Account";
            die();
        }
        $PRODUCT_ID = mysqli_real_escape_string($conn, $_POST['product-id']);
        $PRODUCT_SIZE = mysqli_real_escape_string($conn, $_POST['productsize']);
        $query2 = "SELECT product_price FROM products WHERE id = {$PRODUCT_ID}";
        $result2 = mysqli_query($conn, $query2);
        $row = mysqli_fetch_assoc($result2);

        $query3 = "SELECT * FROM cart WHERE product_id = {$PRODUCT_ID} && size = '{$PRODUCT_SIZE}'";
        $result3 = mysqli_query($conn, $query3);
        if(mysqli_num_rows($result3) > 0){
            $query4 = "UPDATE cart SET quantity = quantity + 1 WHERE product_id = {$PRODUCT_ID} && size = '{$PRODUCT_SIZE}'";
            $result4 = mysqli_query($conn, $query4);
            echo "Product added to cart";
            die();
        }

        $query1 = "INSERT INTO cart (product_id, size, price, user) VALUES ({$PRODUCT_ID}, '{$PRODUCT_SIZE}', {$row['product_price']}, '{$_SESSION['name']}')";
        $result1 = mysqli_query($conn, $query1);
        echo "Product added to cart";
    }else{
        header("Location: {$host_name}/admin/not-found.php");
    }
    
    
?>
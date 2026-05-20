<?php 

    include "config.php";
    session_start();
    $NAME = mysqli_real_escape_string($conn, $_POST['name']);
    $LAST_NAME = mysqli_real_escape_string($conn, $_POST['lastname']);
    $ADDRESS = mysqli_real_escape_string($conn, $_POST['address']);
    $STREET = mysqli_real_escape_string($conn, $_POST['street']);
    $CITY = mysqli_real_escape_string($conn, $_POST['city']);
    $STATE = mysqli_real_escape_string($conn, $_POST['state']);
    $ZIPCODE = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $COUNTRY = mysqli_real_escape_string($conn, $_POST['country']);
    $PHONE = mysqli_real_escape_string($conn, $_POST['phone']);
    $PAY_METHOD = mysqli_real_escape_string($conn, $_POST['paymethod']);
    $DATE = date('d/m/Y'); 
    
    $query1 = "SELECT * FROM products LEFT JOIN cart ON products.id = cart.product_id WHERE cart.user = '{$_SESSION['name']}'";
    $result1 = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result1) > 0){
        while($row = mysqli_fetch_assoc($result1)){
            $query2 = "SELECT quantity * price AS total FROM cart WHERE user = '{$_SESSION['name']}'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $query = "INSERT INTO orders 
            (productid, title, image, quantity, size, first_name, last_name, email_address, street, city, state, zip_code, country, phone, unitprice, totalprice, username, pay_method, order_date) VALUES 
            ('{$row['product_id']}', '{$row['product_title']}' ,'{$row['img1']}', {$row['quantity']}, '{$row['size']}', '{$NAME}', '{$LAST_NAME}', '{$ADDRESS}', '{$STREET}', '{$CITY}', '{$STATE}', '{$ZIPCODE}', '{$COUNTRY}','{$PHONE}',{$row['price']}, {$row2['total']}, '{$_SESSION['name']}', '{$PAY_METHOD}','{$DATE}')";
            $result = mysqli_query($conn, $query);
            }
            if($result){
                echo "Order placed";
            }
    }



?>
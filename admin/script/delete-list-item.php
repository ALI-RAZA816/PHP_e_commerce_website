<?php 

    include "config.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $DELETE_ID = mysqli_real_escape_string($conn, $_POST['delete_Id']);
        $query1 = "SELECT * FROM products WHERE id = {$DELETE_ID}";
        $result1 = mysqli_query($conn, $query1);
        $row = mysqli_fetch_assoc($result1);
        unlink("../images/product_img/{$row['img1']}");
        unlink("../images/product_img/{$row['img2']}");
        unlink("../images/product_img/{$row['img3']}");
        unlink("../images/product_img/{$row['img4']}");

        $query = "DELETE FROM products WHERE id = {$DELETE_ID}";
        $result = mysqli_query($conn, $query);

        if($result && $result1){
            echo "Product deleted";
        }
    }else{
        header("Location: {$host_name}/admin/not-found.php");
    }
?>
<?php 

    include "config.php";
    $output = '';
    if($_POST['sorted'] === 'relevant'){
        $query = "SELECT * FROM products ORDER BY id DESC";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $output .= "<div class='card mb-4 col-6 col-md-4 col-lg-3 p-0 rounded-0 border-0'>
                        <a href='product-page.php?product_id={$row['id']}' class='text-decoration-none'>
                            <div class='px-3'>
                                <img src='./admin/images/product_img/{$row['img1']}' class='img-fluid image' alt='...'>
                                <div class='card-body p-0 d-flex flex-column'>
                                    <span class='text-muted'>{$row['product_title']}</span>
                                    <span class='fw-bold text-dark'><span>$</span>{$row['product_price']}</span>
                                </div>
                            </div>
                        </a>
                    </div>";
            }
        }
    }else if($_POST['sorted'] === 'low to high'){
        $query1 = "SELECT * FROM products ORDER BY product_price  ASC ";
        $result1 = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result1) > 0){
            while($row1= mysqli_fetch_assoc($result1)){
                $output .= "<div class='card mb-4 col-6 col-md-4 col-lg-3 p-0 rounded-0 border-0'>
                        <a href='product-page.php?product_id={$row1['id']}' class='text-decoration-none'>
                            <div class='px-3'>
                                <img src='./admin/images/product_img/{$row1['img1']}' class='img-fluid image' alt='...'>
                                <div class='card-body p-0 d-flex flex-column'>
                                    <span class='text-muted'>{$row1['product_title']}</span>
                                    <span class='fw-bold text-dark'><span>$</span>{$row1['product_price']}</span>
                                </div>
                            </div>
                        </a>
                    </div>";
            }
        }
    }else if($_POST['sorted'] === 'high to low'){
        $query2 = "SELECT * FROM products ORDER BY product_price  DESC";
        $result2 = mysqli_query($conn, $query2);
        if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                $output .= "<div class='card mb-4 col-6 col-md-4 col-lg-3 p-0 rounded-0 border-0'>
                        <a href='product-page.php?product_id={$row2['id']}' class='text-decoration-none'>
                            <div class='px-3'>
                                <img src='./admin/images/product_img/{$row2['img1']}' class='img-fluid image' alt='...'>
                                <div class='card-body p-0 d-flex flex-column'>
                                    <span class='text-muted'>{$row2['product_title']}</span>
                                    <span class='fw-bold text-dark'><span>$</span>{$row2['product_price']}</span>
                                </div>
                            </div>
                        </a>
                    </div>";
            }
        }
    }
    echo $output;
?>
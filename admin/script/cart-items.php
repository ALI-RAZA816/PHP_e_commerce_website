<?php 
    include "config.php";
    session_start();
    if(isset($_SESSION['name'])){
    $query = "SELECT * FROM products LEFT JOIN cart ON products.id = cart.product_id WHERE cart.user = '{$_SESSION['name']}'";
    $result = mysqli_query($conn, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<div data-aos='fade-up' class='mb-2 d-flex bg-white align-items-center border-top border-bottom justify-content-between px-2 py-2 single-order'>
                    <div class='d-flex'>
                        <div class='cart-img me-3'>
                            <img src='./admin/images/product_img/{$row['img1']}' class='img-fluid' alt=''>
                        </div>
                        <div>
                            <p class='title mb-2'>{$row['product_title']}</p>
                            <p><span class='price mb-0'><span>$</span>{$row['product_price']}</span><span class='size ms-5'>{$row['size']}</span></p>
                        </div>
                    </div>
                    <input type='number' min='1' id='{$row['id']}' value ='{$row['quantity']}' placeholder='1' class='form-control quantity rounded-0 border'>
                    <i class='fa-regular fa-trash-can cart-trash' id='{$row['id']}' style='color:#3a3a3a;cursor:pointer;' ></i>
                </div>";
        }
    }
    }else{
        $output = "<div class='d-flex flex-column justify-content-center align-items-center' style='height:80vh;'>
                <i class='fa-solid fa-box' style='color:#efefef;font-size:5rem;'></i>
                <h5 class='m-0 mt-2 text-muted'>No Products</h5>
            </div>";
    }

    echo $output;
    ?>
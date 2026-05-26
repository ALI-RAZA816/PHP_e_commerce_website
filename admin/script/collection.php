<?php 
    include "config.php";
    $query = 'SELECT * FROM products ORDER BY id DESC';
    $result = mysqli_query($conn, $query);
    $output = '';
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $output .= "<div data-aos='zoom-in-up' data-aos-offset='300' class='card bg-transparent mb-4 col-6 col-md-4 col-lg-3 rounded-0 border-0'>
                    <a href='product-page.php?product_id={$row['id']}' class='text-decoration-none'>
                        <div class='bg-white px-2'>
                            <img src='./admin/images/product_img/{$row['img1']}' class='rounded-2 img-fluid image' alt='...'>
                            <div class='card-body p-0 d-flex flex-column'>
                                <span class='title'>{$row['product_title']}</span>
                                <span class='fw-bold price'><span>$</span>{$row['product_price']}</span>
                            </div>
                        </div>
                    </a>
                </div>";
        }
    }

    echo $output;
?>
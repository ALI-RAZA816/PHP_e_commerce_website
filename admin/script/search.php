<?php 

    include "config.php";
    $SEARCH_VALUE = $_POST['searchValue'];
    $query = "SELECT * FROM products WHERE product_title LIKE '%{$SEARCH_VALUE}%'";
    $result = mysqli_query($conn, $query);
    $output = '';
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
    }else{
        $output = "<div style='height:80vh;' class='d-flex justify-content-center align-items-center flex-column'>
            <i class='fa-solid fa-box-open fs-1 text-muted'></i>
            <h3 class='fs-4 text-muted mt-3'>product not found</h3>
        </div>";
    }

    echo $output;
?>
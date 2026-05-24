<?php include "header.php" ?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h5 class='text-muted text-uppercase'>My <span class='fw-bold text-dark'>Orders</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
            </div>
        </div>
        <div class="orders" style='min-height:100vh;margin-bottom:5rem;'>
            <div class="row cart-products align-items-start">
                <?php
                    
                    include "config.php";
                    if(isset($_SESSION['name'])){
                        
                        $query = "SELECT * FROM orders WHERE username = '{$_SESSION['name']}'";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div data-aos='fade-up' data-aos-duration='1500'  data-aos-offset='300' class='col-md-12 mb-2 bg-white rounded-3 'style='box-shadow:0 0 10px 1px #33333321;'>
                                        <div class='d-md-flex align-items-center justify-content-between py-2 single-order'>
                                            <div class='d-flex'>
                                                <div class='cart-img me-3'>
                                                    <img src='./admin/images/product_img/{$row['image']}' class='img-fluid' alt=''>
                                                </div>
                                                <div>
                                                    <p class='title mb-2'>{$row['title']}</p>
                                                    <p><span class='price mb-0'><span>$</span>{$row['unitprice']}</span><span class='size ms-5'>{$row['size']}</span></p>
                                                </div>
                                                <div class='ms-5'>
                                                    <p class='d-flex flex-column'>
                                                    <span class='price mb-0'>Quantity: {$row['quantity']}</span>
                                                    <span>Total Price:<span>$</span>{$row['totalprice']}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div><i class='fa-regular fa-circle-dot text-success me-2'></i><span class='text-muted text-capitalize'>{$row['order_status']}</div>
                                        </div>
                                    </div>";
                            }
                        }
                    }else{
                            echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height:80vh;'>
                                    <i class='fa-solid fa-box' style='color:#efefef;font-size:5rem;'></i>
                                    <h5 class='m-0 mt-2 text-muted'>No Orders</h5>
                                </div>";
                        }
                    ?>
                
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
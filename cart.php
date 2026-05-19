<?php include "header.php" ?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h5 class='text-muted text-uppercase'>Your <span class='fw-bold text-dark'>Cart</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
            </div>
        </div>
        <div class="orders" style='min-height:100vh;margin-bottom:5rem;'>
            <div class="row cart-products align-items-start">
                <div class="col-md-8">
                    <?php 
                        include "config.php";
                        // $query = "SELECT * FROM cart WHERE user = '{$_SESSION['name']}'";
                        $query = "SELECT * FROM products LEFT JOIN cart ON products.id = cart.product_id WHERE cart.user = '{$_SESSION['name']}'";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='d-flex align-items-center justify-content-between border-top border-bottom py-2 single-order'>
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
                                        <i class='fa-regular fa-trash-can cart-trash' style='color:#3a3a3a;cursor:pointer;'></i>
                                    </div>";
                            }
                        }else{
                            echo "<div class='d-flex flex-column justify-content-center align-items-center' style='height:80vh;'>
                                    <i class='fa-solid fa-box' style='color:#efefef;font-size:5rem;'></i>
                                    <h5 class='m-0 mt-2 text-muted'>No Products</h5>
                                </div>";
                        }
                    ?>
                </div>
                 <div class="col-md-4 mt-4 mt-md-0">
                    <div class="cart-total">
                        <h5 class='text-muted text-uppercase'>Cart <span class='fw-bold text-dark'>Totals</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
                        <div class="calculations">
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Subtotal</span><span>$60.00</span></p>
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Shipping Fee</span><span>$00.00</span></p>
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span class='fw-bold'>Total</span><span>$00.00</span></p>
                        </div>
                        <a href="payment.php" class='text-decoration-none'><button class='btn rounded-0 d-block w-100 btn-dark text-white text-uppercase'>Proceed to Checkout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
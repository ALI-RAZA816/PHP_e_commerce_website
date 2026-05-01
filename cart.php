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
                <div class="col-8">
                    <div class="d-flex align-items-center justify-content-between border-top border-bottom py-2 single-order">
                        <div class='d-flex'>
                            <div class='cart-img me-3'>
                                <img src="./images/Rectangle 3634.png" class='img-fluid' alt="">
                            </div>
                            <div>
                                <p class='title mb-2'>Men Round Neck Pure Cotton T-shirt</p>
                                <p><span class='price mb-0'>$139</span><span class='size ms-5'>L</span></p>
                            </div>
                        </div>
                        <input type="number" min=1  value ='1' placeholder='1' class='form-control quantity rounded-0 border'>
                        <i class="fa-regular fa-trash-can cart-trash" style='color:#3a3a3a;cursor:pointer;'></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top border-bottom py-2 single-order">
                        <div class='d-flex'>
                            <div class='cart-img me-3'>
                                <img src="./images/Rectangle 3634.png" class='img-fluid' alt="">
                            </div>
                            <div>
                                <p class='title mb-2'>Men Round Neck Pure Cotton T-shirt</p>
                                <p><span class='price mb-0'>$139</span><span class='size ms-5'>L</span></p>
                            </div>
                        </div>
                        <input type="number" min=1  value ='1' placeholder='1' class='form-control quantity rounded-0 border'>
                        <i class="fa-regular fa-trash-can cart-trash" style='color:#3a3a3a;cursor:pointer;'></i>
                    </div>
                </div>
                 <div class="col-4">
                    <?php include "cart-total.php" ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
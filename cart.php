<?php 
    include "header.php";
?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h1 class='text-muted text-uppercase'>Your <span class='fw-bold text-dark'>Cart</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
            </div>
        </div>
        <div class="orders" style='min-height:100vh;'>
            <div class="row cart-products align-items-start">
                <div class="col-md-8 cart-items"></div>
                 <div class="col-md-4 mt-4 mt-md-0">
                    <div class="cart-total bg-white rounded-3 p-3">
                        <h1 class='text-muted text-uppercase'>Cart <span class='fw-bold text-dark'>Totals</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h1>
                        <div class="calculations">
                            <!-- <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Subtotal</span><span>$60.00</span></p>
                            <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Shipping Fee</span><span>$1.00</span></p>
                            <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span class='fw-bold'>Total</span><span>$00.00</span></p> -->
                        </div>
                        <a href="payment.php" class='text-decoration-none'><button class='btn rounded-2 d-block w-100 text-white text-uppercase ' >Proceed to Checkout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
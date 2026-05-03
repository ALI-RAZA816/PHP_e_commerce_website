<?php include "header.php" ?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h5 class='text-muted text-uppercase'>Delivery<span class='fw-bold text-dark'>Information</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
            </div>
        </div>
        <div class="orders" style='min-height:100vh;margin-bottom:5rem;'>
            <div class="row delivery-information align-items-start">
                <div class="col-md-6">
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-6 pe-3">
                            <input type="text" class='form-control rounded-0' placeholder='First name'>
                        </div>
                        <div class="col-6">
                            <input type="text" class='form-control rounded-0' placeholder='Last name'>
                        </div>
                    </div>
                    <div class='mb-3'>
                        <input type="text" class='form-control rounded-0' placeholder='Email Address'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" class='form-control rounded-0' placeholder='Street'>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-6 pe-3">
                            <input type="text" class='form-control rounded-0' placeholder='City'>
                        </div>
                        <div class="col-6">
                            <input type="text" class='form-control rounded-0' placeholder='State'>
                        </div>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-6 pe-3">
                            <input type="text" class='form-control rounded-0' placeholder='Zip Code'>
                        </div>
                        <div class="col-6">
                            <input type="text" class='form-control rounded-0' placeholder='Country'>
                        </div>
                    </div>
                    <div>
                        <input type="text" class='form-control rounded-0' placeholder='Phone'>
                    </div>
                </div>
                <div class="col-md-6 px-md-5 mt-4 mt-md-0">
                    <div class="cart-total">
                        <h5 class='text-muted text-uppercase'>Cart <span class='fw-bold text-dark'>Totals</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
                        <div class="calculations">
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Subtotal</span><span>$60.00</span></p>
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span>Shipping Fee</span><span>$00.00</span></p>
                        <p class='mb-2 d-flex justify-content-between border-bottom pb-2'><span class='fw-bold'>Total</span><span>$00.00</span></p>
                        </div>
                    </div>
                    <h6 class='text-muted text-uppercase mt-5 mb-3'>Payment <span class='fw-bold text-dark'>Method</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h6>
                    <div class='methods d-flex justify-content-between'>
                        <label for="method1" class='border px-3 py-1'>
                           <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="method1">
                                <label class="form-check-label" for="method1">
                                    <img src="./images/stripe_logo.png" style='height:20px;width:100%;object-fit:cover;' alt="">
                                </label>
                            </div>
                        </label>
                        <label for="method2" class='border  px-3 py-1'>
                           <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="method2">
                                <label class="form-check-label" for="method2">
                                    <img src="./images/razorpay_logo.png" style='height:20px;width:100%;object-fit:cover;' alt="">
                                </label>
                            </div>
                        </label>
                        <label for="method3" class='border px-3 py-1'>
                           <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment-method" id="method3">
                                <label class="form-check-label text-nowrap text-uppercase" for="method3" style='font-size:14px;'>
                                    Cash on Delivery
                                </label>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
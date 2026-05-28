<?php 
    include "header.php";
   
 ?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h2 class='text-uppercase' style='color:#064E38;'>Delivery Information</h2>
            </div>
        </div>
        <div class="orders">
            <div class="row overflow-hidden rounded-3 py-4 delivery-information align-items-start">
                <div class="col-md-6"  data-aos="fade-right">
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <label for="" class='form-label'>Name</label>
                            <input type="text" class='form-control p_name rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='Ali'>
                        </div>
                        <div class="col-md-6">
                            <label for="" class='form-label'>Last Name</label>
                            <input type="text" class='form-control p_lastname rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='Raza'>
                        </div>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='form-label'>Email Address</label>
                        <input type="text" class='form-control rounded-0 border-bottom border-top-0 border-end-0 border-start-0 p_address' placeholder='example@gmail.com'>
                    </div>
                    <div class='mb-3'>
                        <label for="" class='form-label'>Street</label>
                        <input type="text" class='form-control p_street rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='123 Gallery Lane'>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <label for="" class='form-label'>City</label>
                            <input type="text" class='form-control p_city rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='Okara'>
                        </div>
                        <div class="col-md-6">
                            <label for="" class='form-label'>State</label>
                            <input type="text" class='form-control p_state rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='Punjab'>
                        </div>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <label for="" class='form-label'>Zip Code</label>
                            <input type="text" class='form-control p_zipcode rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='56080'>
                        </div>
                        <div class="col-md-6">
                            <label for="" class='form-label'>Country</label>
                            <input type="text" class='form-control p_country rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='Pakistan'>
                        </div>
                    </div>
                    <div>
                        <label for="" class='form-label'>Phone Number</label>
                        <input type="text" class='form-control p_phone rounded-0 border-bottom border-top-0 border-end-0 border-start-0' placeholder='111 222 333 444 '>
                    </div>
                </div>
                <div class="col-md-6 px-md-5 mt-4 mt-md-0"  data-aos="fade-left" >
                    <div style='background-color:#FAF2EE;' class='rounded-4 px-5 py-3'>
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
                            <label for="method3" class='border rounded-2 px-3 py-2 w-100' style='background-color:#FFF8F5'>
                               <div class="form-check" >
                                    <input class="form-check-input" type="radio" value='COD' name="payment-method" id="method2" checked>
                                    <label class="form-check-label text-nowrap text-uppercase" for="method2" style='font-size:14px;'>
                                        Cash on Delivery
                                    </label>
                                </div>
                            </label>
                        </div>
                        <button type='button' class='btn rounded-0 mt-4 d-block w-100 rounded-2 text-white text-uppercase place-order'>Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "subscription.php" ?>
<?php include "footer.php" ?>
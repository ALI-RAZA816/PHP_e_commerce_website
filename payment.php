<?php 
    include "header.php";
  
 ?>
<section class="cart-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h5 class='text-muted text-uppercase'>Delivery<span class='fw-bold text-dark'>Information</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h5>
            </div>
        </div>
        <div class="orders">
            <div class="row overflow-hidden bg-white rounded-3 py-4 delivery-information align-items-start" style='box-shadow:0 0 10px 1px #33333321;'>
                <!-- <div class="col-md-6">
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control rounded-0' placeholder='First name'>
                        </div>
                        <div class="col-md-6">
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
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control rounded-0' placeholder='City'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control rounded-0' placeholder='State'>
                        </div>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control rounded-0' placeholder='Zip Code'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control rounded-0' placeholder='Country'>
                        </div>
                    </div>
                    <div class='mb-3'>
                        <input type="text" class='form-control rounded-0' placeholder='Phone'>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control rounded-0' placeholder='Amount'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control rounded-0' placeholder='Card Number'>
                        </div>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="number" class='form-control rounded-0' placeholder='Month'>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class='form-control rounded-0' placeholder='Year'>
                        </div>
                    </div>
                    <div>
                        <input type="text" class='form-control rounded-0' placeholder='CV Code'>
                    </div>
                </div> -->
                <div class="col-md-6"  data-aos="fade-right">
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control p_name rounded-0' placeholder='First name'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control p_lastname rounded-0' placeholder='Last name'>
                        </div>
                    </div>
                    <div class='mb-3'>
                        <input type="text" class='form-control rounded-0 p_address' placeholder='Email Address'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" class='form-control p_street rounded-0' placeholder='Street'>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control p_city rounded-0' placeholder='City'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control p_state rounded-0' placeholder='State'>
                        </div>
                    </div>
                    <div class="row g-0 p-0 mb-3">
                        <div class="col-md-6 mb-3 mb-md-0 pe-md-3">
                            <input type="text" class='form-control p_zipcode rounded-0' placeholder='Zip Code'>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='form-control p_country rounded-0' placeholder='Country'>
                        </div>
                    </div>
                    <div>
                        <input type="text" class='form-control p_phone rounded-0' placeholder='Phone'>
                    </div>
                </div>
                <div class="col-md-6 px-md-5 mt-4 mt-md-0"  data-aos="fade-left">
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
                        <label for="method3" class='border px-3 py-1  w-100'>
                           <div class="form-check">
                                <input class="form-check-input" type="radio" value='COD' name="payment-method" id="method2" checked>
                                <label class="form-check-label text-nowrap text-uppercase" for="method2" style='font-size:14px;'>
                                    Cash on Delivery
                                </label>
                            </div>
                        </label>
                    </div>
                    <button type='button' class='btn rounded-0 mt-4 d-block w-100 btn-dark text-white text-uppercase place-order'>Place Order</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-lg-6 text-center" style='margin:10rem 0;'>
            <h2>Subscribe now & get 20% off</h2>
            <p class='text-muted'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="subscription d-flex">
                <input type="text" placeholder='Enter your email address' class='form-control rounded-0'>
                <button class='text-white bg-dark btn rounded-0 text-uppercase'>Subscribe</button>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include "footer.php" ?>
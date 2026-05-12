<?php include "header.php" ?>
<section class='signup-page'>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4" style='margin-top:5rem;'>
                <h3 class='text-dark text-capitlize text-center mb-4'>Sign Up<i class="fa-solid fa-minus"></i></h3>
                <form>
                    <input type="text" class='form-control name rounded-0 border mb-3' name='name' placeholder='Name'>
                    <input type="text" class='form-control email rounded-0 border mb-3' name='email' placeholder='Email'>
                    <input type="password" class='form-control password rounded-0 border mb-2' name='password' placeholder='Password'>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><span>Already have an account?</span><span><a href="login.php" class='text-decoration-none text-muted'>Login Here</a></span></p>
                    <button type='button' id='create-account' class='btn text-white bg-dark rounded-0 d-block mx-auto'>Create Account</button>
                </form>
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
<script src='./js/jquery.js'></script>
<script src='./js/main.js'></script>
<?php include "footer.php" ?>

<?php include "header.php" ?>
<section class='login-page'>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-4" style='margin-top:5rem;'>
                <h3 class='text-dark text-capitlize text-center mb-4'>Login<i class="fa-solid fa-minus"></i></h3>
                <form action="">
                    <input type="text" class='form-control rounded-0 border mb-3' placeholder='Email'>
                    <input type="text" class='form-control rounded-0 border mb-2' placeholder='Password'>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><a href='forgotton-password.php' class='text-decoration-none text-muted'>Forgotton Password?</a><span><a href="signup.php" class='text-decoration-none text-muted'>Signup</a></span></p>
                    <button class='btn text-white bg-dark rounded-0 d-block mx-auto'>Login</button>
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
<?php include "footer.php" ?>
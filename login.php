<?php include "header.php" ?>
<section class='login-page'>
    <div class="container">
        <div data-aos="zoom-in" class="row d-flex justify-content-center">
            <div class="col-md-4 bg-white py-4" style='margin-top:5rem;'>
                <h3 class='text-dark text-capitlize text-center mb-4'>Login<i class="fa-solid fa-minus"></i></h3>
                <form action="" class='login-form'>
                    <input type="text" class='form-control rounded-0 login-email border mb-3' placeholder='Email'>
                    <input type="password" class='form-control rounded-0 login-password border mb-2' placeholder='Password'>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><a href='forgotton-password.php' class='text-decoration-none text-muted'>Forgotton Password?</a><span><a href="signup.php" class='text-decoration-none text-muted'>Signup</a></span></p>
                    <button type='submit' class='btn text-white bg-dark rounded-0 d-block mx-auto login'>Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "subscription.php" ?>
<script src='./js/jquery.js'></script>
<script src='./js/main.js'></script>
<?php include "footer.php" ?>
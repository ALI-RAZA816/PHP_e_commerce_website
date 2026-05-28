<?php include "header.php" ?>
<section class='login-page'>
    <div class="container">
        <div data-aos="zoom-in" class="row d-flex justify-content-center">
            <div class="col-md-4 bg-white rounded-3 login-form px-5 py-4">
                <h3 class='text-capitlize text-center mb-4'>Login</h3>
                <form action="" class=''>
                    <div>
                        <label for="" class='form-label'>Email</label>
                        <input type="text" class='form-control mb-4 rounded-0 login-email border-top-0 border-end-0 border-start-0 border-bottom px-0 mb-3' placeholder='Email'>
                    </div>
                    <div>
                        
                        <label for="" class='form-label'>Password</label>
                        <input type="password" class='form-control mb-4 rounded-0 login-password border-top-0 border-end-0 border-start-0 border-bottom px-0 mb-2' placeholder='Password'>
                    </div>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><a href='forgotton-password.php' class='text-decoration-none text-muted'>Forgotton Password?</a><span><a href="signup.php" class='text-decoration-none text-muted'>Signup</a></span></p>
                    <button type='submit' class='btn text-white w-100 rounded-2 d-block mx-auto login'>Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <?php include "subscription.php" ?> -->
<script src='./js/jquery.js'></script>
<script src='./js/main.js'></script>
<?php include "footer.php" ?>
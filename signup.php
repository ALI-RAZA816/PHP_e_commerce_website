<?php include "header.php" ?>
<section class='signup-page'>
    <div class="container">
        <div data-aos="zoom-in" class="row d-flex justify-content-center">
            <div class="col-md-4 bg-white py-4" style='margin-top:5rem;'>
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

<?php include "subscription.php" ?>
<script src='./js/jquery.js'></script>
<script src='./js/main.js'></script>
<?php include "footer.php" ?>

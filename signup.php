<?php include "header.php" ?>
<section class='signup-page'>
    <div class="container">
        <div data-aos="zoom-in" class="row d-flex justify-content-center">
            <div class="col-md-4 bg-white rounded-3 px-5 signup-form py-4">
                <h3 class='ext-capitlize text-center mb-0'>Sign Up</h3>
                <p class='text-center mb-3'>Join the FOREVER community.</p>
                <form>
                    <div>
                        <label for="" class='form-label'>Name</label>
                        <input type="text" class='px-0 form-control mb-4 name rounded-0 border-bottom border-top-0 border-end-0 border-start-0 mb-3' name='name' placeholder='Ali Raza'>
                    </div>
                    <div>
                        <label for="" class='form-label'>Email</label>
                        <input type="text" class='px-0 form-control mb-4 email rounded-0 border-bottom border-top-0 border-end-0 border-start-0 mb-3' name='email' placeholder='example@gmail.com'>
                    </div>
                    <div>
                        <label for="" class='form-label'>Password</label>
                        <input type="password" class='px-0 form-control password rounded-0 border-bottom border-top-0 border-end-0 border-start-0 mb-2' name='password' placeholder='Password'>
                    </div>
                    <button type='button' id='create-account' class='btn my-3 text-white rounded-2 d-block w-100 mx-auto'>Create Account</button>
                    <p class='text-center text-muted'>Already have an account?<span><a href="login.php" >Login Here</a></span></p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <?php include "subscription.php" ?> -->
<script src='./js/jquery.js'></script>
<script src='./js/main.js'></script>
<?php include "footer.php" ?>

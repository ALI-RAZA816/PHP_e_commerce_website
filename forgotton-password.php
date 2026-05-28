<?php 
    include "header.php";
    // if(!isset($_SESSION['role'])){
    //     header("Location: {$host_name}/admin/not-found.php");
    //     die();
    // }
?>
<section class='forgotton-password-page'>
    <div class="container">
        <div data-aos="zoom-in" class="row d-flex justify-content-center align-items-center" style='height:60vh;'>
            <div class="col-md-4 forgotton-form px-5 rounded-3 bg-white py-4">
                <h3 class='text-capitlize text-center mb-4'>Reset Password
                <p class='text-muted fs-6 mt-2'>We'll send you a secure reset link</p></h3>
                <form action="">
                    <div>
                        <label for="" class='form-label'>Email</label>
                        <input type="text" class='form-control rounded-0 shadow-none forgotton-email border-bottom border-top-0 border-end-0 border-start-0 px-0 mb-3' placeholder='example@gmail.com'>
                    </div>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><span><a href="login.php" class='text-decoration-none text-muted'>Back to login</a></span></p>
                    <button type='button' class='btn text-white rounded-2 d-block mx-auto forgotton-password'>Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class='form-otp'>
    <i class='fa-solid fa-xmark modalbox-cross text-white fs-4' style='position:absolute;top:30px;right:30px;z-index:99;'></i>
     <div class="container">
        <div class="row vh-100 otp-form d-flex justify-content-center align-items-center">
            <div class="col-md-4 form-container bg-white rounded-2 p-3">
                <h3 class='text-capitlize text-center mb-4'>Verify Your Email
                <p class='text-muted fs-6 mt-2'>Enter the OTP you received via email to proceed.</p></h3>
                <form action="">
                    <input type="text" class='form-control rounded-0 otp border-bottom border-end-0 border-start-0 border-top-0 px-0 shadow-none mb-3' placeholder='OTP'>
                    <button type='button' class='btn text-white w-100 rounded-2 d-block mx-auto verify-otp'>Verify Email</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src='./js/hidemodalbox.js'></script>
<?php include "footer.php" ?>

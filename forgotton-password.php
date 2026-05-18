<?php 
    include "header.php";
    // if(!isset($_SESSION['role'])){
    //     header("Location: {$host_name}/admin/not-found.php");
    //     die();
    // }
?>
<section class='forgotton-password-page'>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style='height:100vh;'>
            <div class="col-md-4">
                <h3 class='text-dark text-capitlize text-center mb-4'>Reset Password<i class="fa-solid fa-minus"></i>
                <p class='text-muted fs-6 mt-2'>We'll send you a secure reset link</p></h3>
                <form action="">
                    <input type="text" class='form-control rounded-0 forgotton-email border mb-3' placeholder='Enter email address'>
                    <p style='font-size:14px;' class='d-flex justify-content-between text-muted'><span><a href="login.php" class='text-decoration-none text-muted'>Back to login</a></span></p>
                    <button type='button' class='btn text-white bg-dark rounded-0 d-block mx-auto forgotton-password'>Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class='form-otp'>
    <i class='fa-solid fa-xmark modalbox-cross text-white fs-4' style='position:absolute;top:30px;right:30px;z-index:99;'></i>
     <div class="container">
        <div class="row vh-100 otp-form d-flex justify-content-center align-items-center">
            <div class="col-md-4 bg-white rounded-2 p-3">
                <h3 class='text-dark text-capitlize text-center mb-4'>Verify Your Email<i class="fa-solid fa-minus"></i>
                <p class='text-muted fs-6 mt-2'>Enter the OTP you received via email to proceed.</p></h3>
                <form action="">
                    <input type="text" class='form-control rounded-0 otp border mb-3' placeholder='OTP'>
                    <button type='button' class='btn text-white bg-dark rounded-0 d-block mx-auto verify-otp'>Verify Email</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src='./js/hidemodalbox.js'></script>
<?php include "footer.php" ?>

<?php include "header.php" ?>
<section class='contact-us mb-5' style='min-height:100vh;'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class='text-muted text-uppercase text-center my-5'>Contact <span class='fw-bold text-dark'>Us</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="./images/contact_img.png" class='img-fluid' alt="">
            </div>
            <div class="col-md-8 mt-5 mt-md-0">
                <form action="" class='about-us-form'>
                    <div class='mb-3'>
                        <input type="text" name='mailername' class='form-control mailer-name rounded-0' placeholder='Enter name'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" name='maileremail' class='form-control mailer-email rounded-0' placeholder='Enter email address'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" name='mailsubject' class='form-control mail-subject rounded-0' placeholder='Subject'>
                    </div>
                    <div>
                        <textarea name="message" id="" class='form-control mail-content rounded-0' placeholder='Message' class='mb-3'></textarea>
                    </div>
                    <button type='button' class='text-white submit-mail bg-dark rounded-0 d-block w-100 btn mt-3'>Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
<?php include "header.php" ?>
<section class='contact-us mb-5' >
    <div class="container bg-white mt-5 py-3 rounded-3">
        <div class="row">
            <div class="col-12">
                <h4 class='text-muted text-uppercase text-center my-3'>Contact <span class='fw-bold text-dark'>Us</span><i class="fa-solid fa-minus" style='color:#2A2A2A'></i></h4>
            </div>
        </div>
        <div class="row px-3 overflow-hidden">
            <div class="col-md-4" data-aos="fade-right">
                <img src="./images/contact_img.png" class='img-fluid' alt="">
            </div>
            <div class="col-md-8 mt-5 mt-md-0" data-aos="fade-left">
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
<?php include "header.php" ?>
<section class='contact-us' >
    <div class="container mt-5 py-3 rounded-3">
        <div class="row px-3 overflow-hidden">
            <div class="col-md-5 " data-aos="fade-right">
                <img src="./images/contact_img.png" class='rounded-3 img-fluid' alt="">
            </div>
            <div class="col-md-7 contact-form mt-5 mt-md-0" data-aos="fade-left">
                <h4 class='text-uppercase text-left my-3'>Contact <span class='fw-bold'>Us</span><i class="fa-solid fa-minus"></i></h4>
                <p>We value the dialogue between creator and curator. Reach out for inquiries about bespoke pieces or collection details.</p>
                <form action="" class='about-us-form'>
                    <div class='mb-3'>
                        <input type="text" name='mailername' class=' border-bottom border-top-0 border-end-0 border-start-0 form-control mailer-name rounded-0' placeholder='Enter name'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" name='maileremail' class=' border-bottom border-top-0 border-end-0 border-start-0 form-control mailer-email rounded-0' placeholder='Enter email address'>
                    </div>
                    <div class='mb-3'>
                        <input type="text" name='mailsubject' class=' border-bottom border-top-0 border-end-0 border-start-0 form-control mail-subject rounded-0' placeholder='Subject'>
                    </div>
                    <div>
                        <textarea name="message" id="" class=' bg-transparent border-bottom border-top-0 border-end-0 border-start-0 form-control mail-content rounded-0' placeholder='Message' class='mb-3'></textarea>
                    </div>
                    <button type='button' class='text-white submit-maild-block w-100 btn mt-3'>Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "subscription.php" ?>
<?php include "footer.php" ?>
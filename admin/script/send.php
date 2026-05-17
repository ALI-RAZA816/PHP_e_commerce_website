<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include "config.php";

    $NAME = $_POST['mailername'];
    $EMAIL = $_POST['maileremail'];
    $SUBJECT = $_POST['mailsubject'];
    $MESSAGE = $_POST['message'];
    if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email";
        die();
    }

    if($NAME !== '' && $EMAIL !=='' && $SUBJECT !=='' && $MESSAGE !== ''){
         //Load Composer's autoloader (created by composer, not included with PHPMailer)
        require '../PHPMailer/Exception.php';
        require '../PHPMailer/PHPMailer.php';
        require '../PHPMailer/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'razadeveloper816@gmail.com';                     //SMTP username
            $mail->Password   = 'dklq jnhk ucnt pfpu';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('razadeveloper816@gmail.com', 'Ali Raza Mujahid');
            $mail->addAddress($EMAIL, $NAME);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "{$SUBJECT}";
            $mail->Body    = "{$MESSAGE}";

            $mail->send();
            echo 'Message sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

?>
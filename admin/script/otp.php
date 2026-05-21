<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    include "config.php";
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("Location: {$host_name}/admin/not-found.php");
        die();
    }
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $OTP = mysqli_real_escape_string($conn, rand(10000, 50000));
    $EMAIL = $_POST['reset_email'];
    if(!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)){
        echo "Invalid Email";
        die();
    }

    $query = "UPDATE users SET otp = {$OTP} WHERE email = '{$EMAIL}'";
    $result = mysqli_query($conn, $query);
    if($EMAIL !==''){
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
            $mail->setFrom('razadeveloper816@gmail.com', 'FOREVER');
            $mail->addAddress('');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Password Reset OTP";
            $mail->Body    = "<h2 style='color:#333;margin-bottom:0;text-transform:uppercase;'>Your OTP for Reset Password is</h2><span style='font-size:2rem;font-weight:bold;border-radius:3px;padding:.2rem .8rem;height:40px;width:100px;display:inline-block;align-items:center;text-align:center;background-color:#198754;color:white;margin:1rem 0;'>{$OTP}</span> <br> <strong>Don't share it to the third-party website or users. If you don't ask it. You may ignore it.</strong>";

            $mail->send();
            if($result){
                echo "We sent you an OTP to your Email";
            }
        } catch (Exception $e) {
            echo "OTP was saved but email could not be sent Error: {$mail->ErrorInfo}";
        }
    }else {
        echo "Invalid request.";
    }

?>
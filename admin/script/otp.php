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
            $mail->addAddress($EMAIL);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Password Reset OTP";
            $mail->Body    = "<h2 style='color:#333;margin-bottom:0;text-transform:uppercase;'>Your OTP for Reset Password is</h2><span style='font-size:2rem;font-weight:bold;border-radius:3px;padding:.2rem .8rem;height:40px;width:100px;display:inline-block;align-items:center;text-align:center;background-color:#198754;color:white;margin:1rem 0;'>{$OTP}</span> <br> <strong>Don't share it to the third-party website or users. If you don't ask it. You may ignore it.</strong>
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Invoice - Forever</title>
            </head>
            <body style='margin:0;padding:0;background-color:#f4f4f5;font-family:Arial,Helvetica,sans-serif;'>
            
            <table width='100%' cellpadding='0' cellspacing='0' style='background-color:#f4f4f5;padding:32px 16px;'>
                <tr>
                <td align='center'>
            
                    <!-- Preheader label -->
                    <table width='600' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td style='padding-bottom:10px;font-size:13px;color:#888;'>
                        Your order confirmation — Forever.com
                        </td>
                    </tr>
                    </table>
            
                    <!-- Card -->
                    <table width='600' cellpadding='0' cellspacing='0'
                        style='background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e5e7eb;'>
            
                    <!-- ── HEADER ── -->
                    <tr>
                        <td style='background:#0a0a0a;padding:20px 32px;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td style='color:#ffffff;font-size:20px;font-weight:700;letter-spacing:-0.3px;'>
                                &#9679;&nbsp;Forever
                            </td>
                            <td align='right'>
                                <span style='background:rgba(255,255,255,0.12);color:rgba(255,255,255,0.85);
                                            font-size:11px;padding:4px 12px;border-radius:20px;
                                            letter-spacing:0.6px;text-transform:uppercase;border:1px solid rgba(255,255,255,0.2);'>
                                Invoice
                                </span>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── HERO ── -->
                    <tr>
                        <td style='padding:28px 32px 20px;border-bottom:1px solid #e5e7eb;'>
                        <p style='margin:0 0 10px;font-size:13px;color:#16a34a;font-weight:600;'>
                            &#9679; Payment Confirmed
                        </p>
                        <h2 style='margin:0 0 8px;font-size:22px;color:#111827;font-weight:700;'>
                            Thanks for your order, Alex!
                        </h2>
                        <p style='margin:0;font-size:14px;color:#6b7280;line-height:1.6;'>
                            We've received your payment and your order is being prepared.
                            You'll get a shipping update once it's on the way.
                        </p>
                        </td>
                    </tr>
            
                    <!-- ── ORDER META ── -->
                    <tr>
                        <td style='padding:0;border-bottom:1px solid #e5e7eb;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td width='33%' style='padding:16px 32px;border-right:1px solid #e5e7eb;'>
                                <p style='margin:0 0 4px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Order</p>
                                <p style='margin:0;font-size:14px;font-weight:700;color:#111827;'>#FRV-20849</p>
                            </td>
                            <td width='33%' style='padding:16px 24px;border-right:1px solid #e5e7eb;'>
                                <p style='margin:0 0 4px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Date</p>
                                <p style='margin:0;font-size:14px;font-weight:700;color:#111827;'>May 19, 2026</p>
                            </td>
                            <td width='33%' style='padding:16px 24px;'>
                                <p style='margin:0 0 4px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Est. Delivery</p>
                                <p style='margin:0;font-size:14px;font-weight:700;color:#111827;'>May 23–25</p>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── ITEMS ── -->
                    <tr>
                        <td style='padding:24px 32px;border-bottom:1px solid #e5e7eb;'>
                        <p style='margin:0 0 16px;font-size:11px;text-transform:uppercase;letter-spacing:0.6px;color:#9ca3af;'>Items Ordered</p>
            
                        <!-- Table Header -->
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr style='border-bottom:1px solid #e5e7eb;'>
                            <td width='44%' style='font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;padding-bottom:10px;'>Product</td>
                            <td width='16%' align='center' style='font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;padding-bottom:10px;'>Qty</td>
                            <td width='20%' align='right' style='font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;padding-bottom:10px;'>Unit Price</td>
                            <td width='20%' align='right' style='font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;padding-bottom:10px;'>Total</td>
                            </tr>
            
                            <!-- Item Row 1 -->
                            <tr>
                            <td style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                <p style='margin:0 0 3px;font-size:14px;font-weight:700;color:#111827;'>Sony WH-1000XM6</p>
                                <p style='margin:0;font-size:12px;color:#6b7280;'>Wireless noise-cancelling headphones</p>
                            </td>
                            <td align='center' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                <span style='display:inline-block;width:28px;height:28px;line-height:28px;text-align:center;
                                            background:#f3f4f6;border-radius:6px;font-size:13px;color:#374151;'>1</span>
                            </td>
                            <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;color:#374151;'>$349.00</td>
                            <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;font-weight:700;color:#111827;'>$349.00</td>
                            </tr>
            
                            <!-- Item Row 2 -->
                            <tr>
                            <td style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                <p style='margin:0 0 3px;font-size:14px;font-weight:700;color:#111827;'>USB-C Cable Pack</p>
                                <p style='margin:0;font-size:12px;color:#6b7280;'>2m braided nylon, fast-charge (3-pack)</p>
                            </td>
                            <td align='center' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                <span style='display:inline-block;width:28px;height:28px;line-height:28px;text-align:center;
                                            background:#f3f4f6;border-radius:6px;font-size:13px;color:#374151;'>2</span>
                            </td>
                            <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;color:#374151;'>$18.99</td>
                            <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;font-weight:700;color:#111827;'>$37.98</td>
                            </tr>
            
                            <!-- Item Row 3 -->
                            <tr>
                            <td style='padding:14px 0;vertical-align:middle;'>
                                <p style='margin:0 0 3px;font-size:14px;font-weight:700;color:#111827;'>Portable Charger 20000mAh</p>
                                <p style='margin:0;font-size:12px;color:#6b7280;'>PD 65W, dual USB-C + USB-A</p>
                            </td>
                            <td align='center' style='padding:14px 0;vertical-align:middle;'>
                                <span style='display:inline-block;width:28px;height:28px;line-height:28px;text-align:center;
                                            background:#f3f4f6;border-radius:6px;font-size:13px;color:#374151;'>1</span>
                            </td>
                            <td align='right' style='padding:14px 0;vertical-align:middle;font-size:14px;color:#374151;'>$59.99</td>
                            <td align='right' style='padding:14px 0;vertical-align:middle;font-size:14px;font-weight:700;color:#111827;'>$59.99</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── TOTALS ── -->
                    <tr>
                        <td style='padding:20px 32px;border-bottom:1px solid #e5e7eb;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td style='font-size:14px;color:#6b7280;padding-bottom:8px;'>Subtotal</td>
                            <td align='right' style='font-size:14px;color:#374151;padding-bottom:8px;'>$446.97</td>
                            </tr>
                            <tr>
                            <td style='font-size:14px;color:#6b7280;padding-bottom:8px;'>Shipping</td>
                            <td align='right' style='font-size:14px;color:#374151;padding-bottom:8px;'>$1.00</td>
                            </tr>
                            <tr>
                            <td style='font-size:14px;color:#6b7280;padding-bottom:8px;'>Tax (8.5%)</td>
                            <td align='right' style='font-size:14px;color:#374151;padding-bottom:8px;'>$37.99</td>
                            </tr>
                            <tr>
                            <td style='font-size:14px;color:#16a34a;padding-bottom:16px;'>Promo Code NOVA10</td>
                            <td align='right' style='font-size:14px;color:#16a34a;padding-bottom:16px;'>&#8722;$44.70</td>
                            </tr>
                            <!-- Grand Total -->
                            <tr>
                            <td colspan='2'>
                                <table width='100%' cellpadding='0' cellspacing='0'
                                    style='background:#0a0a0a;border-radius:10px;'>
                                <tr>
                                    <td style='padding:14px 20px;font-size:14px;color:rgba(255,255,255,0.75);font-weight:600;'>Total Charged</td>
                                    <td align='right' style='padding:14px 20px;font-size:20px;color:#ffffff;font-weight:700;'>$441.26</td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── ADDRESSES ── -->
                    <tr>
                        <td style='padding:0;border-bottom:1px solid #e5e7eb;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td width='50%' style='padding:20px 32px;border-right:1px solid #e5e7eb;vertical-align:top;'>
                                <p style='margin:0 0 8px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Ship To</p>
                                <p style='margin:0 0 4px;font-size:14px;font-weight:700;color:#111827;'>Alex Johnson</p>
                                <p style='margin:0;font-size:13px;color:#6b7280;line-height:1.7;'>742 Evergreen Terrace<br>Springfield, IL 62701<br>United States</p>
                            </td>
                            <td width='50%' style='padding:20px 24px;vertical-align:top;'>
                                <p style='margin:0 0 8px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Bill To</p>
                                <p style='margin:0 0 4px;font-size:14px;font-weight:700;color:#111827;'>Alex Johnson</p>
                                <p style='margin:0;font-size:13px;color:#6b7280;line-height:1.7;'>Same as shipping address<br>{$EMAIL}</p>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── PAYMENT ── -->
                    <tr>
                        <td style='padding:16px 32px;border-bottom:1px solid #e5e7eb;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td style='vertical-align:middle;'>
                                <span style='display:inline-block;background:#f3f4f6;border:1px solid #e5e7eb;border-radius:6px;
                                            padding:5px 12px;font-size:13px;font-weight:600;color:#374151;'>
                                &#128179; Visa ···· 4821
                                </span>
                                <span style='font-size:13px;color:#6b7280;margin-left:10px;'>Charged on May 19, 2026</span>
                            </td>
                            <td align='right' style='vertical-align:middle;'>
                                <span style='display:inline-block;background:#dcfce7;color:#15803d;font-size:12px;font-weight:600;
                                            padding:4px 14px;border-radius:20px;border:1px solid #86efac;'>
                                Paid
                                </span>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    <!-- ── FOOTER ── -->
                    <tr>
                        <td style='background:#f9fafb;padding:20px 32px;border-top:1px solid #e5e7eb;'>
                        <table width='100%' cellpadding='0' cellspacing='0'>
                            <tr>
                            <td style='font-size:13px;font-weight:700;color:#111827;text-transform:uppercase;'>Forever</td>
                            <td align='right'>
                                <span style='font-size:12px;color:#6b7280;margin-right:16px;'>Returns</span>
                                <span style='font-size:12px;color:#6b7280;margin-right:16px;'>Support</span>
                                <span style='font-size:12px;color:#6b7280;'>Unsubscribe</span>
                            </td>
                            </tr>
                            <tr>
                            <td colspan='2' style='padding-top:12px;font-size:12px;color:#9ca3af;line-height:1.6;'>
                                Questions about your order? Reply to this email or visit our help center at forever.com/help.
                                This invoice was generated automatically — please keep it for your records.
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
            
                    </table>
                    <!-- /Card -->
            
                </td>
                </tr>
            </table>
            
            </body>
            </html>";

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
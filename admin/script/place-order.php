<?php 

    include "config.php";
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    $NAME = mysqli_real_escape_string($conn, $_POST['name']);
    $LAST_NAME = mysqli_real_escape_string($conn, $_POST['lastname']);
    $ADDRESS = mysqli_real_escape_string($conn, $_POST['address']);
    $STREET = mysqli_real_escape_string($conn, $_POST['street']);
    $CITY = mysqli_real_escape_string($conn, $_POST['city']);
    $STATE = mysqli_real_escape_string($conn, $_POST['state']);
    $ZIPCODE = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $COUNTRY = mysqli_real_escape_string($conn, $_POST['country']);
    $PHONE = mysqli_real_escape_string($conn, $_POST['phone']);
    $PAY_METHOD = mysqli_real_escape_string($conn, $_POST['paymethod']);
    $DATE = date('d F Y'); 
    $deliveryDate = new DateTime();
    $deliveryDate->modify('+4 days');
    $format_date = $deliveryDate->format('d F Y');
    
    $query1 = "SELECT * FROM products LEFT JOIN cart ON products.id = cart.product_id WHERE cart.user = '{$_SESSION['name']}'";
    $result1 = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result1) > 0){
        while($row = mysqli_fetch_assoc($result1)){
            $query2 = "SELECT quantity * price AS total FROM cart WHERE user = '{$_SESSION['name']}'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $query = "INSERT INTO orders 
            (productid, title, image, quantity, size, first_name, last_name, email_address, street, city, state, zip_code, country, phone, unitprice, totalprice, username, pay_method, order_date) VALUES 
            ('{$row['product_id']}', '{$row['product_title']}' ,'{$row['img1']}', {$row['quantity']}, '{$row['size']}', '{$NAME}', '{$LAST_NAME}', '{$ADDRESS}', '{$STREET}', '{$CITY}', '{$STATE}', '{$ZIPCODE}', '{$COUNTRY}','{$PHONE}',{$row['price']}, {$row2['total']}, '{$_SESSION['name']}', '{$PAY_METHOD}','{$DATE}')";
            $result = mysqli_query($conn, $query);
            }



            $query3 = "SELECT *, (cart.quantity * cart.price) AS total FROM products LEFT JOIN cart ON products.id = cart.product_id WHERE cart.user = '{$_SESSION['name']}'";
            $result3 = mysqli_query($conn, $query3);
            $query4 = "SELECT SUM(quantity * price) + 1 AS grand_total FROM cart WHERE user = '{$_SESSION['name']}'";
            $result4 = mysqli_query($conn, $query4);
            $row4 = mysqli_fetch_assoc($result4);
            $query5 = "SELECT quantity * price AS total FROM cart WHERE user = '{$_SESSION['name']}'";
            $result5 = mysqli_query($conn, $query5);
            $row5 = mysqli_fetch_assoc($result5);
            $output = '';
            if(mysqli_num_rows($result3)){
                while($row = mysqli_fetch_assoc($result3)){
                    $output .= "<tr>
                                    <td style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                        <p style='margin:0 0 3px;font-size:14px;font-weight:700;color:#111827;'>{$row['product_title']}</p>
                                        <p style='margin:0;font-size:12px;color:#6b7280;'>{$row['size']}</p>
                                    </td>
                                    <td align='center' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;'>
                                        <span style='display:inline-block;width:28px;height:28px;line-height:28px;text-align:center;
                                                    background:#f3f4f6;border-radius:6px;font-size:13px;color:#374151;'>{$row['quantity']}</span>
                                    </td>
                                    <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;color:#374151;'><span>$</span>{$row['price']}</td>
                                    <td align='right' style='padding:14px 0;border-bottom:1px solid #f3f4f6;vertical-align:middle;font-size:14px;font-weight:700;color:#111827;'><span>$</span>{$row['total']}</td>
                                </tr>";
                }
            }
            if($result){
                echo "Order placed";
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
                    $mail->addAddress("{$ADDRESS}", "{$NAME} {$LAST_NAME}");     //Add a recipient
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Forever: Order';
                    $mail->Body    = "<!DOCTYPE html>
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
                                                                    <td style='color:#ffffff;font-size:20px;font-weight:700;letter-spacing:-0.3px;'>&#9679;&nbsp;Forever</td>
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
                                                            <p style='margin:0 0 10px;font-size:13px;color:#16a34a;font-weight:600;'>&#9679; Payment: pending</p>
                                                            <h2 style='margin:0 0 8px;font-size:22px;color:#111827;font-weight:700;'>Thanks for your order, {$NAME} {$LAST_NAME}</h2>
                                                            <p style='margin:0;font-size:14px;color:#6b7280;line-height:1.6;'>
                                                                We've received your order, your order is being prepared.
                                                                You'll get a shipping update once it's on the way.
                                                            </p>
                                                        </td>
                                                    </tr>

                                                    <!-- ── ORDER META ── -->
                                                    <tr>
                                                        <td style='padding:0;border-bottom:1px solid #e5e7eb;'>
                                                        <table width='100%' cellpadding='0' cellspacing='0'>
                                                            <tr>
                                                                <td width='33%' style='padding:16px 24px;border-right:1px solid #e5e7eb;'>
                                                                    <p style='margin:0 0 4px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Date</p>
                                                                    <p style='margin:0;font-size:14px;font-weight:700;color:#111827;'>{$DATE}</p>
                                                                </td>
                                                                <td width='33%' style='padding:16px 24px;'>
                                                                    <p style='margin:0 0 4px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Est. Delivery</p>
                                                                    <p style='margin:0;font-size:14px;font-weight:700;color:#111827;'>{$format_date}</p>
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
                                                            {$output}
                                                        </table>
                                                        </td>
                                                    </tr>

                                                    <!-- ── TOTALS ── -->
                                                    <tr>
                                                        <td style='padding:20px 32px;border-bottom:1px solid #e5e7eb;'>
                                                            <table width='100%' cellpadding='0' cellspacing='0'>
                                                                <tr>
                                                                    <td style='font-size:14px;color:#6b7280;padding-bottom:8px;'>Subtotal</td>
                                                                    <td align='right' style='font-size:14px;color:#374151;padding-bottom:8px;'><span>$</span>{$row5['total']}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style='font-size:14px;color:#6b7280;padding-bottom:8px;'>Shipping</td>
                                                                    <td align='right' style='font-size:14px;color:#374151;padding-bottom:8px;'>$1.00</td>
                                                                </tr>
                                                                <!-- Grand Total -->
                                                                <tr>
                                                                    <td colspan='2'>
                                                                        <table width='100%' cellpadding='0' cellspacing='0'
                                                                            style='background:#0a0a0a;border-radius:10px;'>
                                                                        <tr>
                                                                            <td style='padding:14px 20px;font-size:14px;color:rgba(255,255,255,0.75);font-weight:600;'>Total Charged</td>
                                                                            <td align='right' style='padding:14px 20px;font-size:20px;color:#ffffff;font-weight:700;'>$<span></span>{$row4['grand_total']}</td>
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
                                                                <p style='margin:0 0 4px;font-size:14px;font-weight:700;color:#111827;'>{$NAME} {$LAST_NAME}</p>
                                                                <p style='margin:0;font-size:13px;color:#6b7280;line-height:1.7;'>{$STREET},{$CITY},{$STATE},{$ZIPCODE}<br>{$COUNTRY}</p>
                                                            </td>
                                                            <td width='50%' style='padding:20px 24px;vertical-align:top;'>
                                                                <p style='margin:0 0 8px;font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:#9ca3af;'>Bill To</p>
                                                                <p style='margin:0 0 4px;font-size:14px;font-weight:700;color:#111827;'>{$NAME} {$LAST_NAME}</p>
                                                                <p style='margin:0;font-size:13px;color:#6b7280;line-height:1.7;'>Same as shipping address<br>{$ADDRESS}</p>
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
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
    }



?>
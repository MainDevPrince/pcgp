/**
 This is used in "https://rshcoin.com/", "https://www.grootpandacoin.com/", "https://cryptoking24.org/",  that I built from scratch and am managing.
 Whenever customer contact or visit this, admin can send him cold emails.
 */
<?php  

    $admin="Your admin email";
    $alias='Provided email host';
    $subject = "Your subject";    
    $header = "From: $email \r\n";//user email
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';

    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;

    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'Your hostname';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $alias;                     // SMTP username
        $mail->Password   = 'SMTP password';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above        
        // Recipients
        $mail->setFrom($alias, 'no-reply');
        $mail->addAddress($admin);               // Name is optional    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Your subject';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body    =$message;
        $mail->send();
        $response_array['success'] = true;
        echo json_encode($response_array);
    } catch (Exception $exc) {
        echo $exc;
    }    
?>
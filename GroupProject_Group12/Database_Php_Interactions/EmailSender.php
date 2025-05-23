<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require ('../PHPMailer/src/Exception.php');
    require ('../PHPMailer/src/PHPMailer.php');
    require ('../PHPMailer/src/SMTP.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['Email']) {
        $mail = new PHPMailer();
        
        try {
            // ⚙️ Server settings
            $mail->isSMTP();                                        // Send using SMTP
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                  // Enable verbose debug output                                                  
            $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                               // Enable SMTP authentication
            $mail->Username   = 'smartenergydashboard@gmail.com';   // SMTP username
            $mail->Password   = 'kugg mtgw lvbi fgpq';              // SMTP password
            $mail->SMTPSecure = 'tls';                              // Enable implicit TLS encryption
            $mail->Port       = 587;
            
            $mail->setFrom('smartenergydashboard@gmail.com', 'Smart Energy Dashboard');
            $mail->addAddress($_POST['Email']);                     // Name is optional
            
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject    = 'Account Created';
            $mail->Body       = 'An account has been made for you with Smart Energy Dashboard™';
            
            $mail->send();
            echo $mail->Username;
            echo $mail->Password;
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
        }
    }
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'C:/xampp/htdocs/GymManagementSystem/vendor/autoload.php';
require "connection.php";
if(isset($_POST['forgot']))
{
    $email=$_POST['Email_id'];
    $sql="select * from user_master where Email_id = '$email'";
    //echo $sql;die;
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $email2=$row['Email_id'];
    $pass=$row['Password'];
    //echo $pass;die;
}
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mansithakkar2699@gmail.com';                     // SMTP username
    $mail->Password   = 'iishu@123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mansithakkar2699@gmail.com', 'PhpMailer');
    $mail->addAddress($email, ' Magdam pole no DON');     // Add a recipient
                 // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('admin/image/burger.jpg');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Passowrd';
    $mail->Body    = 'Dear Admin ,: <br /><h2 style="color:orange">Your Password is :'.$pass.'</h2><br />If you want to change the password <br /> Plz first login your id then <br /> change your password <br /> Thanks ..';    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script>alert("Password has been sent")</script>';
	echo "<script>location.href='../index.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
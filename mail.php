<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email =  "";
$name =  "";
$body =  ""; 
$myMail = "teamkmk.wizards@gmail.com";

    // $myMail = "teamkmk.wizards@gmail.com";   
function sendMail($email){
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
    require_once("PHPMailer/Exception.php");
    
    if(isset($_POST['email'])){
        $email =  $_POST['email'];
        $name =  $_POST['name'];
        $body =  $_POST['body']; 
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'teamkmk.wizards@gmail.com';
        $mail->Password   = 'rblyypmzqaaknzmt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('teamkmk.wizards@gmail.com', 'Team Wizards');
        $mail->addAddress($email);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Thanks for Contact";
        $mail->Body    = "Thanks for Contacting us. We were right back to You.";
        
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
function sendMailtoMe($myMail){
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
    require_once("PHPMailer/Exception.php");
    
    if(isset($_POST['email'])){
        $email =  $_POST['email'];
        $name =  $_POST['name'];
        $body =  $_POST['body']; 
    }
    
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'teamkmk.wizards@gmail.com';
        $mail->Password   = 'rblyypmzqaaknzmt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465; 

        //Recipients
        $mail->setFrom('teamkmk.wizards@gmail.com', 'Team Wizards');
        $mail->addAddress($myMail);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact Form';
        $mail->Body    = 'You have received an email from '.$name.'. and his/her email : '.$email.'.<br><br>'.$body;
        $mail->AltBody = 'You have received an email from '.$name.'. and his/her email : '.$email.'.<br><br>'.$body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if(sendMail($email)){
    header("Location: index.php?success=1");
    sendMailtoMe($myMail);
}else{
    header("Location: index.php?error=0");
}

?>
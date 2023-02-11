<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    include("../connection/connection.inc.php");
    $id = 1;
    $registration_data = [
    "i_name" => $_POST['i_name'],
    "i_code" => $_POST['i_code'],
    "i_state" => $_POST['i_state'],
    "i_city" => $_POST['i_city'],
    "i_pass" => $_POST['i_pass'],
    "admin_name" => $_POST['admin_name'],
    "admin_mobile" => $_POST['admin_mobile'],
    "admin_email" => $_POST['admin_email'],
    "admin_user" => $_POST['admin_user'],
    "admin_pass" => $_POST['admin_pass'],
    "admin_id" => $id,
    ];

    $v_code = bin2hex(random_bytes(16));
    $pass = $registration_data['admin_pass'];
    $email = $registration_data["admin_email"];
    function sendMail($email,$v_code){
        require("../../PHPMailer/PHPMailer.php");
        require("../../PHPMailer/SMTP.php");
        require("../../PHPMailer/Exception.php");

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
            $mail->setFrom('teamkmk.wizards@gmail.com', 'Team Wizard');
            $mail->addAddress($email);     //Add a recipient
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from Khelmahakumbh';
            $mail->Body    = " Thanks for Registration 
            Click the link below to verify the Email 
            <a href='https://harshramwani.com/hackathon/hackathon_wizards_synopsis-main/src/verify_individual.php?email=$email&v_code=$v_code'>Verify</a>";
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    // print_r($signup_data);
    // header("Location:index.php?signup-successfully");
    $select_query_institute_registration = mysqli_query( $conn,"select * from institute_registration where admin_user='". $registration_data['admin_user'] ."'");
    $insert_query_institute_registration = "insert into institute_registration(i_name, i_code, i_state, i_city, i_pass, admin_id, admin_name, admin_mobile, admin_email, admin_user, admin_pass, verification_code, is_verified) VALUES ('". $registration_data['i_name'] ."','". $registration_data['i_code'] ."','". $registration_data['i_state'] ."','". $registration_data['i_city'] ."','". $registration_data['i_pass'] ."','".$registration_data['admin_id']."','". $registration_data['admin_name'] ."','". $registration_data['admin_mobile'] ."','". $registration_data['admin_email'] ."','". $registration_data['admin_user'] ."','". $registration_data['admin_pass']."','$v_code','0')";

    $check_institute_registration = mysqli_num_rows($select_query_institute_registration);
    if(($check_institute_registration  > 0 )){
        header("Location: institute_registration.php?error=userexist");
    }else{
        $result1 = (mysqli_query($conn,$insert_query_institute_registration) && sendMail($registration_data['admin_email'], $v_code) ) or die("Error Querying Database.....");
        header("Location: institute_registration.php?success=registered");
        mysqli_close($conn); 
    }
        



    // if(($conn -> query($insert_query_user_data) == TRUE) && ($conn -> query($insert_query_login_data) == TRUE )){
        // echo "Record Inserted Successfully";
        // header("Location: /index.php");
    // }else{
        // "Error : ". $sql ."<br>". $conn->error;
    // }'
    // $conn -> close();
?>
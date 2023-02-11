<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include("../connection/connection.inc.php");

    $signup_data = [
    "c_name" => $_POST['c_name'],
    "c_pass" => $_POST['c_pass'],
    "c_country" => $_POST['c_country'],
    "c_state" => $_POST['c_state'],
    "c_city" => $_POST['c_city'],
    "leader_name" => $_POST['leader_name'],
    "leader_mobile" => $_POST['leader_mobile'],
    "leader_email" => $_POST['leader_email'],
    "leader_user" => $_POST['leader_user'],
    "leader_pass" => $_POST['leader_pass'],
    "registration_type" => $_POST['registration_type'],
    ];

    $v_code = bin2hex(random_bytes(16));
    $pass = $registration_data['leader_pass'];
    $email = $registration_data["leader_email"];
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
            $mail->setFrom('teamkmk.wizards@gmail.com', 'Team Wizards');
            $mail->addAddress($email);     //Add a recipient
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from Khelmahakumbh';
            $mail->Body    = " Thanks for Registration 
            Click the link below to verify the Email 
            <a href='https://hackathon.harshramwani.com/hackathon_wizards/src/verify/verify_club.php?email=$email&v_code=$v_code'>Verify</a>";
        
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // print_r($signup_data);
    // header("Location:index.php?signup-successfully");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $last_id = 0;
    $query_leader_id = "SELECT MAX(admin_id) as last_id FROM institute_registration";
    $result_leader_id = mysqli_query($conn, $query_leader_id);

    if (mysqli_num_rows($result_leader_id) > 0) {
        $row = mysqli_fetch_assoc($result_leader_id);
        $last_id = $row["last_id"];
    }
    $next_id = $last_id + 1;
    $signup_data['leader_id'] = $next_id;
    $query ="insert into club_registration(c_name, c_pass, c_country, c_state, c_city, leader_id, leader_name, leader_mobile, leader_email, leader_user, leader_pass, registration_type, verification_code, is_verified) values ('". $signup_data['c_name'] ."','". $signup_data['c_pass'] ."','". $signup_data['c_country'] ."','". $signup_data['c_state'] ."','". $signup_data['c_city'] ."','".  $signup_data['leader_id'] ."','". $signup_data['leader_name'] ."','". $signup_data['leader_mobile'] ."','". $signup_data['leader_email'] ."','". $signup_data['leader_user'] ."','". $signup_data['leader_pass'] ."','". $signup_data['registration_type'] ."','$v_code','0')";
    $result = mysqli_query($conn, $query) or die("Error Querying Database....."); 
    // echo $result;
    if ($result) {
        echo "New record created successfully";
        
        header("Location: member_registration.php?leader_id=".$signup_data['leader_id']."&leader_name=".$signup_data['leader_name']."&registration_type=".$signup_data['registration_type']);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    // mysqli_close($conn);

?>
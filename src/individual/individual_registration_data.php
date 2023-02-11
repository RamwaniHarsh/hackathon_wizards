<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        include("../connection/connection.inc.php");
        
        $registration_data = [
        "f_name" => $_POST['f-name'],
        "l_name" => $_POST['l-name'],
        "u_name" => $_POST['u-name'],
        "u_pass" => $_POST['u-pass'],
        "gender" => $_POST['gender'],
        "dob" => $_POST['dateofbirth'],
        "education" => $_POST['education'],
        "designation" => $_POST['designation'],
        "mobile" => $_POST['mobilenumber'],
        "email" => $_POST['emailid'],
        "specialy_abled" => $_POST['ability'],
        ];

        $v_code = bin2hex(random_bytes(16));
        $pass = $registration_data['u_pass'];
        $email = $registration_data["email"];
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
                        $mail->setFrom('harshramwani5@gmail.com', 'Harsh');
                        $mail->addAddress($email);     //Add a recipient
              
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Email Verification from Khelmahakumbh';
                        $mail->Body    = " Thanks for Registration 
                        Click the link below to verify the Email 
                        <a href='https://hackathon.harshramwani.com/hackathon_wizards/src/verify/verify_individual.php?email=$email&v_code=$v_code'>Verify</a>";
                    
                        $mail->send();
                        return true;
                }catch (Exception $e) {
                        return false;
                }
        }



        // print_r($signup_data);
        // header("Location:index.php?signup-successfully");
        
        
        

        $select_query_registration_individual = mysqli_query( $conn,"select * from registration_individual where username='". $registration_data['u_name'] ."'");
        $insert_query_registration_individual = "insert into registration_individual(f_name, l_name, username, password, gender, dob, education, designation, mobile, email, specialy_abled, verification_code, is_verified) VALUES ('". $registration_data['f_name'] ."','". $registration_data['l_name'] ."','". $registration_data['u_name'] ."','". $registration_data['u_pass'] ."','". $registration_data['gender'] ."','". $registration_data['dob'] ."','". $registration_data['education'] ."','". $registration_data['designation'] ."',". $registration_data['mobile'] .",'". $registration_data['email']."','". $registration_data['specialy_abled'] ."','$v_code','0')";

        $check_registration_individual = mysqli_num_rows($select_query_registration_individual);
        if(($check_registration_individual  > 0 )){
                header("Location: ../login.php?error=userexist");
                exit;
        }else{
                $result1 = (mysqli_query($conn,$insert_query_registration_individual) && sendMail($registration_data['email'], $v_code) ) or die("Error Querying Database.....");
                header("Location: ../login.php?success=registered");
                mysqli_close($conn); 
        }
        



        // if(($conn -> query($insert_query_user_data) == TRUE) && ($conn -> query($insert_query_login_data) == TRUE )){
                // echo "Record Inserted Successfully";
                // header("Location: /index.php");
        // }else{
                // "Error : ". $sql ."<br>". $conn->error;
        // }
        // $conn -> close();
?>
<?php
    include("../connection/connection.inc.php");

    $signup_data = [
    "leader_id" => $_POST['leader_id'],
    "leader_name" => $_POST['leader_name'],
    "leader_mobile" => $_POST['leader_mobile'],
    "leader_email" => $_POST['leader_email'],
    "leader_user" => $_POST['leader_user'],
    "leader_pass" => $_POST['leader_pass'],
    "member_name_1" => $_POST['member_name_1'],
    "member_mobile_1" => $_POST['member_mobile_1'],
    "member_email_1" => $_POST['member_email_1'],
    "member_name_2" => $_POST['member_name_2'],
    "member_mobile_2" => $_POST['member_mobile_2'],
    "member_email_2" => $_POST['member_email_2'],
    "member_name_3" => $_POST['member_name_3'],
    "member_mobile_3" => $_POST['member_mobile_3'],
    "member_email_3" => $_POST['member_email_3'],
    "member_name_4" => $_POST['member_name_4'],
    "member_mobile_4" => $_POST['member_mobile_4'],
    "member_email_4" => $_POST['member_email_4'],
    "member_name_5" => $_POST['member_name_5'],
    "member_mobile_5" => $_POST['member_mobile_5'],
    "member_email_5" => $_POST['member_email_5'],
    "member_name_6" => $_POST['member_name_6'],
    "member_mobile_6" => $_POST['member_mobile_6'],
    "member_email_6" => $_POST['member_email_6'],
    "member_name_7" => $_POST['member_name_7'],
    "member_mobile_7" => $_POST['member_mobile_7'],
    "member_email_7" => $_POST['member_email_7'],
    "member_name_8" => $_POST['member_name_8'],
    "member_mobile_8" => $_POST['member_mobile_8'],
    "member_email_8" => $_POST['member_email_8'],
    ];

    // print_r($signup_data);
    // echo $signup_data['leader_name'];
    // header("Location:index.php?signup-successfully");
    // $conn = mysqli_connect($hostname,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query ="INSERT INTO member_registration(leader_id, leader_name, leader_mobile, leader_email, member_name_1, member_mobile_1, member_email_1, member_name_2, member_mobile_2, member_email_2, member_name_3, member_mobile_3, member_email_3, member_name_4, member_mobile_4, member_email_4, member_name_5, member_mobile_5, member_email_5, member_name_6, member_mobile_6, member_email_6, member_name_7, member_mobile_7, member_email_7, member_name_8, member_mobile_8, member_email_8) VALUES ('".$signup_data['leader_id']."','".$signup_data['leader_name']."','".$signup_data['leader_mobile'] ."','".$signup_data['leader_email']."','".$signup_data['member_name_1']."','".$signup_data['member_mobile_1']."','".$signup_data['member_email_1'] ."','".$signup_data['member_name_2']."','". $signup_data['member_mobile_2'] ."','". $signup_data['member_email_2'] ."','".$signup_data['member_name_3']."','". $signup_data['member_mobile_3'] ."','". $signup_data['member_email_3'] ."','".$signup_data['member_name_4']."','". $signup_data['member_mobile_4'] ."','". $signup_data['member_email_4'] ."','".$signup_data['member_name_5']."','". $signup_data['member_mobile_5'] ."','". $signup_data['member_email_5'] ."','".$signup_data['member_name_6']."','". $signup_data['member_mobile_6'] ."','". $signup_data['member_email_6'] ."','".$signup_data['member_name_7']."','". $signup_data['member_mobile_7'] ."','". $signup_data['member_email_7'] ."','".$signup_data['member_name_8']."','". $signup_data['member_mobile_8'] ."','". $signup_data['member_email_8'] ."')";
    $result = mysqli_query($conn, $query) or die("Error Querying Database....."); 
    echo $result;
    if ($result) {
        echo "New record created successfully";
        header("Location: club_registration.php?success=Signup Successfuly");
        // header("Location: test.php?leader_id=".$signup_data['leader_id']."&leader_name=".$signup_data['leader_name']);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
<?php
include("../connection/connection.inc.php");

$email = $_GET['email'];
$v_code = $_GET['v_code'];

if(isset($email) && isset($v_code)){
    $query = "SELECT * FROM club_registration where leader_email='". $email ."' AND verification_code='". $v_code ."'";
    $result = mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result)==1){
             $result_fetch = mysqli_fetch_assoc($result);
             if($result_fetch['is_verified'] == 0){
                $update = "UPDATE club_registration SET is_verified='1' WHERE leader_email='".$result_fetch['leader_email']."'";
                if(mysqli_query($conn,$update)){
                    echo "Email Verification Successful";
                    header("Location: ../login.php?success=userverified");
                }else{
                    echo "Email Verification cannot be Doned";
                    header("Location: ../login.php?error=notverifeid");
                }
            }else{
                echo "User already Verified";
            }
        }
    }else{
        echo "Query could not be Execute";
    }
}
?>
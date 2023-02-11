<?php
session_start();
?>

<?php
include("connection/connection.inc.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

// mysqli_select_db($conn, $database);

$uname = $_POST['uname'];
$pass = $_POST['upass'];
// $email = $_POST['uemail'];

$sql1 = "select * from registration_individual where username='$uname' or email='$uname' and password='$pass'";
$sql2 = "select * from coach_registration where username='$uname' or email='$uname' and password='$pass'";
$sql3 = "select * from institute_registration where admin_user='$uname' or admin_email='$uname' and admin_pass='$pass'";
$sql4 = "select * from admin_login where username='$uname' or email='$uname' and password='$pass'";
$sql5 = "select * from club_registration where leader_user='$uname' or leader_email='$uname' and leader_pass='$pass'";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);

$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
$row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);
$row5 = mysqli_fetch_array($result5, MYSQLI_ASSOC);

if(($row1['username'] == $uname) || ($row1['email'] == $uname) && ($row1['password'] == $pass)){
    
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row1['email'];
    $_SESSION['name'] = $row1['f_name'];
    header("Location: ../portfolio.php");

}else if(($row2['username'] == $uname) || ($row2['email'] == $uname) && ($row2['password'] == $pass)){
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row2['email'];
    $_SESSION['name'] = $row2['first_name'];
    header("Location: ../portfolio.php");
}else if(($row3['admin_user'] == $uname) || ($row3['admin_email'] == $uname) && ($row3['admin_pass'] == $pass)){
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row3['admin_email'];
    $_SESSION['name'] = $row3['admin_name'];
    header("Location: ../portfolio.php");
}else if(($row4['username'] == $uname) || ($row4['email'] == $uname) && ($row4['password'] == $pass)){
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row4['email'];
    // $_SESSION['name'] = $row4['first_name'];
    header("Location: ../portfolio.php");
}else if(($row5['leader_user'] == $uname) || ($row5['leader_email'] == $uname) && ($row5['leader_pass'] == $pass)){
    $_SESSION['username'] = $uname;
    $_SESSION['email'] = $row5['leader_email'];
    $_SESSION['name'] = $row5['leader_name'];
    header("Location: ../portfolio.php");
}else{
    header("Location: login.php?error=unameorpassw");
}
?>
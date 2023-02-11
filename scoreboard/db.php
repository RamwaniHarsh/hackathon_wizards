<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aura";

$rl=$_POST['id1'];
$plan1=$_POST['ab'];
$price1=$_POST['cd'];
$plan2=$_POST['ef'];
$price2=$_POST['gh']; 

$conn = mysqli_connect($servername, $username, $password, $dbname);
#$sql_s="select id from up1 where id='".$rl."'";
$sql_s="admin";

if($sql_s==$rl)
{
    $sql = "UPDATE up1 SET p1='$plan1', pr1='$price1', p2='$plan2', pr2='$price2' WHERE id='$rl'";
}
if (mysqli_query($conn, $sql)) {
        echo "Updated successfully";
        ?>
        <a href="index_score.php">View Live</a>
        <?php
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
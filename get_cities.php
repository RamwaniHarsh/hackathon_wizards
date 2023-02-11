<?php

include("src/connection/connection.inc.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['state'])){
    $state = $_POST['state'];
    $state_id_exp = array();
    $sql_state_id = "select id from tbl_states where name='$state'";
    $result = mysqli_query($conn, $sql_state_id);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo $row['id'];
            $state_id_exp[] = $row['id'] . ", ";
            // $sql_city_id = "select * from cities where state_id='".$row['id']."'";
            $sql_example = "SELECT * FROM tbl_states JOIN tbl_cities ON tbl_states.id = tbl_cities.state_id WHERE tbl_states.id='".$row['id']."'";
            $output = mysqli_query($conn, $sql_example);
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    echo $row['name'] . ",";
                }
            }
        }
       

       

        // $result1 = mysqli_query($conn, $sql_city_id);
        // if(mysqli_num_rows($result1) > 0){
        //     while($row = mysqli_fetch_assoc($result1)){
        //         echo $row['city'];
        //     }
        // }
    } else {
        echo "No State id found for the selected state";
    }


}elseif(isset($_POST['city'])){
    $city = $_POST['city'];
    $sql_city_id = "select * from tbl_cities where state_id='$city'";
    $result = mysqli_query($conn, $sql_city_id);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['city'];
        }
    } else {
        echo "No cities found for the selected state id";
    }

}
mysqli_close($conn);
// $sql = "SELECT name FROM city WHERE state_id = $state";
?>

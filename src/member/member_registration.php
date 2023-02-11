<?php
    include("../connection/connection.inc.php");

    $query1 = "select * from tbl_countries";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "select * from tbl_states where country_id='101'";
    $result2= mysqli_query($conn, $query2);
    $leader_id = "";
    $leader_name="";
   

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="css/my.css">
  <link rel="stylesheet" href="css/custom/style.css">
  <title>Regisration Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <!-- <header>Registration</header> -->
    <h1 style="text-align:center; color:grey;">Member Registration</h1>
    <form action="member_registration_data.php" method="POST">
      <div class="form first">
      <div class="details personal">
          <span class="title">Member Details</span>
          <?php 
             if((isset($_GET['leader_id']) )&& (isset($_GET['leader_name']))){
              $leader_id = $_GET['leader_id'];
              $leader_name = $_GET['leader_name'];
            }elseif((isset($_GET['team_id'])) &&(isset($_GET['team_name']))){
              $team_id = $_GET['team_id'];
            }
          ?>
              <div class="input-field">
                <label style="font-size: 20px; margin-left: 10%;">Leader ID : </label>
                <input type="text" name="leader_id" placeholder="Leader ID" value="<?php echo $leader_id; ?>" style="width: 170px;"  disabled required>
                
                <label style="font-size: 20px; margin-left: 6%;">Leader Name : </label>
                <input type="text" name="leader_name" placeholder="Leader Name" value="<?php echo $leader_name; ?>"  style="width: 170px;" disabled required>
              </div>
          <?php  ?>
          <div class="fields" id="fields">
              <?php 
              $sql_leader_data = "select leader_id, leader_name, leader_mobile, leader_email, leader_user, leader_pass from club_registration where leader_id = '$leader_id'"; 
              $result_leader_data = mysqli_query($conn, $sql_leader_data);
              $row_leader_data = mysqli_fetch_assoc($result_leader_data);
              

              ?>
              <input type="hidden" name="leader_id" value="<?php echo $row_leader_data['leader_id']; ?>">
              <input type="hidden" name="leader_name" value="<?php echo $row_leader_data['leader_name']; ?>">
              <input type="hidden" name="leader_mobile" value="<?php echo $row_leader_data['leader_mobile']; ?>">
              <input type="hidden" name="leader_email" value="<?php echo $row_leader_data['leader_email']; ?>">
              <input type="hidden" name="leader_user" value="<?php echo $row_leader_data['leader_user']; ?>">
              <input type="hidden" name="leader_pass" value="<?php echo $row_leader_data['leader_pass']; ?>">
              <div class="input-field">
                <label>Name</label>
                <input type="text" name="member_name_1" placeholder="Enter Member Name" required>
              </div>
              <div class="input-field">
                <label>Email</label>
                <input type="text" name="member_email_1" placeholder="Enter Member Email" required>
              </div>
              <div class="input-field">
                <label>Mobile Number</label>
                <input type="number" name="member_mobile_1" placeholder="Enter Member Mobile" required>
              </div>
          </div>
          <button type="button" id="add-button">Add</button>
          <button type="button" style="margin-left: 250px; margin-top: -70px;" id="remove-button">Remove</button>
        </div>
        <div class="input-field">
          <button type="submit" value="submit">Submit</button>
          <?php if(isset($_GET['error'])) { ?>
          <div class="error"><?php echo $_GET['error']; ?></div>
          <?php } ?>
        </div>
          <h4><a href="../index.php">Click Here for Login</a></h4>
      </div>
    </form>
  </div>


<script src="../js/script1.js"></script>
<script>
  var count = 2;
  document.getElementById("add-button").addEventListener("click", function() {
    if (count >= 9) {
      alert("You can not Add Member upto 8")
      return;
    }
    var container = document.getElementById("fields");
    var textbox1 = document.createElement("div");
    textbox1.innerHTML = '<label>Name</label><input type="text" name="member_name_'+ count +'" placeholder="Enter Member Name" required>';
    textbox1.classList.add("input-field");
    var textbox2 = document.createElement("div");
    textbox2.innerHTML = '<label>Email</label><input type="text" name="member_email_'+ count +'" placeholder="Enter Member Email" required>';
    textbox2.classList.add("input-field");
    var textbox3 = document.createElement("div");
    textbox3.innerHTML = '<label>Mobile Number</label><input type="number" name="member_mobile_'+ count +'" placeholder="Enter Member Mobile" required>';
    textbox3.classList.add("input-field");
    container.appendChild(textbox1);
    container.appendChild(textbox2);
    container.appendChild(textbox3);
    count++;
  });
  document.getElementById("remove-button").addEventListener("click", function() {
    if (count <= 0) {
      return;
    }
    var container = document.getElementById("fields");
    container.removeChild(container.lastChild);
    container.removeChild(container.lastChild);
    container.removeChild(container.lastChild);
    count--;
  });
</script>
</body>
</html>
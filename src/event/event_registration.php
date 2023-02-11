<?php
include("../connection/connection.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="../css/my.css">
  <link rel="stylesheet" href="../css/custom/style.css">
  <title>Regisration Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<!-- <header> -->
<div class="container">
    <h1 style="margin-left:33%; color:grey;">Event Registration</h1>
    <form action="event_registration_data.php" method="POST">
        <div class="form">
            <div class="details personal">
                <span class="title">Event Regisration Details</span><br>
                <div class="fields">
                    <div class="input-field">
                        <label>Team / Individual Player Name</label>
                        <input type="text" name="p-t-name" placeholder="Enter Team / Individual Player name" required>
                    </div>
                    
                    <?php   
                        $query1 = "select * from event_name";
                        $result1 = mysqli_query($conn, $query1);
                    ?>
                    <div class="input-field">
                      <label>Event Name</label>
                      <select required name="event-name">
                            <option disabled selected>Select Event Name</option>
                            <?php if(isset($_GET['event'])){ ?>
                            <option value="<?php echo $_GET['event'];?>" selected><?php echo $_GET['event'];?></option>
                            <?php }else{ ?>
                            <?php while($row1 = mysqli_fetch_array($result1)):;
                            
                            ?>
                            
                            <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                            <?php endwhile;
                            } ?>
                      </select>
                    </div>
                    <div class="input-field">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Enter your Age" required>
                    </div>


                    <?php 
                      $hostname = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "khelmahakumbh";
                      $conn = mysqli_connect($hostname,$username,$password,$dbname);
                      $query = "select name from tbl_cities where state_id = 12";
                      $result = mysqli_query($conn, $query);
                    ?>
                    <div class="input-field">
                      <label>City</label>
                      <select required name="city">
                          <option disabled selected>Select City</option>
                          <?php while($row = mysqli_fetch_array($result)):; ?>
                          <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                          <?php endwhile; ?>
                      </select>
                  </div>
                    <div class="input-field">
                        <label>Your Choice</label>
                        <select required name="user-choice">
                            <option disabled selected>Select your Choice</option>
                            <option value="Individual">Individual</option>
                            <option value="Coach">Coach</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="number" name="mobilenumber" placeholder="Enter mobile number" required>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="emailid" placeholder="Enter your email id" required>
                    </div>
                </div>
                <button type="submit" value="submit">Submit</button>
            <h4><a href="../login.php">Already have an account? Click Here to Login</a></h4>
        </div>
    </form>
</div>
<!-- </header> -->
</body>
<script src="../js/script1.js"></script>
</html>
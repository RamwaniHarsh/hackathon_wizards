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
<div class="container">

    <h1 style=" text-align: center; color:grey;">Coach Registration</h1>

    <form action="coach_registration_data.php" method="POST">
        <div class="form">
            <div class="details personal">
                <span style="font-size: 1.4em;" class="title">Coach Details</span><br>

                <div class="fields">
                    <div class="input-field">
                        <label style="font-size:1.1em">First Name</label>
                        <input type="text" id="f_name" name="f-name" onblur="getusername()" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-field">
                        <label style="font-size:1.1em">Last Name</label>
                        <input type="text" id="l_name" name="l-name" onblur="getusername()" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-field">
                        <label style="font-size:1.1em">User Name</label>
                        <input type="text" id="u_name" name="u-name" placeholder="Enter your Username" required>
                    </div>

                    <div class="input-field">
                    <label>Password</label>
                      <div class="popup">
                          <input style="width: 260px;" type="password" class="popup" id="psw" onclick="myFunction()" name="u-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
                            <span class="popuptext" id="myPopup">
                              <div id="message">
                                <p>Password must contain the following: </p>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                              </div>
                            </span>
                      </div>
                    </div>
                    
                    
                    <div class="input-field">
                        <label style="font-size:1.1em">Gender</label>
                        <select required name="gender">
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label style="font-size:1.1em">Designation</label>
                        <input type="text" name="designation" placeholder="Enter your current designation" required>
                    </div>

                    <?php 
                      

                      $query = "select name from tbl_cities where state_id=12";
                      $result = mysqli_query($conn, $query);

                    ?>
                    <div class="input-field">
                      <label style="font-size:1.1em">City</label>
                      <select required name="city">
                          <option disabled selected>Select City</option>
                          <?php while($row = mysqli_fetch_array($result)):; ?>
                          <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                          <?php endwhile; ?>
                      </select>
                  </div>
                  <div class="input-field">
                    <label style="font-size:1.1em">Mobile Number</label>
                    <input type="number" name="mobilenumber" placeholder="Enter mobile number" required>
                </div>
                    <div class="input-field">
                        <label style="font-size:1.1em">Email</label>
                        <input type="email" name="emailid" placeholder="Enter your email id" required>
                    </div>
                    <?php if(isset($_GET['error'])) { ?>
					          <div class="error">Username Already Available, Please use different Username</div>
                <?php } elseif(isset($_GET['success'])){ ?>
                  <div class="success">Registration Complete Successfully</div>
                  <?php } ?>
                </div>


            <!-- <div class="input-field">
                 <input id="submit_btn" type="submit" value="submit">

            </div> -->
            <button type="submit" value="submit">Submit</button>
            <h4><a href="login.php">Already have an account? Click Here to Login</a></h4>
        </div>
    </form>

</div>
<!-- </header> -->
<script src="../js/script1.js"></script>
</body>
</html>
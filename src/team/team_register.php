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
  <h1 style="margin-left:42%; color:grey;">Team Registration</h1>
    <form action="team_register_data.php" method="POST">
        <div class="form">
            <div class="details personal">
                <span class="title">Team Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Team Name</label>
                        <input type="text" name="f-name" placeholder="Enter your Team name" required>
                    </div>

                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" id="ipsw" name="u-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
                    </div>

                    <div class="input-field">
                        <label>Institue/School Name</label>
                        <input type="text" id="iname" name="institute-name" placeholder=" Enter Institute/School name" required>
                    </div>
                    <div class="pavalidate" id="message">
                        <h3>Password must contain the following: </h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="input-field">
                        <label>Sport</label>
                        <select required name="sport">
                          <option disabled selected>Select Sport</option>
                          <option value="Badminton">Badminton</option>
                          <option value="Basketball">Basketball</option>
                          <option value="Cycling">Cycling</option>
                          <option value="Hockey">Hockey</option>
                          <option value="Kho-Kho">Kho-Kho</option>
                          <option value="Running">Running</option>
                          <option value="volleyball">volleyball</option>
                          <option value="Weight Lifting">Weight Lifting</option>
                        </select>
                    </div>


                    <div class="input-field">
                        <label>Number of Players</label>
                        <input type="number_of_player" name="designation" placeholder="Total Number of players" required>
                    </div>
                    <br>

                    <p>Coach required? :</p> <br>

                    <input type="radio" id="yes" name="fav_language" value="Yes">
                     <label for="yes">Yes</label><br>
                     <input type="radio" id="no" name="fav_language" value="No">
                    <label for="no">No</label><br>

                    <div class="input-field">
                        <label>Team Leader Number</label>
                        <input type="number" name="mobilenumber" placeholder="Enter mobile number" required>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="emailid" placeholder="Enter your email id" required>
                    </div>

                </div>


                <div class="input-field">
                    <input id="submit_btn" type="submit" value="submit">

                </div>
                <h4><a href="individual_registration.php"> Register individual player here</a></h4>
            </div>
    </form>

</div>
<!-- </header> -->
<script src="../js/script1.js"></script>
</body>
<!-- <script src="js/script1.js"></script> -->
</html>
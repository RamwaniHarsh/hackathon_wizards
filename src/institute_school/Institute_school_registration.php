<?php
  include("../connection/connection.inc.php");
  
  $query1 = "select * from tbl_countries";
  $result1 = mysqli_query($conn, $query1);
  $query2 = "select * from tbl_states where country_id='101'";
  $result2= mysqli_query($conn, $query2);
  $query3 = "select * from cities where state_id=1";
  $country = "";
  $state = "";
  $city = "";
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
<?php //include("../resources/partials/header.php"); ?>


  <div class="container">
    <!-- <header>Registration</header> -->
    <h1 style="text-align:center; color:grey;">Institute Registration</h1>
    <form action="institute_school_registration_data.php" method="POST">
      <div class="form">
        <div class="details personal">
          <span class="title">Institute Details</span>
          <div class="fields">

            <div class="input-field">
              <label>Institute Name</label>
              <input type="text" id="i_name" name="i_name" placeholder="Enter your Institute name" required>
            </div>
            <div class="input-field">
              <label>Institute Code</label>
              <input type="number" id="i_name" name="i_code" placeholder="Enter your Institute Code" required>
            </div>
            <div class="input-field">
              <label>State</label>
              <select required name="i_state" id="st-type">
                <option disabled selected>Select State</option>
                <?php while($row2 = mysqli_fetch_array($result2)):; ?>
                <option value="<?php echo $row2['name']; ?>"><?php echo $row2['name']; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <script>
              $(document).ready(function () {
                $("#st-type").change(function () {
                  var state = $(this).val();
                  $.ajax({
                    type: "POST",
                    url: "../get_cities.php",
                    data: {
                      state: state
                    },
                    success: function (city_name) {
                      var city_list = city_name.split(",");
                      var options;
                      if (city_list == null) {
                        $("#city-list").html("<option value=''>No City Found</option>");
                      } else {
                        for (var i = 1; i < city_list.length; i++) {
                          options += "<option value='" + city_list[i] + "'>" + city_list[i] + "</option>";
                        }
                        $("#city-list").html(options);
                      }
                    }
                  });
                });
              });
            </script>
            <div class="input-field">
              <label>City</label>
              <input type="text" name="i_city" list="city-list" placeholder="Enter City Name">
              <datalist id="city-list"></datalist>
            </div>
            <div class="input-field">
              <label>Password</label>
              <div class="popup">
                <input style="width: 250px;" type="password" class="popup" id="ipsw" onblur="myFunction_institute_pass_Blur()"
                  onfocus="get_institute_password()" name="i_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                  placeholder="Enter Password" required>
                <span class="popuptext" id="myPopup_institute_pass">
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
              <label>Confirm Password</label>
              <input type="password" id="copsw_institute" name="i_conf_pass" onblur="conpass_institute()"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                placeholder="Enter Confirm password" required>
            </div>
            <div>
              <p id="conpaswshow"></p>
            </div>
          </div>
          <span class="title">Admin Details</span>
          <div class="fields">

            <div class="input-field">
              <label>Admin Name</label>
              <input type="text" id="admin_name" name="admin_name" placeholder="Enter Admin Name" required>
            </div>
            <div class="input-field">
              <label>Mobile Number</label>
              <input type="number" name="admin_mobile" placeholder="Enter mobile number" required>
            </div>

            <div class="input-field">
              <label>Email</label>
              <input type="email" name="admin_email" placeholder="Enter your email id" required>
            </div>

            <div class="input-field">
              <label>User Name</label>
              <input type="text" id="u_name" name="admin_user" placeholder="Enter your Username" required>
            </div>
            <div class="input-field">
              <label>Password</label>
              <div class="popup">
                <input style="width: 250px;" type="password" class="popup" id="admin_psw"onblur="myFunction_admin_pass_Blur()" onfocus="get_admin_password()" name="admin_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                  placeholder="Enter Password" required>
                <span class="popuptext" id="myPopup_admin_pass">
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
              <label>Confirm Password</label>
              <input type="password" id="copsw_admin" name="admin_conf_pass" onblur="conpass_admin()"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                placeholder="Enter Confirm password" required>
            </div>
            <div>
              <p id="conpaswshow"></p>
            </div>
          </div>
          <?php if(isset($_GET['success'])) { ?>
          <div class="success "><?php echo $_GET['success']; ?>
          </div>
          <?php } ?>
          <button type="submit" value="submit">Submit</button>
        </div>
      </div>
  </div>
  </form>
  </div>
  <script src="../js/script1.js"></script>
</body>

</html>
<?php include('resources/partials/header.php')?>

<link rel="stylesheet" href="src/css/register.css">

<?php include('resources/partials/top-container.php')?>

<br><br>
<div class="container1">

    <h1>Registration</h1>

    <form action="signup_data.php" method="POST">
        <div class="form first">
            <div class="details personal">
                <span class="title">Personal Details</span>

                <div class="fields">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="f-name" placeholder="Enter your first name" required>
                    </div>

                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="l-name" placeholder="Enter your last name" required>
                    </div>

                    <div class="input-field">
                        <label>User Name</label>
                        <input type="text" name="u-name" placeholder="Enter your Username" required>
                    </div>

                    <div class="input-field">
                        <label>Password</label>
                        <input type="password" id="psw" name="u-pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            placeholder="Enter Password" required>

                    </div>

                    <div class="input-field">
                        <label>Confirm Password</label>
                        <input type="password" id="psw" name="confirm-name"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            placeholder="Enter Confirm password" required>
                    </div>
                    <div class="pavalidate" id="message">
                        <h3>Password must contain the following: </h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="input-field">
                        <label>Gender</label>
                        <select required name="gender">
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Date of Birth</label>
                        <input type="date" name="dateofbirth" placeholder="Enter birth date" required>
                    </div>

                    <div class="input-field">
                        <label>Education</label>
                        <select required name="education">
                            <option disabled selected>Select Education</option>
                            <option>B.Tech.</option>
                            <option>B.COM</option>
                            <option>B.B.A.</option>
                            <option>B.A.</option>
                            <option>B.Ed.</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Designation</label>
                        <input type="text" name="designation" placeholder="Enter your current designation" required>
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

                <div class="input-field">
                    <input id="submit_btn" type="submit" value="submit">

                </div>
                <h4><a href="login.php">Click Here for Login</a></h4>
            </div>
    </form>

</div>
<br><br>

<?php include('resources/partials/footer.php') ?>
<script src="../js/script1.js"></script>
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "flex";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>

</html>
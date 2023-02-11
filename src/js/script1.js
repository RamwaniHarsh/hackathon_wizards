const form = document.querySelector("form"),
        allInput = form.querySelectorAll(".first input");
function get_club_password() {
    var popup = document.getElementById("myPopup_club_pass");
    popup.classList.toggle("show");
  }
  function get_leader_password() {
    var popup = document.getElementById("myPopup_leader_pass");
    popup.classList.toggle("show");
    popup.style.top = "-470%";
    popup.style.height = "240px";
    popup.style.width = "310px";
    popup.style.left = "20%";
  }
  function myFunction_club_pass_Blur() {
    var popup = document.getElementById("myPopup_club_pass");
    popup.classList.toggle("hide");
  }
  function myFunction_leader_pass_Blur() {
    var popup = document.getElementById("myPopup_leader_pass");
    popup.classList.toggle("hide");
  }
  //sjkgbnp[o]


  function get_institute_password() {
    var popup = document.getElementById("myPopup_institute_pass");
    popup.classList.toggle("show"); 
  }
  function get_admin_password() {
    var popup = document.getElementById("myPopup_admin_pass");
    popup.classList.toggle("show");
    popup.style.top = "-470%";
    popup.style.height = "240px";
    popup.style.width = "310px";
    popup.style.left = "20%";
  }
  function myFunction_institute_pass_Blur() {
    var popup = document.getElementById("myPopup_institute_pass");
    popup.classList.remove("show");
    popup.classList.toggle("hide");
  }
  function myFunction_admin_pass_Blur() {
    var popup = document.getElementById("myPopup_admin_pass");
    popup.classList.remove("show");
    popup.classList.toggle("hide");
  }
  var myInput_institute = document.getElementById("ipsw");
  var myInput_admin = document.getElementById("admin_psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  
  myInput_institute.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput_institute.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput_institute.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput_institute.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if (myInput_institute.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
  myInput_admin.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput_admin.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput_admin.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput_admin.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if (myInput_admin.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }

  function getusername() {
    var fname = document.getElementById("f_name").value;
    var lname = document.getElementById("l_name").value;
    var uname = fname + lname;
    document.getElementById("u_name").value = uname;
  }

  function conpass_admin() {
    var Password = document.getElementById("admin_psw").value;
    var ConfirmPassword = document.getElementById("copsw_admin").value;
    if (Password != ConfirmPassword) {
      // document.getElementById("conpaswshow").innerHTML = "Passwords do not Match.";
      alert("Password do not Matched");
      document.getElementById("copsw_admin").focus;
      return false;
    } else {
      // document.getElementById("conpaswshow").innerHTML = "Passwords Matched.";
      return true;
    }
  }
  function conpass_institute() {
    var Password = document.getElementById("ipsw").value;
    var ConfirmPassword = document.getElementById("copsw_institute").value;
    if (Password != ConfirmPassword) {
      // document.getElementById("conpaswshow").innerHTML = "Passwords do not Match.";
      alert("Password do not Matched");
      document.getElementById("copsw_institute").focus;
      return false;
    } else {
      // document.getElementById("conpaswshow").innerHTML = "Passwords Matched.";
      return true;
    }
  }
</head>
<body>
    <!--navbar-->
    <div class="topStrip">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="leftLink">
                        <li><a href="/" title="Home" class="text">Home</a></li>
                        <li><a href="/feedbacks" class="text" title="Feedback">Feedback</a></li>
                        <li><a href="/coming-soon" class="text" title="FAQ's">FAQ's</a></li>
                        <li><a href="/contact-us" class="text" title="Contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <ul class="rightLinks">
                        <li class="mainSubject hide-in-ipad"><a tabindex="1" href="#main" class="skipContent text"
                                title="Skip to Main Content">Skip to Main Content</a></li>
                        <li class="moveInBottom hide-in-ipad"><a href="/screen-reader-access" class="text"
                                title="Screen Reader Access">Screen Reader Access</a></li>
                        <li class="fontResize hide-in-ipad">
                            <div id="accessControl" class="textResizeWrapper cf">
                                <input type="button" name="font_normal" value="A-" id="font_normal"
                                    title="Decrease Font Size" class="fontScaler normal font-normal" autocomplete="off">
                                <input type="button" name="font_normal" value="A" id="font_large"
                                    title="Normal Font Size" class="fontScaler large font-large current"
                                    autocomplete="off">
                                <input type="button" name="font_larger" value="A+" id="font_larger"
                                    title="Increase Font Size" class="fontScaler larger font-larger" autocomplete="off">
                                <input type="button" id="highContrastWhite" class="contrastChanger normal current"
                                    title="Standard View" autocomplete="off">
                                <input type="button" id="highContrastBlack" class="contrastChanger wob"
                                    title="High Contrast View" autocomplete="off">
                            </div>
                        </li>
                        <li class="hide-in-ipad">
                            <!--<div class="language">
								<select class="customSelect" title="Select Language">
									<option value="en" selected="selected">English</option>
									<option value="gj">ગુજરાતી</option>
								</select>
							</div>-->
                            <div class="language">
                                <form enctype="multipart/form-data" method="post" accept-charset="utf-8" id="frmlang"
                                    name="frmlang" data-bv-message="This value is not valid"
                                    data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" autocomplete="off">
                                    <div style="display:none;"><input type="hidden" name="_method" value="POST"
                                            autocomplete="off"><input type="hidden" name="_csrfToken" autocomplete="off"
                                            id="_csrfToken_1674547338.769"
                                            value="EOmmdAEGVlHERC99PoTxzm5+kTz5pCBnlFc9ztKL/r3ucrbT5RTmOa+wH56gyy/WUrofequdfQyThx9RK8nmIA==">
                                    </div> <button class="languageBtn" name="lang" id="lang1"
                                        onchange="this.form.submit();" title="English" value="en" class="text">English</button>
                                    <span class="text-white">|</span>
                                    <button class="languageBtn" name="lang" id="lang2" onchange="this.form.submit();"
                                        title="ગુજરાતી" value="gj" class="text">ગુજરાતી</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar navbar-expand-sm bg-dark ">
        <div class="container-fluid">
            <i class="bi bi-list" id="bars" data-bs-target="#menu" data-bs-toggle="offcanvas"></i>
            <a href="" class="navbar-brand" id="logo" style="margin-left:0px;"></a>

            <img src="resources/img/logo1.png" width="394" height="50"
                alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">
            <!--        dropdown btn-->
            <div class="dropdown" id="drop_btn">
                <a class="btn  dropdown-toggle text" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Other
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item text" href="src/institute_school/Institute_school_registration.php"><span class="d-item">Institute/School Registration</span></a></li>
                    <li><a class="dropdown-item text" href="src/club/club_Registration.php"><span class="d-item">Club Registration</span> </a></li>
                    <li><a class="dropdown-item text" href="src/team/Team_Register.php"><span class="d-item">Team Registration</span> </a></li>
                    <li><a class="dropdown-item text" href="src/coach/coach_registration.php"><span class="d-item"> Coach Registration </span></a></li>
                    <li><a class="dropdown-item text" href="src/individual/individual_registration.php"><span class="d-item"> Individual Registration </span></a></li>
                </ul>
            </div>
            <a href="src/login.html" class="btn">
                <i class="bi bi-box-arrow-in-left" id="sign">
                </i>
            </a>

        </div>
    </div>

    <!--offcanvas-->
    <div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">

        <div class="offcanvas-header">
            <h1 class="offcanvas-title text">Menu</h1>
            <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="navbar-nav menu-list">
                <li class="nav-item"><a href="home.php" class="nav-link text-light menu-link text">Home</a></li>
                <li class="nav-item"><a href="src/Game_details.html" class="nav-link text-light menu-link text">Games</a>
                </li>
                <li class="nav-item"><a href="src/event_registration.php"
                        class="nav-link text-light menu-link text">Events</a></li>
                <li class="nav-item"><a href="src/Game_details.html" class="nav-link text-light menu-link text">Resources</a>
                </li>

                <li class="nav-item"><a href="src/blog.html" class="nav-link text-light menu-link text">Blog</a></li>
                <li class="nav-item"><a href="src/login.html" class="nav-link text-light menu-link text">Login</a></li>
                <li style="float:left">
                <input type="checkbox" id="toggleSwitch"><label for="toggleSwitch" class="text"> Voice Assistance</label>
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <i class="bi bi-telephone-inbound" id="call"></i>
            <h4 class="text-primary" class="text">Call us on: +91-7990122530</h4>
        </div>
    </div>
</head>
<body>
    <div class="gtranslate_wrapper"></div>

<!-- <div class="gtranslate_wrapper"></div> -->
    <!--navbar-->
    <div class="topStrip">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="leftLink">
                        <li><a href="index.php" title="Home">Home</a></li>
                        <li><a href="/feedbacks" title="Feedback">Feedback</a></li>
                        <li><a href="/coming-soon" title="FAQ's">FAQ's</a></li>
                        <li><a href="#contact" title="Contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <ul class="rightLinks">
                        <li class="mainSubject hide-in-ipad"><a tabindex="1" href="#main" class="skipContent"
                                title="Skip to Main Content">Skip to Main Content</a></li>
                        <li class="moveInBottom hide-in-ipad"><a href="/screen-reader-access"
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
                                <input type="button" onclick="changeBackground('white')" id="highContrastWhite" class="contrastChanger normal current"
                                    title="Standard View" autocomplete="off">
                                <input type="button" onclick="changeBackground('#567189')" id="highContrastBlack" class="contrastChanger wob"
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
                <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Login
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="src/institute_school/Institute_school_registration.php"><span class="d-item">Institute Registration</span></a></li>
                    <li><a class="dropdown-item" href="src/club/club_registration.php"><span class="d-item">Club Registration</span> </a></li>
                    <li><a class="dropdown-item" href="src/coach/coach_registration.php"><span class="d-item"> Coach Registration </span></a></li>
                    <li><a class="dropdown-item" href="src/individual/individual_registration.php"><span class="d-item"> Individual Registration </span></a></li>
                </ul>
            </div>
            <a href="src/login.html" class="btn">
                <i class="bi bi-box-arrow-in-left" id="sign">
                </i>
            </a>

        </div>
    </div>

    <!--offcanvas-->
<!--offcanvas-->
<!-- <div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">

<div class="offcanvas-header">
    <h1 class="offcanvas-title text">Menu</h1>
    <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
</div>

<div class="offcanvas-body">
    <ul class="navbar-nav menu-list">
        <li class="nav-item"><a href="home.php" class="text nav-link text-light menu-link">Home</a></li>
        <li class="nav-item"><a href="src/Game_details.html" class="text nav-link text-light menu-link " >Games</a></li>
        <li class="nav-item"><a href="Events.html" class="text nav-link text-light menu-link">Events</a></li>
        <li class="nav-item"><a href="src/Game_details.html" class="text nav-link text-light menu-link">Resources</a></li>
        
        <li class="nav-item"><a href="src/blog.html" class="text nav-link text-light menu-link">Blog</a></li>
        <li class="nav-item"><a href="src/login.html" class="text nav-link text-light menu-link">Login</a></li>
       
          <li style="float:left">
            <input type="checkbox" id="toggleSwitch">
<label for="toggleSwitch">voice Assistance</label>
           
        </li>
    </ul>
</div>
<div class="offcanvas-footer">
    <i class="bi bi-telephone-inbound" id="call"></i>  <h4 class="text-primary text">Call us on: +91-7990122530</h4>
</div>
</div> -->

<!--  -->
<div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">

<div class="offcanvas-header">
    <h1 class="offcanvas-title text">Menu</h1>
    <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
</div>

<div class="offcanvas-body">
    <ul class="navbar-nav menu-list">
        <li class="nav-item"><a href="index.php" class="text nav-link text-light menu-link">Home</a></li>
        <li class="nav-item"><a href="src/details.php" class="text nav-link text-light menu-link " >Games</a></li>
        <li class="nav-item"><a href="scheduling/event.php" class="text nav-link text-light menu-link">Events</a></li>
        <li class="nav-item"><a href="src/details.php" class="text nav-link text-light menu-link">Resources</a></li>
        
        <li class="nav-item"><a href="src/blog.html" class="text nav-link text-light menu-link">Blog</a></li>
        <li class="nav-item"><a href="src/login.php" class="text nav-link text-light menu-link">Login</a></li>
        <li class="nav-item"><a href="src/news1.php" class="text nav-link text-light menu-link">News</a></li>
        <li class="nav-item"><a href="certificate-generator/index.php" class="text nav-link text-light menu-link">Certificate Generator</a></li>
        <li class="nav-item"><a href="scoreboard/xyz.html" class="text nav-link text-light menu-link">Score Board</a></li>
        <li class="nav-item"><a href="stt/STT.html" class="text nav-link text-light menu-link">Speech to Text</a></li>
        <li class="nav-item"><a href="tutorial/tutorial.php" class="text nav-link text-light menu-link">Tutorial Videos</a></li>


          <li style="float:left">
            <input type="checkbox" id="toggleSwitch">
            <label for="toggleSwitch">voice Assistance</label>
           
        </li>
    </ul>
</div>
<div class="offcanvas-footer">
    <i class="bi bi-telephone-inbound" id="call"></i>  <h4 class="text-primary text">Call us on: +91-7990122530</h4>
</div>
</div>
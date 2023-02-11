
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/style.css" />
  <title class="text">Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>

  <div class="fixed-top">
    <div class="topStrip">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <ul class="leftLink">
              <li><a href="/" title="Home" class="text">Home</a></li>
              <li><a href="/feedbacks" title="Feedback" class="text">Feedback</a></li>
              <li><a href="/coming-soon" title="FAQ's" class="text">FAQ's</a></li>
              <li><a href="/contact-us" title="Contact" class="text">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-7">
            <ul class="rightLinks">
              <li class="mainSubject hide-in-ipad"><a tabindex="1" href="#main" class="skipContent text"
                  title="Skip to Main Content">Skip to Main Content</a></li>
              <li class="moveInBottom hide-in-ipad"><a href="/screen-reader-access" title="Screen Reader Access" class="text">Screen
                  Reader Access</a></li>
              <li class="fontResize hide-in-ipad">
                <div id="accessControl" class="textResizeWrapper cf">
                  <input type="button" name="font_normal" value="A-" id="font_normal" title="Decrease Font Size"
                    class="fontScaler normal font-normal" autocomplete="off">
                  <input type="button" name="font_normal" value="A" id="font_large" title="Normal Font Size"
                    class="fontScaler large font-large current" autocomplete="off">
                  <input type="button" name="font_larger" value="A+" id="font_larger" title="Increase Font Size"
                    class="fontScaler larger font-larger" autocomplete="off">
                  <input type="button" id="highContrastWhite" class="contrastChanger normal current"
                    title="Standard View" autocomplete="off">
                  <input type="button" id="highContrastBlack" class="contrastChanger wob" title="High Contrast View"
                    autocomplete="off">
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
                  <form enctype="multipart/form-data" method="post" accept-charset="utf-8" id="frmlang" name="frmlang"
                    data-bv-message="This value is not valid" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                    data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" autocomplete="off">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST"
                        autocomplete="off"><input type="hidden" name="_csrfToken" autocomplete="off"
                        id="_csrfToken_1674547338.769"
                        value="EOmmdAEGVlHERC99PoTxzm5+kTz5pCBnlFc9ztKL/r3ucrbT5RTmOa+wH56gyy/WUrofequdfQyThx9RK8nmIA==">
                    </div> <button class="languageBtn text-uppercase" name="lang" id="lang1" onchange="this.form.submit();"
                      title="English" value="en" >English</button>
                    <span class="text-white">|</span>
                    <button class="languageBtn text" name="lang" id="lang2" onchange="this.form.submit();" title="ગુજરાતી"
                      value="gj">ગુજરાતી</button>
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

        <div class="collapse navbar-collapse" id="topNavBar">
          <i class="bi bi-list" id="bars" data-bs-target="#menu" data-bs-toggle="offcanvas"></i>
          &nbsp;&nbsp;
          
          <img src="./images/logo.png" width="310" height="50" alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">

          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#" class="text">"Club"</a></li>
                <li><a class="dropdown-item" href="#" class="text">"Change Password"</a></li>
                <li>
                  <a class="dropdown-item" href="#" class="text">"Logout"</a>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title text">Menu</h1>
      <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
    </div>

    <ul class="navbar-nav">
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 text">
          CORE
        </div>
      </li>
      <li>
        <a href="#" class="nav-link px-3 active">
          <span class="me-2"><i class="bi bi-speedometer2"></i></span>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link px-3 active">
          <span class="me-2"><i class="bi bi-house-fill"></i></span>
          <span class="text">Home</span>
        </a>
      </li>
      <li class="my-4">
        <hr class="dropdown-divider bg-light" />
      </li>
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 mb-3 text">
          Interface
        </div>
      </li>
      <li>
        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
          <span class="me-2"><i class="bi bi-layout-split"></i></span>
          <span class="text">Layouts</span>
          <span class="ms-auto">
            <span class="right-icon">
              <i class="bi bi-chevron-down"></i>
            </span>
          </span>
        </a>
        <div class="collapse" id="layouts">
          <ul class="navbar-nav ps-3">
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span class="text">Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="#" class="nav-link px-3">
          <span class="me-2"><i class="bi bi-book-fill"></i></span>
          <span class="text">Pages</span>
        </a>
      </li>
      <li class="my-4">
        <hr class="dropdown-divider bg-light" />
      </li>
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 mb-3 text">
          Addons
        </div>
      </li>
      <li>
        <a href="#" class="nav-link px-3">
          <span class="me-2"><i class="bi bi-graph-up"></i></span>
          <span class="text">Charts</span>
        </a>
      </li>
      <li>
        <a href="#" class="nav-link px-3">
          <span class="me-2"><i class="bi bi-table"></i></span>
          <span class="text">Tables</span>
        </a>
      </li>
    </ul>

  </div>

  <div class="portfolio">
    <img src="./images/img_avatar.png" alt="Avatar"
      style="border-radius: 50%; height: 200px; width: 200px; display: block; margin-left: auto; margin-right: auto;"><br><br>

    <p style="text-align: justify; font-size: large; padding: 0 300px;">
      CLUB:
      <!-- <?php echo $_SESSION['username']; ?>  --><br>
      ID:
      <!-- <?php echo $_SESSION['name']; ?>  --><br>
      E-mail:
      <!-- <?php echo $_SESSION['email']; ?> --><br>
    </p>
  </div>

  <!-- offcanvas -->
  <main class="mt-5 pt-3 main-class">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text">Dashboard</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="card bg-primary text-white h-100">
            <div class="card-body py-5" class="text">Primary Card</div>
            <div class="card-footer d-flex text">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-warning text-dark h-100">
            <div class="card-body py-5 text">Warning Card</div>
            <div class="card-footer d-flex text">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-success text-white h-100">
            <div class="card-body py-5 text">Success Card</div>
            <div class="card-footer d-flex text">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card bg-danger text-white h-100">
            <div class="card-body py-5 text">Danger Card</div>
            <div class="card-footer d-flex text">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    
      <!-- COACH DETAILS  -->
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span class="text"> Coach Details
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th class="text">Name</th>
                      <th class="text">Role</th>
                      <th class="text">Age</th>
                      <th class="text">E-mail</th>
                      <th class="text"> Contact</th>
                      <th class="text">Profile</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text">Mer Hiren</td>
                      <td class="text">Head Coach </td>
                      <td class="text">42</td>
                      <td class="text">M.Hiren_10@gmail.com</td>
                      <td class="text">9956847832</td>
                      <td class="text">M.Hiren_10</td>
                    </tr>
                    <tr>
                      <td class="text">Bhatt Maharsh</td>
                      <td class="text">Senior coach</td>
                      <td class="text">40</td>
                      <td class="text">B.Maharsh_18@gmail.com</td>
                      <td class="text">7044726969</td>
                      <td class="text">B.Maharsh_18</td>
                    </tr>
                    
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- player Details -->
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span class="text"> Player Details
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th class="text">Name</th>
                      <th class="text">Role</th>
                      <th class="text">Age</th>
                      <th class="text">E-mail</th>
                      <th class="text"> Contact</th>
                      <th class="text">Profile</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text">Thakkar Smit</td>
                      <td class="text">Batsmen (c)</td>
                      <td class="text">21</td>
                      <td class="text">t.smit170360@gmail.com</td>
                      <td class="text">7990122530</td>
                      <td class="text">t.smit_360</td>
                    </tr>
                    <tr>
                      <td class="text">Kanjani Vansh</td>
                      <td class="text">Batsmen (vc)</td>
                      <td class="text">21</td>
                      <td class="text">kanjanivansh.12@gmail.com</td>
                      <td class="text">7069711287</td>
                      <td class="text">k.Vansh_12</td>
                    </tr>
                    <tr>
                      <td class="text">Ramvwani Harsh</td>
                      <td class="text">All-Rounder</td>
                      <td class="text">21</td>
                      <td class="text">Ramwani_harsh_17@gmail.com</td>
                      <td class="text">9978676386</td>
                      <td class="text">R.Harsh_17</td>
                    </tr>
                    <tr>
                      <td class="text">Zala Rikin</td>
                      <td class="text">Bowler</td>
                      <td class="text">20</td>
                      <td class="text">R_Zala_21@gmail.com</td>
                      <td class="text">9327409238</td>
                      <td class="text">z.Rikin_21</td>
                    </tr>
                    <tr>
                      <td class="text">Zala Jaynil</td>
                      <td class="text">Bowler</td>
                      <td class="text">22</td>
                      <td class="text">Z_Jaynil_7@gmail.com</td>
                      <td class="text">9825052707</td>
                      <td class="text">Z.Jaynil_7</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script> 

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});
</script>
  <script src="./js/script.js"></script>

  <footer id="footer" class="footer">
    <div class="footer-box">
      <div class="frow">
        <div class="fcol">
          <h4 class="fhead text">Highlights</h4>
          <ul>
            <li><a href="" class="text">About Us</a></li>
            <li><a href="" class="text">Games</a></li>
            <li><a href="" class="text">Contact</a></li>
            <li><a href="" class="text">Careers</a></li>
          </ul>
        </div>
        <div class="fcol">
          <h4 class="fhead text">Events</h4>
          <ul>
            <li><a href="" class="text">Faq</a></li>
            <li><a href="" class="text">Blog</a></li>
            <li><a href="" class="text">Help and Support</a></li>
            <li><a href="" class="text">Disclaimer</a></li>
            <li><a href="" class="text">Developer APIs</a></li>
          </ul>
        </div>
        <div class="fcol">
          <h4 class="fhead text">Legal</h4>
          <ul>
            <li><a href="" class="text">Privacy Policy</a></li>
            <li><a href="" class="text">Terms of Services</a></li>
            <li><a href="" class="text">Copyright Policy</a></li>
            <li><a href="" class="text">Accesibility Statements</a></li>
            <li><a href="" class="text">Disclaimer</a></li>
          </ul>
        </div>
        <div class="fcol">
          <h4 class="fhead text">Social Connect</h4>
          <ul class="socials">
            <li class="list-item">
              <a href="">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li class="list-item">
              <a href="">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-item">
              <a href="">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-item">
              <a href="">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
            <li class="list-item">
              <a href="">
                <i class="fa fa-pinterest"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="fcol contact">
          <h4 class="fhead text">Contact Us</h4>
          <address class="text address">
            Sports, Youth & Cultural Activities Department<br>
            Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan <br> Sector - 10, Gandhinagar.
          </address>
          <div class="site">
            <a href="#home" class="text">www.khelmahakumbh.gov.in</a>
          </div>
        </div>
      </div>
    </div>
    <p class="text">&lt;&lt;&lt;&copy;Sports Authority of Gujarat<br>Sports, Youth and Cultural Activities Department , Government of
      Gujarat&gt;&gt;&gt;</p>
  </footer>
</body>

</html>
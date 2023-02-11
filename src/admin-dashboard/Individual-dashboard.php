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
              <li class="mainSubject hide-in-ipad"><a tabindex="1" href="#main" class="skipContent"
                  title="Skip to Main Content" class="text">Skip to Main Content</a></li>
              <li class="moveInBottom hide-in-ipad"><a href="/screen-reader-access" title="Screen Reader Access"
                  class="text">Screen
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
                    </div> <button class="languageBtn text" name="lang" id="lang1" onchange="this.form.submit();"
                      title="English" value="en">English</button>
                    <span class="text-white">|</span>
                    <button class="languageBtn text" name="lang" id="lang2" onchange="this.form.submit();"
                      title="ગુજરાતી" value="gj">ગુજરાતી</button>
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

          <img src="./images/logo.png" width="310" height="50"
            alt="Khel Mahakumbh | Sports Authority of Gujarat | Government of Gujarat">

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
                <li><a class="dropdown-item text" href="#">"Username"</a></li>
                <li><a class="dropdown-item text" href="#">"Change Password"</a></li>
                <li>
                  <a class="dropdown-item text" href="#">"Logout"</a>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas  -->
  <div id="menu" class="offcanvas offcanvas-start bg-dark text-light d-flex flex-column text-center ">
    <div class="offcanvas-header">
      <h1 class="offcanvas-title text">Menu</h1>
      <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
    </div>

    <ul class="navbar-nav">
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 tetx">
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
        <div class="text-muted small fw-bold text-uppercase px-3 mb-3 tetx">
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

    <p style="text-align: justify; font-size: large; padding: 0 300px;" class="text">
      Username: Thakkar smit
      <!-- <?php echo $_SESSION['username']; ?>  --><br>
      Name:
      <!-- <?php echo $_SESSION['name']; ?>  --><br>
      Email:
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
            <div class="card-body py-5 text">Primary Card</div>
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
            <div class="text card-footer d-flex">
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
            <div class="text card-footer d-flex">
              View Details
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span class="text">
              Performance Analysis
            </div>
            <div class="card-body">
              <canvas class="chart1" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span class="text">
              Shots Analysis
            </div>
            <div class="card-body">
              <canvas class="chart2" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span class="text"> Data Table
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped data-table" style="width: 100%">
                  <thead>
                    <tr>
                      <th class="text">Sports</th>
                      <th class="text">Matches</th>
                      <th class="text">Age</th>
                      <th class="text">contact</th>
                      <th class="text">Coach</th>
                      <th class="text">Club/Institute</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text">cricket</td>
                      <td class="text">100</td>
                      <td class="text">21</td>
                      <td class="text">7990122530</td>
                      <td class="text">Hiren Mer</td>
                      <td class="text">Indus</td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
$conn = mysqli_connect("localhost", "root", "", "khelmahakumbh");

// fetching runs

$query = "SELECT Runs FROM cricket";
$result = mysqli_query($conn, $query);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row["Runs"];
}

// fetching balls

  $query1 = "SELECT Balls FROM cricket";
  $result1 = mysqli_query($conn, $query1);
  
  $data1 = array();
  while($row1 = mysqli_fetch_assoc($result1)){
    $data1[] = $row1["Balls"];
  }
mysqli_close($conn);

$conn1 = mysqli_connect("localhost", "root", "", "khelmahakumbh");

// fetching BackFoot

$query2 = "SELECT BackFoot FROM shots";
$result2 = mysqli_query($conn1, $query2);

$data2 = array();
while($row2 = mysqli_fetch_assoc($result2)) {
    $data2[] = $row2["BackFoot"];
}

// fetching FrontFoot

  $query3 = "SELECT FrontFoot FROM shots";
  $result3 = mysqli_query($conn1, $query3);
  
  $data3 = array();
  while($row3 = mysqli_fetch_assoc($result3)){
    $data3[] = $row3["FrontFoot"];
  }

  // fetching CoverDrive

  $query4 = "SELECT CoverDrive FROM shots";
  $result4 = mysqli_query($conn1, $query4);
  
  $data4 = array();
  while($row4 = mysqli_fetch_assoc($result4)){
    $data4[] = $row4["CoverDrive"];
  }

  // fetching Pull

  $query5 = "SELECT Pull FROM shots";
  $result5 = mysqli_query($conn1, $query5);
  
  $data5 = array();
  while($row5 = mysqli_fetch_assoc($result5)){
    $data5[] = $row5["Pull"];
  }
  // fetching StraightDrive

  $query6 = "SELECT StraightDrive FROM shots";
  $result6 = mysqli_query($conn1, $query6);
  
  $data6 = array();
  while($row6 = mysqli_fetch_assoc($result6)){
    $data6[] = $row6["StraightDrive"];
  }
  // fetching Miss

  $query7 = "SELECT Miss FROM shots";
  $result7 = mysqli_query($conn1, $query7);
  
  $data7 = array();
  while($row7 = mysqli_fetch_assoc($result7)){
    $data7[] = $row7["Miss"];
  }
mysqli_close($conn1);
 ?>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script>
    const charts = document.querySelectorAll(".chart1");
    // calling runs js
    var Runs1 = < ? php echo json_encode($data[0]); ? > ;
    var Runs2 = < ? php echo json_encode($data[1]); ? > ;
    var Runs3 = < ? php echo json_encode($data[2]); ? > ;
    var Runs4 = < ? php echo json_encode($data[3]); ? > ;
    var Runs5 = < ? php echo json_encode($data[4]); ? > ;
    var Runs6 = < ? php echo json_encode($data[5]); ? > ;
    var Runs7 = < ? php echo json_encode($data[6]); ? > ;
    var Runs8 = < ? php echo json_encode($data[7]); ? > ;
    var Runs9 = < ? php echo json_encode($data[8]); ? > ;

    // calling balls js
    var Balls1 = < ? php echo json_encode($data1[0]); ? > ;
    var Balls2 = < ? php echo json_encode($data1[1]); ? > ;
    var Balls3 = < ? php echo json_encode($data1[2]); ? > ;
    var Balls4 = < ? php echo json_encode($data1[3]); ? > ;
    var Balls5 = < ? php echo json_encode($data1[4]); ? > ;
    var Balls6 = < ? php echo json_encode($data1[5]); ? > ;
    var Balls7 = < ? php echo json_encode($data1[6]); ? > ;
    var Balls8 = < ? php echo json_encode($data1[7]); ? > ;
    var Balls9 = < ? php echo json_encode($data1[8]); ? > ;

    charts.forEach(function (chart) {
      var ctx = chart.getContext("2d");
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: [Balls1, Balls2, Balls3, Balls4, Balls5, Balls6, Balls7, Balls8, Balls9],
          datasets: [{
            label: "Past 9 innings score (x-axis:Balls, y-axis:Runs)",
            data: [Runs1, Runs2, Runs3, Runs4, Runs5, Runs6, Runs7, Runs8, Runs9],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(255, 159, 64, 0.2)",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderWidth: 1,
          }, ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    });

    const charts1 = document.querySelectorAll(".chart2");
    // calling Backfoot js
    var B_Foot = < ? php echo json_encode($data2[0]); ? > ;

    // calling Frontfoot js
    var F_Foot = < ? php echo json_encode($data3[0]); ? > ;

    // calling CoverDrive js
    var C_Drive = < ? php echo json_encode($data4[0]); ? > ;

    // calling Pull js
    var Pull = < ? php echo json_encode($data5[0]); ? > ;

    // calling StraightDrive js
    var S_Drive = < ? php echo json_encode($data6[0]); ? > ;

    // calling Miss js
    var Miss = < ? php echo json_encode($data7[0]); ? > ;

    charts1.forEach(function (chart) {
      var ctx = chart.getContext("2d");
      var myChart = new Chart(ctx, {
        type: "pie",
        data: {
          labels: ["BackFoot", "FrontFoot", "CoverDrive", "Pull", "StraightDrive", "Miss"],
          datasets: [{
            label: "Past 9 innings score (x-axis:Balls, y-axis:Runs)",
            data: [B_Foot, F_Foot, C_Drive, Pull, S_Drive, Miss],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(255, 206, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(255, 159, 64, 0.2)",
            ],
            borderColor: [
              "rgba(255, 99, 132, 1)",
              "rgba(54, 162, 235, 1)",
              "rgba(255, 206, 86, 1)",
              "rgba(75, 192, 192, 1)",
              "rgba(153, 102, 255, 1)",
              "rgba(255, 159, 64, 1)",
            ],
            borderWidth: 1,
          }, ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    });

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
          <h4 class="fhead">Events</h4>
          <ul>
            <li><a href="" class="text">Faq</a></li>
            <li><a href="" class="text">Blog</a></li>
            <li><a href="" class="text">Help and Support</a></li>
            <li><a href="" class="text">Disclaimer</a></li>
            <li><a href="" class="text">Developer APIs</a></li>
          </ul>
        </div>
        <div class="fcol">
          <h4 class="fhead">Legal</h4>
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
    <p class="text">&lt;&lt;&lt;&copy;Sports Authority of Gujarat<br>Sports, Youth and Cultural Activities Department ,
      Government of
      Gujarat&gt;&gt;&gt;</p>
  </footer>
</body>

</html>
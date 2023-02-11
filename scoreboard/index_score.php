<!Doctype html>
<html>
  <body>
  
  <section class="pricing">
      
      
      <div class="row_3">
        <div class="column_3">
          <div class="main_">
            <div class="plan_1">
              <h1 style="margin-left:375px;margin-top:0px;background-color:#51ed51;color:#161bff;height:40px;display:flex;float:left; width:120px;font-size:28px;padding-top:12px;padding-left:12px;box-shadow:4px 3px #2d2727; "> Score :<span class="pla" ><?php
$servername="localhost";
$username="root";
$password="";
$dbname="aura";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM up1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_row($result)) {
echo $row[1];
}
}

mysqli_close($conn);
?></span></h1>

<div class="row_3">
        <div class="column_3">
          <div class="main_">
            <div class="plan_1">
              <h1 style="margin-left:10px;margin-top:100px;background-color:#51ed51;color:#161bff;height:40px;width:140px;display:flex; font-size:28px;padding-top:12px;padding-left:12px;box-shadow:4px 3px #2d2727;"> Wicket :<span class="pla" ><?php
$servername="localhost";
$username="root";
$password="";
$dbname="aura";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM up1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_row($result)) {
echo $row[2];
}
}

mysqli_close($conn);
?></span></h1>


                <div class="core_paln1">
                  <h5 style="margin-left:375px;margin-top:-17px;background-color:#51ed51;color:#161bff;height:46px;width:285px;display:flex;float:left; font-size:34px;justify-content:center;box-shadow:4px 3px #2d2727;">Team 1</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="column_3">
          <div class="main_1">
            <div class="plan_2">
              <h1 style="margin-left:20px;margin-top:-75px;background-color:red;color:#161bff;height:40px;display:flex;float:left; width:120px;font-size:28px;padding-top:12px;padding-left:12px;box-shadow:4px 3px #2d2727;">Score :<span class="pla2"><?php
$servername="localhost";
$username="root";
$password="";
$dbname="aura";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM up1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_row($result)) {
echo $row[3];
}
}

mysqli_close($conn);
?> </span></h1>
      <div class="row_3">
        <div class="column_3">
          <div class="main_">
            <div class="plan_1">
              <h1 style="margin-left:3px;margin-top:-75px;background-color:red;color:#161bff;height:40px;display:flex;float:left; width:140px;font-size:28px;padding-top:12px;padding-left:12px;box-shadow:4px 3px #2d2727;"> Wicket :<span class="pla" ><?php
$servername="localhost";
$username="root";
$password="";
$dbname="aura";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM up1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_row($result)) {
echo $row[4];
}
}

mysqli_close($conn);
?></span></h1>

              <div class="core_p">
                <span style="margin-left:-288px;margin-top:-17px;background-color:red;color:#161bff;height:46px;display:flex;float:left; width:290px;font-size:34px;justify-content:center;;box-shadow:4px 3px #2d2727;">Team 2</span>

                <div class="core_p1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
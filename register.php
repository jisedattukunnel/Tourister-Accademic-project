<?php
session_start();
if($_SESSION["id"]>0){
}
else{
	header("Location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-dark" id="ftco-navbar" style="background-color: #f85959;color: #fff;">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tourister</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav" >
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="signin.php" class="nav-link"><span>Account</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br>
<form action="services/reg-process.php" method="POST" enctype="multipart/form-data" role="register">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <h3>Register Your Business</h3>
    <br>
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" placeholder="Business Name">
            </div>

            <div class="form-group">

            <?php
              $con=mysqli_connect("localhost","root","");
              mysqli_select_db($con, "tourister");
              $sql=mysqli_query($con, "SELECT id, category FROM category");
              if(mysqli_num_rows($sql)){
              $select= '<select name="select">';
              while($rs=mysqli_fetch_array($sql))
              {
                    $select.='<option value="'.$rs['category'].'">'.$rs['category'].'</option>';
              }
              }
              $select.='</select>';
              ?>

            <select  class="form-control" id="category" name="category">
              <option value="">Select Category</option>
              <option value="<?php echo $select; ?> </option>
            </select>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Id" required>
            </div>

            <div  class="form-group">
              <input type="tel" id="phonenum" pattern="^\d{11}$" class="form-control" name="phone" id="phone" placeholder="Telephone (With STD code)" >
            </div>

            <div class="form-group">
              <input type="tel" id="phonenum" pattern="^\d{10}$" class="form-control" name="mobile" id="mobile" placeholder="Mobile" required>
            </div>

            <div class="form-group">
              <input type="text" cols="30" rows="7" name="description" class="form-control" placeholder="Description">
              </div>

              <div class="form-group">
                <input type="text" cols="30" rows="3" name="more" class="form-control" placeholder="More Informarion">
              </div>

    </div>

    <div class="col-sm-6">
    <h3>Address</h3>
            <br>

            <div class="form-group">
              <input  type="text" class="form-control" name="post" id="post" placeholder="Post" required>
            </div>

            <div class="form-group">
              <input  type="text" class="form-control" name="street" id="street" placeholder="Street" required>
            </div>

            <div class="form-group">
              <input  type="text" class="form-control" name="village" id="village" placeholder="Village" required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="district" id="district" placeholder="District"required>
            </div>

            <div class="form-group">
              <input  type="number" class="form-control" name="pin" id="pin" placeholder="Pin" required>
            </div>

            <div class="form-group">

            <select  class="form-control" id="spot" name="spot">
              <option value="">Select Tourist Spot</option>
              <option value="

            <?php

              $sql=mysqli_query($con, "SELECT id, place FROM place");
              if(mysqli_num_rows($sql)){
              $select= '<select name="select">';
              while($rs=mysqli_fetch_array($sql))
              {
                    $select.='<option value="'.$rs['place'].'">'.$rs['place'].'</option>';
              }
              }
              $select.='</select>'; echo $select; ?> </option>
            </select>
            </div>

           <br><br>
            <h3>Available Time</h3>
            <br>


            <div class="form-group">
              <label for="from">From:</label>
              <input  type="time" class="form-control" name="timefrom" id="timefrom" placeholder="From" required>
            </div>

            <div class="form-group">
              <label for="to">To:</label>
              <input type="time" class="form-control" name="timeto" id="timeto" placeholder="To" required>
            </div>

            <br><br>
            <hr>

            <div class="form-group">
              <label for="to">Image</label>
              <input type="file" class="form-control" name="file"  enctype="multipart/form-data" required>
            </div>


            <br>
            <input type="checkbox" name="checkbox" required>&nbsp;&nbsp;I agree to the <a href="t&c.php">Terms & Conditions</a><br><br>
            <input type="submit" id="register" name="register" class="btn btn-primary" style="border-radius:0px;">
            <br><br>

    </div>

  </div>
</div>
</form>



        </div>
    </div>
    </form>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tourister</h2>
              <p>Tourister is a Tourist Guide Website that gives suppot for Tourists from other places.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="t&c.php" class="py-2 d-block">Terms and Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="about.php" class="py-2 d-block">How it works</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 8547983028</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">tourister@tourister.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Tourister</p>
          </div>
        </div>
      </div>
    </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/range.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>

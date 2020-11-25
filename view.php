<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          <li class="nav-item cta"><a href="signin.php" class="nav-link"><span>Account</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

    <?php
    $db = new mysqli("localhost","root","","tourister");
    $query = "SELECT * FROM register WHERE id = '".$_GET['id']."'";
    $sql = $db->query($query);
    ?>
		<?php while($row = $sql->fetch_assoc()): ?>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(services/uploads/<?php echo $row['image']; ?> ); height:350px;"></div>
          				</div>
          			</div>
              </div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                      <h1><?php echo $row['name']; ?></h1>
                      <h4 class="icon icon-timer">&nbsp;<?php echo $row['timefrom']; ?> to <?php echo $row['timeto']; ?><h4>
                        <br>
                      <p><?php echo $row['description']; ?></p>
                      <hr>
                      <div class="d-md-flex mt-5 mb-5">
    							<ul>
	    							<h3>Contact Details</h3>
                    <br>
                  <ul>
                    <li><span class="icon icon-mobile">&nbsp;&nbsp;</span><span class="text"><?php echo $row['mobile']; ?></span></li>
                    <li><span class="icon icon-phone">&nbsp;&nbsp;</span><span class="text"><?php echo $row['phone']; ?></span></li>
                    <li><span class="icon icon-envelope">&nbsp;&nbsp;</span><span class="text"><?php echo $row['email']; ?></span></li>
                  </ul>

	    						</ul>
                  <hr>
	    						<ul class="ml-md-5">
                    <h3>Address</h3>
                    <br>
	    							<li><?php echo $row['post']; ?> </li>
	    							<li><?php echo $row['street']; ?></li>
	    							<li><?php echo $row['village']; ?></li>
                    <li><?php echo $row['district']; ?></li>
                    <li><?php echo $row['pin']; ?></li>
	    						</ul>
    						</div>
                <hr>
                <h4>More about us</h4>
      						<p><?php echo $row['more']; ?></p>
          		</div>

          	</div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section>
    <?php endwhile; ?>
    <?php
    pre_r($sql ->fetch_assoc());
    function pre_r($array){
    print_r($array);
    }
    ?>

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
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>

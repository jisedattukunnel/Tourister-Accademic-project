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
    <title>Profile</title>
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
          <li class="nav-item cta"><a href="services/logout.php" class="nav-link"><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
<br><br>
	</div>
	</div>
	</div>
	</div>

	<div class="container">
		<div class="card">
			<div class="card-header">
        <div class="row block-9">
          <div class="col-md-2 pr-md-5">
						<img src="images/img_avatar.png"   style="vertical-align: middle; width: 180px; height: 180px; border-radius: 50%; ">

					</div>
					<div style="margin-left: 70px;" class="col-md-4 pr-md-5">
						<h4><?php echo $_SESSION["name"] ?><h4>
						<p><?php echo $_SESSION["email"] ?></p>
						<p><?php echo $_SESSION["mobile"] ?></p>
					</div>

          <div class="col-md-6 heading-section ftco-animate" align="right">
						<a href="register.php"><input type="submit" id="login" name="login" class="btn btn-primary" value="Add New	Business" style="border-radius:0px;"></a>
						<a href="edit-profile.php"><input type="submit" id="login" name="login" class="btn btn-primary" value="Edit Profile" style="border-radius:0px;"></a>
					</div>
    		</div>
			</div>
		</div>
	</div>
<br>
<br>
<div class="container">
<h1>Registered Businesses</h1>
<div class="row">
						<?php
              $db = new mysqli("localhost","root","","tourister");
              $query = "SELECT * FROM register WHERE userid = '".$_SESSION["id"]."'";
              $sql = $db->query($query);
              ?>
						<?php while($row = $sql->fetch_assoc()): ?>
          		<div class="col-md-3 ftco-animate">
		    				<div class="destination">
		    					<a href="" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(services/uploads/<?php echo $row['image']; ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
                        <h3><a href="#"><?php echo $row['name']; ?></a></h3>
                        <p><?php echo $row['category']; ?></p>
			    						</div>
		    						</div>
										<p>Phone :<?php echo $row['phone']; ?></p>
										<p>Email :<?php echo $row['email']; ?></p>
		    						<p class="days">Working : <span><?php echo $row['timefrom']; ?> to <?php echo $row['timeto']; ?></span></p>
		    						<hr>
		    						<p class="bottom-area d-flex">
											<?php echo "<a href='services/delete-business.php?id=".$row['id']."'>&nbsp;&nbsp;<span>Delete</span></a>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<?php echo "<a href='edit-business.php?id=".$row['id']."'>&nbsp;&nbsp;<span>edit</span></a>"; ?>

											
                      <td></td>
		    						</p>
		    					</div>
		    				</div>
		    			</div>

              <?php endwhile; ?>
              <?php
                pre_r($sql ->fetch_assoc());
              function pre_r($array){
                print_r($array);
              }
              ?>

						</div>
            </div>

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

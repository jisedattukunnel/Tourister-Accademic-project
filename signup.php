<?php
session_start();
$_SESSION['message'] = '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
<br><br>
<div class="container">
  <h1><?php echo $_SESSION['message'];?></h1>
  <h2>Sign Up</h2>
  <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="services/process.php" id="your-form" class="myForm" method="POST" role="register">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Id" name="email" required>
              </div>
              <div class="form-group">
                <input type="tel" id="phonenum"  class="form-control" pattern="^\d{10}$" placeholder="Mobile" name="phone" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" oninput="checkPasswords()" name="passworda" id="passworda" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirn Password" oninput="checkPasswords()" id="password" name="password" required>
              </div>
              <div class="form-group">
                
                <input type="checkbox" name="checkbox" required>&nbsp;&nbsp;I agree to the <a href="t&c.php">Terms & Conditions</a><br><br>
              </div>
               <ul id="result-msg"></ul>
              <div class="form-group">
              <input type="submit" id="register" name="register" value="Sign Up" class="btn btn-primary" style="border-radius:0px;">
              </div>
            </form>
            <div class="checkbox">
              <label>Allready have an Account ? &nbsp<a href="signin.php">Log In</a></label>
            </div>

          </div>
            <div class="col-md-6 heading-section ftco-animate">
              <h2 class="mb-4 pb-3"><strong>Tourister</strong> account</h2>
              <p>You can register and create your Tourister profile by signing up with your Name, Mobile Number and Email address. A Tourister account allows to create your profile. It allows you to add your business and make it available for the public.</p>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <br><br>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>

  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      var the_form = document.querySelector( '#your-form');
      var at_least_chars = 8;
      var the_pass = document.querySelector( '#passworda');
      var the_repeat_pass = document.querySelector( '#password');
      var the_result = document.querySelector( '#result-msg');
      the_form.addEventListener('submit', function( event ) {
        var local_results = '';
        if ( the_pass.value.length < at_least_chars ) {
          local_results += '<li>Your password should have ' + at_least_chars + ' characters</li>';
        }
        if ( the_pass.value !== the_repeat_pass.value ) {
          local_results += '<li>Passwords do not match</li>';
        }
        if ( local_results !== '' ) {
          event.preventDefault();
          the_result.innerHTML = local_results;
        } else {
          the_result.innerHTML = '';
        }
      });
    });
</script>
</html>

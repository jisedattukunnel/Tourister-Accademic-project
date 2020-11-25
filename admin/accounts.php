<?php
session_start();
if($_SESSION["id"]>0){
}
else{
  header("Location:signin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tourister Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourister";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM signup where id=".$_GET['id'];
if ($conn->query($sql) === TRUE)
{
    echo "Record updated successfully";
    header("Location:accounts.php");
}
else
{
    echo "Error updating record: " . $conn->error;
}
}
?>

<div class="wrapper">
  <header class="main-header">
    <a href="adminhome.php" class="logo">
      <span class="logo-mini"><b>Adm</b></span>
      <span class="logo-lg"><b>Tourister </b>Admin</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/img_avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/img_avatar.png" class="img-circle" alt="User Image">
                <p>Admin</p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/img_avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="approvals.php">
            <i class="fa fa-edit"></i> <span>Approvals</span>
          </a>
        </li>

        <li>
          <a href="accounts.php">
            <i class="fa fa-th"></i> <span>Accounts</span>
          </a>
        </li>

        <li>
          <a href="place.php">
            <i class="fa fa-th"></i> <span>Place</span>
          </a>
        </li>

        <li>
          <a href="category.php">
            <i class="fa fa-th"></i> <span>Category</span>
          </a>
        </li>

        <li>
          <a href="messages.php">
            <i class="fa fa-envelope"></i> <span>Messages</span>
          </a>
        </li>

    </section>
  </aside>
</section>
    <section class="content">
      <div class="row">
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container">
            <h1>Total registered accounts</h1>
            <br><br>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>mobile</th>
                </tr>
            </thead>
        <?php
        $con=  mysqli_connect("localhost", "root", "", "tourister");
        if(!$con)
        {
           die('not connected');
        }
        $con=  mysqli_query($con, "select * from signup");

        while($row=  mysqli_fetch_array($con))
        {
        ?>

         <tbody>
           <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            
              <td><?php echo "<a href='adminservices/delete-account.php?id=".$row['id']."'>&nbsp;&nbsp; <span>Delete</span></a>"; ?></td>
            </form>

          </tr>
          <?php
          {}
          }
          ?>
          </tbody>
         </table>
        </div>
      </div>
    </section>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2019 <a href="">Toirister Admin</a>.</strong>
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="bower_components/Chart.js/Chart.js"></script>
  <script src="dist/js/pages/dashboard2.js"></script>
  <script src="dist/js/demo.js"></script>
</body>
</html>

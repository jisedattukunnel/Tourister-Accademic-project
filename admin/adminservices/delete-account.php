<?php
$con= mysqli_connect("localhost" ,"root","" , "tourister" );
if (!$con)
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM register where userid=".$_GET['id']);
?>
<?php
header("Location:./../accounts.php");
?>


<?php
$con= mysqli_connect("localhost" ,"root","" , "tourister" );
if (!$con)
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM signup where id=".$_GET['id']);
?>
<?php
header("Location:./../accounts.php");
?>

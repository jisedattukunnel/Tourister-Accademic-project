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
	<title>delete</title>
</head>
<body>
	<center>

<?php
$con= mysqli_connect("localhost" ,"root","qwerty" , "tourister" );
if (!$con)
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM register where id=".$_GET['id']);
?>
<script>
alert('Category successfully Deleted : (')
window.location.href = "profile_view.php";
</script>
<?php
?>
	</center>

</body>
</html>

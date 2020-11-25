<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
	<center>

<?php
$con= mysqli_connect("localhost" ,"root","" , "tourister" );
if (!$con) 
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM category where id=".$_GET['id']);
?>
<script>
alert('Category successfully Deleted : (')
window.location.href = "category.php";
</script>
<?php
?>	
	</center>

</body>
</html>
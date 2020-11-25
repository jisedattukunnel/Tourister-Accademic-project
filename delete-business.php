<?php
$con= mysqli_connect("localhost" ,"root","qwerty" , "tourister" );
if (!$con)
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM register where userid=".$_GET['id']);
?>
<script>
alert('Account successfully Deleted : (');
window.location.href = "./../accounts.php";
</script>
<?php
?>

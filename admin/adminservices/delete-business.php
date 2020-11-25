<?php
$con= mysqli_connect("localhost" ,"root","" , "tourister" );
if (!$con)
{
    die('not connected');
}
$con= mysqli_query($con,"DELETE FROM register where userid=".$_GET['id']);
?>
<script>
alert('Account successfully Deleted : (')
</script>
<?php
header("Location:./../accounts.php?id=".$row['id']."'")
?>

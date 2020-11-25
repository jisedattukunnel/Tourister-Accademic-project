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
if(isset($_POST['register']))
{
$sql = "UPDATE register SET name='".$_POST["name"]."', category='".$_POST["category"]."',  email='".$_POST["email"]."', phone='".$_POST["phone"]."',mobile='".$_POST["mobile"]."' ,post='".$_POST["post"]."',street='".$_POST["street"]."',village='".$_POST["village"]."',district='".$_POST["district"]."',pin='".$_POST["pin"]."',spot='".$_POST["spot"]."',timefrom='".$_POST["timefrom"]."',timeto='".$_POST["timeto"]."' ,image='".$_POST["image"]."', more='".$_POST["more"]."', description='".$_POST["description"]."', state='true' where id=".$_GET['id'];

if ($conn->query($sql) === TRUE)
{
    echo "Record updated successfully";
    header("Location:./../profile_view.php");
}
else
{
    echo "Error updating record: " . $conn->error;
}
}
?>

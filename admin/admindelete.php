

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
<?php
if(isset($_POST['delete']))   
{ 
$sql="DELETE FROM register where userid=".$_GET['id'];

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
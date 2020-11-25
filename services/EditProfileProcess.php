        <?php
session_start();
$db = new mysqli("localhost","root","","tourister");

    if(isset($_POST['update'])){
    $sql = "UPDATE signup SET name='".$_POST["name"]."', email='".$_POST["email"]."',mobile='".$_POST["mobile"]."' where id=".$_SESSION['id'];
    if ($db->query($sql) === TRUE) {
      $_SESSION["name"] =  $_POST["name"];
      $_SESSION["mobile"] =  $_POST["mobile"];
      $_SESSION["email"] =  $_POST["email"];
        $_SESSION['message'] = "New record created successfully";
        header("Location:./../profile_view.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
$conn->close();
     ?>

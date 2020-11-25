<?php
session_start();
$db = new mysqli("localhost","root","","tourister");

if(isset($_POST['comment'])){
    $sql = "INSERT INTO comment (name, email,message)
    VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."')";

    if ($db->query($sql) === TRUE) {
        $_SESSION['message'] = "New record created successfully";
        header("Location:./../contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
?>

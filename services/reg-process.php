<?php
session_start();
$db = new mysqli("localhost","root","","tourister");
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["register"]) && !empty($_FILES["file"]["name"])){
  $allowTypes = array('jpg','png','jpeg','gif','pdf');
  if(in_array($fileType, $allowTypes)){
      // Upload file to server
      if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

    $sql = "INSERT INTO register (userid,name, category, email, phone, mobile, post, street, village, district, pin, spot, timefrom, timeto, image, more, description, state)
    VALUES ('".$_SESSION["id"]."','".$_POST["name"]."','".$_POST["category"]."','".$_POST["email"]."','".$_POST["phone"]."', '".$_POST["mobile"]."', '".$_POST["post"]."','".$_POST["street"]."','".$_POST["village"]."','".$_POST["district"]."','".$_POST["pin"]."','".$_POST["spot"]."', '".$_POST["timefrom"]."','".$_POST["timeto"]."', '".$fileName."',  '".$_POST["more"]."', '".$_POST["description"]."', 'false')";

    if ($db->query($sql) === TRUE) {
        $_SESSION['message'] = "New record created successfully";
        header("Location:./../profile_view.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }
}
}

?>

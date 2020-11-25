<?php
session_start();
$db = new mysqli("localhost","root","","tourister");

if(isset($_POST['register'])){
    $sql = "INSERT INTO signup (name, email, mobile, password)
    VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['password']."')";

    if ($db->query($sql) === TRUE) {
        $_SESSION['message'] = "New record created successfully";

        header("Location:./../signin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}



if(isset($_POST['login'])){
    $query = "SELECT * FROM signup WHERE email='".$_POST['email']."' AND password = '".$_POST['password']."' ";
    $sql = $db->query($query);
    $n = $sql->num_rows;
    if($n > 0){
      while($row = $sql->fetch_assoc()) {
        $_SESSION["id"] =  $row["id"];
        $_SESSION["name"] =  $row["name"];
        $_SESSION["mobile"] =  $row["mobile"];
        $_SESSION["email"] =  $row["email"];
    }
     header("Location:./../profile_view.php");
    } else {
        $_SESSION['message'] = "login faild";
        header("Location:./../signin.php");
    }

}






if(isset($_POST['update'])){
            $sql = "UPDATE register SET name='".$_POST["name"]."', category='".$_POST["category"]."',  email='".$_POST["email"]."', phone='".$_POST["phone"]."',mobile='".$_POST["mobile"]."',post='".$_POST["post"]."',street='".$_POST["street"]."',village='".$_POST["village"]."', district='".$_POST["district"]."',pin='".$_POST["pin"]."',spot='".$_POST["spot"]."',timefrom='".$_POST["timefrom"]."',timeto='".$_POST["timeto"]."' ,image='".$_POST["image"]."', more='".$_POST["more"]."', description='".$_POST["description"]."', state='true'  WHERE id = '".$_SESSION["id"]."' ";
if ($db->query($sql) === TRUE) {

    $_SESSION['message'] = "Successfully Completed";
    header("Location:./../profile_view.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}
?>

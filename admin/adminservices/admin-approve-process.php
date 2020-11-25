<?php
session_start();
$db = new mysqli("localhost","root","","tourister");

if(isset($_POST['approve'])){
    $sql = " update register set state='true' where id='".$_GET["id"]."'";
    
    if ($db->query($sql) === TRUE) {
        ?>
        <script>
            alert('Business Approved')
        </script>
        <?php
        $_SESSION['message'] = "New record created successfully";
        header("Location:./../approvals.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
?>

    

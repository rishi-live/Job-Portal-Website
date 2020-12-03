<?php
    // include "connection/db.php";
    // session_start();
    // if( $_SESSION['email'] == true ){

    //   }
    // else {
    //   header("location:admin_login.php");
    //   }
include "verify.php";
 ?>
<?php 
include "connection/db.php";

$del = $_GET['del'];

$sql = " DELETE FROM `admin_login` WHERE `id`='$del'  ";
$db->query($sql);

header("location:customers.php");
 ?>
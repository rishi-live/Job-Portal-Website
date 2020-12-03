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

if(isset($_POST['update'])){
	$sql = " UPDATE `admin_login` SET `admin_email` = '$_POST[email]', `admin_password` = '$_POST[Password]', `admin_username` = '$_POST[Username]', `first_name` = '$_POST[first_name]', `last_name` = '$_POST[last_name]', `admin_type` = '$_POST[admin_type]' WHERE `id` = $_POST[id] ";
	$db->query($sql);

	header("location:customers.php");
}

  ?>
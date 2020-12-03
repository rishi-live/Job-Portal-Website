<?php
include "verify.php";

$email = $_POST['email'];
$username = $_POST['Username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['Password'];
$admin_type = $_POST['admin_type'];


$sql = " INSERT INTO `admin_login` ( `id`,`admin_email`,`admin_password`,`admin_username`,`first_name`,`last_name`,`admin_type` ) VALUES (NULL, '$email', '$password', '$username', '$first_name', '$last_name', '$admin_type') ";
$db->query($sql);

header("location:customers.php");
 ?>
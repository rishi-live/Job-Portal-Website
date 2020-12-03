<?php 
session_start();
// session_unset();
include "connection/db.php";
include "verify.php";



$sql = " SELECT * FROM `admin_login` WHERE `admin_email` = '$_SESSION[email]' AND `admin_type` = '2' ";
$res = $db->query($sql);
$num = $res->num_rows;
if($num > 0 ){
	session_unset();
	header("location:./../index.php");
}
else {
	header("location:index.php");
}




 ?>
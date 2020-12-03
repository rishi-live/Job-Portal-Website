<?php 
include "connection/db.php";
include "verify.php";

$del = $_GET['del'];

$sql = " DELETE FROM `new_company` WHERE `id`='$del'  ";
$db->query($sql);

header("location:pending_company.php");
 ?>
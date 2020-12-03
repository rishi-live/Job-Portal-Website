<?php 
include "connection/db.php";
include "verify.php";

$del = $_GET['del'];

$sql = " DELETE FROM `company` WHERE `company_id`='$del'  ";
$db->query($sql);

header("location:create_company.php");
 ?>
<?php 
include "connection/db.php";
include "verify.php";

$del = $_GET['del'];

$sql = " DELETE FROM `job_apply` WHERE `id`='$del'  ";
$db->query($sql);

header("location:apply_jobs.php");
 ?>
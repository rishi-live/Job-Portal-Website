<?php 
session_start();
session_unset();
include "verify.php";

header("location:index.php");


 ?>
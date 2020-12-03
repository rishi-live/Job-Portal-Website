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


if( isset( $_POST['Company_name'] && $_POST['Description'] )) {


$Company_name = $_POST['Company_name'];

$Description = $_POST['Description'];



$sql = " INSERT INTO `commpany` ( `company_id`,`company`,`des` ) VALUES (NULL, '$Company_name', '$Description' ) ";
$db->query($sql);

header("location:create_company.php");
}
else {
	header("location:add_company.php");
}
 ?>
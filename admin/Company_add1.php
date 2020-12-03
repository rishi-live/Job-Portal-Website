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

//$postForm = $_POST;

//if( isset( $_POST['Company_name'] && $_POST['Description'] )) {
// print_r($_POST);

$Company_name = $_POST['Company_name'];

$Description = $_POST['Description'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password  = $_POST['password'];


$sql = " INSERT INTO `company` ( `company_id`,`company`,`des`,`email`,`mobile`,`password`,`admin_type` ) VALUES (NULL, '$Company_name', '$Description','$email','$mobile','$password','2' ) ";
$db->query($sql);

//var_dump($sql);
if($sql){
	echo "Data has been successfully Inserted";
}
else {
	echo "Some Error found..Please try again";
}

 ?>
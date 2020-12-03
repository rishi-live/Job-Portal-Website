<?php

 include "verify.php";
// include "connection/db.php";
// @session_start();
// $sql = " SELECT * FROM `admin_login` WHERE `admin_email` = '$_SESSION[email]'  ";
// // AND `admin_type` = '2'
// $res = $db->query($sql);
// $num = $res->num_rows;
// if( $num > 0 ){
// }
 ?>
<?php

$postForm 		= $_POST;
$email 			= $_SESSION['email'];

$job_title 		= $_POST['job_title'];
$Description 	= $_POST['Description'];
$country 		= $_POST['country'];
$state 			= $_POST['state'];
$city 			= $_POST['city'];
$category       = $_POST['category'];


	$sql = " INSERT INTO `all_jobs` ( `job_id`,`customer_email`,`job_title`,`des`,`country`,`state`,`city`,`category` ) VALUES (NULL, '$email', '$job_title', '$Description','$country','$state','$city','$category' ) ";
	$res = $db->query($sql);
 
// //var_dump($sql);


if($res){
	echo "Data has been successfully Inserted";
}
else {
	echo "Some Error found..Please try again";
}



//header("location:create_company.php");
// }
// else {
// 	header("location:add_company.php");
// }

 ?>
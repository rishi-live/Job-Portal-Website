<?php
    include "connection/db.php";
    // session_start();
    // if( $_SESSION['email'] == true ){

    //   }
    // else {
    //   header("location:admin_login.php");
    //   }
    include "verify.php";
 ?>
<?php 

$id           = $_POST['id'];
$email        = $_SESSION['email'];
$job_title    = $_POST['job_title'];
$Description  = $_POST['Description'];
$country      = $_POST['country'];
$state        = $_POST['state'];
$city         = $_POST['city'];
$category     = $_POST['category'];

// ,`customer_email` = '$email'
if( empty($country) || empty($state) ||  empty($city) ) {

$sql = " UPDATE `all_jobs` SET  `job_id` = '$id',`job_title` = '$job_title' , `des` = '$Description',`category` = '$category' WHERE `job_id` = '$id' ";
$res = $db->query($sql);

}
else {
$sql = " UPDATE `all_jobs` SET  `job_id` = '$id',`job_title` = '$job_title' , `des` = '$Description', `country`= '$country',`state` = '$state',`city` = '$city',`category` = '$category' WHERE `job_id` = '$id' ";
$res = $db->query($sql);

}

//var_dump($sql);
if($res){
  echo "Data has been successfully updated";
  //header("location:create_company.php");
}
else {
  echo "Some Error found..Please try again";
}
  ?>
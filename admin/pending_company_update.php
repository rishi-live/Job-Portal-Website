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
      $id                = $_POST['id'];
      $company_name      = $_POST['company_name'];
      $company_email     = $_POST['company_email'];
      $company_fowner    = $_POST['company_fowner'];
      $company_lowner    = $_POST['company_lowner'];
      $company_mobile    = $_POST['company_mobile'];
      $company_address   = $_POST['company_address'];
      $password          = $_POST['password'];
      //$status            = approved;
 //print $_POST['company_name'];

// $sql = " UPDATE `new_company` SET  `status` = 'approved',`password` = '$password' WHERE `id` = '$id' ";
// $res = $db->query($sql);     




// echo $sql = " UPDATE `new_company` SET  `company_email` = '$company_email', `company_owner` = '$company_owner',`company_mobile` = '$company_mobile',`company_address` = '$company_address',`status` = 'approved',`password` = '$password',`company_name` = '$name' WHERE `id` = '$id' ";
//$res = $db->query($sql);

$sql1 = " INSERT INTO `admin_login` ( `id`,`admin_email`,`admin_password`,`admin_username`,`first_name`,`last_name`,`admin_type` ) VALUES (NULL, '$company_email', '$password', '$name', '$company_fowner', '$company_lowner', '2') ";
$res1 = $db->query($sql1);

$sql = " DELETE FROM `new_company` WHERE `id`='$id'  ";
$res = $db->query($sql);

//var_dump($sql);


if($res && $res1){
  echo "<script>alert('Data has been successfully updated')</script>";
  header("location:pending_company.php");
}
else {
  echo "<script>alert('Some Error found..Please try again')</script>";
}
  ?>
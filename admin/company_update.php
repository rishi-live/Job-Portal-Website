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

$id = $_POST['id'];
$Company_name = $_POST['Company_name'];

$Description = $_POST['Description'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password  = $_POST['password'];


$sql = " UPDATE `company` SET  `company` = '$Company_name',`des` = '$Description', `email` = '$email',`mobile` = '$mobile',`password`  = '$password',`admin_type` = '2' WHERE `company_id` = '$id' ";
$res = $db->query($sql);

//var_dump($sql);
if($res){
  echo "<script>alert('Data has been successfully updated')</script>";
  header("location:create_company.php");
}
else {
  echo "<script>alert('Some Error found..Please try again')</script>";
}
  ?>
<?php 
include "connection/connect.php";

if ( isset( $_POST['submit']  ) ){

// print_r($_POST);
$id 		= $_POST['id'];
$fname 		= $_POST['firstName'];
$lname 		= $_POST['lastName'];


$mobile 	= $_POST['mobile'];
$email 		= $_POST['email'];


$skills 	= implode("," , $_POST['skills']);

$non_skills = implode("," , $_POST['non_skills']);


	 $sql = "UPDATE `job_seekers` SET `fname` = '$fname' , `lname` = '$lname',`email` = '$email', `mobile` = '$mobile',`skills` = '$skills',`non_skills` = '$non_skills'  WHERE `id` = '$id'";
	$db->query($sql);


	header("location:my_profile.php");
}
else{
	echo "efgadg";
echo "<script>alert('plese try again')</script>";
header("location:index.php");


 }
 ?>
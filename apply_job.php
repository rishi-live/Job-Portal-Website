<?php 
@mkdir("Applicant");
include "connection/connect.php";

if ( isset( $_POST['submit']  ) ){

// print_r($_POST);
$job_id     		= $_POST['id_job'];
$job_seeker_email 	= $_POST['job_seeker'];

$fname 				= $_POST['firstName'];
$lname 				= $_POST['lastName'];
$dob 				= $_POST['dob'];

$mobile 			= $_POST['mobile'];
// $email 				= $_POST['email'];

// $skills = $_POST['skills'];
$skills 			= implode("," , $_POST['skills']);

// $cv = $_POST['cv'];
$cv_name	  		= $_FILES['cv']['name'];
$cv_location 		= $_FILES['cv']['tmp_name'];

$file 				= explode(".",$cv_name);
// print $image[1];

// $sqlc = " SELECT `admin_email` FROM `admin_login` WHERE `id` = '$job_id'  ";
// $resc = $db->query($sqlc);
// $rowc = $resc->fetch_array();,'$company_email',`company_email`

$company_email = $rowc['admin_email'];

if ( !empty( $cv_location ) ){

if($file[1] == "jpg" || $file[1] == "png" || $file[1] == "jpeg" || $file[1] == "pdf"|| $file[1] == "JPEG"|| $file[1] == "JPG"|| $file[1] == "PDF"|| $file[1] == "PNG")
{
	$sql = "INSERT INTO `job_apply` ( `id`,`fname`,`lname`,`dob`,`s_email`,`mobile`,`job_id` ) VALUES (NULL, '$fname', '$lname', '$dob',  '$job_seeker_email', '$mobile', '$job_id' ) ";

	$db->query($sql);

	$insert_id = $db->insert_id; //Last Inserted Id  mysqli_insert_id($db)

	$destination = "Applicant/".$insert_id."_".$cv_name;

	$sql = "UPDATE `job_apply` SET `cv` = '$destination' WHERE `id` = '$insert_id'";
	$db->query($sql);

	move_uploaded_file($cv_location,$destination); //
	//copy($file_location,$destination);
	header("location:job_applied.php");
}
else
	{
	echo "<script>alert('plese try again')</script>";
	header("location:job-single.php");
	 }

	}
	echo "Uploaded file was corrupted!!!";
}
else 
{
	echo "To apply in any company Login first";
}
 ?>

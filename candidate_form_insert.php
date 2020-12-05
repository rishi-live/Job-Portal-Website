<?php 
@mkdir("Uploads");
include "connection/connect.php";

//if ( isset( $_POST['submit']  ) ){

// print_r($_POST);

$fname 		= $_POST['firstName'];
$lname 		= $_POST['lastName'];
$username 	= $_POST['username'];
$dob 		= $_POST['dob'];
$gender 	= $_POST['gender'];

$address 	= $_POST['address'];
$address2 	= $_POST['address2'];
$state 		= $_POST['state'];
$city 		= $_POST['city'];
$pin 		= $_POST['pin'];

$mobile 	= $_POST['mobile'];
$email = $_POST['email'];

$post_graduation_clg 		= $_POST['post_graduation_clg'];
$post_graduation_degree 	= $_POST['post_graduation_degree'];
$post_graduation_yop 		= $_POST['post_graduation_yop'];

$graduation_clg = $_POST['graduation_clg'];
$graduation_degree = $_POST['graduation_degree'];
$graduation_yop = $_POST['graduation_yop'];
$graduation_sgpa = $_POST['graduation_sgpa'];

$twelve_yop 	= $_POST['twelve_yop'];
$twelve_marks 	= $_POST['twelve_marks'];

$ten_yop 	= $_POST['ten_yop'];
$ten_marks 	= $_POST['ten_marks'];



// $skills = $_POST['skills'];
$skills = implode("," , $_POST['skills']);
// $non_skills = $_POST['non_skills'];
$non_skills = implode("," , $_POST['non_skills']);


// $cv = $_POST['cv'];
$cv_name	  	= $_FILES['cv']['name'];
$cv_location 	= $_FILES['cv']['tmp_name'];


$password = $_POST['password'];

$file = explode(".",$cv_name);
// print $image[1];
if($file[1] == "jpg" || $file[1] == "png" || $file[1] == "jpeg" || $file[1] == "pdf"|| $file[1] == "JPEG"|| $file[1] == "JPG"|| $file[1] == "PDF"|| $file[1] == "PNG")
{

	$sql = "INSERT INTO `job_seekers`(`id`,`fname`,`lname`,`username`,`dob`,`gender`,`address`,`address2`,`state`,`city`,`pin`,`mobile`,`email`,`post_graduation_clg`,`post_graduation_degree`,`post_graduation_yop`,`graduation_clg`,`graduation_degree`,`graduation_yop`,`graduation_sgpa`,`twelve_yop`,`twelve_marks`,`ten_yop`,`ten_marks`,`skills`,`non_skills`,`password`,`type`) VALUES (NULL, '$fname','$lname','$username','$dob','$gender','$address','$address2','$state','$city','$pin','$mobile','$email','$post_graduation_clg','$post_graduation_degree','$post_graduation_yop','$graduation_clg','$graduation_degree','$graduation_yop','$graduation_sgpa','$twelve_yop','$twelve_marks','$ten_yop','$ten_marks','$skills','$non_skills','$password','$type')";

	$db->query($sql);

	$insert_id = $db->insert_id; //Last Inserted Id  mysqli_insert_id($db)

	$destination = "Uploads/".$insert_id."_".$cv_name;


	$sql = "UPDATE `job_seekers` SET `cv` = '$destination' WHERE `id` = '$insert_id'";
	$db->query($sql);

	move_uploaded_file($cv_location,$destination); //
	//copy($file_location,$destination);

	header("location:index.php");
}
else{
echo "<script>alert('plese try again')</script>";
header("location:candidate_form.php");


 }
 ?>
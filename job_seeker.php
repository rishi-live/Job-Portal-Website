<?php 
    include "connection/connect.php";
    session_start();
    if( $_SESSION['email_job_seeker'] == true ){
    	header("location: index.php");
      }
    else {
      header("location:job_seeker_login.php");
      }


	//echo "Hello JOB seeker ";

 ?>
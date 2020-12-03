<?php
    include "connection/db.php";
    @session_start();
    if( $_SESSION['email'] == true ){

      }
    else {
      header("location:index.php");
      }
 ?>
<?php
  @session_start();
  include "connection/connect.php";

if ( isset( $_POST['submit']  ) ){
      $company_name      = $_POST['company_name'];
      $company_email     = $_POST['company_email'];
      $company_fowner     = $_POST['company_fowner'];
      $company_lowner     = $_POST['company_lowner'];
      $company_mobile    = $_POST['company_mobile'];
      $company_address   = $_POST['company_address'];
      // $status            = $_POST['status'];

      $sql = "INSERT INTO `new_company` ( `id`,`company_name`,`company_email`,`company_fowner`,`company_lowner`,`company_mobile`,`company_address`,`status` ) VALUES (NULL, '$company_name', '$company_email', '$company_fowner', '$company_lowner','$company_mobile','$company_address','pending' )  ";

      $res = $db->query($sql);
      

        if($res){
          echo "<script>alert('Login Id & Password sent to your email within 48Hrs.')</script>";
          //header("location:new-post-login.php");
          }
          else
          {
            echo "<script>alert('plese try again')</script>";
          }
      }
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>New Post Job</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32"
        type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16"
        type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg"
        color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/"> -->

    <!-- Bootstrap core CSS -->

    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" id="admin_login" name="admin_login" method="post" action="sign_up.php">
        <img class="mb-4" src="img/logo.png" alt="" width="102" height="102">

        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

        <label for="inputEmail" class="sr-only">Company Name</label>
        <input type="text" id="company_name" name="company_name" class="form-control" placeholder="company_name"
            required autofocus>
        <label for="inputEmail" class="sr-only">Company Email</label>
        <input type="email" id="company_email" name="company_email" class="form-control"
            placeholder="Enter your Organization Email" required autofocus><br>

        <label for="inputEmail" class="sr-only"> First Name of Owner</label>
        <input type="text" id="company_fowner" name="company_fowner" class="form-control"
            placeholder="Enter Name of Owner" required autofocus><br>
        <label for="inputEmail" class="sr-only"> Last Name of Owner</label>
        <input type="text" id="company_lowner" name="company_lowner" class="form-control"
            placeholder="Enter Name of Owner" required autofocus><br>


        <label for="inputEmail" class="sr-only">Mobile number</label>
        <input type="number" id="company_mobile" name="company_mobile" class="form-control"
            placeholder="Enter your Mobile Number" required autofocus><br>

        <label for="inputPassword" class="sr-only">Address of Company</label>
        <input type="text" id="company_address" name="company_address" class="form-control"
            placeholder="company address" required><br>



        <!-- <label for="inputEmail" class="sr-only">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your Last name"
            required autofocus><br> -->

        <!-- <label for="inputEmail" class="sr-only">Description</label>
    <input type="text" id="des" name="des" class="form-control" placeholder="Description about Organization" required autofocus><br> -->





        <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" /><br>
        <a href="new-post-login.php">Already have an Account</a>

        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>
</body>

</html>
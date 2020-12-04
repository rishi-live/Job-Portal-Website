<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>New Post Job</title>
    <?php
  @session_start();
  include "connection/connect.php";

?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32"
        type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16"
        type="image/png"> -->
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg"
        color="#563d7c">
    <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico"> -->
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
    <form class="form-signin" id="admin_login" name="admin_login" method="post" action="new-post-login.php">
        <img class="mb-4" src="images/logo2.png" alt="" width="102" height="102">
        <h1 class="h3 mb-3 font-weight-normal">Company Sign-In Portal</h1><br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required
            autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
        <div>
            <img src="4_captcha.php" width="220" ><br><br>
            <span>
                <label for="">Capcha  :</label>
                <input type="text" name="captcha">
            </span>
            
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit"
            placeholder="Sign in" /><br>
        <a href="sign_up.php">Create an Account </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>
</body>

</html>


<?php 

if(isset( $_POST['submit']  ) && isset( $_POST['captcha'] ) ){
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      if (!empty($_POST['captcha'])) {

            if($_SESSION['captcha'] == $_POST['captcha']){

                  $sql = "SELECT * FROM `admin_login` WHERE `admin_email` = '$email' AND `admin_password` = '$pass' AND `admin_type` = '2' ";
                  $res = $db->query($sql);
                  $num = $res->num_rows;

             }
            else{
                echo "<script>alert('Captcha not match!!!')</script>";
            }
        }
        else {
            echo "Enter the Capcha";
        }

        if ( isset($num)) {
            
        

        if($num > 0){
          
          $_SESSION['email'] = $email;
          //$_SESSION['login'] = true;

          header("location:admin/admin_dashboard.php");
          }
          if($num == 0)
          {
            echo "<script>alert('plese try again')</script>";
          }
      }
      else{
        echo "<script>alert('plese try again sometime!!')</script>";
      }
      }
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Falcon</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="css/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Falcon</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="index.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <?php 
      @session_start();
      $name = $_SESSION['email_job_seeker'];
      include "connection/connect.php"; 

      $sql = " SELECT * FROM `job_seekers` WHERE `email` = '$name'  ";
      $res = $db->query($sql);
      $row = $res->fetch_array();


  ?>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Hi <?php echo $row['fname'],"  " ,$row['lname']  ?> </h1>
            <p class="lead">You successfully applied for the post.</p>
            <p class="lead">
                <a href="index.php" class="btn btn-lg btn-secondary">Back to Home</a>
            </p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">

            </div>
        </footer>
    </div>
</body>

</html>
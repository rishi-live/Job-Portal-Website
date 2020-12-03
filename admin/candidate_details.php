<?php 
include "connection/db.php";
include "include/header.php";
include "include/sidebar.php";

$s_email = $_GET['s_email'];

$sql = " SELECT * FROM `job_seekers` WHERE `email` = '$s_email'  ";
$res = $db->query($sql);
$row = $res->fetch_array();
include "verify.php";
 ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Candidate Details</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Applied Candidate</a></li>
                <li class="breadcrumb-item"><a href="#">Candidate Details</a></li>

            </ol>
        </nav>
        <div class="btn-toolbar mb-2 mb-md-0">

            <a href="apply_jobs.php" class="btn btn-success">Back</a>
        </div>
    </div>

    <!-- <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h2>Candidate Details</h2>            

                
            </div> -->
    <div class="row" style="background-color: ">
        <form action=""
            style="border: 1px solid grey; border-radius: 9px; width: 80%; margin-left: 10%; padding: 10px; background-color: ">
            <div class="container">
                <div class="row" style="background-color: white">
                    <div class="col-md-3">
                        <b>Name :</b>
                        <td><?php echo $row['fname']," ",$row['lname']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">
                        <b>Username :</b>
                        <td><?php echo "$row[username]"; ?></td>
                    </div>
                    <div class="col-md-3">
                        <b>D.O.B :</b>
                        <td><?php echo "$row[dob]"; ?></td>
                    </div>
                    <div class="col-md-2">
                        <b>Gender :</b>
                        <td><?php echo $row['gender']; ?></td>
                    </div>

                </div>
                <hr>
                <div class="row" style="background-color: white">


                    <div class="col-md-3">
                        <b>Address :</b>
                        <td><?php echo $row['address']," ",$row['address2']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">
                        <b>State :</b>
                        <td><?php echo $row['state']; ?></td>
                    </div>
                    <div class="col-md-3">
                        <b>City :</b>
                        <td><?php echo $row['city']; ?></td>
                    </div>
                    <div class="col-md-2">
                        <b>Pin :</b>
                        <td><?php echo $row['pin']; ?></td>
                    </div>

                </div>
                <hr>
                <div class="row" style="background-color: white">
                    <div class="col-md-3">
                        <b>Mobile :</b>
                        <td><?php echo $row['mobile']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">
                        <b>Email :</b>
                        <td><?php echo "$row[email]"; ?></td>
                    </div>
                    <!-- <div class="col-md-3">
                            <b>D.O.B  :</b>
                            <td><?php echo "$row[dob]"; ?></td>                        
                        </div>
                        <div class="col-md-2">
                            <b>Gender  :</b>
                            <td><?php echo $row['gender']; ?></td>
                        </div> -->

                </div>
                <hr>
                <center>
                    <label for=""
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:3px 3px;width:auto;height:auto; border-radius: 5px"><b
                            style="font-weight:bold;color: black;padding:3px 3px;width:auto;height:auto;"> Post
                            Graduation </b></label>
                </center>
                <hr>
                <div class="row" style="background-color: white">


                    <div class="col-md-3">
                        <b>Collage Name :</b>
                        <td><?php echo $row['post_graduation_clg']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">
                        <b>Degree :</b>
                        <td><?php echo $row['post_graduation_degree']; ?></td>
                    </div>
                    <div class="col-md-3">
                        <b>Year of passing :</b>
                        <td><?php echo $row['post_graduation_yop']; ?></td>
                    </div>
                    <div class="col-md-2">
                        <b>Pin :</b>
                        <td><?php echo $row['pin']; ?></td>
                    </div>

                </div>
                <hr>
                <center>
                    <label for=""
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:3px 3px;width:auto;height:auto; border-radius: 5px"><b
                            style="font-weight:bold;color: black;padding:3px 3px;width:auto;height:auto;"> Graduation
                        </b></label>
                </center>
                <hr>
                <div class="row" style="background-color: white">


                    <div class="col-md-3">
                        <b>Collage Name :</b>
                        <td><?php echo $row['graduation_clg']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">
                        <b>Degree :</b>
                        <td><?php echo $row['graduation_degree']; ?></td>
                    </div>
                    <div class="col-md-3">
                        <b>Year of passing :</b>
                        <td><?php echo $row['graduation_yop']; ?></td>
                    </div>
                    <div class="col-md-2">
                        <b>SGPA :</b>
                        <td><?php echo $row['graduation_sgpa']; ?></td>
                    </div>

                </div>
                <hr>

                <div class="row" style="background-color: white">
                    <div class="col-md-6">

                        <center>
                            <label for=""
                                style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:3px 3px;width:auto;height:auto; border-radius: 5px"><b
                                    style="font-weight:bold;color: black;padding:3px 3px;width:auto;height:auto;"> 10 +
                                    2</b></label>
                        </center>
                        <hr>
                        <div class="row">

                            <div class="col-md-6">
                                <b>Year of Passing :</b>
                                <td><?php echo $row['twelve_yop']; ?></td>
                            </div>
                            <!-- <div class="col-md-1">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div> -->
                            <div class="col-md-6">
                                <b>Marks :</b>
                                <td><?php echo $row['twelve_marks']; ?></td>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <center>
                            <label for=""
                                style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:3px 3px;width:auto;height:auto; border-radius: 5px"><b
                                    style="font-weight:bold;color: black;padding:3px 3px;width:auto;height:auto;"> 10
                                </b></label>
                        </center>
                        <hr>
                        <div class="row">

                            <div class="col-md-6">
                                <b>Year of Passing :</b>
                                <td><?php echo $row['ten_yop']; ?></td>
                            </div>
                            <!-- <div class="col-md-1">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div> -->
                            <div class="col-md-6">
                                <b>Marks :</b>
                                <td><?php echo $row['ten_marks']; ?></td>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="background-color: white">


                    <div class="col-md-3">
                        <b>IT Skills :</b>
                        <td><?php echo $row['skills']; ?></td>
                    </div>
                    <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3">
                        <b>Non IT Skills :</b>
                        <td><?php echo $row['non_skills']; ?></td>
                    </div>
                    <div class="col-md-2">

                    </div>

                </div>
                <hr>
                <div class="row">
                    <center>
                        <a href="" class="btn btn-primary" style="align-items: center">Accept</a>&nbsp;&nbsp;
                        <a href="" class="btn btn-danger">Reject</a>
                    </center>
                </div>

        </form>
    </div>







</main>
</div> <!-- class = row end div -->
</div> <!-- class = container-fluid end div -->
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 Falcon</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
window.jQuery ||
    document.write(
        '<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>'
    );
</script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="./js/dashboard.js"></script>

</body>

</html>
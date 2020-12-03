<?php 
include "connection/db.php";
$s_email = $_GET['s_email'];

$sql = " SELECT * FROM `job_seekers` WHERE `email` = '$s_email'  ";
$res = $db->query($sql);
$row = $res->fetch_array();

 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Falcon</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


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
    <link href="css/form-validation.css" rel="stylesheet">


</head>

<body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2>Candidate Details</h2>
            <p class="lead">Below is a form built for candidate details. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p>

            <a href="apply_jobs.php" class="btn btn-success">Back</a>
        </div>
        <!-- #####################################  side part ############################################### -->
        <div class="row">
            <div class="col-md-2  ">

            </div>

            <!-- ##################################### end of side part ############################################# -->
            <!-- ################################ personal info start ############################################ -->
            <div class="col-md-8 ">
                <h5 class="mb-3"
                    style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                    Personal Information</h5>
                <hr class="mb-4">
                <form action="candidate_form_insert.php" method="post" class="needs-validation" name="frm"
                    enctype="multipart/form-data" novalidate>
                    <!-- onsubmit="return validate();" -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" value="<?php echo "$row[fname]"; ?>" id="firstName"
                                name="firstName" required autofocus disabled>&nbsp;
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" id="lastName" value="<?php echo "$row[lname]"; ?>"
                                name="lastName" disabled required>&nbsp;
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo "$row[username]"; ?>"
                                name="username" id="username" disabled required>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="username">D.O.B</label>
                        <FONT COLOR=RED>*</FONT>
                        <div class="input-group">

                            <input type="date" class="form-control" name="dob" id="dob"
                                value="<?php echo "$row[dob]"; ?>" disabled>&nbsp;
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="gender">Gender : </label>
                        <FONT COLOR=RED>*</FONT>
                        <?php 
					//Did not work
						if($row['gender'] == 'male')
							print '<input type="radio" name="gender" value="male" checked >Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" disabled>Female</td>';
						elseif($row['gender'] == 'female')
							print '<input type="radio" name="gender" value="male" disabled>Male&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female"  checked>Female</td>';
											
							 ?>

                    </div>

                    <!-- ################################### end of personal info start ################################### -->
                    <!-- ################################# Communication Address ########################################## -->
                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Communication Address</h5>
                    <hr class="mb-4">


                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" value="<?php echo "$row[address]"; ?>" id="address"
                            name="address" disabled required>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" value="<?php echo "$row[address2]"; ?>" id="address2"
                            name="address2" disabled>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">

                            <label for="state">State :</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" name="country" class="form-control" id="countryId"
                                value="<?php echo "$row[state]"; ?>" disabled />


                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="city">City :</label>
                            <FONT COLOR=RED>*</FONT>

                            <input type="text" name="country" class="form-control" id="countryId"
                                value="<?php echo "$row[city]"; ?>" disabled />


                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Pin :</label>
                            <input type="number" class="form-control" value="<?php echo "$row[pin]"; ?>" name="pin"
                                id="pin" disabled />
                        </div>
                        <!-- <div class="col-md-3 mb-3">
                            <label for="lastName">SGPA</label><span class="text-muted">(e.g 7.67)</span>
                            <input type="number" class="form-control" id="graduation_sgpa" name="graduation_sgpa"
                                required>
                        </div> -->
                    </div>
                    <!-- ################################## end of Communication Address################################## -->
                    <!-- ###################################Contact Numbers & Email######################################### -->

                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Contact Numbers & Email</h5>
                    <hr class="mb-4">

                    <div class="mb-3">
                        <label for="email">Mobile<FONT COLOR=RED>*</FONT> <span class="text-muted"></span></label>
                        <input type="number" class="form-control" id="mobile" value="<?php echo "$row[mobile]"; ?>"
                            name="mobile" required disabled>&nbsp;
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <FONT COLOR=RED>*</FONT><span
                                class="text-muted">(Required)</span></label>
                        <input type="email" class="form-control" name="email" value="<?php echo "$row[email]"; ?>"
                            id="email" disabled required>&nbsp;
                    </div>
                    <!-- ###############################end of Contact Numbers & Email###################################### -->
                    <!-- ###############################    Education   ###################################### -->
                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Education</h5>
                    <hr class="mb-4">


                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        Post Graduation</div>

                    <div class="mb-3">
                        <label for="email">College-University <span class="text-muted">(Required)</span></label>
                        <input type="text" class="form-control" id="post_graduation_clg"
                            value="<?php echo "$row[post_graduation_clg]"; ?>" name="post_graduation_clg" disabled>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Degree</label>
                            <input type="text" class="form-control"
                                value="<?php echo "$row[post_graduation_degree]"; ?>" id="post_graduation_degree"
                                name="post_graduation_degree" disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <input type="number" class="form-control" value="<?php echo "$row[post_graduation_yop]"; ?>"
                                id="post_graduation_yop" name="post_graduation_yop" required disabled>
                        </div>
                    </div>

                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        Graduation</div>

                    <div class="mb-3">
                        <label for="email">College-University <span class="text-muted">(Required)</span></label>
                        <input type="text" class="form-control" value="<?php echo "$row[graduation_clg]"; ?>"
                            name="graduation_clg" id="graduation_clg" disabled>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Degree</label>
                            <input type="text" class="form-control" value="<?php echo "$row[graduation_degree]"; ?>"
                                id="graduation_degree" name="graduation_degree" required disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <input type="number" class="form-control" value="<?php echo "$row[graduation_yop]"; ?>"
                                id="graduation_yop" name="graduation_yop" required disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">SGPA</label><span class="text-muted">(e.g 7.67)</span>
                            <input type="number" class="form-control" value="<?php echo "$row[graduation_sgpa]"; ?>"
                                id="graduation_sgpa" name="graduation_sgpa" required disabled>
                        </div>
                    </div>
                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        10+2</div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" value="<?php echo "$row[twelve_yop]"; ?>"
                                id="twelve_yop" name="twelve_yop" required disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">marks</label><span class="text-muted">(e.g 91%)</span>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" value="<?php echo "$row[twelve_marks]"; ?>"
                                id="twelve_marks" name="twelve_marks" required disabled>
                        </div>
                    </div>

                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        10</div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <FONT COLOR=RED>*</FONT>

                            <input type="number" class="form-control" value="<?php echo "$row[ten_yop]"; ?>"
                                name="ten_yop" id="ten_yop" required disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">marks</label><span class="text-muted">(e.g 79%)</span>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" value="<?php echo "$row[ten_marks]"; ?>"
                                name="ten_marks" id="ten_marks" disabled>


                        </div>
                        <!-- ###############################  end of Education   ###################################### -->
                        <!-- #####################################Area Of Expertise############################################# -->
                    </div>

                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Area Of Expertise</h5>
                    <hr class="mb-4">



                    <div class="mb-3">
                        <label for="email">IT Skills :<FONT COLOR=RED>*</FONT><span class="text-muted">(IT Skills :
                                Enter all your IT skills, separated by a Comma. Eg: C, COBOL, DBMS,
                                Java.)</span></label>
                        <input type="text" name="skills[]" value="<?php echo "$row[skills]"; ?>" class="form-control"
                            id="skills" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email">Non-IT Skills :<span class="text-muted">(Non IT Skills: Enter all your non IT
                                skills, separated by a Comma. Eg: Digital Logic, Microprocessor.)</span></label>
                        <input type="text" class="form-control" value="<?php echo "$row[non_skills]"; ?>"
                            name="non_skills[]" id="non_skills" disabled>
                    </div>
                    <!-- #################################end of Area Of Expertise########################################## -->
                    <!-- #################################      Resume  ########################################## -->
                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Resume</h5>
                    <hr class="mb-4">
                    <label for="email">Upload CV :<FONT COLOR=RED>*</FONT><span class="text-muted">(Max File Size
                            2MB.)</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- <input type="file" name="cv"> -->
                    <a href="" class="btn btn-primary">Download Resume</a>
                    <!-- #################################end of Resume########################################## -->



                    <!-- ####################################end of Security ############################################### -->


                    <hr class="mb-4">
                    <!-- <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit"
                        id="submit">Register</button> -->
                    <!-- btnregister -->
                </form>
            </div>
            <div class="col-md-2 order-md-2 mb-4">

            </div>
        </div>



        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2020-2021 Falcon</p>
        </footer>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//geodata.solutions/includes/statecity.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
    <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="form-validation.js"></script> -->

</body>

</html>
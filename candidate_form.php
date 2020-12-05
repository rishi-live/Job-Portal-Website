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
        </div>
        <!-- #####################################  side part ############################################### -->
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ##################################### end of side part ############################################# -->
            <!-- ################################ personal info start ############################################ -->
            <div class="col-md-8 order-md-1">
                <h5 class="mb-3"
                    style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                    Personal Information</h5>
                <hr class="mb-4">
                <form action="candidate_form_insert.php" method="post" onsubmit="return validate();"
                    class="needs-validation" name="frm" enctype="multipart/form-data" novalidate>
                    <!-- onsubmit="return validate();" -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" id="firstName" name="firstName" required
                                autofocus>&nbsp;<span id="spanFname"></span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>&nbsp;<span
                                id="spanLname"></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                                required>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="username">D.O.B</label>
                        <FONT COLOR=RED>*</FONT>
                        <div class="input-group">

                            <input type="date" class="form-control" name="dob" id="dob" required>&nbsp;<span
                                id="spanDob"></span>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="gender">Gender : </label>
                        <FONT COLOR=RED>*</FONT>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>&nbsp;<span id="spanGender"></span>

                    </div>
                    <!-- ################################### end of personal info start ################################### -->
                    <!-- ################################# Communication Address ########################################## -->
                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Communication Address</h5>
                    <hr class="mb-4">


                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address2"
                            placeholder="Apartment or suite">
                    </div>

                    <div class="row">

                        <!-- <input type="hidden" name="country" id="countryId" value="IN" />
                        <label for="state">State  :</label>
                        <select name="state" class="states order-alpha" id="stateId">
                            <option value="">Select State</option>
                        </select>
                        <select name="city" class="cities order-alpha" id="cityId">
                            <option value="">Select City</option>
                        </select> -->
                        <div class="col-md-4 mb-3">
                            <span>
                                <label for="state">State :</label>
                                <FONT COLOR=RED>*</FONT>
                                <input type="hidden" name="country" id="countryId" value="IN" />
                                <select name="state" class="states order-alpha form-control" id="stateId">
                                    <option value="">Select State</option>
                                </select>&nbsp;<span id="spanState"></span>

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="city">City :</label>
                            <FONT COLOR=RED>*</FONT>

                            <select name="city" class="cities order-alpha form-control" id="cityId">
                                <option value="">Select City</option>
                            </select>&nbsp;<span id="spanCity"></span>
                            </span>

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Pin :</label>
                            <input type="number" class="form-control" name="pin" id="pin" />
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
                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="1234521256"
                            required>&nbsp;<span id="spanMobile"></span>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <FONT COLOR=RED>*</FONT><span
                                class="text-muted">(Required)</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"
                            required>&nbsp;<span id="spanEmail"></span>
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
                        <input type="text" class="form-control" id="post_graduation_clg" name="post_graduation_clg">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Degree</label>
                            <input type="text" class="form-control" id="post_graduation_degree"
                                name="post_graduation_degree" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <input type="number" class="form-control" id="post_graduation_yop"
                                name="post_graduation_yop" required>
                        </div>
                    </div>

                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        Graduation</div>

                    <div class="mb-3">
                        <label for="email">College-University <span class="text-muted">(Required)</span></label>
                        <input type="text" class="form-control" name="graduation_clg" id="graduation_clg"
                            placeholder="IIT, Delhi">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Degree</label>
                            <input type="text" class="form-control" id="graduation_degree" name="graduation_degree"
                                required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <input type="number" class="form-control" id="graduation_yop" name="graduation_yop"
                                required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="lastName">SGPA</label><span class="text-muted">(e.g 7.67)</span>
                            <input type="number" class="form-control" id="graduation_sgpa" name="graduation_sgpa"
                                required>
                        </div>
                    </div>
                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        10+2</div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" id="twelve_yop" name="twelve_yop" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">marks</label><span class="text-muted">(e.g 91%)</span>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" id="twelve_marks" name="twelve_marks" required>
                        </div>
                    </div>

                    <div
                        style="font-weight:bold;background-color:#98bf21;color: #FFFFFF;padding:1px;width:200px;height:auto;">
                        10</div>


                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="lastName">Year Of Passing</label>
                            <FONT COLOR=RED>*</FONT>

                            <input type="number" class="form-control" name="ten_yop" id="ten_yop" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstName">marks</label><span class="text-muted">(e.g 79%)</span>
                            <FONT COLOR=RED>*</FONT>
                            <input type="number" class="form-control" name="ten_marks" id="ten_marks">


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
                        <input type="text" name="skills[]" class="form-control" id="skills"
                            placeholder="C, COBOL, DBMS, Java">
                    </div>
                    <div class="mb-3">
                        <label for="email">Non-IT Skills :<span class="text-muted">(Non IT Skills: Enter all your non IT
                                skills, separated by a Comma. Eg: Digital Logic, Microprocessor.)</span></label>
                        <input type="text" class="form-control" name="non_skills[]" id="non_skills"
                            placeholder="Digital Logic, Microprocessor">
                    </div>
                    <!-- #################################end of Area Of Expertise########################################## -->
                    <!-- #################################      Resume  ########################################## -->
                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Resume</h5>
                    <hr class="mb-4">
                    <label for="email">Upload CV :<FONT COLOR=RED>*</FONT><span class="text-muted">(Max File Size
                            2MB.)</span></label>
                    <input type="file" name="cv">
                    <!-- #################################end of Resume########################################## -->
                    <!-- ##################################### Security ############################################### -->

                    <h5 class="mb-3"
                        style="font-weight:bold;background-color:red;color: #FFFFFF;padding:1px;margin-left:auto;margin-right:auto;width:auto;height:auto;">
                        Security</h5>
                    <hr class="mb-4">

                    <div class="mb-3">
                        <label for="email">Enter Password :<FONT COLOR=RED>*</FONT><span class="text-muted">
                                <font face='TAHOMA' size='2' color='#008fd5'>(Combine number & character to make
                                    password stronger.)</font>
                            </span></label>
                        <input type="password" class="form-control" name="password" id="password"><span
                            id="spanPassword"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email">Enter Password :<FONT COLOR=RED>*</FONT></label>
                        <input type="password" class="form-control" name="repeat_password" id="repeat_password"><span
                            id="spanConfirmPassword"></span>
                    </div>
                    <!-- ####################################captcha ############################################### -->

                    <hr class="mb-4">
                    <div class="mb-3">
                        <label for="email">Capcha :<FONT COLOR=RED>*</FONT></label>
                        <font face='TAHOMA' size='2' color='#008fd5'>Please press the Register button Only Once and Wait
                        </font>&nbsp;<span id='captcha_error'></span>

                    </div>


                    <!-- ####################################end of Security ############################################### -->











                    <!-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my
                            billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        </div>
                    </div> -->
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit"
                        id="submit">Register</button><!-- btnregister -->
                </form>
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
    <script language="JavaScript">
    function validate() {
        var isError = 0;
        var fname = document.frm.firstName.value;
        var lname = document.frm.lastName.value;
        var state = document.frm.state.value;
        var city = document.frm.city.value;
        var mobile = document.frm.mobile.value;
        var email = document.frm.email.value;
        var atpos = email.indexOf('@');
        var dotpos = email.lastIndexOf('.');
        //var resume = document.frm.resume.value;
        var cv = document.frm.cv.value;
        var isChecked = false;
        var password = document.frm.password.value;
        var confirmPassword = document.frm.repeat_password.value;
        //var captcha = document.frm.captcha.value;
        //alert(lname);
        // alert(city + email + atpos + dotpos + cv + password + confirmPassword);

        document.getElementById("spanFname").innerHTML = "";
        document.getElementById("spanLname").innerHTML = "";
        document.getElementById("spanGender").innerHTML = "";
        document.getElementById("spanCity").innerHTML = "";
        document.getElementById("spanState").innerHTML = "";
        document.getElementById("spanMobile").innerHTML = "";
        document.getElementById("spanEmail").innerHTML = "";
        // document.getElementById("spanResume").innerHTML = "";
        document.getElementById("spanPassword").innerHTML = "";
        document.getElementById("spanConfirmPassword").innerHTML = "";

        //document.getElementById("captcha_error").innerHTML = "";

        // alert(lname);


        if (fname == '') {
            // alert(lname);
            isError++;
            document.getElementById("spanFname").innerHTML =
                "<b><font color='RED' size='2'>Enter Your First Name</font></b>";
            document.frm.firstName.focus();
        }
        if (lname == '') {
            isError++;
            document.getElementById("spanLname").innerHTML =
                "<b><font color='RED' size='2'>Enter Your Last Name</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.lname.focus();
            }

        }

        var i = 0;
        for (i = 0; i < document.frm.gender.length; i++) {
            if (document.frm.gender[i].checked) {
                isChecked = true;

            }
        }
        if (!isChecked) {
            isError++;
            document.getElementById("spanGender").innerHTML =
                "<b><font color='RED' size='2'>Select Your Gender</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.gender[0].focus();
            }

        }
        if (city == '') {
            isError++;
            document.getElementById("spanCity").innerHTML = "<b><font color='RED' size='2'>Enter Your City</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.city.focus();
            }
        }
        if (state == '') {
            isError++;
            document.getElementById("spanState").innerHTML =
                "<b><font color='RED' size='2'>Enter Your State</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.state.focus();
            }
        }
        /*if(email == '')
        {
            isError++;
            document.getElementById("spanEmail").innerHTML = "<b><font color='RED'>Enter Your Email Id</font></b>";
        }*/
        if (mobile == '') {
            isError++;
            document.getElementById("spanMobile").innerHTML =
                "<b><font color='RED' size='2'>Enter mobile Number</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.mobile.focus();
            }
        }
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            isError++;
            document.getElementById("spanEmail").innerHTML =
                "<b><font color='RED' size='2'>Invaild Email Id</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.email.focus();
            }
        }
        // if (cv == '') {
        //     //resume == '' && 
        //     isError++;
        //     document.getElementById("spanResume").innerHTML =
        //         "<b><font color='RED' size='2'>Please Copy & Paste Your Resume or upload CV</font></b>";
        //     if (isError > 0 && isError < 2) {
        //         document.frm.resume.focus();
        //     }
        // }
        if (password == '') {
            isError++;
            document.getElementById("spanPassword").innerHTML =
                "<b><font color='RED' size='2'>Please Enter Password</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.pass.focus();
            }

        }
        if (confirmPassword == '') {

            isError++;
            document.getElementById("spanConfirmPassword").innerHTML =
                "<b><font color='RED' size='2'>Please Confirm Password</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.confirm_pass.focus();
            }

        }
        if (password != confirmPassword) {

            isError++;
            document.getElementById("spanConfirmPassword").innerHTML =
                "<b><font color='RED' size='2'>Password & Confirm password doesnot match</font></b>";
            if (isError > 0 && isError < 2) {
                document.frm.confirm_pass.focus();
            }

        }
        // if (captcha == '') {
        //     isError++;
        //     document.getElementById("captcha_error").innerHTML =
        //         "<b><font color='RED' size='2'>Please enter Captcha code</font></b>";
        //     if (isError > 0 && isError < 2) {
        //         document.frm.captcha.focus();
        //     }
        // }
        if (isError > 0) {
            return false;
        } else {
            return true;
        }

    }
    </script>
</body>

</html>
<?php 
if ( isset( $_POST['submit']  ) ){
      echo $email          = $_POST['email'];
      echo $fname = $_POST['firstName'];
  }
// print_r($_POST);
// echo $fname = $_POST['firstName'];

 ?>
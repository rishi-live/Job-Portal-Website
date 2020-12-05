<?php
include "connection/connect.php";
include "include/header.php";
@session_start();
$sql = "SELECT * FROM `job_seekers` WHERE `email` = '$_SESSION[email_job_seeker]' ";
                  $res = $db->query($sql);
                  $row = $res->fetch_array();
 ?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center text-md-left mb-5"
                data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Profiles </span><i class="ion-ios-arrow-forward"></i></a></span>
                    <span><?php echo $row['fname']; ?></span>
                </p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php

                 
                //echo $_SESSION['email_job_seeker'];

                  echo $row['fname'],"  " ,$row['lname'] 



                 ?></h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 700106</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@falcon.com">info@falcon.com</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website</span> <a href="#">falcon.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="my_profile_update.php" method="post" class="bg-white p-5 contact-form">
                    <input type="hidden" name="id" id="candidate_id" value="<?php echo $row['id'] ?>">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" value="<?php echo $row['fname'] ?>" id="firstName"
                                name="firstName" required autofocus>&nbsp;
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <FONT COLOR=RED>*</FONT>
                            <input type="text" class="form-control" id="lastName" value="<?php echo $row['lname'] ?>"
                                name="lastName" required>&nbsp;
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <FONT COLOR=RED>*</FONT>
                        <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile No.</label>
                        <FONT COLOR=RED>*</FONT>
                        <input type="number" name="mobile" value="<?php echo $row['mobile'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">IT - Skills</label>
                        <FONT COLOR=RED>*</FONT>
                        <input type="text" name="skills[]" value="<?php echo $row['skills'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Non- IT Skills</label>
                        <FONT COLOR=RED>*</FONT>
                        <input type="text" name="non_skills[]" value="<?php echo $row['non_skills'] ?>"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary py-3 px-5">Update</button>
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <!-- <div id="map" class="bg-white"></div> -->
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "include/footer.php";
 ?>
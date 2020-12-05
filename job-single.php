<?php 
include "connection/connect.php";
include "include/header.php";
 ?>

<?php 

if( isset( $_SESSION['email_job_seeker'] ) == true  ){              
                          


$id =$_GET['id'];

$sql = " SELECT * FROM `all_jobs` WHERE `job_id` = '$id'  ";
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
                        class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span
                        class="mr-3"><a href="blog.php">Jobs <i class="ion-ios-arrow-forward"></i></a></span>
                    <span><?php echo $row['job_title'] ?></span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    <?php echo $row['job_title'] ?></h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <h2 class="mb-3" style="color: blue"><?php echo $row['job_title'] ?> in <?php echo $row['city'] ?></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                    quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro
                    adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis,
                    enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta
                    architecto tempora.</p>
                <p>
                    <img src="images/image_7.jpg" alt="" class="img-fluid">
                </p>
                <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
                    doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo
                    eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis
                    ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
                <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
                <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
                    Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error
                    dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi
                    repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                <p>
                    <img src="images/image_8.jpg" alt="" class="img-fluid">
                </p>
                <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod,
                    est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab
                    porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo
                    alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta

                    inventore?</p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div>
                <div class="pt-5 mt-5" id="login_div">
                    <?php 

                        $sql_check = " SELECT * FROM `job_apply` WHERE `job_id` = '$id' AND `s_email` = '$_SESSION[email_job_seeker]' ";
                        $res_check = $db->query($sql_check);

                        $result = $res_check->num_rows;

                        if ($result > 0 ) {
                            echo "<h1 style=\"color: grey\">Alredy Applied for the post</h1>";
                        }
                        else {

                        $sql_candidate = " SELECT * FROM `job_seekers` WHERE `email` = '$_SESSION[email_job_seeker]' ";
                        $res_candidate = $db->query($sql_candidate);
                        $result = $res_candidate->fetch_array();
    


                     ?>

                    <h3 class="mb-5" style="color: blue">Enter your information to apply </h3>
                    <form action="apply_job.php" method="post" class="p-5 bg-light" enctype="multipart/form-data">
                        <input type="hidden" name="id_job" id="id_job" value="<?php echo $row['job_id'] ?>">
                        <input type="hidden" name="job_seeker" id="job_seeker"
                            value="<?php echo $_SESSION['email_job_seeker'] ?>">
                        <div class="row ">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <FONT COLOR=RED>*</FONT>
                                <input type="text" class="form-control" id="firstName"
                                    value="<?php echo $result['fname'] ?>" name="firstName" required
                                    autofocus>&nbsp;<span id="spanFname"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <FONT COLOR=RED>*</FONT>
                                <input type="text" class="form-control" value="<?php echo $result['lname'] ?>"
                                    id="lastName" name="lastName" required>&nbsp;<span id="spanLname"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" value="<?php echo $result['email'] ?>" class="form-control" name="email"
                                id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Mobile<FONT COLOR=RED>*</FONT> <span class="text-muted"></span></label>
                            <input type="number" value="<?php echo $result['mobile'] ?>" class="form-control"
                                id="mobile" name="mobile" placeholder="1234521256" required>&nbsp;<span
                                id="spanMobile"></span>
                        </div>
                        <div class="mb-3">
                            <label for="username">D.O.B</label>
                            <FONT COLOR=RED>*</FONT>
                            <div class="input-group">

                                <input type="date" class="form-control" value="<?php echo $result['dob'] ?>" name="dob"
                                    id="dob" required>&nbsp;<span id="spanDob"></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">IT Skills :<FONT COLOR=RED>*</FONT><span class="text-muted">(IT Skills :
                                    Enter all your IT skills, separated by a Comma. Eg: C, COBOL, DBMS,
                                    Java.)</span></label>
                            <input type="text" name="skills[]" value="<?php echo $result['skills'] ?>"
                                class="form-control" id="skills" placeholder="C, COBOL, DBMS, Java" required><span
                                id="spanSkills"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email">Upload CV :<FONT COLOR=RED>*</FONT><span class="text-muted">(Max File
                                    Size
                                    2MB.)</span></label>
                            <input type="file" name="cv" id="cv" required>
                        </div>

                        <!-- <div class="form-group">
                            <label for="message">Why you apply</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div> -->
                        <div class="form-group">
                            <!-- <input type="submit" value="Submit" class="btn py-3 px-4 btn-primary btn-lg btn-block"> -->
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit"
                                id="submit">Apply</button>
                        </div>

                    </form>


                </div>


                <?php


}


 } 



?>
                <div class="pt-5 mt-5">

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5" style="color: red">Any Suggestion which need to improve</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->





            <div class="col-md-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#">Jobs <span>(12)</span></a></li>
                        <li><a href="#">Visual Assistant <span>(22)</span></a></li>
                        <li><a href="#">Coffee <span>(37)</span></a></li>
                        <li><a href="#">Drinks <span>(42)</span></a></li>
                        <li><a href="#">Foods <span>(14)</span></a></li>
                        <li><a href="#">Travel <span>(140)</span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">dish</a>
                        <a href="#" class="tag-cloud-link">menu</a>
                        <a href="#" class="tag-cloud-link">food</a>
                        <a href="#" class="tag-cloud-link">sweet</a>
                        <a href="#" class="tag-cloud-link">tasty</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->

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
    var mobile = document.frm.mobile.value;
    var email = document.frm.email.value;
    var atpos = email.indexOf('@');
    var dotpos = email.lastIndexOf('.');
    //var resume = document.frm.resume.value;
    var cv = document.frm.cv.value;
    //var captcha = document.frm.captcha.value;

    document.getElementById("spanFname").innerHTML = "";
    document.getElementById("spanLname").innerHTML = "";
    document.getElementById("spanMobile").innerHTML = "";
    document.getElementById("spanEmail").innerHTML = "";
    // document.getElementById("spanResume").innerHTML = "";
    //document.getElementById("captcha_error").innerHTML = "";



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

<?php 
include "include/footer.php";
 ?>
<?php 
include "include/header.php";
include "connection/connect.php";
@session_start();
 ?>
<script src="js/myajax.js"></script>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span
                        class="number" data-number="8500">0</span> great job offers you deserve!</p>
                <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream
                    <br><span>Job is Waiting</span>
                </h1>

                <div class="ftco-search">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                    href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a
                                    Job</a>

                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                    aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content p-4" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" method="get" class="search-job">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-briefcase"></span></div>
                                                        <input type="text" name="keyword" id="keyword"
                                                            class="form-control"
                                                            placeholder="eg. Garphic. Web Developer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="category" id="category" class="form-control">
                                                                <?php
                                                                    $sql = "SELECT * FROM `job_category`";
                                                                    $res = $db->query($sql);
                                                                    while($category = $res->fetch_array()) {
                                                                        print "<option value = '$category[id]'>$category[category]</option>";
                                                                    }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control" placeholder="Location"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" name="search_job" id="search_job"
                                                            value="Search" class=" form-control btn btn-primary">
                                                        <!-- genericajax('data.php?word='+document.getElementById('keyword_job').value,'job_result',0) -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-performance-tab" disabled>
                                    <form action="#" class="search-job">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-user"></span></div>
                                                        <input type="text" class="form-control"
                                                            placeholder="eg. Adam Scott" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span>
                                                            </div>
                                                            <select name="" id="" class="form-control" disabled>
                                                                <option value="">Category</option>
                                                                <option value="">Full Time</option>
                                                                <option value="">Part Time</option>
                                                                <option value="">Freelance</option>
                                                                <option value="">Internship</option>
                                                                <option value="">Temporary</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control" placeholder="Location"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" value="Search"
                                                            class="form-control btn btn-primary">
                                                        <!-- onkeyup="genericajax('data.php?word='+this.value,'search_result1',0)" -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="job_resultpp"></div>
<?php 
   if( isset( $_SESSION['email_job_seeker'] ) == true  ){              
       if( ( isset( $_GET['search_job'] ) AND isset( $_GET['keyword'] ) ) OR isset( $_GET['page']) ) {                   
  ?>

<!-- search job -->
<div id="id_all_jobs">
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Jobs You are Looking For..</span>
                    <h2 class="mb-4"><span>Apply</span> Now</h2>
                </div>
            </div>

            <?php
            // $word = isset($_POST['keyword']);
            $word = $_GET['keyword'];

            $sqlp = "SELECT * FROM `all_jobs` WHERE `job_title` LIKE '%$word%'  ";
            $resp = $db->query($sqlp);
            $num = $resp->num_rows;

            $page_count = ceil( $num / 5 );
            $page_count1 = $page_count; 

            if( (isset( $_GET['page'] ) ) >= 1 && ( isset ($_GET['page'] ) )  <= $page_count1 ){
                $page_no = $_GET['page'];
                
             }
    else {
            $page_no = 1;
         }
            $start = ($page_no - 1)* 5;

            //$word = $_POST['keyword'];
            $sql = "SELECT * FROM `all_jobs` WHERE `job_title` LIKE '%$word%' LIMIT $start ,5  ";
                        $res = $db->query($sql);
                        while ( $row = $res->fetch_array() ) {
                               # code...
         ?>


            <div class="row">
                <div class="col-md-12 ftco-animate">

                    <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                        <div class="mb-4 mb-md-0 mr-5">
                            <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-black h3"><?php echo $row['job_title'] ?></h2>
                                <div class="badge-wrap">
                                    <span class="bg-danger text-white badge py-2 px-3"><?php
                                    $sql_cate = " SELECT * FROM `job_category` WHERE `id` = '$row[category]'  ";
                                    $res_cate = $db->query($sql_cate);
                                    $row_cate = $res_cate->fetch_array();

                                 echo $row_cate['category'] ?></span>
                                </div>
                            </div>
                            <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                                <div><span class="icon-my_location"></span>
                                    <span><?php echo $row['country'] ?>,&nbsp;<?php echo $row['state'] ?>,&nbsp;&nbsp;&nbsp;<?php echo $row['city'] ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="ml-auto d-flex">
                            <a href="job-single.php?id=<?php echo $row['job_id'] ?>"
                                class="btn btn-primary py-2 mr-1">Apply Job</a>
                            <a href="#"
                                class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--  end -->
            </div>
            <?php 
        }
    
 ?>


            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <!-- <li><a href="#">&lt;</a></li> -->
                            <?php 
                            if($page_no > 1){
                                $prev = $page_no -1;
                                print "<a href=\"index.php?page=$prev&keyword=$word\">PREVIOUS</a>&nbsp;";
                            }


                            for($i = 1; $i < ($page_count + 1 ); $i++){
                                if($i == $page_no){
                                    print "<b>$i</b>&nbsp;&nbsp;&nbsp;";//  \"page_show.php?page=$i\" disabled########disabled="disabled"
                                }
                                else

                                    print "<a href=\"index.php?page=$i&keyword=$word\">$i</a>&nbsp;&nbsp;&nbsp;";
                            }

                            // print "<b>$page_no</b>&nbsp;&nbsp;";
                            
                            if($page_no < $page_count1 ){
                                $next = $page_no + 1;
                                print "<a href=\"index.php?page=$next&keyword=$word\">NEXT</a>";
                            }
                                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
        }
    }
 ?>
<!-- end search  -->

<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-resume"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Search Millions of Jobs</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-collaboration"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-promotions"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Top Careers</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                    <div class="icon"><span class="flaticon-employee"></span></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Search Expert Candidates</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Categories work wating for you</span>
                <h2 class="mb-4"><span>Current</span> Job Posts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
                    <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
                    <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
                    <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
                    <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
                    <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
                    <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
                </ul>
            </div>
            <div class="col-md-3 ftco-animate">
                <ul class="category">
                    <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
                    <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
                    <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
                    <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Recently Added Jobs</span>
                <h2 class="mb-4"><span>Recent</span> Jobs</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">

                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h3">Frontend Development</h2>
                            <div class="badge-wrap">
                                <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div><!-- end -->

            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#" class="btn btn-danger rounded-circle btn-favorite d-flex align-items-center">
                            <span class="icon-heart"></span>
                        </a>
                    </div>

                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">

                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Frontend Development</h2>
                            <div class="badge-wrap">
                                <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">

                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h3">Frontend Development</h2>
                            <div class="badge-wrap">
                                <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                            <div><span class="icon-map-marker"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div><!-- end -->

            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-warning text-white badge py-2 px-3">Full Time</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#" class="btn btn-danger rounded-circle btn-favorite d-flex align-items-center">
                            <span class="icon-heart"></span>
                        </a>
                    </div>

                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">

                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Frontend Development</h2>
                            <div class="badge-wrap">
                                <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-md-12 ftco-animate">
                <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

                    <div class="mb-4 mb-md-0 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                            <div class="badge-wrap">
                                <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
                            <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                        </div>
                    </div>

                    <div class="ml-auto d-flex">
                        <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
                        <a href="#"
                            class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div> <!-- end -->
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1350000">0</strong>
                                <span>Jobs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="40000">0</strong>
                                <span>Members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="30000">0</strong>
                                <span>Resume</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10500">0</strong>
                                <span>Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4"><span>Happy</span> Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Marketing Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Interface Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <p class="name">Roger Scott</p>
                                <span class="position">System Analyst</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2><span>Recent</span> Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">December 2, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste
                            maxime optio, ut com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">December 2, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis natus incidunt officia
                            assumenda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">December 2, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi obcaecati praesentium,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_4.jpg');">
                    </a>
                    <div class="text mt-3">
                        <div class="meta mb-2">
                            <div><a href="#">December 2, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind
                                texts</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima, dolores quis, dolorum
                            accusamu</p>
                    </div>
                </div>
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
<script>
$(document).ready(function() {
    //$("#id_all_jobs").hide();
    $("#search_job").click(function() {
        // e.preventDefault();
        $("#id_all_jobs").show();
    })
})
</script>
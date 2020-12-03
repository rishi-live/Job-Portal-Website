<?php
include "connection/db.php";
include "include/header.php";
include "include/sidebar.php";
include "verify.php";

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Applied Candidate</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Applied Candidate</a></li>

            </ol>
        </nav>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Export
                </button>
            </div>
            <a href="#" class="btn btn-primary">Update</a>
        </div>
    </div>

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#SL</th>
                <th> Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>D.O.B</th>
                <th>More Info.</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php
          $sql = "SELECT * FROM `job_apply` LEFT JOIN `all_jobs` ON `job_apply`.`id` = `all_jobs`.`job_id`  WHERE `customer_email` = '$_SESSION[email]' ";
          $res =  $db->query($sql);
          $c = 0;
          while ( $row = $res->fetch_array() ){
            $c++;

            // $sql1 = " SELECT * FROM `job_category` WHERE `id` = '$row[category]' ";
            // $res1 = $db->query($sql1);
            // $category = $res1->fetch_array();
        ?>
            <tr>
                <td><?php echo $c ?></td>

                <td><?php echo $row['fname']," ", $row['lname'] ?></td>

                <td><?php echo $row['s_email'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><a href="candidate_details.php?s_email=<?php echo $row['s_email'] ?>" class="btn btn-warning btn-sm"
                        style="margin-top: 3px;"><span><img src="fonts/visibility.png"
                                style="height:20px;width:20px;"></span></a></td>
                <td>
                    <div class="row">
                        <div class="btn-group">
                            <a href="applied_candidate_accept.php?edit=<?php echo $row['job_id'] ?>"
                                class="btn btn-success"><span><img src="fonts/edit.png"
                                        style="height:15px;width:15px"></span></a>&nbsp;&nbsp;
                            <a href="applied_candidate_delete.php?del=<?php echo $row['id'] ?>"
                                class="btn btn-danger"><span><img src="fonts/delete.png"
                                        style="height:15px;width:15px"></span></a>
                        </div>
                    </div>
                </td>
            </tr>

            <?php

           }

           ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#SL</th>
                <th> Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>D.O.B</th>
                <th>More Info.</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>






</main>
</div> <!-- class = row end div -->
</div> <!-- class = container-fluid end div -->
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
<?php
    include "connection/db.php";
    include "verify.php";
    // session_start();
    // if( $_SESSION['email'] == true ){

    //   }
    // else {
    //   header("location:admin_login.php");
    //   }
 ?>
<?php
include "include/header.php";
include "include/sidebar.php";

$id = $_GET['edit'];
$sql = " SELECT * FROM `all_jobs` WHERE `job_id`='$id' ";
$res = $db->query($sql);
while(  $row = $res->fetch_array()  ){

            

 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <!-- <h1 class="h2">Dashboard</h1> -->
        <h1>Edit Jobs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="job_create.php">Add Job List</a></li>
                <li class="breadcrumb-item"><a href="#">Edit Job</a></li>
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
            <a href="#" class="btn btn-primary">Add Company</a><!-- add_customer.php -->
        </div>
    </div>
    <div style="background-color:#F8F8F8;width: 60%; margin-left: 20%">
        <div id="msg">

        </div>

        <form action="" method="post" style="margin: 3%;padding: 3%" name="job_form" id="job_form">
            <div class="form-group">
                <label for="Customer Email">Job Title</label>
                <input type="text" name="job_title" id="job_title" value="<?php echo $row['job_title'] ?>"
                    class="form-control" placeholder="Enter job title">
            </div>
            <div class="form-group">
                <label for="Customer Email">Description</label>
                <!-- <textarea name="Description" id="Description" cols="30" rows="10"></textarea> -->
                <textarea class="form-control" name="Description" id="Description" rows="3"
                    placeholder="Enter Company details"><?php echo $row['des'] ?> </textarea>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">Country</label>
                    <select name="country" class="countries form-control" id="countryId">
                        <option value="">Select Country</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">State</label>
                    <select name="state" class="states form-control" id="stateId">
                        <option value="">Select State</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">City</label>
                    <select name="city" class="cities form-control" id="cityId">
                        <option value="">Select City</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">Country</label>&nbsp;&nbsp;<span class="text-muted">(Previous)</span>
                    <input type="text" class="form-control" value="<?php echo $row['country'] ?>" disabled>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">State</label>&nbsp;&nbsp;<span class="text-muted">(Previous)</span>
                    <input type="text" class="form-control" value="<?php echo $row['state'] ?>" disabled>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label for="Customer Email">City</label>&nbsp;&nbsp;<span class="text-muted">(Previous)</span>
                    <input type="text" class="form-control" value="<?php echo $row['city'] ?>" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="Customer Email">Category</label>
                <select class="form-control" name="category" id="category">
                    <option selected disabled="">Choose Job Type</option>
                    <?php
            $sql1 = " SELECT * FROM `job_category` ";
            $res1 = $db->query($sql1);
            
              
              while( $category = $res1->fetch_array() ) {

                // stu_qualification from database students  &&&& qual_name from qualification
                if($row['category'] == $category['id'])
                  print "<option value = '$category[id]' selected >$category[category]</option>";
                else 
                  print "<option value = '$category[id]' >$category[category]</option>";
              }
            ?>
                </select>
            </div>

            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            <button type="submit" class="btn btn-block btn-success" name="submit" id="submit">Submit</button>
        </form>
    </div>
    <?php 
}
 ?>

</main>
</div> <!-- class = row end div -->
</div> <!-- class = container-fluid end div -->


<!-- <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script> -->


<!-- <script>
      window.jQuery ||
        document.write(
          '<script src="./assets/js/vendor/jquery.slim.min.js"><\/script>'
        );
    </script> -->
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script> -->
<script src="./js/dashboard.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
$(document).ready(function() {
    $("#submit").click(function() {
        var id = $("#id").val();
        var job_title = $("#job_title").val();
        var Description = $("#Description").val();

        var countryId = $("#countryId").val();
        var stateId = $("#stateId").val();
        var cityId = $("#cityId").val();
        var category = $("#category").val();

        if (job_title == '') {
            alert("Please Enter Company Name...");
            return false;
        }
        if (Description == '') {
            alert("Please Enter Description...");
            return false;
        }
        if (countryId == '' || stateId == '' || cityId == '') {
            alert("Country State City will be same as previous...");

        }
        if (category == '') {
            alert("Please Enter Job type...");
            return false;
        }


        // var data = $("form").serializeArray();
        var data = $("form").serialize();

        $.ajax({
            type: "POST",
            url: "job_update.php",
            data: data,
            success: function(data) {
                alert(data);
            }
        });
    });
});
</script>


</body>

</html>
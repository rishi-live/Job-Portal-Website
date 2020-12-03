<?php
    // include "connection/db.php";
    // session_start();
    // if( $_SESSION['email'] == true ){

    //   }
    // else {
    //   header("location:admin_login.php");
    //   }
include "verify.php";
 ?>
<?php
	// include "lib/index.php";
include "include/header.php";
include "include/sidebar.php";

$id = $_GET['edit'];
$sql = " SELECT * FROM `new_company` WHERE `id` =  '$id' ";
$res = $db->query($sql);
while ( $row = $res->fetch_array() ){

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item"><a href="#">Update Company </a></li>
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
            <a href="#" class="btn btn-primary">Update</a><!-- add_customer.php -->
        </div>
    </div>
    <div style="background-color:#F8F8F8;width: 60%; margin-left: 20%">
        <div id="msg">

        </div>

        <form action="pending_company_update.php" method="post" style="margin: 3%;padding: 3%" name="company_form"
            id="company_form">
            <div class="form-group">
                <label for="Customer Email">Company Name</label>
                <input type="text" name="company_name" id="company_name" value="<?php echo $row['company_name'] ?>"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="Customer Email">Email</label>
                <!-- <textarea name="Description" id="Description" cols="30" rows="10"></textarea> -->
                <input class="form-control" type="email" name="company_email" id="company_email"
                    value="<?php echo $row['company_email'] ?>"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">First Name of Owner </label>
                <input class="form-control" type="text" name="company_fowner" id="company_fowner"
                    value="<?php echo $row['company_fowner'] ?>"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Last Name of Owner </label>
                <input class="form-control" type="text" name="company_lowner" id="company_lowner"
                    value="<?php echo $row['company_lowner'] ?>"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Mobile Number</label>
                <input class="form-control" type="number" name="company_mobile" id="company_mobile"
                    value="<?php echo $row['company_mobile'] ?>"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Address</label>
                <input class="form-control" type="text" name="company_address" id="company_address"
                    value="<?php echo $row['company_address'] ?>"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Password</label>
                <input class="form-control" type="text" name="password" id="password"
                    value="<?php echo $row['password'] ?>"></input>
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'] ?>">
            <button type="submit" class="btn btn-block btn-success" name="update" id="update">Add Now</button>
        </form>
    </div>
    <?php 
}
 ?>

</main>
</div> <!-- class = row end div -->
</div> <!-- class = container-fluid end div -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
window.jQuery ||
    document.write(
        '<script src="./assets/js/vendor/jquery.slim.min.js"><\/script>'
    );
</script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="./js/dashboard.js"></script>



</body>

</html>
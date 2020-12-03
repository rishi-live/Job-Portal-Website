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
$sql = " SELECT * FROM `admin_login` WHERE `id` =  '$id' ";
$res = $db->query($sql);
while ( $row = $res->fetch_array() ){

// $email = $row['email'];
// $username = $row['Username'];
// $first_name = $row['first_name'];
// $last_name = $row['last_name'];
// $password = $row['Password'];
// $admin_type = $row['admin_type'];

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item"><a href="add_customer.php">Add Customer</a></li>
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
            <a href="add_customer.php" class="btn btn-primary">Add Customer</a><!-- add_customer.php -->
        </div>
    </div>
    <div style="background-color:#F8F8F8;width: 60%; margin-left: 20%">
        <div id="msg">

        </div>

        <form action="Customer_update.php" method="post" style="margin: 3%;padding: 3%" name="customer_form"
            id="customer_form">
            <div class="form-group">
                <label for="Customer Email">Enter Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['admin_email'];  ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="Customer Email">Enter Username</label>
                <input type="text" name="Username" id="Username" value="<?php echo $row['admin_username'];  ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="Customer Email">Enter First name</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo $row['first_name'];  ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="Customer Email">Enter Last name</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name'];  ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="Customer Password">Enter Password</label>
                <input type="Password" name="Password" id="Password" value="<?php echo $row['admin_password'];  ?>"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="Admin Type">Admin Type</label>
                <select class="form-control" name="admin_type" value="<?php echo $row['admin_type'];  ?>"
                    id="admin_type">
                    <option disabled>Choose Admin Type</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Customer Admin</option>
                </select>
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];  ?>">
            <button type="submit" class="btn btn-block btn-success" name="update" id="submit">Update</button>
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
<!-- <script>
  $(document).ready(function(){
    $('#example').
  })
</script> -->
<!-- <script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var email = $("#email").val();
			var Username = $("#Username").val();
			var Password = $("#Password").val();
			var first_name = $("#first_name").val();
			var last_name = $("#last_name").val();
			var admin_type = $("#admin_type").val();
			//var data = $("form").serialize();

			$.ajax({
				type:"POST",
				url:"Customer_add.php",
				data:{
					email:email,
					Username:Username

				},
				success:function(data){
					alert(data);
					//$("#msg").html(data);
				}
			});			
		});
	});
</script> -->


</body>

</html>
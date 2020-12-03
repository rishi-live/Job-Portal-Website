<?php
    // include "connection/db.php";
    // session_start();
    // if( $_SESSION['email'] == true ){

    //   }
    // else {
    //   header("location:index.php");
    //   }
include "verify.php";
 ?>
<?php

// include "lib/index.php";
include "include/header.php";
include "include/sidebar.php";
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
                <li class="breadcrumb-item"><a href="#">Add Company</a></li>
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

        <form action="" method="post" style="margin: 3%;padding: 3%" name="company_form" id="company_form">
            <div class="form-group">
                <label for="Customer Email">Company Name</label>
                <input type="text" name="Company_name" id="Company_name" class="form-control"
                    placeholder="Enter Company Name">
            </div>
            <div class="form-group">
                <label for="Customer Email">Description</label>
                <textarea class="form-control" name="Description" id="Description" rows="3"
                    placeholder="Enter Company details"></textarea>
            </div>
            <div class="form-group">
                <label for="Customer Email">Email</label>
                <input class="form-control" name="email" id="email" placeholder="Enter Email Id"></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Mobile</label>
                <input class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile No."></input>
            </div>
            <div class="form-group">
                <label for="Customer Email">Password</label>
                <input class="form-control" name="password" id="password" placeholder="Enter password."></input>
            </div>

            <button type="submit" class="btn btn-block btn-success" name="submit" id="submit">Submit</button>
        </form>
    </div>


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
        var Description = $("#Description").val();
        var Company_name = $("#Company_name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var password = $("#password").val();
        if (Company_name == '') {
            alert("Please Enter Company Name...");
            return false;
        }
        if (Description == '') {
            alert("Please Enter Description...");
            return false;
        }
        if (email == '') {
            alert("Please Enter email...");
            return false;
        }
        if (mobile == '') {
            alert("Please Enter mobile No...");
            return false;
        }
        if (password == '') {
            alert("Please Enter password...");
            return false;
        }

        // var data = $("form").serializeArray();
        var form_data = $("form").serialize();
        //both work

        // alert(email);
        $.ajax({
            type: "POST",
            url: "Company_add1.php",
            data: form_data,
            success: function(data) {
                alert(data);
            }
        });
    });
});
</script>


</body>

</html>
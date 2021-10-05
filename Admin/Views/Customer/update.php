<?php
require('../../Controllers/checkUser.php');
include '../../../Models/customer_db.php';
$id = $_GET['id'];
$customer = getCustomer($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Management</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include '../_navbar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include '../_sidebar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <center>
                    <h3>Customer Management</h3>
                </center>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý khách hàng</h4>
                        <p class="card-description"></p>
                        <form class="forms-sample" action="../../Controllers/customerController.php?type=sua" method="post">
                        <?php foreach ($customer as $cus_update) { ?>
                            <input type="hidden" name="id" value="<?php echo $cus_update[0]; ?>">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $cus_update[1] ?>" name="name_update" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" value="<?php echo $cus_update[2] ?>" name="phone_update" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword4" value="<?php echo $cus_update[3] ?>" name="address_update" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword4" value="<?php echo $cus_update[4] ?>" name="email_update" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="2" name="des_update" value="<?php echo $cus_update[5] ?>"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Cập nhật</button>
                            <button class="btn btn-light">Cancel</button>
                        <?php } ?>
                        </form>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include '../_footer.php'; ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../assets/js/shared/off-canvas.js"></script>
    <script src="../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
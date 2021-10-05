<?php
require('../../Controllers/checkUser.php');
include '../../../Models/order_db.php';
include '../../../Models/customer_db.php';
include '../../../Models/orderdetail_db.php';
include '../../../Models/product_db.php';
$id = $_GET['id'];
$order = getOrderbyCustomer($id)->fetch();
$customer = getCustomer($order['CustomerId'])->fetch();
$orderdetail = getOrderdetails($id)->fetch();
$product = getProduct($orderdetail['ProductId'])->fetch();
$message = "";
if (isset($_GET["mes"])) {
    $message = $_GET["mes"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Management</title>
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
                    <h3>Order Management</h3>
                </center>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý đơn hàng</h4>
                        <p class="card-description"></p>
                        <form class="forms-sample" action="../../Controllers/orderController.php?type=sua" method="POST">
                            <input type="hidden" name="id" value="<?php echo $order[0]; ?>">
                            <div class="form-group">
                                <ul style="list-style-type:circle">
                                    <li>Tên khách hàng: <?php echo $customer['CustomerName'] ?></li>
                                    <li>Số điện thoại: <?php echo $customer['PhoneNumber'] ?></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                    <label for="statusorder">Trạng thái</label>
                                    <select class="form-control" id="statuscbb" name="statusorder">
                                        <option value="Đang xử lý" selected>Đang xử lý</option>
                                        <option value="Hoàn thành">Hoàn thành</option>
                                    </select>
                                    <script>
                                        var statusorder = "<?php echo $order['StatusOrder'] ?>";
                                        var selectstatus = document.getElementById("statuscbb");
                                        for (let index = 0; index < 2; index++) {
                                            if (selectstatus.options[index].value == statusorder) {
                                                selectstatus.options[index].selected = 'selected';
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="payment">Thanh toán</label>
                                    <select class="form-control" id="paymentcbb" name="payment">
                                        <option value="Tiền mặt" selected>Tiền mặt</option>
                                        <option value="Chuyển khoản">Chuyển khoản</option>
                                        <option value="Trả góp">Trả góp</option>
                                    </select>
                                    <script>
                                        var payment = "<?php echo $order['PaymentType'] ?>";
                                        var selectstatus = document.getElementById("paymentcbb");
                                        for (let index = 0; index < 3; index++) {
                                            if (selectstatus.options[index].value == payment) {
                                                selectstatus.options[index].selected = 'selected';
                                            }
                                        }
                                    </script>
                                </div>

                            <button type="submit" class="btn btn-success mr-2">Cập nhật</button>
                            <button class="btn btn-light">Cancel</button>
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
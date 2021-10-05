<?php
include '../Models/product_db.php';
include '../Models/brand_db.php';
include '../Models/category_db.php';
$id = $_GET['id'];
$product = getProduct($id)->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Assets/bootstrap-5.0.0-beta3/bootstrap-5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/bootstrap-icons-1.4.0/bootstrap-icons-1.4.0/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Assets/CSS/mainCSS.css">
    <script src="../Assets/JS/mainWeb.js"></script>

<body>
    <!-- header start -->
    <?php include '_header.php'; ?>
    <!-- end header -->
    <!-- nav start -->
    <?php include '_navbar.php' ?>
    <!-- end nav -->
    <div class="body">
        <!-- slider start -->
        <?php include '_slider.php'; ?>
        <!-- end slider -->
        <section class="product-list" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <h1 style="font-size: 24px; margin: 20px 0 10px;"><?php echo $product['ProductName'] ?></h1>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <center><img style="width: 30%;" src="<?php echo $product['ProductImage'];  ?>" alt=""></center>
                        <p style="font-size: 20px;"><?php echo $product['Description'] ?></p>
                        <span style="font-size: 20px; font-weight: bold;" class="lable">Giá bán:
                            <span class="p-price"><?php echo number_format($product['Price'], 2) . ' đ'; ?></span></span><br>
                        <a style="line-height: 60px; background-color: red; font-size: 18px; color: white; text-align: center; border-radius: 3px; margin-bottom: 10px;" href="../index.php?function=add_cart&product_id=<?php echo $product['ProductId'] ?>">MUA NGAY</a>
                    </div>
                </div>
                <hr>
        </section>
        
    </div>
    <!-- footer start -->
    <?php include '_footer.php'; ?>
    <!-- end footer -->
</body>

</html>
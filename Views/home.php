<?php
include '../Models/product_db.php';
include '../Models/category_db.php';
include '../Models/brand_db.php';
$product_laptop = getAllProductByCategoryLaptop();
$product_pc = getAllProductByCategoryPC();
$product_manhinh = getAllProductByCategoryManHinh();
$product_linhkien = getAllProductByCategoryLinhkien();
$product_mouse = getAllProductByCategoryMouse();
$product_keyboard = getAllProductByCategoryKeyboard();
$product_route = getAllProductByCategoryRoute();
$product_audio = getAllProductByCategoryAudio();
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
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>SẢN PHẨM KHUYẾN MÃI HOT NHẤT</h2>
                    </p>
                </div>
                <div class="container">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_1">
                                            <a href="" class="p-img" title="LAPTOP HP PAVILION 14 - DV0009TU (2D7A7PA) (i5-1135G7, Ram 8GB, SSD 512GB, Màn hình 14">
                                                <img src="../Assets/img/laptop_hp1.jpg" alt="LAPTOP HP PAVILION 14 - DV0009TU (2D7A7PA) (i5-1135G7, Ram 8GB, SSD 512GB, Màn hình 14" style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoHP.png" alt="HP">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="" title="LAPTOP HP PAVILION 14 - DV0009TU (2D7A7PA) (i5-1135G7, Ram 8GB, SSD 512GB, Màn hình 14" Full HD, Win 10)>
                                                        LAPTOP HP PAVILION 14 - DV0009TU (2D7A7PA) (i5-1135G7, Ram 8GB,
                                                        SSD 512GB, Màn hình 14" Full HD, Win 10)
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice"></span>
                                            <span class="p-price">17.990.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_2">
                                            <a href="" class="p-img" title="PC HP PAVILION TP01-1110D (180S0AA,) i3-10100, Ram 4G, HDD 1TB, RW, WL, W10H bản quyền">
                                                <img src="../Assets/img/PC_HP2.png" alt="PC HP PAVILION TP01-1110D (180S0AA,) i3-10100, Ram 4G, HDD 1TB, RW, WL, W10H bản quyền" style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoHP.png" alt="HP">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="" title="PC HP PAVILION TP01-1110D (180S0AA,) i3-10100, Ram 4G, HDD 1TB, RW, WL, W10H bản quyền">
                                                        PC HP PAVILION TP01-1110D (180S0AA,) i3-10100, Ram 4G, HDD 1TB,
                                                        RW, WL, W10H bản quyền
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice">8.990.000 đ</span>
                                            <span class="p-price">8.590.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_3">
                                            <a href="" class="p-img" title="PC HP PRO 280SFF G5 (33T41PA) (i3-10100, Ram 8GB, SSD 256GB, DVD-RW, Wifi, Win 10 home, 1Year Warranty chính hãng)">
                                                <img src="../Assets/img/pchp3.png" alt="PC HP PRO 280SFF G5 (33T41PA) (i3-10100, Ram 8GB, SSD 256GB, DVD-RW, Wifi, Win 10 home, 1Year Warranty chính hãng)" style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoHP.png" alt="HP">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="" title="PC HP PRO 280SFF G5 (33T41PA) (i3-10100, Ram 8GB, SSD 256GB, DVD-RW, Wifi, Win 10 home, 1Year Warranty chính hãng)">
                                                        PC HP PRO 280SFF G5 (33T41PA) (i3-10100, Ram 8GB, SSD 256GB,
                                                        DVD-RW, Wifi, Win 10 home, 1Year Warranty chính hãng)
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice"></span>
                                            <span class="p-price">9.990.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_4">
                                            <a href="" class="p-img" title="Máy chơi game SONY PLAYSTATION PS4 SLIM 1TB MEGA PACK (CUH-2218B MEGA)  chính hãng ">
                                                <img src="../Assets/img/PS4_1.jpg" alt="Máy chơi game SONY PLAYSTATION PS4 SLIM 1TB MEGA PACK (CUH-2218B MEGA)  chính hãng " style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoSony.jpg" alt="SONY">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="" title="Máy chơi game SONY PLAYSTATION PS4 SLIM 1TB MEGA PACK (CUH-2218B MEGA)  chính hãng ">
                                                        Máy chơi game SONY PLAYSTATION PS4 SLIM 1TB MEGA PACK (CUH-2218B
                                                        MEGA) chính hãng
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice">8.990.000 đ</span>
                                            <span class="p-price">8.190.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_5">
                                            <a href="#" class="p-img" title="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, SSD 256GB Nvme, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp ">
                                                <img src="../Assets/img/pc_hp4.png" alt="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, SSD 256GB Nvme, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp " style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoDell.png" alt="DELL">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="#" title="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, SSD 256GB Nvme, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp ">
                                                        PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, SSD 256GB Nvme,
                                                        DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ
                                                        dành cho Doanh nghiệp
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice"></span>
                                            <span class="p-price">12.990.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_6">
                                            <a href="#" class="p-img" title="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, HDD 1TB, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp ">
                                                <img src="../Assets/img/PC_HP3.png" alt="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, HDD 1TB, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp " style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoDell.png" alt="DELL">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="#" title="PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, HDD 1TB, DVD-RW, Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho Doanh nghiệp ">
                                                        PC DELL OPTIPLEX 3080SFF (i5-10500, Ram 4GB, HDD 1TB, DVD-RW,
                                                        Keyboard, Mouse, Fedora) chính hãng, dòng máy bền bỉ dành cho
                                                        Doanh nghiệp
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice"></span>
                                            <span class="p-price">12.190.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_7">
                                            <a href="#" class="p-img" title="Màn hình Ultrasharp DELL 23.8'' U2421HE, tấm nền IPS, Full HD, độ phủ màu 99%, USB-C, LAN, HUB USB 3.0, hàng chính hãng ">
                                                <img src="../Assets/img/manhinhdell1.jpg" alt="Màn hình Ultrasharp DELL 23.8'' U2421HE, tấm nền IPS, Full HD, độ phủ màu 99%, USB-C, LAN, HUB USB 3.0, hàng chính hãng " style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoDell.png" alt="DELL">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="#" title="Màn hình Ultrasharp DELL 23.8'' U2421HE, tấm nền IPS, Full HD, độ phủ màu 99%, USB-C, LAN, HUB USB 3.0, hàng chính hãng ">
                                                        Màn hình Ultrasharp DELL 23.8'' U2421HE, tấm nền IPS, Full HD,
                                                        độ phủ màu 99%, USB-C, LAN, HUB USB 3.0, hàng chính hãng
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice">6.490.000 đ</span>
                                            <span class="p-price">5.790.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="p-item" id="item_8">
                                            <a href="#" class="p-img" title="MACBOOK PRO 13 INCH 2020 M1 256GB GRAY - MYD82 (8 Core/8GB/256GB/13.3inch)">
                                                <img src="../Assets/img/macbook1.jpg" alt="MACBOOK PRO 13 INCH 2020 M1 256GB GRAY - MYD82 (8 Core/8GB/256GB/13.3inch)" style="opacity: 1;">
                                            </a>
                                            <span class="p-brand">
                                                <img class="lazy owl-lazy" src="../Assets/img/logoApple.png" alt="Apple">
                                            </span>
                                            <span class="p-type">
                                                <i class="p-lable new">Hàng mới</i>
                                                <i class="p-lable saleoff">Khuyến mãi</i>
                                            </span>
                                            <span>
                                                <h4 class="p-name">
                                                    <a href="#" title="MACBOOK PRO 13 INCH 2020 M1 256GB GRAY - MYD82 (8 Core/8GB/256GB/13.3inch)">
                                                        MACBOOK PRO 13 INCH 2020 M1 256GB GRAY - MYD82 (8
                                                        Core/8GB/256GB/13.3inch)
                                                    </a>
                                                </h4>
                                            </span>
                                            <span class="p-unprice">34.990.000 đ</span>
                                            <span class="p-price">31.990.000 đ</span>
                                            <a href="#" class="addCart">Đặt hàng</a>
                                            <span class="p-promotion">
                                                6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner-main container no-padding">
            <div class="container">
                <div class="row">
                    <img src="../Assets/img/anhbia9.png" alt="">
                    <img src="../Assets/img/anhbia8.png" alt="">
                </div>
            </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>MÁY TÍNH XÁCH TAY</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <?php foreach ($product_laptop as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <!-- <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span> -->
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>PC, AIO, SERVERPC</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching2" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <?php foreach ($product_pc as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span>
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>MÀN HÌNH MÁY TÍNH</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching3" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php foreach ($product_manhinh as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span>
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <<section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>LINH KIỆN MÁY TÍNH</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching4" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php foreach ($product_linhkien as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span>
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>MOUSE</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching5" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php foreach ($product_mouse as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <!-- <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span> -->
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching5" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>BÀN PHÍM</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching6" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php foreach ($product_keyboard as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span>
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching6" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching6" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>PHỤ KIỆN CÔNG NGHỆ</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching7" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php foreach ($product_route as $pro) { ?>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="p-item">
                                                    <a href="product_details.php?id=<?php echo $pro['ProductId'] ?>" class="p-img" title="<?php echo $pro['ProductName'] ?>">
                                                        <img src="<?php echo $pro['ProductImage'] ?>" alt="<?php echo $pro['ProductName'] ?>" style="opacity: 1;">
                                                    </a>
                                                    <span class="p-brand">
                                                        <img class="lazy owl-lazy" src="<?php echo $pro['BrandImg']; ?>" alt="<?php $pro['BrandName'] ?>">
                                                    </span>
                                                    <span class="p-type">
                                                        <i class="p-lable new">Hàng mới</i>
                                                        <i class="p-lable saleoff">Khuyến mãi</i>
                                                    </span>
                                                    <span>
                                                        <h4 class="p-name">
                                                            <a href="product_details.php?id=<?php echo $pro['ProductId']; ?>" title="<?php echo $pro['ProductName']; ?>">
                                                                <?php echo $pro['ProductName']; ?>
                                                            </a>
                                                        </h4>
                                                    </span>
                                                    <span class="p-unprice"></span>
                                                    <span class="p-price"><?php echo number_format($pro['Price'], 2) . ' đ'; ?></span>
                                                    <a href="../index.php?function=add_cart&product_id=<?php echo $pro['ProductId'] ?>" class="addCart">Đặt hàng</a>
                                                    <span class="p-promotion">
                                                        6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching7" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching7" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
        </section>
        <section class="product-list">
            <div class="container">
                <div class="row">
                    <p>
                    <h2>LOA, TAI NGHE,AUDIO</h2>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <div id="carouselExampleControlsNoTouching8" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)">
                                                    <img src="../Assets/img/loa11.jpg" alt="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/bose.png" alt="Bose">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)">
                                                            Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">12.290.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao">
                                                    <img src="../Assets/img/loa2.jpg" alt="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/jbl.png" alt="JBL">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao">
                                                            JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn
                                                            mê hoặc cùng chất âm JBL Pro Sound đỉnh cao
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">14.900.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Loa bluetooth Marshall Emberton - Chính hãng">
                                                    <img src="../Assets/img/loa11.jpg" alt="Loa bluetooth Marshall Emberton - Chính hãng" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/bose.png" alt="Bose">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Loa bluetooth Marshall Emberton - Chính hãng">
                                                            Loa bluetooth Marshall Emberton - Chính hãng
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">3.990.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình">
                                                    <img src="../Assets/img/webcam1.jpg" alt="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/a4tech.png" alt="a4tech">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình">
                                                            Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ,
                                                            tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice">650.000 đ</span>
                                                <span class="p-price">490.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Tai nghe true wireless Bose Sport Earbuds (Màu xanh, màu đen, màu trắng)">
                                                    <img src="../Assets/img/tainghe1.jpg" alt="Tai nghe true wireless Bose Sport Earbuds (Màu xanh, màu đen, màu trắng)" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/bose.png" alt="Bose">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Tai nghe true wireless Bose Sport Earbuds (Màu xanh, màu đen, màu trắng)">
                                                            Tai nghe true wireless Bose Sport Earbuds (Màu xanh, màu
                                                            đen, màu trắng)
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">6.790.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình">
                                                    <img src="../Assets/img/webcam1.jpg" alt="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/a4tech.png" alt="a4tech">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ, tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình">
                                                            Webcam A4- Tech PK-910P (HD 720p, Video 1MP, góc quay 68 độ,
                                                            tích hợp Micro, kết nối USB 2.0, để bàn hoặc kẹp màn hình
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice">650.000 đ</span>
                                                <span class="p-price">490.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao">
                                                    <img src="../Assets/img/loa2.jpg" alt="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/jbl.png" alt="JBL">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn mê hoặc cùng chất âm JBL Pro Sound đỉnh cao">
                                                            JBL Partybox 310 chính hãng - Loa di động với hiệu ứng đèn
                                                            mê hoặc cùng chất âm JBL Pro Sound đỉnh cao
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">14.900.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="p-item">
                                                <a href="" class="p-img" title="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)">
                                                    <img src="../Assets/img/loa11.jpg" alt="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)" style="opacity: 1;">
                                                </a>
                                                <span class="p-brand">
                                                    <img class="lazy owl-lazy" src="../Assets/img/bose.png" alt="Bose">
                                                </span>
                                                <span class="p-type">
                                                    <i class="p-lable new">Hàng mới</i>
                                                    <i class="p-lable saleoff">Khuyến mãi</i>
                                                </span>
                                                <span>
                                                    <h4 class="p-name">
                                                        <a href="" title="Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)">
                                                            Loa thanh Bose Smart Soundbar 300 (04 loa toàn dải)
                                                        </a>
                                                    </h4>
                                                </span>
                                                <span class="p-unprice"></span>
                                                <span class="p-price">12.290.000 đ</span>
                                                <a href="#" class="addCart">Đặt hàng</a>
                                                <span class="p-promotion">
                                                    6 Khuyến mãi: Túi xách đựng laptop, Chuột không dây, Tấm lót chuột.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching8" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching8" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- footer start -->
    <?php include '_footer.php'; ?>
    <!-- end footer -->
</body>

</html>
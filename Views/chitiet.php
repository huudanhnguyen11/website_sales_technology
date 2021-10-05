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
    <link rel="stylesheet" href="bootstrap-5.0.0-beta3/bootstrap-5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons-1.4.0/bootstrap-icons-1.4.0/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mainCSS.css">
    <script src="mainWeb.js"></script>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 border-1">
                    <div class="logo">
                        <a href="trangchu.html">
                            <!-- <img class="imgPL" src="img/logoPL.png" alt="Phi Long Technology"
                                title="Trang chủ Phi Long"> -->
                        </a>
                    </div>
                </div>
                <div class="col-md-5 border-1" style="margin: auto;">
                    <div class="row">
                        <div class="input-group">
                            <input style="font-size: 14px;" type="text" class="form-control"
                                placeholder="Nhập tên sản phẩm, mã sản phẩm, từ khóa cần tìm,..."
                                aria-label="Nhập tên sản phẩm, mã sản phẩm, từ khóa cần tìm,..."
                                aria-describedby="basic-addon2">
                            <span style="background-color:#E5101D;" class="input-group-text" type="button"
                                id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border-1" style="margin: auto;">
                    <div class="row">
                        <ul>
                            <li class="dropdown">
                                <a class="dropbtn"><i class="bi bi-newspaper"></i> Tin tức</a>
                                <div class="dropdown-content">
                                    <a href="#">Tin khuyến mãi</a>
                                    <a href="#">Tin công nghệ</a>
                                    <a href="#">Tin sự kiện</a>
                                    <a href="#">Mẹo hay</a>
                                    <a href="#">Dịch vụ</a>
                                    <a href="#">Tuyển dụng</a>
                                </div>
                            </li>
                            <li><a href="#"><i class="bi bi-laptop"></i> Xây dựng PC</a></li>
                            <li><a href="#" id="myBtn"><i class="bi bi-bag-check-fill"></i> Giỏ hàng</a></li>
                            <sub id="count_Cart" style="color: white; font-size: 12px"></sub>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="nav">
        <div class="container">
            <div class="col-md-3">
                <div class="row">
                    <ul>
                        <li class="dropdown">
                            <h3><i class="bi bi-list"></i> DANH MỤC SẢN PHẨM</h3>
                            <div class="dropdown-content">
                                <a href="#"><i class="bi bi-megaphone-fill"></i> Tin khuyến mãi</a>
                                <a href="DanhMucSp_LapTop.html"><i class="bi bi-laptop"></i> Máy tính xách tay</a>
                                <a href="DanhMucSp_PC,AIO,Server.html"><i class="bi bi-laptop-fill"></i>
                                    PC,AIO,Server</a>
                                <a href="DanhMucSp_ManHinh.html"><i class="bi bi-tv"></i> Màn hình máy tính</a>
                                <a href="DanhMucSp_LinhKien.html"><i class="bi bi-cpu-fill"></i> Linh kiện máy tính</a>
                                <a href="DanhMucSp_Gear.html"><i class="bi bi-mouse-fill"></i> Chuột</a>
                                <a href="DanhMucSp_Gear.html"><i class="bi bi-keyboard"></i> Bàn phím</a>
                                <a href="DanhMucSp_ThietBiMang.html"><i class="bi bi-hdd-network-fill"></i> Thiết bị
                                    mạng</a>
                                <a href="DanhMucSp_Loa,TaiNghe.html"><i class="bi bi-speaker-fill"></i> Loa,Tai
                                    nghe,Audio</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <a href=""><i class="bi bi-gift-fill"></i> TOP 5 LAPTOP GAMING</a>
                <hr>
            </div>
            <div class="col-md-3">
                <a href="">Microsoft 365 bản quyền chỉ 790.000</a>
            </div>
            <div class="col-md-3">
                <a href="">PC MSI - Sức mạnh nhà rồng</a>
            </div>
        </div>
    </nav>
    <div class="body">
        
    </div>
    <footer class="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="row">
                        <a href="">
                            <h5>Thông tin chung</h5>
                        </a><br>
                        <a href="">Giới thiệu về HD Technology</a>
                        <a href="">Tin tuyển dụng</a>
                        <a href="">Tin tức</a>
                        <a href=""> Tin khuyến mãi</a>
                        <a href="">Liên hệ,góp ý</a>
                        <a href="">Khách hàng doanh nghiệp</a>
                    </div>
                </div>
                <div class="col-md-3" style="font-size: 14px;">
                    <div class="row">
                        <a href="">
                            <h5>Hỗ trợ khách hàng</h5>
                        </a><br>
                        <a href="">Tìm hiểu về mua trả góp</a>
                        <a href="">Chính sách vận chuyển,giao hàng</a>
                        <a href="">Chính sách,quy định chung</a>
                        <a href="">Chính sách giao hàng bảo hành</a>
                        <a href="">Chính sách đổi hàng</a>
                        <a href="">Bảo mật thông tin khách hàng</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <h4><b>HD Technology</b> Đà Nẵng</h4>
                        <p>
                            <strong>Showroom 1:</strong> 152 Hàm Nghi, Quận Thanh Khê, Đà Nẵng
                            <br>
                            <strong>Tel:</strong> (0236) 3 888 000
                            <strong>Mobile:</strong> (84) 0903 555 310
                            <br>
                            <strong>Email:</strong> danang@philong.com.vn
                            <br>
                            <strong>Shoroom 2:</strong> 52 Nguyễn Văn Linh, Quận Hải Châu, Đà Nẵng
                            <br>
                            <strong>Tel:</strong> (0236) 3 888 000
                            <strong>Mobile</strong> (84) 0932 678 771
                            <strong>Email:</strong> danang@philong.com.vn
                        </p>
                        <h4><b>HD Technology</b> Huế</h4>
                        <p>
                            48 Hùng Vương, TP.Huế, Thừa Thiên Huế
                            <br>
                            <strong>Tel:</strong> (0234) 3 977 000 -
                            <strong>Fax:</strong> (0234) 3 3935 468
                            <br>
                            <strong>Email:</strong> hue@philong.com.vn
                        </p>
                    </div>
                </div>
                <div class="col-md-3" style="font-size: 14px;">
                    <div class="row">
                        <h4>Customer's Care</h4>
                        <p>
                            <strong>Trung tâm bảo hành và sửa chữa:</strong>
                            Tầng 3 - 152 Hàm Nghi, Đà Nẵng (Giờ LV: 7:30 - 11:30 và 13:30 - 17:30 )
                            <br>
                            <strong>Tel:</strong>
                            (0236)3 872 000 ( 7:30 - 20:30 )
                            <strong>Gọi sửa chữa:</strong>
                            (0236)3 872 000 ( 7:30 - 20:30 )
                            <strong>Gọi kỹ thuật</strong>
                            (0236)3 872 000 ( 7:30 - 11:30 và 13:30 - 17:30 )
                            <strong>Quản lý chất lượng dịch vụ:</strong>
                            1800 1222 ( 7:30 - 11:30 và 13:30 - 17:30 )
                            <strong>Email:</strong>
                            danang@philong.com.vn
                            <br>
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-google"></i>
                            <i class="bi bi-youtube"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
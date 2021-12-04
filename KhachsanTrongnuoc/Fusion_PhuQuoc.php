<?php
    require "../connect.php";
    // $host = "localhost";
    // $host_user ="root";
    // $host_password = "";
    // $database = "ie104_m12";

    // $conn = new mysqli($host, $host_user, $host_password, $database);
    
    $sql = "SELECT * FROM phong where type=1";
    $kq = $conn->query($sql);
    $sql_ct = "SELECT * FROM ct_hotel where type=1";
    $kq_ct = $conn->query($sql_ct);
    $row_ct =  $kq_ct->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fusion_PhuQuoc.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="File/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Fusion_PhuQuoc.js" defer></script>
    <title>UITour</title>
</head>

<body>
    <header>
    <?php include '../newHeader/newHeader.php'; ?>
        <!-- <nav class="header_menu">
            <img id="logo_uitour" src="File/logo.svg" alt="logo_uitour">
            <div id="header_menu__nav">
                <a href="../Trangchu/Trangchu.html" class="itemSelected">Trang chủ</a>
            <ul>
                <li><a href="#">Du lịch <img class="nav_tick" src="File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a href="../DuLichTrongNuoc/DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.html">Du lịch trong nước</a></li>
                        <li><a href="../DuLichNuocNgoai/DuLichNuocNgoai__Tour/DuLichNuocNgoai__Tour.html">Du lịch nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a id="header_hotel" href="#">Khách sạn <img class="nav_tick" src="File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a id="domestic_hotel" href="../KhachsanTrongnuoc/Ks_tn.php">Khách sạn trong nước</a></li>
                        <li><a href="../KhachsanNuocngoai/Ks_nc.php">Khách sạn nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <a href="../Code-TravelTips/index.html">Traval tips</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
            <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
            <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
            </div>
        </nav> -->
        <div class="div_domesticHotel"></div>
        <p id="tag_domesticHotel">Khu nghỉ dưỡng Fusion Phú Quốc</p>
        <img id="logo_header" src="File/fusion.svg" alt="Header_picture_Home">
    </header>
    <main>
        <h1>Khu nghỉ dưỡng Fusion Phú Quốc</h1>
        <div id="content-down">
            <img src="File/star.svg" alt="Đánh giá">
            <p id="hotel__content--point"><b style="color: black;">4.8</b></p>
            <p>Tuyệt vời <span style="color: black;">| 158 đánh giá</span></p>
        </div>
        <img id="hotel__content--location-logo" src="File/location.svg" alt="location">
        <p id="hotel__content--location">Bãi Dài, X. Gành Dầu, H. Phú Quốc, T. Kiên Giang</p>
        <div class="grid-container">
            <img id="item1" src="File/fusion1.png" alt="Fusion_PhuQuoc">
            <img id="item2" src="File/fusion2.png" alt="Fusion_PhuQuoc">
            <img id="item3" src="File/fusion3.png" alt="Fusion_PhuQuoc">
            <img id="item4" src="File/fusion4.png" alt="Fusion_PhuQuoc">
            <img id="item5" src="File/fusion5.png" alt="Fusion_PhuQuoc">
        </div>
        <h2 class="tag-convenient">Tiện nghi khách sạn</h2>
        <div class="convenient" id="convenient1">
            <img src="File/convenient1.svg" alt="Cho thuê xe">
            <p>Cho thuê xe</p>
        </div>
        <div class="convenient" id="convenient2">
            <img src="File/convenient2.svg" alt="Bữa sáng">
            <p>Bữa sáng</p>
        </div>
        <div class="convenient" id="convenient3">
            <img src="File/convenient3.svg" alt="Ủi đồ">
            <p>Ủi đồ</p>
        </div>
        <div class="convenient" id="convenient4">
            <img src="File/convenient4.svg" alt="Hồ bơi">
            <p>Hồ bơi</p>
        </div>
        <div class="convenient" id="convenient5">
            <img src="File/convenient5.svg" alt="Wifi">
            <p>Wifi</p>
        </div>
        <div class="convenient" id="convenient6">
            <img src="File/convenient6.svg" alt="Dọn dẹp">
            <p>Dọn dẹp</p>
        </div>
        <h2 class="tag-infomation">Thông tin</h2>
        <?php echo $row_ct["Content"]; ?>
        <div class="wapper__content">

            <div class="wapper__content__nav">
                <button class="btn_chonphong" id="wapper__content__nav--selected" onclick="chuongtrinh_selected()">
                    <p>Chọn phòng</p>
                </button>
                <button class="btn_chinhsach" onclick="chinhsach_selected()">
                    <p>Chính sách</p>
                </button>
                <button class="btn_thacmac" onclick="thacmac_selected()">
                    <p>Thắc mắc</p>
                </button>
            </div>

            <hr class="wapper__content--hr">

            <div class="wapper__content--content">
                <?php while($row = $kq->fetch_assoc()) { ?>
                <div class="room">
                    <div class="grid-room">
                        <img id="grid-room__1" src="File/Room1.png" alt="Room1">
                        <img id="grid-room__2" src="File/Room2.png" alt="Room2">
                        <img id="grid-room__3" src="File/Room3.png" alt="Room3">
                    </div>
                    <div class="room-content">
                        <h3><?php echo $row["Name_Phong"] ?></h3>
                        <div id="room-content__icon1">
                            <img src="File/icon-room1.svg" alt="icon">
                            <p><?php echo $row["Area"] ?>m<sup>2</sup></p>
                        </div>
                        <div id="room-content__icon2">
                            <img src="File/icon-room2.svg" alt="icon">
                            <p><?php echo $row["Facing"] ?></p>
                        </div>
                        <div id="room-content__content">
                            <?php echo $row["Description"] ?>
                        </div>
                        <div id="room-content__room">
                            <div id="room-content__room1">
                                <img src="File/icon-pp.svg" alt="people">
                                <p>X2 người</p>
                            </div>
                            <div id="room-content__room2">
                                <img src="File/icon-bed.svg" alt="icon-bed">
                                <p>1 giường King</p>
                            </div>
                        </div>
                        <div id="book-room">
                            <p><b><?php echo $row["Price"] ?> / đêm</b></p>
                            <a href="#">
                                <p id="book-room__datphong"><b>Đặt phòng</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="wapper__content--content wapper__hidden__content">
                <?php echo $row_ct["Conten_CS"] ?>
            </div>
            <div class="wapper__content--content wapper__hidden__content">
                <div class="danhgiachung">
                    <div class="danhgia__title">
                        <p>Đánh giá của khách hàng về khách sạn</p>
                    </div>
                    <div class="danhgia__voting">
                        <img id="dalat_danhgia" src="File/Fusion-PhuQuoc.png" alt="Hình ảnh Phú Quốc">
                        <div class="hihiandhehe">
                            <div class="dalat_danhgia_hihi">
                                <img src="File/5star.png" id="fivesao_img">
                                <div class="count_voting">
                                    <p>158 đánh giá</p>
                                </div>
                                <p class="huhu">4.8</p>
                            </div>
                            <div class="dalat_danhgia_hehe">
                                <div id="one_sao" class="voting full__voting">
                                    <p class="huhu">1.0</p>
                                </div>
                                <div id="two_sao" class="voting">
                                    <p class="huhu">2.0</p>
                                </div>
                                <div id="three_sao" class="voting">
                                    <p class="huhu">3.0</p>
                                </div>
                                <div id="four_sao" class="voting">
                                    <p class="huhu">4.0</p>
                                </div>
                                <div id="five_sao" class="voting">
                                    <p class="huhu">5.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="File/5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Phú Quốc lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="File/5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Phú Quốc lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="File/5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Phú Quốc lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="File/5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Phú Quốc lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="btn_insert">
                    <button class="btn_insert--write">
                        Viết đánh giá
                    </button>
                    <button class="btn_insert--more">
                        Xem thêm đánh giá
                    </button>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <img src="File/timthumb_1.png" alt="teamwork_image">
        <div class="transparent-shape"></div>
        <div class="content">
            <div class="information">
                <h2>Thông tin công ty</h2>
                <p>Công ty được thành lập từ tháng 9 năm 2021 </p>
                <p>Dẫn đầu danh sách ít khách du lịch nhất Việt Nam</p>
                <p> Với những chiến lược kinh doanh vô cùng hiệu quả thì hiện nay công ty đang dần chuyển sang bán kem trộn 
                để cải thiện tiềm lực kinh tế</p>
               
            </div>
            <div class="working-time">
                <h2>Thời gian làm việc</h2>
                <p>Thứ 2: từ 6h00 - 17h00</p>
                <p>Thứ 3: từ 6h00 - 17h00</p>
                <p>Thứ 4: từ 6h00 - 17h00</p>
                <p>Thứ 5: từ 6h00 - 17h00</p>
                <p>Thứ 6: từ 6h00 - 17h00</p>
                <p>Thứ 7: từ 6h00 - 17h00</p>
                <p>Chủ nhật: từ 6h00 - 17h00</p>
            </div>
            <div class="support">
                <h2>Hỗ trợ</h2>
                <p>Quên mật khẩu?</p>
                <p>FAQ</p>
            </div>
            <div class="contact">
                <div class="address">
                    <span class="ti-location-pin"></span>
                    <h2>Địa chỉ</h2>
                    <p>Vincom Thủ Đức</p>
                </div>
                <div class="phone-number">
                    <span class="ti-mobile"></span>
                    <h2>Điện thoại</h2>
                    <p>0123456789</p>
                </div>
                <div class="email">
                    <span class="ti-email"></span>
                    <h2>Email</h2>
                    <p>kemkabi_chipu@gmail.com</p>
                </div>
                <hr>
                <p>Kết nối với chúng tôi:</p>
                <span class="ti-facebook"></span>
                <span class="ti-google"></span>
                <span class="ti-linkedin"></span>
            </div>
        </div>
        <p id="copyright">Copyright &copy 2021 UITour Company</p>
    </footer>
</body>

</html>

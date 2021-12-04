<?php
    $host = "localhost";
    $host_user ="root";
    $host_password = "";
    $database = "ie104_m12";

    $conn = new mysqli($host, $host_user, $host_password, $database);

    $sql = "SELECT * FROM hotel where type = 1 order by Hotel_Id desc" ;
    $kq = $conn->query($sql);
    $sql_price = "SELECT * FROM hotel where type = 1 order by Price" ;
    $kq_price = $conn->query($sql_price);
    $sql_voting = "SELECT * FROM hotel where type = 1 order by Price desc" ;
    $kq_voting = $conn->query($sql_voting);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ks_tn.css">
    <script src="ks_tn.js" defer></script>
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="File/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>UITour</title>
</head>

<body>
    <header>
        <nav class="header_menu">
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
        </nav>
        <div class="div_domesticHotel"></div>
        <p id="tag_domesticHotel">KHÁCH SẠN TRONG NƯỚC</p>
        <img id="logo_header" src="File/Picture_header.svg" alt="Header_picture_Home">
        <form class="searchBar" action="Ks_tn__search.php" method="POST">
            <div class="searchBar__location">
                <p><strong>Địa điểm</strong></p>
                <div class="searchBar__location--input">
                    <img class="searchBar__location--img" src="File/location.svg">     
                    <input id="location__input" name="input__location" type="text" placeholder="Bạn muốn đi đâu?">
                </div>
                <div class="autobox">
    
                </div>
            </div>
            <div class="searchBar__date">
                <p><strong>Ngày đi</strong></p>
                <div class="searchBar__date--input">
                    <img class="searchBar__date--img" src="File/date.svg">
                    <input id="myID" type="text" placeholder="Chọn ngày">
                </div>
            </div>
            <div class="searchBar__date">
                <p><strong>Ngày về</strong></p>
                <div class="searchBar__date--input">
                    <img class="searchBar__date--img" src="File/date.svg">
                    <input id="myID" type="text" placeholder="Chọn ngày">
                </div>
            </div>
            <div class="searchBar__tour">
                <div class="number-right treem number_box-decor">
                    <i class="fas fa-minus treemMinus"></i>
                    <span></span>
                    <i class="fas fa-plus treemPlus"></i>
                </div>
                <p><strong>Số phòng, số khách</strong></p>
                <div class="searchBar__tour--input">
                    <img class="searchBar__tour--img" src="File/icon-pp.svg">
                    <input id="tour__input" type="value" placeholder="Phòng-khách">
                </div>
                <div class="number-box">
                    <li id="decor_number_box">
                        <div class="number-left">
                            <p id="searbar-people">Phòng</p>
                        </div>
                    </li>
                    <li id="decor_number_box">
                        <div class="number-left">
                            <p id="searbar-people">Khách</p>
                        </div>
                    </li>
                </div>
            </div>
            <button class="searchBar__button">TÌM KIẾM</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("#myID", {
                dateFormat: "d-m-Y",
            });
        </script>
    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <main>
        <h1 id="tag_favorite">Điểm đến yêu thích trong nước</h1>
        <p id="tag_favorite--content">Khách sạn hàng đầu Việt Nam</p>
        <div class="grid-container">
            <div id="item1">
                <a href="../KhachsanTrongnuoc/ks_tn_PhuQuoc.html">
                    <p><b>Phú Quốc</b><br><span>124 khách sạn</span></p>
                    <img src="File/PhuQuoc.png" alt="Phú Quốc">
                </a>
            </div>
            <div id="item2">
                <p><b>Nha Trang</b><br><span>72 khách sạn</span></p>
                <img src="File/NhaTrang.png" alt="Nha Trang">
            </div>
            <div id="item3">
                <p><b>Sapa</b><br><span>56 khách sạn</span></p>
                <img src="File/Sapa.png" alt="Sapa">
            </div>
            <div id="item4">
                <p><b>Vũng Tàu</b><br><span>30 khách sạn</span></p>
                <img src="File/VungTau.png" alt="Vũng tàu">
            </div>
        </div>
        <h1 id="tag_hotel">Khách sạn trong nước</h1>
        <p id="tag_hotel--content">Trải nghiệm kỳ nghỉ dưỡng thú vị</p>
        <p id="sort"><b>Sắp xếp:</b></p>
        <div class="button_content">
            <button class="btn_moinhat" id="button_content__selected" onclick="moinhat_selected()">Mới nhất</button>
            <button class="btn_giathapnhat" onclick="giathapnhat_selected()">Giá thấp nhất</button>
            <button class="btn_danhgiacaonhat" onclick="danhgiacaonhat_selected()">Đánh giá cao nhất</button>
        </div>
        <div class="wrapper_content">
            <?php while($row = $kq->fetch_assoc()) { ?>
            <div class="hotel">
                <p><?php echo $row["header_description"] ?></p>
                <a href="../KhachsanTrongnuoc/Fusion_PhuQuoc.php" style="text-decoration: none;">
                    <img class="hotel__content" src="File/<?php echo $row["img_hotel"] ?>" alt="<?php echo $row["Name_Hotel"] ?>">
                    <div class="hotel__content" id="hotel__content--center">
                        <h3 style="color: black;"><?php echo $row["Name_Hotel"] ?></h3>
                        <img src="File/star.svg" alt="Đánh giá">
                        <p id="hotel__content--point"><b>4.8</b></p>
                        <p>Tuyệt vời <span style="color: black;">| 158 đánh giá</span></p>
                        <img id="hotel__content--location-logo" src="File/location.svg" alt="location">
                        <p id="hotel__content--location"><?php echo $row["Location"] ?></p>
                        <?php echo $row["Description_Hotel"] ?>
                        <p id="hotel__content--highlight-star"><img src="File/highlight-star.svg" alt="highlight"><?php echo $row["Highlight"] ?></p>
                    </div>
                    <div class="hotel__content" id="hotel__content--buy">
                        <p><strong><?php echo $row["Price"] ?></strong></p>
                        <div id="buy-now">
                            <img src="File/buy.svg" alt="Buy now">
                            <p><b>Đặt phòng ngay</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class="wrapper_content wrapper_content--hidden">
            <?php while($row_price = $kq_price->fetch_assoc()) { ?>
            <div class="hotel">
                <p><?php echo $row_price["header_description"] ?></p>
                <a href="../KhachsanTrongnuoc/Fusion_PhuQuoc.php" style="text-decoration: none;">
                    <img class="hotel__content" src="File/<?php echo $row_price["img_hotel"] ?>" alt="<?php echo $row_price["Name_Hotel"] ?>">
                    <div class="hotel__content" id="hotel__content--center">
                        <h3 style="color: black;"><?php echo $row_price["Name_Hotel"] ?></h3>
                        <img src="File/star.svg" alt="Đánh giá">
                        <p id="hotel__content--point"><b>4.8</b></p>
                        <p>Tuyệt vời <span style="color: black;">| 158 đánh giá</span></p>
                        <img id="hotel__content--location-logo" src="File/location.svg" alt="location">
                        <p id="hotel__content--location"><?php echo $row_price["Location"] ?></p>
                        <?php echo $row_price["Description_Hotel"] ?>
                        <p id="hotel__content--highlight-star"><img src="File/highlight-star.svg" alt="highlight"><?php echo $row_price["Highlight"] ?></p>
                    </div>
                    <div class="hotel__content" id="hotel__content--buy">
                        <p><strong><?php echo $row_price["Price"] ?></strong></p>
                        <div id="buy-now">
                            <img src="File/buy.svg" alt="Buy now">
                            <p><b>Đặt phòng ngay</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>

        <div class="wrapper_content wrapper_content--hidden">
            <?php while($row_voting = $kq_voting->fetch_assoc()) { ?>
            <div class="hotel">
                <p><?php echo $row_voting["header_description"] ?></p>
                <a href="../KhachsanTrongnuoc/Fusion_PhuQuoc.php" style="text-decoration: none;">
                    <img class="hotel__content" src="File/<?php echo $row_voting["img_hotel"] ?>" alt="<?php echo $row_voting["Name_Hotel"] ?>">
                    <div class="hotel__content" id="hotel__content--center">
                        <h3 style="color: black;"><?php echo $row_voting["Name_Hotel"] ?></h3>
                        <img src="File/star.svg" alt="Đánh giá">
                        <p id="hotel__content--point"><b>4.8</b></p>
                        <p>Tuyệt vời <span style="color: black;">| 158 đánh giá</span></p>
                        <img id="hotel__content--location-logo" src="File/location.svg" alt="location">
                        <p id="hotel__content--location"><?php echo $row_voting["Location"] ?></p>
                        <?php echo $row_voting["Description_Hotel"] ?>
                        <p id="hotel__content--highlight-star"><img src="File/highlight-star.svg" alt="highlight"><?php echo $row_voting["Highlight"] ?></p>
                    </div>
                    <div class="hotel__content" id="hotel__content--buy">
                        <p><strong><?php echo $row_voting["Price"] ?></strong></p>
                        <div id="buy-now">
                            <img src="File/buy.svg" alt="Buy now">
                            <p><b>Đặt phòng ngay</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>

        <section class="partner">
            <h1 id="tag_partner">Một số đối tác khách sạn</h1>
            <img id="partner__hotel" src="File/hotel.svg" alt="hotel">
            <img id="partner__marriott" src="File/Marriott.png" alt="Marriott">
            <img id="partner__marriott-partner" src="File/part-marriott.png" alt="Marriott-partner">
            <ul>
                <li>Là một trong những tập đoàn khách sạn lớn nhất trên thế giới.</li>
                <li>Sở hữu hơn 30 thương hiệu với hơn 5700 khách sạn trong đó gồm 1,1 triệu phòng có mặt hầu hết trên
                    110 quốc gia.</li>
                <li>Các thương hiệu tại Việt Nam như: Sheraton Nha Trang, JW Marriott Hanoi, JW Marriott Phu Quoc,...
                </li>
            </ul>
        </section>
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
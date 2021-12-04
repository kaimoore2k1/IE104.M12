<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact.css">
    <link rel="stylesheet" href="../Footer/themify-icons/themify-icons.css">
    <title>Contact</title>
</head>
<body>
    <!-- <header>
        <nav class="header_menu">
            <img id="logo_uitour" src="../Trangchu/File/logo_header.png" alt="logo_uitour">
            <a href="../Trangchu/Trangchu.html" >Trang chủ</a>
            <ul>
                <li><a href="#">Du lịch</a>
                    <ul>
                        <li><a href="../DuLichTrongNuoc/DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.html">Du lịch trong nước</a></li>
                        <li><a href="../DuLichNuocNgoai/DuLichNuocNgoai__Tour/DuLichNuocNgoai__Tour.html">Du lịch nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Khách sạn</a>
                    <ul>
                        <li><a href="../KhachsanTrongnuoc/Ks_tn.html">Khách sạn trong nước</a></li>
                        <li><a href="#">Khách sạn nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <a href="../Code-TravelTips/index.html">Traval tips</a>
            <a href="#">Giới thiệu</a>
            <a href="#" class="itemSelected">Liên hệ</a>
            <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
            <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
        </nav>
        <img src="../Contact/banner.png" class="banner" alt="background">
    </header> -->
    
    <img src="../Contact/banner.png" class="banner" alt="background">
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <script src="../Trangchu/Trangchu.js"></script>
    <main>
        <div class="contact-information">
            <div class="title"><h2>Thông tin liên hệ</h2></div>
            <div class="information">
                <p>Công ty cổ phần du lịch Việt Nam UITour</p>
                <div>
                    <img src="../Contact/Place_Marker.png" alt="Địa chỉ công ty">
                    <p>Vincom Thủ Đức</p>
                </div>
                <div>
                    <img src="../Contact/Future.png" alt="Thời gian hoạt động">
                    <p>Từ 8h30 - 18h00 hằng ngày</p>
                </div>
                <div>
                    <img src="Phone.png" alt="Số điện thoại">
                    <p>0123456789</p>
                </div>
                <div>
                    <img src="Secured_Letter.png" alt="Địa chỉ Email">
                    <p>kemkabi_chipu@gmail.com</p>
                </div>
                <p>Kết nối với UITour</p>
                <div class="social-icon">
                    <img src="../Contact/Facebook-icon.png" alt="Facebook icon">
                    <img src="../Contact/Instagram-icon.png" alt="Instagram icon">
                    <img src="../Contact/Google-icon.png" alt="Google icon">
                </div>
                <img src="../Contact/map.png" alt="Địa chỉ trên Google map">
            </div>
        </div>
        <div class="feedback-form">
            <div class="title"><h2>Ý kiến đóng góp của khách hàng</h2></div>
            <div class="form">
                <form action="Process.php" method="post">
                    <div>
                        <p>Họ tên <span class="required-field">*</span></p>
                        <input type="text" id="full-name" name="full-name">
                    </div>
                    <div>
                        <p>Số điện thoại <span class="required-field">*</span></p>
                        <input type="text" id="phone-number" name="phone-number">
                    </div>
                    <div>
                        <p>Email <span class="required-field">*</span></p>
                        <input type="text" name="email" id="email">
                    </div>
                    <div>
                        <p>Chủ đề</p>
                        <input type="text" name="topic" id="topic">
                    </div>
                    <div>
                        <p>Nội dung</p>
                        <textarea name="content" id="content"  ></textarea>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Gửi">
                </form>
            </div>
        </div>
    </main>
    <?php include "../Footer/footer.html" ?>
    <!-- <footer>
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
    </footer> -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="intro.css">
    <link rel="stylesheet" href="../Footer/themify-icons/themify-icons.css">
    <title>Introduction</title>
</head>
<body>
    <header>
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
            <a href="#" class="itemSelected">Giới thiệu</a>
            <a href="#">Liên hệ</a>
            <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
            <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
        </nav>
        <img src="../Introduction/Image_1.png" id="background" alt="background">

    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <script src="../Trangchu/Trangchu.js"></script>
    <main>
        <section class="information">
            <img src="../Introduction/company_1.png"  alt="Company Image">
            <div>
                <strong><em>UITour company</em></strong>
                <p> Một trong những yếu tố hàng đầu để những chuyến du lịch, công tác của bạn trở nên nhẹ nhàng, thoải mái là chọn được
                một công ty du lịch uy tín chất lượng. UITour là nhà cung cấp các dịch vụ du lịch, vận chuyển hàng đầu Việt Nam.</p>
                <p>UITour phát triển với định hướng mang lại cho khách hàng những chuyến du lịch chất lượng và những trải nghiệm tuyệt vời. 
                Mặc dù công ty mới thành lập từ tháng 9/2021 nhưng với những chiến lược kinh doanh hiệu quả công ty đã đạt được nhiều 
                thành tựu và khẳng định được vị thế của mình.</p>
            </div>
        </section>
        <section class="feature">
            <div>
                <strong>Tầm nhìn</strong>
                <p>Trở thành nhà cung cấp Dịch vụ du lịch và vận chuyển hàng đầu Việt Nam</p>
            </div>
            <div>
                <strong>Sứ mệnh</strong>
                <p>Nghiên cứu phát triển các giải pháp nhằm nâng cao chất lượng du lịch vì mục tiêu phát triển và tạo dựng giá trị bền vững 
                cho doanh nghiệp</p>
            </div>
            <div>
                <strong>Giá trị cốt lõi</strong>
                <p>Chuyên nghiệp <br>
                Tận tâm <br>
                Đổi mới <br>
                Sáng tạo <br>
                Bền vững</p>
            </div>
        </section>
        <section class="reason-for-choice">
            <img src="../Introduction/Thap_dong_ho _1.png" alt="Thap dong ho">
            <div class="transparent-shape"></div>
            <div class="content">
                <div>Lý do chọn UITour?</div>
                <div>
                    <img src="../Introduction/bytesize_cart.png" alt="Hỗ trợ đặt tour">
                    <p><strong> Hỗ trợ 24/7</strong></p>
                    <p>Một trong những đơn vị đi đầu trong việc đặt tour online tốt nhất Việt Nam. Áp dụng những công nghệ hiện đại nhất</p>
                </div>
                <div>
                    <img src="../Introduction/si-glyph_customer-support.png" alt="Hỗ trợ khách hàng">
                    <p><strong>Hỗ trợ 24/7 </strong></p>
                    <p>Luôn giải đáp mọi thắc mắc của khách hàng dù bất kì thời gian nào trong ngày. Liên hệ ngay để trải nghiệm</p>
                </div>
                <div>
                    <img src="../Introduction/whh_sale.png" alt="Các ưu đãi">
                    <p><strong> Giá rẻ & nhiều ưu đãi</strong></p>
                    <p>Phương châm của công ty là để mọi người mọi nhà đều có thể đi du lịch với giá cả hợp lý</p>
                </div>
            </div>
        </section>
        <section class="staffs">
            <p>Đội ngũ nhân viên</p>
            <div>
                <img src="../Introduction/Park_Bo_Gum_1.png" alt="Giám đốc">
                <p><strong>Park Bo Gum</strong><br>Tổng giám đốc</p>
            </div>
            <div>
                <img src="../Introduction/Lisa_1.png" alt="Thư ký">
                <p><strong>Nguyễn Thị Lisa</strong><br> Thư ký</p>
            </div>
        </section>
    </main>
    <footer>
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
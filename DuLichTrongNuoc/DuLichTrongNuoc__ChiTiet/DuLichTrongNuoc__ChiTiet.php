<?php
    require "../connect.php";
    $get_idTour = $_GET['id'];
    $sql = "SELECT * FROM TOUR, CT_TOUR WHERE TOUR.TOUR_ID = CT_TOUR.TOUR_ID AND TOUR.TOUR_ID = '$get_idTour'";
    $kq = $conn->query($sql);
    $check = $kq->fetch_assoc();
    if(!$check){
        echo "<script>
            alert('Sản phẩm đang được hoàn thiện, vui lòng trở lại sau!!!')
            window.location.href = '../DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.php'
        </script>";
        /* header("location:../DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.php"); */
    }
    $myJSON = $check['CT_Tour_Img'];
    $obj = json_decode($myJSON, true);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DuLichTrongNuoc__ChiTiet.css">
    <link rel="stylesheet" href="/Footer/footer.css">
    <title>Du lịch trong nước</title>
</head>

<body>
    <header>
        <nav class="header_menu">
            <img id="logo_uitour" src="/Trangchu/File/logo_header.png" alt="logo_uitour">
            <a id="header_home" href="/Trangchu/Trangchu.html">Trang chủ</a>
            <ul>
                <li><a href="#" class="itemSelected">Du lịch</a>
                    <ul>
                        <li><a href="/DuLichTrongNuoc/DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.html">Du lịch trong
                                nước</a></li>
                        <li><a href="/DuLichNuocNgoai/DuLichNuocNgoai__Tour/DuLichNuocNgoai__Tour.html">Du lịch nước
                                ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Khách sạn</a>
                    <ul>
                        <li><a href="/KhachsanTrongnuoc/Ks_tn.html">Khách sạn trong nước</a></li>
                        <li><a href="#">Khách sạn nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/Code-TravelTips/index.html">Traval tips</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
            <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
            <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
        </nav>
        <img id="logo_header" src="DaLatBanner.jpg" alt="Header_picture_Home">
        <div class="Header__title">
            <div class="Header__title--layer">
            </div>
            <p><?php echo $check['Tour_Name']; ?></p>
        </div>
    </header>
    <div class="Dulich_Help">
        <p id="help_support">Hỗ trợ khách hàng</p>
        <p class="infor">
            <img src="phone_support.svg">
            Hotline: 12345 67890 <br>
            <img src="mail_support.svg">
            Email: kemkapi_chipu@gmail.com
        </p>
        <button>Đặt tour ngay</button>
    </div>
    <div class="overlay_pdf">

    </div>
    <form id="bookingForm" name="bookingForm" method="POST" action="bookingTour.php">
        <h1>THÔNG TIN LIÊN HỆ</h1>
        <div class="bookTourInfor">
            <img src="dalat1.jpg" alt="dalat picture">
            <div class="bookTourInfor__detail">
                <p id="bookTourInfor__detail--code">Mã tour: <?php echo $check['Tour_Id'] ?></p>
                <p id="bookTourInfor__detail--time">Thời gian: <?php echo $check['Tour_Time'] ?></p>
                <p id="bookTourInfor__detail--transport">Phương tiện: <?php echo $check['Transport'] ?></p>
                <p id="bookTourInfor__detail--des">Điếm đến: <?php echo $check['Destination'] ?></p>
                <p id="bookTourInfor__detail--price">Giá: <?php echo $check['Price'] ?> VNĐ</p>
            </div>

            <div class="bookTourInfor__cus">
                <label for="bookTourInfor__cus--name">Họ và tên</label><br>
                <input type="text" name="bookTourInfor__cus--name" id="bookTourInfor__cus--name" required><br>
                <label for="bookTourInfor__cus--phonenum">Số điện thoại</label><br>
                <input type="text" name="bookTourInfor__cus--phonenum" id="bookTourInfor__cus--phonenum" required><br>
                <label for="bookTourInfor__cus--email">Email</label><br>
                <input type="text" name="bookTourInfor__cus--email" id="bookTourInfor__cus--email" required><br>
                <input name="btn_bookTour" id="submit__exitOverlay" type="submit" value="GỬI THÔNG TIN" onclick="on()">
            </div>
        </div>
    </form>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="/sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="/sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <div class="responseBox--background"></div>

    <div class="responseBox" id="responseBox">
        <div class="responseBox_tittle">
            <img src="checked_tick.svg" alt="checked_tick">
            <p>BẠN ĐÃ ĐĂNG KÝ TOUR THÀNH CÔNG</p>
        </div>
        <p class="responseBox--message">Chúng tôi sẽ liên hệ để xác nhận thông tin của bạn trong vòng <strong>24
                giờ</strong> , chân thành cảm ơn bạn đã sử dụng dịch vụ của chúng tôi</p>
    </div>
    <script src="DuLichTrongNuoc__Booking.js"></script>
    <iframe seamless="seamless" class="InTour__PDF" src="../DuLichTrongNuoc__PDF/DuLichTrongNuoc__PDF.php?id=<?php echo $check['Tour_Id']; ?>"
        frameborder="0"></iframe>
    <article class="article__wapper">
        
        <div class="wapper__intro">
            <div class="wapper__intro--infor"> 
                <p>
                    THỜI GIAN: <?php echo $check['Tour_Time']; ?> <br>
                    ĐIỂM XUẤT PHÁT: <?php echo $check['Departure']; ?>
                </p>
                <p>
                    PHƯƠNG TIỆN: <?php echo $check['Transport']; ?> <br>
                    ĐIỂM ĐẾN: <?php echo $check['Destination']; ?>
                </p>
            </div>
            <div class="wapper__intro--descript">
                <p> <strong>Tour này có gì hay</strong> <br>
                <?php echo $check['Tour_Highlight']; ?>
            </div>
        </div>

        <button class="wapper__inTour">
            <p>In chương trình tour</p>
            <img src="print.svg" alt="print">
        </button>

        <div class="wapper__gallery">
            <?php
                
                for ($i = 0; $i < count($obj['gallery']); $i++) {
                    echo  "<img src='".$obj['gallery'][$i]."' class='now_img'>";
                }
            ?>
        </div>

        <div class="wapper__content">

            <div class="wapper__content__nav">
                <button class="btn_chuongtrinh" id="wapper__content__nav--selected" onclick="chuongtrinh_selected()">
                    <p>Chương trình Tour</p>
                </button>
                <button class="btn_chinhsach" onclick="chinhsach_selected()">
                    <p>Chính sách Tour</p>
                </button>
                <button class="btn_thacmac" onclick="thacmac_selected()">
                    <p>Thắc mắc</p>
                </button>
            </div>

            <hr class="wapper__content--hr">

            <div class="wapper__content--content">
                <?php echo $check['Content_CT']; ?>
            </div>

            <div class="wapper__content--content wapper__hidden__content">
                <?php echo $check['Content_CS']; ?>
            </div>

            <div class="wapper__content--content wapper__hidden__content">
                <div class="danhgiachung">
                    <div class="danhgia__title">
                        <p>Đánh giá của khách hàng về Tour</p>
                    </div>
                    <div class="danhgia__voting">
                        <img id="dalat_danhgia" src="dalat_danhgia.jpg" alt="Hình ảnh Đà Lạt">
                        <div class="hihiandhehe">
                            <div class="dalat_danhgia_hihi">
                                <img src="5star.png" id="fivesao_img">
                                <div class="count_voting">
                                    <p>142 đánh giá</p>
                                </div>
                                <p class="huhu">5.0</p>
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
                        <img src="5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Đà Lạt lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Đà Lạt lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Đà Lạt lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
                    </div>
                </div>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong>Đào Nguyên Trọng Khôi</strong></p>
                        <img src="5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p>Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh
                            chóng, chuyến đi Đà Lạt lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.</p>
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
    </article>
    <footer>
        <img src="/Footer/teamwork_1536.jpg" alt="teamwork_image">
        <p id="copyright">Copyright &copy 2021 UITour Company</p>
        <div id="transparency"></div>
        <section class="info">
            <h2 class="info__title">Thông tin công ty</h2>
            <hr class="info__underline"><br>
            <div>
                <p>Công ty được thành lập từ tháng 9 năm 2021</p>
                <p>Dẫn đầu danh sách ít khách du lịch nhất Việt Nam </p>
                <p>Với những chiến lược kinh doanh vô cùng hiệu quả thì hiện nay công ty đang dần chuyển sang bán kem
                    trộn để cải thiện tiềm lực kinh tế</p>
            </div>

        </section>
        <section class="working-time">
            <h2 class="working-time__title">Thời gian làm việc</h2>
            <hr class="working-time__underline"><br>
            <ul>
                <il>
                    <p>Thứ 2: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Thứ 3: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Thứ 4: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Thứ 5: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Thứ 6: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Thứ 7: từ 6h00 - 17h00</p>
                </il>
                <il>
                    <p>Chủ nhật: từ 6h00 - 17h00</p>
                </il>
            </ul>
        </section>
        <section class="support">
            <h2 class="support__title">Hỗ trợ</h2>
            <hr class="support__underline">
            <div>
                <p>Quên mật khẩu?</p>
                <p>FAQ</p>
            </div>
        </section>
        <section class="connection">

            <span class="ti-location-pin"></span>
            <div class="connection__address">
                <p><strong>Địa chỉ</strong><br>Vincom Thủ Đức</p>
            </div>

            <span class="ti-mobile"></span>
            <div class="connection__phone">
                <p><strong>Điện thoại</strong><br>0123456789</p>
            </div>
            <span class="ti-email"></span>
            <div class="connection__email">
                <p><strong>Email</strong><br>kemkabi_chipu@gmail.com</p>
            </div>
            <hr>
            <p>Kết nối với chúng tôi:</p>
            <span class="ti-facebook"></span>
            <span class="ti-google"></span>
            <span class="ti-linkedin"></span>
        </section>
    </footer>
    <script src="/Trangchu/Trangchu.js"></script>
    <script>
        let overlay = document.querySelector('.overlay_pdf')
        let pdf = document.querySelector('.InTour__PDF')
        let bookTour = document.querySelector('.Dulich_Help')
        let bookTourForm = document.querySelector('#bookingForm')
        let btn_inPDF = document.querySelector('.wapper__inTour')
        let submit__exitOverlay = document.querySelector('#submit__exitOverlay')
        submit__exitOverlay.addEventListener('click', exitOverlay)
        overlay.addEventListener('click', exitOverlay)

        function exitOverlay() {
            overlay.style.display = 'none'
            pdf.style.display = 'none'
            bookTourForm.style.display = 'none'
        }
        btn_inPDF.addEventListener('click', showOverlay)

        function showOverlay() {
            overlay.style.display = 'block'
            pdf.style.display = 'block'
        }
        bookTour.addEventListener('click', bookingTour)

        function bookingTour() {
            overlay.style.display = 'block'
            bookTourForm.style.display = 'block'
        }

        function on() {
            document.getElementById("responseBox").style.display = "block";
            setTimeout(() => {
                document.getElementById("responseBox").style.display = "none";
            }, 3000);
        }
    </script>
    <script src="DuLichTrongNuoc__ChiTiet.js"></script>
</body>

</html>
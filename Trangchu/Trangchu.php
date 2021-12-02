<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="Trangchu.css">
    <title>UITour</title>
</head>

<body>
    <header>
        <?php include"../Header/Header.php" ?>
        <p id="h_p1">ĐIỂM ĐẾN THÚ VỊ</p>
        <p id="h_p2">Tận hưởng hành trình của bạn trong từng khoảnh khắc</p>
        <p id="h_link"><a href="#">TÌM HIỂU</a></p>
        <img id="logo_header" src="../Trangchu/File/Picture_header.svg" alt="Header_picture_Home">
        <div class="searchBar">
            <div class="searchBar__location">
                <img class="searchBar__location--img" src="File/location.svg">
                <p>
                    <strong>Địa điểm</strong>
                    <br>
                    Bạn muốn đi đâu?
                </p>
            </div>
            <div class="searchBar__date">
                <img class="searchBar__date--img" src="File/date.svg">
                <p>
                    <strong>Bắt đầu - Kết thúc</strong>
                    <br>
                    Chọn ngày
                </p>
            </div>
            <div class="searchBar__tour">
                <img class="searchBar__tour--img" src="File/human.svg">
                <p>
                    <strong>Loại Tour</strong>
                    <br>
                    Cá nhân - gia đình
                </p>
            </div>
            <button class="searchBar__button">TÌM KIẾM</button>
        </div>
        
    </header>

    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>

    <main>
        <section class="section1">
            <h2 class="section1__heading">Các dịch vụ được cung cấp</h2>
            <div class="section1__list">
                <a href="#" class="section1__list__item">
                    <img src="File/DuLich.png" alt="Du lịch">
                </a>
                <a href="#" class="section1__list__item">
                    <img src="File/LuuTru.png" alt="Lưu trú">
                </a>
                <a href="#" class="section1__list__item">
                    <img src="File/GiaiTri.png" alt="Giải trí">
                </a>
            </div>
        </section>
        <section class="section2">
            <h2 class="section1__heading section2__heading">Danh mục đề xuất</h2>
            <div class="section2__slideshow">
                <div class="section2__cricle">
                    <span class="dot" onclick="currenSlide(0)"></span>
                    <span class="dot" onclick="currenSlide(1)"></span>
                    <span class="dot" onclick="currenSlide(2)"></span>
                    <span class="dot" onclick="currenSlide(3)"></span>
                </div>
                <div class="slide__wapper">
                    <div href="#" class="slides">
                        <img src="File/Slide1.png" alt="Paris-Pháp">
                    </div>
                    <div href="#" class="slides">
                        <img src="File/Slide2.png" alt="Paris-Pháp">
                    </div>
                    <div href="#" class="slides">
                        <img src="File/Slide3.png" alt="Paris-Pháp">
                    </div>
                    <div href="#" class="slides">
                        <img src="File/Slide4.png" alt="Paris-Pháp">
                    </div>
                </div>
            </div>
            <script>
                var slideIndex = 0;

                function showSlide() {
                    var i;
                    var slides = document.getElementsByClassName("slides");
                    var dots = document.getElementsByClassName("dot");

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "")
                    }
                    slides[slideIndex].style.display = "block";
                    dots[slideIndex].className += " active";
                    //chuyển silde
                    slideIndex++;
                    //nếu chuyển tới slide cuối cùng thì quay lại slide đầu tiên
                    if (slideIndex > slides.length - 1) {
                        slideIndex = 0;
                    }
                }
                setInterval(showSlide, 3000);
                showSlide(slideIndex = 0);
                function currenSlide(n) {
                    showSlide(slideIndex = n);
                }

            </script>
        </section>
        <section class="section_3">
            <h1>Điểm đến yêu thích</h1>
            <div id="div_1">
                <img src="File/Dalat.png" alt="Đà Lạt">
                <p>Đà Lạt</p>
            </div>
            <div id="div_2">
                <img src="File/Sapa.png" alt="Sapa">
                <p>Sapa</p>
            </div>
            <div id="div_3">
                <img src="File/Japan.png" alt="Nhật Bản">
                <p>Nhật Bản</p>
            </div>
            <div id="div_4">
                <img src="File/Phuquoc.png" alt="Phú Quốc">
                <p>Phú Quốc</p>
            </div>
        </section>
        <section class="section_4">
            <div id="div_5">
                <img id="Phone" src="File/Phone.png" alt="Phone">
                <p id="p_1">Tải ứng dụng UITour</p>
                <p id="p_2">Đặt tour, vé máy bay, khách sạn và nhiều thứ khác</p>
                <img id="Qr" src="File/Qr.png" alt="Mã Qr">
                <img id="App" src="File/App.png" alt="App">
                <ul>
                    <li>Giá tôt hơn so với đặt phòng trực tiếp từ khách sạn</li>
                    <li>Nhân viên chăm sóc, tư vấn nhiều kinh nghiệm</li>
                    <li>Hơn 5000 khách sạn tại Việt Nam được đánh giá thực</li>
                    <li>Nhiều chương trình khuyến mãi và tích lũy điểm</li>
                    <li>Thanh toán dễ dàng đa dạng</li>
                </ul>
            </div>
        </section>
    </main>

    <footer>
        <img src="File/teamwork_1536.jpg" alt="teamwork_image">
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

    <script src="Trangchu.js"></script>
</body>

</html>
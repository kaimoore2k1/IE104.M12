<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Header/Header.css">
    <link rel="stylesheet" href="Trangchu.css">
    <script src="//code.tidio.co/kejfzg9uqghunwx4afuy5fvtocc7uk97.js" async></script>
    <title>UITour</title>
</head>

<body>
    <header>
        <?php include"../newHeader/newHeader.php" ?>
        <p id="h_p1">ĐIỂM ĐẾN THÚ VỊ</p>
        <p id="h_p2">Tận hưởng hành trình của bạn trong từng khoảnh khắc</p>
        <p id="h_link"><a href="../DuLichTrongNuoc/DuLichTrongNuoc__Tour.php?type=0x00">TÌM HIỂU</a></p>
        <img id="logo_header" src="../Trangchu/File/Picture_header.svg" alt="Header_picture_Home">
        <?php include"../searchBar/searchBar.html" ?>
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
                    <picture>
                    <source srcset="File/DuLichS.png" media="(max-width: 768px)">
                    <source srcset="File/DuLichR.png">
                    <img src="File/DuLichS.png" alt="Flowers">
                    </picture>
                </a>
                <a href="#" class="section1__list__item">
                <picture>
                    <source srcset="File/LuuTruS.png" media="(max-width: 768px)">
                    <source srcset="File/LuuTruR.png">
                    <img src="File/LuuTruS.png" alt="Flowers">
                    </picture>
                </a>
                <a href="#" class="section1__list__item">
                <picture>
                    <source srcset="File/GiaiTriS.png" media="(max-width: 768px)">
                    <source srcset="File/GiaiTriR.png">
                    <img src="File/GiaiTriS.png" alt="Flowers">
                </picture>
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
                <img src="File/Dalat.png" alt="Đà Lạt" onClick="location.href='../DuLichTrongNuoc/DuLichTrongNuoc__ChiTiet.php?id=12'">
                <p>Đà Lạt</p>
            </div>
            <div id="div_2">
                <img src="File/Sapa.png" alt="Sapa" onClick="location.href='../DuLichTrongNuoc/DuLichTrongNuoc__ChiTiet.php?id=1'">
                <p>Đài Loan</p>
            </div>
            <div id="div_3">
                <img src="File/Japan.png" alt="Nhật Bản" onClick="location.href='../DuLichTrongNuoc/DuLichTrongNuoc__ChiTiet.php?id=10'">
                <p>Nhật Bản</p>
            </div>
            <div id="div_4">
                <img src="File/Phuquoc.png" alt="Phú Quốc" onClick="location.href='../DuLichTrongNuoc/DuLichTrongNuoc__ChiTiet.php?id=11'">
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

    <?php include "../Footer/footer.html" ?>

    <script src="Trangchu.js"></script>
</body>

</html>
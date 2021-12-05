<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="Intro.css">
    <link rel="stylesheet" href="../Footer/themify-icons/themify-icons.css">
    <title>Introduction</title>
</head>
<body>
    <?php include "../newHeader/newHeader.php" ?>
    <img src="../Introduction/Image_1.png" id="background" alt="background">
    
    <main>
        <section class="information">
            <img src="../Introduction/company_1.png"  alt="Company Image">
            <div>
                <strong><em>UITour company</em></strong>
                <p> Một trong những yếu tố hàng đầu để những chuyến du lịch, công tác của bạn trở nên nhẹ nhàng, thoải mái là chọn được
                một công ty du lịch uy tín chất lượng. UITour là nhà cung cấp các dịch vụ du lịch, vận chuyển hàng đầu Việt Nam.</p>
                <br>
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
    <?php include "../Footer/footer.html" ?>
    <script>
        const decor_dulich = document.querySelector('#decor--gioithieu')

        decor_dulich.classList.add('itemSelected')
        document.querySelector('#decor--trangchu').classList.remove('itemSelected')
    </script>
</body>
</html>
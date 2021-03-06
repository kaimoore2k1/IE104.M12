<?php
    require "../connect.php";

    $sql = "SELECT * FROM hotel where type = 2 AND Location LIKE '%Italy%'";
    $kq = $conn->query($sql);
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ks_tn.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="File/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="ks_tn.js" defer></script>
    <title>UITour</title>
</head>

<body>
    <?php include"../newHeader/newHeader.php" ?> 
    <main>
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
        
        <div class="content">
            <div class="information" id="information">
                <h2>Thông tin công ty</h2>
                <p>Công ty được thành lập từ tháng 9 năm 2021 </p>
                <p>Dẫn đầu danh sách ít khách du lịch nhất Việt Nam</p>
                <p> Với những chiến lược kinh doanh vô cùng hiệu quả thì hiện nay công ty đang dần chuyển sang bán kem trộn 
                để cải thiện tiềm lực kinh tế</p>
               
            </div>
            <div class="working-time" id="working-time">
                <h2>Thời gian làm việc</h2>
                <p>Thứ 2: từ 6h00 - 17h00</p>
                <p>Thứ 3: từ 6h00 - 17h00</p>
                <p>Thứ 4: từ 6h00 - 17h00</p>
                <p>Thứ 5: từ 6h00 - 17h00</p>
                <p>Thứ 6: từ 6h00 - 17h00</p>
                <p>Thứ 7: từ 6h00 - 17h00</p>
                <p>Chủ nhật: từ 6h00 - 17h00</p>
            </div>
            <div class="support" id="support">
                <h2>Hỗ trợ</h2>
                <p>Quên mật khẩu?</p>
                <p>FAQ</p>
            </div>
            <div class="contact" id="contact">
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
                <div class="icon">
                    <span class="ti-facebook"></span>
                    <span class="ti-google"></span>
                    <span class="ti-linkedin"></span>
                </div>
            </div>
            <div id="copyright">Copyright &copy 2021 UITour Company</div>
           
        </div>
        
    </footer>
</body>

</html>

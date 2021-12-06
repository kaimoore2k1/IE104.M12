<?php
    require "../connect.php";
    $get_idTour = $_GET['id'];
    $sql = "SELECT * FROM TOUR, CT_TOUR WHERE TOUR.TOUR_ID = CT_TOUR.TOUR_ID AND TOUR.TOUR_ID = '$get_idTour'";
    $kq = $conn->query($sql);
    $check = $kq->fetch_assoc();
    if(!$check){
        echo "<script>
            alert('Sản phẩm đang được hoàn thiện, vui lòng trở lại sau!!!')
            window.location.href = 'DuLichTrongNuoc__Tour.php?type=0x00'
        </script>";
    }
    $myJSON = $check['CT_Tour_Img'];
    $obj = json_decode($myJSON, true);

    $sql_cmt = "SELECT * FROM evaluate, user WHERE CT_Tour_Id  = '$get_idTour' AND evaluate.User_Id = user.User_Id";
    $kq_cmt = $conn->query($sql_cmt);

    $sql_count = "SELECT COUNT(*) AS COUNT FROM evaluate";
    $kq_sql_count = $conn->query($sql_count);
    $row_count = $kq_sql_count->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DuLichTrongNuoc__ChiTiet/DuLichTrongNuoc__ChiTiet.css">
    <title>Du lịch trong nước</title>
    <script src="//code.tidio.co/kejfzg9uqghunwx4afuy5fvtocc7uk97.js" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <?php include"../newHeader/newHeader.php" ?> 
        <img id="logo_header" src="<?php echo $obj['banner']; ?>" alt="Header_picture_Home">
        <div class="Header__title">
            <div class="Header__title--layer">
            </div>
            <p><?php echo $check['Tour_Name']; ?></p>
        </div>
    </header>
    <div class="Dulich_Help">
        <p id="help_support">Hỗ trợ khách hàng</p>
        <p class="infor">
            <img src="DuLichTrongNuoc__ChiTiet/phone_support.svg">
            Hotline: 12345 67890 <br>
            <img src="DuLichTrongNuoc__ChiTiet/mail_support.svg">
            Email: kemkapi_chipu@gmail.com
        </p>
        <button>Đặt tour ngay</button>
    </div>
    <div class="overlay_pdf">
    </div>
    <form id="bookingForm" name="bookingForm" method="POST" action="bookingTour.php?id=<?php echo $get_idTour?>">
        <h1>THÔNG TIN LIÊN HỆ</h1>
        <div class="bookTourInfor">
            <img src="<?php echo $obj['gallery'][0]; ?>" alt="dalat picture">
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
                <input name="btn_bookTour" id="submit__exitOverlay" type="submit" value="GỬI THÔNG TIN">
            </div>
        </div>
    </form>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="/sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="/sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    
    <script src="DuLichTrongNuoc__Booking.js"></script>
    <iframe seamless="seamless" class="InTour__PDF" src="DuLichTrongNuoc__PDF/DuLichTrongNuoc__PDF.php?id=<?php echo $check['Tour_Id']; ?>"
        frameborder="0"></iframe>
    <div class="comment__warning">
        <img src="DuLichTrongNuoc__ChiTiet/warning.svg" alt="warning">
        <p>Bạn cần đăng nhập để viết đánh giá</p>
    </div>
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
            <img src="DuLichTrongNuoc__ChiTiet/print.svg" alt="print">
        </button>

        <div class="wapper__gallery">
            <?php
                
                for ($i = 0; $i < count($obj['gallery']); $i++) {
                    echo  "<img src=".$obj['gallery'][$i]." class='now_img'>";
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
                    <img id="dalat_danhgia" src="DuLichTrongNuoc__ChiTiet/dalat_danhgia.jpg" alt="Hình ảnh Đà Lạt">
                    <div class="hihiandhehe">
                        <div class="dalat_danhgia_hihi">
                            <img src="DuLichTrongNuoc__ChiTiet/5star.png" id="fivesao_img">
                            <div class="count_voting">
                                <p><?php echo $row_count['COUNT']; ?> đánh giá</p>
                            </div>
                            <p class="huhu">5.0</p>
                        </div>
                        <div class="dalat_danhgia_hehe">
                            <div id="one_sao" class="voting full__voting">
                                <p class="huhu">5.0</p>
                            </div>
                            <div id="two_sao" class="voting">
                                <p class="huhu">4.0</p>
                            </div>
                            <div id="three_sao" class="voting">
                                <p class="huhu">3.0</p>
                            </div>
                            <div id="four_sao" class="voting">
                                <p class="huhu">2.0</p>
                            </div>
                            <div id="five_sao" class="voting">
                                <p class="huhu">1.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php while($row_cmt = $kq_cmt->fetch_assoc()) { ?>
                <div class="danhgiachung__comment">
                    <div class="danhgiachung__comment__infor">
                        <p><strong><?php echo htmlentities($row_cmt['First_Name']).' '.htmlentities($row_cmt['Last_Name']); ?></strong></p>
                        <img src="DuLichTrongNuoc__ChiTiet/5star.png" id="fivesao_img" class="fivesao_img--local">
                    </div>
                    <div class="danhgiachung__comment__content">
                        <p><?php echo htmlentities($row_cmt['Content'])?></p>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['ID']) && $_SESSION['ID']){ ?>
                <form action="xulycomment.php?id=12" class="user_comment" method="POST">
                    <p>Viết bình luận</p>
                    <textarea name="comment_content"></textarea> <br>
                    <input type="submit" value="Bình luận"> <br> 
                </form>
            <?php }
            else{ ?>
                <div class="btn_insert">
                    <button class="btn_insert--write" onclick="show_comment__warning()">
                        Viết đánh giá
                    </button>
                    <button class="btn_insert--more">
                        Xem thêm đánh giá
                    </button>
                </div>
            <?php } ?>
            </div>
        </div>
    </article>
    <footer>
        <?php include"../Footer/Footer.php" ?>
    </footer>
    <?php if (isset($_SESSION['status']) && $_SESSION['status']) { ?>
        <div class="responseBox--background"></div>

        <div class="responseBox" id="responseBox">
            <div class="responseBox_tittle">
                <img src="DuLichTrongNuoc__ChiTiet/checked_tick.svg" alt="checked_tick">
                <p>BẠN ĐÃ ĐĂNG KÝ TOUR THÀNH CÔNG</p>
            </div>
            <p class="responseBox--message">Chúng tôi sẽ liên hệ để xác nhận thông tin của bạn trong vòng <strong>24
                    giờ</strong> , chân thành cảm ơn bạn đã sử dụng dịch vụ của chúng tôi</p>
        </div>
        <script>
            setTimeout(() => {
                document.querySelector('.responseBox').classList.add('hidden')
            }, 3000);
        </script>
        <?php unset($_SESSION['status']); ?>
            
    <?php } ?>
    <script>
            function on() {
            document.getElementById("responseBox").style.display = "block";
            setTimeout(() => {
                document.getElementById("responseBox").style.display = "none";
            }, 3000);
        }
    </script>
    <script>
        function show_comment__warning() {
            let comment_warning = document.querySelector('.comment__warning')
            comment_warning.style.display = 'block';
            setTimeout(() => {
                comment_warning.style.display = "none";
            }, 3000);
        }
    </script>
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

        
    </script>
    <script src="DuLichTrongNuoc__ChiTiet/DuLichTrongNuoc__ChiTiet.js"></script>
</body>

</html>
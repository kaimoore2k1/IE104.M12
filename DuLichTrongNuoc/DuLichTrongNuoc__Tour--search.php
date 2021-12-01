<?php
    require "../connect.php"; 

    $diadiem = $_POST['input_location'];
    
    if ($diadiem) {
        $sql = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 AND Destination = '$diadiem' ORDER BY TOUR_ID DESC ";
        $kq = $conn->query($sql);

        $sql_price = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 AND Destination = '$diadiem'  ORDER BY Price DESC ";
        $kq_price = $conn->query($sql_price);

        $sql_voting = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 AND Destination = '$diadiem' ORDER BY Price ASC ";
        $kq_voting = $conn->query($sql_voting);
    }
    else {
        $sql = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 ORDER BY TOUR_ID DESC ";
        $kq = $conn->query($sql);

        $sql_price = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 ORDER BY Price DESC ";
        $kq_price = $conn->query($sql_price);

        $sql_voting = "SELECT * FROM TOUR WHERE TOUR_CHECK = 0x00 ORDER BY Price ASC ";
        $kq_voting = $conn->query($sql_voting);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du lịch nước ngoài - trang chủ</title>
    <link rel="stylesheet" href="DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <header>
        <?php include"../Header/Header.html" ?>
        <img id="logo_header" src="DuLichTrongNuoc__Tour/banner_trongnuoc.jpg" alt="Header_picture_Home">
        <div class="Header__title">
            <div class="Header__title--layer"></div>
            <p class="Header__title--p">DU LỊCH TRONG NƯỚC</p>
            <form class="searchBar" action="DuLichTrongNuoc__Tour--search.php" method="POST">
                <div class="searchBar__location">
                    <p><strong>Địa điểm</strong></p>
                    <div class="searchBar__location--input">
                        <img class="searchBar__location--img" src="DuLichTrongNuoc__Tour/location.svg">
                        <input id="location__input" name="input_location" type="text" placeholder="Bạn muốn đi đâu?">
                    </div>
                    <div class="autobox">

                    </div>
                </div>
                <div class="searchBar__date">
                    <p><strong>Ngày đi</strong></p>
                    <div class="searchBar__date--input">
                        <img class="searchBar__date--img" src="DuLichTrongNuoc__Tour/human.svg">
                        <input id="myID" type="text" placeholder="Chọn ngày">
                    </div>
                </div>
                <div class="searchBar__date">
                    <p><strong>Ngày về</strong></p>
                    <div class="searchBar__date--input">
                        <img class="searchBar__date--img" src="DuLichTrongNuoc__Tour/human.svg">
                        <input id="myID" type="text" placeholder="Chọn ngày">
                    </div>
                </div>
                <div class="searchBar__tour">
                    <div class="number-right treem number_box-decor">
                        <i class="fas fa-minus treemMinus"></i>
                        <span></span>
                        <i class="fas fa-plus treemPlus"></i>
                    </div>
                    <p><strong>Loại Tour</strong></p>
                    <div class="searchBar__tour--input">
                        <img class="searchBar__tour--img" src="DuLichTrongNuoc__Tour/date.svg">
                        <input id="tour__input" type="value" placeholder="Cá nhân - gia đình">
                    </div>
                    <div class="number-box">
                        <li>
                            <div class="number-left">
                                <p id="searbar-person">Cá nhân</p>
                            </div>
                        </li>
                        <li id="decor_number_box">
                            <div class="number-left">
                                <p id="searbar-people">Nhiều người</p>
                            </div>
                        </li>
                    </div>
                </div>
                <button class="searchBar__button">TÌM KIẾM</button>
            </form>
        </div>
    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="/sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="/sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <section>
        <div class="tourType">
            <p>Sắp xếp:</p>
            <button class="tourType__latest" id="tourType--selected" onclick="latest_selected()">[ Mới nhất ]</button>
            <button class="tourType__goodPrice" onclick="goodPrice_selected()">[ Giá thấp nhất ]</button>
            <button class="tourType__highRate" onclick="highRate_selected()">[ Đánh giá cao nhất ]</button>
        </div>

        <?php while($row = $kq->fetch_assoc()) {?>
        <div class="aTour aTour_New">
            <div class="aTour__image">
                <img src="DuLichTrongNuoc__Tour/<?php echo $row['Img_Source']; ?>" id="aTour__image--tour" alt="Tour image">
                <img src="DuLichTrongNuoc__Tour/speacialTag.svg" id="aTour__image--tag" alt="Tour image">
            </div>

            <div class="aTour__infor">
                <p class="aTour__infor--tittle"><?php echo $row['Tour_Name']; ?></p>
                <p class="aTour__infor--departure"><?php echo $row['Departure']; ?> - <?php echo $row['Destination']; ?>
                </p>
                <p class="aTour__infor--detail">Thời gian: <?php echo $row['Tour_Time']; ?> <br>
                    Phương tiện: <?php echo $row['Transport']; ?> <br>
                    <?php echo $row['Description_Tour']; ?></p>
            </div>

            <div class="aTour_box">
                <div class="aTour_box--price">
                    <p>Giá từ <strong><?php echo $row['Price']; ?></strong></p>
                </div>

                <div class="aTour_box--departDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row['Tour_Start']; ?></p>
                </div>

                <div class="aTour_box--backDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row['Tour_Finish']; ?></p>
                </div>
                <div class="aTour_box--viewMore">
                    <button> <a href="DuLichTrongNuoc__ChiTiet.php?id=<?php echo $row['Tour_Id']; ?>">Xem thêm >></a>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php while($row_voting = $kq_voting->fetch_assoc()) {?>
        <div class="aTour aTour_Price hidden">
            <div class="aTour__image">
                <img src="DuLichTrongNuoc__Tour/<?php echo $row_voting['Img_Source']; ?>" id="aTour__image--tour" alt="Tour image">
                <img src="DuLichTrongNuoc__Tour/speacialTag.svg" id="aTour__image--tag" alt="Tour image">
            </div>

            <div class="aTour__infor">
                <p class="aTour__infor--tittle"><?php echo $row_voting['Tour_Name']; ?></p>
                <p class="aTour__infor--departure"><?php echo $row_voting['Departure']; ?> -
                    <?php echo $row_voting['Destination']; ?></p>
                <p class="aTour__infor--detail">Thời gian: <?php echo $row_voting['Tour_Time']; ?> <br>
                    Phương tiện: <?php echo $row_voting['Transport']; ?> <br>
                    <?php echo $row_voting['Description_Tour']; ?></p>
            </div>

            <div class="aTour_box">
                <div class="aTour_box--price">
                    <p>Giá từ <strong><?php echo $row_voting['Price']; ?></strong></p>
                </div>

                <div class="aTour_box--departDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row_voting['Tour_Start']; ?></p>
                </div>

                <div class="aTour_box--backDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row_voting['Tour_Finish']; ?></p>
                </div>
                <div class="aTour_box--viewMore">
                    <button> <a href="DuLichTrongNuoc__ChiTiet.php?id=<?php echo $row['Tour_Id']; ?>">Xem thêm >></a>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php while($row_price = $kq_price->fetch_assoc()) {?>
        <div class="aTour aTour_Voting hidden">
            <div class="aTour__image">
                <img src="DuLichTrongNuoc__Tour/<?php echo $row_price['Img_Source']; ?>" id="aTour__image--tour" alt="Tour image">
                <img src="DuLichTrongNuoc__Tour/speacialTag.svg" id="aTour__image--tag" alt="Tour image">
            </div>

            <div class="aTour__infor">
                <p class="aTour__infor--tittle"><?php echo $row_price['Tour_Name']; ?></p>
                <p class="aTour__infor--departure"><?php echo $row_price['Departure']; ?> -
                    <?php echo $row_price['Destination']; ?></p>
                <p class="aTour__infor--detail">Thời gian: <?php echo $row_price['Tour_Time']; ?> <br>
                    Phương tiện: <?php echo $row_price['Transport']; ?> <br>
                    <?php echo $row_price['Description_Tour']; ?></p>
            </div>

            <div class="aTour_box">
                <div class="aTour_box--price">
                    <p>Giá từ <strong><?php echo $row_price['Price']; ?></strong></p>
                </div>

                <div class="aTour_box--departDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row_price['Tour_Start']; ?></p>
                </div>

                <div class="aTour_box--backDate">
                    <img src="DuLichTrongNuoc__Tour/calendarIcon.svg" alt="calendar Icon">
                    <p><?php echo $row_price['Tour_Finish']; ?></p>
                </div>
                <div class="aTour_box--viewMore">
                    <button> <a href="DuLichTrongNuoc__ChiTiet.php?id=<?php echo $row['Tour_Id']; ?>">Xem thêm >></a>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>

    </section>
    <footer>
        <?php include"../Footer/Footer.php" ?>
    </footer>
    <script src="DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.js"></script>
    <script src="../Trangchu/Trangchu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="searchBar.js"></script>
    <script>
        flatpickr("#myID", {
            dateFormat: "d-m-Y",
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="/themify-icons/themify-icons.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>UITour</title>
</head>
<!--#include virtual = "Footer/footer.html"-->
<body>
    <!--HEADER-->
    <header class="header__searchBar">
        <nav class="header_menu">
            <img id="logo_uitour" src="/Header/logo_header.png" alt="logo_uitour">
            <a href="#">Trang chủ</a>
            <ul>
                <li><a href="#">Du lịch</a>
                    <ul>
                        <li><a href="#">Du lịch trong nước</a></li>
                        <li><a href="#">Du lịch nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Khách sạn</a>
                    <ul>
                        <li><a href="#">Khách sạn trong nước</a></li>
                        <li><a href="#">Khách sạn trong nước</a></li>
                    </ul>
                </li>
            </ul>
            <a href="#">Traval tips</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
            <a id="sign_in" href="#">Đăng nhập</a>
            <a id="sign_up" href="#">Đăng ký</a>
        </nav>
        <p id="h_p1">ĐIỂM ĐẾN THÚ VỊ</p>
        <p id="h_p2">Tận hưởng hành trình của bạn trong từng khoảnh khắc</p>
        <p id="h_link"><a href="#">TÌM HIỂU</a></p>
        <img id="logo_header" src="/Header/Picture_header.png" alt="Header_picture_Home">
    </header>
    <!--SEARCH BAR-->
    <div class="searchBar">
        <div class="searchBar__location">
            <img class="searchBar__location--img" src="/searchBar/searchBar/location.svg">
            <p>
                <strong>Địa điểm</strong>
                <br>
                Bạn muốn đi đâu?
            </p>
        </div>
        <div class="searchBar__date">
            <img class="searchBar__date--img" src="/searchBar/searchBar/human.svg">
            <p>
                <strong>Bắt đầu - Kết thúc</strong>
                <br>
                Chọn ngày
            </p>
        </div>
        <div class="searchBar__tour">
            <img class="searchBar__tour--img" src="/searchBar/searchBar/date.svg">
            <p>
                <strong>Loại Tour</strong>
                <br>
                Cá nhân - gia đình
            </p>
        </div>
        <button class="searchBar__button">TÌM KIẾM</button>
        </div>
    </div>
    <!--CHATTING-->
    <?php
        $sv = "localhost";
        $us = "root";
        $pw = "";
        $db = "website_dulich";
        $conn = new mysqli($sv, $us, $pw, $db);
        $sql = "select * from message where id = 01";
        $kq = $conn->query($sql);
         /* if($kq->num_rows > 0) {
                while ($row = $kq->fetch_assoc()) {
                    echo "<p class=\"showChatBox__main--content\">".$row["TEXT"]."</p>";
                }
            } */
    ?>
    <div class="chatting__positioning">
    <div id="showChatBox">
        <header class="showChatBox__tittle">
            <div class="showChatBox__tittle--avt">
                <img class="showChatBox__tittle--pic" src="default-avatar.png">
                <img class="showChatBox__tittle--pic" src="default-avatar.png">
            </div>
            <div class="showChatBox__tittle--content">
                <p class="showChatBox__tittle--hello">Kính chào quý khách</p>
                <div class="showChatBox__tittle--status">
                    <div class="showChatBox__tittle--status--circle">
                    </div>
                    <p>Tư vấn dịch vụ</p>
                </div>
            </div>
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-angle-down" onclick="hideChatBox()"></i>
        </header>
        <main class="showChatBox__main">
            <?php
                while ($row = $kq->fetch_assoc()) { ?>
                <p class="showChatBox__main--content"> <?php echo $row["TEXT"]; ?> </p>
            <?php } ?>
            <p class="showChatBox__main--status">Vừa xong</p>
        </main>
        <form action="index.php" method="post" class="showChatBox__footer">
            <input class="showChatBox__footer--texting" type="text" placeholder="Đặt câu hỏi tại đây!" name="ChatContent">
            <div class="showChatBox__footer--icon">
                <i class="far fa-grin"></i>
                <input class="showChatBox__footer--icon--submit" type="submit" name="ChatSubmit" value="">
            </div>
        </form>
    </div>
    <form action="index.php"method="post" id="chatbox_wapper" onclick="showChatBox()">
        <input type="submit" name="open_chatbox" value = "">
        <i class="fas fa-comment"></i>
        <p>Trò chuyện</p>
    </form>
    </div>
</body>
    
</html>
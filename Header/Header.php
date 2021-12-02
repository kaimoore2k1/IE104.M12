<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Header/Header.css">
    <title>UITour</title>
</head>

<body>
    <header>
        <nav class="header_menu">
            <img id="logo_uitour" src="../Trangchu/File/logo_header.png" alt="logo_uitour">
            <div id="header_menu__nav">
                <a href="../Trangchu/Trangchu.php" id="decor--trangchu">Trang chủ</a>
            <ul>
                <li><a href="#" id="decor--dulich">Du lịch <img class="nav_tick" src="../Trangchu/File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a href="../DuLichTrongNuoc/DuLichTrongNuoc__Tour.php?type=0x00">Du lịch trong nước</a></li>
                        <li><a href="../DuLichTrongNuoc/DuLichTrongNuoc__Tour.php?type=0x01">Du lịch nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#" id="decor--khachsan">Khách sạn <img class="nav_tick" src="../Trangchu/File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a href="/KhachsanTrongnuoc/Ks_tn.php">Khách sạn trong nước</a></li>
                        <li><a href="#">Khách sạn nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/Code-TravelTips/index.php" id="decor--traveltips">Travel tips</a>
            <a href="#" id="decor--gioithieu">Giới thiệu</a>
            <a href="#" id="decor--lienhe">Liên hệ</a>
            <?php if (isset($_SESSION['ID']) && $_SESSION['ID']){ ?>
                    <form class="user_infor" method="POST" name="dangxuat" action="../Header/xulydangxuat.php">
                        <img id="user_infor_id" src="../default-avatar.png" alt="avt_user">
                        <p><?php echo $_SESSION['FirstName'].' '.$_SESSION['LastName']; ?></p>
                        <button name="dang_xuat" class="dang_xuat" id="sign_up">Đăng xuất</button>
                    </form>
                <?php }
                else{ ?>
                    <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
                    <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
                <?php } ?>
        </nav>
    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.php" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.php" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <script src="../Trangchu/Trangchu.js"></script>
</body>

</html>
<?php require "session_dangnhap.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quản lý tour</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Trang chủ
        </h2>
        <div class="header-container__profile">
            <i class="fas fa-user-circle"></i>
            <span>Hello <?php echo $adminName; ?></span>
            <a href="DangNhap.php" class="btn btn-danger"> <i class="fas fa-power-off"></i> Đăng xuất</a>
        </div>
    </header>
    <main class="main">
        <nav class="nav-links">
            <ul class="nav-links__ul">
                <li class="nav-links__li">
                    
                    <a href="QuanLyTour.php" class=" nav-links__a">
                        <i class="fas fa-plane-departure"></i>  Quản lý Tour
                    </a>
                </li>
                <li class="nav-links__li">
                        
                    <a href="QuanLyKhachSan.php" class=" nav-links__a">
                        <i class="fas fa-hotel"></i></i>  Quản lý Khách sạn
                    </a>
                </li>
                <li class="nav-links__li">
                        
                    <a href="QuanLyPhong.php" class=" nav-links__a">
                        <i class="fas fa-person-booth"></i>  Quản lý Phòng
                    </a>
                </li>
                <li class="nav-links__li">
                    
                    <a href="QuanLyBlog.php" class=" nav-links__a">
                        <i class="fab fa-blogger-b"></i></i>  Quản lý Blog
                    </a>
                </li>
                <li class="nav-links__li">
                    
                    <a href="QuanLyComment.php" class=" nav-links__a">
                        <i class="far fa-comments"></i></i></i>  Quản lý Comment
                    </a>
                </li>
                <li class="nav-links__li " >
                    
                    <a href="QuanLyUser.php" class=" nav-links__a ">
                        <i class="fas fa-user-tie"></i></i></i>  Quản lý User
                    </a>
                </li>
            </ul>
        </nav>
        <div class="col-md-9">
            <h2 class="text-drak text-center" style="margin-top: 30px;">Welcome!</h2>
            <p class="text-center">Chào mừng đến với quản lý du lịch UITour.</p>
        </div>
        
        
    </main>
</body>
</html>
<?php
    $host = "localhost";
    $host_user ="root";
    $host_password = "";
    $database = "ie104.m12";
    $port = "8111";

    $conn = new mysqli($host, $host_user, $host_password, $database, $port);
    if(!$conn)
    {
        die ("Kết nối thất bại" . $conn->connect_error);
    }

    if(isset($_POST["submit"]))
    {
        $Name_Hotel =  $_POST["Name_Hotel"];
        $Location_Hotel = $_POST["Location_Hotel"];
        $Price =  $_POST["Price"];
        $Description_Hotel = $_POST["Description_Hotel"];
        $img_hotel = $_POST["img_hotel"];
        $sql = "INSERT INTO hotel(Name_Hotel,Location_Hotel,Price,Description_Hotel,img_hotel) 
            VALUES('$Name_Hotel','$Location_Hotel','$Price', '$Description_Hotel', '$img_hotel')";
        $conn->query($sql);
        header("Location:QuanLyKhachSan.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="Content.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quản lý Khách sạn</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="../Page-Admin/TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Quản lý Khách sạn
        </h2>
        <div class="header-container__profile">
            <i class="fas fa-user-circle"></i>
            <span>Hello HaiDang</span>
            <a href="../Page-Admin/DangNhap.php" class="btn btn-danger"> <i class="fas fa-power-off"></i> Đăng xuất</a>
        </div>
    </header>
    <main class="main">
        <nav class="nav-links">
            <ul class="nav-links__ul">
                <li class="nav-links__li">
                    
                    <a href="../Page-Admin/QuanLyTour.php" class=" nav-links__a">
                        <i class="fas fa-plane-departure"></i>  Quản lý Tour
                    </a>
                </li>
                <li class="nav-links__li  active--css">
                        
                    <a href="../Page-Admin/QuanLyKhachSan.php" class=" nav-links__a  active--css">
                        <i class="fas fa-hotel"></i></i>  Quản lý Khách sạn
                    </a>
                </li>
                <li class="nav-links__li">
                        
                    <a href="../Page-Admin/QuanLyPhong.php" class=" nav-links__a">
                        <i class="fas fa-person-booth"></i>  Quản lý Phòng
                    </a>
                </li>
                <li class="nav-links__li">
                    
                    <a href="../Page-Admin/QuanLyBlog.php" class=" nav-links__a">
                        <i class="fab fa-blogger-b"></i></i>  Quản lý Blog
                    </a>
                </li>
                <li class="nav-links__li">
                    
                    <a href="../Page-Admin/QuanLyComment.php" class=" nav-links__a">
                        <i class="far fa-comments"></i></i></i>  Quản lý Comment
                    </a>
                </li>
                <li class="nav-links__li " >
                    
                    <a href="../Page-Admin/QuanLyUser.php" class=" nav-links__a ">
                        <i class="fas fa-user-tie"></i></i></i>  Quản lý User
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="col-md-8">
            <h2 class=" text-center">Thêm khách sạn</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="post">
                    <div class="form-group">
                        <label for="Name_Hotel" class="control-label">Tên khách sạn</label>
                        <input name="Name_Hotel" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Location_Hotel" class="control-label">Địa điểm</label>
                        <input name="Location_Hotel" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="Price" class="control-label">Giá</label>
                        <input type="number" name="Price" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Description_Hotel" class="control-label">Mô tả</label>
                        <textarea name="Description_Hotel"  cols="30" rows="4"  class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="img_hotel" class="control-label">Hình ảnh</label>
                        <input name="img_hotel" class="form-control" required/>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="submit" type="submit" value="creat" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyKhachSan.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
        
    </main>
</body>
</html>
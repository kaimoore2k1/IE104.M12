<?php
    require"session_dangnhap.php";
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
        $CT_Hotel_Id =  $_POST["CT_Hotel_Id"];
        $Name_Phong = $_POST["Name_Phong"];
        $Price =  $_POST["Price"];
        $Area = $_POST["Area"];
        $Facing = $_POST["Facing"];
        $Description_Phong = $_POST["Description_Phong"];
        $sql = "INSERT INTO phong(CT_Hotel_Id,Name_Phong,Price,Area,Facing,Description_Phong) VALUES
            ('$CT_Hotel_Id','$Name_Phong', '$Price', '$Area', '$Facing', '$Description_Phong')";
        $conn->query($sql);
        header("Location:QuanLyPhong.php");
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
    <title>Quản lý Phòng</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="../Page-Admin/TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Quản lý Phòng
        </h2>
        <div class="header-container__profile">
            <i class="fas fa-user-circle"></i>
            <span>Hello <?php echo $adminName; ?></span>
            <a href="dangxuat.php" class="btn btn-danger"> <i class="fas fa-power-off"></i> Đăng xuất</a>
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
                <li class="nav-links__li">
                        
                    <a href="../Page-Admin/QuanLyKhachSan.php" class=" nav-links__a">
                        <i class="fas fa-hotel"></i></i>  Quản lý Khách sạn
                    </a>
                </li>
                <li class="nav-links__li  active--css">
                        
                    <a href="../Page-Admin/QuanLyPhong.php" class=" nav-links__a  active--css">
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
            <h2 class=" text-center">Thêm Phòng</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="post">
                    <div class="form-group">
                        <label for="CT_Hotel_Id" class="control-label">Mã chi tiết khách sạn</label>
                        <input type="number" name="CT_Hotel_Id" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Name_Phong" class="control-label">Tên phòng</label>
                        <input name="Name_Phong" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="Price" class="control-label">Giá</label>
                        <input type="number" name="Price" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="Area" class="control-label">Khu vực</label>
                        <input name="Area" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="Facing" class="control-label">Hướng</label>
                        <input name="Facing" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Description_Phong" class="control-label">Mô tả</label>
                        <textarea name="Description_Phong"  cols="30" rows="4"  class="form-control" required></textarea>
                    </div>
                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="submit" type="submit" value="creat" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyPhong.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
        
    </main>
</body>
</html>
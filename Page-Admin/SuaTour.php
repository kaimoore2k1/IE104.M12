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

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $id =  $_GET["id"];
        $sql = "SELECT * FROM tour WHERE Tour_Id = $id";
        
        $kq = $conn->query($sql);
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
    <title>Quản lý Tour</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="../Page-Admin/TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Quản lý Tour
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
                <li class="nav-links__li active--css">
                    
                    <a href="../Page-Admin/QuanLyTour.php" class=" nav-links__a active--css">
                        <i class="fas fa-plane-departure"></i>  Quản lý Tour
                    </a>
                </li>
                <li class="nav-links__li">
                        
                    <a href="../Page-Admin/QuanLyKhachSan.php" class=" nav-links__a">
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
                <li class="nav-links__li  " >
                    
                    <a href="../Page-Admin/QuanLyUser.php" class=" nav-links__a  ">
                        <i class="fas fa-user-tie"></i></i></i>  Quản lý User
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="col-md-8">
            <h2 class=" text-center">Sửa Tour</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="post">
                    <?php while($row = $kq->fetch_assoc()) { ?>
                        <div class="form-group">
                        <label for="Tour_Name" class="control-label">Tên tour</label>
                        <input name="Tour_Name" class="form-control" value="<?php echo $row["Tour_Name"] ?>" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Departure" class="control-label">Nơi đi</label>
                            <input name="Departure" class="form-control" value="<?php echo $row["Departure"] ?>" required/>
    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Destination" class="control-label">Nơi đến</label>
                            <input name="Destination" class="form-control" value="<?php echo $row["Destination"] ?>" required/>
    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tour_Time" class="control-label">Tổng thời gian</label>
                        <input name="Tour_Time" class="form-control" value="<?php echo $row["Tour_Time"] ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="Description_Tour" class="control-label">Mô tả</label>
                        <textarea name="Description_Tour"  cols="30" rows="4"  class="form-control" required><?php echo $row["Description_Tour"] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Price" class="control-label">Giá</label>
                        <input type="number" name="Price" class="form-control" value="<?php echo $row["Price"] ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="Img_Source" class="control-label">Hình ảnh</label>
                        <input name="Img_Source" class="form-control" value="<?php echo $row["Img_Source"] ?>" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Tour_Start" class="control-label">Tour bắt đầu</label>
                            <input type="date" name="Tour_Start" class="form-control" value="<?php echo $row["Tour_Start"] ?>" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Tour_Finish" class="control-label">Tour kết thúc</label>
                            <input  type="date" name="Tour_Finish" value="<?php echo $row["Tour_Finish"] ?>" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Transport" class="control-label">Phương tiện</label>
                        <input name="Transport" class="form-control" value="<?php echo $row["Transport"] ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="Tour_Check" class="control-label">Check</label>
                        <input type="check" name="Tour_Check" value="<?php echo $row["Tour_Check"] ?>" class="form-control"/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="submit" type="submit" value="Update" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyTour.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </form>
                <?php 
                    if(isset($_POST["submit"])) { 
                        $Tour_Name =  $_POST["Tour_Name"];
                        $Departure = $_POST["Departure"];
                        $Destination =  $_POST["Destination"];
                        $Tour_Time = $_POST["Tour_Time"];
                        $Description_Tour = $_POST["Description_Tour"];
                        $Price = $_POST["Price"];
                        $Img_Source = $_POST["Img_Source"];
                        $Tour_Start = $_POST["Tour_Start"];
                        $Tour_Finish = $_POST["Tour_Finish"];
                        $Transport = $_POST["Transport"];
                        $Tour_Check = $_POST["Tour_Check"];
                        $sql = "UPDATE tour SET Tour_Name = '$Tour_Name',Departure = '$Departure', Destination = '$Destination', Tour_Time = '$Tour_Time', Description_Tour = '$Description_Tour', Price = '$Price', Img_Source = '$Img_Source', Tour_Start = '$Tour_Start', Tour_Finish = '$Tour_Finish', Transport = '$Transport',Tour_Check= '$Tour_Check' WHERE Tour_Id = '$id'";
                            
                        $conn->query($sql);
                        echo "<script> window.location.href = '../Page-Admin/QuanLyTour.php' </script>";
                    }
                    
                ?>
            </div>
        </div>
        
        
    </main>
</body>
</html>
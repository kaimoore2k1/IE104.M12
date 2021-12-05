<?php require"session_dangnhap.php"; ?>
<?php
    require "../connect.php";
    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $id =  $_GET["id"];
        $sql = "SELECT * FROM hotel WHERE Hotel_Id = $id";
        
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
            <h2 class=" text-center">Sửa khách sạn</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="post">
                    <?php while($row = $kq->fetch_assoc()) { ?>
                        <div class="form-group">
                        <label for="header_description" class="control-label">Tiêu đề</label>
                        <textarea name="header_description  "  cols="30" rows="4"  class="form-control" required><?php echo $row["header_description"] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Name_Hotel" class="control-label">Tên khách sạn</label>
                        <input name="Name_Hotel" value="<?php echo $row["Name_Hotel"] ?>" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Location" class="control-label">Địa điểm</label>
                        <input name="Location" value="<?php echo $row["Location"] ?>" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="Price" class="control-label">Giá</label>
                        <input name="Price"  value="<?php echo $row["Price"] ?>"  class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="Description_Hotel" class="control-label">Mô tả</label>
                        <textarea name="Description_Hotel"  cols="30" rows="4"  class="form-control" required><?php echo $row["Description_Hotel"] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Highlight" class="control-label">Nổi bật</label>
                        <textarea name="Highlight"  cols="30" rows="4"  class="form-control" required><?php echo $row["Highlight"] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label  for="img_hotel" class="control-label">Hình ảnh</label>
                        <input name="img_hotel" value="<?php echo $row["img_hotel"] ?>" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label  for="type" class="control-label">Check</label>
                        <input type="number" name="type" value="<?php echo $row["type"] ?>" class="form-control" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="submit" type="submit" value="Update" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyKhachSan.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </form>
                <?php 
                    if(isset($_POST["submit"])) { 
                        $header_description =  $_POST["header_description"];
                        $Name_Hotel =  $_POST["Name_Hotel"];
                        $Location = $_POST["Location"];
                        $Price =  $_POST["Price"];
                        $Description_Hotel = $_POST["Description_Hotel"];
                        $Highlight = $_POST["Highlight"];
                        $img_hotel = $_POST["img_hotel"];
                        $type = $_POST["type"];
                        $sql = "UPDATE  hotel SET header_description = '$header_description' Name_Hotel = '$Name_Hotel',Location = '$Location',Price = '$Price', Description_Hotel = '$Description_Hotel',Highlight = '$Highlight', img_hotel = '$img_hotel', type = '$type' WHERE Hotel_Id = '$id'";
                        $conn->query($sql);
                        echo "<script> window.location.href = '../Page-Admin/QuanLyKhachSan.php' </script>";
                    }
                    
                ?>
            </div>
        </div>
        
        
    </main>
</body>
</html>
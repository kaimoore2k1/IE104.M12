<?php require"session_dangnhap.php"; ?>
<?php
   require "../connect.php";

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $id =  $_GET["id"];
        $sql = "SELECT * FROM blog WHERE Blog_Id = $id";
        
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
    <title>Quản lý Blog du lịch</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="../Page-Admin/TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Quản lý Blog du lịch
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
                <li class="nav-links__li ">
                        
                    <a href="../Page-Admin/QuanLyPhong.php" class=" nav-links__a ">
                        <i class="fas fa-person-booth"></i>  Quản lý Phòng
                    </a>
                </li>
                <li class="nav-links__li  active--css">
                    
                    <a href="../Page-Admin/QuanLyBlog.php" class=" nav-links__a  active--css">
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
            <h2 class=" text-center">Sửa Blog</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="POST">
                    <?php while($row = $kq->fetch_assoc()) { ?>
                        <div class="form-group">
                        <label for="Name_Blog" class="control-label">Tên Blog</label>
                        <textarea name="Name_Blog" class="form-control"  cols="30" rows="3"  class="form-control" required><?php echo $row["Name_Blog"] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Title" class="control-label">Tiêu đề</label>
                        <input name="Title" class="form-control" value="<?php echo $row["Title"] ?>" required/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Write_Time" class="control-label">Ngày viết</label>
                            <input type="date" name="Write_Time" value="<?php echo $row["Write_Time"] ?>" class="form-control" required/>
    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="View" class="control-label">Lượt xem</label>
                            <input type="number" name="View" value="<?php echo $row["View"] ?>" class="form-control" required/>
    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description_Blog" class="control-label">Mô tả</label>
                        <textarea name="Description_Blog"  cols="30" rows="4"  class="form-control" required><?php echo $row["Description_Blog"] ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Img_Src" class="control-label">Hình ảnh</label>
                            <input  name="Img_Src" value="<?php echo $row["Img_Src"] ?>" class="form-control" required/>
    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Title_Img" class="control-label">Tiêu đề hình</label>
                            <input name="Title_Img" value="<?php echo $row["Title_Img"] ?>" class="form-control" required/>
    
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="submit" name="submit" value="Update" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyBlog.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    <?php } ?>
                    
                </form>
                <?php 
                    if(isset($_POST["submit"])) { 
                        $Name_Blog = $_POST["Name_Blog"];
                        $Title = $_POST["Title"];
                        $Write_Time = $_POST["Write_Time"];
                        $View = $_POST["View"];
                        $Img_Src = $_POST["Img_Src"];
                        $Title_Img = $_POST["Title_Img"];
                        $Description_Blog = $_POST["Description_Blog"];
                        $sql = "UPDATE blog SET Name_Blog = '$Name_Blog',Title = '$Title', Write_Time = '$Write_Time', View = '$View', Img_Src = '$Img_Src', Title_Img = '$Title_Img', Description_Blog = '$Description_Blog'  WHERE Blog_Id = '$id'";
                        $conn->query($sql);
                        echo "<script> window.location.href = '../Page-Admin/QuanLyBlog.php' </script>";
                    }
                    
                ?>
            </div>
            
        </div>
        
        
    </main>
</body>
</html>
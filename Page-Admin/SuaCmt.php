<?php require "session_dangnhap.php"; ?>
<?php
    require "../connect.php";

    if(isset($_REQUEST["id"]) and $_REQUEST['id']!="")
    {
        $id =  $_GET["id"];
        $sql = "SELECT * FROM evaluate WHERE Evaluate_Id = $id";
        
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
    <title>Quản lý Comment</title>
</head>
<body>
    <header class="header-container">
        <div class="header-container__logo">
            <a href="../Page-Admin/TrangChu.php">
                <img src="../Trangchu/File/logo_header.png" alt="UITour">
            </a>
            
        </div>
        <h2 class="header-container__Title">
            Quản lý Comment
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
                <li class="nav-links__li ">
                    
                    <a href="../Page-Admin/QuanLyBlog.php" class=" nav-links__a ">
                        <i class="fab fa-blogger-b"></i></i>  Quản lý Blog
                    </a>
                </li>
                <li class="nav-links__li  active--css">
                    
                    <a href="../Page-Admin/QuanLyComment.php" class=" nav-links__a  active--css">
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
            <h2 class=" text-center">Sửa Comment</h2>
            <div class="col-md-8 div--css">
                <form action="" class="form--css" method="post">
                    <?php while($row = $kq->fetch_assoc()) { ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="User_Id" class="control-label">Mã user</label>
                            <input name="User_Id" value="<?php echo $row["User_Id"] ?>" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="CT_Hotel_Id" class="control-label">Mã khách sạn</label>
                            <input name="CT_Hotel_Id" value="<?php echo $row["CT_Hotel_Id"] ?>" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="CT_Tour_Id" class="control-label">Mã tour</label>
                            <input name="CT_Tour_Id" value="<?php echo $row["CT_Tour_Id"] ?>" class="form-control" required/>
    
                        </div>
                        
                    </div>
                    <div class="form-group ">
                        <label for="Content" class="control-label">Nội dung</label>
                        <textarea name="Content"  cols="30" rows="4"  class="form-control" required><?php echo $row["Content"] ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Rating" class="control-label">Rating</label>
                            <input type="number" value="<?php echo $row["Rating"] ?>" name="Rating" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Time" class="control-label">Thời gian</label>
                            <input type="date" value="<?php echo $row["Time"] ?>" name="Time" class="form-control" required/>
    
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="submit" type="submit" value="Update" class="btn btn-primary btn-block" />
                        </div>
                        <div class="form-group col-md-6">
                            <a  href="../Page-Admin/QuanLyComment.php" class="btn btn-secondary btn-block"><i class="fa fa-table"></i>Trở về</a>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </form>
                <?php 
                    if(isset($_POST["submit"])) { 
                        $User_Id =  $_POST["User_Id"];
                        $CT_Tour_Id = $_POST["CT_Tour_Id"];
                        $CT_Hotel_Id =  $_POST["CT_Hotel_Id"];
                        $Content = $_POST["Content"];
                        $Rating = $_POST["Rating"];
                        $Time = $_POST["Time"];
                        $sql = "UPDATE  evaluate SET User_Id = '$User_Id',CT_Tour_Id = '$CT_Tour_Id',CT_Hotel_Id = '$CT_Hotel_Id', Content = '$Content', Rating = '$Rating', Time = '$Time' WHERE Evaluate_Id = '$id'";
                        $conn->query($sql);
                        echo "<script> window.location.href = '../Page-Admin/QuanLyComment.php' </script>";
                    }
                    
                ?>
            </div>
        </div>
        
        
    </main>
</body>
</html>
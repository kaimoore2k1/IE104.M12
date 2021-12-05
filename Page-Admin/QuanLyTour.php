<?php require"session_dangnhap.php"; ?>
<?php
    require "../connect.php";
    if(isset($_POST["search"]))
    {
        $result = $_POST["search"];
        $sql = "SELECT * FROM tour WHERE Tour_Name Like '%$result%'";
    }
    else
        $sql = "SELECT * from tour";
    $kq = $conn->query($sql);
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
    <title>Quản lý tour</title>
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
            <span>Hello <?php echo $adminName; ?></span>
            <a href="dangxuat.php" class="btn btn-danger"> <i class="fas fa-power-off"></i> Đăng xuất</a>
        </div>
    </header>
    <main class="main">
        <nav class="nav-links">
            <ul class="nav-links__ul">
                <li class="nav-links__li active--css">
                    
                    <a href="../Page-Admin/QuanLyTour.php" class=" nav-links__a">
                        <i class="fas fa-plane-departure active--css"></i>  Quản lý Tour
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
                <li class="nav-links__li " >
                    
                    <a href="../Page-Admin/QuanLyUser.php" class=" nav-links__a ">
                        <i class="fas fa-user-tie"></i></i></i>  Quản lý User
                    </a>
                </li>
            </ul>
        </nav>
        <section>
            <div class="search-create" >
                <form action="" class="col-md-9" method="post">
                    <div class="form-inline col-md-9">
                        <label for="Tour_Name" class="control-label" style="margin-right: 5px;">Tìm kiếm tour</label>                                
                        <input type="text" name="search" class="form-control col-md-6">
                        <input type="submit" class="btn btn-info" name="submit" value="search">
                    </div>
                </form>
                <div>
                    <a href="../Page-Admin/ThemTour.php" class="btn btn-outline-success"><i class="far fa-plus-square"></i> Thêm</a>
                </div>
            </div>
            <div class="table-overflow">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên tour</th>
                            <th>Nơi đi</th>
                            <th>Nơi đến</th>
                            <th>Tổng Thời gian</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Tour bắt đầu</th>
                            <th>Tour kết thúc</th>
                            <th>Phương tiện</th>
                            <th>Check</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $kq->fetch_assoc()) { ?>
                            <tr>
                                <td class="counterCell"></td>
                                <td><?php echo $row["Tour_Name"] ?></td>
                                <td><?php echo $row["Departure"] ?></td>
                                <td><?php echo $row["Destination"] ?></td>
                                <td><?php echo $row["Tour_Time"] ?></td>
                                <td><?php echo $row["Description_Tour"] ?></td>
                                <td><?php echo $row["Price"] ?></td>
                                <td><?php echo $row["Img_Source"] ?></td>
                                <td><?php echo $row["Tour_Start"] ?></td>
                                <td><?php echo $row["Tour_Finish"] ?></td>
                                <td><?php echo $row["Transport"] ?></td>
                                <td><?php echo $row["Tour_Check"] ?></td>
                                <td>
                                    <a  href="../Page-Admin/SuaTour.php?id=<?php echo $row["Tour_Id"]; ?>" style="font-size: 20px;" ><i class="far fa-edit"></i></a>|
                                    <a href="../Page-Admin/XoaTour.php?id=<?php echo $row["Tour_Id"]; ?>" style="font-size: 20px; " class="text-danger" onclick="return confirm('Bạn chắn chắn xóa chứ?')"><i class="far fa-trash-alt"></i></a> 
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </section>
        
    </main>
</body>
</html>
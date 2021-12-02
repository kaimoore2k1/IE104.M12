<?php require"session_dangnhap.php"; ?>
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

    if(isset($_POST["search"]))
    {
        $result = $_POST["search"];
        $sql = "SELECT * FROM blog WHERE Name_Blog Like '%$result%'";
    }
    else
        $sql = "SELECT * from blog";
    $kq = $conn->query($sql);
    // if(isset($_POST["submit"]) && $_POST["submit"] == "Thêm")
    // {
    //     $hoten = $_POST["hoten"];
    //     $mssv = $_POST["mssv"];
    //     $sql = "INSERT INTO sinhvien(MSSV, HoTen) VALUES('$mssv','$hoten')";
    //     $conn->query($sql);
    //     header("Location:lietkesinhvien.php");
        
    // }
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
    <title>Quản lý Blog</title>
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
            <a href="../Page-Admin/DangNhap.php" class="btn btn-danger"> <i class="fas fa-power-off"></i> Đăng xuất</a>
        </div>
    </header>
    <main class="main">
        <nav class="nav-links">
            <ul class="nav-links__ul">
                <li class="nav-links__li ">
                    
                    <a href="../Page-Admin/QuanLyTour.php" class=" nav-links__a">
                        <i class="fas fa-plane-departure "></i>  Quản lý Tour
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
                <li class="nav-links__li active--css">
                    
                    <a href="../Page-Admin/QuanLyBlog.php" class=" nav-links__a active--css">
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
                <form action="" class="col-md-9" method ="post">
                    <div class="form-inline col-md-9">
                        <label for="Name_Blog" class="control-label" style="margin-right: 5px;">Tìm kiếm blog</label>                                
                        <input type="text" name="search" class="form-control col-md-6">
                        <input type="submit" class="btn btn-info" name="submit" value="search">
                        
                    </div>
                </form>
                <div>
                    <a href="../Page-Admin/ThemBlog.php" class="btn btn-outline-success"><i class="far fa-plus-square"></i> Thêm</a>
                </div>
            </div>
            <div class="table-overflow">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Tên blog</th>
                            <th>Ngày viết</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>Hình ảnh</th>
                            <th>Tiêu đề hình</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $kq->fetch_assoc()) { ?>
                            <tr>
                            <td class="counterCell"></td>
                            <td><?php echo $row["Title"] ?></td>
                            <?php
                                /* echo "<script>alert(".str_word_count($cnt).")</script>" */
                                if(str_word_count($row["Name_Blog"]) > 100) {
                                     $cnt = substr($row["Name_Blog"], 0, 900);
                                    echo "<td>".$cnt."..."."</td>";
                                }
                                else {
                                    echo "<td>".$row["Name_Blog"]."</td>";
                                }
                            ?>
                            <td><?php echo $row["Write_Time"] ?></td>
                            <?php
                                /* echo "<script>alert(".str_word_count($cnt).")</script>" */
                                if(str_word_count($row["Description_Blog"]) > 100) {
                                     $cnt = substr($row["Description_Blog"], 0, 100);
                                    echo "<td>".$cnt."..."."</td>";
                                }
                                else {
                                    echo "<td>".$row["Description_Blog"]."</td>";
                                }
                            ?>
                            <td><?php echo $row["View"] ?></td>
                            <td><?php echo $row["Img_Src"] ?></td>
                            <td><?php echo $row["Title_Img"] ?></td>
                            <td>
                                <a  href="../Page-Admin/SuaBlog.php?id=<?php echo $row["Blog_Id"]; ?>" style="font-size: 20px;" ><i class="far fa-edit"></i></a> |
                                <a href="../Page-Admin/XoaBlog.php?id=<?php echo $row["Blog_Id"]; ?>" style="font-size: 20px; " class="text-danger" onclick="return confirm('Bạn chắn chắn xóa chứ?')"><i class="far fa-trash-alt"></i></a> 
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
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
            $sql = "SELECT * FROM blog, img_source WHERE title = 'CẨM NANG DU LỊCH' and blog.Blog_Id = img_source.Blog_Id";
            if(isset($_POST["timkiem"]))
            {
                $result = $_POST["timkiem"];
                $sql = "SELECT * FROM blog, img_source WHERE title = 'CẨM NANG DU LỊCH' and blog.Blog_Id = img_source.Blog_Id and Name_Blog Like '%$result%' ";
                
            }
            $kq = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Travel Tips</title>
</head>
<body>
    <!-- <header>
    <nav class="header_menu">
            <img id="logo_uitour" src="../Trangchu/File/logo.svg" alt="logo_uitour">
            <div id="header_menu__nav">
                <a href="../Trangchu/Trangchu.html" class="itemSelected">Trang chủ</a>
            <ul>
                <li><a href="#">Du lịch <img class="nav_tick" src="../Trangchu/File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a href="/DuLichTrongNuoc/DuLichTrongNuoc__Tour/DuLichTrongNuoc__Tour.html">Du lịch trong nước</a></li>
                        <li><a href="/DuLichNuocNgoai/DuLichNuocNgoai__Tour/DuLichNuocNgoai__Tour.html">Du lịch nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li><a href="#">Khách sạn <img class="nav_tick" src="../Trangchu/File/nav_tick.svg" alt="nav_tick"></a>
                    <ul>
                        <li><a href="/KhachsanTrongnuoc/Ks_tn.html">Khách sạn trong nước</a></li>
                        <li><a href="#">Khách sạn nước ngoài</a></li>
                    </ul>
                </li>
            </ul>
            <a href="/Code-TravelTips/index.html">Traval tips</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Liên hệ</a>
            <button id="sign_in" onclick="openSignInOvp()">Đăng nhập</button>
            <button id="sign_up" onclick="openSignUpOvp()">Đăng ký</button>
            </div>
        </nav>
        <nav>
            <img src="../Code-TravelTips/2dulich.png" alt="Travel Tips" class="header__img">
            <ul class="nav__links">
                <li class="nav__li">
                    <a href="#" class="nav__links-text">
                        Miền Bắc
                        <span class="nav__links-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a>
                    <ul class="subnav fadeIn">
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Hà Nội</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">900</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bắc Giang</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">120</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bắc Ninh</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">109</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bắc Cạn</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">100 </span>
                            </div>
                            
                        </li>
                    </ul>
                </li>

                <li class="nav__li">
                    <a href="" class="nav__links-text">
                        Miền Trung
                        <span class="nav__links-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a>
                    <ul class="subnav fadeIn">
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bình Định</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">120</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Đà Nẵng</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">189</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Khánh Hòa</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">100</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Gia Lai</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">165</span>
                            </div>
                            
                        </li>
                    </ul>                    
                </li>
                <li class="nav__li">
                    <a href="#" class="nav__links-text">
                        Miền Nam
                        <span class="nav__links-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a> 
                    <ul class="subnav fadeIn">
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Hồ Chí Minh</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">850</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">An Giang</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">120</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bình Dương</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">168</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bình Phước</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">120 </span>
                            </div>
                            
                        </li>
                    </ul>                   
                </li>
                <li class="nav__li">
                    <a href="#" class="nav__links-text">
                        Địa danh nổi bật
                        <span class="nav__links-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a>   
                    <ul class="subnav fadeIn">
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Hà Nội</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">900</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Hồ Chí Minh</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">850</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Đà Nẵng</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">189</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Vũng Tàu</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">159 </span>
                            </div>
                            
                        </li>
                    </ul>                 
                </li>
                <li class="nav__li">
                    <a href="#" class="nav__links-text">
                        Bãi biển đẹp
                        <span class="nav__links-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </a>
                    <ul class="subnav fadeIn">
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bãi Đồ Sơn-Hải Phòng</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">7</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bãi Trà Cổ-Hạ Long</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">5</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bãi Quan Lại-Hạ Long</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">8</span>
                            </div>
                            
                        </li>
                        <li>
                            <div class="subnav__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="subnav__text">
                                <a href="#">Bãi Ti Tốp-Hạ Long</a>
                            </div>
                            <div class="subnav__icon">
                                <i class="fas fa-book-open"></i>
                                <span class="subnav__icon-number">3 </span>
                            </div>
                            
                        </li>
                    </ul>                    
                </li>
            </ul>
        </nav>   
    </header> -->
    <header>
        <?php include "../Header/Header.html" ?>
    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <main>
        <section class="main-sidebar">
            <form class="main-sidebar__search" name ="timkiem" method="post"> 
            <div class="content-background">
                    <h3 class="content-p">Tìm kiếm địa danh</h3>
                </div>               
                <div class="search-content">
                    <div class="search-content-wrapper">
                        <input type="text" name="timkiem" class="search-content__input" placeholder="Khách sạn, Địa danh..." require>
                        <input type="submit" class="search-content__button"  name="submit" value="">
                        <span class="search-content__search"><i class="fas fa-search"></i></span>
                    </div>                    
                    
                </div>
            </form>
                

            <div class="main-sidebar__categories">
                <div class="content-background">
                    <h3 class="content-p">Chuyên mục</h3>
                </div>
                <div>
                    <ul id="categories-ul"> 
                    </ul>
                </div>
            </div>
            <div class="main-sidebar__mostviewed">
                <div class="content-background">
                    <h3 class="content-p">Bài viết xem nhiều nhất</h3>
                </div>
                <div id = "mostviewed-content">

                </div>
            </div>
        </section>
        <section class="main-content">
            <h2 class="main-content__h2">CẨM NANG DU LỊCH </h2>
            <div class="main-content__borderbottom"></div>
            <div class="main-content__block">
                <?php while($row = $kq->fetch_assoc()) { ?>
                    <div class="block-element">
                    <div>
                        <a href="/Code-TravelTips/TravelTips-CT/TravelTips_ct.html">
                            <img src="../Code-TravelTips/<?php echo $row["Img_Src"] ?>" alt="<?php echo $row["Titile"] ?>" class="block-element__img">
                        </a>
                        
                    </div>
                    <div class="block-element__title">
                        <p>
                            <?php echo $row["Name_Blog"] ?>
                        </p>
                    </div>
                    <div class="block-element__icon">
                        <div class="element-icon">
                            <i class="far fa-calendar-alt"></i>
                            <span><?php echo $row["Write_Time"] ?></span>
                        </div>
                        <div class="element-icon">
                            <i class="far fa-eye"></i>
                            <span><?php echo $row["View"] ?></span>
                        </div>
                    </div>
                    <div class="block-element__discription">
                        <p><?php echo $row["Description_Blog"] ?></p>
                    </div>
                    <div class="block-element__more">
                        <a href="/Code-TravelTips/TravelTips-CT/TravelTips_ct.html">Xem thêm
                            <span>
                                <i class="fas fa-angle-double-right"></i>
                            </span>
                        </a>
                        
                    </div>
                </div>
                <?php } ?>
                <div class="main-content__changepages">
                <div class="changepages-backpage">
                    <a href="#">
                        <i class="fas fa-angle-double-left"></i>
                        <span>Trang trước</span>
                    </a>
                </div>
                <div class="changepages-number">
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">6</a>
                    <a href="">7</a>
                    <a href="">8</a>
                    <a href="">9</a>
                    <a href="">...</a>
                    <a href="">19</a>
                    <a href="">20</a>
                </div>
                <div class="changepages-nextpage">
                    <a href="#">Trang sau
                        <span>
                            <i class="fas fa-angle-double-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="clear-both"></div>
        </section>
    </main>
    <footer>
        <img src="/Footer/teamwork_1536.jpg" alt="teamwork_image">
        <p id="copyright">Copyright &copy 2021 UITour Company</p>
        <div id="transparency"></div>
        <section class="info">
            <h2 class="info__title">Thông tin công ty</h2>
            <hr class="info__underline"><br>
            <div>
                <p>Công ty được thành lập từ tháng 9 năm 2021</p>
                <p>Dẫn đầu danh sách ít khách du lịch nhất Việt Nam </p>
                <p>Với những chiến lược kinh doanh vô cùng hiệu quả thì hiện nay công ty đang dần chuyển sang bán kem trộn để cải thiện tiềm lực kinh tế</p>
            </div>
            
        </section>
        <section class="working-time">
            <h2 class="working-time__title">Thời gian làm việc</h2>
            <hr class="working-time__underline"><br>
            <ul>
                <il><p>Thứ 2: từ 6h00 - 17h00</p></il>
                <il><p>Thứ 3: từ 6h00 - 17h00</p></il>
                <il><p>Thứ 4: từ 6h00 - 17h00</p></il>
                <il><p>Thứ 5: từ 6h00 - 17h00</p></il>
                <il><p>Thứ 6: từ 6h00 - 17h00</p></il>
                <il><p>Thứ 7: từ 6h00 - 17h00</p></il>
                <il><p>Chủ nhật: từ 6h00 - 17h00</p></il>
            </ul>
        </section>
        <section class="support">
            <h2 class="support__title">Hỗ trợ</h2>
            <hr class="support__underline">
            <div>
                <p>Quên mật khẩu?</p>
                <p>FAQ</p>
            </div>
        </section>
        <section class="connection">

            <span class="ti-location-pin"></span>
            <div class="connection__address">
                <p><strong>Địa chỉ</strong><br>Vincom Thủ Đức</p>
            </div>

            <span class="ti-mobile"></span>
            <div class="connection__phone">
                <p><strong>Điện thoại</strong><br>0123456789</p>
            </div>
            <span class="ti-email"></span>
            <div class="connection__email">
                <p><strong>Email</strong><br>kemkabi_chipu@gmail.com</p>
            </div>
            <hr>
            <p>Kết nối với chúng tôi:</p>
            <span class="ti-facebook"></span>
            <span class="ti-google"></span>
            <span class="ti-linkedin"></span>
        </section>
    </footer>
    <script src="../Code-TravelTips/main.js"></script>
    <script src="../Trangchu/Trangchu.js"></script>
</body>
</html>
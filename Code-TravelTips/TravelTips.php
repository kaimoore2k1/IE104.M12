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
            $sql = "SELECT * FROM blog WHERE title = 'CẨM NANG DU LỊCH' ";
            if(isset($_POST["timkiem"]))
            {
                $result = $_POST["timkiem"];
                $sql = "SELECT * FROM blog WHERE title = 'CẨM NANG DU LỊCH' and Name_Blog Like '%$result%' ";
                
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
    <link rel="stylesheet" href="./TravelTips.css">
    <title>Travel Tips</title>
</head>
<body>
    
    <header>
    <?php include '../newHeader/newHeader.php'; ?>  
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
    </header>
    <div id="overlay">
        <div id="overlay-background"></div>
        <iframe id="sign-in__overlay" src="../sign-in/sign-in.html" width="420px" height="620px" frameborder="0"></iframe>
        <iframe id="sign-up__overlay" src="../sign-up/sign-up.html" width="420px" height="620px" frameborder="0"></iframe>
    </div>
    <main>
        <div class="overlay_hidden" onclick="clickhidden()"></div>
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
            <div class="main-content__Title">
                <button id="responsive-button" onclick="clickblock()"><i class="fas fa-search"></i></button>
                <h2 class="main-content__h2">CẨM NANG DU LỊCH </h2>
            </div>
                
            <div class="main-content__borderbottom"></div>
            <div class="main-content__block">
                <?php while($row = $kq->fetch_assoc()) { ?>
                    <div class="block-element">
                    <div>
                        <a href="/Code-TravelTips/TravelTips-CT/TravelTips_ct.html">
                            <img src="../Code-TravelTips/<?php echo $row["Img_Src"] ?>" alt="<?php echo $row["Title_Img"] ?>" class="block-element__img">
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

    <?php include '../Footer/Footer.php';  ?>
    <script src="../Code-TravelTips/TravelTips.js"></script>
    <script src="../Trangchu/Trangchu.js"></script>
</body>
</html>
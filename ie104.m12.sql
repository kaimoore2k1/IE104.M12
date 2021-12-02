-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 02, 2021 at 09:19 AM
=======
-- Generation Time: Dec 02, 2021 at 08:41 AM
>>>>>>> 315b5fa823713d5b46c824ce798f0a039eca16b7
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ie104.m12`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_Id` int(11) NOT NULL,
  `Title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Name_Blog` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Write_Time` date NOT NULL,
  `Description_Blog` text COLLATE utf8_unicode_ci NOT NULL,
  `View` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_Id`, `Title`, `Name_Blog`, `Write_Time`, `Description_Blog`, `View`) VALUES
(1, 'CẨM NANG DU LỊCH', 'Top 5 Điểm Cắm Trại Quanh Hà Nội Siêu Hấp Dẫn Phải Rủ “Cạ Cứng” Đi Ngay', '2021-09-30', 'Không cần cầu kỳ cũng có thể vui tới bến cùng hội bạn thân, bởi vậy cắm trại ngày càng được nhiều bạn trẻ Việt Nam yêu thích, đặc biệt ở những thành phố lớn, và trong khoảng thời gian dịch bệnh, khiến việc di chuyển, đi du lịch dài ngày trở nên khó khăn hơn. Một buổi camping có thể giúp bạn refresh lại bản thân, gắn kết bạn bè mà không cần chuẩn bị quá cầu kỳ. Mytour sẽ giới thiệu đến bạn 5 địa điểm cắm trại quanh Hà Nội cực hấp dẫn, nhớ lưu lại để rủ hội bạn thân cùng đi nhé.', 5342),
(2, 'CẨM NANG DU LỊCH', 'Bộ Sưu Tập Bánh Trung Thu Khách Sạn Lotte - Delightful Lotte 2021', '2021-09-17', 'Một mùa trăng nữa lại cận kề, bạn đã chuẩn bị được món quà nào cho những người thân yêu, trân trọng chưa? Những chiếc bánh trung thu sẽ mang ý nghĩa trọn vẹn, đủ đầy. Bánh Trung thu Khách sạn Lotte Hà Nội với bộ sưu tập Delightful Lotte, sẽ là thức quà ý nghĩa hội tụ  tinh hoa đất trời thể hiện trọn vẹn tấm chân tình của bạn đến gia đình, bạn bè trong mùa trăng này.', 201),
(3, 'CẨM NANG DU LỊCH', 'Bánh Trung Thu Khách Sạn Intercontinental Hanoi Landmark 72', '2021-09-17', 'Cứ mỗi năm đến hội trăng rằm, người ta lại thường tặng nhau những chiếc bánh trung thu, với ý nghĩa như lời chúc cho cuộc sống tròn đầy, viên mãn. Bởi vậy mà chiếc bánh không chỉ là một món ăn và mà còn mang giá trị tinh thần không thể thiếu trong ngày Tết Trung Thu. Mùa trăng năm nay hãy cùng khám phá những giá trị truyền thống hòa quyện cùng màu sắc ngọt ngào trong bộ sưu tập Bánh Trung Thu của khách sạn InterContinental Hanoi Landmark72.', 255),
(4, 'CẨM NANG DU LỊCH', 'Chương Trình Mua 1 Tặng 1 Cực Hấp Dẫn Từ Thương Hiệu Bánh Trung Thu Khách Sạn Sheraton Hanoi', '2021-09-17', 'Một mùa Trung thu nữa lại đang đến gần, bỏ lại những bận rộn, lo lắng trong cuộc sống, các gia đình lại cùng nhau quây quần. Trên mâm cỗ trông trăng của mỗi gia đình chắc chắn đều không thể thiếu những chiếc bánh Trung thu. Đến hẹn lại lên, khách sạn Sheraton Hanoi đã cho ra mắt bộ sưu tập Bánh trung thu cao cấp cực hấp dẫn cùng nhiều ưu đãi thu hút. ', 224),
(5, 'CẨM NANG DU LỊCH', 'Bộ Sưu Tập Bánh Trung Thu 2021 Từ Intercontinental Westlake Hanoi - “Vĩnh Bảo Sắc Họa” Đầy Độc Đáo', '2021-09-16', 'Mùa Trung thu đến gần, không chỉ những hãng bánh quen thuộc mà nhiều khách sạn 5 sao đẳng cấp cũng lần lượt cho ra mắt nhiều bộ sưu tập bánh trung thu hấp dẫn. Năm nay, khách sạn Intercontinental Westlake Hanoi cũng cho ra mắt từ sớm bộ sưu tập bánh trung thu của riêng mình. Sản phẩm ngay khi ra mắt đã nhận được sự yêu thích và quan tâm lớn của khách hàng. Bộ sưu tập bánh trung thu Intercontinental Westlake Hanoi năm 2021 có điều gì đặc biệt đến vậy?', 215),
(6, 'CẨM NANG DU LỊCH', 'Top Những Mẫu Bánh Trung Thu Khách Sạn Hot Nhất Năm 2021', '2021-09-15', 'Tết Trung Thu là một hoạt động văn hóa truyền thống lâu đời tại Việt Nam. Là thời điểm mà các gia đình chuẩn bị những mâm cỗ cúng gia tiên, tạ ơn cho một mùa màng bội thu. Vào thời điểm mặt Trăng tròn nhất và tỏa ra những ánh sáng ấm áp, người ta hay quây quần bên nhau, cùng thưởng bánh, uống trà và ngắm trăng.\r\n\r\nBánh trung thu không chỉ là một loại bánh truyền thống thơm ngon được dùng vào mỗi dịp rằm tháng Tám, mà nó còn là thức quà mang ý nghĩa về sự may mắn, đoàn viên, hạnh phúc. \r\n\r\nNăm 2021 là một năm đặc biệt, mặc dù tình hình Covid 19 vẫn đang diễn biến phức tạp, nhưng một số khách sạn vẫn cho ra những mẫu bánh trung thu cao cấp, thiết kế riêng cho mùa đoàn viên năm nay, phục vụ nhu cầu biếu tặng và thưởng thức của khách hàng. \r\n\r\nCùng Mytour điểm qua top những mẫu bánh Trung Thu khách sạn hot nhất năm 2021 này nhé!', 172),
(7, 'CẨM NANG DU LỊCH', 'Du Lịch Tại Chỗ - Xu Hướng Du Lịch Mùa Covid', '2021-09-10', 'Hình thức du lịch tại chỗ được cho là ra đời từ năm 2008 tại Mỹ, khi mà thời điểm này các cuộc khủng hoảng thị trường khiến nhiều người Mỹ bị cắt giảm thu nhập và rơi vào tình cảnh khó khăn. Thời điểm đó nhiều gia đình ở Mỹ phải giới hạn ngân sách cho các chuyến nghỉ mát dài ngày. Thay vì những chuyến đi chơi xa, họ lựa chọn những địa điểm gần làm nơi nghỉ ngơi, thư giãn cùng người thân, gia đình. Xu hướng du lịch này lại càng ngày càng phát triển đặc biệt đối với những bạn trẻ, hay dân văn phòng không có quá nhiều thời gian và muốn tiết kiệm chi phí.\r\n\r\nTrong thời điểm Covid-19 vẫn đang còn diễn biến phức tạp, làm ảnh hưởng không nhỏ đến kinh tế và việc đi lại, du lịch tại chỗ lại càng được ưa chuộng hơn bao giờ hết.', 174),
(8, 'CẨM NANG DU LỊCH', 'Mua Bánh Trung Thu Cao Cấp Ngay Giữa Mùa Dịch Siêu Dễ Dàng, Lại Còn Được Giao Hàng Miễn Phí', '2021-08-18', 'Một mùa Tết Trung thu lại sắp cận kề, những chiếc bánh Trung thu lại trở thành mặt hàng được nhiều người quan tâm tìm mua. Tuy nhiên, dịch COVID-19 bùng phát căng thẳng, nhiều tỉnh thành đều phải đóng cửa, giãn cách xã hội, nhiều người lo ngại khó tìm mua được những thương hiệu bánh Trung thu cao cấp, chất lượng. Đừng lo, có Mytour, việc mua bánh đã trở nên thật dễ dàng', 326),
(9, 'CẨM NANG DU LỊCH', 'Điểm Du Lịch Pleiku Khiến Bạn Muốn Xách Balo Lên Và Đi Ngay', '2021-07-03', 'Có người từng nói “đừng ai hỏi tôi ở Pleiku có gì đẹp, bởi vẻ đẹp ở đây là không kể hết”. Có lẽ vì vậy, có những người đã tới Pleiku vài lần nhưng vẫn muốn đi thêm. Vùng đất đỏ bazan, mang nhiều nét văn hóa đặc sắc, thiên nhiên trù phú, cảnh sắc lại càng tuyệt vời. Nơi có những cánh đồng cà phê bạt ngàn, Biển Hồ mênh mông, thác Chín Tầng Mây hùng vĩ... Khám phá Pleiku còn nhiều điều thú vị hơn bạn nghĩ. Trong bài viết này Mytour sẽ dẫn bạn đi khám phá những địa điểm du lịch Pleiku khiến bạn muốn xách balo lên và đi ngay.', 692),
(10, 'CẨM NANG DU LỊCH', 'Kết Hợp Du Lịch Và Chụp Ảnh Cưới, The Memories Liệu Có Gỡ Rối Cho Các Cặp Đôi?', '2021-07-02', 'Dịch vụ cưới dù đa dạng nhưng để tỉ mỉ, hài lòng từng khách hàng thì vẫn rất khó tìm. Vì thế, khi một doanh nghiệp du lịch như UITour tính đường kết duyên cho nghỉ dưỡng và chụp ảnh cưới bằng các sản phẩm trọn vẹn, nhiều người cảm thấy vừa mới mẻ vừa băn khoăn về khả năng có thể \"gỡ rối\" cho các cặp đôi hay không?', 497),
(11, 'CẨM NANG DU LỊCH', 'Sáng Tạo Hay Là Chết, Mytour Liều Lĩnh Mở Tour Trải Nghiệm Khám Phá', '2021-07-02', 'Khởi điểm là một nền tảng du lịch trực tuyến, \"nhà\" UITour – một OTA nội địa vừa có thêm những thành viên mới – Đó là UITour Event với một dòng sản phẩm chuyên biệt mang tên Adventures chuyên về khám phá. Lấn sân vào địa hạt của các công ty truyền thống, Adventures giống như một phép thử thời hậu Covid-19: Sáng tạo hay là chết?', 404),
(12, 'CẨM NANG DU LỊCH', 'Câu Chuyện Của Làng Nương', '2021-06-01', 'Nằm trong quần thể Trung tâm văn hóa Trúc Lâm, đối diện với khu tĩnh dưỡng Legacy Yên Tử - MGallery mang dáng dấp cung đình là Làng Nương nhộn nhịp, sống động và không kém phần cổ kính cho những du khách tìm đến một hành trình bình dị, tiết kiệm mà vẫn thoải mái, an vui.\r\n\r\nLàng Nương lấy cảm hứng từ thời khắc quan trọng trong cuộc đời Phật hoàng Trần Nhân Tông, khi Ngài vào núi Yên Tử tu theo hạnh đầu đà, các thị hầu, bà mụ, cung phi không thể theo Ngài đã ở lại và lập làng dưới chân núi. Kiến trúc của làng tái hiện không gian văn hóa truyền thống của người Việt với gạch thẻ xếp nghiêng dọc, lớp nhà nhấp nhô, ngói mũi sen, tường trình đất xen kẽ tường đá ong, các nông cụ truyền thống… Thấp thoáng đâu đó là họa tiết trang trí cách điệu hình lá sen, lá đề, ống trúc,… mang đậm tinh thần Phật giáo Trúc Lâm.', 1026);

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `Booking_Form_Id` int(11) NOT NULL,
  `User_Id` int(11) DEFAULT NULL,
  `CT_Tour_Id` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contect_Id` int(11) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Topic` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_blog`
--

CREATE TABLE `ct_blog` (
  `CT_Blog_Id` int(11) NOT NULL,
  `Blog_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hotel`
--

CREATE TABLE `ct_hotel` (
  `CT_Hotel_Id` int(11) NOT NULL,
  `Hotel_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Conten_CS` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_tour`
--

CREATE TABLE `ct_tour` (
  `CT_Tour_id` int(11) NOT NULL,
  `Tour_Id` int(11) NOT NULL,
  `Tour_Highlight` text COLLATE utf8_unicode_ci NOT NULL,
  `Content_CS` text COLLATE utf8_unicode_ci NOT NULL,
  `Content_CT` text COLLATE utf8_unicode_ci NOT NULL,
  `CT_Tour_Img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `CT_Tour_PDF` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_tour`
--

INSERT INTO `ct_tour` (`CT_Tour_id`, `Tour_Id`, `Tour_Highlight`, `Content_CS`, `Content_CT`, `CT_Tour_Img`, `CT_Tour_PDF`) VALUES
(1, 1, '- Khám phá mãnh hổ kinh tế của châu Á với nhiều dấu ấn lịch sử, pha trộn hài hòa giữa văn hóa hiện đại và truyền thống.\r\n- Tham gia hoạt động thả đèn trời, viếng các đền chùa linh thiêng cầu may mắn, bình an cho gia đình.\r\n- Thỏa sức mua sắm và thưởng thức những món ăn địa phương nức tiếng tại những khu chợ đêm sầm uất.', '<div class=\"wapper__content--content wapper__hidden__content\">\r\n                <p class=\"day1\">\r\n                    <strong>Lịch khởi hành: <br>\r\n                        Đợt 1: 16 – 18/4 <br>\r\n                        Đợt 2: 23 – 25/4 <br>\r\n                    </strong> <br>\r\n                    <strong>* Giá trẻ em (không bao gồm vé máy bay):</strong> <br>\r\n                    - Trẻ em từ 0 tuổi – 5 tuổi (or dưới 1,0m): miễn phí TOUR <br>\r\n                    - Trẻ em từ 6 tuổi – 11 tuổi (1,0m- 1,4m):  tính 60% giá tour ( ngủ ghép với Ba mẹ) <br>\r\n                    - Trẻ em trên 11 tuổi trở lên: tính như nguời lớn. <br> <br>\r\n\r\n                    <strong>* Giá tour bao gồm:</strong><br>\r\n                    - Xe oto du lich đời mới máy lạnh tốt phục vụ theo chương trình <br>\r\n                    - Khách sạn 3 sao (02 khách//phòng) <br>\r\n                    - 02 bữa sáng buffet\r\n                    01 bữa buffet 200k/suất; 3 bữa chính khác * 150k/s <br>\r\n                    - Vé cáp treo và vui chơi Công viên nước Hòn Thơm 400k/vé <br>\r\n                    -  Tàu câu cá + dụng cụ câu cá và lặn ngắm san hô <br>\r\n                    - Vé tham quan các điểm theo chương trình. <br>\r\n                    - Hướng dẫn viên phục vụ tại Phú Quốc và đón – tiễn sân bay Vinh <br>\r\n                    - Mũ Saigontourist, khăn, nước suối Saigontourist – 02 chai 0.5 lít/khách/ngày <br>\r\n                    - VAT 10% <br> <br>\r\n                    \r\n                    <strong>* Giá tour không bao gồm:</strong> <br>\r\n                        - Vé máy bay khứ hồi Vinh//Phú Quốc dự tính <br>\r\n                        - Vinwonder và  Safari <br>\r\n                        - Chi phí cá nhân, điện thoại, giặt ủi. <br>\r\n                        - Chi phí tham quan ngoài chương trình <br>\r\n                        - Chi phí bia, nước ngọt trong các bữa ăn. <br> <br>\r\n\r\n                    <strong>* Lưu ý:</strong><br>\r\n                    Khi đăng ký vui lòng cung cấp tên chính xác, đầy đủ trên Passport/CMND/ Giấy khai sinh bản chính (trẻ em dưới 14 tuổi). <br>\r\n                    Quý khách khi đi cần đem theo CMND (còn hạn 15 năm)/ Passport/ Giấy khai sinh (trẻ em dưới 14 tuổi)/ \r\n                    Trẻ em không đi cùng cha mẹ phải có giấy ủy quyền của cha hoặc mẹ có xác nhận của chính quyền địa phương cho người dẫn trẻ em đi. Thời gian và điểm tham quan trong chương trình linh động thay đổi theo điều kiện thực tế\r\n                </p>\r\n            </div>', ' <p class=\"day1--title\"><strong>Liên hệ tư vấn: Anh Kim Soo Huyn - 0908 251 152 // Chị La Lisa - 0988\r\n                        356996</strong></p>\r\n                        <p class=\"day1\">\r\n                            <strong>NGÀY 1: TP.HCM - CAO HÙNG (Ăn tối)</strong> <br>\r\n                            Tập trung tại lầu 2 - Ga đi Quốc tế Tân Sơn Nhất làm thủ tục chuyến bay VN582 (09:55-13:50) đi Cao Hùng. \r\n                            Ăn nhẹ trên máy bay. Đến Cao Hùng, tham quan Núi Phật Quang (Fo Guang Shan) - ngôi chùa nổi tiếng nhất Cao Hùng với tượng Phật ngoài trời cao 36m, \r\n                            cùng với quần thể hơn 480 tượng Phật nhỏ chung quanh.\r\n                            Tự do mua sắm và khám phá Chợ đêm Lục Hợp. Nghỉ đêm.\r\n                        </p>\r\n                        <div class=\"img__center\">\r\n                            <img src=\"TaiwanDetail1.png\" alt=\"TaiwanDetail1\">\r\n                            <p class=\"description\">\r\n                                <strong>Chùa Phật Quang</strong>\r\n                            </p>\r\n                        </div>\r\n                        <p class=\"Day2\">\r\n                            <strong>NGÀY 2: CAO HÙNG – ĐÀI TRUNG (Ăn sáng, trưa, tối)</strong> <br>\r\n                            Trả phòng. Tham quan Hồ Nhật Nguyệt (Sun Moon Lake) bằng thuyền - hồ nằm tại độ cao hơn 700m so với mực nước biển,\r\n                             xung quanh là trập trùng núi non, phong cảnh hữu tình. Mua sắm tại Cửa hàng nấm linh chi. \r\n                            Tham quan Đền Văn Võ (Wenwu Temple) nằm phía Bắc của hồ Nhật Nguyệt, nơi thờ Quan Công, Nhạc Phi và Khổng Tử. Mua sắm tại Cửa hàng Trà Ô Long.\r\n                             Tự do mua sắm và khám phá Chợ đêm Phụng Giáp. Nghỉ đêm.\r\n                        </p>\r\n                        <div class=\"img__center\">\r\n                            <img src=\"TaiwanDetail2.png\" alt=\"TaiwanDetail2\">\r\n                            <p class=\"description\">\r\n                                <strong>Hồ Nhật Nguyệt</strong>\r\n                            </p>\r\n                        </div>\r\n                        <p class=\"day3\">\r\n                            <strong>NGÀY 3: ĐÀI TRUNG – ĐÀI BẮC (Ăn sáng, trưa, tối)</strong> <br>\r\n                            Trả phòng. Mua sắm tại Cửa hàng bánh dứa. Tham quan Công viên Dương Minh Sơn là một trong 8 vườn quốc gia lớn của Đài Loan, với địa hình núi lửa đặc thù, xen lẫn những thung lũng yên bình và quần thể động thực vật phong phú.\r\n                            Mua sắm tại Cửa hàng Tỳ Hưu. Tham quan Thư viện Beitou được thiết kế giống như một ngôi nhà trên cây. \r\n                            Tham quan Viện Bảo Tàng Cố Cung - được công nhận là 1 trong 4 viện bảo tàng lớn nhất thế giới với hơn 620.000 hiện vật vô cùng quý báu, nằm trong bộ sưu tập của Hoàng gia Trung Quốc được mang sang Đài Loan cất giữ. Tham quan Tòa nhà Taipei 101 tầng - quý khách có thể mua vé lên tầng 89 để tham quan và ngắm toàn cảnh Đài Bắc (chi phí tự túc). \r\n                            Tự do mua sắm và khám phá Chợ đêm Nhiêu Hà. Nghỉ đêm.xin phép dời quý khách sang đợt khởi hành tiếp theo.\r\n                        </p>\r\n                        <div class=\"img__center\">\r\n                            <img src=\"TaiwanDetail3.png\" alt=\"TaiwanDetail3\">\r\n                            <p class=\"description\">\r\n                                <strong>Viện Bảo Tàng Cổ Cung</strong>\r\n                            </p>\r\n                        </div>\r\n                \r\n                        <p class=\"day4\">\r\n                            <strong>NGÀY 4: ĐÀI BẮC (Ăn sáng, trưa, tối)</strong> <br>\r\n                            Tham quan Công viên địa chất Dã Liễu là nơi có những mõm đá với hình thù kỳ lạ.\r\n                            Tham quan Phố cổ Thập Phần với không khí lãng mạn hoài cổ, nhiều dãy hàng lưu niệm đan xen và thả đèn trời ước nguyện (04 khách/đèn) - thả đèn riêng, tự túc khoảng 160.000đ/đèn.\r\n                            Tham quan Phố núi Cửu Phần. \r\n                            Mua sắm tại Trung tâm đá quý. Tự do mua sắm và khám phá Khu phố đi bộ Ximen. Nghỉ đêm.\r\n                        </p>\r\n                        <div class=\"img__center\">\r\n                            <img src=\"TaiwanDetail4.png\" alt=\"TaiwanDetail4\">\r\n                            <p class=\"description\">\r\n                                <strong>Phố núi Cửu Phần</strong>\r\n                            </p>\r\n                        </div>\r\n                \r\n                        <p class=\"day5\">\r\n                            <strong>NGÀY 5: ĐÀI BẮC - TP.HCM (Ăn sáng)</strong> <br>\r\n                            Trả phòng. Ra sân bay, làm thủ tục chuyến bay VN571 (07:45-10:25) về Tp.HCM. \r\n                            Đến sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch.\r\n                        </p>\r\n            </div>', '{\"banner\" : \"DuLichNuocNgoai__CHiTiet/TaiwanBanner.png\",\"gallery\" : [\"DuLichNuocNgoai__CHiTiet/Taiwan1.png\", \"DuLichNuocNgoai__CHiTiet/Taiwan2.png\", \"DuLichNuocNgoai__CHiTiet/Taiwan3.png\", \"DuLichNuocNgoai__CHiTiet/Taiwan4.png\", \"DuLichNuocNgoai__CHiTiet/Taiwan5.png\", \"DuLichNuocNgoai__CHiTiet/Taiwan6.png\"]', '    <div class=\"wapper__content--content\">\r\n        <img src=\"logo_UITour.png\" alt=\"logo pdf\">\r\n        <h1>DU LỊCH ĐÀI LOAN [CAO HÙNG - ĐÀI BẮC - ĐÀI TRUNG]</h1>\r\n        <p class=\"day1--title\"><strong>Liên hệ tư vấn: Anh Kim Soo Huyn - 0908 251 152 // Chị La Lisa - 0988\r\n                356996</strong></p>\r\n        <p class=\"day1\">\r\n            <strong>NGÀY 1: TP.HCM - CAO HÙNG (Ăn tối)</strong> <br>\r\n            Tập trung tại lầu 2 - Ga đi Quốc tế Tân Sơn Nhất làm thủ tục chuyến bay VN582 (09:55-13:50) đi Cao Hùng. \r\n            Ăn nhẹ trên máy bay. Đến Cao Hùng, tham quan Núi Phật Quang (Fo Guang Shan) - ngôi chùa nổi tiếng nhất Cao Hùng với tượng Phật ngoài trời cao 36m, \r\n            cùng với quần thể hơn 480 tượng Phật nhỏ chung quanh.\r\n            Tự do mua sắm và khám phá Chợ đêm Lục Hợp. Nghỉ đêm.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"TaiwanDetail1.png\" alt=\"TaiwanDetail1\">\r\n            <p class=\"description\">\r\n                <strong>Chùa Phật Quang</strong>\r\n            </p>\r\n        </div>\r\n        <p class=\"Day2\">\r\n            <strong>NGÀY 2: CAO HÙNG – ĐÀI TRUNG (Ăn sáng, trưa, tối)</strong> <br>\r\n            Trả phòng. Tham quan Hồ Nhật Nguyệt (Sun Moon Lake) bằng thuyền - hồ nằm tại độ cao hơn 700m so với mực nước biển,\r\n             xung quanh là trập trùng núi non, phong cảnh hữu tình. Mua sắm tại Cửa hàng nấm linh chi. \r\n            Tham quan Đền Văn Võ (Wenwu Temple) nằm phía Bắc của hồ Nhật Nguyệt, nơi thờ Quan Công, Nhạc Phi và Khổng Tử. Mua sắm tại Cửa hàng Trà Ô Long.\r\n             Tự do mua sắm và khám phá Chợ đêm Phụng Giáp. Nghỉ đêm.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"TaiwanDetail2.png\" alt=\"TaiwanDetail2\">\r\n            <p class=\"description\">\r\n                <strong>Hồ Nhật Nguyệt</strong>\r\n            </p>\r\n        </div>\r\n        <p class=\"day3\">\r\n            <strong>NGÀY 3: ĐÀI TRUNG – ĐÀI BẮC (Ăn sáng, trưa, tối)</strong> <br>\r\n            Trả phòng. Mua sắm tại Cửa hàng bánh dứa. Tham quan Công viên Dương Minh Sơn là một trong 8 vườn quốc gia lớn của Đài Loan, với địa hình núi lửa đặc thù, xen lẫn những thung lũng yên bình và quần thể động thực vật phong phú.\r\n            Mua sắm tại Cửa hàng Tỳ Hưu. Tham quan Thư viện Beitou được thiết kế giống như một ngôi nhà trên cây. \r\n            Tham quan Viện Bảo Tàng Cố Cung - được công nhận là 1 trong 4 viện bảo tàng lớn nhất thế giới với hơn 620.000 hiện vật vô cùng quý báu, nằm trong bộ sưu tập của Hoàng gia Trung Quốc được mang sang Đài Loan cất giữ. Tham quan Tòa nhà Taipei 101 tầng - quý khách có thể mua vé lên tầng 89 để tham quan và ngắm toàn cảnh Đài Bắc (chi phí tự túc). \r\n            Tự do mua sắm và khám phá Chợ đêm Nhiêu Hà. Nghỉ đêm.xin phép dời quý khách sang đợt khởi hành tiếp theo.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"TaiwanDetail3.png\" alt=\"TaiwanDetail3\">\r\n            <p class=\"description\">\r\n                <strong>Viện Bảo Tàng Cổ Cung</strong>\r\n            </p>\r\n        </div>\r\n\r\n        <p class=\"day4\">\r\n            <strong>NGÀY 4: ĐÀI BẮC (Ăn sáng, trưa, tối)</strong> <br>\r\n            Tham quan Công viên địa chất Dã Liễu là nơi có những mõm đá với hình thù kỳ lạ.\r\n            Tham quan Phố cổ Thập Phần với không khí lãng mạn hoài cổ, nhiều dãy hàng lưu niệm đan xen và thả đèn trời ước nguyện (04 khách/đèn) - thả đèn riêng, tự túc khoảng 160.000đ/đèn.\r\n            Tham quan Phố núi Cửu Phần. \r\n            Mua sắm tại Trung tâm đá quý. Tự do mua sắm và khám phá Khu phố đi bộ Ximen. Nghỉ đêm.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"TaiwanDetail4.png\" alt=\"TaiwanDetail4\">\r\n            <p class=\"description\">\r\n                <strong>Phố núi Cửu Phần</strong>\r\n            </p>\r\n        </div>\r\n\r\n        <p class=\"day5\">\r\n            <strong>NGÀY 5: ĐÀI BẮC - TP.HCM (Ăn sáng)</strong> <br>\r\n            Trả phòng. Ra sân bay, làm thủ tục chuyến bay VN571 (07:45-10:25) về Tp.HCM. \r\n            Đến sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch.\r\n        </p>\r\n\r\n        \r\n\r\n\r\n    </div>'),
(2, 6, '- Cùng ngắm bình minh và đắm mình vào vẻ đẹp lãng mạn của đảo Jeju - “Hawaii của Hàn Quốc”\r\n- Khám phá và vui chơi tại Everland - Top 10 công viên giải trí thu hút nhất thế giới.\r\n- Thỏa sức chiêm ngưỡng các loài hoa tuyệt đẹp đến từ khắp nơi trên thế giới tại Lễ hội hoa Goyang\r\n- Thỏa thích mua sắm với các sản phẩm chăm sóc sức khỏe và làm đẹp nổi tiếng Hàn Quốc.', 'GIÁ TOUR TRỌN GÓI:\r\n(Đã bao gồm đầy đủ thuế và phí - Giá tour có thể thay đổi vào thời điểm đặt tour)\r\n(Áp dụng cho khách từ 12 tuổi đến 69 tuổi)\r\n\r\n* Vé trẻ em:\r\n- Trẻ em dưới 2 tuổi                             : 30% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n- Trẻ em từ 2 đến dưới 12 tuổi             : 80% giá của người lớn (bé ngủ chung giường với Bố Mẹ)\r\n                                                             : 90% giá của người lớn (bé có giường riêng).\r\n- Trẻ em từ 12 tuổi trở lên                    :100% giá như người lớn.\r\n\r\n* Giá tour bao gồm:\r\n- 05 đêm ngủ tại khách sạn 3* tiêu chuẩn 2 người /1 phòng  (nếu đoàn lẻ nam hoặc nữ thì ở 3 người/ phòng)\r\n- Vé máy bay khứ hồi Hanoi - Seoul// Jeju-Seoul//Seoul - Hanoi.\r\n- Thuế và phụ phí hàng không\r\n- Các bữa ăn theo chương trình.\r\n- Xe ôtô vận chuyển theo chương trình. Vé vào cửa các điểm tham quan lần thứ nhất\r\n- Hướng dẫn viên Lữ hành Saigontourist suốt tuyến\r\n- Visa nhập cảnh vào Hàn Quốc (thư mời, dịch thụât công chứng Tiếng Anh)\r\n- Quà tặng của Lữ hành Saigontourist (túi xách và nón…)\r\n\r\n* Giá tour không bao gồm:\r\n- Phụ phí phòng đơn. Phi hành lý quá cước. Chi phí cá nhân: đồ uống, giặt là…\r\n- Tiền bồi dưỡng cho HDV và lái xe tại nước ngoài (140.000 đ/khách/ngày)\r\n\r\nTHÔNG TIN HƯỚNG DẪN\r\n\r\n* Trường hợp hủy tour:\r\n- Quý khách vui lòng thanh toán các khoản lệ phí hủy tour như sau:\r\n- Ngay sau khi đăng ký tour                                                                                          : chi trả 30% giá tour.\r\n- Trước ngày đi 30 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)                          : chi trả 50% giá tour.\r\n- Trước ngày đi từ 15 đến 29 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 70% giá tour.\r\n- Trước ngày đi từ 7 đến 14 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)            : chi trả 90% giá tour.\r\n- Trước ngày đi từ 0 đến 6 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 100% giá tour\r\n\r\n* Lưu ý :\r\n- Bất cứ khách hàng nào bị Lãnh sự quán từ chối cấp visa, phải trả chi phí làm visa là 2.300.000 VND/khách\r\n- Khách hàng cam kết đi theo đúng lịch trình, không bỏ tour. Bất cứ một hình thức bỏ hoặc không sử dụng dịch vụ gì tại nước ngoài đều không được hoàn lại tiền vì mọi dịch vụ đã được thanh toán trước. Theo chương trình khuyến mại đã ký với đối tác Hàn Quốc, quý khách sẽ đi theo tour suốt hành trình. Quý khách nào tách đoàn vui lòng báo trước và trả thêm 2.350.000 VNĐ/khách/ngày.\r\n- Khách hàng mang hộ chiếu nước ngoài phải thanh toán thêm : 2.300.000 VNĐ/khách/hành trình.\r\n- Giá và trường hợp hủy tour có thể thay đổi tăng cho các dịp lễ & Tết.\r\n- Sau khi đóng tiền, nếu quý khách muốn hủy tour, vui lòng đem CMND và hóa đơn đã đóng tiền đến ngay văn phòng đã đang ký để làm thủ tục hủy tour. Lữ hành Saigontourist không nhận khách báo hủy qua điện thoại.\r\n- Lữ hành Saigontourist không nhận khách có thai từ 5 tháng trở lên tham gia các tour du lịch nước ngoài.\r\n- Các điểm tham quan có thể thay đổi thứ tự phụ thuộc vào tình hình thời tiết và điều kiện giao thông tại Hàn Quốc\r\n- Lữ hành Saigontourist không chịu trách nhiệm về việc hoàn thuế tại sân bay của quý khách.\r\n- Trường hợp chỉ có  01 khách (người lớn) đi với 01 bé (dưới 12 tuổi), quý khách vui lòng đóng tiền tour cho Bé ngủ giường riêng.\r\n- Trong trường hợp đoàn gom dưới 15 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được đoàn. Xin chân thành cám ơn', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1 ( 27/4) : HANOI - SEOUL                                                                                                                 \r\n11h30: Xe và hướng dẫn viên đón quý khách tại văn phòng Saigontourist 55B Phan Chu Trinh và đưa đoàn lên sân bay Nội Bài, HDV làm thủ tục cho đoàn đáp chuyến bay OZ730 (14:30 - 20:40) đi Incheon. Nghỉ đêm trên máy bay.\r\n\r\nNGÀY 2 ( 28/4):  SEOUL - JEJU (Ăn sáng, trưa, tối)\r\nTham quan quan chụp hình bên ngoài Nhà Xanh - Phủ Tổng Thống nơi ở và làm việc chính thức của các đời Tổng Thống. Tham quan cung điện KyeongBok – cung điện Hoàng Gia đầu tiên được xây dựng ở triều đại Joseon và là cung điện đồ sộ nhất Hàn Quốc. Tiếp tục tham quan Bảo tàng Dân gian Quốc gia nơi lưu trữ và bảo tồn các di sản văn hóa của Hàn Quốc với hơn 10.000 mẫu vật phản ánh nghi lễ, tôn giáo, cách bài trí nhà cửa và các đồ vật trong gia đình Hàn Quốc. Ăn trưa. Đoàn ra sân bay đáp chuyến bay đến đảo Jeju - thiên đường nghỉ dưỡng nổi tiếng của Hàn Quốc. Đến nơi, xe đón đoàn đi tham quan Đá Đầu Rồng, khu phố Dapdong. Ăn tối. Nghỉ đêm tại khách sạn.\r\n\r\n\r\nNhà xanh - Phủ Tổng Thống\r\nNGÀY 3 ( 29/4): JEJU (Ăn sáng, trưa, tối)\r\nHành trình lên đỉnh Seongsan Sunrise Peak - nằm trên miệng núi lửa phun trào cách đây hàng nghìn năm, với bờ biển tuyệt đẹp bao quanh, ngắm cảnh bình minh trên đảo. Thăm làng văn hóa dân tộc Seongeup - nơi xưa kia Nàng Dae Jang Geum theo học nghề y, thưởng thức vị mật ong của người dân địa phương. Thưởng thức bữa trưa với món BBQ Hàn Quốc. Chiều, tham quan thác nước Cheonjiyeon - theo truyền thuyết là nơi các tiên nữ dạo chơi khi xuống trần. Thăm vách đá Jusan-Gjelli - nơi hàng nghìn cột đá xám đen xếp cạnh nhau một cách hoàn toàn ngẫu nhiên dọc theo bờ biển. Nhìn từ trên cao, vách đá này trông như một tổ ông khổng lồ với nhiều cột đá có hình dáng khác nhau, tham quan con đường ma quái, công viên Thiên đường Tình yêu – công viên tình yêu độc nhất vô nhị của đảo Jeju. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn trên đảo Jeju.\r\nVách đá Jusan-Gjelli \r\nNGÀY 4 ( 30/4): JEJU - SEOUL - LỄ HỘI HOA GOYANG (Ăn sáng, trưa, tối)\r\nĂn sáng tại khách sạn. Trả phòng. Đoàn ra sân bay đáp chuyến bay đi Seoul. Xe đón tại sân bay đưa đoàn đi ăn trưa tại nhà hàng. Chiều, đoàn đi tham quan lễ hội hoa Goyang - lễ hội hoa lớn nhất ở Hàn Quốc, thu hút hàng triệu lượt khách tham quan hàng năm. Lễ hội hoa này là một mô hình mẫu mực về việc tổ chức lễ hội văn hóa địa phương có sự tham gia trực tiếp của các nhà trồng hoa khắp thế giới. Trở về Seoul. Đoàn mua sắm tại trung tâm nhân sâm. Ăn tối. Nghỉ đêm tại Seoul.\r\nLễ hội hoa Goyang\r\nNGÀY 5 ( 01/5): SEOUL - EVERLAND (Ăn sáng, trưa, tối)\r\nĂn sáng. Xe và hướng dẫn viên đưa Quý khách tới công viên Everland - nằm trong top 10 công viên được yêu thích nhất thế giới với 5 khu chủ đề bao gồm “Chợ toàn cầu”, “Khu phiêu lưu mạo hiểm phong cách Mỹ”, “Vùng đất huyền thoại”, “Khu phiêu lưu mạo hiểm phong cách châu Âu” và “Vườn bách thú” sẽ đưa du khách khám phá lịch sử, văn hóa và lễ hội khắp năm châu. . Buổi chiều xe đưa đoàn đi tham quan và mua sắm tại cửa hàng mỹ phẩm, trung tâm nấm linh chi,  tự do khám phá chợ Dongdaemun. Ăn tối Nghỉ đêm tại khách sạn 3 sao tại Seoul.\r\nCông viên Everland\r\nNGÀY 6 ( 02/5) : SEOUL - HANOI (Ăn sáng, trưa)\r\nĂn sáng. Trả phòng. Đoàn tham quan bảo tàng rong biển Laver (seaweed) Museum - nơi gìn giữ và phát huy văn hóa ẩm thực truyền thống của Hàn Quốc, đồng thời giới thiệu đến du khách về các loại lá kim - một món ăn không thể thiếu của người Hàn Quốc. Trải nghiệm làm kimchi và mặc áo Hanbok truyền thống của Hàn Quốc. Tự do tham quan mua sắm tại cửa hàng tinh dầu thông đỏ, cửa hàng nông sản Hàn Quốc với vô số sản phẩm sâm tươi và nấm linh chi. Mua sắm tại cửa hàng miễn thuế. Sau bữa trưa, xe đưa quý khách ra sân bay Incheon Airport đáp chuyến bay OZ733 (19:30-22:25) trở về Việt Nam. Hạ cánh tại Nội Bài, xe đón đoàn về trung tâm thành phố. Chia tay và kết thúc chương trình.', '', ''),
(3, 10, '- Khám phá xứ sở mặt trời mọc mùa thu\r\n- Trải nghiệm tàu cao tốc Shinkansen\r\n- Trải nghiệm tắm Onsen Nhật Bản', 'GIÁ TOUR TRỌN GÓI ÁP DỤNG ĐOÀN 20 KHÁCH TRỞ LÊN\r\n(Đã bao gồm đầy đủ thuế và phí)\r\n(Giá tour có thể thay đổi vào thời điểm đặt tour - Áp dụng cho khách từ 12 tuổi đến 69 tuổi)\r\n\r\n* Vé trẻ em:\r\n- Trẻ em dưới 2 tuổi                               : 30% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n- Trẻ em từ 2 đến dưới 12 tuổi               : 85% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n                                                               :100% giá của người lớn (bé có giường riêng).\r\n- Trẻ em từ 12 tuổi trở lên                       100% giá như người lớn.\r\n\r\n* Giá tour bao gồm:\r\n- Vé máy bay khứ hồi Hanoi - Osaka // Tokyo - Hanoi.\r\n- Thuế và phụ phí hàng không.\r\n- Lệ phí Visa nhập cảnh vào Nhật Bản\r\n- 04 đêm khách sạn 3 sao (02 người/ phòng Twin).\r\n- Ăn, uống và vé vào cửa tham quan theo chương trình - Xe vận chuyển theo chương trình.\r\n- Hướng dẫn Lữ hành Saigontourist đi suốt tuyến Quà tặng của Lữ hành Saigontourist & VAT.\r\n\r\n* Giá tour không bao gồm:\r\n- Lệ phí làm hộ chiếu và visa nhập lại Việt Nam cho khách mang quốc tịch nước ngoài, phí chênh lệch visa Nhật  cho khách mang quốc tịch nước ngoài.\r\n- Nước uống (Bia, rượu mạnh… trong bữa ăn), điện thoại, giặt ủi, hành lý quá cước theo qui định của hàng không.\r\n- Tiền tip cho hướng dẫn viên và tài xế tại nước ngoài\r\n- Thuốc men, bệnh viện… chi phí cá nhân khác của khách ngoài chương trình.\r\n\r\nTHÔNG TIN HƯỚNG DẪN\r\n\r\n* Trường hợp hủy tour:  Quý khách vui lòng thanh toán các khoản lệ phí hủy tour như sau\r\n- Ngay sau khi đăng ký tour                                                                                          : chi trả 10% giá tour.\r\n- Trước ngày đi 30 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)                          : chi trả 20% giá tour.\r\n- Trước ngày đi từ 20 đến 29 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 30% giá tour.\r\n- Trước ngày đi từ 10 đến 19 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 50% giá tour.\r\n- Trước ngày đi từ 5 đến 9 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)              : chi trả 75% giá tour.\r\n- Trước ngày đi từ 2 đến 4 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)              : chi trả 90% giá tour.\r\n- Trước ngày đi 24 giờ (Không tính thứ Bảy & Chủ Nhật)                                            : chi trả 100% giá tour.\r\nVì bất cứ lý do nào mà ĐSQ Nhật Bản từ chối cấp visa, Quý khách vui lòng nộp lệ phí visa và dịch vụ là 2.150.000 vn đồng/khách.\r\n\r\n* Lưu ý:\r\n- Visa Nhật cần tối thiểu 14 ngày làm việc trước chuyến đi, quý khách vui lòng đăng ký tour trước chuyến đi 30 ngày và nộp hồ sơ xin visa trước chuyến đi là 3 tuần\r\n- Phụ phí hàng không có thể thay đổi phụ thuộc vào chính sách của Hàng không (sẽ có công văn thông báo). \r\n- Ngày khởi hành có thể thay đổi nếu số lượng khách đăng ký dưới 15 khách, Công ty sẽ xác nhận trước 12 ngày khởi hành tour.\r\n- Hộ chiếu (Passport) của quý khách phải còn thời hạn trên 6 tháng kể từ ngày về\r\n- Quý khách từ 70 tuổi trở lên vui lòng đóng thêm phí bảo hiểm cao cấp (phí thay đổi tùy theo tour).\r\n- Quý khách từ 75 tuổi trở lên yêu cầu phải có giấy xác nhận đầy đủ sức khỏe để đi du lịch nước ngoài của Bác sĩ và phải có người thân dưới 60 tuổi (đầy đủ sức khỏe) đi theo.\r\n- Chương trình có thể thay đổi tuỳ tình hình chuyến bay, khách sạn tại Nhật và được xác nhận chính thức vào ngày họp đoàn, trước ngày khởi hành 2 - 3 ngày. Các điểm tham quan có thể không theo thứ tự trong chương trình.\r\n- Sau khi đóng tiền, nếu quý khách hủy tour, vui lòng đem CMND & hóa đơn đã đóng tiền đến ngay văn phòng Cty (55B Phan Chu Trinh – Hà Nội) để làm thủ tục hủy tour. Công ty không nhận khách báo hủy qua điện thoại.\r\n- Lữ hành Saigontourist không nhận khách có thai từ 5 tháng trở lên tham gia các tour du lịch nước ngoài.\r\n- Trong trường hợp bất khả kháng do thời tiết, thiên tai, đình công, bạo động, phá hoại, chiến tranh, dịch bệnh, chuyến bay bị trì hoãn hay bị hủy do thời tiết hoặc do kỹ thuật, chính phủ trưng dụng…..dẫn đến tour không thể thực hiện tiếp tục được, Lữ hành Saigontourist sẽ hoàn trả lại tiền tour cho quý khách sau khi đã trừ lại các chi phí dịch vụ đã thực hiện như phí làm visa,… và không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác.\r\n- Trong trường hợp chỉ có  01 khách (người lớn) đi với 01 bé (dưới 12 tuổi), quý khách vui lòng đóng tiền tour cho Bé ngủ giường riêng.\r\n- Lưu ý: Hoa nở rất dễ bị ảnh hưởng bởi điều kiện thời tiết bên ngoài mà nở sớm hay muộn. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm. Trong trường hợp đoàn gom dưới 15 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được đoàn. Xin chân thành cám ơn', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1 : HÀ NỘI - OSAKA\r\n21h30: Đón Quý khách tại 55B Phan Chu Trinh, khởi hành đi sân bay Nội Bài, đáp chuyến bay VJ938 (01.20-07.40) đi Osaka. Nghỉ đêm trên máy bay.\r\n\r\nNGÀY 2 : NARA - OSAKA (Ăn trưa, tối)\r\nĐến sân bay, xe và hướng dẫn viên đón quý khách và đưa đi cố đô Nara. Tham quan Công viên Nara hay còn được gọi là Deer Park - ngoài cây xanh và hoa tươi muôn màu, công viên còn nổi tiếng vì có hơn 1.200 chú Nai sinh sống tự nhiên tại đây. Tham quan Đền Todaiji - là ngôi đền cổ kính và lâu đời nhất tại Nara với nhiều nét đẹp trong văn hóa của Nhật Bản. Chiều, Xe đưa đoàn đi tham quan và chụp ảnh lưu niệm ở Lâu đài Osaka (bên ngoài). Sau đó, đoàn tự do mua sắm tại khu Shinshabashi, Umeda shopping. Ăn tối tại nhà hàng và nghỉ đêm tại khách sạn.\r\nCông viên Nara\r\nNGÀY 3: OSAKA - KYOTO - NAGOYA (Ăn sáng, trưa, tối)\r\nĂn sáng tại khách sạn, đoàn khởi hành đi tham quan cố đô Kyoto (thành phố lớn thứ 7 của Nhật Bản) - được mệnh danh là cố đô nghìn năm, nơi còn lưu giữ rất nhiều di tích lịch sử đền đài tạo nên bộ mặt vừa hiện đại vừa truyền thống của đất nước Nhật Bản. Chương trình tham quan đầu tiên là đền thờ Kiyomizu - di sản văn hóa thế giới với phong cảnh lãng mạn. Tiếp tục tham quan Chùa Vàng (Golden pavilion). Xe đưa quý khách đi Nagoya. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.\r\nCố đô Tokyo\r\nNGÀY 4 : NAGOYA - NÚI PHÚ SỸ (Ăn sáng, trưa, tối)\r\nSau bữa sáng tại khách sạn. Đoàn lên tàu cao tốc Shinkansen, trải nghiệm hành trình từ Hamamatsu đi Toyohashi. Quý khách bắt đầu hành trình đi tham quan với núi Phú Sỹ - biểu tượng của đất nước mặt trời mọc (nếu thời tiết cho phép, đoàn sẽ tới điểm dừng số 5 tham quan). Quý khách tham quan khu Làng cổ Oshino Hakkai, là ngôi làng nằm yên bình dưới chân Núi Phú Sỹ. Từ đây nếu thời tiết đẹp du khách sẽ có thể ngắm nhìn toàn cảnh đỉnh núi Phú Sỹ trong tuyết trắng vô cùng quyến rũ. Tự do mua sắm tại Gotemba Outlet (nếu thời gian cho phép). Ăn tối tại nhà hàng, thư giãn Osen kiểu Nhật Bản tại khách sạn.\r\nTắm Onsen tại Nhật Bản\r\nNGÀY 5 : NÚI PHÚ SỸ - TOKYO (Ăn sáng, trưa, tối)\r\nSau bữa sáng tại khách sạn. Xe đưa Quý khách đi thủ đô Tokyo. Thăm quan chùa Quan Âm Asakusa - một trong những công trình cổ nhất và nổi tiếng tại Tokyo. Chụp hình với tháp Tokyo Skytree cao 634m là tháp truyền hình cao nhất thế giới hiện nay (không lên tháp). Tham quan, chụp hình bên ngoài Hoàng Cung Nhật Bản. Đoàn tự do mua sắm tại các khu phố thương mại nổi tiếng ở Tokyo như khu chợ điện tử Akihabara hoặc khu Ginza. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.\r\nTokyo Skytree\r\nNGÀY 6 : TOKYO - HÀ NỘI (Ăn sáng)\r\nSau bữa sáng, quý khách làm thủ tục trả phòng khách sạn, xe đưa đoàn ra sân bay đáp chuyến bay VJ933 (09.30-14.15) về Hà Nội. Máy bay hạ cánh tại sân bay quốc tế Nội Bài. Xe đưa đoàn về điểm hẹn ban đầu. Chia tay và hẹn gặp lại quý khách.', '', ''),
(4, 11, '- Du lịch Phú Quốc Quý khách thỏa sức vẫy vùng trong làn nước xanh trong vắt, cùng dạo bước trên những bãi cát mịn màng lưu lại dấu chân. \r\n- Thưởng thức hải sản tươi sống do thiên nhiên ban tặng như tôm, ghẹ, mực trứng, còi biên mai và đặc biệt là đặc sản gỏi cá trích béo béo vị dừa, thơm thơm đậu phộng ăn cùng vị chát của rau rừng làm say mê bao nhiêu du khách.', 'Khởi hành thứ 3- thứ 4 & thứ 6 hàng tuần hàng tuần, tối thiểu 2 khách (bảng giá không áp dụng giai đoạn lễ tết)\r\n\r\n* Phụ thu:\r\n- Phụ thu 300.000đ/khách khi yêu cầu HDV tiếng Anh\r\n- Phụ thu khách ở khu Novotel, Ông Lang, Gành Gió: 300.000đ/khách/tour 3n2đ \r\n\r\n* Chính sách trẻ em trọn gói:\r\n- Từ 10 tuổi trở lên tính bằng giá người lớn\r\n- Từ 5 đến dưới 10 tuổi : áp dụng theo bảng giá trẻ em tính 75% giá tour\r\n- Dưới 5 tuổi: miễn phí ( Bố Mẹ tự túc chi phí ăn uống + vui chơi cho trẻ )\r\n***Ghi chú: 2 người lớn được kèm 1 trẻ em dưới 10 tuổi; trẻ em thứ 2 dưới 5 tuổi mua vé trẻ em,  trẻ thứ 2 từ 5 - dưới 10 tuổi mua vé người lớn.Tiêu chuẩn KS ở Phú Quốc là tiêu chuẩn tự phong, không phải tiêu chuẩn của Bộ VH TT và DL\r\n\r\n* Giá tour trọn gói bao gồm:                           \r\n- Đón tiễn: sân bay tại Phú Quốc (xe và HDV đón khách hoặc chỉ có xe đón tùy theo giờ bay)\r\n- Khách sạn: 2 đêm phòng KS (2 khách/phòng, lẻ khách ở phòng 3)  \r\n- Ăn uống: 2 bữa sáng bao gồm trong giá phòng, 3 bữa chính (150,000Đ-160,000Đ/suất), ăn chung đoàn. \r\n- Vận chuyển: xe đời mới, chất lượng tốt đưa khách tham quan theo chương trình. Tàu câu cá lớn, hiện đại, trang bị đầy đủ thiết bị an toàn, ống câu, kính lặn, ống thở, chân vịt cho khách lặn ngắm san hô\r\n- HDV chuyên nghiệp và chu đáo chăm sóc đoàn suốt tuyến\r\n- Chi phí khác: vé vào cổng (trừ Vinwonders), phí bến bãi, nước suối 1 suất/buổi tour, Bảo hiểm du lịch nội địa (mức bồi thường tối đa 30.000.000đ/vụ)\r\n\r\n* Giá tour chưa bao gồm:\r\n- Thuế VAT.\r\n- Vé cổng Sunset Sanato 100.000đ/khách .\r\n- Bữa ăn tối ngày 2 và bữa ăn trưa ngày 3.\r\n- Phụ thu phòng đơn\r\n- Chi phí đi Vinpearl Land, chi phí tắm nước ngọt và ghế nằm/võng ở bãi biển bãi Sao, ăn uống ngoài chương trình, chi phí cá nhân và chi phí phát sinh do hàng không hủy/hoãn chuyến. Trường hợp giờ bay thay đổi: vui lòng thông báo trước để tránh bị phụ thu xe đón tiễn sân bay \r\n- Giá trên không trừ hoa hồng, không bao gồm đón tiễn bến tàu + vé tàu cao tốc (nếu đến PQ bằng tàu), vé máy bay, chi phí ăn uống phát sinh cho trẻ em dưới 5 tuổi, chi phí cá nhân, tour câu mực đêm, các bữa ăn ngoài chương trình, chi phí phát sinh do phương tiện vận chuyển hủy/hoãn chuyến, chi phí nâng hạng phòng (lên loại cao hơn)\r\n\r\n* Quy định khác: Giờ nhận phòng từ 12g – 14g, giờ trả phòng trước 12g, tuy nhiên Quý khách có thể được ưu tiên nhận phòng sớm nếu Khách sạn có phòng trống', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1 : PHÚ QUỐC - ĐÔNG ĐẢO (Ăn: Trưa,Tối)\r\n- Sáng:  quý khách tự túc làm thủ tục tại sân bay Cát Bi, làm thủ tục đón chuyến bay vào Phú Quốc. Xe đón du khách tại sân bay Phú Quốc, đưa đoàn về khách sạn gửi hành lý, tự do nghỉ ngơi\r\n- Trưa: 11g30: đưa đoàn đi ăn trưa với đặc sản Phú Quốc tại nhà hàng. \r\n- Chiều: Khởi hành tham quan phía Đông đảo:\r\nVườn tiêu với những nọc tiêu thẳng tắp, xanh mơn mỡn, nổi tiếng chắc hạt, thơm ngon\r\nCơ sở ủ rượu vang Sim – một loại rượu đặc sản tại địa phương, thưởng thức rượu Sim rừng miễn phí\r\nChùa Sư Muôn hay còn gọi là Hùng Long Tự, dâng hương, cầu an cho người thân\r\nTham quan trại nuôi ong mật, tìm hiểu cuộc sống cần cù của những chú ong bé nhỏ và học cách lấy mật ong (quay mật) của người dân.\r\nSuối Tranh – dòng suối đẹp bắt nguồn từ dãy Hàm Ninh.\r\n- Tối: Ăn tối tại nhà hàng địa phương. Về khách sạn nghỉ ngơi. Tự do dạo bãi biển, thưởng thức không khí yên tĩnh tuyệt vời của huyện đảo hoặc đăng ký tour câu mực đêm (Chi phí tự túc: 350.000đ/khách)\r\n\r\nVườn tiêu\r\nNGÀY 2: BÃI SAO - CÂU CÁ NGẮM SAN HÔ (Ăn:Sáng, Trưa)\r\n- Sáng: Dùng điểm tâm sáng tại Khách sạn.\r\n08g00: Xe đưa du khách tham quan:Cơ sở nuôi cấy ngọc trai  tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai. Đến khu vực Bãi Sao/ An Thới (tùy theo thời tiết), lên tàu du lịch đến Hòn Dâm, Hòn Dừa, Hòn Rõi…neo tàu, câu cá theo cách truyền thống của ngư dân Phú Quốc. Tàu được trang bị đầy đủ áo phao, kính lặn, ống thở, chân vịt…để Quý khách có thể chiêm ngưỡng hệ động vật phong phú, rực rỡ sắc màu dưới đáy biển\r\n- Trưa: Ăn trưa trên tàu\r\n- Chiều: 14h30: Tàu cập bến, xe đưa Quý khách tiếp tục tham quan Nam đảo\r\nDi tích lịch sử nhà tù Phú Quốc – xem film tư liệu, cảm nhận nỗi đau của các chiến sĩ yêu nước và sống với niềm tự hào dân tộc\r\nCơ sở nước mắm Phú Quốc với cách ủ truyền thống có lịch sử hơn 200 năm phát triển tại Phú Quốc\r\nĐến Bãi Sao - bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi \r\nĐoàn tham quan, ngắm hoàng hôn và check-in tại Sunset Sanato-nơi đây có một bãi biển dài xanh ngát, những khu vui chơi, thể thao, quầy bar cực xinh… và những ngóc ngách sống ảo không đụng hàng như: mô hình chú cá, voi, sứa được cắm thẳng lên bãi biển, vô cùng công phu và đặc biệt là Cổng Trời bí mật tại đây. Có thể nói mọi ngóc ngách ở đây đều là background cho đoàn tha hồ chụp choẹt (vé cổng tự túc: 100.000đ/khách )\r\nXe đưa Quý khách về khách sạn, tự do nghỉ ngơi\r\n- Tối: Quý khách tự túc dùng bữa tối\r\nBãi Sao\r\nNgày 3: PHÚ QUỐC - HẢI PHÒNG (Ăn: Sáng)\r\n- Sáng: Quý khách dùng điểm tâm, tự do tắm biển, làm thủ tục trả phòng.\r\nXe đưa Quý khách đến sân bay Phú Quốc, làm thủ tục lên máy bay, kết thúc chương trình. Tạm biệt và hẹn gặp lại Quý khách.\r\n- Chương trình có thể thay đổi nhưng vẫn đảm bảo đủ điểm tham quan', '', '');
INSERT INTO `ct_tour` (`CT_Tour_id`, `Tour_Id`, `Tour_Highlight`, `Content_CS`, `Content_CT`, `CT_Tour_Img`, `CT_Tour_PDF`) VALUES
(5, 12, '- Check-in và chụp hình siêu đẹp tại Quê Garden - tọa độ sống ảo thần thái, một khu vườn với lối kiến trúc đậm chất Nhật Bản nằm giữa cao nguyên Lâm viên mộng mơ. <br>\r\n- Khám phá Khu Du lịch Kim Ngân Hills- một địa điểm mới và cực chất hiện nay tại Đà Lạt, một ngôi làng theo phong cách châu Âu nằm ngay trong lòng thành phố cùng thế giới thú cưng dễ thương. <br>\r\n- Tham quan Nông trại Cún- Puppy Farm với hơn 100 cá thể thuộc 36 loài cún đáng yêu. <br>\r\n- Chiêm ngưỡng Nhà thờ Domaine de Marie với kiến trúc pha trộn giữa phong cách kiến trúc Pháp cuối thế kỷ 17 và hệ thống mái nhà rông truyền thống của dân tộc Tây Nguyên. <br>\r\n- Dừng chân tại Khu Du lịch Thúy Thuận đầy cuốn hút giữa đất trời Đà Lạt với không gian thơ mộng vốn có, cùng những công trình ấn tượng với vô số góc chụp lung linh, ảo diệu. <br>\r\n- Chiêm bái Linh Ẩn Tự, nổi tiếng với tượng Phật Quán Thế Âm lộ thiên cao nhất Việt Nam.</p>', '<p class=\"day1\">\r\n                    <strong>* Giá tour bao gồm: </strong> <br>\r\n                    - Chi phí xe máy lạnh phục vụ theo chương trình. <br>\r\n                    - Chi phí ăn theo chương trình (3 bữa sáng, 3 bữa trưa & 1 bữa tối) <br>\r\n                    - Chi phí khách sạn 3* tiêu chuẩn 2 khách/phòng, lẻ khác ngủ giường phụ hoặc chịu chi phí phụ thu\r\n                    phòng đơn:\r\n                    + 550.000 đ/ khách <br>\r\n                    - Chi phí tham quan, hướng dẫn viên tiếng Việt. <br>\r\n                    - Quà tặng: Nón, nước suối, khăn lạnh. <br> <br>\r\n\r\n                    <strong>* Giá tour không bao gồm: </strong> <br>\r\n                    - Ăn uống ngoài chương trình, giặt ủi, điện thoại và các chi phí cá nhân.<br>\r\n                    - Chi phí phụ thu phòng đơn: + 550.000 đ/ khách.<br> <br>\r\n\r\n                    <strong>THÔNG TIN HƯỚNG DẪN</strong><br>\r\n                    <strong>* Vé trẻ em: </strong> <br>\r\n                    - Vé tour: Trẻ em từ 6 đến 11 tuổi mua một nửa giá vé người lớn, trẻ em trên 11 tuổi mua vé như\r\n                    người lớn.<br>\r\n                    - Đối với trẻ em dưới 6 tuổi, gia đình tự lo cho bé ăn ngủ và tự trả phí tham quan (nếu có).\r\n                    Hai người lớn chỉ được kèm một trẻ em. Từ trẻ thứ 2 trở lên, mỗi em phải trả 50% giá vé tour người\r\n                    lớn.<br>\r\n                    - Tiêu chuẩn 50% giá tour bao gồm: Suất ăn, ghế ngồi và ngủ ghép chung với gia đình.<br>\r\n                    <strong>* Hành lý và giấy tờ tùy thân: </strong> <br>\r\n                    - Du khách mang theo giấy Chứng Minh Nhân Dân hoặc Hộ chiếu. Đối với du khách là Việt kiều,\r\n                    Quốc tế nhập cảnh Việt Nam bằng visa rời, vui lòng mang theo visa khi đăng ký và đi tour.<br>\r\n                    - Khách lớn tuổi (từ 70 tuổi trở lên), khách tàn tật tham gia tour, phải có thân nhân đi kèm và\r\n                    cam kết đảm bảo đủ sức khỏe khi tham gia tour du lịch.<br>\r\n                    - Trẻ em dưới 14 tuổi khi đi tour phải mang theo Giấy khai sinh hoặc Hộ chiếu.\r\n                    Trẻ em từ 14 tuổi trở lên phải mang theo giấy Chứng Minh Nhân Dân hoặc Hộ chiếu riêng<br>\r\n                    - Tất cả giấy tờ tùy thân mang theo đều phải bản chính<br>\r\n                    - Du khách mang theo hành lý gọn nhẹ và phải tự bảo quản hành lý, tiền bạc,\r\n                    tư trang trong suốt thời gian đi du lịch.<br>\r\n                    - Khách Việt Nam ở cùng phòng với khách Quốc tế hoặc Việt kiều yêu cầu phải có giấy hôn thú.<br>\r\n                    <br>\r\n\r\n                    <strong>* Đây là chương trình Siêu khuyến mãi vì thế hủy vé tour,\r\n                        quý khách vui lòng thanh toán các khoản sau:</strong> <br>\r\n                    - Hủy vé trong vòng 24- 72 giờ hoặc ngay ngày khởi hành, chịu phạt 100% tiền tour.<br>\r\n                    - Hủy vé trước ngày khởi hành từ 4- 15 ngày, chịu phạt 70% tiền tour.<br>\r\n                    - Hủy vé trước ngày khởi hành từ 15- 20 ngày, chịu phạt 50% tiền tour.<br>\r\n                    - Hủy vé trước ngày khởi hành 20 ngày, chịu phạt 40% tiền tour.<br>\r\n                    - Hủy vé ngay sau khi đăt tour, chịu phạt 30% giá tour.<br> <br>\r\n\r\n                    - Sau khi hủy tour, du khách vui lòng đến nhận tiền trong vòng 15 ngày kể từ ngày kết thúc tour.\r\n                    Chúng tôi chỉ thanh toán trong khỏang thời gian nói trên.<br>\r\n                    - Trường hợp hủy tour do sự cố khách quan như thiên tai, dịch bệnh hoặc do tàu thủy, xe lửa,\r\n                    máy bay hoãn/hủy chuyến, Lữ hành Saigontourist sẽ không chịu trách nhiệm bồi thường thêm bất kỳ chi\r\n                    phí\r\n                    nào khác ngoài việc hoàn trả chi phí những dịch vụ chưa được sử dụng của tour đó. <br> <br>\r\n\r\n                    <strong>* Ghi chú khác:</strong><br>\r\n                    - Công ty xuất hóa đơn cho du khách có nhu cầu (Trong thời hạn 7 ngày sau khi kết thúc chương trình\r\n                    du lịch).<br>\r\n                    - Du khách có mặt tại điểm đón trước 15 phút.\r\n                    Du khách đến trễ khi xe đã khởi hành hoặc hủy tour không báo trước vui lòng chịu phí như ‘hủy vé\r\n                    ngay ngày khởi hành\'.<br>\r\n                </p>', '<p class=\"day1--title\"><strong>Liên hệ tư vấn: Anh Kim Soo Huyn - 0908 251 152 // Chị La Lisa - 0988\r\n                        356996</strong></p>\r\n                <p class=\"day1\">\r\n                    <strong>NGÀY 1 : TP. HỒ CHÍ MINH – ĐÀ LẠT (Ăn sáng, trưa, tối)</strong> <br>\r\n                    05h45: Quý khách tập trung tại văn phòng Lữ hành Saigontourist (102 Nguyễn Huệ, Quận 1, TP. Hồ Chí\r\n                    Minh),\r\n                    xe đưa đoàn khởi hành đi Đà Lạt. <br>\r\n                    07h00: Quý khách dùng điểm tâm sáng tại Long Khánh, sau đó tiếp tục hành trình theo cung đường Quốc\r\n                    lộ 20\r\n                    đến với Bảo Lộc - vùng đất trù phú trên cao nguyên Di Linh, là thủ phủ của trà B’Lao và tơ lụa nổi\r\n                    tiếng. <br>\r\n                    11h30: Quý khách dùng cơm trưa tại thành phố Bảo Lộc. <br>\r\n                    12h30: Tiếp tục hành trình đến với Xứ sở ngàn hoa. <br>\r\n                    15h00: Đoàn tham quan Quê Garden, tọa lạc trên vùng đồi thơ mộng trên cung đường đèo Mimosa xinh\r\n                    đẹp,\r\n                    được thiết kế tỉ mỉ theo phong cách Nhật Bản trong một không gian thoáng đãng vô cùng lãng mạn.\r\n                    Quê Garden được mệnh danh là khu vườn bonsai lá kim lớn nhất Việt Nam,\r\n                    những chậu bonsai đủ mọi kích thước được uốn nắn nghệ thuật thật đẹp mắt, kết hợp cùng nhiều loài\r\n                    hoa đặc trưng\r\n                    rực rỡ sắc màu của Đà Lạt. Ngoài ra, hồ cá Koi ở vị trí trung tâm khu vườn kết hợp với các tiểu cảnh\r\n                    non bộ\r\n                    tạo nên một không gian “sống ảo” đậm chất xứ sở mặt trời mọc. <br>\r\n                    16h30: Xe đưa quý khách về trung tâm thành phố Đà Lạt, nhận phòng tại khách sạn và nghỉ ngơi. <br>\r\n                    18h00: Quý khách dùng cơm tối tại nhà hàng địa phương. Sau đó chương trình tự do.\r\n                    Nghỉ đêm tại Đà Lạt.\r\n                </p>\r\n                <div class=\"img__center\">\r\n                    <img src=\"quegarden.jpg\" alt=\"Que Garden\">\r\n                    <p class=\"description\">\r\n                        <strong>Quê Garden</strong>\r\n                    </p>\r\n                </div>\r\n                <p class=\"Day2\">\r\n                    <strong>NGÀY 2: ĐÀ LẠT (Ăn sáng, trưa; tự túc ăn tối)</strong> <br>\r\n                    07h00: Quý khách ăn sáng tại khách sạn, <br>\r\n                    08h00: Đoàn khởi hành đi tham quan Quảng trường Lâm Viên, một công trình nổi bật với không gian rộng\r\n                    lớn hướng ra\r\n                    hồ Xuân Hương dịu mát, cùng tuyệt tác kiến trúc khối hoa Dã quỳ và khối nụ hoa Atiso khổng lồ bằng\r\n                    kính màu lung linh\r\n                    đẹp mắt. <br>\r\n                    08h45: Đoàn tham quan Nhà Ga Xe lửa Đà Lạt, một trong hai di tích cấp quốc gia được chính phủ công\r\n                    nhận tại Đà Lạt.\r\n                    Đây là Nhà Ga Xe lửa tọa lạc tại độ cao hơn 1500m so với mực nước biển và là một trong những nhà Ga\r\n                    cổ kính nhất\r\n                    Đông Dương. <br>\r\n                    09h30: Quý khách tham quan Khu du lịch Kim Ngân Hills, ngôi làng được xây dựng theo phong cách kiến\r\n                    trúc Châu Âu,\r\n                    thiết kế phù hợp với cảnh quan và môi trường sinh thái Đà Lạt. Đến với Kim Ngân Hills quý khách\r\n                    không chỉ được\r\n                    tận hưởng cảnh quan thiên nhiên thơ mộng của một \"Châu Âu\" thu nhỏ mà còn được gặp gỡ nhiều loại thú\r\n                    cưng thân thiện\r\n                    đến từ nhiều nơi trên thế giới như: chó Corgi (Anh), cừu Valais (Thụy Sĩ), lạc đà Alpaca (Nam Mỹ),\r\n                    ngựa lùn,\r\n                    công, thỏ, dê, … Ngoài ra, nơi đây còn sở hữu vườn chim Avira lớn nhất tỉnh Lâm Đồng với hơn 50 loài\r\n                    chim bản địa và\r\n                    vùng miền khác. <br>\r\n                    11h30: Quý khách dùng cơm trưa tại nhà hàng địa phương.<br>\r\n                    13h00: Quý khách tham quan Nông trại Cún – Puppy Farm với hơn 100 cá thể thuộc 36 loài cún đáng yêu\r\n                    và\r\n                    trải nghiệm 3 khu tham quan: đồi hoa khổng lồ gồm nhiều loài hoa như lavender, cánh bướm, nữ hoàng\r\n                    xanh, thạch thảo,\r\n                    cúc họa mi…; vườn sen đá, xương rồng nghệ thuật và vườn nông sản công nghệ cao xanh mát. <br>\r\n                    15h30: Quý khách tiếp tục tham quan Nhà thờ Domaine de Marie, tọa lạc trên ngọn đồi Mai Anh lộng\r\n                    gió.\r\n                    Nhà thờ màu hồng được thiết kế xây dựng theo lối kiến trúc Châu Âu cuối thế kỷ XVII\r\n                    pha trộn một số nét kiến trúc dân gian của vùng đất cao nguyên tạo nên một công trình kiến trúc nghệ\r\n                    thuật thật độc đáo,\r\n                    khác lạ.<br>\r\n                    16h30: Trở về khách sạn nghỉ ngơi và chương trình tự do (Ăn tối tự túc). Quý khách có thể tự do dạo\r\n                    phố, thưởng thức ẩm thực nổi tiếng Đà Lạt: Lẩu gà lá é Tao Ngộ, Lẩu bò quán Gỗ, Bánh ướt lòng gà,\r\n                    Bánh tráng nướng, Sữa đậu nành, Kem bơ, … và khám phá Đà Lạt về đêm theo cách của riêng mình.\r\n                    Nghỉ đêm tại Đà Lạt.\r\n                </p>\r\n                <div class=\"img__center\">\r\n                    <img src=\"nongtraicun.jpg\" alt=\"Nong trai cun\">\r\n                    <p class=\"description\">\r\n                        <strong>Nông trại cún</strong>\r\n                    </p>\r\n                </div>\r\n                <p class=\"day3\">\r\n                    <strong>Ngày 3: ĐÀ LẠT – TP. HỒ CHÍ MINH (Ăn sáng, trưa)</strong> <br>\r\n                    07h00: Quý khách ăn sáng tại khách sạn, <br>\r\n                    08h00: Đoàn khởi hành về TP. Hồ Chí Minh theo hướng Tà Nung. <br>\r\n                    08h30: Quý khách dừng chân tại Khu Du lịch Thúy Thuận đầy cuốn hút giữa đất trời Đà Lạt với không\r\n                    gian thơ mộng\r\n                    vốn có cùng những công trình ấn tượng với vô số góc chụp lung linh, ảo diệu. Quý khách có thể thưởng\r\n                    thức những thức\r\n                    uống hấp dẫn tại đây (chi phí tự túc) <br>\r\n                    09h45: Tiếp tục hành trình đến thị trấn Nam Ban, viếng Linh Ẩn Tự - ngôi chùa tọa lạc yên bình\r\n                    trên ngọn đồi cao,\r\n                    phía sau được bao bọc bởi cánh rừng thông xanh bát ngát, phía trước là thác Voi ngày đêm\r\n                    tuôn chảy tạo nên một vị thế\r\n                    đắc địa “tọa sơn ngoạ thủy”. Quý khách chiêm bái tượng Phật Bà Quan Âm lộ thiên cao nhất Việt\r\n                    Nam và tượng Phật Di Lặc\r\n                    lớn nhất tỉnh Lâm Đồng. <br>\r\n                    11h45: Quý khách dùng cơm trưa tại Bảo Lộc. <br>\r\n                    12h45: Khởi hành về TP. Hồ Chí Minh. <br>\r\n                    18h00: Về tới TP. Hồ Chí Minh, đưa quý khách về văn phòng Lữ hành Saigontourist. Kết thúc chương\r\n                    trình. <br> <br>\r\n                    * Ghi chú:<br>\r\n                    - Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung của từng chương\r\n                    trình.<br>\r\n                    - Đây là tour khách lẻ ghép đoàn, mỗi đợt khởi hành phải có tối thiểu 25 người đăng ký. Trong trường\r\n                    hợp không\r\n                    đủ số lượng khách đăng ký, chúng tôi xin phép dời quý khách sang đợt khởi hành tiếp theo.\r\n                </p>', '{\"banner\" : \"DuLichTrongNuoc__CHiTiet/DalatBanner.jpg\",\"gallery\" : [\"DuLichTrongNuoc__CHiTiet/dalat1.jpg\", \"DuLichTrongNuoc__CHiTiet/dalat2.jpg\", \"DuLichTrongNuoc__CHiTiet/dalat3.jpg\", \"DuLichTrongNuoc__CHiTiet/dalat4.jpg\", \"DuLichTrongNuoc__CHiTiet/dalat5.jpg\", \"DuLichTrongNuoc__CHiTiet/dalat6.jpg\"],\"img_content\" : [\"quegarden.jpg\", \"nongtraicun.jpg\"]}', '<div class=\"wapper__content--content\">\r\n        <img src=\"logo_UITour.png\" alt=\"logo pdf\">\r\n        <h1>DU LỊCH ĐÀ LẠT - THUNG THĂNG PHỐ NÚI</h1>\r\n        <p class=\"day1--title\"><strong>Liên hệ tư vấn: Anh Kim Soo Huyn - 0908 251 152 // Chị La Lisa - 0988\r\n                356996</strong></p>\r\n        <p class=\"day1\">\r\n            <strong>NGÀY 1 : TP. HỒ CHÍ MINH – ĐÀ LẠT (Ăn sáng, trưa, tối)</strong> <br>\r\n            05h45: Quý khách tập trung tại văn phòng Lữ hành Saigontourist (102 Nguyễn Huệ, Quận 1, TP. Hồ Chí\r\n            Minh),\r\n            xe đưa đoàn khởi hành đi Đà Lạt. <br>\r\n            07h00: Quý khách dùng điểm tâm sáng tại Long Khánh, sau đó tiếp tục hành trình theo cung đường Quốc\r\n            lộ 20\r\n            đến với Bảo Lộc - vùng đất trù phú trên cao nguyên Di Linh, là thủ phủ của trà B’Lao và tơ lụa nổi\r\n            tiếng. <br>\r\n            11h30: Quý khách dùng cơm trưa tại thành phố Bảo Lộc. <br>\r\n            12h30: Tiếp tục hành trình đến với Xứ sở ngàn hoa. <br>\r\n            15h00: Đoàn tham quan Quê Garden, tọa lạc trên vùng đồi thơ mộng trên cung đường đèo Mimosa xinh\r\n            đẹp,\r\n            được thiết kế tỉ mỉ theo phong cách Nhật Bản trong một không gian thoáng đãng vô cùng lãng mạn.\r\n            Quê Garden được mệnh danh là khu vườn bonsai lá kim lớn nhất Việt Nam,\r\n            những chậu bonsai đủ mọi kích thước được uốn nắn nghệ thuật thật đẹp mắt, kết hợp cùng nhiều loài\r\n            hoa đặc trưng\r\n            rực rỡ sắc màu của Đà Lạt. Ngoài ra, hồ cá Koi ở vị trí trung tâm khu vườn kết hợp với các tiểu cảnh\r\n            non bộ\r\n            tạo nên một không gian “sống ảo” đậm chất xứ sở mặt trời mọc. <br>\r\n            16h30: Xe đưa quý khách về trung tâm thành phố Đà Lạt, nhận phòng tại khách sạn và nghỉ ngơi. <br>\r\n            18h00: Quý khách dùng cơm tối tại nhà hàng địa phương. Sau đó chương trình tự do.\r\n            Nghỉ đêm tại Đà Lạt.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"quegarden.jpg\" alt=\"Que Garden\">\r\n            <p class=\"description\">\r\n                <strong>Quê Garden</strong>\r\n            </p>\r\n        </div>\r\n        <p class=\"Day2\">\r\n            <strong>NGÀY 2: ĐÀ LẠT (Ăn sáng, trưa; tự túc ăn tối)</strong> <br>\r\n            07h00: Quý khách ăn sáng tại khách sạn, <br>\r\n            08h00: Đoàn khởi hành đi tham quan Quảng trường Lâm Viên, một công trình nổi bật với không gian rộng\r\n            lớn hướng ra\r\n            hồ Xuân Hương dịu mát, cùng tuyệt tác kiến trúc khối hoa Dã quỳ và khối nụ hoa Atiso khổng lồ bằng\r\n            kính màu lung linh\r\n            đẹp mắt. <br>\r\n            08h45: Đoàn tham quan Nhà Ga Xe lửa Đà Lạt, một trong hai di tích cấp quốc gia được chính phủ công\r\n            nhận tại Đà Lạt.\r\n            Đây là Nhà Ga Xe lửa tọa lạc tại độ cao hơn 1500m so với mực nước biển và là một trong những nhà Ga\r\n            cổ kính nhất\r\n            Đông Dương. <br>\r\n            09h30: Quý khách tham quan Khu du lịch Kim Ngân Hills, ngôi làng được xây dựng theo phong cách kiến\r\n            trúc Châu Âu,\r\n            thiết kế phù hợp với cảnh quan và môi trường sinh thái Đà Lạt. Đến với Kim Ngân Hills quý khách\r\n            không chỉ được\r\n            tận hưởng cảnh quan thiên nhiên thơ mộng của một \"Châu Âu\" thu nhỏ mà còn được gặp gỡ nhiều loại thú\r\n            cưng thân thiện\r\n            đến từ nhiều nơi trên thế giới như: chó Corgi (Anh), cừu Valais (Thụy Sĩ), lạc đà Alpaca (Nam Mỹ),\r\n            ngựa lùn,\r\n            công, thỏ, dê, … Ngoài ra, nơi đây còn sở hữu vườn chim Avira lớn nhất tỉnh Lâm Đồng với hơn 50 loài\r\n            chim bản địa và\r\n            vùng miền khác. <br>\r\n            11h30: Quý khách dùng cơm trưa tại nhà hàng địa phương.<br>\r\n            13h00: Quý khách tham quan Nông trại Cún – Puppy Farm với hơn 100 cá thể thuộc 36 loài cún đáng yêu\r\n            và\r\n            trải nghiệm 3 khu tham quan: đồi hoa khổng lồ gồm nhiều loài hoa như lavender, cánh bướm, nữ hoàng\r\n            xanh, thạch thảo,\r\n            cúc họa mi…; vườn sen đá, xương rồng nghệ thuật và vườn nông sản công nghệ cao xanh mát. <br>\r\n            15h30: Quý khách tiếp tục tham quan Nhà thờ Domaine de Marie, tọa lạc trên ngọn đồi Mai Anh lộng\r\n            gió.\r\n            Nhà thờ màu hồng được thiết kế xây dựng theo lối kiến trúc Châu Âu cuối thế kỷ XVII\r\n            pha trộn một số nét kiến trúc dân gian của vùng đất cao nguyên tạo nên một công trình kiến trúc nghệ\r\n            thuật thật độc đáo,\r\n            khác lạ.<br>\r\n            16h30: Trở về khách sạn nghỉ ngơi và chương trình tự do (Ăn tối tự túc). Quý khách có thể tự do dạo\r\n            phố, thưởng thức ẩm thực nổi tiếng Đà Lạt: Lẩu gà lá é Tao Ngộ, Lẩu bò quán Gỗ, Bánh ướt lòng gà,\r\n            Bánh tráng nướng, Sữa đậu nành, Kem bơ, … và khám phá Đà Lạt về đêm theo cách của riêng mình.\r\n            Nghỉ đêm tại Đà Lạt.\r\n        </p>\r\n        <div class=\"img__center\">\r\n            <img src=\"nongtraicun.jpg\" alt=\"Nong trai cun\">\r\n            <p class=\"description\">\r\n                <strong>Nông trại cún</strong>\r\n            </p>\r\n        </div>\r\n        <p class=\"day3\">\r\n            <strong>Ngày 3: ĐÀ LẠT – TP. HỒ CHÍ MINH (Ăn sáng, trưa)</strong> <br>\r\n            07h00: Quý khách ăn sáng tại khách sạn, <br>\r\n            08h00: Đoàn khởi hành về TP. Hồ Chí Minh theo hướng Tà Nung. <br>\r\n            08h30: Quý khách dừng chân tại Khu Du lịch Thúy Thuận đầy cuốn hút giữa đất trời Đà Lạt với không\r\n            gian thơ mộng\r\n            vốn có cùng những công trình ấn tượng với vô số góc chụp lung linh, ảo diệu. Quý khách có thể thưởng\r\n            thức những thức\r\n            uống hấp dẫn tại đây (chi phí tự túc) <br>\r\n            09h45: Tiếp tục hành trình đến thị trấn Nam Ban, viếng Linh Ẩn Tự - ngôi chùa tọa lạc yên bình\r\n            trên ngọn đồi cao,\r\n            phía sau được bao bọc bởi cánh rừng thông xanh bát ngát, phía trước là thác Voi ngày đêm\r\n            tuôn chảy tạo nên một vị thế\r\n            đắc địa “tọa sơn ngoạ thủy”. Quý khách chiêm bái tượng Phật Bà Quan Âm lộ thiên cao nhất Việt\r\n            Nam và tượng Phật Di Lặc\r\n            lớn nhất tỉnh Lâm Đồng. <br>\r\n            11h45: Quý khách dùng cơm trưa tại Bảo Lộc. <br>\r\n            12h45: Khởi hành về TP. Hồ Chí Minh. <br>\r\n            18h00: Về tới TP. Hồ Chí Minh, đưa quý khách về văn phòng Lữ hành Saigontourist. Kết thúc chương\r\n            trình. <br> <br>\r\n            * Ghi chú:<br>\r\n            - Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung của từng chương\r\n            trình.<br>\r\n            - Đây là tour khách lẻ ghép đoàn, mỗi đợt khởi hành phải có tối thiểu 25 người đăng ký. Trong trường\r\n            hợp không\r\n            đủ số lượng khách đăng ký, chúng tôi xin phép dời quý khách sang đợt khởi hành tiếp theo.\r\n        </p>\r\n    </div>');

-- --------------------------------------------------------

--
-- Table structure for table `evaluate`
--

CREATE TABLE `evaluate` (
  `Evaluate_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `CT_Tour_Id` int(11) NOT NULL,
  `CT_Hotel_Id` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<<<<<<< HEAD
--
-- Dumping data for table `evaluate`
--

INSERT INTO `evaluate` (`Evaluate_Id`, `User_Id`, `CT_Tour_Id`, `CT_Hotel_Id`, `Content`, `Rating`, `Time`) VALUES
(1, 1, 12, NULL, 'Mình rất hài lòng về khoản Dịch vụ của Công ty, tận tình phục vụ khách hàng, phản hồi nhanh\r\n                        chóng, chuyến đi Đà Lạt lần này rất đáng nhớ và đặc biệt là giá cả rất phải chăng.', 5, '2021-12-02'),
(5, 1, 12, NULL, 'Test chức năng bình luận', 5, '2021-12-02');

=======
>>>>>>> 315b5fa823713d5b46c824ce798f0a039eca16b7
-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_Id` int(11) NOT NULL,
  `Name_Hotel` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Description_Hotel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Description_Hotel`)),
  `img_hotel` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `img_source`
--

CREATE TABLE `img_source` (
  `Img_Id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Img_Src` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Titile` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Blog_Id` int(11) DEFAULT NULL,
  `Ct_Blog_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `img_source`
--

INSERT INTO `img_source` (`Img_Id`, `Img_Src`, `Titile`, `Blog_Id`, `Ct_Blog_Id`) VALUES
('IMG01', '../Code-TravelTips/Ảnh1.jpg', 'Cắm trại', 1, NULL),
('IMG02', '../Code-TravelTips/Ảnh2.jpg', 'Bánh trung thu Delightfull', 2, NULL),
('IMG03', '../Code-TravelTips/Ảnh3.jpg', 'Bánh trung thu khách sạn Intercontinental', 3, NULL),
('IMG04', '../Code-TravelTips/Ảnh4.jpg', 'Chương trình khuyến mãi', 4, NULL),
('IMG05', '../Code-TravelTips/Ảnh5.jpg', 'Bộ sưu tập bánh trung thu', 5, NULL),
('IMG06', '../Code-TravelTips/Ảnh6.jpg', 'Top bánh trung thu hot nhất', 6, NULL),
('IMG07', '../Code-TravelTips/Ảnh7.jpg', 'Du lịch tại chỗ', 7, NULL),
('IMG08', '../Code-TravelTips/Ảnh8.jpg', 'Mua bánh trung thu mùa dịch', 8, NULL),
('IMG09', '../Code-TravelTips/Ảnh9.jpg', 'Điểm du lịch pleiku', 9, NULL),
('IMG10', '../Code-TravelTips/Ảnh10.jpg', 'Du lịch kết hợp chụp ảnh cưới', 10, NULL),
('IMG11', '../Code-TravelTips/Ảnh11.jpg', 'Sáng tạo liều lĩnh', 11, NULL),
('IMG12', '../Code-TravelTips/Ảnh12.jpg', 'Câu chuyện của nàng lương', 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `Phong_Id` int(11) NOT NULL,
  `CT_Hotel_Id` int(11) NOT NULL,
  `Name_Phong` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Area` int(11) NOT NULL,
  `Facing` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `Tour_Id` int(11) NOT NULL,
  `Tour_Name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Departure` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Destination` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Tour_Time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description_Tour` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Img_Source` text COLLATE utf8_unicode_ci NOT NULL,
  `Tour_Start` date NOT NULL,
  `Tour_Finish` date NOT NULL,
  `Transport` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Tour_Check` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`Tour_Id`, `Tour_Name`, `Departure`, `Destination`, `Tour_Time`, `Description_Tour`, `Price`, `Img_Source`, `Tour_Start`, `Tour_Finish`, `Transport`, `Tour_Check`) VALUES
(1, 'DU LỊCH ĐÀI LOAN [CAO HÙNG - ĐÀI BẮC - ĐÀI TRUNG]', 'TP.HCM', 'ĐÀI LOAN', '5  ngày 4 đêm', 'Khám phá vùng đất mãnh hổ kinh tế châu Á', 6000000, 'DuLichNuocNgoai__Tour/taiwan.png', '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)', 0x01),
(2, 'DU LỊCH ÚC [MELBOURNE – SYDNEY]', 'TP.HCM', 'AUSTRALIA', '5 ngày 4 đêm', 'Khám phá Vương quốc Brunei thanh bình và phồn thịnh', 7000000, 'DuLichNuocNgoai__Tour/australia.png', '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)', 0x01),
(3, 'DU LỊCH BRUNEI [TẬN HƯỞNG 01 ĐÊM NGHỈ TẠI KHÁCH SẠN HOÀNG GIA 06 SAO EMPIRE]', 'TP.HCM', 'BRUNEI', '4 ngày 3 đêm', 'Khám phá Vương quốc Brunei thanh bình và phồn thịnh', 4000000, 'DuLichNuocNgoai__Tour/brunei.png', '2021-11-20', '2021-11-24', 'Hàng không Vietjet (VJ)', 0x01),
(5, 'DU LỊCH NGA [MOSCOW - SAINT PETERSBURG]', 'HÀ NỘI', 'NGA', '5  ngày 4 đêm', 'Khám phá xử bạch dương mùa đông tuyệt đẹp', 7000000, 'DuLichNuocNgoai__Tour/russia.png', '2021-10-14', '2021-11-19', 'Hàng không Vietjet (VJ)', 0x01),
(6, 'DU LỊCH HÀN QUỐC [SEOUL - JEJU - EVERLAND - CHIÊM NGƯỠNG LỄ HỘI HOA GOYANG]', 'HÀ NỘI', 'HÀN QUỐC', '6 ngày 5 đêm', 'Khám phá vùng đất thú vị Hàn Quốc', 5000000, 'DuLichNuocNgoai__Tour/seoul.png', '2021-11-01', '2021-11-07', 'Hàng không Vietnam (VN)', 0x01),
(7, 'DU LỊCH CAMPUCHIA [SIEM REAP- PNOM PENH]', 'TP.HCM', 'CAMPUCHIA', '3 ngày 2 đêm', 'Khám phá Vương quốc Campuchia', 2000000, 'DuLichNuocNgoai__Tour/campuchia.png', '2021-10-05', '2021-11-08', 'Hàng không Vietjet (VJ)', 0x01),
(8, 'DU LỊCH MYANMAR [YANGONG]', 'TP.HCM', 'MYANMAR', '3 ngày 2 đêm', 'Khám phá vùng đất vàng Myanmar', 100000, 'DuLichNuocNgoai__Tour/myanmar.png', '2021-10-05', '2021-11-08', 'Hàng không Vietjet (VJ)', 0x01),
(9, 'DU LỊCH THÁI LAN [CHIANG MAI - CHIANG RAI - BAY THẲNG CÙNG VIETJET AIR]', 'TP.HCM', 'THÁI LAN', '3 ngày 2 đêm', 'Khám phá xứ sở chùa Vàng Đông Nam Á', 3000000, 'DuLichNuocNgoai__Tour/thailand.png', '2021-10-06', '2021-11-09', 'Hàng không Vietjet (VJ)', 0x01),
(10, 'DU LỊCH NHẬT BẢN MÙA THU [OSAKA - KYOTO - FUJI - TOKYO]', 'TP.HCM', 'NHẬT BẢN', '5 ngày 4 đêm', 'Khám phá xử sở mặt trời mọc mùa thu', 7000000, 'DuLichNuocNgoai__Tour/tokyo.png', '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)', 0x01),
(11, 'DU LỊCH PHÚ QUỐC - ĐẢO NGỌC THIÊN ĐƯỜNG', 'HẢI PHÒNG', 'Phú Quốc', '3 ngày 2 đêm', 'Du lịch Phú Quốc Quý khách thỏa sức vẫy vùng trong làn nước xanh', 5500000, 'DulichTrongNuoc__Tour/phuquoc01.jpg', '2021-10-15', '2021-10-18', 'Đi, về bằng máy bay', 0x00),
(12, 'DU LỊCH ĐÀ LẠT - THUNG THĂNG PHỐ NÚI', 'TP.HCM', 'ĐÀ LẠT', '3 ngày 2 đêm', ' Check-in và chụp hình siêu đẹp tại Quê Garden', 1900000, 'DulichTrongNuoc__Tour/dalat01.jpg', '2021-10-15', '2021-10-18', 'Đi, về bằng ô tô', 0x00),
(13, 'DU LỊCH HẠ LONG - NỤ CƯỜI HẠ LONG', 'HẢI PHÒNG', 'HẠ LONG', '1 ngày', 'Tham quan Cảng tàu Tuần Châu, Hòn Chó Đá, Hòn Đinh Hương, Hòn Gà Chọi,...', 1000000, 'DulichTrongNuoc__Tour/halong01.jpg', '2021-11-03', '2021-11-04', 'Đi, về bằng ô tô', 0x00),
(14, 'DU LỊCH SAPA - KHÁM PHÁ VÙNG ĐẤT HOANG SƠ', 'HẢI PHÒNG', 'SAPA', '3 ngày', 'Du lịch Sapa: tham quan nhà thờ Đá, núi Hàm Rồng', 1500000, 'DulichTrongNuoc__Tour/sapa01.jpg', '2021-10-15', '2021-10-18', 'Đi, về bằng xe ô tô', 0x00),
(15, 'DU LỊCH NHA TRANG - THIÊN ĐƯỜNG BIỂN ĐẢO', 'NGHỆ AN', 'NHA TRANG', '3 ngày 2 đêm', 'Tham quan thành phố biển Nha Trang xinh đẹp', 2000000, 'DulichTrongNuoc__Tour/nhatrang01.jpg', '2021-11-01', '2021-11-04', 'Đi, về bằng máy bay', 0x00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `Last_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `First_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_Id`);

--
-- Indexes for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`Booking_Form_Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `CT_Tour_Id` (`CT_Tour_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contect_Id`);

--
-- Indexes for table `ct_blog`
--
ALTER TABLE `ct_blog`
  ADD PRIMARY KEY (`CT_Blog_Id`),
  ADD KEY `Blog_Id` (`Blog_Id`);

--
-- Indexes for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  ADD PRIMARY KEY (`CT_Hotel_Id`),
  ADD KEY `Hotel_Id` (`Hotel_Id`);

--
-- Indexes for table `ct_tour`
--
ALTER TABLE `ct_tour`
  ADD PRIMARY KEY (`CT_Tour_id`),
  ADD KEY `FK_CTTour_Tour` (`Tour_Id`);

--
-- Indexes for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`Evaluate_Id`),
  ADD KEY `CT_Tour_Id` (`CT_Tour_Id`),
  ADD KEY `CT_Hotel_Id` (`CT_Hotel_Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `img_source`
--
ALTER TABLE `img_source`
  ADD PRIMARY KEY (`Img_Id`),
  ADD KEY `Ct_Blog_Id` (`Ct_Blog_Id`),
  ADD KEY `Blog_Id` (`Blog_Id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`Phong_Id`),
  ADD KEY `CT_Hotel_Id` (`CT_Hotel_Id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`Tour_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `Booking_Form_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contect_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_blog`
--
ALTER TABLE `ct_blog`
  MODIFY `CT_Blog_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  MODIFY `CT_Hotel_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ct_tour`
--
ALTER TABLE `ct_tour`
  MODIFY `CT_Tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluate`
--
ALTER TABLE `evaluate`
<<<<<<< HEAD
  MODIFY `Evaluate_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `Evaluate_Id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> 315b5fa823713d5b46c824ce798f0a039eca16b7

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Hotel_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `Phong_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `Tour_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_form`
--
ALTER TABLE `booking_form`
  ADD CONSTRAINT `booking_form_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`),
  ADD CONSTRAINT `booking_form_ibfk_2` FOREIGN KEY (`CT_Tour_Id`) REFERENCES `ct_tour` (`CT_Tour_id`);

--
-- Constraints for table `ct_blog`
--
ALTER TABLE `ct_blog`
  ADD CONSTRAINT `ct_blog_ibfk_1` FOREIGN KEY (`Blog_Id`) REFERENCES `blog` (`Blog_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

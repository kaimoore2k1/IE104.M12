-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 09:55 AM
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
-- Database: `ie104_m12`
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
  `Content_CT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_tour`
--

INSERT INTO `ct_tour` (`CT_Tour_id`, `Tour_Id`, `Tour_Highlight`, `Content_CS`, `Content_CT`) VALUES
(1, 1, '- Khám phá mãnh hổ kinh tế của châu Á với nhiều dấu ấn lịch sử, pha trộn hài hòa giữa văn hóa hiện đại và truyền thống.\r\n- Tham gia hoạt động thả đèn trời, viếng các đền chùa linh thiêng cầu may mắn, bình an cho gia đình.\r\n- Thỏa sức mua sắm và thưởng thức những món ăn địa phương nức tiếng tại những khu chợ đêm sầm uất.', 'Lịch khởi hành:\r\nĐợt 1: 16 – 18/4\r\nĐợt 2: 23 – 25/4\r\n\r\n* Giá trẻ em (không bao gồm vé máy bay):\r\n- Trẻ em từ 0 tuổi – 5 tuổi (or dưới 1,0m): miễn phí TOUR\r\n- Trẻ em từ 6 tuổi – 11 tuổi (1,0m- 1,4m):  tính 60% giá tour ( ngủ ghép với Ba mẹ)\r\n- Trẻ em trên 11 tuổi trở lên: tính như nguời lớn.\r\n\r\n* Giá tour bao gồm:\r\n- Xe oto du lich đời mới máy lạnh tốt phục vụ theo chương trình\r\n- Khách sạn 3 sao (02 khách//phòng)\r\n- 02 bữa sáng buffet\r\n01 bữa buffet 200k/suất; 3 bữa chính khác * 150k/s \r\n- Vé cáp treo và vui chơi Công viên nước Hòn Thơm 400k/vé\r\n-  Tàu câu cá + dụng cụ câu cá và lặn ngắm san hô\r\n- Vé tham quan các điểm theo chương trình.\r\n- Hướng dẫn viên phục vụ tại Phú Quốc và đón – tiễn sân bay Vinh\r\n- Mũ Saigontourist, khăn, nước suối Saigontourist – 02 chai 0.5 lít/khách/ngày\r\n- VAT 10%\r\n\r\n* Giá tour không bao gồm:\r\n- Vé máy bay khứ hồi Vinh//Phú Quốc dự tính\r\n- Vinwonder và  Safari\r\n- Chi phí cá nhân, điện thoại, giặt ủi.\r\n- Chi phí tham quan ngoài chương trình\r\n- Chi phí bia, nước ngọt trong các bữa ăn.\r\n\r\n* Lưu ý:\r\nKhi đăng ký vui lòng cung cấp tên chính xác, đầy đủ trên Passport/CMND/ Giấy khai sinh bản chính (trẻ em dưới 14 tuổi). \r\nQuý khách khi đi cần đem theo CMND (còn hạn 15 năm)/ Passport/ Giấy khai sinh (trẻ em dưới 14 tuổi)/ Trẻ em không đi cùng cha mẹ phải có giấy ủy quyền của cha hoặc mẹ có xác nhận của chính quyền địa phương cho người dẫn trẻ em đi. Thời gian và điểm tham quan trong chương trình linh động thay đổi theo điều kiện thực tế', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1: TP.HCM - CAO HÙNG (Ăn tối)\r\nTập trung tại lầu 2 - Ga đi Quốc tế Tân Sơn Nhất làm thủ tục chuyến bay VN582 (09:55-13:50) đi Cao Hùng. Ăn nhẹ trên máy bay. Đến Cao Hùng, tham quan Núi Phật Quang (Fo Guang Shan) - ngôi chùa nổi tiếng nhất Cao Hùng với tượng Phật ngoài trời cao 36m, cùng với quần thể hơn 480 tượng Phật nhỏ chung quanh. Tự do mua sắm và khám phá Chợ đêm Lục Hợp. Nghỉ đêm.\r\n\r\n\r\nChùa Phật Quang\r\nNGÀY 2: CAO HÙNG – ĐÀI TRUNG (Ăn sáng, trưa, tối)\r\nTrả phòng. Tham quan Hồ Nhật Nguyệt (Sun Moon Lake) bằng thuyền - hồ nằm tại độ cao hơn 700m so với mực nước biển, xung quanh là trập trùng núi non, phong cảnh hữu tình. Mua sắm tại Cửa hàng nấm linh chi. Tham quan Đền Văn Võ (Wenwu Temple) nằm phía Bắc của hồ Nhật Nguyệt, nơi thờ Quan Công, Nhạc Phi và Khổng Tử. Mua sắm tại Cửa hàng Trà Ô Long. Tự do mua sắm và khám phá Chợ đêm Phụng Giáp. Nghỉ đêm.\r\nHồ Nhật Nguyệt\r\nNGÀY 3: ĐÀI TRUNG – ĐÀI BẮC (Ăn sáng, trưa, tối)\r\nTrả phòng. Mua sắm tại Cửa hàng bánh dứa. Tham quan Công viên Dương Minh Sơn là một trong 8 vườn quốc gia lớn của Đài Loan, với địa hình núi lửa đặc thù, xen lẫn những thung lũng yên bình và quần thể động thực vật phong phú. Mua sắm tại Cửa hàng Tỳ Hưu. Tham quan Thư viện Beitou được thiết kế giống như một ngôi nhà trên cây. Tham quan Viện Bảo Tàng Cố Cung - được công nhận là 1 trong 4 viện bảo tàng lớn nhất thế giới với hơn 620.000 hiện vật vô cùng quý báu, nằm trong bộ sưu tập của Hoàng gia Trung Quốc được mang sang Đài Loan cất giữ. Tham quan Tòa nhà Taipei 101 tầng - quý khách có thể mua vé lên tầng 89 để tham quan và ngắm toàn cảnh Đài Bắc (chi phí tự túc). Tự do mua sắm và khám phá Chợ đêm Nhiêu Hà. Nghỉ đêm.\r\nViện Bảo Tàng Cố Cung\r\nNGÀY 4: ĐÀI BẮC (Ăn sáng, trưa, tối)\r\nTham quan Công viên địa chất Dã Liễu là nơi có những mõm đá với hình thù kỳ lạ. Tham quan Phố cổ Thập Phần với không khí lãng mạn hoài cổ, nhiều dãy hàng lưu niệm đan xen và thả đèn trời ước nguyện (04 khách/đèn) - thả đèn riêng, tự túc khoảng 160.000đ/đèn. Tham quan Phố núi Cửu Phần. Mua sắm tại Trung tâm đá quý. Tự do mua sắm và khám phá Khu phố đi bộ Ximen. Nghỉ đêm.\r\nPhố núi Cửu Phần\r\nNGÀY 5: ĐÀI BẮC - TP.HCM (Ăn sáng)\r\nTrả phòng. Ra sân bay, làm thủ tục chuyến bay VN571 (07:45-10:25) về Tp.HCM. Đến sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch.'),
(2, 6, '- Cùng ngắm bình minh và đắm mình vào vẻ đẹp lãng mạn của đảo Jeju - “Hawaii của Hàn Quốc”\r\n- Khám phá và vui chơi tại Everland - Top 10 công viên giải trí thu hút nhất thế giới.\r\n- Thỏa sức chiêm ngưỡng các loài hoa tuyệt đẹp đến từ khắp nơi trên thế giới tại Lễ hội hoa Goyang\r\n- Thỏa thích mua sắm với các sản phẩm chăm sóc sức khỏe và làm đẹp nổi tiếng Hàn Quốc.', 'GIÁ TOUR TRỌN GÓI:\r\n(Đã bao gồm đầy đủ thuế và phí - Giá tour có thể thay đổi vào thời điểm đặt tour)\r\n(Áp dụng cho khách từ 12 tuổi đến 69 tuổi)\r\n\r\n* Vé trẻ em:\r\n- Trẻ em dưới 2 tuổi                             : 30% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n- Trẻ em từ 2 đến dưới 12 tuổi             : 80% giá của người lớn (bé ngủ chung giường với Bố Mẹ)\r\n                                                             : 90% giá của người lớn (bé có giường riêng).\r\n- Trẻ em từ 12 tuổi trở lên                    :100% giá như người lớn.\r\n\r\n* Giá tour bao gồm:\r\n- 05 đêm ngủ tại khách sạn 3* tiêu chuẩn 2 người /1 phòng  (nếu đoàn lẻ nam hoặc nữ thì ở 3 người/ phòng)\r\n- Vé máy bay khứ hồi Hanoi - Seoul// Jeju-Seoul//Seoul - Hanoi.\r\n- Thuế và phụ phí hàng không\r\n- Các bữa ăn theo chương trình.\r\n- Xe ôtô vận chuyển theo chương trình. Vé vào cửa các điểm tham quan lần thứ nhất\r\n- Hướng dẫn viên Lữ hành Saigontourist suốt tuyến\r\n- Visa nhập cảnh vào Hàn Quốc (thư mời, dịch thụât công chứng Tiếng Anh)\r\n- Quà tặng của Lữ hành Saigontourist (túi xách và nón…)\r\n\r\n* Giá tour không bao gồm:\r\n- Phụ phí phòng đơn. Phi hành lý quá cước. Chi phí cá nhân: đồ uống, giặt là…\r\n- Tiền bồi dưỡng cho HDV và lái xe tại nước ngoài (140.000 đ/khách/ngày)\r\n\r\nTHÔNG TIN HƯỚNG DẪN\r\n\r\n* Trường hợp hủy tour:\r\n- Quý khách vui lòng thanh toán các khoản lệ phí hủy tour như sau:\r\n- Ngay sau khi đăng ký tour                                                                                          : chi trả 30% giá tour.\r\n- Trước ngày đi 30 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)                          : chi trả 50% giá tour.\r\n- Trước ngày đi từ 15 đến 29 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 70% giá tour.\r\n- Trước ngày đi từ 7 đến 14 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)            : chi trả 90% giá tour.\r\n- Trước ngày đi từ 0 đến 6 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 100% giá tour\r\n\r\n* Lưu ý :\r\n- Bất cứ khách hàng nào bị Lãnh sự quán từ chối cấp visa, phải trả chi phí làm visa là 2.300.000 VND/khách\r\n- Khách hàng cam kết đi theo đúng lịch trình, không bỏ tour. Bất cứ một hình thức bỏ hoặc không sử dụng dịch vụ gì tại nước ngoài đều không được hoàn lại tiền vì mọi dịch vụ đã được thanh toán trước. Theo chương trình khuyến mại đã ký với đối tác Hàn Quốc, quý khách sẽ đi theo tour suốt hành trình. Quý khách nào tách đoàn vui lòng báo trước và trả thêm 2.350.000 VNĐ/khách/ngày.\r\n- Khách hàng mang hộ chiếu nước ngoài phải thanh toán thêm : 2.300.000 VNĐ/khách/hành trình.\r\n- Giá và trường hợp hủy tour có thể thay đổi tăng cho các dịp lễ & Tết.\r\n- Sau khi đóng tiền, nếu quý khách muốn hủy tour, vui lòng đem CMND và hóa đơn đã đóng tiền đến ngay văn phòng đã đang ký để làm thủ tục hủy tour. Lữ hành Saigontourist không nhận khách báo hủy qua điện thoại.\r\n- Lữ hành Saigontourist không nhận khách có thai từ 5 tháng trở lên tham gia các tour du lịch nước ngoài.\r\n- Các điểm tham quan có thể thay đổi thứ tự phụ thuộc vào tình hình thời tiết và điều kiện giao thông tại Hàn Quốc\r\n- Lữ hành Saigontourist không chịu trách nhiệm về việc hoàn thuế tại sân bay của quý khách.\r\n- Trường hợp chỉ có  01 khách (người lớn) đi với 01 bé (dưới 12 tuổi), quý khách vui lòng đóng tiền tour cho Bé ngủ giường riêng.\r\n- Trong trường hợp đoàn gom dưới 15 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được đoàn. Xin chân thành cám ơn', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1 ( 27/4) : HANOI - SEOUL                                                                                                                 \r\n11h30: Xe và hướng dẫn viên đón quý khách tại văn phòng Saigontourist 55B Phan Chu Trinh và đưa đoàn lên sân bay Nội Bài, HDV làm thủ tục cho đoàn đáp chuyến bay OZ730 (14:30 - 20:40) đi Incheon. Nghỉ đêm trên máy bay.\r\n\r\nNGÀY 2 ( 28/4):  SEOUL - JEJU (Ăn sáng, trưa, tối)\r\nTham quan quan chụp hình bên ngoài Nhà Xanh - Phủ Tổng Thống nơi ở và làm việc chính thức của các đời Tổng Thống. Tham quan cung điện KyeongBok – cung điện Hoàng Gia đầu tiên được xây dựng ở triều đại Joseon và là cung điện đồ sộ nhất Hàn Quốc. Tiếp tục tham quan Bảo tàng Dân gian Quốc gia nơi lưu trữ và bảo tồn các di sản văn hóa của Hàn Quốc với hơn 10.000 mẫu vật phản ánh nghi lễ, tôn giáo, cách bài trí nhà cửa và các đồ vật trong gia đình Hàn Quốc. Ăn trưa. Đoàn ra sân bay đáp chuyến bay đến đảo Jeju - thiên đường nghỉ dưỡng nổi tiếng của Hàn Quốc. Đến nơi, xe đón đoàn đi tham quan Đá Đầu Rồng, khu phố Dapdong. Ăn tối. Nghỉ đêm tại khách sạn.\r\n\r\n\r\nNhà xanh - Phủ Tổng Thống\r\nNGÀY 3 ( 29/4): JEJU (Ăn sáng, trưa, tối)\r\nHành trình lên đỉnh Seongsan Sunrise Peak - nằm trên miệng núi lửa phun trào cách đây hàng nghìn năm, với bờ biển tuyệt đẹp bao quanh, ngắm cảnh bình minh trên đảo. Thăm làng văn hóa dân tộc Seongeup - nơi xưa kia Nàng Dae Jang Geum theo học nghề y, thưởng thức vị mật ong của người dân địa phương. Thưởng thức bữa trưa với món BBQ Hàn Quốc. Chiều, tham quan thác nước Cheonjiyeon - theo truyền thuyết là nơi các tiên nữ dạo chơi khi xuống trần. Thăm vách đá Jusan-Gjelli - nơi hàng nghìn cột đá xám đen xếp cạnh nhau một cách hoàn toàn ngẫu nhiên dọc theo bờ biển. Nhìn từ trên cao, vách đá này trông như một tổ ông khổng lồ với nhiều cột đá có hình dáng khác nhau, tham quan con đường ma quái, công viên Thiên đường Tình yêu – công viên tình yêu độc nhất vô nhị của đảo Jeju. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn trên đảo Jeju.\r\nVách đá Jusan-Gjelli \r\nNGÀY 4 ( 30/4): JEJU - SEOUL - LỄ HỘI HOA GOYANG (Ăn sáng, trưa, tối)\r\nĂn sáng tại khách sạn. Trả phòng. Đoàn ra sân bay đáp chuyến bay đi Seoul. Xe đón tại sân bay đưa đoàn đi ăn trưa tại nhà hàng. Chiều, đoàn đi tham quan lễ hội hoa Goyang - lễ hội hoa lớn nhất ở Hàn Quốc, thu hút hàng triệu lượt khách tham quan hàng năm. Lễ hội hoa này là một mô hình mẫu mực về việc tổ chức lễ hội văn hóa địa phương có sự tham gia trực tiếp của các nhà trồng hoa khắp thế giới. Trở về Seoul. Đoàn mua sắm tại trung tâm nhân sâm. Ăn tối. Nghỉ đêm tại Seoul.\r\nLễ hội hoa Goyang\r\nNGÀY 5 ( 01/5): SEOUL - EVERLAND (Ăn sáng, trưa, tối)\r\nĂn sáng. Xe và hướng dẫn viên đưa Quý khách tới công viên Everland - nằm trong top 10 công viên được yêu thích nhất thế giới với 5 khu chủ đề bao gồm “Chợ toàn cầu”, “Khu phiêu lưu mạo hiểm phong cách Mỹ”, “Vùng đất huyền thoại”, “Khu phiêu lưu mạo hiểm phong cách châu Âu” và “Vườn bách thú” sẽ đưa du khách khám phá lịch sử, văn hóa và lễ hội khắp năm châu. . Buổi chiều xe đưa đoàn đi tham quan và mua sắm tại cửa hàng mỹ phẩm, trung tâm nấm linh chi,  tự do khám phá chợ Dongdaemun. Ăn tối Nghỉ đêm tại khách sạn 3 sao tại Seoul.\r\nCông viên Everland\r\nNGÀY 6 ( 02/5) : SEOUL - HANOI (Ăn sáng, trưa)\r\nĂn sáng. Trả phòng. Đoàn tham quan bảo tàng rong biển Laver (seaweed) Museum - nơi gìn giữ và phát huy văn hóa ẩm thực truyền thống của Hàn Quốc, đồng thời giới thiệu đến du khách về các loại lá kim - một món ăn không thể thiếu của người Hàn Quốc. Trải nghiệm làm kimchi và mặc áo Hanbok truyền thống của Hàn Quốc. Tự do tham quan mua sắm tại cửa hàng tinh dầu thông đỏ, cửa hàng nông sản Hàn Quốc với vô số sản phẩm sâm tươi và nấm linh chi. Mua sắm tại cửa hàng miễn thuế. Sau bữa trưa, xe đưa quý khách ra sân bay Incheon Airport đáp chuyến bay OZ733 (19:30-22:25) trở về Việt Nam. Hạ cánh tại Nội Bài, xe đón đoàn về trung tâm thành phố. Chia tay và kết thúc chương trình.'),
(3, 10, '- Khám phá xứ sở mặt trời mọc mùa thu\r\n- Trải nghiệm tàu cao tốc Shinkansen\r\n- Trải nghiệm tắm Onsen Nhật Bản', 'GIÁ TOUR TRỌN GÓI ÁP DỤNG ĐOÀN 20 KHÁCH TRỞ LÊN\r\n(Đã bao gồm đầy đủ thuế và phí)\r\n(Giá tour có thể thay đổi vào thời điểm đặt tour - Áp dụng cho khách từ 12 tuổi đến 69 tuổi)\r\n\r\n* Vé trẻ em:\r\n- Trẻ em dưới 2 tuổi                               : 30% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n- Trẻ em từ 2 đến dưới 12 tuổi               : 85% giá của người lớn (bé ngủ chung giường với Bố Mẹ).\r\n                                                               :100% giá của người lớn (bé có giường riêng).\r\n- Trẻ em từ 12 tuổi trở lên                       100% giá như người lớn.\r\n\r\n* Giá tour bao gồm:\r\n- Vé máy bay khứ hồi Hanoi - Osaka // Tokyo - Hanoi.\r\n- Thuế và phụ phí hàng không.\r\n- Lệ phí Visa nhập cảnh vào Nhật Bản\r\n- 04 đêm khách sạn 3 sao (02 người/ phòng Twin).\r\n- Ăn, uống và vé vào cửa tham quan theo chương trình - Xe vận chuyển theo chương trình.\r\n- Hướng dẫn Lữ hành Saigontourist đi suốt tuyến Quà tặng của Lữ hành Saigontourist & VAT.\r\n\r\n* Giá tour không bao gồm:\r\n- Lệ phí làm hộ chiếu và visa nhập lại Việt Nam cho khách mang quốc tịch nước ngoài, phí chênh lệch visa Nhật  cho khách mang quốc tịch nước ngoài.\r\n- Nước uống (Bia, rượu mạnh… trong bữa ăn), điện thoại, giặt ủi, hành lý quá cước theo qui định của hàng không.\r\n- Tiền tip cho hướng dẫn viên và tài xế tại nước ngoài\r\n- Thuốc men, bệnh viện… chi phí cá nhân khác của khách ngoài chương trình.\r\n\r\nTHÔNG TIN HƯỚNG DẪN\r\n\r\n* Trường hợp hủy tour:  Quý khách vui lòng thanh toán các khoản lệ phí hủy tour như sau\r\n- Ngay sau khi đăng ký tour                                                                                          : chi trả 10% giá tour.\r\n- Trước ngày đi 30 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)                          : chi trả 20% giá tour.\r\n- Trước ngày đi từ 20 đến 29 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 30% giá tour.\r\n- Trước ngày đi từ 10 đến 19 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)          : chi trả 50% giá tour.\r\n- Trước ngày đi từ 5 đến 9 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)              : chi trả 75% giá tour.\r\n- Trước ngày đi từ 2 đến 4 ngày làm việc (Không tính thứ Bảy và Chủ Nhật)              : chi trả 90% giá tour.\r\n- Trước ngày đi 24 giờ (Không tính thứ Bảy & Chủ Nhật)                                            : chi trả 100% giá tour.\r\nVì bất cứ lý do nào mà ĐSQ Nhật Bản từ chối cấp visa, Quý khách vui lòng nộp lệ phí visa và dịch vụ là 2.150.000 vn đồng/khách.\r\n\r\n* Lưu ý:\r\n- Visa Nhật cần tối thiểu 14 ngày làm việc trước chuyến đi, quý khách vui lòng đăng ký tour trước chuyến đi 30 ngày và nộp hồ sơ xin visa trước chuyến đi là 3 tuần\r\n- Phụ phí hàng không có thể thay đổi phụ thuộc vào chính sách của Hàng không (sẽ có công văn thông báo). \r\n- Ngày khởi hành có thể thay đổi nếu số lượng khách đăng ký dưới 15 khách, Công ty sẽ xác nhận trước 12 ngày khởi hành tour.\r\n- Hộ chiếu (Passport) của quý khách phải còn thời hạn trên 6 tháng kể từ ngày về\r\n- Quý khách từ 70 tuổi trở lên vui lòng đóng thêm phí bảo hiểm cao cấp (phí thay đổi tùy theo tour).\r\n- Quý khách từ 75 tuổi trở lên yêu cầu phải có giấy xác nhận đầy đủ sức khỏe để đi du lịch nước ngoài của Bác sĩ và phải có người thân dưới 60 tuổi (đầy đủ sức khỏe) đi theo.\r\n- Chương trình có thể thay đổi tuỳ tình hình chuyến bay, khách sạn tại Nhật và được xác nhận chính thức vào ngày họp đoàn, trước ngày khởi hành 2 - 3 ngày. Các điểm tham quan có thể không theo thứ tự trong chương trình.\r\n- Sau khi đóng tiền, nếu quý khách hủy tour, vui lòng đem CMND & hóa đơn đã đóng tiền đến ngay văn phòng Cty (55B Phan Chu Trinh – Hà Nội) để làm thủ tục hủy tour. Công ty không nhận khách báo hủy qua điện thoại.\r\n- Lữ hành Saigontourist không nhận khách có thai từ 5 tháng trở lên tham gia các tour du lịch nước ngoài.\r\n- Trong trường hợp bất khả kháng do thời tiết, thiên tai, đình công, bạo động, phá hoại, chiến tranh, dịch bệnh, chuyến bay bị trì hoãn hay bị hủy do thời tiết hoặc do kỹ thuật, chính phủ trưng dụng…..dẫn đến tour không thể thực hiện tiếp tục được, Lữ hành Saigontourist sẽ hoàn trả lại tiền tour cho quý khách sau khi đã trừ lại các chi phí dịch vụ đã thực hiện như phí làm visa,… và không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác.\r\n- Trong trường hợp chỉ có  01 khách (người lớn) đi với 01 bé (dưới 12 tuổi), quý khách vui lòng đóng tiền tour cho Bé ngủ giường riêng.\r\n- Lưu ý: Hoa nở rất dễ bị ảnh hưởng bởi điều kiện thời tiết bên ngoài mà nở sớm hay muộn. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm. Trong trường hợp đoàn gom dưới 15 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được đoàn. Xin chân thành cám ơn', 'Liên hệ tư vấn: Anh Kim Soo Huyn  - 0908 251 152 // Chị La Lisa - 0988 356996\r\n\r\nNGÀY 1 : HÀ NỘI - OSAKA\r\n21h30: Đón Quý khách tại 55B Phan Chu Trinh, khởi hành đi sân bay Nội Bài, đáp chuyến bay VJ938 (01.20-07.40) đi Osaka. Nghỉ đêm trên máy bay.\r\n\r\nNGÀY 2 : NARA - OSAKA (Ăn trưa, tối)\r\nĐến sân bay, xe và hướng dẫn viên đón quý khách và đưa đi cố đô Nara. Tham quan Công viên Nara hay còn được gọi là Deer Park - ngoài cây xanh và hoa tươi muôn màu, công viên còn nổi tiếng vì có hơn 1.200 chú Nai sinh sống tự nhiên tại đây. Tham quan Đền Todaiji - là ngôi đền cổ kính và lâu đời nhất tại Nara với nhiều nét đẹp trong văn hóa của Nhật Bản. Chiều, Xe đưa đoàn đi tham quan và chụp ảnh lưu niệm ở Lâu đài Osaka (bên ngoài). Sau đó, đoàn tự do mua sắm tại khu Shinshabashi, Umeda shopping. Ăn tối tại nhà hàng và nghỉ đêm tại khách sạn.\r\nCông viên Nara\r\nNGÀY 3: OSAKA - KYOTO - NAGOYA (Ăn sáng, trưa, tối)\r\nĂn sáng tại khách sạn, đoàn khởi hành đi tham quan cố đô Kyoto (thành phố lớn thứ 7 của Nhật Bản) - được mệnh danh là cố đô nghìn năm, nơi còn lưu giữ rất nhiều di tích lịch sử đền đài tạo nên bộ mặt vừa hiện đại vừa truyền thống của đất nước Nhật Bản. Chương trình tham quan đầu tiên là đền thờ Kiyomizu - di sản văn hóa thế giới với phong cảnh lãng mạn. Tiếp tục tham quan Chùa Vàng (Golden pavilion). Xe đưa quý khách đi Nagoya. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.\r\nCố đô Tokyo\r\nNGÀY 4 : NAGOYA - NÚI PHÚ SỸ (Ăn sáng, trưa, tối)\r\nSau bữa sáng tại khách sạn. Đoàn lên tàu cao tốc Shinkansen, trải nghiệm hành trình từ Hamamatsu đi Toyohashi. Quý khách bắt đầu hành trình đi tham quan với núi Phú Sỹ - biểu tượng của đất nước mặt trời mọc (nếu thời tiết cho phép, đoàn sẽ tới điểm dừng số 5 tham quan). Quý khách tham quan khu Làng cổ Oshino Hakkai, là ngôi làng nằm yên bình dưới chân Núi Phú Sỹ. Từ đây nếu thời tiết đẹp du khách sẽ có thể ngắm nhìn toàn cảnh đỉnh núi Phú Sỹ trong tuyết trắng vô cùng quyến rũ. Tự do mua sắm tại Gotemba Outlet (nếu thời gian cho phép). Ăn tối tại nhà hàng, thư giãn Osen kiểu Nhật Bản tại khách sạn.\r\nTắm Onsen tại Nhật Bản\r\nNGÀY 5 : NÚI PHÚ SỸ - TOKYO (Ăn sáng, trưa, tối)\r\nSau bữa sáng tại khách sạn. Xe đưa Quý khách đi thủ đô Tokyo. Thăm quan chùa Quan Âm Asakusa - một trong những công trình cổ nhất và nổi tiếng tại Tokyo. Chụp hình với tháp Tokyo Skytree cao 634m là tháp truyền hình cao nhất thế giới hiện nay (không lên tháp). Tham quan, chụp hình bên ngoài Hoàng Cung Nhật Bản. Đoàn tự do mua sắm tại các khu phố thương mại nổi tiếng ở Tokyo như khu chợ điện tử Akihabara hoặc khu Ginza. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.\r\nTokyo Skytree\r\nNGÀY 6 : TOKYO - HÀ NỘI (Ăn sáng)\r\nSau bữa sáng, quý khách làm thủ tục trả phòng khách sạn, xe đưa đoàn ra sân bay đáp chuyến bay VJ933 (09.30-14.15) về Hà Nội. Máy bay hạ cánh tại sân bay quốc tế Nội Bài. Xe đưa đoàn về điểm hẹn ban đầu. Chia tay và hẹn gặp lại quý khách.');

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
  `Img_Source` blob NOT NULL,
  `Tour_Start` date NOT NULL,
  `Tour_Finish` date NOT NULL,
  `Transport` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`Tour_Id`, `Tour_Name`, `Departure`, `Destination`, `Tour_Time`, `Description_Tour`, `Price`, `Img_Source`, `Tour_Start`, `Tour_Finish`, `Transport`) VALUES
(1, 'DU LỊCH ĐÀI LOAN [CAO HÙNG - ĐÀI BẮC - ĐÀI TRUNG]', 'TP.HCM', 'ĐÀI LOAN', '5  ngày 4 đêm', 'Khám phá vùng đất mãnh hổ kinh tế châu Á', 6000000, 0x5b76616c75652d385d, '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)'),
(2, 'DU LỊCH ÚC [MELBOURNE – SYDNEY]', 'TP.HCM', 'AUSTRALIA', '5 ngày 4 đêm', 'Khám phá Vương quốc Brunei thanh bình và phồn thịnh', 7000000, '', '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)'),
(3, 'DU LỊCH BRUNEI [TẬN HƯỞNG 01 ĐÊM NGHỈ TẠI KHÁCH SẠN HOÀNG GIA 06 SAO EMPIRE]', 'TP.HCM', 'BRUNEI', '4 ngày 3 đêm', 'Khám phá Vương quốc Brunei thanh bình và phồn thịnh', 4000000, '', '2021-11-20', '2021-11-24', 'Hàng không Vietjet (VJ)'),
(5, 'DU LỊCH NGA [MOSCOW - SAINT PETERSBURG]', 'HÀ NỘI', 'NGA', '5  ngày 4 đêm', 'Khám phá xử bạch dương mùa đông tuyệt đẹp', 7000000, '', '2021-10-14', '2021-11-19', 'Hàng không Vietjet (VJ)'),
(6, 'DU LỊCH HÀN QUỐC [SEOUL - JEJU - EVERLAND - CHIÊM NGƯỠNG LỄ HỘI HOA GOYANG]', 'HÀ NỘI', 'HÀN QUỐC', '6 ngày 5 đêm', 'Khám phá vùng đất thú vị Hàn Quốc', 5000000, '', '2021-11-01', '2021-11-07', 'Hàng không Vietnam (VN)'),
(7, 'DU LỊCH CAMPUCHIA [SIEM REAP- PNOM PENH]', 'TP.HCM', 'CAMPUCHIA', '3 ngày 2 đêm', 'Khám phá Vương quốc Campuchia', 2000000, '', '2021-10-05', '2021-11-08', 'Hàng không Vietjet (VJ)'),
(8, 'DU LỊCH MYANMAR [YANGONG]', 'TP.HCM', 'MYANMAR', '3 ngày 2 đêm', 'Khám phá vùng đất vàng Myanmar', 100000, '', '2021-10-05', '2021-11-08', 'Hàng không Vietjet (VJ)'),
(9, 'DU LỊCH THÁI LAN [CHIANG MAI - CHIANG RAI - BAY THẲNG CÙNG VIETJET AIR]', 'TP.HCM', 'THÁI LAN', '3 ngày 2 đêm', 'Khám phá xứ sở chùa Vàng Đông Nam Á', 3000000, '', '2021-10-06', '2021-11-09', 'Hàng không Vietjet (VJ)'),
(10, 'DU LỊCH NHẬT BẢN MÙA THU [OSAKA - KYOTO - FUJI - TOKYO]', 'TP.HCM', 'NHẬT BẢN', '5 ngày 4 đêm', 'Khám phá xử sở mặt trời mọc mùa thu', 7000000, '', '2021-10-15', '2021-10-20', 'Hàng không Vietjet (VJ)');

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
  MODIFY `Blog_Id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `CT_Tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `Evaluate_Id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Tour_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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

--
-- Constraints for table `ct_hotel`
--
ALTER TABLE `ct_hotel`
  ADD CONSTRAINT `ct_hotel_ibfk_1` FOREIGN KEY (`Hotel_Id`) REFERENCES `hotel` (`Hotel_Id`);

--
-- Constraints for table `ct_tour`
--
ALTER TABLE `ct_tour`
  ADD CONSTRAINT `FK_CTTour_Tour` FOREIGN KEY (`Tour_Id`) REFERENCES `tour` (`Tour_Id`);

--
-- Constraints for table `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`CT_Tour_Id`) REFERENCES `ct_tour` (`CT_Tour_id`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`CT_Hotel_Id`) REFERENCES `ct_hotel` (`CT_Hotel_Id`),
  ADD CONSTRAINT `evaluate_ibfk_3` FOREIGN KEY (`User_Id`) REFERENCES `user` (`User_Id`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`CT_Hotel_Id`) REFERENCES `ct_hotel` (`CT_Hotel_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

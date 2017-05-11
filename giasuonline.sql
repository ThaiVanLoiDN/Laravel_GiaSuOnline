-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 04:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giasuonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_post` int(3) NOT NULL,
  `tenpost` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mota_post` text COLLATE utf8_unicode_ci NOT NULL,
  `chitiet_post` text COLLATE utf8_unicode_ci NOT NULL,
  `img_post` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_post` int(15) NOT NULL,
  `id_cat` int(2) NOT NULL,
  `id_qt` int(3) NOT NULL,
  `luotdoc` int(6) NOT NULL,
  `is_activepost` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_post`, `tenpost`, `mota_post`, `chitiet_post`, `img_post`, `time_post`, `id_cat`, `id_qt`, `luotdoc`, `is_activepost`) VALUES
(1, 'Hướng dẫn sử dụng website GiaSuOnline', 'Hướng dẫn gia sư và phụ huynh cách sử dụng các chức năng cơ bản trong website GiaSuOnline như đăng ký, đăng nhập, tương tác giữa gia sư và phụ huynh,...', '<p>Ch&agrave;o mừng bạn đến với website GiaSuOnline. Sau đ&acirc;y t&ocirc;i xin hướng dẫn bạn sử dụng c&aacute;c chức năng của website.</p>\r\n\r\n<p>Khi bạn chưa đăng nhập, website sẽ hiện ra th&ocirc;ng b&aacute;o nhắc nhở bạn đăng nhập để sử dụng c&aacute;c chức năng của website. Tuy nhi&ecirc;n, bạn c&oacute; thể bỏ qua th&ocirc;ng b&aacute;o n&agrave;y, như vậy bạn chỉ c&oacute; thể đọc được c&aacute;c b&agrave;i viết từ website v&agrave; gửi li&ecirc;n hệ cho admin chứ chưa thể sử dụng c&aacute;c chức năng của webstie.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-1_zpshylok1ki.png" /></p>\r\n\r\n<h4><strong>HƯỚNG DẪN SỬ DỤNG ĐỐI VỚI KH&Aacute;CH</strong></h4>\r\n\r\n<p>Ở trang chủ, bạn c&oacute; thể đọc c&aacute;c b&agrave;i viết từ website, được hiển thị theo danh mục.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-10_zpsjtrf1upt.png" /></p>\r\n\r\n<p>Bạn c&oacute; thể k&iacute;ch v&agrave;o v&agrave; đọc nội dung c&aacute;c b&agrave;i viết v&agrave; c&oacute; thể để lại b&igrave;nh luận b&ecirc;n dưới.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-11_zpsub7cahc6.png"  /></p>\r\n\r\n<p>Nếu bạn chưa c&oacute; t&agrave;i khoản, bạn c&oacute; thể k&iacute;ch v&agrave;o n&uacute;t Đăng k&yacute; v&agrave; đăng k&yacute; t&agrave;i khoản. Nếu bạn l&agrave; gia sư, h&atilde;y k&iacute;ch v&agrave;o n&uacute;t gia sư, c&ograve;n nếu bạn l&agrave; phụ huynh th&igrave; l&agrave;m ngược lại.</p>\r\n\r\n<p>Bạn điền c&aacute;c th&ocirc;ng tin như trong h&igrave;nh dưới đ&acirc;y để đăng k&yacute;.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-2_zpsubaolydm.png" /></p>\r\n\r\n<p>Lưu &yacute;: Khi bạn đ&atilde; đăng k&yacute; th&agrave;nh c&ocirc;ng, bạn phải li&ecirc;n hệ với admin để nạp xu v&agrave;o t&agrave;i khoản. Khi t&agrave;i khoản của bạn phải tr&ecirc;n 10.000 xu th&igrave; phụ huynh mới c&oacute; thể t&igrave;m kiếm bạn được.</p>\r\n\r\n<h4><strong>HƯỚNG DẪN SỬ DỤNG ĐỐI VỚI GIA SƯ</strong></h4>\r\n\r\n<p>Sau khi bạn đăng nhập, bạn v&agrave;o k&iacute;ch v&agrave;o TRANG CỦA T&Ocirc;I, bạn sẽ được giao diện như h&igrave;nh vẽ dưới đ&acirc;y.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-3_zpsuke7xq1g.png" /></p>\r\n\r\n<p>Ở mục b&igrave;nh luận, sẽ hiện ra những b&igrave;nh luận m&agrave; phụ huynh đ&atilde; b&igrave;nh luận cho bạn, bạn chỉ c&oacute; thể xem chứ kh&ocirc;ng thể x&oacute;a được, v&igrave; GiaSuOnline muốn hiển thị tất cả c&aacute;c b&igrave;nh luận của phụ huynh để mang t&iacute;nh kh&aacute;ch quan.</p>\r\n\r\n<p>Bạn c&oacute; thể xem v&agrave; sửa lại c&aacute;c th&ocirc;ng tin của m&igrave;nh v&agrave; bạn nhớ k&iacute;ch chọn ĐĂNG K&Yacute; M&Ocirc;N nh&eacute;. V&igrave; gia sư t&igrave;m kiếm bạn qua c&aacute;c m&ocirc;n học đ&oacute; nh&eacute;!</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-4_zpsm27iwbvf.png" /></p>\r\n\r\n<p>Trong mục TH&Ocirc;NG B&Aacute;O, sẽ hiện ra t&agrave;i khoản v&agrave; danh s&aacute;ch những phụ huynh gửi lời mời đến bạn, cũng như những phụ huynh m&agrave; bạn đ&atilde; đồng &yacute; lời đề nghị của họ.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-5_zpskn3o88ux.png" /></p>\r\n\r\n<p>Bạn thể k&iacute;ch v&agrave;o n&uacute;t Gửi tin nhắn để tương t&aacute;c với những phụ huynh m&agrave; bạn đ&atilde; đồng &yacute;.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-6_zpsqb3xcpxy.png"  /></p>\r\n\r\n<h4><strong>HƯỚNG DẪN SỬ DỤNG ĐỐI VỚI PHỤ HUYNH</strong></h4>\r\n\r\n<p>Khi phụ huynh đ&atilde; đăng nhập v&agrave;o website, phụ huynh c&oacute; thể t&igrave;m kiếm gia sư ở ngay trang chủ.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-7_zpsqtretrg7.png" /></p>\r\n\r\n<p>Phụ huynh c&oacute; thể xem th&ocirc;ng tin của c&aacute;c gia sư hiện ra v&agrave; đọc c&aacute;c th&ocirc;ng tin cũng như c&aacute;c lời b&igrave;nh luận của c&aacute;c phụ huynh về gia sư n&agrave;y để c&oacute; thể lựa chọn gia sư một c&aacute;ch đ&uacute;ng đắn hơn.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-8_zps7utnjc0v.png" /></p>\r\n\r\n<p>Phụ huynh c&oacute; thể gửi lời đề nghị đến gia sư, v&agrave; khi được gia sư đồng &yacute;, phụ huynh c&oacute; thể like, dislike, b&igrave;nh luận v&agrave; đ&aacute;nh gi&aacute; gia sư theo số sao từ 1 đến 5.</p>\r\n\r\n<p>Phụ huynh cũng c&oacute; thể gửi tin nhắn đến gia sư.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://i65.photobucket.com/albums/h220/ThaiVanLoiDN/GiaSuOnlline/Untitled-9_zpsghco8fdz.png" /></p>\r\n\r\n<p>Mọi thắc mắc về website, phụ huynh v&agrave; gia sư c&oacute; thể gửi li&ecirc;n hệ tr&ecirc;n website hoặc gửi th&ocirc;ng qua admin website:</p>\r\n\r\n<p>Th&aacute;i Văn Lợi - Số điện thoại: 0169.8995.895 - Email: thaivanloidn@gmail.com</p>', 'baiviet-1480136335.png', 1480136335, 1, 1, 13, 1),
(44, 'Hiệu trưởng phải đánh giá chính xác học sinh ở lại lớp', 'Sở GD-ĐT TPHCM vừa có hướng dẫn về việc thực hiện Thông tư 22. Trong đó lưu ý vai trò của hiệu trưởng khi quyết định việc lên lớp hoặc ở lại lớp đối với học đã được hướng dẫn, giúp đỡ mà vẫn chưa đủ điều kiện hoàn thành chương trình.', '<p>Hướng dẫn của Sở nhấn mạnh đến ban gi&aacute;m hiệu, đội ngũ đến những điểm thay đổi cần lưu &yacute; của Th&ocirc;ng tư 22.</p>\n\n<p>Về nội dung đ&aacute;nh gi&aacute; thường xuy&ecirc;n gi&aacute;o vi&ecirc;n (GV) c&oacute; thể d&ugrave;ng lời n&oacute;i chỉ ra gi&uacute;p học sinh biết được chỗ đ&uacute;ng, chưa đ&uacute;ng v&agrave; c&aacute;ch sửa chữa; GV kh&ocirc;ng nhất thiết phải đ&aacute;nh gi&aacute; to&agrave;n bộ học sinh trong lớp m&agrave; c&oacute; thể tập trung v&agrave;o những học sinh đặc biệt.</p>\n\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\n<div><img alt="Khi thực hiện Thông tư 22, giáo viên không nhất thiết phải đánh giá toàn bộ học sinh trong lớp" id="img_16505" src="https://dantri4.vcmedia.vn/50f875d98f/2016/11/24/tt22-1479973803986.jpg" /></div>\n\n<div class="PhotoCMS_Caption">Khi thực hiện Th&ocirc;ng tư 22, gi&aacute;o vi&ecirc;n kh&ocirc;ng nhất thiết phải đ&aacute;nh gi&aacute; to&agrave;n bộ học sinh trong lớp</div>\n</div>\n\n<p>&nbsp;</p>\n\n<p>Nội dung đ&aacute;nh gi&aacute; định kỳ về học tập sẽ theo 3 mức Ho&agrave;n th&agrave;nh tốt/Ho&agrave;n th&agrave;nh/Chưa ho&agrave;n th&agrave;nh; về năng lực phẩm chất theo 3 mức Tốt/Đạt/Cần cố gắng</p>\n\n<p>GV cần th&ocirc;ng b&aacute;o ri&ecirc;ng cho cha mẹ học sinh về kết quả đ&aacute;nh gi&aacute; qu&aacute; tr&igrave;nh học tập, r&egrave;n luyện của mỗi học sinh; kh&ocirc;ng c&ocirc;ng bố kết quả của từng học sinh trước lớp v&agrave; so s&aacute;nh em n&agrave;y với em kh&aacute;c.</p>\n\n<p>Theo điều 18 khoản 2 của Th&ocirc;ng tư 22 th&igrave; hiệu trưởng sẽ chỉ đạo tổ chuy&ecirc;n m&ocirc;n ra đề kiểm tra định kỳ. C&aacute;c đợt kiểm tra c&ograve;n lại của c&aacute;c khối lớp c&ugrave;ng c&aacute;c nội dung như tổ chức, chấm b&agrave;i, b&agrave;n giao kết quả&hellip;sẽ do Ph&ograve;ng GD-ĐT quyết định hướng dẫn hiệu trưởng.</p>\n\n<p>Tuy nhi&ecirc;n, &ocirc;ng Nguyễn Văn Hiếu, Ph&oacute; GĐ Sở GD-ĐT TPHCM cho hay để c&oacute; sự thống nhất trong qu&aacute; tr&igrave;nh triển khai thực hiện, đồng thời đảm bảo kh&aacute;ch quan, chất lượng của đề kiểm tra, Sở khuyến nghị c&aacute;c trường giao GV chủ nhiệm soạn đề, sau đ&oacute; nộp về cho tổ chuy&ecirc;n m&ocirc;n. Tổ sẽ chọn lọc đề gửi ban gi&aacute;m hiệu duyệt để l&agrave;m đề thi cho khối.</p>\n\n<p>Đối với nội dung x&eacute;t ho&agrave;n th&agrave;nh chương tr&igrave;nh lớp học, l&atilde;nh đạo Sở GD-ĐT TPHCM đề nghị hiệu trưởng cần hết sức ch&iacute;nh x&aacute;c v&agrave; tr&aacute;ch nhiệm khi quyết định quyết định việc l&ecirc;n lớp hoặc ở lại lớp đối với học đ&atilde; được hướng dẫn, gi&uacute;p đỡ m&agrave; vẫn chưa đủ điều kiện ho&agrave;n th&agrave;nh chương tr&igrave;nh.</p>\n\n<p>Đối với việc ghi học bạ theo mẫu quy định của Th&ocirc;ng tư 22, Sở GD-ĐT TPHCM lưu &yacute; c&aacute;c trường kh&ocirc;ng bắt buộc học sinh sử dụng học bạ theo mẫu mới, chỉ sử dụng học bạ mẫu mới đối với học sinh mới nhập học. Sở cũng đưa ra những chỉnh sửa khi sử dụng học bạ mẫu cũ để đ&aacute;nh gi&aacute; theo một số thay đổi của Th&ocirc;ng tư.</p>\n\n<p>Trước đ&oacute;, v&agrave;o ng&agrave;y 15/11, Sở GD-ĐT TPHCM cũng đ&atilde; tổ chức tập huấn cho đội ngũ quản l&yacute;, gi&aacute;o vi&ecirc;n về việc thực hiện Th&ocirc;ng tư 22 của Bộ GD-ĐT.</p>\n\n<p style="text-align:right"><strong>Ho&agrave;i Nam - D&acirc;n Tr&iacute;</strong></p>\n', 'baiviet-1479983238.png', 1479982751, 2, 3, 11, 1),
(45, 'Cậu bé Google Phan Đăng Nhật Minh: Không học thêm, tự học ở nhà', 'Phan Đăng Nhật Minh từng được gọi là “Cậu bé Google” khi có khả năng đưa ra câu trả lời chính xác ngay sau câu hỏi ở nhiều lĩnh vực mà không cần nhiều thời gian suy nghĩ ở cuộc thi “Chinh phục” cách đây 2 năm. ', '<p>Nhật Minh đặc biệt khiến người xem phải trầm trồ ở khả năng t&iacute;nh to&aacute;n, t&iacute;nh nhẩm. Đặc biệt, ở cuộc thi đ&oacute;, Nhật Minh đ&atilde; từng vượt qua Hồ Đắc Thanh Chương - qu&aacute;n qu&acirc;n Đường l&ecirc;n đỉnh Olympia năm thứ 16 vừa qua.</p>\n\n<p>Mới đ&acirc;y, em tiếp tục g&acirc;y ấn tượng ở cuộc thi Đường l&ecirc;n đỉnh Olympia năm thứ 17 khi li&ecirc;n tiếp x&ocirc; đổ c&aacute;c kỷ lục về điểm số của chương tr&igrave;nh qua c&aacute;c v&ograve;ng thi tuần v&agrave; th&aacute;ng, trước khi gi&agrave;nh v&ograve;ng nguyệt quế cuộc thi qu&yacute; để mang cầu truyền h&igrave;nh chung kết về tỉnh Quảng Trị. Theo d&otilde;i Nhật Minh, nhiều người đ&aacute;nh gi&aacute; em sẽ l&agrave; ứng cử vi&ecirc;n nặng k&yacute; cho danh hiệu qu&aacute;n qu&acirc;n của cuộc thi Đường l&ecirc;n đỉnh Olympia năm nay.</p>\n\n<p>Tuy nhi&ecirc;n, ở ngo&agrave;i đời, Nhật Minh l&agrave; một ch&agrave;ng trai kh&aacute; kiệm lời v&agrave; &iacute;t cười, thậm ch&iacute; c&oacute; ch&uacute;t rụt r&egrave;.</p>\n\n<p>Chia sẻ với VietNamNet, c&ocirc; Trần Thị Thanh Minh, gi&aacute;o vi&ecirc;n chủ nhiệm của Nhật Minh cho biết, em kh&ocirc;ng chỉ l&agrave; một học sinh giỏi to&agrave;n diện m&agrave; c&ograve;n l&agrave; một lớp ph&oacute; học tập gương mẫu, ngoan hiền v&agrave; lễ ph&eacute;p.</p>\n\n<p>&ldquo;Nhật Minh học giỏi đều c&aacute;c m&ocirc;n tự nhi&ecirc;n đến x&atilde; hội, đặc biệt xuất sắc nhất l&agrave; 2 m&ocirc;n To&aacute;n v&agrave; H&oacute;a. Năm vừa rồi, em c&oacute; điểm tổng kết tr&ecirc;n 9 phẩy thuộc diện cao nhất trường. Nhật Minh kh&ocirc;ng chỉ học giỏi m&agrave; c&ograve;n rất chu đ&aacute;o, c&oacute; &yacute; thức học tập rất tốt v&agrave; lu&ocirc;n nhiệt t&igrave;nh trong c&aacute;c phong tr&agrave;o của lớp. Người mới gặp qua thấy Nhật Minh trầm lặng thường tưởng em l&agrave; một người lạnh l&ugrave;ng v&agrave; kh&oacute; gần nhưng thật ra nếu tiếp x&uacute;c l&acirc;u th&igrave; Minh l&agrave; một người sống rất t&igrave;nh cảm, dễ thương v&agrave; h&ograve;a đồng với c&aacute;c bạn. V&igrave; vậy hầu hết c&aacute;c thầy c&ocirc; v&agrave; học sinh trong trường đều qu&yacute; mến Nhật Minh&rdquo;, c&ocirc; Minh n&oacute;i.</p>\n\n<p>Với vốn hiểu biết ở rất nhiều lĩnh vực, nhiều người nghĩ rằng Nhật Minh sẽ phải d&agrave;nh rất nhiều thời gian cho việc học nhưng thực tế sau giờ học tr&ecirc;n lớp, mỗi ng&agrave;y em chỉ d&agrave;nh khoảng hơn một tiếng đồng hồ cho việc học. Hầu hết c&aacute;c b&agrave;i tập em cố gắng xử l&yacute; lu&ocirc;n ngay tại lớp. Thời gian rảnh em thường nghe nhạc, đọc s&aacute;ch khoa học v&agrave; l&ecirc;n mạng t&igrave;m hiểu th&ecirc;m những kiến thức x&atilde; hội,...</p>\n\n<p>Bản th&acirc;n Nhật Minh kh&ocirc;ng muốn chỉ c&oacute; học v&agrave; dồn hết thời gian cho việc học, m&agrave; th&iacute;ch c&oacute; sự thoải m&aacute;i, c&acirc;n bằng giữa học v&agrave; vui chơi, giải tr&iacute;. Cũng v&igrave; vậy m&agrave; em từng quyết định kh&ocirc;ng thi v&agrave;o học ở c&aacute;c trường chuy&ecirc;n c&oacute; qu&aacute; nhiều &aacute;p lực về th&agrave;nh t&iacute;ch để chọn theo học dưới m&aacute;i trường THPT Hải Lăng. &ldquo;Ngo&agrave;i ra, em cũng muốn theo học Trường THPT Hải Lăng để thỏa ước mơ từ b&eacute; l&agrave; mang cầu truyền h&igrave;nh trực tiếp cuộc thi m&igrave;nh y&ecirc;u th&iacute;ch về với nơi em sinh ra v&agrave; lớn l&ecirc;n như l&agrave; một c&aacute;ch để trả nghĩa cho qu&ecirc; hương&rdquo;, Nhật Minh n&oacute;i.</p>\n\n<p>C&ocirc; Minh chia sẻ: &ldquo;Nhật Minh kh&ocirc;ng đi học th&ecirc;m ngo&agrave;i m&agrave; chỉ tự học, tự t&igrave;m t&ograve;i. Th&ocirc;ng minh l&agrave; bẩm sinh nhưng Nhật Minh cũng rất chăm học. C&oacute; thể n&oacute;i thời gian học của em kh&ocirc;ng nhiều như c&aacute;c bạn nhưng khi học th&igrave; em tập trung cao độ. Đặc biệt, Minh rất khi&ecirc;m tốn, lu&ocirc;n cố gắng v&agrave; l&agrave; một người kh&ocirc;ng bao giờ thỏa m&atilde;n với những g&igrave; m&igrave;nh đ&atilde; đạt được&rdquo;.</p>\n\n<div class="VCSortableInPreviewMode">\n<div><img alt="Nhật Minh và cô giáo tại cuộc thi." src="https://dantri4.vcmedia.vn/2016/photo-0-1479961937687.jpg" /></div>\n\n<div class="PhotoCMS_Caption">Nhật Minh v&agrave; c&ocirc; gi&aacute;o tại cuộc thi.</div>\n</div>\n\n<p>Hiện, Phan Đăng Nhật Minh đang vừa tập trung &ocirc;n luyện, củng cố kiến thức để chuẩn bị cho v&ograve;ng chung kết Olympia v&agrave;o th&aacute;ng 8/2017 vừa tham gia &ocirc;n luyện đội tuyển học sinh giỏi To&aacute;n cấp tỉnh. Ngo&agrave;i ra, em c&ograve;n l&agrave;m cố vấn th&ecirc;m cho c&aacute;c bạn đội tuyển của trường thi &ldquo;Chinh phục&rdquo; cấp tỉnh.</p>\n\n<p>&ldquo;Trường dự định cử Minh đi thi nhưng em từ chối v&agrave; n&oacute;i rằng trong trường c&ograve;n rất nhiều bạn kh&aacute;c học giỏi v&agrave; h&atilde;y để cơ hội cho c&aacute;c bạn được thử sức&rdquo;, c&ocirc; Minh chia sẻ.</p>\n\n<p>Thầy Nguyễn Khoa Xưng, Hiệu trưởng Trường THPT Hải Lăng chia sẻ:</p>\n\n<p>&ldquo;Ch&uacute;ng t&ocirc;i rất vui mừng v&agrave; vinh dự khi c&oacute; học sinh mang về cầu truyền h&igrave;nh trận chung kết năm <em> Đường l&ecirc;n đỉnh Olympia </em> về với Trường THPT Hải Lăng. C&oacute; lẽ niềm vui n&agrave;y kh&ocirc;ng chỉ với ri&ecirc;ng thầy tr&ograve; nh&agrave; trường m&agrave; c&ograve;n của nh&acirc;n d&acirc;n địa phương v&agrave; cả tỉnh Quảng Trị&quot;.</p>\n\n<p style="text-align:right">Theo <strong>Thanh H&ugrave;ng</strong></p>', 'baiviet-1479983434.jpg', 1479983434, 2, 2, 11, 1),
(46, 'Đại học định hướng doanh nghiệp: Cạnh tranh khắc nghiệt trên sân nhà', 'Cũng giống như những gì diễn ra trên thế giới, giáo dục đại học Việt Nam đang phải đối mặt với nguy cơ bị cạnh tranh trên sân nhà, khi ngày càng có nhiều tập đoàn, doanh nghiệp phát triển các cơ sở đào tạo nhân lực bậc cao, không chỉ để phục vụ cho nhu cầu của riêng mình mà còn đáp ứng đòi hỏi của xã hội.', '<p><em>Cũng giống như những g&igrave; diễn ra tr&ecirc;n thế giới, gi&aacute;o dục đại học Việt Nam đang phải đối mặt với nguy cơ bị cạnh tranh tr&ecirc;n s&acirc;n nh&agrave;, khi ng&agrave;y c&agrave;ng c&oacute; nhiều tập đo&agrave;n, doanh nghiệp ph&aacute;t triển c&aacute;c cơ sở đ&agrave;o tạo nh&acirc;n lực bậc cao, kh&ocirc;ng chỉ để phục vụ cho nhu cầu của ri&ecirc;ng m&igrave;nh m&agrave; c&ograve;n đ&aacute;p ứng đ&ograve;i hỏi của x&atilde; hội.</em></p>\r\n\r\n<div class="fon34 mt3 mr2 fon43 detail-content" id="divNewsContent">\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="\r\nSinh viên trường ĐH FPT trong lễ tốt nghiệp (ảnh: minh họa)\r\n" id="img_62455e20-b11d-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/sinh-vien-tot-nghiep-1479865042343.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Sinh vi&ecirc;n trường ĐH FPT trong lễ tốt nghiệp (ảnh: minh họa)</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3 giai đoạn ph&aacute;t triển trường đại học theo m&ocirc; h&igrave;nh doanh nghiệp</strong></p>\r\n\r\n<p>Qu&aacute; tr&igrave;nh chuyển dịch trường đại học từ m&ocirc; h&igrave;nh truyền thống chỉ coi trọng nghi&ecirc;n cứu khoa học v&agrave; giảng dạy, sang m&ocirc; h&igrave;nh trường đại học định hướng doanh nghiệp t&iacute;ch hợp th&ecirc;m nhiệm vụ tạo ra lợi &iacute;ch kinh tế, c&oacute; thể trải qua nhiều mức độ với thời gian d&agrave;i, ngắn kh&aacute;c nhau, phụ thuộc v&agrave;o bối cảnh từng quốc gia v&agrave; đặc điểm ri&ecirc;ng của mỗi tổ chức. Theo Etzkowitz (2015), qu&aacute; tr&igrave;nh n&agrave;y gồm ba giai đoạn:</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_b88e8f50-b11c-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/screen-shot-2016-11-22-at-9-42-48-pm-1479864758631.png" /></div>\r\n</div>\r\n\r\n<p style="text-align:right">Nguồn: Etzkowitz (2015)</p>\r\n\r\n<p>Qu&aacute; tr&igrave;nh n&agrave;y bao gồm nhiều hoạt động cụ thể, v&iacute; dụ như h&igrave;nh th&agrave;nh đơn vị, bộ phận mới c&oacute; chức năng thương mại h&oacute;a t&agrave;i sản tri thức, tiến h&agrave;nh đăng k&yacute; bản quyền v&agrave; cấp ph&eacute;p khai th&aacute;c bằng s&aacute;ng chế, thiết lập c&aacute;c vườn ươm &yacute; tưởng, ph&aacute;t triển c&aacute;c dự &aacute;n kinh doanh ngay trong trường đại học, đầu tư cho c&aacute;c dự &aacute;n khởi nghiệp (spin-off). Philpott v&agrave; cộng sự (2011) cho rằng xu hướng ph&aacute;t triển theo định hướng doanh nghiệp của c&aacute;c trường đại học c&oacute; thể được phản &aacute;nh th&ocirc;ng qua mức độ trường tham gia trực tiếp v&agrave;o việc tạo ra c&aacute;c gi&aacute; trị kinh tế.</p>\r\n\r\n<p>Chuỗi c&aacute;c hoạt động định hướng doanh nghiệp trong trường đại học</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_02807600-b11d-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/screen-shot-2016-11-23-at-6-03-20-am-1479864882251.png" /></div>\r\n</div>\r\n\r\n<p style="text-align:right"><em>Nguồn: Philpott v&agrave; cộng sự (2011)</em></p>\r\n\r\n<p>C&oacute; thể thấy trong m&ocirc; h&igrave;nh trường đại học truyền thống, ho&agrave;n th&agrave;nh nhiệm vụ đ&agrave;o tạo những sinh vi&ecirc;n xuất sắc v&agrave; c&ocirc;ng bố nhiều kết quả nghi&ecirc;n cứu khoa học đ&atilde; được coi l&agrave; l&agrave;m tr&ograve;n sứ mệnh.</p>\r\n\r\n<p>C&ograve;n trong m&ocirc; h&igrave;nh trường đại học theo m&ocirc; h&igrave;nh doanh nghiệp, nh&agrave; trường cần đẩy cao hơn sự chủ động v&agrave; đ&oacute;ng g&oacute;p của m&igrave;nh v&agrave;o x&atilde; hội, bằng việc đưa những sản phẩm tri thức m&igrave;nh tạo ra gần hơn nữa với nhu cầu thực tiễn v&agrave; th&uacute;c đẩy nhanh ch&oacute;ng khả năng ứng dụng của những sản phẩm đ&oacute;.</p>\r\n\r\n<p>Việc triển khai c&aacute;c hoạt động hướng tới một sự x&iacute;ch lại gần hơn c&aacute;c gi&aacute; trị kinh tế n&agrave;y tại c&aacute;c trường đại học đ&ograve;i hỏi phải c&oacute; thời gian, phải được hậu thuẫn bởi một văn h&oacute;a nội bộ thuận lợi, cũng như phải dựa tr&ecirc;n những năng lực nội tại ph&ugrave; hợp.</p>\r\n\r\n<p>Qu&aacute; tr&igrave;nh n&agrave;y cũng phải đối diện với những phản ứng tiềm t&agrave;ng trong m&ocirc;i trường tổ chức, xuất ph&aacute;t từ những quan điểm tr&aacute;i chiều về việc lựa chọn đi theo m&ocirc; h&igrave;nh định hướng doanh nghiệp (Philpott v&agrave; cộng sự, 2011).</p>\r\n\r\n<p>Một số nghi&ecirc;n cứu cũng chỉ ra rằng qu&aacute; tr&igrave;nh n&agrave;y c&oacute; thể gặp phải những lực cản kh&aacute;ch quan v&agrave; chủ quan, chẳng hạn những r&agrave;ng buộc về quy định, ch&iacute;nh s&aacute;ch vĩ m&ocirc; hay sự phản đối từ b&ecirc;n trong trường đại học trước những thay đổi cấu tr&uacute;c tổ chức khi cố gắng kết nối c&aacute;c gi&aacute; trị h&agrave;n l&acirc;m học thuật với c&aacute;c gi&aacute; trị kinh tế (Jacob v&agrave; cộng sự, 2003).</p>\r\n\r\n<p><strong>Kinh nghiệm ph&aacute;t triển trường đại học theo m&ocirc; h&igrave;nh doanh nghiệp tr&ecirc;n thế giới</strong></p>\r\n\r\n<p>Mỹ được coi l&agrave; quốc gia đi đầu trong việc giảng vi&ecirc;n tại nhiều trường đại học kết hợp th&agrave;nh c&ocirc;ng nhiệm vụ &ldquo;truyền thống&rdquo; nghi&ecirc;n cứu khoa học v&agrave; giảng dạy với tạo ra gi&aacute; trị gia tăng về kinh tế v&agrave; kinh doanh, tương tự như thế hệ đi trước của họ từ thế kỷ thứ 19 cũng l&agrave; những người đ&atilde; ti&ecirc;n phong t&iacute;ch hợp được sứ mệnh giảng dạy v&agrave; truyền thụ tri thức với nghi&ecirc;n cứu khoa học tạo ra tri thức mới (Etzkowitz v&agrave; cộng sự, 2008).</p>\r\n\r\n<p>Tại Mỹ c&aacute;c trường đại học được trao quyền độc lập v&agrave; tự chủ tương đối cao ngay từ những năm đầu thế kỷ 19. Tư tưởng coi trọng tự do cạnh tranh cũng l&agrave; động lực th&uacute;c đẩy c&aacute;c trường đại học t&iacute;ch cực chuyển m&igrave;nh theo định hướng doanh nghiệp.</p>\r\n\r\n<p>Từ những nỗ lực đầu ti&ecirc;n tập trung v&agrave;o t&igrave;m kiếm nguồn t&agrave;i ch&iacute;nh phục vụ nghi&ecirc;n cứu, c&aacute;c hoạt động mang t&iacute;nh định hướng doanh nghiệp mở rộng sang thương mại h&oacute;a c&aacute;c sản phẩm khoa học th&ocirc;ng qua đăng k&yacute; sở hữu bản quyền ph&aacute;t minh s&aacute;ng chế, cấp ph&eacute;p khai th&aacute;c, th&agrave;nh lập doanh nghiệp, v&agrave; lan ra tại hầu hết c&aacute;c trường đại học nghi&ecirc;n cứu.</p>\r\n\r\n<p>Năm 1969, Đại học Stanford đi đầu trong việc th&agrave;nh lập Văn ph&ograve;ng Cấp ph&eacute;p C&ocirc;ng nghệ (Office of Technology Licensing (OTL)), với nhiệm vụ t&igrave;m kiếm kh&aacute;ch h&agrave;ng v&agrave; đ&agrave;m ph&aacute;n c&aacute;c hợp đồng cấp ph&eacute;p. M&ocirc; h&igrave;nh chuyển giao c&ocirc;ng nghệ mang t&iacute;nh marketing ti&ecirc;n phong n&agrave;y đ&atilde; gặt h&aacute;i nhiều th&agrave;nh c&ocirc;ng v&agrave; mang lại nguồn thu nhập đ&aacute;ng kể cho trường.</p>\r\n\r\n<p>M&ocirc; h&igrave;nh n&agrave;y tiếp tục được &aacute;p dụng tại Đại học MIT, v&agrave; sau đ&oacute; lan rộng tới to&agrave;n bộ hệ thống c&aacute;c trường đại học c&oacute; hoạt động nghi&ecirc;n cứu khoa học tại Mỹ. C&aacute;c quy định ph&aacute;p luật tại Mỹ (Đạo luật Bayh&ndash;Dole năm 1980) cũng g&oacute;p phần định h&igrave;nh mối quan hệ trường đại học v&agrave; doanh nghiệp theo hướng n&agrave;y. C&aacute;c nh&agrave; khoa học - giảng vi&ecirc;n được đảm bảo lợi &iacute;ch thu được từ khai th&aacute;c bản quyền s&aacute;ng chế của m&igrave;nh, thậm ch&iacute; được khuyến kh&iacute;ch nghỉ l&agrave;m để th&agrave;nh lập doanh nghiệp (Etzkowitz, 2015).</p>\r\n\r\n<p>Singapore l&agrave; quốc gia lựa chọn chiến lược tăng trưởng dựa v&agrave;o tri thức. C&aacute;c trường đại học tại đ&acirc;y được trao trọng tr&aacute;ch th&uacute;c đẩy tăng trưởng kinh tế th&ocirc;ng qua hoạt động nghi&ecirc;n cứu gắn với nhu cầu doanh nghiệp, thương mại h&oacute;a c&ocirc;ng nghệ, th&agrave;nh lập doanh nghiệp c&ocirc;ng nghệ trong trường đại học, thu h&uacute;t nh&acirc;n t&agrave;i từ nước ngo&agrave;i, v&agrave; lan tỏa tinh thần doanh nh&acirc;n trong trường đại học.</p>\r\n\r\n<p>Tại Đại học Quốc gia Singapore (NUS), NUS Enterprise l&agrave; một đơn vị trực thuộc trường với tổng gi&aacute;m đốc c&oacute; vị tr&iacute; ngang bằng với c&aacute;c ph&oacute; hiệu trưởng. Đơn vị n&agrave;y c&oacute; sứ mệnh th&uacute;c đẩy tinh thần kinh doanh trong c&aacute;c hoạt động giảng dạy v&agrave; nghi&ecirc;n cứu to&agrave;n trường, đồng thời li&ecirc;n hệ v&agrave; th&uacute;c đẩy hợp t&aacute;c với giới kinh doanh th&ocirc;ng qua ph&ograve;ng Quan hệ Doanh nghiệp (Industry Liaison Office).</p>\r\n\r\n<p>Một số hoạt động cụ thể đơn vị n&agrave;y triển khai gồm c&oacute; hỗ trợ ph&aacute;t triển c&aacute;c dự &aacute;n khởi nghiệp, g&acirc;y quỹ, kết nối mạng lưới c&aacute;c nh&agrave; đầu tư v&agrave; cố vấn cho c&aacute;c dự &aacute;n doanh nghiệp c&ocirc;ng nghệ của giảng vi&ecirc;n, sinh vi&ecirc;n v&agrave; cựu học vi&ecirc;n, x&uacute;c tiến c&aacute;c thỏa thuận cấp ph&eacute;p v&agrave; chuyển giao c&ocirc;ng nghệ, ph&aacute;t triển c&aacute;c nội dung đ&agrave;o tạo về khởi sự kinh doanh trong c&aacute;c chương tr&igrave;nh đ&agrave;o tạo khối kỹ thuật (Wong, 2007).</p>\r\n\r\n<p>C&aacute;c b&agrave;i học kinh nghiệm từ Đại học Quốc gia Singapore trong việc ph&aacute;t triển th&agrave;nh c&ocirc;ng đại học theo m&ocirc; h&igrave;nh doanh nghiệp tại trường gồm c&oacute;:</p>\r\n\r\n<p>- C&oacute; sự thống nhất v&agrave; qu&aacute;n triệt tại c&aacute;c cấp l&atilde;nh đạo cao nhất;</p>\r\n\r\n<p>- C&oacute; sự cam kết d&agrave;i hạn về nguồn lực v&agrave; đổi mới tổ chức;</p>\r\n\r\n<p>- Tuyển dụng những nh&acirc;n sự xuất sắc để dẫn dắt sự thay đổi;</p>\r\n\r\n<p>- So s&aacute;nh, học hỏi v&agrave; &aacute;p dụng những kinh nghiệm quốc tế tốt nhất;</p>\r\n\r\n<p>- Đưa ra bằng chứng cụ thể về kết quả đạt được để thuyết phục v&agrave; chinh phục sự ủng hộ của cộng đồng c&aacute;c nh&agrave; khoa học v&agrave; giảng vi&ecirc;n to&agrave;n trường;</p>\r\n\r\n<p>- Li&ecirc;n tục vận động để theo kịp những thay đổi từ m&ocirc;i trường.</p>\r\n\r\n<p style="text-align:right"><em>Nguồn: Wong (2007)</em></p>\r\n\r\n<p>Năm 2012, OECD kết hợp với Ủy ban Ch&acirc;u &Acirc;u về Văn h&oacute;a v&agrave; Gi&aacute;o dục x&acirc;y dựng v&agrave; c&ocirc;ng bố một Khung tham chiếu về m&ocirc; h&igrave;nh trường đại học định hướng doanh nghiệp (OECD v&agrave; European Commission&rsquo;s DG Education and Culture, 2012). Mục ti&ecirc;u của Khung tham chiếu l&agrave; hỗ trợ c&aacute;c trường đại học trong khối Li&ecirc;n minh Ch&acirc;u &Acirc;u thực hiện tự đ&aacute;nh gi&aacute; m&igrave;nh v&agrave; đổi mới hướng đến m&ocirc; h&igrave;nh đại học doanh nghiệp. Dựa tr&ecirc;n kết quả của nghi&ecirc;n cứu n&agrave;y, c&aacute;c nh&acirc;n tố c&oacute; li&ecirc;n quan v&agrave; chi phối đến xu hướng trường đại học vận động theo định hướng doanh nghiệp bao gồm:</p>\r\n\r\n<p>&bull; L&atilde;nh đạo v&agrave; quản l&yacute;;</p>\r\n\r\n<p>&bull; Năng lực tổ chức, con người v&agrave; biện ph&aacute;p khuyến kh&iacute;ch;</p>\r\n\r\n<p>&bull; Nỗ lực ph&aacute;t triển tinh thần doanh nghiệp trong giảng dạy v&agrave; học tập;</p>\r\n\r\n<p>&bull; C&oacute; cơ chế khuyến kh&iacute;ch v&agrave; hỗ trợ c&aacute;c c&aacute; nh&acirc;n c&oacute; tố chất khởi nghiệp (entrepreneurs);</p>\r\n\r\n<p>&bull; Mối quan hệ giữa trường đại học với doanh nghiệp v&agrave; đối t&aacute;c b&ecirc;n ngo&agrave;i trong trao đổi tri thức;</p>\r\n\r\n<p>&bull; Mức độ quốc tế h&oacute;a của trường;</p>\r\n\r\n<p>&bull; Kết quả cụ thể tạo ra từ m&ocirc; h&igrave;nh trường đại học định hướng doanh nghiệp.</p>\r\n\r\n<p><strong>Cạnh tranh tr&ecirc;n s&acirc;n nh&agrave;</strong></p>\r\n\r\n<p>Cũng giống như những g&igrave; diễn ra tr&ecirc;n thế giới, gi&aacute;o dục đại học Việt Nam n&oacute;i chung, v&agrave; Trường Đại học Kinh tế Quốc d&acirc;n n&oacute;i ri&ecirc;ng, đang phải đối mặt với nguy cơ bị cạnh tranh tr&ecirc;n s&acirc;n nh&agrave;, khi ng&agrave;y c&agrave;ng c&oacute; nhiều tập đo&agrave;n, doanh nghiệp ph&aacute;t triển c&aacute;c cơ sở đ&agrave;o tạo nh&acirc;n lực bậc cao, kh&ocirc;ng chỉ để phục vụ cho nhu cầu của ri&ecirc;ng m&igrave;nh m&agrave; c&ograve;n đ&aacute;p ứng đ&ograve;i hỏi của x&atilde; hội.</p>\r\n\r\n<p>Trường Đại học FPT thuộc tập đo&agrave;n FPT th&agrave;nh lập năm 2006, Đại học T&acirc;n Tạo thuộc Tập đo&agrave;n T&acirc;n Tạo v&agrave; Đại học Dầu kh&iacute; thuộc Tập đo&agrave;n Dầu kh&iacute; c&ugrave;ng th&agrave;nh lập năm 2010, l&agrave; một số v&iacute; dụ về sự lấn s&acirc;n của giới doanh nghiệp sang mảng nghi&ecirc;n cứu ph&aacute;t triển khoa học v&agrave; truyền thụ tri thức.</p>\r\n\r\n<p>Gần đ&acirc;y Vingroup cũng đ&atilde; c&ocirc;ng bố rộng r&atilde;i tham vọng th&agrave;nh lập trường đại học đẳng cấp quốc tế trong một tương lai gần.</p>\r\n\r\n<p>Lĩnh vực thế mạnh của Trường Đại học Kinh tế Quốc d&acirc;n l&agrave; kinh tế, quản l&yacute; v&agrave; quản trị kinh doanh dường như lại l&agrave; mảnh đất &ldquo;mầu mỡ&rdquo; v&agrave; &iacute;t r&agrave;o cản gia nhập, thu h&uacute;t đ&ocirc;ng đảo c&aacute;c đơn vị tham gia cung cấp dịch vụ đ&agrave;o tạo. Những điều n&agrave;y l&agrave;m gia tăng sức &eacute;p tới c&aacute;c trường đại học thuộc c&ugrave;ng khối ng&agrave;nh trong cuộc đua bảo vệ vai tr&ograve; l&agrave; c&aacute;nh cửa chắc chắn dẫn tới tương lai nghề nghiệp.</p>\r\n\r\n<p>Chủ động mở rộng kết nối hoạt động nghi&ecirc;n cứu v&agrave; đ&agrave;o tạo gắn với giới doanh nghiệp, thay v&igrave; chờ đợi doanh nghiệp t&igrave;m đến đặt h&agrave;ng m&igrave;nh, ch&iacute;nh l&agrave; hướng đi cần thiết để gi&aacute;o dục đại học n&oacute;i chung v&agrave; Trường đại học Kinh tế Quốc d&acirc;n vươn l&ecirc;n nắm bắt c&aacute;c cơ hội ph&aacute;t triển v&agrave; khẳng định được chỗ đứng.</p>\r\n\r\n<p>Song song với điều n&agrave;y, c&aacute;c trường đại học quốc tế ng&agrave;y c&agrave;ng mở rộng hoạt động v&agrave; t&igrave;m đến c&aacute;c nước kinh tế đang ph&aacute;t triển như Việt Nam.</p>\r\n\r\n<p>Thị trường gi&aacute;o dục đại học trong nước đ&atilde; v&agrave; đang bị c&aacute;c đối thủ năng động hơn từ khắp nơi tr&ecirc;n thế giới đến tiếp cận v&agrave; khai th&aacute;c. Thực tế điều n&agrave;y đ&atilde; xảy ra: số sinh vi&ecirc;n Việt Nam đi du học tăng từ 47.000 năm 2010 l&ecirc;n tới 130.000 năm 2015, với tổng chi ước t&iacute;nh 1.5 tỉ USD/năm (Phạm Hiệp, 2016).</p>\r\n\r\n<p>Số lượng sinh vi&ecirc;n theo học c&aacute;c chương tr&igrave;nh li&ecirc;n kết quốc tế ngay trong nước ng&agrave;y c&agrave;ng tăng cao cũng cho thấy xu hướng cạnh tranh mới trong gi&aacute;o dục đại học. B&ecirc;n cạnh đ&oacute;, c&oacute; những th&ocirc;ng tin nhiều chiều về t&igrave;nh trạng sinh vi&ecirc;n tốt nghiệp c&aacute;c trường đại học kh&ocirc;ng đ&aacute;p ứng được y&ecirc;u cầu của thị trường lao động, cũng như kh&oacute; khăn t&igrave;m được việc l&agrave;m ph&ugrave; hợp với chuy&ecirc;n m&ocirc;n đ&agrave;o tạo.</p>\r\n\r\n<p>Cuối c&ugrave;ng, tiến tr&igrave;nh x&atilde; hội h&oacute;a v&agrave; tăng cường tự chủ trong c&aacute;c trường đại học tại Việt Nam đang được đẩy mạnh. Cũng như c&aacute;c trường đại học nằm trong tốp đi đầu, Trường Đại học Kinh tế Quốc d&acirc;n đứng trước cơ hội v&agrave; đồng thời l&agrave; th&aacute;ch thức lựa chọn m&ocirc; h&igrave;nh v&agrave; hướng đi cho m&igrave;nh.</p>\r\n\r\n<p>Sức &eacute;p cạnh tranh v&agrave; đ&ograve;i hỏi tồn tại trước mắt buộc Nh&agrave; trường cần b&aacute;m s&aacute;t những nhu cầu hiện tại của x&atilde; hội, đặc biệt l&agrave; của c&aacute;c doanh nghiệp v&agrave; nền kinh tế. B&ecirc;n cạnh đ&oacute;, mục ti&ecirc;u trở th&agrave;nh trường đại học nghi&ecirc;n cứu, hướng ph&aacute;t triển chiến lược m&agrave; nh&agrave; trường đ&atilde; lựa chọn cho tương lai của m&igrave;nh, cũng l&agrave; một th&aacute;ch thức kh&ocirc;ng dễ thực hiện.</p>\r\n\r\n<p style="text-align:right"><strong>GS.TS Trần Thọ Đạt, Tiến sĩ Do&atilde;n Ho&agrave;ng Minh - trường ĐH Kinh tế quốc d&acirc;n</strong></p>\r\n</div>\r\n', 'baiviet-1479995467.jpg', 1479995314, 2, 1, 25, 1),
(47, 'Sinh viên mồ côi quyết học giỏi để thay đổi số phận của mình', 'Mới học lớp 5, mẹ đột ngột qua đời, sau đó cha lấy vợ khác bỏ lại Duy ở nhà một mình. Sống thiếu thốn trong căn nhà rách nát nhưng Duy vẫn quyết tâm đến lớp và thi đỗ vào Trường Đại học Trà Vinh với điểm số cao khiến nhiều người khâm phục. ', '<p><strong>&quot;Tuổi thơ dữ dội&quot;</strong></p>\r\n\r\n<p>Nguyễn Kh&aacute;nh Duy, SN 1997 (ngụ ấp Đại Đức, x&atilde; Đức Mỹ, huyện C&agrave;ng Long, tỉnh Tr&agrave; Vinh) trải qua một tuổi thơ dữ dội khi phải sống một m&igrave;nh trong căn nh&agrave; r&aacute;ch n&aacute;t, thiếu ăn, thiếu mặc. Duy kể lại: &ldquo;Năm em học lớp 5 th&igrave; mẹ mất v&igrave; bệnh tim, sau đ&oacute; cha lấy vợ kh&aacute;c rồi b&aacute;n gần hết ruộng đất v&agrave; bỏ xứ đi biền biệt kh&ocirc;ng về nh&agrave;. Đến năm lớp 7 th&igrave; em phải ở nh&agrave; một m&igrave;nh v&igrave; người anh cũng l&ecirc;n TP Hồ Ch&iacute; Minh l&agrave;m thu&ecirc; rồi lấy vợ, ở lu&ocirc;n tr&ecirc;n đ&oacute;&rdquo;.</p>\r\n\r\n<p>Khi Duy mới hơn chục tuổi đầu, hai người th&acirc;n nhất của em đều bỏ đi kh&ocirc;ng tin tức g&igrave; n&ecirc;n một m&igrave;nh em phải sống trong căn nh&agrave; r&aacute;ch n&aacute;t v&agrave; tự bươn chải để lo cho cuộc sống. May nhờ p</p>\r\n\r\n<p>h&iacute;a sau nh&agrave; c&ograve;n hơn chục gốc dừa n&ecirc;n gi&uacute;p em đắp đổi qua ng&agrave;y. Mỗi ng&agrave;y, sau khi đi học về Duy phải tự ra vườn c&acirc;u c&aacute;, bắt ốc để kiếm c&aacute;i ăn. Nhiều l&uacute;c đến trường m&agrave; bụng đ&oacute;i meo nhưng em vẫn đi học để thay đổi cuộc đời m&igrave;nh.</p>\r\n\r\n<p>C&ocirc; Tr&agrave; Thanh Hằng, gi&aacute;o vi&ecirc;n chủ nhiệm Duy năm lớp 10, Trường THPT B&ugrave;i Hữu Nghĩa (C&agrave;ng Long, Tr&agrave; Vinh) kể lại: &ldquo;Năm t&ocirc;i chủ nhiệm Duy, t&igrave;nh cờ nh&oacute;m học sinh học lớp 11 đi ngang qua nh&agrave; Duy bị mắc mưa n&ecirc;n chạy v&agrave;o tr&uacute; tạm. Qua đ&oacute; mấy em n&agrave;y mới biết cuộc sống của Duy khốn khổ n&ecirc;n viết thư b&aacute;o tin cho t&ocirc;i hay. Biết được ho&agrave;n cảnh của Duy n&ecirc;n t&ocirc;i vận động thầy c&ocirc;, học sinh trong trường g&uacute;p đỡ để em tiếp tục đi học&rdquo;. Từ đ&oacute;, thầy c&ocirc; trong trường gom g&oacute;p lại mua gạo, nhu yếu phẩm gi&uacute;p Duy c&oacute; c&aacute;i ăn. Những năm học sau Duy đều được thầy c&ocirc; đ&oacute;ng học ph&iacute;, miễn tiền học phụ đạo&hellip; Nhờ vậy, Duy mới tiếp tục được đến trường.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Căn nhà rách nát là nơi trú ngụ của Duy suốt thời gian học phổ thông." id="img_469415" src="https://dantri4.vcmedia.vn/30ca14d739/2016/10/17/1-1476691009382.JPG" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>Căn nh&agrave; r&aacute;ch n&aacute;t l&agrave; nơi tr&uacute; ngụ của Duy suốt thời gian học phổ th&ocirc;ng.</em></div>\r\n</div>\r\n\r\n<p>Năm học lớp 11, Duy ph&aacute;t bệnh đau ruột thừa nhưng chỉ sống một m&igrave;nh n&ecirc;n su&yacute;t ch&uacute;t nữa kh&ocirc;ng cứu kịp. &Ocirc;ng V&otilde; Hồng Nam, ch&uacute; họ ở gần nh&agrave; Duy cho biết: &ldquo;Mẹ mất từ nhỏ nhưng Duy vẫn quyết t&acirc;m ở nh&agrave; một m&igrave;nh, tự kiếm c&aacute;i ăn chứ kh&ocirc;ng nhờ đến ai gi&uacute;p. Kh&ocirc;ng c&oacute; gạo th&igrave; n&oacute; chỉ ăn mỳ g&oacute;i, chuối ngo&agrave;i vườn để sống qua ng&agrave;y rồi đi học. Mỗi buổi chiều Duy thường hay qua nh&agrave; t&ocirc;i xem tivi nhưng h&ocirc;m đ&oacute; kh&ocirc;ng thấy n&ecirc;n t&ocirc;i chạy sang t&igrave;m th&igrave; thấy Duy bị đau bụng. T&ocirc;i chở ra bệnh viện mới ph&aacute;t hiện ch&aacute;u bị đau ruột thừa n&ecirc;n phải mổ&rdquo;. Sau trận đau ruột thừa, &ocirc;ng Nam bắt Duy sang nh&agrave; m&igrave;nh ở để nu&ocirc;i cơm v&agrave; tiếp tục đi học v&igrave; căn nh&agrave; dột n&aacute;t kh&ocirc;ng thể ở được.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Mái nhà rách te tua để mặc cho nắng, mưa." id="img_469416" src="https://dantri4.vcmedia.vn/30ca14d739/2016/10/17/3-1476691019733.JPG" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>M&aacute;i nh&agrave; r&aacute;ch te tua để mặc cho nắng, mưa.</em></div>\r\n</div>\r\n\r\n<p>&Ocirc;ng Nam cho biết: &ldquo;Tội nghiệp đứa ch&aacute;u khốn khổ n&ecirc;n t&ocirc;i l&ecirc;n UBND x&atilde; Đức Mỹ xin x&eacute;t hộ ngh&egrave;o để được miễn giảm học ph&iacute; nhưng cũng kh&ocirc;ng được. Tr&ecirc;n x&atilde; họ n&oacute;i nh&agrave; c&oacute; 3 nh&acirc;n khẩu nhưng 2 người trong độ tuổi lao động, l&agrave;m ra tiền n&ecirc;n kh&ocirc;ng thể x&eacute;t được hộ ngh&egrave;o. Trong khi đ&oacute;, nhiều năm liền đứa ch&aacute;u chỉ sống 1 m&igrave;nh kh&ocirc;ng được cha v&agrave; anh gi&uacute;p đỡ đồng n&agrave;o để đi học&rdquo;.</p>\r\n\r\n<p><strong>Quyết học giỏi để kiếm tiền lợp lại m&aacute;i nh&agrave;</strong></p>\r\n\r\n<p>D&ugrave; kh&oacute; khăn nhưng Duy vẫn quyết t&acirc;m đi học v&agrave; học rất giỏi. Năm 2015, Duy thi đỗ v&agrave;o ng&agrave;nh C&ocirc;ng nghệ kỹ thuật Điều khiển v&agrave; Tự động h&oacute;a (Trường Đại học Tr&agrave; Vinh) với số điểm rất cao. Tuy nhi&ecirc;n, từ đ&acirc;y kh&oacute; khăn lại tiếp tục chồng chất khi kh&ocirc;ng c&oacute; tiền đ&oacute;ng học ph&iacute;, kh&ocirc;ng biết l&agrave;m sao để trang trải chi ph&iacute; ăn uống, học tập suốt thời gian d&agrave;i. Duy cho biết: &ldquo;L&uacute;c đ&oacute; em định nghỉ học v&igrave; kh&ocirc;ng biết kiếm đ&acirc;u ra tiền để đ&oacute;ng học ph&iacute; v&agrave; nhiều chi ph&iacute; kh&aacute;c trong thời gian học. May nhờ gần x&oacute;m c&oacute; 1 chị đang theo học đại học đ&atilde; cho em biết th&ocirc;ng tin c&oacute; chương tr&igrave;nh vay vốn ưu đ&atilde;i hỗ trợ sinh vi&ecirc;n ngh&egrave;o đ&oacute;ng học ph&iacute;. Vậy l&agrave; em l&agrave;m hồ sơ đăng k&yacute; vay được 11 triệu đồng/năm đủ đ&oacute;ng học ph&iacute;, mua t&agrave;i liệu học tập&rdquo;.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Bên trong nhà không còn thứ gì đáng giá." id="img_469417" src="https://dantri4.vcmedia.vn/30ca14d739/2016/10/17/5-1476691028346.JPG" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>B&ecirc;n trong nh&agrave; kh&ocirc;ng c&ograve;n thứ g&igrave; đ&aacute;ng gi&aacute;.</em></div>\r\n</div>\r\n\r\n<p>Khi c&oacute; tiền đ&oacute;ng học ph&iacute;, Duy l&ecirc;n TP Tr&agrave; Vinh vừa đi học, vừa đi l&agrave;m. Em l&agrave;m đủ <em>c&aacute;</em>c nghề như: chạy b&agrave;n, b&aacute;n h&agrave;ng, tiếp thị&hellip; để c&oacute; tiền. Thời gian học tập, l&agrave;m việc mỗi ng&agrave;y đều k&iacute;n hết nhưng Duy vẫn cố gắng học thật giỏi để l&atilde;nh học bổng của trường nhằm c&oacute; th&ecirc;m chi ph&iacute; lo cho việc học. Duy cho biết: &ldquo;Theo quy định, lớp em mỗi học kỳ chỉ chọn ra duy nhất 1 người c&oacute; th&agrave;nh t&iacute;ch học tập tốt nhất để cấp học bổng với số tiền 3,1 triệu đồng. V&igrave; vậy em phải cố gắng hết sức v&igrave; c&oacute; học bổng mới lo đủ chi ph&iacute; đi học&rdquo;. Đ&atilde; 2 học kỳ tr&ocirc;i qua, Duy đều xuất sắc đứng đầu lớp d&ugrave; ngo&agrave;i giờ học phải tất bật l&agrave;m th&ecirc;m để tự lo cho cuộc sống.</p>\r\n\r\n<p>Biết được ho&agrave;n cảnh Duy kh&oacute; khăn, mới đ&acirc;y Đo&agrave;n thanh ni&ecirc;n (Trường Đại học Tr&agrave; Vinh) đ&atilde; vận động được 1 suất học bổng &ldquo;Ươm mầm xanh tri thức&rdquo; với số tiền 7 triệu đồng để Duy c&oacute; th&ecirc;m chi ph&iacute; trang trải việc học. Chị Hồ Th&uacute;y Hằng, Ph&oacute; B&iacute; thư Đo&agrave;n trường Đại học Tr&agrave; Vinh cho biết: &ldquo;Qua khảo s&aacute;t biết được ho&agrave;n cảnh gia đ&igrave;nh kh&oacute; khăn, nh&agrave; chỉ c&ograve;n m&igrave;nh Duy tự trang trải để đi học n&ecirc;n đo&agrave;n th&agrave;nh ni&ecirc;n đ&atilde; vận động xin học bổng cho em. Sắp tới đo&agrave;n thanh ni&ecirc;n sẽ tiếp tục vận động c&acirc;y, l&aacute; để lợp lại m&aacute;i nh&agrave; đ&atilde; r&aacute;ch n&aacute;t để em c&oacute; chỗ đi về&rdquo;.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Bàn thơ mẹ được Duy che bằng tấm ni lông cho đỡ dột mỗi khi trời mưa." id="img_469418" src="https://dantri4.vcmedia.vn/30ca14d739/2016/10/17/4-1476691024759.JPG" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>B&agrave;n thơ mẹ được Duy che bằng tấm ni l&ocirc;ng cho đỡ dột mỗi khi trời mưa.</em></div>\r\n</div>\r\n\r\n<p>Trao đổi với ph&oacute;ng vi&ecirc;n, b&agrave; Nguyễn Thị Lệ, Chủ tịch UBND x&atilde; Đức Mỹ cho biết: &ldquo;Địa phương cũng biết ho&agrave;n cảnh của gia đ&igrave;nh &ocirc;ng Dũng (cha Duy - PV) kh&oacute; khăn nhưng &ocirc;ng n&agrave;y bỏ địa phương đi nhiều năm liền kh&ocirc;ng trở về n&ecirc;n kh&ocirc;ng x&eacute;t hỗ trợ cất nh&agrave; được. Đối với em Duy, Hội khuyến học x&atilde; năm n&agrave;o cũng tặng qu&agrave;, tiền trong dịp Tết. Mới đ&acirc;y em cũng nhận được suất học bổng trị gi&aacute; 1 triệu đồng từ một mạnh thường qu&acirc;n. Ngo&agrave;i ra, địa phương cũng tạo điều kiện để em được vay vốn t&iacute;nh chấp từ ng&acirc;n h&agrave;ng ch&iacute;nh s&aacute;ch x&atilde; hội d&agrave;nh cho sinh vi&ecirc;n để trang trải chi ph&iacute; trong qu&aacute; tr&igrave;nh học&rdquo;.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Duy quyết tâm học thật giỏi để thay đổi số phận của mình." id="img_469419" src="https://dantri4.vcmedia.vn/30ca14d739/2016/10/17/2-1476691016114.JPG" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>Duy quyết t&acirc;m học thật giỏi để thay đổi số phận của m&igrave;nh.</em></div>\r\n</div>\r\n\r\n<p>Đến căn nh&agrave; của Duy, kh&ocirc;ng ai nghĩ đ&acirc;y l&agrave; nơi tr&uacute; ngụ của em từ năm học lớp 7. B&acirc;y giờ nh&agrave; r&aacute;ch tứ bề, m&aacute;i nh&agrave; để mặc cho d&acirc;y leo quấn quanh. B&ecirc;n trong chỉ c&oacute; b&agrave;n thờ &ocirc;ng b&agrave; nội v&agrave; mẹ được Duy lấy tấm ni l&ocirc;ng che lại để mưa kh&ocirc;ng bị ướt h&igrave;nh thờ. B&acirc;y giờ chẳng c&oacute; người th&acirc;n b&ecirc;n cạnh gi&uacute;p sức n&ecirc;n với Duy mỗi ng&agrave;y l&agrave; một cuộc chiến thật sự để phấn đấu vừa học, vừa l&agrave;m v&igrave; chỉ c&oacute; học thật giỏi l&agrave; con đường duy nhất để em thay đổi số phận, thay đổi được căn nh&agrave; r&aacute;ch n&aacute;t của m&igrave;nh.</p>\r\n\r\n<p style="text-align:right"><strong>Ho&agrave;ng Trung</strong></p>\r\n\r\n<p><!--EndFragment--></p>\r\n', 'baiviet-1479996057.JPG', 1479996057, 2, 4, 11, 1),
(48, 'Bộ GD&ĐT xem xét vụ học sinh đoạt giải HS giỏi quốc gia nhưng trượt đại học', 'Trao đổi với PV Dân trí chiều 6/11, ông Trần Văn Nghĩa, Phó Cục trưởng Cục Khảo thí & Kiểm định chất lượng Giáo dục (Bộ GD&ĐT) cho biết, Bộ GD&ĐT đã nhận được thông tin và đang gấp rút xem xét về trường hợp nữ sinh đoạt giải quốc gia nhưng trượt đại học viết thư cầu cứu Bộ trưởng Bộ GD&ĐT.', '<p>Chia sẻ với ch&uacute;ng t&ocirc;i, Ph&oacute; Cục trưởng Nghĩa cho hay, sự việc xảy ra đ&uacute;ng l&agrave; lỗi của em Huyền. Tuy nhi&ecirc;n, x&eacute;t em l&agrave; học sinh d&acirc;n tộc, v&ugrave;ng s&acirc;u v&ugrave;ng xa n&ecirc;n c&oacute; những kh&oacute; khăn nhất định. Sau khi kiểm tra, Bộ GD&amp;ĐT x&aacute;c nhận đ&uacute;ng l&agrave; em Đặng Thị Huyền đủ điểm đậu cả 2 trường ĐH Luật HN v&agrave; Trường ĐH Sư phạm H&agrave; Nội song chưa x&aacute;c nhận nhập học ở bất cứ trường n&agrave;o.</p>\r\n\r\n<p>&ldquo;Việc trước mắt b&acirc;y giờ ch&uacute;ng t&ocirc;i sẽ phải l&agrave;m việc với c&aacute;c trường ĐHSP H&agrave; Nội v&agrave; ĐH Luật để xem x&eacute;t về trường hợp của em. Tuy nhi&ecirc;n, điều kh&oacute; khăn l&agrave; hiện tại c&aacute;c trường đ&atilde; nhập học v&agrave; học gần hết học k&igrave; I. Nếu em Huyền được theo học cũng sẽ rất vất vả khi theo kịp c&aacute;c bạn v&agrave; phải cố gắng học b&ugrave; rất nhiều&rdquo;, &ocirc;ng Nghĩa cho hay.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Bức thư kêu cứu của em Huyền gửi Bộ trưởng Bộ GD&amp;ĐT (ảnh danviet)" id="img_7730" src="https://dantri4.vcmedia.vn/9c6c55dba2/2016/11/05/buc-thu-1478330768244.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">Bức thư k&ecirc;u cứu của em Huyền gửi Bộ trưởng Bộ GD&amp;ĐT (ảnh danviet)</div>\r\n</div>\r\n\r\n<p>Cũng theo &ocirc;ng Nghĩa, để L&atilde;nh đạo Bộ c&oacute; quyết định như thế n&agrave;o, việc đầu ti&ecirc;n, Cục Khảo th&iacute; sẽ phải x&aacute;c minh tất cả c&aacute;c vấn đề li&ecirc;n quan, chẳng hạn x&aacute;c định từ địa phương việc kh&ocirc;ng li&ecirc;n lạc được với em trong thời gian x&eacute;t tuyển, rồi em c&oacute; đoạt giải HS giỏi quốc gia hay kh&ocirc;ng... Ngo&agrave;i ra, gia đ&igrave;nh cũng phải l&agrave;m đơn tr&igrave;nh b&agrave;y sự việc của m&igrave;nh, chuẩn bị c&aacute;c giấy tờ như: giấy b&aacute;o điểm; x&aacute;c nhận của ch&iacute;nh quyền địa phương; giấy khen, bằng khen, bi&ecirc;n lai gửi hồ sơ qua bưu điện... để Bộ GD&amp;ĐT xem x&eacute;t cẩn thận.</p>\r\n\r\n<p>Trao đổi với PV D&acirc;n tr&iacute;, em Đặng Thị Huyền x&aacute;c nhận, đ&uacute;ng l&agrave; trong chiều 5/11, Cục Khảo th&iacute; &amp; Kiểm định chất lượng Gi&aacute;o dục (Bộ GD&amp;ĐT) c&oacute; chủ động li&ecirc;n lạc với gia đ&igrave;nh em. Em rất vui mừng v&agrave; mong ước được xem x&eacute;t nguyện vọng theo học một trường n&agrave;o đ&oacute;.</p>\r\n\r\n<p>X&eacute;t hai trường đ&atilde; đăng k&iacute;, em mong ước được v&agrave;o ĐH luật H&agrave; Nội hơn bởi đ&oacute; l&agrave; ước mơ cả đời của em nhằm sau n&agrave;y về đ&oacute;ng g&oacute;p cho qu&ecirc; hương.</p>\r\n\r\n<p>Được biết, ngo&agrave;i việc đoạt giải quốc gia m&ocirc;n Địa l&yacute;, cả 12 năm phổ th&ocirc;ng, Huyền đều đạt học sinh giỏi. &ldquo;Nếu may mắn được v&agrave;o một trường ĐH n&agrave;o đ&oacute; để học tập, cho d&ugrave; thờii gian học ở trường đ&atilde; kh&aacute; l&acirc;u nhưng em sẽ nỗ lực hết m&igrave;nh để theo c&aacute;c bạn&rdquo;, Huyền cho biết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="Đặng Thị Huyền tại lễ tuyên dương học sinh dân tộc thiểu số xuất sắc, tiêu biểu (ảnh: Lê Văn)" id="img_8133" src="https://dantri4.vcmedia.vn/thumb_w/640/9c6c55dba2/2016/11/06/dang-thi-huyen-1478422608386.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">Đặng Thị Huyền tại lễ tuy&ecirc;n dương học sinh d&acirc;n tộc thiểu số xuất sắc, ti&ecirc;u biểu (ảnh: L&ecirc; Văn)</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Như <em>D&acirc;n tr&iacute; </em>đ&atilde; đưa tin trước đ&oacute;, s&aacute;ng 5/11, th&ocirc;ng qua b&aacute;o ch&iacute;, em Đặng Thị Huyền (học sinh Trường THPT d&acirc;n tộc nội tr&uacute; cấp 2- cấp 3 Y&ecirc;n Minh, H&agrave; Giang) đ&atilde; gửi bức thư đến Bộ trưởng Bộ GD&amp;ĐT Ph&ugrave;ng Xu&acirc;n Nhạ về việc v&igrave; sao m&igrave;nh đoạt giải quốc gia m&ocirc;n Địa l&yacute;, kết quả thi THPT quốc gia thừa x&eacute;t nguyện vọng kh&aacute;c v&agrave;o Trường ĐHSP H&agrave; Nội v&agrave; ĐH Luật H&agrave; Nội nhưng bất ngờ em bị trượt ĐH trong đợt x&eacute;t tuyển vừa qua.</p>\r\n\r\n<p>Nh&acirc;n dịp được về H&agrave; Nội dự lễ tuy&ecirc;n dương học sinh đạt th&agrave;nh t&iacute;ch xuất sắc v&agrave;o ng&agrave;y 4/11 vừa qua, Huyền đ&atilde; trực tiếp gọi điện đến c&aacute;c trường mới biết nguy&ecirc;n nh&acirc;n m&igrave;nh trượt l&agrave; do em kh&ocirc;ng nộp giấy b&aacute;o điểm n&ecirc;n c&aacute;c trường đều cho rằng, đ&acirc;y l&agrave; th&iacute; sinh ảo n&ecirc;n kh&ocirc;ng gọi nhập học.</p>\r\n\r\n<p>Chia sẻ với ch&uacute;ng t&ocirc;i, l&atilde;nh đạo Trường PTDT nội tr&uacute; nơi em theo học x&aacute;c nhận, gia đ&igrave;nh Huyền ở c&aacute;ch trường gần 60km. Trong thời gian x&eacute;t tuyển, nh&agrave; trường đ&atilde; nhiều lần li&ecirc;n lạc với em nhưng em đ&atilde; bỏ số điện thoại cũ đăng k&iacute; trước đ&oacute;. Bản th&acirc;n Huyền cũng x&aacute;c nhận, số điện thoại của m&igrave;nh bị hỏng n&ecirc;n kh&ocirc;ng ai li&ecirc;n lạc được. M&atilde;i đến khi nh&agrave; trường th&ocirc;ng qua x&atilde;, nhờ ch&iacute;nh quyền x&atilde; xin được số điện thoại mới của em mới cập nhật được t&igrave;nh h&igrave;nh. Th&ocirc;ng qua b&aacute;o ch&iacute;, nh&agrave; trường cũng rất mong muốn em Huyền được xem x&eacute;t để theo học một trường ĐH n&agrave;o đ&oacute; bởi đ&acirc;y l&agrave; một trong những học sinh xuất sắc của nh&agrave; trường.</p>\r\n\r\n<p style="text-align:right"><strong>Mỹ H&agrave; - D&acirc;n tr&iacute;</strong></p>\r\n', 'baiviet-1479996313.jpg', 1479996313, 2, 1, 17, 1);
INSERT INTO `baiviet` (`id_post`, `tenpost`, `mota_post`, `chitiet_post`, `img_post`, `time_post`, `id_cat`, `id_qt`, `luotdoc`, `is_activepost`) VALUES
(49, 'Thi trắc nghiệm trong Kỳ thi chọn học sinh giỏi Toán của Mỹ', 'Kỳ thi chọn học sinh giỏi Toán của Mỹ là sự kết hợp cả hai hình thức trắc nghiệm và tự luận một cách rất khoa học.', '<p><!--StartFragment--></p>\r\n\r\n<p>GS.TSKH Đặng H&ugrave;ng Thắng, Trường ĐH KHTN, ĐHQG H&agrave; Nội giới thiệu với bạn đọc việc sử dụng thi trắc nghiệm trong kỳ thi chọn học sinh giỏi To&aacute;n bậc THPT ở Mỹ để hiểu r&otilde; hơn việc &aacute;p dụng thi trắc nghiệm To&aacute;n tại Việt Nam.</p>\r\n\r\n<p><em>D&acirc;n tr&iacute;</em> xin tr&acirc;n trọng giới thiệu b&agrave;i viết.</p>\r\n\r\n<p>Kỳ thi chọn học sinh giỏi (HSG) To&aacute;n bậc THPT của Mỹ (lần đầu ti&ecirc;n được tổ chức c&aacute;ch đ&acirc;y hơn 60 năm) được tổ chức h&agrave;ng năm gồm ba v&ograve;ng.</p>\r\n\r\n<p><u><strong>V&ograve;ng 1:</strong></u> Kỳ thi AMC 12 (American Mathematical Contest 12). Kỳ thi diễn ra trong th&aacute;ng gi&ecirc;ng v&agrave; chia l&agrave;m hai đợt . Tất cả c&aacute;c th&iacute; sinh THPT ở Mỹ đều c&oacute; thể đăng k&yacute; dự thi v&agrave; phải đ&oacute;ng lệ ph&iacute; thi (56 USD nếu dụ thi đợt 1 v&agrave; 70 USD nếu dự thi đợt 2) . Thời gian thi l&agrave; 75 ph&uacute;t. B&agrave;i thi ở dạng trắc nghiệm ,chung cho mọi th&iacute; sinh, gồm 25 c&acirc;u hỏi. Mỗi c&acirc;u hỏi c&oacute; 5 phương &aacute;n trả lời trong đ&oacute; chỉ c&oacute; một phương &aacute;n đ&uacute;ng. Mỗi c&acirc;u trả lời đ&uacute;ng được 6 điểm. Để &ldquo; phạt&rdquo; th&iacute; sinh khoanh bừa h&uacute; họa c&acirc;u bỏ trống được 1,5 điểm c&ograve;n c&acirc;u trả lời sai được 0 điểm. Như vậy điểm tối đa của mỗi b&agrave;i thi AMC l&agrave; 150 diểm.</p>\r\n\r\n<p>Th&iacute; sinh kh&ocirc;ng được mang m&aacute;y t&iacute;nh cầm tay. C&aacute;c c&acirc;u hỏi thuộc về c&aacute;c chủ đề: Số học,Đại số, H&igrave;nh học v&agrave; X&aacute;c suất. Kh&ocirc;ng c&oacute; c&acirc;u hỏi n&agrave;o về Giải t&iacute;ch.Trung b&igrave;nh h&agrave;ng năm c&oacute; khoảng 40 vạn (400.000) th&iacute; sinh tham dự AMC 12. Trong v&ograve;ng 2 tuần, th&iacute; sinh sẽ nhận được phiếu b&aacute;o điểm.</p>\r\n\r\n<p>Sau đ&acirc;y l&agrave; C&acirc;u hỏi 19 trong số 25 c&acirc;u hỏi thi trong kỳ thi AMC 12 năm 2016</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_19629c10-797b-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/1-1473748028408.jpg"  /></div>\r\n</div>\r\n\r\n<p>(Nguồn :https://www.artofproblemsolving.com/wiki/index.php?title=AMC_12)</p>\r\n\r\n<p><strong>V&ograve;ng 2 :</strong> Kỳ thi AIME (American Invitation Mathematical Examination).Những th&iacute; sinh nhận được tr&ecirc;n 100 điểm hoặc trong top 5% của v&ograve;ng 1 sẽ được mời tham dự kỳ thi AIME tổ chức v&agrave;o th&aacute;ng 3. B&agrave;i thi thuộc dạng thi trắc nghiệm gồm 15 c&acirc;u hỏi .</p>\r\n\r\n<p>Mỗi c&acirc;u hỏi được thiết kế sao cho c&acirc;u trả lời l&agrave; một số nguy&ecirc;n từ 0 đến 999 (tức l&agrave; c&oacute; tới 1.000 phương &aacute;n lựa chọn). Mỗi c&acirc;u trả lời đ&uacute;ng được một điểm, trả lời sai hay bỏ trống đều kh&ocirc;ng c&oacute; điểm. Thời gian l&agrave;m b&agrave;i l&agrave; 3 giờ. Như vậy điểm b&agrave;i thi bằng số c&acirc;u trả lời đ&uacute;ng.</p>\r\n\r\n<p>Th&iacute; sinh kh&ocirc;ng được mang m&aacute;y t&iacute;nh cầm tay. C&aacute;c c&acirc;u hỏi thuộc về c&aacute;c chủ đề: Số học,Đại số, H&igrave;nh học v&agrave; X&aacute;c suất. Kh&ocirc;ng c&oacute; c&acirc;u hỏi n&agrave;o về Giải t&iacute;ch. Mức độ kh&oacute; cao hơn kỳ thi AMC.</p>\r\n\r\n<p>Sau đ&acirc;y l&agrave; C&acirc;u hỏi 3 trong số 15 c&acirc;u hỏi thi trong kỳ thi AIME năm 2016</p>\r\n\r\n<p>C&acirc;u hỏi 3: Cho x,y,z l&agrave; c&aacute;c số thực thỏa m&atilde;n c&aacute;c điều kiện</p>\r\n\r\n<div class="VCSortableInPreviewMode" >\r\n<div><img alt="" id="img_aa599f30-797a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/k:2016/photo-3-1473747841832/thitracnghiemtrongkythichonhocsinhgioitoancuamy.jpg"  /></div>\r\n</div>\r\n\r\n<div class="VCSortableInPreviewMode" >\r\n<div><img alt="" id="img_aa2f33d0-797a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/k:2016/photo-4-1473747841271/thitracnghiemtrongkythichonhocsinhgioitoancuamy.jpg"  /></div>\r\n</div>\r\n\r\n<div class="VCSortableInPreviewMode" >\r\n<div><img alt="" id="img_aa2d3800-797a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/k:2016/photo-5-1473747840794/thitracnghiemtrongkythichonhocsinhgioitoancuamy.jpg" /></div>\r\n</div>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject" >\r\n<div><img alt="" id="img_a9f5fb60-797a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/k:2016/photo-6-1473747840514/thitracnghiemtrongkythichonhocsinhgioitoancuamy.jpg"  /></div>\r\n</div>\r\n\r\n<p style="text-align:center">(Nguồn: https://www.artofproblemsolving.com/wiki/index.php?title=2016_AIME_I )</p>\r\n\r\n<p><strong>V&ograve;ng 3 </strong>(v&ograve;ng cuối) Kỳ thi USAMO (The United States of America Mathematical Olympiad)</p>\r\n\r\n<p>Dựa tr&ecirc;n điểm số của kỳ thi AMC12 v&agrave; AIME, khoảng 300 th&iacute; sinh đạt điểm cao nhất sẽ dược mời tham dự cuộc thi USAM, diễn ra v&agrave;o th&aacute;ng 4. (Năm 2016 c&oacute; 325 th&iacute; sinh tham dự) H&igrave;nh thức thi của USAMO ho&agrave;n to&agrave;n giống như kỳ thi To&aacute;n Quốc tế (IMO): Thi theo h&igrave;nh thức tự luận, gồm hai buổi thi, mỗi buổi thi k&eacute;o d&agrave;i 4 giờ rưỡi. Trong mỗi buổi thi, thi sinh phải giải 3 b&agrave;i to&aacute;n kh&oacute;.</p>\r\n\r\n<p>Mỗi b&agrave;i to&aacute;n được tối đa 7 điểm. Th&iacute; sinh c&oacute; thể nhận được một phần của số điểm tối đa. 12 th&iacute; sinh đạt điểm cao nhất của kỳ thi USAMO sẽ được vinh danh tại buổi lễ trao giải tại thủ đ&ocirc; Washington. Sau lễ trao giải c&aacute;c em sẽ được tham dự buổi n&oacute;i chuyện, giao lưu với một số nh&agrave; to&aacute;n học v&agrave; một bữa tiệc chi&ecirc;u d&atilde;i tại nh&agrave; kh&aacute;ch ch&iacute;nh phủ .</p>\r\n\r\n<p><em><strong>Qua việc Tổ chức thi HSG To&aacute;n ở Mỹ GS.TSKH Đặng H&ugrave;ng Thắng c&oacute; 4 nhận x&eacute;t sau về Thi Trắc nghiệm như sau:</strong></em></p>\r\n\r\n<p><strong>Thi trắc nghiệm l&agrave; th&iacute;ch hợp cho c&aacute;c cuộc thi quy m&ocirc; lớn v&agrave; phải ho&agrave;n th&agrave;nh trong thời gian ngắn.</strong> Ưu điểm nổi bật l&agrave; của thi trắc nghiệm l&agrave; ở kh&acirc;u chấm thi. Do chấm thi bằng m&aacute;y t&iacute;nh n&ecirc;n việc chấm thi nhanh ch&oacute;ng ,ch&iacute;nh x&aacute;c, c&ocirc;ng bằng, kh&aacute;ch quan, đồng nhất . Trong khi đ&oacute; thi tự luận đ&ograve;i hỏi c&oacute; nhiều người chấm thi n&ecirc;n kh&oacute; đảm bảo t&iacute;nh nhanh ch&oacute;ng ,ch&iacute;nh x&aacute;c, c&ocirc;ng bằng, kh&aacute;ch quan, đồng nhất v&agrave; dễ ph&aacute;t sinh ti&ecirc;u cực .</p>\r\n\r\n<p>Mặt kh&aacute;c thi trắc nghiệm lại đ&ograve;i hỏi rất cao ở kh&acirc;u ra đề. Phải c&oacute; được một ng&acirc;n h&agrave;ng với số lượng đủ lớn c&aacute;c c&acirc;u hỏi c&oacute; chất lượng tốt. Để l&agrave;m được việc đ&oacute; cần đầu tư rất nhiều về tiền bạc, thời gian v&agrave; cần một đội ngũ thiết kế đề thi chuy&ecirc;n nghiệp.Đ&acirc;y kh&ocirc;ng phải l&agrave; việc m&agrave; một v&agrave;i người c&oacute; thể l&agrave;m được như khi x&acirc;y dựng đề thi tự luận. Ơ Mỹ việc x&acirc;y dựng ng&acirc;n h&agrave;ng đề thi l&agrave; cả một ng&agrave;nh dịch vụ với nhiều trung t&acirc;m khảo th&iacute; lớn .</p>\r\n\r\n<p><strong>C&oacute; nhiều dạng đề trắc nghiệm:</strong></p>\r\n\r\n<p>Chẳng hạn</p>\r\n\r\n<p>+ C&acirc;u hỏi đa lựa chọn: Chọn phương &aacute;n đ&uacute;ng trong 05 phương &aacute;n đưa ra (thay v&igrave; 04 phương &aacute;n như ở Việt nam) v&agrave; c&oacute; sự trừng phạt cho th&iacute; sinh khoanh bừa một c&aacute;ch h&uacute; họa (V&ograve;ng 1: Kỳ thi ACM 12)</p>\r\n\r\n<p>+ Kh&ocirc;ng phải l&agrave; c&acirc;u hỏi đa lựa chọn .Th&iacute; sinh phải tự điền đ&aacute;p số thay v&igrave; chỉ chọn đ&aacute;p số đ&uacute;ng trong c&aacute;c đ&aacute;p số đưa ra ( V&ograve;ng 2 :Kỳ thi AIME c&oacute; tới 1000 c&aacute;ch điền đ&aacute;p số).</p>\r\n\r\n<p><strong>Ở cuộc thi quy m&ocirc; nhỏ, ở đ&oacute; cần đo lường khả năng diễn đạt v&agrave; năng lực tư duy bậc cao của th&iacute; sinh</strong> th&igrave; n&ecirc;n thi tự luận (V&ograve;ng cuối: Kỳ thi USAMO)</p>\r\n\r\n<p><strong>T&ugrave;y từng mục ti&ecirc;u, quy mộ, t&iacute;nh chất của kỳ thi, ta sẽ vận dụng c&aacute;ch thi n&agrave;o</strong> (Tự luận hay trắc nghiệm) cho ph&ugrave; hợp hoặc kết hợp cả hai. Kỳ thi chọn HSG To&aacute;n của Mỹ l&agrave; sự kết hợp cả hai h&igrave;nh thức trắc nghiệm v&agrave; tự luận một c&aacute;ch rất khoa học.</p>\r\n\r\n<p style="text-align:right"><strong>GS.TSKH Đặng H&ugrave;ng Thắng </strong></p>\r\n\r\n<p style="text-align:right"><em>Theo D&acirc;n Tr&iacute;</em></p>\r\n\r\n<p><!--EndFragment--></p>\r\n', 'baiviet-1479996609.jpg', 1479996609, 13, 3, 11, 1),
(50, 'Đa dạng phương thức tuyển sinh 2017', 'Mặc dù Bộ GD&ĐT chưa chính thức ban hành Quy chế thi và tuyển sinh 2017 nhưng nhiều trường đại học đã dự trù phương án tuyển sinh riêng khá đa dạng. ', '<p>Dự kiến chỉ ti&ecirc;u tuyển sinh v&agrave; c&aacute;c ng&agrave;nh mới năm 2017 sẽ kh&ocirc;ng c&oacute; nhiều biến động. V&agrave; c&aacute;c trường đang chuẩn bị lộ tr&igrave;nh r&uacute;t ngắn thời gian đ&agrave;o tạo bậc đại học (ĐH) xuống 3-5 năm.</p>\r\n\r\n<p><strong>D&ugrave;ng kết quả kiểm tra năng lực của ĐH Quốc gia</strong></p>\r\n\r\n<p>ThS Phạm Th&aacute;i Sơn, Ph&oacute; Gi&aacute;m đốc Trung t&acirc;m Tư vấn tuyển sinh v&agrave; Dịch vụ đ&agrave;o tạo Trường ĐH C&ocirc;ng nghệ thực phẩm TP.HCM, cho hay căn cứ theo sự tự chủ tuyển sinh của trường, sau khi c&oacute; quy chế tuyển sinh sẽ c&oacute; điều chỉnh hợp l&yacute;. Trước mắt, nh&agrave; trường vẫn giữ nguy&ecirc;n 17 ng&agrave;nh đ&agrave;o tạo hiện c&oacute; v&agrave; 2.600 chỉ ti&ecirc;u bậc ĐH, chưa t&iacute;nh bậc cao đẳng.</p>\r\n\r\n<p>Theo &ocirc;ng Sơn, nếu năm tới ĐH Quốc gia TP.HCM tổ chức kỳ kiểm tra năng lực, trường sẽ xin ph&eacute;p được sử dụng kết quả kỳ kiểm tra n&agrave;y để x&eacute;t tuyển.</p>\r\n\r\n<p>&Ocirc;ng Sơn đ&aacute;nh gi&aacute; khung cơ cấu hệ thống gi&aacute;o dục quốc d&acirc;n vừa ban h&agrave;nh c&oacute; quy định thời gian đ&agrave;o tạo bậc ĐH r&uacute;t ngắn xuống c&ograve;n 3-5 năm. Do đ&oacute; nh&agrave; trường sẽ t&iacute;nh to&aacute;n phương &aacute;n để r&uacute;t ngắn thời gian đ&agrave;o tạo theo quy định bằng c&aacute;ch r&uacute;t ngắn thời gian học tại nh&agrave; trường v&agrave; tăng thời gian cho sinh vi&ecirc;n thực h&agrave;nh, thực tế tại c&aacute;c doanh nghiệp để tăng kỹ năng xử l&yacute; c&ocirc;ng việc, kỹ năng l&agrave;m việc nh&oacute;m.</p>\r\n\r\n<p>ThS Phạm Do&atilde;n Nguy&ecirc;n, Ph&oacute; Gi&aacute;m đốc Trung t&acirc;m Tư vấn - Tuyển sinh - Truyền th&ocirc;ng của Trường ĐH Kinh tế T&agrave;i ch&iacute;nh, th&ocirc;ng tin trong năm tới trường tăng bốn ng&agrave;nh mới. Gồm c&oacute; ng&ocirc;n ngữ Nhật, kinh tế đối ngoại, quan hệ quốc tế v&agrave; hệ thống th&ocirc;ng tin quản l&yacute;, n&acirc;ng tổng số ng&agrave;nh đ&agrave;o tạo của trường l&ecirc;n 17 ng&agrave;nh.</p>\r\n\r\n<p>Theo &ocirc;ng Nguy&ecirc;n, phương thức tuyển sinh của trường vẫn giữ như cũ, bao gồm x&eacute;t kết quả thi THPT v&agrave; học bạ. Trong đ&oacute;, trường sẽ điều chỉnh lại mức học bổng năm nhất cho sinh vi&ecirc;n, cụ thể đối với x&eacute;t học bạ, th&iacute; sinh đạt 21-26 điểm được 25% học bổng, 26-28 điểm l&agrave; 50%, 28-30 điểm l&agrave; 100%...</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Thí sinh tìm hiểu thông tin tuyển sinh vào các trường đại học, cao đẳng năm 2016. (Ảnh: An Nhiên)" id="img_00ea7b70-b117-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/2016/photo-0-1479862541526.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption"><em>Th&iacute; sinh t&igrave;m hiểu th&ocirc;ng tin tuyển sinh v&agrave;o c&aacute;c trường đại học, cao đẳng năm 2016. (Ảnh: An Nhi&ecirc;n)</em></div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đa dạng phương thức tuyển sinh</strong></p>\r\n\r\n<p>PGS-TS Đỗ Văn Dũng, Hiệu trưởng Trường ĐH Sư phạm kỹ thuật TP.HCM, cho biết dựa tr&ecirc;n số lượng giảng vi&ecirc;n vừa bổ sung th&ecirc;m n&ecirc;n chỉ ti&ecirc;u tuyển sinh của trường năm tới kh&ocirc;ng giảm. Trong đ&oacute;, trường đang tr&igrave;nh Bộ GD&amp;ĐT ph&ecirc; duyệt c&aacute;c ng&agrave;nh mới gồm c&ocirc;ng nghệ chế biến gỗ, vật liệu dệt may, an ninh mạng&hellip;</p>\r\n\r\n<p>Về phương thức tuyển sinh, &ocirc;ng Dũng cho rằng do năm tới Sở GD&amp;ĐT c&aacute;c địa phương phụ tr&aacute;ch thi n&ecirc;n trường băn khoăn chất lượng x&eacute;t tuyển đầu v&agrave;o. để an to&agrave;n kh&acirc;u x&eacute;t tuyển trường sẽ đa dạng phương thức x&eacute;t tuyển, thay v&igrave; dựa v&agrave;o kết quả thi THPT quốc gia như năm 2016 v&agrave; c&aacute;c ti&ecirc;u ch&iacute; kh&aacute;c. Trong đ&oacute;, trường đang t&iacute;nh to&aacute;n sử dụng kết quả đ&aacute;nh gi&aacute; năng lực do ĐH Quốc gia H&agrave; Nội tổ chức ở ph&iacute;a Nam. Ngo&agrave;i ra, trường cũng t&iacute;nh to&aacute;n phương &aacute;n đ&agrave;m ph&aacute;n mua lại bộ đề đ&aacute;nh gi&aacute; năng lực của ĐH Quốc gia H&agrave; Nội để đảm bảo chất lượng đầu v&agrave;o.</p>\r\n\r\n<p>Về lộ tr&igrave;nh cắt giảm thời gian đ&agrave;o tạo bậc ĐH, TS Dũng cho rằng trường đang l&ecirc;n kế hoạch r&uacute;t ngắn thời gian đ&agrave;o tạo 150 t&iacute;n chỉ xuống c&ograve;n 120 t&iacute;n chỉ. Tuy nhi&ecirc;n, với đặc th&ugrave; đ&agrave;o tạo ng&agrave;nh kỹ thuật, việc cắt giảm thời lượng đ&agrave;o tạo kh&ocirc;ng đơn giản như c&aacute;c ng&agrave;nh kinh tế m&agrave; cần c&oacute; thời gian đảm bảo sinh vi&ecirc;n c&oacute; kiến thức thực h&agrave;nh chuẩn 3,5 năm. Bởi ngo&agrave;i kiến thức chuy&ecirc;n m&ocirc;n, hiện sinh vi&ecirc;n c&ograve;n học c&aacute;c chương tr&igrave;nh ngoại ngữ, ch&iacute;nh trị, thể chất, quốc ph&ograve;ng chiếm thời lượng kh&aacute; lớn trong quỹ thời gian đ&agrave;o tạo.</p>\r\n\r\n<p style="text-align:right">Theo <strong>Phong Điền</strong></p>\r\n\r\n<p style="text-align:right"><em>Ph&aacute;p luật TPHCM</em></p>\r\n', 'baiviet-1479997055.jpg', 1479997055, 13, 3, 9, 1),
(51, 'Lúng túng ra đề thi trắc nghiệm', 'Kết quả thi thử theo đề thi trắc nghiệm của học sinh còn thấp trong khi giáo viên chịu rất nhiều áp lực, lúng túng với ma trận ra đề thi trắc nghiệm. ', '<p><!--StartFragment--></p>\r\n\r\n<p>Sở Gi&aacute;o dục v&agrave; Đ&agrave;o tạo (GD-ĐT) TP HCM vừa c&oacute; hướng dẫn kiểm tra học kỳ I đối với c&aacute;c trường phổ th&ocirc;ng. Trong đ&oacute;, ri&ecirc;ng khối 12, c&aacute;c trường bi&ecirc;n soạn đề m&ocirc;n ngữ văn theo h&igrave;nh thức tự luận; c&aacute;c m&ocirc;n to&aacute;n, ngoại ngữ, vật l&yacute;, h&oacute;a học, sinh học, lịch sử, địa l&yacute;, gi&aacute;o dục c&ocirc;ng d&acirc;n theo h&igrave;nh thức trắc nghiệm kh&aacute;ch quan 4 lựa chọn. Mục đ&iacute;ch của việc ra đề l&agrave; để học sinh (HS) l&agrave;m quen với đề thi THPT quốc gia sắp tới.</p>\r\n\r\n<p><strong>&Aacute;p lực v&agrave; nhiều rủi ro</strong></p>\r\n\r\n<p>D&ugrave; đ&aacute;nh gi&aacute; xu hướng đề thi theo h&igrave;nh thức trắc nghiệm l&agrave; điều cần thiết nhưng nhiều gi&aacute;o vi&ecirc;n (GV) cho rằng với thời gian gấp r&uacute;t để thay đổi hẳn c&aacute;ch dạy v&agrave; học khiến kh&ocirc;ng &iacute;t người l&uacute;ng t&uacute;ng, thậm ch&iacute; rất &aacute;p lực. GV một trường THPT tại quận 1 cho rằng d&ugrave; được c&aacute;c ph&ograve;ng chuy&ecirc;n m&ocirc;n của Sở GD-ĐT TP HCM tập huấn kh&aacute; kỹ nhưng kh&oacute; khăn hiện nay l&agrave; GV vẫn phải tập trung dạy cho kịp chương tr&igrave;nh n&ecirc;n rất &iacute;t thời gian hướng dẫn cho HS. Qua v&agrave;i lần thử sức với đề thi minh họa, điều dễ nhận thấy nhất l&agrave; tốc độ l&agrave;m b&agrave;i thi của HS kh&aacute; chậm do chưa l&agrave;m quen với dạng đề n&agrave;y bao giờ. V&igrave; vậy, GV rất sợ rủi ro khi ra đề v&agrave; chấm thi.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="Học sinh tại TP HCM đang làm quen với hình thức thi trắc nghiệm. (Ảnh: Tấn Thạnh)" id="img_f99f4390-b1da-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/2016/photo-0-1479946693460.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">Học sinh tại TP HCM đang l&agrave;m quen với h&igrave;nh thức thi trắc nghiệm. (Ảnh: Tấn Thạnh)</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thầy Trần Văn To&agrave;n, tổ trưởng tổ to&aacute;n Trường THPT Marie Curie, cho biết ngay khi Bộ GD-ĐT quyết phương &aacute;n thi trắc nghiệm v&agrave; đề minh họa, tổ to&aacute;n đ&atilde; l&ecirc;n phương &aacute;n cho HS l&agrave;m quen với dạng đề thi n&agrave;y. C&aacute;c GV trong tổ chuẩn bị t&agrave;i liệu với c&aacute;c đề thi kh&aacute;c nhau để ph&aacute;t cho HS l&agrave;m thử.</p>\r\n\r\n<p>Từ thực tế nghi&ecirc;n cứu, soạn thảo c&acirc;u hỏi, thầy To&agrave;n cho rằng soạn thảo một t&agrave;i liệu trắc nghiệm v&ocirc; c&ugrave;ng vất vả. Kh&ocirc;ng những HS chưa quen m&agrave; nhiều thầy c&ocirc; cũng thế. Muốn c&oacute; một đề trắc nghiệm phải c&oacute; ma trận đề r&otilde; r&agrave;ng, chi tiết để nắm bắt độ kh&oacute;, dễ của từng c&acirc;u hỏi. N&oacute; kh&aacute;c với đề tự luận v&igrave; số lượng c&acirc;u hỏi của một đề trắc nghiệm nhiều, dẫn đến việc kh&oacute; quản l&yacute; mức độ từng c&acirc;u v&agrave; to&agrave;n bộ đề thi. Điều khiến nhiều GV lấn cấn nhất l&agrave; để đ&aacute;nh gi&aacute; một c&acirc;u hỏi kh&oacute; hay dễ ở mức độ n&agrave;o trong đề trắc nghiệm hiện c&ograve;n rất kh&oacute; nhận diện. Một đề trắc nghiệm đ&ograve;i hỏi 4 mức độ đ&aacute;nh gi&aacute; l&agrave; nhận biết, th&ocirc;ng hiểu, vận dụng thấp v&agrave; vận dụng cao.</p>\r\n\r\n<p>&ldquo;GV băn khoăn l&agrave; ở chỗ chủ quan của người ra đề, c&oacute; thể với GV n&agrave;y th&igrave; c&acirc;u hỏi ở mức vận dụng kh&aacute; nhưng GV kh&aacute;c hoặc HS lại chỉ đ&aacute;nh gi&aacute; ở mức trung b&igrave;nh. Do đ&oacute;, để ph&acirc;n t&iacute;ch một c&acirc;u hỏi ở mức độ n&agrave;o phải c&oacute; qu&aacute; tr&igrave;nh thực nghiệm mới ch&iacute;nh x&aacute;c được trong khi thời gian kh&ocirc;ng c&oacute; nhiều để GV v&agrave; HS thực h&agrave;nh&rdquo; - thầy To&agrave;n n&oacute;i.</p>\r\n\r\n<p><strong>Kh&oacute; đạt điểm cao</strong></p>\r\n\r\n<p>Nhiều trường THPT đ&atilde; tiến h&agrave;nh cho HS l&agrave;m b&agrave;i thi thử, tuy nhi&ecirc;n kết quả đạt được đều thấp hơn năm trước do l&uacute;ng t&uacute;ng với h&igrave;nh thức thi mới.</p>\r\n\r\n<p>Thầy Nguyễn Viết Đăng Du, tổ trưởng tổ lịch sử Trường THPT L&ecirc; Qu&yacute; Đ&ocirc;n, cho biết do việc l&agrave;m b&agrave;i trắc nghiệm của HS chưa quen n&ecirc;n c&oacute; những kết quả chưa thực sự vừa &yacute;. Ri&ecirc;ng m&ocirc;n sử, theo đề thi minh họa của bộ th&igrave; c&oacute; đến 4 phương &aacute;n trả lời a, b, c, d nhưng trước giờ c&acirc;u hỏi của c&aacute;c m&ocirc;n x&atilde; hội c&oacute; thể chỉ cần d&ugrave;ng 2 phương &aacute;n l&agrave; đ&uacute;ng, sai hoặc x&acirc;y dựng &ldquo;mồi nhử&rdquo; để chọn đ&aacute;p &aacute;n. Tuy nhi&ecirc;n, hiện nay ma trận đề rất m&ocirc;ng lung.</p>\r\n\r\n<p>&ldquo;Tại trường, c&aacute;c GV gấp r&uacute;t chia nhau soạn c&acirc;u hỏi trắc nghiệm, nếu c&acirc;u n&agrave;o tr&ecirc;n 50% HS l&agrave;m được th&igrave; được chọn rồi tổng hợp lại th&agrave;nh đề để HS l&agrave;m thử. Thời gian qu&aacute; gấp r&uacute;t, th&ecirc;m nhiều c&ocirc;ng đoạn, c&oacute; những c&acirc;u hỏi cũng kh&ocirc;ng biết hợp l&yacute; hay kh&ocirc;ng, c&oacute; thể n&oacute; ph&ugrave; hợp với HS trường m&igrave;nh nhưng với HS trường kh&aacute;c c&oacute; ph&ugrave; hợp hay kh&ocirc;ng? Điều may mắn của trường l&agrave; c&oacute; phần mềm chấm thi trắc nghiệm từ ĐHQG H&agrave; Nội n&ecirc;n khả năng rủi ro &iacute;t xảy ra&rdquo; - thầy Du n&oacute;i</p>\r\n\r\n<p>Theo thầy Trần Văn To&agrave;n, Trường THPT Marie Curie đ&atilde; tổ chức cho từng lớp khối 12 l&agrave;m thử c&aacute;c đề v&agrave; thực tế nảy sinh l&agrave; học tr&ograve; c&ograve;n l&uacute;ng t&uacute;ng trong thi trắc nghiệm. C&ograve;n GV th&igrave; rất l&uacute;ng t&uacute;ng trong việc ra một đề thi trắc nghiệm thế n&agrave;o cho hiệu quả, c&oacute; t&iacute;nh kh&aacute;i qu&aacute;t cao. Theo thầy To&agrave;n, vừa qua, khi cho HS l&agrave;m thử đề thi c&oacute; c&aacute;c c&acirc;u hỏi s&aacute;t với đề minh họa của bộ th&igrave; số em đạt điểm cao rất &iacute;t, chỉ một số đạt 8 điểm, số điểm dưới trung b&igrave;nh kh&aacute; nhiều, khoảng điểm 5-6 chiếm đa số.</p>\r\n\r\n<div id="ctl00_ContentPlaceHolder1_divContent">\r\n<div class="detail-content">\r\n<p style="text-align:right">Theo <strong>Đặng Trinh</strong></p>\r\n\r\n<p style="text-align:right"><em>Người Lao Động</em></p>\r\n</div>\r\n</div>\r\n', 'baiviet-1479997232.jpg', 1479997232, 13, 1, 5, 1),
(53, 'Thầy trò rạng rỡ trong lễ kỷ niệm ngày Nhà giáo Việt Nam', 'Sáng 18/11, thầy cô và học trò nhiều trường phổ thông ở Hà Nội tổ chức lễ kỷ niệm ngày Nhà giáo Việt Nam. Nhiều thế hệ học sinh, giáo viên cũ trở về trường dự lễ, ôn lại kỷ niệm xưa.', '<p>Truyền thống hiếu học, &ldquo;t&ocirc;n sư trọng đạo&rdquo; v&agrave; nền gi&aacute;o dục Việt Nam đ&atilde; tồn tại v&agrave; ph&aacute;t triển c&ugrave;ng với sự tồn tại v&agrave; ph&aacute;t triển của d&acirc;n tộc Việt Nam. S&aacute;ng nay, nhiều trường tiểu học, THCS v&agrave; THPT tại H&agrave; Nội đ&atilde; long trọng tổ chức lễ kỷ niệm 34 năm ng&agrave;y Nh&agrave; gi&aacute;o Việt Nam 20/11 trong kh&ocirc;ng kh&iacute; trang trọng, vui tươi để b&agrave;y tỏ l&ograve;ng biết ơn v&agrave; tri &acirc;n c&aacute;c thầy c&ocirc; gi&aacute;o.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nNữ sinh THPT Lomonoxop diện áo dài trắng tinh khôi, rạng rỡ chụp ảnh kỉ niệm cùng các thầy giáo\r\n" id="img_3c9d0920-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao1-1479456942236.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Nữ sinh THPT Lomonoxop diện &aacute;o d&agrave;i trắng tinh kh&ocirc;i, rạng rỡ chụp ảnh kỉ niệm c&ugrave;ng c&aacute;c thầy gi&aacute;o</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nGiáo viên người nước ngoài đang công tác tại trường trong buổi lễ tri ân dành cho Nhà giáo Việt Nam\r\n" id="img_3e329d40-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao2-1479456942253.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Gi&aacute;o vi&ecirc;n người nước ngo&agrave;i đang c&ocirc;ng t&aacute;c tại trường trong buổi lễ tri &acirc;n d&agrave;nh cho Nh&agrave; gi&aacute;o Việt Nam</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nNhững tiết mục văn nghệ của các em học sinh tiểu học dành tặng thầy cô\r\n" id="img_3e6bd5b0-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao3-1479456942267.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Những tiết mục văn nghệ của c&aacute;c em học sinh tiểu học d&agrave;nh tặng thầy c&ocirc;</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nTại trường THPT Chu Văn An, thầy giáo nguyên Hiệu trưởng Đinh Sỹ Đại vui mừng về thăm trường và gặp lại các đồng nghiệp xưa\r\n" id="img_3e918620-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao4-1479456942277.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Tại trường THPT Chu Văn An, thầy gi&aacute;o nguy&ecirc;n Hiệu trưởng Đinh Sỹ Đại vui mừng về thăm trường v&agrave; gặp lại c&aacute;c đồng nghiệp xưa</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nLễ dâng hoa lên tượng đài Nhà giáo Chu Văn An\r\n" id="img_3ef96fb0-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao6-1479456942302.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Lễ d&acirc;ng hoa l&ecirc;n tượng đ&agrave;i Nh&agrave; gi&aacute;o Chu Văn An</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nCác thế hệ giáo viên của trường Bưởi danh tiếng chụp ảnh kỉ niệm tại Con đường ký ức được dựng lên ngay trong sân trường\r\n" id="img_3ed59400-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao5-1479456942290.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">C&aacute;c thế hệ gi&aacute;o vi&ecirc;n của trường Bưởi danh tiếng chụp ảnh kỉ niệm tại Con đường k&yacute; ức được dựng l&ecirc;n ngay trong s&acirc;n trường</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nCô giáo của trường THPT Chu Văn An duyên dáng trong trang phục áo dài\r\n" id="img_3f192cb0-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao7-1479456942316.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">C&ocirc; gi&aacute;o của trường THPT Chu Văn An duy&ecirc;n d&aacute;ng trong trang phục &aacute;o d&agrave;i</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nCất cao lời ca, tiếng hát dành tặng các thầy cô, những người đã dạy dỗ, dìu dắt mình\r\n" id="img_3f3a9760-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao8-1479456942327.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Cất cao lời ca, tiếng h&aacute;t d&agrave;nh tặng c&aacute;c thầy c&ocirc;, những người đ&atilde; dạy dỗ, d&igrave;u dắt m&igrave;nh</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nDưới hàng ghế đại biểu, cô Lê Mai Anh – Hiệu trưởng nhà trường hào hứng hòa giọng cùng các em học sinh\r\n" id="img_3f580a70-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao9-1479456942339.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Dưới h&agrave;ng ghế đại biểu, c&ocirc; L&ecirc; Mai Anh &ndash; Hiệu trưởng nh&agrave; trường h&agrave;o hứng h&ograve;a giọng c&ugrave;ng c&aacute;c em học sinh</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nTại trường Tiểu học Đoàn Thị Điểm, lễ kỷ niệm 34 năm ngày Nhà giáo Việt Nam 20-11 đã diễn ra với chủ đề Ngày hội văn hóa thế giới. (ảnh: fanpage Trường Tiểu học Đoàn Thị Điểm- Hà Nội)\r\n" id="img_3cd3a980-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao10-1479456942350.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Tại trường Tiểu học Đo&agrave;n Thị Điểm, lễ kỷ niệm 34 năm ng&agrave;y Nh&agrave; gi&aacute;o Việt Nam 20-11 đ&atilde; diễn ra với chủ đề &quot;Ng&agrave;y hội văn h&oacute;a thế giới&quot;. (ảnh: fanpage Trường Tiểu học Đo&agrave;n Thị Điểm- H&agrave; Nội)</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nCô Nguyễn Thị Hiền - Hiệu trưởng nhà trường cùng các em học sinh (ảnh: fanpage Trường Tiểu học Đoàn Thị Điểm- Hà Nội)\r\n" id="img_3d0e6890-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao11-1479456942361.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">C&ocirc; Nguyễn Thị Hiền - Hiệu trưởng nh&agrave; trường c&ugrave;ng c&aacute;c em học sinh (ảnh: fanpage Trường Tiểu học Đo&agrave;n Thị Điểm- H&agrave; Nội)</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="\r\nCác thầy cô giáo trong nhà trường cùng thả lên trời những chùm bóng bay mang sắc trắng – xanh hy vọng, với mong muốn công tác dạy và học của trường sẽ ngày càng vươn cao, vươn xa hơn nữa trong những năm học sắp tới. (ảnh: fanpage Trường Tiểu học Đoàn Thị Điểm- Hà Nội)\r\n" id="img_3dcfe3d0-ad67-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/nhagiao13-1479456942380.jpg"  /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">C&aacute;c thầy c&ocirc; gi&aacute;o trong nh&agrave; trường c&ugrave;ng thả l&ecirc;n trời những ch&ugrave;m b&oacute;ng bay mang sắc trắng &ndash; xanh hy vọng, với mong muốn c&ocirc;ng t&aacute;c dạy v&agrave; học của trường sẽ ng&agrave;y c&agrave;ng vươn cao, vươn xa hơn nữa trong những năm học sắp tới. (ảnh: fanpage Trường Tiểu học Đo&agrave;n Thị Điểm- H&agrave; Nội)</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="text-align:right"><strong>Hồng Minh</strong></p>\r\n', 'baiviet-1479997610.jpg', 1479997610, 2, 1, 14, 1),
(54, 'Du Học Singapore 2017 – nhiều cơ hội nghề nghiệp dành cho các bạn trẻ năng động', 'Là một trong số ít đất nước có nền giáo dục chất lượng bậc nhất thế giới, Singapore được biết tới là môi trường thu hút rất nhiều người tài từ khắp mọi nơi đến học tập và phát triển sự nghiệp của mình, học cao học tại Singapore là một trong những sự lựa chọn hàng đầu khi có ý định du học. ', '<div class="detail-content">\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_0db55f20-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-1-1479384717418.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p>Singapore l&agrave; một trong số &iacute;t quốc gia đầu tư rất nhiều cho nền gi&aacute;o dục. Những sinh vi&ecirc;n quốc tế theo học tại đ&acirc;y đều được hưởng những ch&iacute;nh s&aacute;ch khuyến học v&ocirc; c&ugrave;ng tuyệt vời. Đ&oacute; cũng l&agrave; l&iacute; do gi&uacute;p Quốc đảo sư tử xinh đẹp xếp vị tr&iacute; thứ 17 trong Top những đất nước c&oacute; m&ocirc;i trường gi&aacute;o dục bậc nhất tr&ecirc;n thế giới. Cũng kh&ocirc;ng kh&oacute; hiểu khi tỷ lệ học sinh, sinh vi&ecirc;n Việt Nam n&oacute;i ri&ecirc;ng v&agrave; c&aacute;c nước tới du học tại Singapore ng&agrave;y c&agrave;ng tăng.</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o mới nhất của Trung t&acirc;m Hợp t&aacute;c v&agrave; Ph&aacute;t triển kinh tế (OECD), sinh vi&ecirc;n tại đ&acirc;y xếp loại h&agrave;ng đầu thế giới về tr&igrave;nh độ To&aacute;n v&agrave; Nghi&ecirc;n cứu Khoa học, vượt qua c&aacute;c c&aacute;c nước c&oacute; truyền thống gi&aacute;o dục h&agrave;ng đầu thế giới như Nhật Bản, Canada hay Thụy Sĩ&hellip;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_0f1a4650-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-2-1479384719347.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>V&igrave; sao Singapore lu&ocirc;n &ldquo;thu h&uacute;t&rdquo; du học sinh khắp mọi nơi:</strong></p>\r\n\r\n<p>Ri&ecirc;ng trong năm 2015, Singapore đ&atilde; thu h&uacute;t khoảng 150,000 sinh vi&ecirc;n Quốc tế đến từ hơn 120 quốc gia theo học. Theo kết quả khảo s&aacute;t mới nhất của C&ocirc;ng ty chuy&ecirc;n về Gi&aacute;o dục thế giới QS (Quacquarelli Symonds), Singapore đứng thứ 12 trong Danh s&aacute;ch &ldquo;Best City in the world&rdquo; v&agrave; xếp thứ nhất tại khu vực Ch&acirc;u &Aacute;. Những ti&ecirc;u ch&iacute; được xếp hạng trong danh s&aacute;ch n&agrave;y dựa tr&ecirc;n c&aacute;c yếu tố: địa điểm du học, trường đại học, m&ocirc;i trường sống. Kết quả cuộc khảo s&aacute;t được đ&aacute;nh gi&aacute; bởi c&aacute;c chuy&ecirc;n gia về gi&aacute;o dục v&agrave; thực hiện tại gần 100 th&agrave;nh phố du học nổi tiếng tr&ecirc;n thế giới d&agrave;nh cho sinh vi&ecirc;n bậc Đại học v&agrave; Cao học.</p>\r\n\r\n<p>Tr&ecirc;n 90% sinh vi&ecirc;n theo học tại Singapore đều dễ d&agrave;ng t&igrave;m được việc sau khi tốt nghiệp chỉ trong v&ograve;ng 6 th&aacute;ng. Thậm ch&iacute;, mức lương sinh vi&ecirc;n tốt nghiệp tại c&aacute;c trường Đại học Singapore trong khoảng 2500 USD/th&aacute;ng, nếu tốt nghiệp Thạc sĩ th&igrave; con số n&agrave;y l&ecirc;n tới 3000 USD/th&aacute;ng.</p>\r\n\r\n<p>C&aacute;c Tập đo&agrave;n, C&ocirc;ng ty thường xuy&ecirc;n li&ecirc;n kết với c&aacute;c trường để t&igrave;m kiếm nguồn nh&acirc;n lực lao động cho m&igrave;nh, chưa kể Ch&iacute;nh phủ c&ograve;n thường xuy&ecirc;n đưa ra c&aacute;c ch&iacute;nh s&aacute;ch tạo điều kiện thuận lợi nhất cho việc học của sinh vi&ecirc;n trong v&agrave; ngo&agrave;i nước khi theo học tại đ&acirc;y. Những sinh vi&ecirc;n sau khi kết th&uacute;c kh&oacute;a học, nếu trở về nước x&acirc;y dựng sự nghiệp th&igrave; cũng lu&ocirc;n nhận được sự &ldquo;săn đ&oacute;n&rdquo; của c&aacute;c C&ocirc;ng ty lớn kh&aacute;c.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_0e7b9550-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-3-1479384718486.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>N&ecirc;n lựa chọn ng&agrave;nh n&agrave;o khi du học tại Singapore:</strong></p>\r\n\r\n<p>T&iacute;nh đến nay, Singapore được biết tới l&agrave; trung t&acirc;m t&agrave;i ch&iacute;nh v&agrave; giao dịch ngoại tệ h&agrave;ng đầu tr&ecirc;n thế giới. Vậy th&igrave; kh&ocirc;ng c&oacute; l&iacute; do g&igrave; bạn lại &ldquo;từ chối&rdquo; theo học chuy&ecirc;n ng&agrave;nh li&ecirc;n quan tới Kinh tế, Quản trị kinh doanh hay T&agrave;i ch&iacute;nh kể to&aacute;n. Singapore l&agrave; &ldquo;Thụy Sĩ của ch&acirc;u &Aacute;&rdquo; theo 1 v&agrave;i người nhận định, n&ecirc;n việc nơi đ&acirc;y l&agrave; địa điểm l&yacute; tưởng để ph&aacute;t triển của c&aacute;c ng&acirc;n h&agrave;ng tư nh&acirc;n tr&ecirc;n thế giới. Nhu cầu nh&acirc;n lực giỏi về chuy&ecirc;n ng&agrave;nh n&agrave;y cũng theo đ&oacute; m&agrave; kh&ocirc;ng ngừng dừng lại.</p>\r\n\r\n<p>Th&ecirc;m v&agrave;o đ&oacute;, nguồn lao động trong lĩnh vực Du lịch, t&agrave;i ch&iacute;nh, kinh tế, điện, kỹ thuật để hỗ trợ ng&agrave;nh kinh tế c&ugrave;ng ng&agrave;nh c&ocirc;ng nghiệp năng lượng v&agrave; h&oacute;a học, điện, điện tử ng&agrave;y c&agrave;ng tăng cao. Ri&ecirc;ng năm 2011, Singapore đ&atilde; d&agrave;nh 65% c&aacute;c nghi&ecirc;n cứu v&agrave; quỹ ph&aacute;t triển tập trung v&agrave;o lĩnh vực Điện tử. Dựa tr&ecirc;n sự ph&aacute;t triển đ&oacute;, nhu cầu t&igrave;m kiếm nh&acirc;n t&agrave;i trong ng&agrave;nh l&agrave; rất lớn.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_0e172e30-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-4-1479384717805.jpg" /></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>Danh s&aacute;ch ng&agrave;nh nghề được nhiều sinh vi&ecirc;n chọn học tại Singapore:</strong></p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="" id="img_d22993d0-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/bang-1479385046237.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>Danh s&aacute;ch c&aacute;c trường được nhiều sinh vi&ecirc;n chọn học tại Singapore </strong></p>\r\n\r\n<table border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Kaplan Singapore</p>\r\n			</td>\r\n			<td>\r\n			<p>Curtin University</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ERC</p>\r\n			</td>\r\n			<td>\r\n			<p>James Cook University Singapore</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nanyang Institute</p>\r\n			</td>\r\n			<td>\r\n			<p>Auston Institute</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Coleman College</p>\r\n			</td>\r\n			<td>\r\n			<p>MDIS</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>OSAC</p>\r\n			</td>\r\n			<td>\r\n			<p>LSBF</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>*Lưu &yacute;: Danh s&aacute;ch ng&agrave;nh nghề v&agrave; danh s&aacute;ch trường chỉ c&oacute; gi&aacute; trị tham khảo. Sinh vi&ecirc;n chọn trường v&agrave; ng&agrave;nh học dựa v&agrave;o nhiều yếu tố li&ecirc;n quan. Vui l&ograve;ng li&ecirc;n hệ Du học New World để được chuy&ecirc;n vi&ecirc;n tư vấn thị trường Singapore hỗ trợ th&ocirc;ng tin tốt nhất.</em></p>\r\n\r\n<p><strong>CHƯƠNG TR&Igrave;NH CHẮP C&Aacute;NH ƯỚC MƠ DU HỌC SINGAPORE TỪ 15/7/2016 - 30/11/2016</strong></p>\r\n\r\n<table border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>GPA&ge;8.0 &amp; IELTS &ge;7.0</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>GPA&ge;7.0 &amp; IELTS &ge; 6.0</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>GPA&ge;7.0 &amp; IELTS&ge;5.0</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>GPA&lt;7.0</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch vụ</p>\r\n\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch thuật</p>\r\n			</td>\r\n			<td>\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch vụ</p>\r\n\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch thuật</p>\r\n			</td>\r\n			<td>\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch vụ</p>\r\n\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch thuật</p>\r\n			</td>\r\n			<td>\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch vụ</p>\r\n\r\n			<p>Miễn to&agrave;n bộ ph&iacute; dịch thuật</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tặng 3,000,000 VNĐ ph&iacute; ghi danh</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng 2,000,000 ph&iacute; ghi danh</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng 1,000,000 VNĐ lệ ph&iacute; xin Visa</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tặng 3 triệu v&eacute; m&aacute;y bay</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng 3 triệu v&eacute; m&aacute;y bay</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng 3 triệu v&eacute; m&aacute;y bay</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng 3 triệu v&eacute; m&aacute;y bay</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tặng Ba l&ocirc; du học</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng Ba l&ocirc; du học</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng Ba l&ocirc; du học</p>\r\n			</td>\r\n			<td>\r\n			<p>Tặng Ba l&ocirc; du học</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><em>**Lưu &yacute;: Chương tr&igrave;nh chỉ &aacute;p dụng cho sinh vi&ecirc;n v&agrave;o thẳng chương tr&igrave;nh ch&iacute;nh hoặc đăng k&yacute; học tiếng Anh &iacute;t nhất từ 2 th&aacute;ng trở l&ecirc;n, v&agrave; d&agrave;nh cho sinh vi&ecirc;n đăng k&yacute; v&agrave;o những trường New World Education đại diện. Chi tiết vui l&ograve;ng li&ecirc;n hệ chuy&ecirc;n vi&ecirc;n tư vấn New World Education.</em></p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_0e79e7a0-acbf-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-5-1479384718816.jpg" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p>Du Học New World Education, đại diện ch&iacute;nh thức nhiều trường Đại học, Cao đẳng Singapore tại Việt Nam. Sinh vi&ecirc;n quan t&acirc;m đến Chương tr&igrave;nh học v&agrave; học bổng từ trường, vui l&ograve;ng đăng k&yacute; theo c&aacute;c c&aacute;ch sau, ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ lại sau khi nhận được th&ocirc;ng tin đăng k&yacute; từ qu&yacute; kh&aacute;ch.</p>\r\n\r\n<p>&bull; C&aacute;ch 1: Đăng k&yacute; tư vấn trực tuyến: <a href="http://newworldedu.vn/dang-ky-tu-van-du-hoc" rel="nofollow" target="_blank">http://newworldedu.vn/dang-ky-tu-van-du-hoc</a></p>\r\n\r\n<p>&bull; C&aacute;ch 2: Gửi email: <a href="mailto:info@newworldedu.vn">info@newworldedu.vn</a></p>\r\n\r\n<p>&bull; C&aacute;ch 3: Gửi hồ sơ online <a href="http://newworldedu.vn/nop-ho-so-online" rel="nofollow" target="_blank">http://newworldedu.vn/nop-ho-so-online</a></p>\r\n\r\n<p><strong>New World Education,</strong> C&ocirc;ng ty tư vấn v&agrave; xử l&yacute; th&agrave;nh c&ocirc;ng với lượng Visa du học Singapore cao trong năm 2015. New World Education hy vọng sẽ đồng h&agrave;nh c&ugrave;ng du học sinh v&agrave; phụ huynh trong năm 2016 v&agrave; chiếc cầu nối giữa học sinh v&agrave; nền gi&aacute;o dục bậc nhất từ Singapore. Ch&uacute;ng t&ocirc;i tin tưởng v&agrave;o c&ocirc;ng việc m&agrave; ch&uacute;ng t&ocirc;i đang l&agrave;m. Đội ngũ nh&acirc;n vi&ecirc;n New world ch&uacute;c cho tất cả c&aacute;c bạn học sinh c&oacute; thể thực hiện được ước mơ du học, th&agrave;nh c&ocirc;ng tr&ecirc;n con đường c&aacute;c bạn lựa chọn.</p>\r\n\r\n<p style="text-align:right"><strong>Bi&ecirc;n tập bởi: Bộ phận Marketing New World Education</strong></p>\r\n\r\n<p><strong>Hỗ trợ cam kết từ New World Education: </strong></p>\r\n\r\n<p>&bull; Miễn ph&iacute; tư vấn chọn trường, ng&agrave;nh học v&agrave; hỗ trợ thủ tục hồ sơ Visa.</p>\r\n\r\n<p>&bull; Miễn ph&iacute; dịch thuật</p>\r\n\r\n<p>&bull; Miễn ph&iacute; hướng dẫn luyện trả lời phỏng vấn bằng tiếng Anh</p>\r\n\r\n<p>&bull; Hỗ trợ hướng dẫn chuyển tiền, mở thẻ Visa</p>\r\n\r\n<p>&bull; Hỗ Trợ Thi IELTS/ TOEIC/TOEFL</p>\r\n\r\n<p>&bull; Kiểm tra tr&igrave;nh độ Anh ngữ miễn ph&iacute;</p>\r\n\r\n<p>&bull; Hướng dẫn c&aacute;ch viết thư xin học bổng, thư giới thiệu bản th&acirc;n</p>\r\n\r\n<p>&bull; Hỗ trợ l&agrave;m thủ tục s&acirc;n bay, đưa đ&oacute;n s&acirc;n bay, t&igrave;m nh&agrave; ở v&agrave; việc l&agrave;m</p>\r\n\r\n<p><strong>Mọi chi tiết xin vui l&ograve;ng li&ecirc;n hệ:</strong></p>\r\n\r\n<table border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>C&Ocirc;NG TY DU HỌC NEW WORLD EDUCATION</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Địa chỉ: </strong>T&ograve;a nh&agrave; SCB ( Ng&acirc;n h&agrave;ng TMCP S&agrave;i G&ograve;n)<br />\r\nLầu 7, 242 Đường Cống Quỳnh,Phường Phạm Ngũ L&atilde;o<br />\r\nQuận 1, Th&agrave;nh phố Hồ Ch&iacute; Minh</p>\r\n\r\n<p><strong>Điện thoại:</strong> 0839 252 917 &ndash; 0839 256 917<br />\r\n0839 252 916 &ndash; 0839 252 918 &ndash; 0839 252 909 &ndash; 0839 252 957<br />\r\n0839 252 919 &ndash; 0839 252 922 &ndash; 0839 252 926 &ndash; 0839 252 928<br />\r\n<strong>Fax:</strong> 0839 252 957<br />\r\n<strong>Hotline:</strong> 091 858 3012 - 094 490 4477</p>\r\n\r\n<p><strong>Email: </strong> info@newworldedu.vn<br />\r\n<strong>Website:</strong> <a href="http://newworldedu.vn/" rel="nofollow" target="_blank">http://www.newworldedu.vn/</a></p>\r\n\r\n<p><strong>Facebook:</strong> <a href="https://www.facebook.com/newworldstudyabroad?ref=hl" rel="nofollow" target="_blank">https://facebook.com/newworldstudyabroad</a></p>\r\n</div>\r\n\r\n<p style="text-align:right"><!--EndFragment--><em>Theo D&acirc;n tr&iacute;</em></p>\r\n', 'baiviet-1480000328.jpg', 1480000328, 14, 2, 3, 1);
INSERT INTO `baiviet` (`id_post`, `tenpost`, `mota_post`, `chitiet_post`, `img_post`, `time_post`, `id_cat`, `id_qt`, `luotdoc`, `is_activepost`) VALUES
(55, ' 9X từng gặt 6 học bổng thạc sĩ quốc tế giành giải Nhì guitar tại Đức', 'Tiếp nối thành công từ giải Nhất cuộc thi guitar ở Canada cách đây không lâu, Trần Tuấn An (SN 1992) lại tiếp tục giành giải Nhì cuộc thi guitar quốc tế lớn Berlin International guitar competition. ', '<p><!--StartFragment--></p>\r\n\r\n<div class="detail-content">\r\n<p>Đ&acirc;y l&agrave; cuộc thi guitar quốc tế được tổ chức hằng năm tại Berlin (Đức). Tuấn An chia sẻ: &ldquo;Cuộc thi n&agrave;y nổi tiếng thế giới, m&igrave;nh biết đến từ l&acirc;u. Sau nhiều năm tập đ&agrave;n, năm nay m&igrave;nh mới cảm thấy tự tin đi thi được&rdquo;.</p>\r\n\r\n<p>Năm nay, cuộc thi c&oacute; 7 quốc gia tham gia: Nga, Đan Mạch, Peru, Colombia, Bồ Đ&agrave;o Nha, Pelarus, Việt Nam. Tuấn An l&agrave; người Việt Nam đầu ti&ecirc;n đoạt giải cuộc thi n&agrave;y, mặc d&ugrave; đ&atilde; c&oacute; nhiều người Việt Nam tham gia nhưng chưa ai được v&agrave;o v&ograve;ng trong.</p>\r\n\r\n<p>Ch&agrave;ng trai Việt trải qua hai v&ograve;ng thi, trong đ&oacute; ở v&ograve;ng thứ nhất, th&iacute; sinh sẽ phải biểu diễn bắt buộc t&aacute;c phẩm Mưa của Gi&aacute;o sư - Nhạc sĩ Đặng Ngọc Long (Hiệu trưởng Trường &Acirc;m nhạc Berlin - Gesundbrunnen, đồng thời l&agrave; Chủ tịch Hội đồng Gi&aacute;m khảo cuộc thi), nhạc sĩ Nguyễn Thịnh v&agrave; 10 ph&uacute;t biểu diễn tự chọn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nTuấn An là người Việt Nam đầu tiên đoạt giải tại cuộc thi lớn Berlin International guitar competition.\r\n" id="img_402edfd0-9a4a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/tuanan1-1477355434343.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Tuấn An l&agrave; người Việt Nam đầu ti&ecirc;n đoạt giải tại cuộc thi lớn Berlin International guitar competition.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau khi vượt qua v&ograve;ng đầu, bước v&agrave;o v&ograve;ng chung kết, Tuấn An tiếp tục thể hiện t&aacute;c phẩm bắt buộc l&agrave; N&uacute;i rừng T&acirc;y Nguy&ecirc;n c&ugrave;ng 15 ph&uacute;t biểu diễn tự chọn.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; t&aacute;c phẩm theo trường ph&aacute;i mới pha trộn &Aacute; - &Acirc;u của GS. Đặng Ngọc Long, v&agrave; cũng l&agrave; xu hướng mới đang thịnh h&agrave;nh, trong đ&oacute; th&iacute; sinh phải ho&agrave;n thiện kỹ thuật đi&ecirc;u luyện v&agrave; hiện đại mới mẻ, diễn tả được &acirc;m nhạc truyền thống bản địa.</p>\r\n\r\n<p>&ldquo;M&igrave;nh được gặp v&agrave; n&oacute;i chuyện với Gi&aacute;o sư - Nhạc sĩ Đặng Ngọc Long - nghệ sĩ nổi tiếng trong giới guitar Việt Nam. &Ocirc;ng đ&atilde; c&oacute; rất nhiều c&ocirc;ng sức mang &acirc;m nhạc Việt Nam ra nước ngo&agrave;i. M&igrave;nh biết đến gi&aacute;o sư từ khi học tập ở Việt Nam, nhưng b&acirc;y giờ mới được gặp gỡ v&agrave; học hỏi. Thực sự, thầy l&agrave; một tấm gương cho người trẻ ch&uacute;ng m&igrave;nh noi theo.</p>\r\n\r\n<p>Thầy Long viết những bản nhạc rất hay nhưng cũng đ&ograve;i hỏi nhiều kỹ thuật mới. M&igrave;nh học được từ thầy c&aacute;ch chơi mạnh dạn, r&otilde; rệt, kiểu &acirc;m lượng to ra to, nhỏ ra nhỏ, m&agrave;u sắc &acirc;m thanh phải r&otilde; r&agrave;ng s&aacute;ng hoặc tối.</p>\r\n\r\n<p>Như b&agrave;i N&uacute;i rừng T&acirc;y Nguy&ecirc;n, m&igrave;nh học được c&aacute;ch l&agrave;m thế n&agrave;o để chơi được tiếng nước suối chảy, tiếng chim h&oacute;t, tiếng cồng chi&ecirc;ng, trống, gi&oacute; thổi&hellip; Để chơi được những thứ tiếng đ&oacute; tr&ecirc;n c&acirc;y đ&agrave;n guitar l&agrave; kh&ocirc;ng dễ d&agrave;ng&rdquo;, Tuấn An bộc bạch.</p>\r\n\r\n<p>Mặc d&ugrave; được cọ x&aacute;t với nhiều cuộc thi quốc tế nhưng lần n&agrave;y Tuấn An vẫn cảm thấy &aacute;p lực. &ldquo;Lần đầu ti&ecirc;n m&igrave;nh đặt ch&acirc;n v&agrave; tham gia thử sức ở ch&acirc;u &Acirc;u. Ch&acirc;u &Acirc;u l&agrave; c&aacute;i n&ocirc;i của nền &acirc;m nhạc cổ điển, v&agrave; m&igrave;nh đ&atilde; được học hỏi rất nhiều từ c&aacute;c bạn th&iacute; sinh kh&aacute;c&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nTuấn An trong phút giây giành giải Nhì của cuộc thi.\r\n" id="img_408d5380-9a4a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/tuanan2-1477355434356.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Tuấn An trong ph&uacute;t gi&acirc;y gi&agrave;nh giải Nh&igrave; của cuộc thi.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo Tuấn An, kỹ thuật ho&agrave;n hảo kh&ocirc;ng cần nhắc đến nữa, quan trọng l&agrave; c&aacute;ch thể hiện bản nhạc của họ rất tuyệt vời. C&aacute;c bạn chơi những c&acirc;u nhạc rất r&otilde; r&agrave;ng, thể hiện được suy nghĩ của họ.</p>\r\n\r\n<p>&ldquo;Điều n&agrave;y m&igrave;nh đang cần học hỏi v&igrave; đang t&igrave;m c&aacute;ch thể hiện tiếng đ&agrave;n của m&igrave;nh sao cho tốt. Với họ, kỹ thuật chỉ l&agrave; phương tiện để truyền cảm &acirc;m nhạc. Họ ho&agrave;n thiện kỹ thuật để trau dồi tiếng đ&agrave;n, biểu lộ tư tưởng v&agrave; cảm x&uacute;c của họ. Kh&ocirc;ng &iacute;t người đ&atilde; gi&agrave;nh rất nhiều giải tr&ecirc;n thế giới rồi nhưng vẫn rất khi&ecirc;m tốn, học hỏi lẫn nhau&rdquo;.</p>\r\n\r\n<p>Sau buổi biểu diễn trao giải (người được giải đều được chơi tối h&ocirc;m đ&oacute;), một người bạn đến từ đất nước Colombia đến b&ecirc;n Tuấn An hỏi về chiếc đ&agrave;n, cũng như mời cậu chơi thử đ&agrave;n của đối phương v&agrave; cho &yacute; kiến. Điều n&agrave;y khiến Tuấn An rất bất ngờ v&agrave; nhớ m&atilde;i, v&igrave; tinh thần khi&ecirc;m nhường, học hỏi của c&aacute;c th&iacute; sinh.</p>\r\n\r\n<p>Sau cuộc thi, Tuấn An về Mỹ tiếp tục chương tr&igrave;nh học tiến sĩ của m&igrave;nh tại ĐH Northwestern. Đ&acirc;y l&agrave; suất học bổng to&agrave;n phần trị gi&aacute; 240.000 USD m&agrave; Tuấn An đ&atilde; gi&agrave;nh được c&aacute;ch đ&acirc;y v&agrave;i th&aacute;ng trước.</p>\r\n\r\n<p>Th&aacute;ng 12 sắp tới, Tuấn An sẽ về nước, biểu diễn tại H&agrave; Nội, trong đ&oacute; c&oacute; 2 t&aacute;c phẩm của Gi&aacute;o sư - Nhạc sĩ Nguyễn Ngọc Long: Mưa, N&uacute;i rừng T&acirc;y Nguy&ecirc;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="\r\nTuấn An đứng cạnh Giáo sư - Nhạc sĩ Đặng Ngọc Long (Hiệu trưởng Trường Âm nhạc Berlin - Gesundbrunnen, đồng thời là Chủ tịch Hội đồng Giám khảo cuộc thi)\r\n" id="img_40ba56f0-9a4a-11e6-b939-01b8b69b7923" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/tuanan3-1477355434369.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Tuấn An đứng cạnh Gi&aacute;o sư - Nhạc sĩ Đặng Ngọc Long (Hiệu trưởng Trường &Acirc;m nhạc Berlin - Gesundbrunnen, đồng thời l&agrave; Chủ tịch Hội đồng Gi&aacute;m khảo cuộc thi)</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuấn An từng được biết đến l&agrave; &quot;T&agrave;i năng trẻ guitar Việt Nam năm 2004&quot;. Sau khi du học ở Mỹ, Tuấn An tiếp tục gi&agrave;nh được nhiều phần thưởng lớn: Bằng khen của Đo&agrave;n thanh ni&ecirc;n Cộng sản Hồ Ch&iacute; Minh về những th&agrave;nh t&iacute;ch xuất sắc ở nước ngo&agrave;i (năm 2010), giải Nhất cuộc thi học bổng bang Illinois, giải Ba cuộc thi d&agrave;n nhạc giao hưởng Chicago, giải Nhất cuộc thi &acirc;m nhạc tại North Park University.</p>\r\n\r\n<p>Đặc biệt, năm 2013, Trấn Tuấn An đ&atilde; tham gia v&agrave; gi&agrave;nh giải Nhất cuộc thi guitar do hội Nhạc sỹ Mỹ Society of Americian Musicians (SAM) tổ chức. V&agrave;o th&aacute;ng 11/2013, Tuấn An vinh dự được nhận giải thưởng d&agrave;nh cho sinh vi&ecirc;n xuất sắc nhất của Học viện Lincoln thuộc bang Illinois lần thứ 39.</p>\r\n\r\n<p>Kết th&uacute;c chương tr&igrave;nh đại học, Tuấn An nộp v&agrave; được 6 trường cấp học bổng chương tr&igrave;nh thạc sĩ. Tuy nhi&ecirc;n, Tuấn An đ&atilde; lựa chọn ĐH Yale với học bổng to&agrave;n phần 50.000 USD/năm. V&agrave; sau kh&oacute;a học thạc sĩ, ch&agrave;ng trai sinh năm 1992 n&agrave;y đ&atilde; kịp gi&agrave;nh suất học bổng to&agrave;n phần trị gi&aacute; 240.000 USD tại ĐH Northwestern.</p>\r\n\r\n<p style="text-align:right"><strong>Ho&agrave;ng Dung</strong></p>\r\n</div>\r\n\r\n<p><!--EndFragment--></p>\r\n', 'baiviet-1480000478.jpg', 1480000478, 14, 1, 4, 1),
(56, ' Các con đường định cư Mỹ và Canada tại Triển lãm Du học Pathway', 'Khách tham dự buổi Triển lãm Du học Pathway – con đường vào 670 trường đại học Mỹ và Canada sẽ diễn ra vào ngày 26 và 27 tới sẽ được cập nhật thông tin visa mới nhất của Mỹ và Canada, đặc biệt là những con đường khả dĩ nhất để có thể định cư tại 2 nước này sau khi du học. ', '<p><!--StartFragment--></p>\r\n\r\n<p><strong>Thời gian &amp; địa điểm triển l&atilde;m:</strong></p>\r\n\r\n<p><strong>&bull; H&agrave; Nội:</strong> 9h30 &ndash; 11h30 ng&agrave;y 26/11/2016 tại AAC, tầng 2 t&ograve;a nh&agrave; Bảo Anh, 62 Trần Th&aacute;i T&ocirc;ng, Cầu Giấy, H&agrave; Nội</p>\r\n\r\n<p><strong>&bull; Tp. Hồ Ch&iacute; Minh: </strong>9h30 &ndash; 11h30 ng&agrave;y 27/11/2016 tại lầu 5, 35 Mạc Đĩnh Chi, Quận 1, Tp. Hồ Ch&iacute; Minh</p>\r\n\r\n<p><strong>C&aacute;ch để được ở lại Mỹ 3 năm sau tốt nghiệp</strong></p>\r\n\r\n<p>Theo luật, học sinh sẽ phải rời khỏi Mỹ sau khi tốt nghiệp 3 th&aacute;ng dẫn đến kh&ocirc;ng c&oacute; khả năng xin được việc l&agrave;m hay thực tập. Tuy nhi&ecirc;n, nếu học sinh theo học khối ng&agrave;nh STEM, tức c&aacute;c ng&agrave;nh li&ecirc;n quan đến Khoa học, C&ocirc;ng nghệ, Kỹ sư v&agrave; To&aacute;n học sẽ được ở lại 3 năm để l&agrave;m việc v&agrave; sinh vi&ecirc;n ng&agrave;nh n&agrave;y t&igrave;m việc l&agrave;m rất dễ.</p>\r\n\r\n<p>Theo Cục Thống k&ecirc; Lao động Hoa Kỳ, nước Mỹ cần 10 triệu nh&acirc;n lực cho c&aacute;c ng&agrave;nh STEM trong khoảng thời gian từ năm 2012 &ndash; 2022. Tuy nhi&ecirc;n t&igrave;nh h&igrave;nh thực tế cho thấy Mỹ đang rất thiếu nh&acirc;n lực c&aacute;c ng&agrave;nh n&agrave;y. Đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do Mỹ ban h&agrave;nh nhiều ch&iacute;nh s&aacute;ch ưu đ&atilde;i đặc biệt nhằm giữ ch&acirc;n du học sinh STEM ở lại Mỹ l&agrave;m việc.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_8c151d20-b19b-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-1-1479919227506.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p>Theo một thống k&ecirc; về c&aacute;c c&ocirc;ng việc được trả lương cao nhất tại Hoa Kỳ, hơn nửa trong số đ&oacute; l&agrave; c&aacute;c c&ocirc;ng việc thuộc khối STEM. Mức lương trung b&igrave;nh của nh&oacute;m ng&agrave;nh n&agrave;y l&agrave; 76,000 USD, cao gấp đ&ocirc;i mức lương trung b&igrave;nh của to&agrave;n thị trường lao động tại Mỹ.</p>\r\n\r\n<p>&Ocirc;ng Drew Taylor, Gi&aacute;m đốc ELS sẽ thuyết tr&igrave;nh về visa Mỹ trong triển l&atilde;m. Học sinh tham dự sẽ được tặng một kh&oacute;a luyện visa miễn ph&iacute; với người bản địa v&agrave; một kỳ thi thử IELTS.</p>\r\n\r\n<p><strong>Được ở lại Canada 3 năm sau tốt nghi&ecirc;p, xin thẻ xanh sau 6 th&aacute;ng l&agrave;m việc</strong></p>\r\n\r\n<p>Trong t&igrave;nh h&igrave;nh biến đổi ch&iacute;nh trị v&agrave; kinh tế hiện nay, so với c&aacute;c cường quốc du học kh&aacute;c, Canada đang được ưa chuộng nhất kh&ocirc;ng chỉ v&igrave; chất lượng gi&aacute;o dục m&agrave; c&ograve;n do ch&iacute;nh s&aacute;ch học ph&iacute;, ch&iacute;nh s&aacute;ch l&agrave;m th&ecirc;m, ch&iacute;nh s&aacute;ch xin việc v&agrave; visa cho du học sinh cụ thể như sau:</p>\r\n\r\n<p>&bull; Canada l&agrave; đất nước đầu tư mạnh cho gi&aacute;o dục, c&aacute;c kh&oacute;a học tại đ&acirc;y chỉ từ 12.000 CAD v&agrave; v&igrave; Canada đang cần một số lượng lớn nh&acirc;n lực c&oacute; tr&igrave;nh độ cao n&ecirc;n du học sinh c&agrave;ng học ở những bậc cao th&igrave; lại c&agrave;ng c&oacute; nhiều ưu đ&atilde;i về học ph&iacute;.</p>\r\n\r\n<p>&bull; Học sinh được ph&eacute;p đi l&agrave;m th&ecirc;m 20h/tuần v&agrave; hưởng c&aacute;c chương tr&igrave;nh thực tập c&oacute; lương.</p>\r\n\r\n<p>&bull; Đối với c&aacute;c chương tr&igrave;nh từ cao đẳng trở l&ecirc;n, sau khi tốt nghiệp, học sinh được ph&eacute;p ở lại 1 &ndash; 3 năm t&igrave;m việc l&agrave;m. Nếu t&igrave;m được việc l&agrave;m to&agrave;n thời gian từ 6 th&aacute;ng &ndash; 1 năm, du học sinh được ph&eacute;p nộp hồ sơ xin định cư.</p>\r\n\r\n<p>Hội thảo tại triển l&atilde;m sẽ gi&uacute;p du học sinh hiểu được chi tiết visa v&agrave; chương tr&igrave;nh định cư &aacute;p dụng cho từng trường hợp du học sinh kh&aacute;c nhau thế n&agrave;o. Đại diện trường Centennial College, trường nằm trong top 10 Canada v&agrave; hạng 2 bang Ontario về c&aacute;c chương tr&igrave;nh nghi&ecirc;n cứu, một trong 45 trường trong danh s&aacute;ch CES, sẽ thuyết tr&igrave;nh.</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="" id="img_8b727480-b19b-11e6-8f70-a398852498ba" src="https://dantri4.vcmedia.vn/thumb_w/640/2016/photo-2-1479919227212.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>Tiếp cận học bổng gần 700 trường đại học Mỹ v&agrave; Canada</strong></p>\r\n\r\n<p>Tham dự triển l&atilde;m, du học sinh sẽ được cung cấp th&ocirc;ng tin của gần 700 trường đại học Mỹ v&agrave; Canada, trong đ&oacute; c&oacute; những trường h&agrave;ng đầu như Pace University &ndash; hạng 170 to&agrave;n Mỹ, nằm ngay tại trung t&acirc;m Manhattan, New York; Northeastern University, hạng 49 trong danh s&aacute;ch Đại học Quốc gia, với vị tr&iacute; số 1 Hoa Kỳ về khả năng t&igrave;m cơ hội thực tập v&agrave; c&ocirc;ng việc tốt nhất cho sinh vi&ecirc;n; University of New Hampshire, hạng 97 đại học loại 1 (Tier 1) tr&ecirc;n to&agrave;n nước Mỹ, hạng 44 những trường đại học c&ocirc;ng lập h&agrave;ng đầu nước Mỹ, hạng 82 c&aacute;c trường đại học nghi&ecirc;n cứu tại Mỹ&hellip; v&agrave; c&aacute;c trường Canada như Trinity Western University, Royal Roads University, Fraser International College, International College of Manitoba, Niagara College, Centennial College&hellip;</p>\r\n\r\n<p>Điều n&agrave;y đồng nghĩa với việc học sinh sẽ được tiếp cận với kho học bổng khổng lồ từ gần 700 trường đại học tr&ecirc;n. C&oacute; những suất học bổng 2000 &ndash; 3000 USD d&agrave;nh cho những học sinh kh&aacute; như học bổng của James Madison University, Widener University, Merrimack College&hellip;; những suất 10.000 &ndash; 12.000 USD của University of Vermont, Navitas UMASS Lowell hay 18.000 USD của LIU v&agrave; c&aacute;c suất học bổng 50% của University of New Hampshire...</p>\r\n\r\n<p style="text-align:right"><!--EndFragment--><em>Theo D&acirc;n tr&iacute;</em></p>\r\n', 'baiviet-1480000634.png', 1480000634, 14, 1, 2, 1),
(57, 'SV Việt mang nghiên cứu về bệnh dại đến Hội nghị Y tế tiểu vùng Mê Kông', 'Nhóm 4 sinh viên Y khoa năm cuối là Triệu Phú, Ánh Phương, Quỳnh Như, Phan Trà đã tham dự và báo cáo trong Hội nghị quốc tế về các vấn đề Y tế công cộng giữa các nước Tiểu vùng Mê Kông mở rộng lần thứ 8 diễn ra từ 5-6/11 tại Phnompenh (Campuchia) nghiên cứu về thực trạng phòng chống bệnh dại ở miền núi Việt Nam. ', '<p><!--StartFragment--></p>\r\n\r\n<div class="detail-content">\r\n<p>H&agrave;ng năm, 6 quốc gia (Campuchia, Trung Quốc, L&agrave;o, Myanmar, Th&aacute;i Lan v&agrave; Việt Nam) trong khu vực Tiểu v&ugrave;ng s&ocirc;ng M&ecirc; K&ocirc;ng mở rộng (GMS) thay phi&ecirc;n nhau đăng cai tổ chức Hội nghị quốc tế về Y tế c&ocirc;ng cộng với mục đ&iacute;ch n&acirc;ng cao năng lực khu vực trong giải quyết c&aacute;c nhu cầu v&agrave; c&aacute;c th&aacute;ch thức lớn về y tế c&ocirc;ng cộng th&ocirc;ng qua việc cung cấp c&aacute;c nghi&ecirc;n cứu, b&aacute;o c&aacute;o về gi&aacute;o dục sức khỏe cộng đồng cũng như giải ph&aacute;p, ch&iacute;nh s&aacute;ch nhằm cải thiện sức khỏe người d&acirc;n v&agrave; c&ocirc;ng bằng y tế.</p>\r\n\r\n<p>Năm nay, chủ đề của hội nghị l&agrave; Bảo hiểm y tế to&agrave;n cầu trong việc tăng cường chất lượng chăm s&oacute;c sức khỏe. Đ&acirc;y l&agrave; lần đầu ti&ecirc;n hội nghị được thực hiện tại Campuchia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode">\r\n<div><img alt="\r\nNhóm 4 sinh viên Việt Phan Trà, Ánh Phương, Triệu Phú và Quỳnh Như (lần lượt từ trái qua) góp mặt tại Hội nghị quốc tế về y tế công cộng báo cáo nghiên cứu về phòng, chữa bệnh dại.\r\n" id="img_673bec60-a7ad-11e6-bb9e-354a2084a2cc" src="https://dantri4.vcmedia.vn/2016/gms1-1478827384051.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">Nh&oacute;m 4 sinh vi&ecirc;n Việt Phan Tr&agrave;, &Aacute;nh Phương, Triệu Ph&uacute; v&agrave; Quỳnh Như (lần lượt từ tr&aacute;i qua) g&oacute;p mặt tại Hội nghị quốc tế về y tế c&ocirc;ng cộng b&aacute;o c&aacute;o nghi&ecirc;n cứu về ph&ograve;ng, chữa bệnh dại.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Diễn ra bắt đầu từ ng&agrave;y 5/6, hội nghị 2 ng&agrave;y quy tụ khoảng 400 đại biểu l&agrave; giảng vi&ecirc;n, sinh vi&ecirc;n đến từ c&aacute;c trường Y tế c&ocirc;ng cộng của c&aacute;c nước thuộc khối GMS; c&ugrave;ng sự g&oacute;p mặt của c&aacute;c diễn giả vốn l&agrave; c&aacute;c chuy&ecirc;n gia y tế c&ocirc;ng cộng từ Tổ chức Y tế thế giới (WHO), Bỉ, Mỹ, Đức v&agrave; Singapore nhằm thảo luận, chia sẻ kinh nghiệm, kết quả nghi&ecirc;n cứu v&agrave; b&agrave;i học ch&iacute;nh s&aacute;ch từ mỗi quốc gia.</p>\r\n\r\n<p>L&agrave; một nh&oacute;m trong số những đại diện trẻ của Việt Nam, nh&oacute;m 4 sinh vi&ecirc;n năm cuối chuy&ecirc;n ng&agrave;nh b&aacute;c sĩ y học dự ph&ograve;ng đến từ Khoa y tế c&ocirc;ng cộng, Trường ĐH Y dược Huế đ&atilde; g&oacute;p mặt v&agrave; b&aacute;o c&aacute;o tại hội nghị nghi&ecirc;n cứu về thực trạng ph&ograve;ng, chống bệnh dại tại một huyện miền n&uacute;i ở Việt Nam.</p>\r\n\r\n<p>Phan Triệu Ph&uacute;, một th&agrave;nh vi&ecirc;n của nh&oacute;m cho biết, b&aacute;o c&aacute;o tập trung v&agrave;o thực trạng thờ ơ, chưa coi trọng dự ph&ograve;ng căn bệnh nguy hiểm n&agrave;y. Đ&aacute;ng ch&uacute; &yacute;, tại huyện miền n&uacute;i m&agrave; tr&igrave;nh độ d&acirc;n tr&iacute; c&ograve;n thấp, 80% đồng b&agrave;o l&agrave; d&acirc;n tộc thiểu số, rất nhiều người d&acirc;n vẫn đang &aacute;p dụng những phương ph&aacute;p t&iacute;n ngưỡng sai lầm trong chữa bệnh dại dẫn đến những hậu quả v&ocirc; c&ugrave;ng đau l&ograve;ng v&agrave; đ&aacute;ng tiếc.</p>\r\n\r\n<p>Để đi đến kết quả nghi&ecirc;n cứu g&oacute;p mặt trong Hội nghị mang tầm quốc tế, nh&oacute;m sinh vi&ecirc;n ĐH Y dược Huế đ&atilde; trải qua nhiều giai đoạn từ chọn đề nghi&ecirc;n cứu, l&ecirc;n đề cương đặt vấn đề nghi&ecirc;n cứu, mục ti&ecirc;u, dự kiến kết quả, kinh ph&iacute;, thời gian nghi&ecirc;n cứu, sai số c&oacute; thể, hệ thống c&acirc;u hỏi điều tra.</p>\r\n\r\n<p>Đến giai đoạn thực địa, nh&oacute;m sinh vi&ecirc;n Việt đi thực tế đến huyện miền n&uacute;i nơi tập trung hơn 80% đồng b&agrave;o thiểu số để tiến h&agrave;nh điều tra nhằm t&igrave;m ra yếu tố ảnh đến kiến thức, th&aacute;i độ, thực h&agrave;nh ph&ograve;ng, chống bệnh dại của người d&acirc;n nơi đ&acirc;y. Từ đ&oacute;, b&aacute;o c&aacute;o đưa ra những kiến nghị cho c&aacute;n bộ y tế địa phương về giải ph&aacute;p ph&ugrave; hợp nhằm n&acirc;ng cao nhận thức của người d&acirc;n về ph&ograve;ng, chống bệnh dại &ndash; căn bệnh truyền nhiễm nguy hiểm do vi r&uacute;t dại g&acirc;y n&ecirc;n từ động vật sang người v&agrave; cho đến nay, chưa c&oacute; thuốc điều trị đặc hiệu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject">\r\n<div><img alt="\r\nCác thầy cô, sinh viên đoàn Việt Nam tại hội nghị.\r\n" id="img_67a47230-a7ad-11e6-bb9e-354a2084a2cc" src="https://dantri4.vcmedia.vn/2016/gms2-1478827384066.jpg" style="max-width:100%" /></div>\r\n\r\n<div class="PhotoCMS_Caption">\r\n<p style="text-align:center">C&aacute;c thầy c&ocirc;, sinh vi&ecirc;n đo&agrave;n Việt Nam tại hội nghị.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ch&agrave;ng trai duy nhất trong nh&oacute;m &ndash; Triệu Ph&uacute; chia sẻ: &ldquo;Đ&acirc;y kh&ocirc;ng phải l&agrave; lần đầu ti&ecirc;n m&igrave;nh tham gia b&aacute;o c&aacute;o tại hội nghị quốc tế. M&igrave;nh cho rằng ng&agrave;nh học của m&igrave;nh c&oacute; li&ecirc;n quan đến nhiều vấn đề cần phải cập nhật thường xuy&ecirc;n. Nếu muốn c&oacute; được kiến thức tốt v&agrave; s&acirc;u rộng về một vấn đề n&agrave;o đ&oacute; th&igrave; c&aacute;c bạn trẻ h&atilde;y thử sức l&agrave;m nghi&ecirc;n cứu.</p>\r\n\r\n<p>Ngo&agrave;i việc c&aacute;c bạn sẽ học được rất nhiều kĩ năng trong qu&aacute; tr&igrave;nh l&agrave;m nghi&ecirc;n cứu khoa học, c&aacute;c bạn c&ograve;n c&oacute; cơ hội được tham gia b&aacute;o c&aacute;o tại một hội nghị mang tầm cỡ quốc tế, nơi c&aacute;c bạn c&oacute; thể được thể hiện khả năng của bản th&acirc;n qua việc tr&igrave;nh b&agrave;y nghi&ecirc;n cứu trước hội đồng gi&aacute;m khảo c&oacute; uy t&iacute;n, để từ đ&oacute; trực tiếp trao đổi &yacute; kiến v&agrave; học hỏi kinh nghiệm từ c&aacute;c chuy&ecirc;n gia&rdquo;.</p>\r\n\r\n<p>Ph&uacute; cũng nhấn mạnh, việc tham gia nghi&ecirc;n cứu cũng như tham gia c&aacute;c hội nghị quốc tế c&oacute; uy t&iacute;n li&ecirc;n quan đến ng&agrave;nh học cũng l&agrave; cơ hội tốt để c&aacute;c bạn c&oacute; thể t&igrave;m kiếm được những học bổng sau đại học tại nước ngo&agrave;i.</p>\r\n\r\n<p>Bạn Phạm Thị &Aacute;nh Phương, th&agrave;nh vi&ecirc;n nh&oacute;m b&agrave;y tỏ: &ldquo;Đ&acirc;y l&agrave; cơ hội để m&igrave;nh c&oacute; thể lắng nghe những vấn đề chung trong khu vực từ những nghi&ecirc;n cứu cụ thể v&agrave; th&ocirc;ng qua c&aacute;c b&aacute;o c&aacute;o trực tiếp của c&aacute;c nước. Từ đ&oacute; sẽ phục tốt cho việc định hướng về nội dung cũng như lộ tr&igrave;nh ph&aacute;t triển bản th&acirc;n li&ecirc;n quan đến vấn đề chăm s&oacute;c sức khỏe người d&acirc;n tại nước nh&agrave;&rdquo;.</p>\r\n\r\n<p>Nữ sinh vi&ecirc;n Nguyễn Quỳnh Như cũng cho biết, bản th&acirc;n c&ocirc; rất vinh dự khi đề t&agrave;i của nh&oacute;m m&igrave;nh được chọn để tham dự hội nghị uy t&iacute;n mang tầm khu vực. &ldquo;Đ&acirc;y l&agrave; cơ hội để m&igrave;nh c&oacute; thể lắng nghe những chia sẻ từ c&aacute;c chuy&ecirc;n gia b&agrave;n về những giải ph&aacute;p khả thi về tương lai của lĩnh vực y tế c&ocirc;ng cộng v&agrave; sự ph&aacute;t triển trong c&aacute;c chương tr&igrave;nh chăm s&oacute;c sức khỏe. Từ đ&oacute;, m&igrave;nh th&ecirc;m tự tin v&agrave; c&oacute; nhiều động lực để theo đuổi đam m&ecirc; v&agrave; ng&agrave;nh học đ&atilde; chọn&rdquo;, Như n&oacute;i.</p>\r\n\r\n<p>C&ograve;n với th&agrave;nh vi&ecirc;n Phan Tr&agrave;, tham dự Hội nghị quốc tế về c&aacute;c vấn đề Y tế c&ocirc;ng cộng mở rộng giữa c&aacute;c nước Tiểu v&ugrave;ng M&ecirc; K&ocirc;ng mở rộng lần thứ 8 ch&iacute;nh l&agrave; cơ hội để giao lưu học hỏi với c&aacute;c sinh vi&ecirc;n c&aacute;c nước trong khu vực, những người c&ugrave;ng lĩnh vực nghi&ecirc;n cứu v&agrave; học tập v&agrave; cũng l&agrave; dịp để c&oacute; thể kh&aacute;m ph&aacute; s&acirc;u sắc hơn về văn h&oacute;a của c&aacute;c nước l&aacute;ng giềng.</p>\r\n\r\n<p>Trong khu&ocirc;n khổ hội nghị, c&oacute; tổng cộng 185 b&agrave;i b&aacute;o c&aacute;o khoa học (ph&aacute;t biểu miệng v&agrave; triễn l&atilde;m poster) với c&aacute;c chủ đề y tế c&ocirc;ng cộng đa dạng được tr&igrave;nh b&agrave;y. Hội nghị thực sự đ&atilde; mang lại những lợi &iacute;ch thiết thực cho việc cung cấp c&aacute;c bằng chứng khoa học v&agrave; thực tiễn trong lập ch&iacute;nh s&aacute;ch trong nhiều lĩnh vực y tế c&ocirc;ng cộng ở nhiều v&ugrave;ng v&agrave; quốc gia.</p>\r\n\r\n<p style="text-align:right"><strong>Lệ Thu<em> - D&acirc;n tr&iacute;</em></strong></p>\r\n</div>\r\n\r\n<p><!--EndFragment--></p>\r\n', 'baiviet-1480000811.jpg', 1480000811, 14, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `caphoc`
--

CREATE TABLE `caphoc` (
  `id_cap` int(2) NOT NULL,
  `tencap` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `caphoc`
--

INSERT INTO `caphoc` (`id_cap`, `tencap`) VALUES
(1, 'Tiểu học'),
(2, 'Trung học cơ sở'),
(3, 'Trung học phổ thông');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(2) NOT NULL,
  `tencat` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `tencat`) VALUES
(1, 'Hướng dẫn sử dụng website'),
(2, 'Tin tức học đường'),
(13, 'Các kỳ thi'),
(14, 'Du học');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_ph` int(5) NOT NULL,
  `doituong` int(2) NOT NULL,
  `noidung_chat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_chat` int(15) NOT NULL,
  `ph_seen` int(2) NOT NULL,
  `gs_seen` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_gs`, `id_ph`, `doituong`, `noidung_chat`, `time_chat`, `ph_seen`, `gs_seen`) VALUES
(44, 20, 2, 0, 'Con chào cô ạ', 1480003619, 1, 1),
(45, 20, 2, 1, 'Cô chào con', 1480003650, 1, 1),
(46, 20, 2, 0, 'Chào buổi tối', 1480169151, 1, 1),
(47, 20, 2, 1, ':D', 1480169165, 1, 1),
(48, 20, 2, 0, 'rtyyfgdsdfg', 1480169182, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment_bv`
--

CREATE TABLE `comment_bv` (
  `id_cmt` int(11) NOT NULL,
  `id_bv` int(11) NOT NULL,
  `hoten_cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `email_cmt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `time_cmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment_bv`
--

INSERT INTO `comment_bv` (`id_cmt`, `id_bv`, `hoten_cmt`, `email_cmt`, `noidung_cmt`, `time_cmt`) VALUES
(1, 49, 'Trần Bình Long', 'tranbinhlong@gmail.com', 'Thi ở Mỹ có khác, thấy cũng phức tạp hơn Việt Nam nhiều', 1479996670),
(2, 46, 'Mai Thị Hoa', 'maithihoa@gmail.com', 'Bây giờ thì khó rồi đây :''(', 1479996957),
(3, 48, 'Trần Bình Trọng', 'tranbinhtrong@gmail.com', 'Ồ hay quá', 1480003441),
(4, 51, '', '', '', 1480124514),
(5, 1, 'Mai Thị Hoa', 'trancongtai@gmail.com', '2222222222222222222222222', 1480169378);

-- --------------------------------------------------------

--
-- Table structure for table `comment_gs`
--

CREATE TABLE `comment_gs` (
  `id_cmt` int(10) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_ph` int(5) NOT NULL,
  `noidung_cmt` text COLLATE utf8_unicode_ci NOT NULL,
  `time_cmt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment_gs`
--

INSERT INTO `comment_gs` (`id_cmt`, `id_gs`, `id_ph`, `noidung_cmt`, `time_cmt`) VALUES
(1, 20, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1476548565),
(2, 10, 1, 'Lễ phép', 1231112321),
(4, 20, 3, 'Dễ gần, nói chuyện rất lịch sự', 1231112321),
(5, 10, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(6, 8, 1, 'Đường hoàng, lễ phép, đúng giờ', 1231112321),
(8, 10, 1, 'Lễ phép', 1231112321),
(9, 8, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(10, 20, 2, 'Đôi lúc hay rụt rè, nhưng nói chung là rất tốt', 1231112321),
(11, 10, 1, 'Đường hoàng', 1231112321),
(13, 20, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(14, 10, 1, 'Lễ phép', 1231112321),
(15, 8, 1, 'dạy tốt', 1231112321),
(16, 20, 3, 'Chào hỏi rất lịch sự, mỗi khi vào dạy hay ra về', 1231112321),
(17, 19, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(18, 8, 1, 'Đường hoàng, lễ phép, đúng giờ', 1231112321),
(19, 20, 2, 'Đường hoàng, lễ phép, đúng giờ', 1231112321),
(20, 10, 1, 'Lễ phép', 1231112321),
(21, 8, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(22, 20, 1, 'Hơi hiền', 1231112321),
(23, 10, 1, 'Đường hoàng', 1231112321),
(24, 19, 1, 'Đường hoàng, lễ phép, đúng giờ', 1231112321),
(25, 20, 3, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(27, 8, 1, 'dạy tốt', 1231112321),
(28, 20, 2, 'Kiến thức và kỹ năng tốt', 1231112321),
(29, 10, 1, 'Nhờ cháu này, mà con tôi 3 năm liền đều học sinh giỏi', 1231112321),
(30, 8, 1, 'Đường hoàng, lễ phép, đúng giờ', 1231112321),
(31, 20, 1, 'Thông minh, cách dạy rất sáng tạo', 1231112321),
(32, 10, 1, 'Lễ phép', 1231112321),
(35, 10, 1, 'Đường hoàng', 1231112321),
(36, 20, 2, 'Ngoan, hiền', 1480168992);

-- --------------------------------------------------------

--
-- Table structure for table `confirm_gs`
--

CREATE TABLE `confirm_gs` (
  `id_cf` int(10) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_ph` int(5) NOT NULL,
  `time_cf` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `confirm_gs`
--

INSERT INTO `confirm_gs` (`id_cf`, `id_gs`, `id_ph`, `time_cf`) VALUES
(1, 3, 1, 1476548565),
(20, 20, 3, 1479919422),
(21, 7, 2, 123456),
(25, 20, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dangkymon`
--

CREATE TABLE `dangkymon` (
  `id_dk` int(10) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_mon` int(4) DEFAULT NULL,
  `id_lop` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangkymon`
--

INSERT INTO `dangkymon` (`id_dk`, `id_gs`, `id_mon`, `id_lop`) VALUES
(1, 3, 2, 3),
(2, 5, 4, 10),
(3, 19, 5, 2),
(4, 19, 8, 10),
(29, 2, 2, 2),
(30, 3, 2, 2),
(31, 4, 2, 2),
(32, 5, 2, 2),
(33, 6, 2, 2),
(34, 7, 2, 2),
(35, 6, 2, 2),
(37, 8, 2, 2),
(38, 9, 2, 2),
(39, 10, 2, 2),
(40, 11, 2, 2),
(41, 12, 2, 2),
(42, 13, 2, 2),
(43, 14, 2, 2),
(44, 20, 2, 2),
(45, 20, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `giasu`
--

CREATE TABLE `giasu` (
  `id_gs` int(5) NOT NULL,
  `username_gs` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fullname_gs` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_gs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mail_gs` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone_gs` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_gs` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_register` int(15) NOT NULL,
  `ngaysinh_gs` date DEFAULT NULL,
  `xu_gs` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `mota_gs` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_gs` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_quan` int(3) NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giasu`
--

INSERT INTO `giasu` (`id_gs`, `username_gs`, `fullname_gs`, `password_gs`, `mail_gs`, `phone_gs`, `diachi_gs`, `time_register`, `ngaysinh_gs`, `xu_gs`, `is_active`, `mota_gs`, `img_gs`, `id_quan`, `diem`) VALUES
(2, 'mytam', 'Trần Thị Mỹ Tâm', 'c29de6538adb16bb0cb5801459010f4b', 'nguyenquangdo@gmail.com\n', '918783906', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001639.jpg', 1, 0),
(3, 'ngoquangchau', 'Ngô Quang Châu', 'ba228e55970144a75be8d7c8c3195ef0', 'honguyendhya1218@gmail.com\n', '909403308', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001666.jpg', 3, 0),
(4, 'tranquanghau', 'Trần Quang Hậu', 'ba228e55970144a75be8d7c8c3195ef0', 'nguyentien3296@gmail.com\n', '912598957', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 22000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001630.jpg', 1, 4),
(5, 'nguyenthanh', 'Nguyễn Thanh', 'ba228e55970144a75be8d7c8c3195ef0', 'leminhkhue94@gmail.com\n', '1215727679', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001613.jpg', 1, 0),
(6, 'minhtuan', 'Trần Minh Tuấn', 'ba228e55970144a75be8d7c8c3195ef0', 'lizchoco.97@gmail.com\n', '905538075', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001691.jpg', 1, 0),
(7, 'hellokitty', 'Lý Thị Minh Châu', 'ba228e55970144a75be8d7c8c3195ef0', 'duong1302dn@gmail.com\n', '1204033493', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001603.jpg', 1, 4),
(8, 'superman', 'Cao Bá Huy', 'ba228e55970144a75be8d7c8c3195ef0', 'superman@gmail.com', '1635473542', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001730.jpg', 1, 0),
(9, 'maiho', 'Mai Huy', 'ba228e55970144a75be8d7c8c3195ef0', 'maiho@gmail.com', '942710273', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001750.jpg', 1, 0),
(10, 'tranthanhmai', 'Trần Thanh Mai', 'ba228e55970144a75be8d7c8c3195ef0', 'lengoc3005@gmail.com\n', '1263579088', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001577.jpg', 1, 0),
(11, 'caothiminh', 'Cao Thị Minh', 'ba228e55970144a75be8d7c8c3195ef0', 'phongyhcute@gmail.com\n', '1203315346', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001568.jpg', 1, 0),
(12, 'huynhtanphat', 'Huỳnh Tấn Phát', 'ba228e55970144a75be8d7c8c3195ef0', 'quyentrandtqt@gmail.com\n', '962393131', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 1, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001541.jpg', 1, 1),
(13, 'nguyentrongcuc', 'Nguyễn Trọng Cúc', 'ba228e55970144a75be8d7c8c3195ef0', 'nguyentrongcuc@gmail.com', '935741828', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 0, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001791.jpg', 1, 4),
(14, 'vovanhhoan', 'Võ Văn Hoan', 'ba228e55970144a75be8d7c8c3195ef0', 'vovanhhoan@gmail.com', '935054744', 'KTX DMC Hòa Khánh, 08 Hà Văn Tính, Đà Nẵng', 1476548565, '1993-10-15', 32000, 0, 'Học giỏi, chịu khó, trách nhiệm', 'giasu-1480001774.jpg', 1, 0),
(15, 'minhchitai', 'Minh Chí Tài', 'ba228e55970144a75be8d7c8c3195ef0', 'thilanh94@gmail.com\n', '1632930325', 'd', 1478771058, NULL, 0, 1, '', 'giasu-1480001481.jpg', 1, 0),
(16, 'luongmanhhai', 'Lương Mạnh Hải', '8a410643079e740c339200d65226d78d75a9b7b3', 'luongmanhhai@gmail.com', '919491159', '113 Cao Tân, Sơn Trà', 1478782472, '1995-10-03', 100000, 1, 'Giỏi, chăm chỉ, có tinh thần trách nhiệm cao', 'giasu-1480001472.jpg', 4, 0),
(17, 'nickthunghiem', 'Tiểu Châu', 'ba228e55970144a75be8d7c8c3195ef0', 'Alittlestar95@gmail.com\n', '1676894321', '12', 1478782871, NULL, 0, 0, '', 'giasu-1480001461.jpg', 5, 0),
(18, 'cobietgidau', 'Ngô Quang Thái Vũ', 'ba228e55970144a75be8d7c8c3195ef0', 'hauntn1312@gmail.com\n', '987997979', '987997979', 1479314791, NULL, 0, 1, '', 'giasu-1480001452.jpg', 1, 0),
(19, 'yeulakho', 'Vũ Thị Thuyết', 'c45fda3b3e5208ed7c6072e1f60d838d84671e4a', 'nhutin123@gmail.com\n', '1685214523', 'Hòa Khánh', 1479386428, '1995-02-10', 0, 0, 'Đây là dòng giới thiệu bản thân', 'giasu-1480001444.jpg', 5, 4),
(20, 'usergiasu', 'Trần Cao Hải', '3f8abaa6f7242382201f8af19f2b9c6b32fe6b18', 'usergiasu@gmail.com', '947674765', 'Cẩm Lệ', 1479457736, '1995-02-10', 0, 0, 'Trách nhiệm cao, năng động và đã có nhiều kinh nghiệm gia sư', 'giasu-1480128452.jpg', 1, 2),
(21, 'luongsonba', 'Lương Sơn Bá', 'c90914d0254e71197f32e4d6d1a29f97897b78fb', 'luongsonba@gmail.com', '1645246040', '193 Nguyễn Lương Bằng, Đà Nẵng', 1479819313, '2016-11-15', 0, 1, 'Giỏi', 'giasu-1480001435.JPG', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `giatri`
--

CREATE TABLE `giatri` (
  `id_gt` int(11) NOT NULL,
  `tengt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giatri`
--

INSERT INTO `giatri` (`id_gt`, `tengt`, `gt`) VALUES
(1, 'gtweb', '<p>Website Gia sư Online l&agrave; website d&ugrave;ng để kết nối giữa gia sư v&agrave; phụ huynh.</p>\r\n\r\n<p>Phụ huynh v&agrave; gia sư c&oacute; thể đăng k&yacute; t&agrave;i khoản v&agrave; đợi sự chấp thuận từ admin.</p>\r\n\r\n<p>Phụ huynh c&oacute; thể t&igrave;m kiếm gia sư v&agrave; gửi lời mời đề nghị đến gia sư nếu muốn. Gia sư c&oacute; thể đồng &yacute; hoặc kh&ocirc;ng đồng &yacute; đối với lời đề nghị của phụ huynh. Khi cả hai người đều hợp t&aacute;c với nhau, cả hai đều bị trừ một số t&agrave;i khoản l&agrave; 10.000 xu.</p>\r\n\r\n<p>Phụ huynh c&oacute; thể b&igrave;nh luận, gửi tin nhắn, like hoặc bầu chọn cho gia sư. Phụ huynh hoặc gia sư đều c&oacute; thể hủy hợp t&aacute;c bất kỳ l&uacute;c n&agrave;o</p>\r\n'),
(2, 'view_web', '8785'),
(3, 'Số xu bị trừ khi hợp đồng ký kết', '10000'),
(7, 'Môn tối đa đăng ký', '3');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lh` int(10) NOT NULL,
  `tenlh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail_lh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone_lh` int(15) NOT NULL,
  `noidung_lh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_lh` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lh`, `tenlh`, `mail_lh`, `phone_lh`, `noidung_lh`, `time_lh`) VALUES
(63, 'Nguyễn Cao Toàn', 'nguyencaotoan@gmail.com', 923214562, 'Nhờ website mà việc tìm kiếm gia sư trở nên dễ dàng hơn, chớ không như các trung tâm khác', 1232123456),
(64, 'tengiasu2', 'tengiasu@gmail.com', 234567890, '4567890-=', 1480124243),
(65, 'mmmmmmmmmmmmm', 'm@m.m', 1232102563, 'demo', 1480143505),
(66, 'mmmmmmmmmmmmm', 'm@m.m', 1232102563, 'demo', 1480143518),
(67, 'thử nghiệm', 'thunghiem@m.com', 2147483647, '6789oiktf7y8uikm', 1480154930),
(68, 'Cao Vĩnh Tài', 'caovinhtai@gmail.com', 987654321, 'Chào admin, \r\nAdmin có khỏe không ạ?', 1480167724),
(69, 'Thái Văn Lợi', 'trancaotai@gmail.com', 987654321, 'AMDMDMD', 1480168867),
(70, 'Thái Văn Lợi', 'trancaotai@gmail.com', 987654321, 'AMDMDMD44444444444444444', 1480168875);

-- --------------------------------------------------------

--
-- Table structure for table `like_gs`
--

CREATE TABLE `like_gs` (
  `id_like` int(10) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_ph` int(5) NOT NULL,
  `loailike` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `like_gs`
--

INSERT INTO `like_gs` (`id_like`, `id_gs`, `id_ph`, `loailike`) VALUES
(1, 2, 1, 1),
(2, 19, 1, 1),
(14, 8, 2, 1),
(18, 20, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id_lop` int(4) NOT NULL,
  `tenlop` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_cap` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id_lop`, `tenlop`, `id_cap`) VALUES
(1, 'Lớp 1', 1),
(2, 'Lớp 2', 1),
(3, 'Lớp 3', 1),
(4, 'Lớp 4', 1),
(5, 'Lớp 5', 1),
(6, 'Lớp 6', 2),
(7, 'Lớp 7', 2),
(8, 'Lớp 8', 2),
(9, 'Lớp 9', 2),
(10, 'Lớp 10', 3),
(11, 'Lớp 11', 3),
(12, 'Lớp 12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id_mon` int(4) NOT NULL,
  `tenmon` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id_mon`, `tenmon`) VALUES
(2, 'Toán'),
(4, 'Sinh học'),
(5, 'Văn học'),
(6, 'Anh văn'),
(7, 'Địa lý'),
(8, 'Lịch sử'),
(9, 'Tổng hợp'),
(10, 'Âm nhạc'),
(11, 'Hóa học'),
(12, 'Vật lý');

-- --------------------------------------------------------

--
-- Table structure for table `phuhuynh`
--

CREATE TABLE `phuhuynh` (
  `id_ph` int(5) NOT NULL,
  `username_ph` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fullname_ph` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_ph` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail_ph` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone_ph` int(20) DEFAULT NULL,
  `diachi_ph` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_quan` int(3) NOT NULL,
  `is_active` int(2) NOT NULL,
  `xu_ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuhuynh`
--

INSERT INTO `phuhuynh` (`id_ph`, `username_ph`, `fullname_ph`, `password_ph`, `mail_ph`, `phone_ph`, `diachi_ph`, `id_quan`, `is_active`, `xu_ph`) VALUES
(1, 'tranthixuan', 'Trần Thị Xuân', 'ea152e23e532ddd6d7e19fc0146ab404', 'tranthixuyen@yahoo.com', 921456782, '223 Nguyễn Công Hoan, Cẩm Lệ, Đà Nẵng', 4, 0, 0),
(2, 'phuhuynha', 'Nguyễn Mai Huyền', 'f2200b54d3f7683346684d4de6d24a90aeabbebe', 'email@mail.com', 1234567896, 'Đường Ngũ Hành Sơn', 5, 1, 34457890),
(3, 'caothichau', 'Cao Thị Châu', '9c738f8a1d34e2206ba0fc327abeadbeaaaf0a8d', 'tranthino@gmail.com', 1234567890, '154 Nguyễn Lương Bằng, ĐN', 3, 1, 90000),
(4, 'tranbinhchi', 'Trần Bình Chí', 'f2200b54d3f7683346684d4de6d24a90aeabbebe', 'tranbinhchi102@gmail.com', 912598957, 'K48/27, Lê Độ, quận Thanh Khê, Đà Nẵng', 2, 1, 230000),
(5, 'tranbinhchi', 'Trần Bình Chí', 'GDNWNLUVDNPMPPPIPCAKZREKZTMOKJHNWCWQZWC', 'tranbinhchi102@gmail.com', 912598957, 'K698 Trần Cao Vân', 5, 1, 9000),
(6, 'lekieuoanh', 'Lê Kiều Oanh', 'RQCOZMPVMRCKWFXJZNTLAOFFHEFAWSFVHXLJVCD', 'lekieuoanh@gmail.com', 1215727679, '75/12 Hùng Vương phường Hải Châu 1 quận Hải Châu tp Đà Nẵng', 2, 0, 680000),
(7, 'caotankhai', 'Cao Tấn Khải', 'DJGHUISBONUQSDHXAAYOMEEGFUODODCZHBUOQYC', 'caotankhai001@gmail.com', 905538075, 'tổ 19 lộc phước 3', 3, 1, 611000),
(8, 'minhtam', 'Minh Tâm', 'NQDXLLSPLEUZSUZQVRLUOTOZJGYEGWKCCCLLZKA', 'nguoidingang@gmail.com', 1204033493, 'xã Hòa Liên, huyện Hòa Vang, Đà Nẵng', 5, 0, 787000),
(9, 'khanhtoan', 'Khánh Toàn', 'VJINPBHVSMYVIEGJILTWYUXDPUMJDITMKCWHFGU', 'toansida@gmail.com', 1635473542, 'Điện Bàn Quảng Nam', 4, 1, 621000),
(10, 'tranhai', 'Trần Hải', 'YIKVAVEWLPFDRUNDKYQIZVXDCBOXZQTRGHJSSRW', 'haitran10021995@gmail.com', 942710273, 'Trần Bạch Đằng, Sơn Trà, Đà Nẵng', 4, 0, 215000),
(11, 'caochi', 'Cao Chí', 'ZFQIGKPWWHMQQGDOCBWKBEGCBLCEOGCSNOTJWLE', 'Lekhanh117@gmail.com', 1682415263, 'K408/116 HOÀNG DIỆU, HẢI CHÂU, ĐÀ NẴNG', 5, 1, 427000),
(12, 'tranminhtrung', 'Trần Minh Trung', 'NFRVJDEYMTJPUNWSXLKCXZLWZJHPAVSIBDUARMC', 'hongnguyet2010@gmail.com', 1263579088, 'K289/185truong chinh- da nang', 4, 1, 818000),
(13, 'letando', 'Lê Tấn Độ', 'ZAIJBQBHGTAZBFSUCQSBHRVZZKBRFVIGKQKAELU', 'itychanged@gmail.com', 1203315346, 'k2/41 Phan Hành Sơn, Đà Nẵng', 3, 1, 17000),
(14, 'nguyencaocuong', 'Nguyễn Cao Cường', 'CNSJTAKRKVAFZNXGVXHPVKALDAZMAGHWHOTAGCY', 'honguyendhya1218@gmail.com', 962393131, 'Nhĩ Thượng - Gio Mỹ - Gio Linh - Quảng Trị', 5, 1, 86000),
(15, 'lethimy', 'Lê Thị Mỹ', 'LIIYFVIYHFXIAZJXHKQNSGKYQCACSXBSYSBULDQ', 'nguyentien3296@gmail.com', 935741828, 'ktx dmc 579 ngũ hành sơn', 3, 0, 721000),
(16, 'thaithiminhchau', 'Thái Thị Minh Châu', 'CQIRZOCFXGIDZARHGERSUEOWQPPBOFADXGFKBZP', 'leminhkhue94@gmail.com', 935054744, 'k16/11 Hoàng Sĩ Khải, Phường An Hải Bắc, Quận Sơn Trà', 7, 0, 458000),
(17, 'trancongdat', 'Trần Công Đạt', 'JWSAKXSIWCRFEQXZVQYMRAPQQOXBQTFPUYWBGEK', 'lizchoco.97@gmail.com', 1646540019, 'Đà nẵng', 5, 0, 600000),
(18, 'lecaocuong', 'Lê Cao Cường', 'WMGCIGIHQDPVFHYMSOUNSKQYCKEHKTGDXLFBXHG', 'ntndiep.90@gmail.com', 1202644899, '143 phường hòa minh quận liên chiểu thành phố đà nẵng', 6, 1, 60000),
(19, 'nguyenthiha', 'Nguyễn Thị Hà', 'WQTKOXBWPAHOXCJGNJKQFMMYOEHNSIUXCRHREOE', 'secpro1998@gmail.com', 1206153118, '231-Kinh dương Vương- Liên chiểu', 3, 0, 167000),
(20, 'lengockhanh', 'Lê Ngọc Khánh', 'FYJXPKDIGCGMAPICOQANJEVRSERKZXFRCSSPGJZ', 'nhukhuenguyenhuu08@gmail.com', 1633369240, '71 Ngũ Hành Sơn, Đà Nẵng', 4, 0, 609000),
(21, 'nguyethihongnguyet', 'Nguyễn Thị Hồng Nguyệt', 'SIAMOHWGXZEPIGWBYVJCRETXDWVMJSZFTDWVNCI', 'duong1302dn@gmail.com', 1632930325, '46 An Nhơn 10- An Hải Bắc- Sơn Trà', 4, 0, 781000),
(22, 'dovanhoang', 'Đỗ Văn Hoàng', 'RCLOZROWRFFVJIQNVLKRFTGZUMDQHVHHYHEOUCZ', 'huuquang11a1@gmail.com', 935469142, 'Phú Hòa. Hòa Nhơn.Hòa Vang.DN', 2, 0, 758000),
(23, 'hophuongthaonguyen', 'Hồ Phương Thảo Nguyên', 'MDEBQHQZKNVGMJRIJCGCZPEHWZCEMACRCJDFTCM', 'lengoc3005@gmail.com', 919491159, 'số 14 doãn uẩn tp đà nẵng', 7, 1, 851000),
(24, 'nguyenvantien', 'Nguyễn Văn Tiên', 'QYENXJKAKCLQVUJAJYTPCYNHNICYNEYYOBKWZNH', 'phongyhcute@gmail.com', 1206156915, '122/11 Phan Thanh, Đà Nẵng', 6, 0, 898000),
(25, 'leminhkhue', 'Lê Minh Khuê', 'WFLOCQPKGVYFLZHSCKTKFIVZVXGWAIFJPZXLNAX', 'anhdo1999@outlook.com.vn', 1676894321, '76/4 Nguyễn Thị Minh Khai, Đà Nẵng', 7, 0, 143000),
(26, 'maithithuyhuyen', 'Mai Thị Thúy Huyền', 'TRQSOXZHECDJAVXWNTTGZHDCSHFNYZXWVGWSFGG', 'ngoctruongbaoo@gmail.com', 917976881, '19 tiên sơn 10', 3, 0, 832000),
(27, 'nguyenthingocdiep', 'Nguyễn Thị Ngọc Diệp', 'KYWFNRPIKIZHKAQMQVCHLCQEWAPWREXXGTUSLWT', 'duynghia1006@gmail.com', 1655026120, 'k49 trương chí cương, hòa cường nam, hải châu', 6, 0, 340000),
(28, 'nguyenhuuhuy', 'Nguyễn Hữu Huy', 'DMTVLORFGYTDFUVGANPIYAOMZQZPFMJSGETJADN', 'quyentrandtqt@gmail.com', 1633483066, '277 Huy Cận - Khuê Trung - Cẩm Lệ - Đà Nẵng', 4, 1, 90000),
(29, 'nguyenhuunhukhue', 'Nguyễn Hữu Như Khuê', 'DVEDMBCCECFVVULUSMMXHEJDCGDDTSXSQYUOAIP', 'sangtrang74216241@gmail.com', 947674765, 'K71/16 nguyễn tri phương, tp Đà Nẵng', 3, 1, 776000),
(30, 'nguyenngoccatduong', 'Nguyễn Ngọc Cát Dương', 'MQHFTCIDWRXTXMKMGCDTDLOEZIXWMKDJSDPIUIO', 'Alittlestar95@gmail.com', 1224400270, 'Cầu vượt Ngô Sĩ Liên- Hòa Khánh - Đà Nẵng', 6, 1, 652000),
(31, 'nguyentranhuuquang', 'Nguyễn Trần Hữu Quang', 'JOYBMXURWRJKOXNTRKBIKVQCZIJIYYJLSFAJSRU', 'Hongsirodau@gmail.com', 1226331628, '14Doãn Uẩn, P. Khuê Mỹ, Đà Nẵng', 2, 0, 987000),
(32, 'lethingoc', 'Lê Thị Ngọc', 'AOQKNUECXFIVUTVBELTGOEECRQQFHLBWSQUBZER', 'dinhtngochuyen@gmail.com', 1214104503, 'hoà khánh - đà nẵng', 6, 0, 398000),
(33, 'nguyenthanhphong', 'Nguyễn Thanh Phong', 'VRNWQTIJWCPBBAOIICYCWMBMHKWPVGHMOOINNUE', 'pyc4686micky6002@gmail.com', 1639755449, '99/16 Núi Thành', 1, 1, 223000),
(34, 'dohoanganh', 'Đỗ Hoàng Anh', 'VMLYNCCCFAQHMCGLTEVTXTMIQIFCBEBNXYONQTP', 'thilanh94@gmail.com', 1645246040, 'k159/29 trần thái tông', 5, 0, 999000),
(35, 'truongthibaongoc', 'Trương Thị Bảo Ngọc', 'IMXQYOWLYUIWGCRHOODHIUUUPILFIEPVPBZWXNI', 'nguyensy99@gmail.com', 1202425565, 'k138/24 Phan Thanh', 2, 0, 322000),
(36, 'tranvannghixa', 'Trần Văn Nghĩa', 'IWPOEBKJONZAVPWYPNLSIHOVFIGXZCNSTVMUGVN', 'vothingoclan02@gmail.com', 905755594, '18 Mộc Bài 4, p. Hòa Khánh Nam, q. Liên Chiểu', 1, 0, 62000),
(37, 'dangthiquyentran', 'Đặng Thị Quyền Trân', 'DAMSXWBMMOQSOUSRAQJGOZBKHFWHDIGXZFVFWYX', 'square496@gmail.com', 937991748, 'thôn phù sa,xã quế xuân 1,huyện quê son,tinh quang nam', 1, 1, 166000),
(38, 'tranminhsang', 'Trần Minh Sang', 'AKZJIWRGFKQSAAFBROAGDIQXSFJJODXPYRDFRZU', 'havipham139@gmail.com', 905483394, 'ktx DMC-579 phía đông', 2, 0, 437000),
(39, 'nguyenthithuydung', 'Nguyễn Thị Thuỳ Dung', 'OGMOPNAEOVOZOPLBXBAOMOPAGDTHGMDXDDVJTMP', 'sinhtodau12@gmail.com', 1674283829, 'Đường 2/9 quận Hải Châu Đà Nẵng', 1, 1, 139000),
(40, 'huynhthithanhhong', 'Huỳnh Thị Thanh Hồng', 'SFUGHVWEHNGZJFPXBNRXVFOCQTUVJNOLRJQYOPV', 'hauntn1312@gmail.com', 1263835504, '68 Trần Tấn Mới,hải châu', 4, 0, 209000),
(41, 'dinhthingochuyen', 'Đinh Thị Ngọc Huyền', 'VPUXVUGIFJUULRLQHVIEAXTLTYTODPYFTYEFZAA', 'namdinh445@gmail.com', 981244448, 'Đà Nẵng', 1, 1, 767000),
(42, 'nguyenthiaily', 'Nguyễn Thị Ái Ly', 'EJBHWWMBIZBRSBYTIVTIAJBYJWCDEFAWLLUWBLC', 'danglekimhoa@gmail.com', 935605478, 'K111/17, đường 2/9, phường Hòa Cường Nam , TP Đà Nẵng', 3, 0, 433000),
(43, 'hothilanh', 'Hồ Thị Lành', 'YUUFFGRHGYRKAKHMRRGPEJCGWPGUFKLMXSWLVJV', 'phatqt456789@gmail.com', 944790955, 'Đại học Sư phạm', 2, 1, 640000),
(44, 'nguyenvansy', 'Nguyễn Văn Sỹ', 'ANPESPIQPUNMVGCEBCNCWAACWNFRPDHTQIMRZTT', 'putyourspam@gmail.com', 1224826496, '73 Phan Dang Luu', 2, 0, 504000),
(45, 'vothingoclan', 'Võ Thị Ngọc Lan', 'INRLBINGLCOAZRRKPMTWVIACJGRDBNRIGISHDCO', 'lehonglinh186@gmail.com', 905627067, 'K172/15 Nguyễn Duy Hiệu, tp Đà Nẵng', 4, 0, 336000),
(46, 'latandat', 'Lã Tấn Đạt', 'KKIFYMWKTXUTNUXJWTXBCBJWLZHSODKSXAZNXKJ', 'culylanhchanh@yahoo.com', 905090053, '31 trần Phú', 1, 1, 411000),
(47, 'phamngochavi', 'Phạm Ngọc Hà Vi', 'VKHDMCHMAVHQFTHFFRSJDFDTFIGAMCHAXNCAUAC', 'nhutin123@gmail.com', 1202547754, '268 âu cơ hòa khánh bắc . liên chiểu . đà nẵng', 1, 1, 229000),
(48, 'lethimychi', 'Lê Thị Mỹ Chi', '5b47e131dfd8f66de74d2080b937df4e182a31a1', 'buitrauyen@gmail.com', 905030294, '09 An Thượng 18 Mỹ An Đà nẵng', 2, 1, 0),
(49, 'nguyenthingochau', 'Nguyễn Thị Ngọc Hậu', 'XTGSAZAJQRLDHDRQJSKBFDIDPHNDMGGPHXJARJK', 'nguyenbngoc73@gmail.com', 935886346, '42 Văn Cận, Phường Khuê Trung, Quận Cẩm Lệ, TP Đà Nẵng', 5, 1, 856000),
(50, 'caotai', 'Cao Vĩnh Tài', 'e6aea1ffe811cd7b8e108ec07d0cc5308529389c', 'caovinhtai02@gmail.com', 1698995895, 'c', 1, 1, 0),
(51, 'caotai02c', 'Cao Vĩnh Tài', '1114a43893c2692dc9adabce9826d51da713b8a1', 'trancaovinhtai02@gmail.com', 1234567543, 'Hòa Khương', 1, 1, 0),
(52, 'caotai02f', 'Cao Vĩnh Tài', '4057d031ebdf0981f3564d8f0d3ec1fd0accf882', 'huamaccaovinhtai@gmail.com', 987654321, 'Hòa Khương', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `id_qc` int(3) NOT NULL,
  `tenqc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img_qc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_qc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_activeqc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`id_qc`, `tenqc`, `img_qc`, `link_qc`, `is_activeqc`) VALUES
(3, 'themeforest', 'themeforest.png', 'https://themeforest.net/', 1),
(4, 'Envato', 'quangcao-1478787948.jpg', 'https://envato.com/', 1),
(5, 'Designmodo', 'quangcao-1478788015.jpg', 'https://designmodo.com/', 1),
(6, 'Creativemarket', 'quangcao-1479456928.jpg', 'https://creativemarket.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `id_quan` int(3) NOT NULL,
  `tenquan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`id_quan`, `tenquan`) VALUES
(1, 'Cẩm Lệ'),
(2, 'Liên Chiểu'),
(3, 'Thanh Khê'),
(4, 'Hải Châu'),
(5, 'Ngũ Hành Sơn'),
(6, 'Sơn Trà'),
(7, 'Hòa Vang');

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

CREATE TABLE `quantri` (
  `id` int(3) NOT NULL,
  `username_qt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fullname_qt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail_qt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_qt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_chuc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`id`, `username_qt`, `fullname_qt`, `mail_qt`, `password_qt`, `id_chuc`) VALUES
(1, 'admin', 'Administrator', 'admin@thailoi.com.vn', '1d59f39dc7d369ee6f679bbd79c1312a0720e6aa', 3),
(2, 'thaivanloidn', 'Thái Văn Lợi', 'thaivanloidn@gmail.com', 'd1248294692919af856fc04626d51d4fe424e599', 2),
(3, 'thailoi', 'Nguyễn Cao Tài', 'nguyencaotai@gmail.com', '1aea43c8db79e54a1b5e3dfd9f5c53578654480e', 3),
(4, 'luongmanhkhai', 'Lương Mạnh Khải', 'luongmanhkhai@gmail.com', 'd00b826481337a7ae31748d8a8de5bf69299fab4', 1),
(5, 'trantaiminh', 'Trần Tài Minh', 'trantaiminh@gmail.com', 'a98cf8720532665b6690d330946fe2e00bca1554', 2),
(6, 'minhdat', 'Cao Minh Đạt', 'caominhdat@gmail.com', '1ebea3fedff4f8b32216ecf2fad2c9fa63a50ae6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_sl` int(5) NOT NULL,
  `tensl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_sl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_sl` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota_sl` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_sl`, `tensl`, `img_sl`, `link_sl`, `mota_sl`) VALUES
(1, 'Hướng dẫn sử dụng website', 'slider1.png', '/huong-dan-su-dung-website-giasuonline-1', 'Cách sử dụng website cho phụ huynh và gia sư'),
(3, 'Các bài viết từ website', 'slider2.png', '/bai-viet.html', 'Những tin tức mới sẽ được cập nhật kịp thời nhất'),
(4, 'Những điều bạn cần lưu ý', 'slider3.png', 'http://loigiasu.vinaenter.com/luu-y.html', 'Bạn cần đọc kỹ các quy định này');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id_vote` int(10) NOT NULL,
  `id_gs` int(5) NOT NULL,
  `id_ph` int(5) NOT NULL,
  `diem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id_vote`, `id_gs`, `id_ph`, `diem`) VALUES
(1, 2, 1, 3),
(3, 20, 3, 3),
(4, 20, 1, 2),
(43, 12, 2, 1),
(49, 7, 2, 1),
(56, 20, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `baivietchuyenmuc` (`id_cat`),
  ADD KEY `nguoidangbai` (`id_qt`);

--
-- Indexes for table `caphoc`
--
ALTER TABLE `caphoc`
  ADD PRIMARY KEY (`id_cap`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `giasuchat` (`id_gs`),
  ADD KEY `phuhuynhchat` (`id_ph`);

--
-- Indexes for table `comment_bv`
--
ALTER TABLE `comment_bv`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indexes for table `comment_gs`
--
ALTER TABLE `comment_gs`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `cmtgs` (`id_gs`),
  ADD KEY `phcmt` (`id_ph`);

--
-- Indexes for table `confirm_gs`
--
ALTER TABLE `confirm_gs`
  ADD PRIMARY KEY (`id_cf`),
  ADD KEY `cfgs` (`id_gs`),
  ADD KEY `phcf` (`id_ph`);

--
-- Indexes for table `dangkymon`
--
ALTER TABLE `dangkymon`
  ADD PRIMARY KEY (`id_dk`),
  ADD KEY `gsky` (`id_gs`),
  ADD KEY `dkymonhoc` (`id_mon`),
  ADD KEY `dkimon` (`id_lop`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD PRIMARY KEY (`id_gs`),
  ADD KEY `diachigs` (`id_quan`);

--
-- Indexes for table `giatri`
--
ALTER TABLE `giatri`
  ADD PRIMARY KEY (`id_gt`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lh`);

--
-- Indexes for table `like_gs`
--
ALTER TABLE `like_gs`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `phuhuynhlike` (`id_ph`),
  ADD KEY `likegiasu` (`id_gs`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id_lop`),
  ADD KEY `lophoccap` (`id_cap`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id_mon`);

--
-- Indexes for table `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD PRIMARY KEY (`id_ph`),
  ADD KEY `diachiquan` (`id_quan`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id_qc`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`id_quan`);

--
-- Indexes for table `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chucvu` (`id_chuc`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_sl`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `votegs` (`id_gs`),
  ADD KEY `phvote` (`id_ph`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `caphoc`
--
ALTER TABLE `caphoc`
  MODIFY `id_cap` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `comment_bv`
--
ALTER TABLE `comment_bv`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment_gs`
--
ALTER TABLE `comment_gs`
  MODIFY `id_cmt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `confirm_gs`
--
ALTER TABLE `confirm_gs`
  MODIFY `id_cf` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dangkymon`
--
ALTER TABLE `dangkymon`
  MODIFY `id_dk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `giasu`
--
ALTER TABLE `giasu`
  MODIFY `id_gs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `giatri`
--
ALTER TABLE `giatri`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `like_gs`
--
ALTER TABLE `like_gs`
  MODIFY `id_like` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id_lop` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id_mon` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `phuhuynh`
--
ALTER TABLE `phuhuynh`
  MODIFY `id_ph` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id_qc` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `id_quan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `quantri`
--
ALTER TABLE `quantri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baivietchuyenmuc` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`),
  ADD CONSTRAINT `nguoidangbai` FOREIGN KEY (`id_qt`) REFERENCES `quantri` (`id`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `giasuchat` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`),
  ADD CONSTRAINT `phuhuynhchat` FOREIGN KEY (`id_ph`) REFERENCES `phuhuynh` (`id_ph`);

--
-- Constraints for table `comment_gs`
--
ALTER TABLE `comment_gs`
  ADD CONSTRAINT `cmtgs` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`),
  ADD CONSTRAINT `phcmt` FOREIGN KEY (`id_ph`) REFERENCES `phuhuynh` (`id_ph`);

--
-- Constraints for table `confirm_gs`
--
ALTER TABLE `confirm_gs`
  ADD CONSTRAINT `cfgs` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`),
  ADD CONSTRAINT `phcf` FOREIGN KEY (`id_ph`) REFERENCES `phuhuynh` (`id_ph`);

--
-- Constraints for table `dangkymon`
--
ALTER TABLE `dangkymon`
  ADD CONSTRAINT `dkimon` FOREIGN KEY (`id_lop`) REFERENCES `lophoc` (`id_lop`),
  ADD CONSTRAINT `dkymonhoc` FOREIGN KEY (`id_mon`) REFERENCES `monhoc` (`id_mon`),
  ADD CONSTRAINT `gsky` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`);

--
-- Constraints for table `giasu`
--
ALTER TABLE `giasu`
  ADD CONSTRAINT `diachigs` FOREIGN KEY (`id_quan`) REFERENCES `quanhuyen` (`id_quan`);

--
-- Constraints for table `like_gs`
--
ALTER TABLE `like_gs`
  ADD CONSTRAINT `likegiasu` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`),
  ADD CONSTRAINT `phuhuynhlike` FOREIGN KEY (`id_ph`) REFERENCES `phuhuynh` (`id_ph`);

--
-- Constraints for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoccap` FOREIGN KEY (`id_cap`) REFERENCES `caphoc` (`id_cap`);

--
-- Constraints for table `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD CONSTRAINT `diachiquan` FOREIGN KEY (`id_quan`) REFERENCES `quanhuyen` (`id_quan`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `phvote` FOREIGN KEY (`id_ph`) REFERENCES `phuhuynh` (`id_ph`),
  ADD CONSTRAINT `votegs` FOREIGN KEY (`id_gs`) REFERENCES `giasu` (`id_gs`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

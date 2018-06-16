
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: 'qlbansach'
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'ctdondh'
--


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'dondh'
--


-- Đang đổ dữ liệu cho bảng 'dondh'
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'hoa'
--

CREATE TABLE IF NOT EXISTS 'sach'(
  'masach'int(11) NOT NULL AUTO_INCREMENT,
  'maloai'int(11) DEFAULT NULL,
  'tensach'varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  'dongia'int(11) DEFAULT NULL,
  'hinh'varchar(220) COLLATE utf8_unicode_ci DEFAULT NULL,
  'mota'varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY ('masach')
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Đang đổ dữ liệu cho bảng 'hoa'
--

INSERT INTO 'sach'('masach', 'maloai', 'tensach', 'dongia', 'hinh', 'mota') VALUES
(2, 1, 'Tuần Lễ Náu Mình', 60000, '9786045640432.jpg', '“Trong trang trại của gia đình Ryan ở thị trấn Stoneybridge, mọi công việc đều được phân công rõ ràng. Các cậu con trai giúp đỡ cha việc đồng áng, sơn sửa hàng rào, chăn bò, vắt sữa, và đánh luồng trồng khoai tay; Mary cho gia súc ăn, Kathleen lo việc bếp núc còn Geraldine chăm sóc đàn gà. Người nhà chả mấy khi gọi Geraldine là Geraldine vì trong thâm tâm họ, tên cô là Chicky - một cô gái bé bỏng làm nhiệm vụ nhặt trứng và cho gà ăn hàng ngày…\n\nRồi Kathleen chuyển đến xứ Wales làm y tá trong một bệnh viện lớn, Mary kiếm được việc làm ở một công ty bảo hiểm. Công việc của hai người chị chẳng có gì hấp dẫn trong mắt Chicky dù cô biết mình phải kiếm được một việc gì đó. Cả gia đình Ryan không thể chỉ bám vào cái trang trại. Rồi hai người anh lớn cũng chuyển sang làm kinh doanh tại những thành phố lớn ở phía Tay Ireland.”'),
(3, 1, 'Từ Một Phía Cũng Là Tình Yêu', 45000, 'tumotphiacunglatinhyeu-postcard.jpg', '* Viết cho những yêu thương lặng im từ một phía\n\n* Viết cho những tổn thương, tủi hờn mà em đã đi qua\n\n* Món quà nhỏ dành tặng những cô gái đã dũng cảm yêu thương.'),
(4, 1, 'Những Câu Chuyện Thành Rome (2017)', 40000, 'nhungcauchuyenthanhrome.jpg', 'Những Câu Chuyện Thành Rome Sau tập 1, đây là 20 truyện ngắn khác của Alberto Moravia được sáng tác trong bối cảnh của một thành phố Roma đã bỏ lại sau lưng một giai đoạn đen tối của hai thập niên (1925-1945) dưới chế độ phát-xít cùng với những đau khổ, mất mát, tang thương vì chiến tranh để bước vào giai đoạn xây dựng thời hậu chiến. Qua cặp mắt tinh tế, với một tâm hồn nhạy ...'),
(5, 1, 'Hải Tặc Ma Cà Rồng', 70000, 'haitacmacarongtap5vuongtrieubongdem.jpg', 'Hải Tặc Ma Cà Rồng - Tập 5 - Vương Triều Bóng Đêm Grace và Connor phát hiện ra bí mật lớn nhất đời mình: chúng là Ma cà rồng lai người. cuộc phiêu lưu lại tiếp tục nhưng chúng không tiếp tục cùng nhau mà chia thành hai con đường song song, hai lý tưởng, hai cuộc đời từ đây sẽ có nhiều thay đổi...'),
(6, 1, 'Từ Trái Đất Đến Mặt Trăng', 65000, 'image_123630.jpg', 'Từ Trái Đất Đến Mặt Trăng Ông đã dùng phòng thí nghiệm và kính viễn vọng để viết tiểu thuyết phiêu lưu. Ông không chỉ ghi lại quá trình các nhà bác học tạo nên những phát minh lớn, mà còn tiên đoán chúng. Đọc những tác phẩm của ông, ta có thể nhận thấy những mâu thuẫn vì trong số những ý tưởng khoa học còn có ...'),
(7, 2, 'TedBooks - Tương Lai Của Kiến Trúc', 250000, '8936037799223.jpg', 'TedBooks - Tương Lai Của Kiến Trúc Một cuộc cách mạng trong kiến trúc đang diễn ra. Ngày nay, một người bình thường đã có thể bày tỏ ý kiến của mình về kiến trúc thoải mái hơn bao giờ hết. 1 tỷ 750 triệu điện thoại thông minh trên thế giới đang thay đổi căn bản cách mà kiến trúc được sử dụng, biến mọi người trở thành những nhiếp ảnh gia kiến trúc. Những bức ảnh ..'),
(8, 2, 'Kì Bí Dòng Sông Sôi Trong Lòng Amazon', 220000, '8936037799247.jpg', 'TedBook - Kì Bí Dòng Sông Sôi Trong Lòng Amazon Trong một thế giới mà mọi thứ dường như đều có thể tính toán bằng những con số, đều đặn nhịp nhàng và bị giày xéo bởi những nhà đưa tin và sự xâm lược của nền văn minh hiện đại, chúng ta lại bị kinh ngạc bởi hành trình của một nhà khoa học. Khi Andrés Ruzo mới chỉ là một cậu bé sinh sống tại Peru, ...'),
(9, 2, 'Những Dấu Hiệu Nhận Biết Ung Thư', 260000, 'image_122404.jpg', 'Ung Thư Biết Sớm Trị Lành 01 - Những Dấu Hiệu Nhận Biết Ung Thư Các nghiên cứu y học chỉ ra rằng: 5 - 10% ung thư là do di truyền. 90 - 95% các trường hợp bệnh ung thư bởi các yếu tố môi trường. Chính vì vậy, việc phòng ngừa ung thư rất quan trọng. Để làm được điều này, cần phải có một số hiểu biết cơ bản về bệnh ung thư, các tác nhân gây bệnh để sắp xếp một chế độ dinh ...'),
(10, 2, 'Sự Tiến Hóa Của Công Nghệ', 180000, 'image_122629.jpg', 'Sách xả kho, chất lượng sách từ 60% - 80% (sách có thể ố vàng, ...).\n\nHàng xả kho nên sẽ không áp dụng đổi trả hàng. Quý khách vui lòng cân nhắc trước khi lựa chọn mua hàng.'),
(11, 2, 'Sinh Thái Môi Trường Ứng Dụng', 270000, 'image_123616.jpg', 'Sinh Thái Môi Trường Ứng Dụng Cuốn sách SINH THÁI MÔI TRƯỜNG ỨNG DỤNG (Applied Environmental Ecology) của các tác giả GS. TSKH Lê Huy Bá và GS. Lâm Minh Triết là hai trong số những nhà khoa học đầu ngành về môi trường. Cuốn sách gồm 11 chương, các tác giả diễn giải ngắn gọn những chuyên đề: ảnh hưởng của chiến tranh, của thuốc bảo vệ thực vật, của mưa axít và sự ...'),
(12, 2, 'Bí Ẩn Mãi Mãi Là Bí Ẩn', 210000, 'image_122923.jpg', 'Bí Ẩn Mãi Mãi Là Bí Ẩn tập 6 tiếp tục giới thiệu đến bạn đọc những điều bí ẩn hiện hữu một cách kỳ lạ trong cuộc sống mà chưa có sự lý giải hợp lý nào cho các hiện tượng này. Và vì thế những bí ẩn này sẽ mãi mãi còn là bí ẩn. '),
(13, 3, 'Học Khôn Ngoan Mà Không Gian Nan', 120000, '8936066701808.jpg', 'Học khôn ngoan mà không gian nan chỉ cho bạn cách học - kỹ năng giá trị nhất mà có thể bây giờ bạn mới biết. Ở trường hay ở nơi làm việc, chúng ta luôn được thử thách làm sao để đạt được những ý tưởng và kỹ năng mới, cũng như loại bỏ những kiến thức đã lỗi thời.\n\nHãy làm chủ bảy yếu tố cơ bản của việc hoàn thành các kỹ năng học tập mà cuốn sách này trình bày, bạn có thể khơi dậy tối đa khả năng tiềm tàng của bản thân và gia tăng năng lực học tập. Học khôn ngoan mà không gian nan bóc trần rất nhiều điều hoang tưởng liên quan đến kỹ năng học tập. Các bài tập thực hành trong cuốn sách này có ích tức thì, khiến cho việc học tập hiệu quả và không gây tổn hại.'),
(14, 3, 'Luyện Trí Nhớ', 85000, '8936037746647.jpg', 'Nếu phải chọn ra từ nào được mọi người sử dụng nhiều nhất để biện hộ cho những lỗi lầm, thiếu sót của mình, QUÊN là từ được bình chọn nhiều nhất là từ QUÊN. Lợi ích duy nhất của nó là để chống chế trong mọi trường hợp. Nhưng chắc hẳn, QUÊN đã không ít lần khiến bạn gặp rắc rối. Bạn tới trường mà quên không mang vở bài tập, bạn về nhà nhưng không ...'),
(15, 3, 'Những Cuộc Đàm Phán Quyết Định ', 100000, '8936037748641.jpg', 'Nhằm phân tích những diễn biến tâm lý ẩn sau mỗi biểu hiện của chúng ta trong các cuộc thảo luận quan trọng, từ đó đưa ra những giải pháp khả thi giúp định hướng suy nghĩ và hành động, cuốn sách Những cuộc đàm phàn quyết định của nhóm tác giả Kerry Patterson, Joseph Grenny, Ron McMillan và Al Switzler là một bộ công cụ dành cho tất cả những ai muốn gặt hái thành ...'),
(19, 4, 'Đôi Sừng Hươu\n', 150000, 'image_123540.jpg', 'Đôi Sừng Hươu Bằng hình minh họa màu sắc hài hòa, nội dung giản dị, giàu ý nghĩa, bố mẹ có thể dạy cho em những đức tính tốt đẹp rút ra từ câu chuyện ngụ ngôn giàu ý nghĩa giáo dục này. Bộ sách được thể hiện dưới hình thức SONG NGỮ Việt - Anh, không chỉ giúp các em nhỏ tiếp thu những bài học đạo đức thú vị mà còn cùng lúc học song song cả Tiếng Việt và Tiếng Anh. '),
(20, 4, 'Đàn Kiến Chăm Chỉ', 50000, 'image_123539.jpg', 'Đàn Kiến Chăm Chỉ Bằng hình minh họa màu sắc hài hòa, nội dung giản dị, giàu ý nghĩa, bố mẹ có thể dạy cho em những đức tính tốt đẹp rút ra từ câu chuyện ngụ ngôn giàu ý nghĩa giáo dục này. Bộ sách được thể hiện dưới hình thức SONG NGỮ Việt - Anh, không chỉ giúp các em nhỏ tiếp thu những bài học đạo đức thú vị mà còn cùng lúc học song song cả Tiếng Việt và Tiếng Anh'),
(21, 4, 'Cừu Non Nhanh Trí', 120000, 'image_123538.jpg', 'Cừu Non Nhanh Trí Bằng hình minh họa màu sắc hài hòa, nội dung giản dị, giàu ý nghĩa, bố mẹ có thể dạy cho em những đức tính tốt đẹp rút ra từ câu chuyện ngụ ngôn giàu ý nghĩa giáo dục này. Bộ sách được thể hiện dưới hình thức SONG NGỮ Việt - Anh, không chỉ giúp các em nhỏ tiếp thu những bài học đạo đức thú vị mà còn cùng lúc học song song cả Tiếng Việt và Tiếng Anh.'),
(22, 4, 'Bí Mật Trước Giờ Đi Ngủ', 110000, 'image_123420.jpg', 'À Ơi, Chúc Bé Ngủ Ngon - Bí Mật Trước Giờ Đi Ngủ Bộ truyện cho bé trước giờ đi ngủ À Ơi, Chúc Bé Ngủ Ngon gồm 6 cuốn với nội dung nhẹ nhàng, lời văn dễ thương, có tính giáo dục cao phù hợp với trẻ lừa tuổi mầm non 0-6 tuổi. Trong cuốn truyện Bí Mật Trước Giờ Đi Ngủ này các bé sẽ được gặp gỡ bạn hổ con không biết nhảy, bạn cá voi đang tìm bạn, bạn thỏ với niềm vui bất ngờ, cùng nhiều bạn nhỏ khác nữa'),
(23, 4, 'Bác Gấu Thông Thái', 150000, 'image_123418.jpg', 'À Ơi, Chúc Bé Ngủ Ngon - Bác Gấu Thông Thái Bộ truyện cho bé trước giờ đi ngủ À Ơi, Chúc Bé Ngủ Ngon gồm 6 cuốn với nội dung nhẹ nhàng, lời văn dễ thương, có tính giáo dục cao phù hợp với trẻ lừa tuổi mầm non 0-6 tuổi. Bác Gấu già thông thái có gì trong mũ vậy nhỉ? Và những điều xung quanh chúng ta tuyệt vời như thế nào? Các bé hãy cùng khám phá trong những câu chuyện Bác Gấu Thông Thái nhẹ nhàng và ấm áp tình người này nhé');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'khachhang'
--

CREATE TABLE IF NOT EXISTS 'khachhang'(
  'Makh'int(11) NOT NULL AUTO_INCREMENT,
  'TenDN'varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  'MatKhau'varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  'HoTen'varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  'DiaChi'varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  'DienThoai'varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  'Email'varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY ('Makh')
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Đang đổ dữ liệu cho bảng 'khachhang'
--

INSERT INTO 'khachhang'('Makh', 'TenDN', 'MatKhau', 'HoTen', 'DiaChi', 'DienThoai', 'Email') VALUES
(1, 'phuong', 'phuong', 'Khuất Thuỷ Phuơng', '357 Lê Hồng Phong Q.5', '0989247123', 'ktphuong@hcmuns.edu.vn'),
(2, 'cuong', 'cuong', 'Chung Quốc Cuờng', '1bis Nguyễn Văn Trổi Q.1', '0912345678', 'cqcuong@hcmuns.edu.vn'),
(3, 'tung', 'tung', 'Lưu Hải Tùng', '1 Mạc Đỉnh Chi Q.1', '0989766569', 'lhtung@yahoo.com'),
(4, 'dlthien', 'dlthien', 'Đỗ Lâm Thiên', '357 Lê Hồng Phong Q.10', '0903123456', 'dlthien@hcmuns.edu.vn'),
(5, 'thanh', 'thanh', 'Nguyễn Ngọc Thanh', '357 Lê Hồng Phong Q.10', '0903456789', 'lthanh@hcmuns.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng 'loaihoa'
--

CREATE TABLE IF NOT EXISTS 'loaisach'(
  'Maloai'int(11) NOT NULL AUTO_INCREMENT,
  'Tenloai'varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY ('Maloai')
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Đang đổ dữ liệu cho bảng 'loaihoa'
--

INSERT INTO 'loaisach'('Maloai', 'Tenloai') VALUES
(1, 'Sách văn học'),
(2, 'Khoa học - kỹ thuật'),
(3, 'Kỹ năng sống'),
(4, 'Sách thiếu nhi');


-- Table structure for table 'dondh'
--


CREATE TABLE IF NOT EXISTS 'dondh'(
'Sodh'int(11) NOT NULL AUTO_INCREMENT,
'Makh'int(11) NOT NULL,
'Ngaydh'date NOT NULL,
'Dia_chi'varchar(200) COLLATE utf16_unicode_ci NOT NULL,
'dagiao'tinyint(1) NOT NULL,
PRIMARY KEY ('Sodh')
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci AUTO_INCREMENT=32 ;

--

CREATE TABLE IF NOT EXISTS 'ctdondh'(
'sodh'int(11) NOT NULL,
'Masach'int(11) NOT NULL,
'Soluong'int(11) NOT NULL,
'Dongia'float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

-- Chỉ mục cho các bảng đã đổ

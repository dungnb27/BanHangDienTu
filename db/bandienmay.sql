-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 03:26 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandienmay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dũng'),
(2, 'dungnb27', '123456', 'Dunng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(6, 'PS5 trở thành máy PlayStation bán chạy nhất lịch sử', '<p>Với tốc độ b&aacute;n ra &ldquo;ch&oacute;ng mặt&rdquo; như hiện nay, Sony dự kiến sẽ ti&ecirc;u thụ được khoảng 16,8 tới 18 triệu m&aacute;y PlayStation 5 (PS5) trong năm 2021.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '<p>Với tốc độ b&aacute;n ra &ldquo;ch&oacute;ng mặt&rdquo; như hiện nay, Sony dự kiến sẽ ti&ecirc;u thụ được khoảng 16,8 tới 18 triệu m&aacute;y PlayStation 5 (PS5) trong năm 2021.</p>\r\n\r\n<p><a href=\"javascript:void();\"><img alt=\"PS5 là mẫu máy chơi game mới nhất của Sony /// Ảnh: AFP\" src=\"https://image.thanhnien.vn/660/uploaded/nthanhluan/2021_01_01/ps5_ejvy.jpeg\" /></a></p>\r\n\r\n<p>PS5 l&agrave; mẫu m&aacute;y chơi game mới nhất của Sony</p>\r\n\r\n<p>ẢNH: AFP</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o mới nhất của&nbsp;<em>Digitimes</em>, Sony đ&atilde; b&aacute;n được 3,4 triệu m&aacute;y PS5 trong 4 tuần đầu ti&ecirc;n từ khi ra mắt. Th&agrave;nh t&iacute;ch n&agrave;y gi&uacute;p PS5 trở th&agrave;nh m&aacute;y PlayStation b&aacute;n tốt nhất trong lịch sử của h&atilde;ng. Mới đ&acirc;y, Sony cũng đang tăng năng suất v&agrave; dự kiến c&oacute; thể b&aacute;n tới 18 triệu m&aacute;y trong năm 2021.</p>\r\n\r\n<p>AMD - đơn vị phụ tr&aacute;ch sản xuất CPU tiến tr&igrave;nh 7nm tr&ecirc;n PS5 đ&atilde; nhận được cam kết năng lực sản xuất bổ sung từ TSMC, tập đo&agrave;n sản xuất b&aacute;n dẫn lớn nhất&nbsp;<a href=\"https://thanhnien.vn/the-gioi/\" rel=\"\">thế giới</a>. Nhờ đ&oacute;, Sony c&oacute; thể đạt được sản lượng m&aacute;y mong muốn trong năm nay.</p>\r\n\r\n<p>Nh&agrave; sản xuất Nhật Bản đặt kỳ vọng ti&ecirc;u thụ 10 triệu m&aacute;y PS5 trước th&aacute;ng 3 tới (tức hết qu&yacute; 1/2021), tăng 5 - 6 triệu thiết bị so với kế hoạch ban đầu.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"232\" name=\"dableframe-0.7941764051760809\" scrolling=\"no\" src=\"https://api.dable.io/widgets/id/G7ZJbw7W/users/89399905.1601050711329?from=https%3A%2F%2Fthanhnien.vn%2Fcong-nghe%2Fps5-tro-thanh-may-playstation-ban-chay-nhat-lich-su-1324109.html&amp;url=https%3A%2F%2Fthanhnien.vn%2Fcong-nghe%2Fps5-tro-thanh-may-playstation-ban-chay-nhat-lich-su-1324109.html&amp;ref=https%3A%2F%2Fwww.google.com.vn%2F&amp;cid=89399905.1601050711329&amp;uid=89399905.1601050711329&amp;site=thanhnien.vn&amp;id=dablewidget_G7ZJbw7W&amp;category1=C%C3%B4ng%20ngh%E1%BB%87&amp;ad_params=%7B%7D&amp;item_id=1025332&amp;pixel_ratio=1.25&amp;client_width=639&amp;network=non-wifi&amp;lang=en&amp;is_top_win=1&amp;top_win_accessible=1&amp;inarticle_init=1\" title=\"null\" width=\"100%\"></iframe></p>\r\n\r\n<p><a href=\"https://thanhnien.vn/cong-nghe/sony-cam-chu-so-huu-ps5-ban-quyen-truy-cap-vao-playstation-plus-collection-1310158.html\" rel=\"\" target=\"_blank\">PS5</a>&nbsp;ra mắt hồi th&aacute;ng trước c&ugrave;ng một số tựa&nbsp;<a href=\"https://thanhnien.vn/game/game/\" rel=\"\">game</a>&nbsp;độc quyền, trong đ&oacute; c&oacute;&nbsp;<em>Demon&rsquo;s Soulds&nbsp;</em>của Bluepoint, một bản l&agrave;m lại (remake) của tựa game h&agrave;nh động nhập vai do&nbsp;<em>FromSoftware&nbsp;</em>ph&aacute;t h&agrave;nh năm 2009 cho hệ m&aacute;y PS3. Ngo&agrave;i ra c&ograve;n c&oacute;&nbsp;<em>Spider-Man: Miles Morales</em>&nbsp;(do Insomniac Games sản xuất) được ph&aacute;t h&agrave;nh bởi Sony Interactive Entertainment (SIE) d&agrave;nh cho m&aacute;y PS4 v&agrave; PS5 trong năm 2020.</p>\r\n\r\n<p>PS5 đang &ldquo;ch&aacute;y h&agrave;ng&rdquo; ở nhiều thị trường v&agrave; c&aacute;c nh&agrave; b&aacute;n lẻ kh&ocirc;ng thể đ&aacute;p ứng nổi nhu cầu đặt mua. Tại Bắc Mỹ, hệ thống cửa h&agrave;ng PlayStation Direct li&ecirc;n tục bổ sung kho nhưng lập tức hết sạch h&agrave;ng. Ở Nhật, nh&agrave; b&aacute;n lẻ phải b&aacute;n kiểu bốc thăm may mắn v&igrave; lượng h&agrave;ng trong kho qu&aacute; &iacute;t.</p>\r\n\r\n<p>Trong th&aacute;ng 11 v&agrave; 12.2020, h&agrave;ng chủ yếu được đẩy tới thị trường Bắc Mỹ v&agrave; ch&acirc;u &Acirc;u. Sau thời điểm năm mới, SIE dự kiến sẽ tăng nguồn cung PS5 cho thị trường ch&acirc;u &Aacute;. C&aacute;c b&aacute;o c&aacute;o trước đ&acirc;y cho thấy chỉ c&oacute; khoảng 200.000 m&aacute;y nhập v&agrave;o Nhật Bản từ khi mở b&aacute;n.</p>\r\n', 7, 'ps5.jpg'),
(7, 'PS5 giảm giá sốc, game thủ hoàn toàn có thể mua để chơi Tết', '<p>Gi&aacute; PS5 đang dần tụt về mức &quot;c&oacute; thể chấp nhận được&quot;.</p>\r\n', '<h2>Hai th&aacute;ng kể từ ng&agrave;y ra mắt, PS5 đang c&oacute; xu hướng hạ nhiệt ở nhiều thị trường. Đương nhi&ecirc;n tại Việt Nam cũng kh&ocirc;ng ngoại l&ecirc;. Kh&ocirc;ng c&ograve;n những c&aacute;i gi&aacute; 35, 40 triệu như thời điểm mới ra mắt, giờ đ&acirc;y game thủ chỉ cần bỏ ra khoảng 20 triệu l&agrave; đ&atilde; c&oacute; thể sở hữu bom tấn mới nhất của Sony.</h2>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/1/11/untitled-16103548238321983313059.png\"><img alt=\"PS5 giảm giá sốc, game thủ hoàn toàn có thể mua để chơi Tết - Ảnh 1.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/1/11/untitled-16103548238321983313059.png\" /></a></p>\r\n\r\n<p>Gi&aacute; PS5 đang dần tụt về mức &quot;c&oacute; thể chấp nhận được&quot;.</p>\r\n\r\n<p>Theo ghi nhận của ch&uacute;ng t&ocirc;i tr&ecirc;n thị trường h&agrave;ng x&aacute;ch tay tại Việt Nam, gi&aacute; m&aacute;y PS5 đang hạ nhiệt một c&aacute;ch rất nhanh ch&oacute;ng. Với phi&ecirc;n bản Digital, giờ đ&acirc;y người mua chỉ cần bỏ ra 20 triệu hoặc thậm ch&iacute; &iacute;t hơn l&agrave; đ&atilde; c&oacute; thể sở hữu. Phi&ecirc;n bản c&oacute; ổ đĩa c&oacute; gi&aacute; ni&ecirc;m yết cao hơn một ch&uacute;t nhưng cũng chỉ giao động từ 24 đến 25 triệu (giảm gần 4 triệu so với hồi giữa th&aacute;ng 12).</p>\r\n\r\n<p>Đương nhi&ecirc;n, 100% m&aacute;y PS5 tr&ecirc;n thị trường hiện tại đều l&agrave; h&agrave;ng x&aacute;ch tay từ nước ngo&agrave;i. Sony Việt Nam hiện vẫn chưa c&ocirc;ng bố bất cứ th&ocirc;ng tin g&igrave; về việc ph&aacute;t h&agrave;nh PS5. Ch&iacute;nh v&igrave; vậy, người mua cũng n&ecirc;n cẩn thận v&agrave; chọn lựa những cửa h&agrave;ng uy t&iacute;n để tr&aacute;nh trường hợp đ&aacute;ng tiếc.</p>\r\n\r\n<p><a href=\"https://gamek.mediacdn.vn/133514250583805952/2021/1/11/photo-1-1610354879884275260553.jpg\" target=\"_blank\"><img alt=\"PS5 giảm giá sốc, game thủ hoàn toàn có thể mua để chơi Tết - Ảnh 2.\" src=\"https://gamek.mediacdn.vn/thumb_w/640/133514250583805952/2021/1/11/photo-1-1610354879884275260553.jpg\" /></a></p>\r\n\r\n<p>Th&ecirc;m một th&ocirc;ng tin vui với người h&acirc;m mộ đ&oacute; l&agrave; Sony đ&atilde; l&ecirc;n kế hoạch ph&aacute;t h&agrave;nh PS5 tại một số thị trường Đ&ocirc;ng Nam &Aacute; ngay trong những th&aacute;ng đầu năm 2021. Cụ thể, PS5 sẽ ra mắt tại Indonesia v&agrave;o ng&agrave;y 22/1 v&agrave; Th&aacute;i Lan v&agrave;o th&aacute;ng 2. Đ&acirc;y l&agrave; một t&iacute;n hiệu cực kỳ t&iacute;ch cực với cộng đồng game thủ Playstation trong nước. Hy vọng với nguồn m&aacute;y dồi d&aacute;o hơn, gi&aacute; PS5 x&aacute;ch tay sẽ c&ograve;n hạ nhiệt nhiều hơn nữa.</p>\r\n', 7, 'tintucps5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Laptop'),
(2, 'Tủ lạnh'),
(3, 'Máy giặt'),
(4, 'Điện thoại '),
(5, 'Tivi ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tin`
--

CREATE TABLE `tbl_danhmuc_tin` (
  `danhmuctin_id` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tin`
--

INSERT INTO `tbl_danhmuc_tin` (`danhmuctin_id`, `tendanhmuc`) VALUES
(1, 'Kiến thức máy lạnh'),
(2, 'Kiến thức máy giặt'),
(4, 'Kiến thức điện thoại '),
(6, 'Kiến thức laptop'),
(7, 'Kiến thức máy chơi game');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `tinhtrang`, `huydon`) VALUES
(62, 19, 1, '1913', 69, '2021-08-05 13:58:05', 0, 0),
(63, 17, 1, '1913', 69, '2021-08-05 13:58:05', 0, 0),
(64, 37, 10, '1913', 69, '2021-08-05 13:58:05', 0, 0),
(65, 37, 1, '8912', 70, '2021-08-05 14:04:36', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaodich`
--

INSERT INTO `tbl_giaodich` (`giaodich_id`, `sanpham_id`, `khachhang_id`, `soluong`, `magiaodich`, `ngaythang`, `tinhtrangdon`, `huydon`) VALUES
(41, 19, 69, 1, '1913', '2021-08-05 13:58:05', 0, 0),
(42, 17, 69, 1, '1913', '2021-08-05 13:58:05', 0, 0),
(43, 37, 69, 10, '1913', '2021-08-05 13:58:05', 0, 0),
(44, 37, 70, 1, '8912', '2021-08-05 14:04:36', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`giohang_id`, `tensanpham`, `giasanpham`, `hinhanh`, `soluong`, `sanpham_id`) VALUES
(143, 'iphone 12', '10000', '11-pro-max-den.png', 1, 37),
(144, 'Sharp Inverter 605 lít', '22490000', 'tu-lanh-sharp-sj-fx680v-st-300x300.png', 1, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(69, 'Nguyễn Tiến Dũng', '0949418767', '377, Vườn Lài', 'sađâsđá', 'dungnb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(70, 'Nguyễn Admin', '0775959510', '377', '123', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `lienhe_id` int(11) NOT NULL,
  `lienhe_name` varchar(100) NOT NULL,
  `lienhe_mail` varchar(100) NOT NULL,
  `lienhe_mess` text NOT NULL,
  `lienhe_ngaythang` timestamp NOT NULL DEFAULT current_timestamp(),
  `lienhe_tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_active` int(11) NOT NULL,
  `sanpham_hot` int(11) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `sanpham_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_active`, `sanpham_hot`, `sanpham_soluong`, `sanpham_image`) VALUES
(1, 4, 'Samsung Galaxy Note 20 ', 'Galaxy Note được xem là một trong những dòng flaship cao cấp có doanh thu cao rất được yêu thích, lựa chọn. Tiếp nối thành công đó, Samsung tiếp tục ra mắt sản phẩm Samsung Galaxy Note 20 Ultra 5G với nhiều đột phá với công nghệ dẫn đầu thế giới smartphone trong năm 2020. Đây sẽ sự lựa chọn hoàn hảo, toát lên sự mạnh mẽ, đẳng cấp sang trọng cho người sở hữu.', 'Thông số kỹ thuật\r\nMàn hình:Dynamic AMOLED 2X, 6.9\", Quad HD+ (2K+)\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF\r\nCamera trước:10 MP\r\nCPU:Exynos 990 8 nhân\r\nRAM:12 GB\r\nBộ nhớ trong:256 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 1 TB\r\nThẻ SIM:2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G\r\nDung lượng pin:4500 mAh, có sạc nhanh', '32990000', '29990000', 0, 1, 10, 'galaxy-note-20-ultra-5g.jpg'),
(2, 4, 'Vivo Y51 (2020)', 'Vivo tiếp tục cho ra mắt chiếc điện thoại Vivo Y51 2020 với những thiết kế đầy sắc màu tươi mới, từ hiệu năng mang khả năng gaming đến dung lượng pin đều xuất sắc trong mức giá tầm trung..', 'Thông số kỹ thuật\r\nMàn hình:IPS LCD, 6.58\", Full HD+\r\nHệ điều hành:Android 11\r\nCamera sau:Chính 48 MP & Phụ 8 MP, 2 MP\r\nCamera trước:16 MP\r\nCPU:Snapdragon 662 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 1 TB\r\nThẻ SIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nDung lượng pin:5000 mAh, có sạc nhanh', '5990000', '6290000', 0, 1, 10, 'vivo-y51-bac-600x600-600x600.jpg'),
(3, 3, 'Electrolux Inverter 9 Kg ', 'Máy vận hành êm ái với động cơ truyền động trực tiếp.\r\nTiết kiệm diện tích, dễ dàng lấy quần áo, chăn mền lớn với lồng giặt 525 mm.\r\nDiệt khuẩn, làm mềm quần áo với công nghệ giặt nước nóng.\r\nTiết kiệm điện nhờ công nghệ Inverter.\r\nQuần áo đẹp như mới với lồng giặt Pillow bằng thép chống gỉ.\r\nKháng khuẩn, nấm mốc với vòng đệm cửa kháng khuẩn (ABT).\r\nTiết kiệm thời gian làm vệ sinh với tính năng tự làm sạch mặt trong cửa - Smart Dual Spray.', 'Thông số kỹ thuật\r\nLoại máy giặt:Cửa trước, Lồng ngang\r\nKhối lượng giặt:9 Kg\r\nSố người sử dụng:Từ 3 - 5 người (8 - 9 kg)\r\nTốc độ quay vắt tối đa:1200 vòng/phút\r\nHiệu suất sử dụng điện34.5 Wh/kg\r\nKiểu động cơ:Truyền động dây Curoa\r\nInverter:Có\r\nChương trình hoạt động:8 chương trình\r\nCông nghệ giặt:Lồng giặt HIVE hình tổ ong, Giặt hơi nước Vapour Care, Chức năng Add Cloths - thêm quần áo khi giặt\r\nNơi sản xuất:Thái Lan\r\nHãng:Electrolux. Xem thông tin hãng', '10990000', '9990000', 0, 1, 10, 'electrolux-ewf9025bqsa-300x300.jpg'),
(4, 3, 'Samsung Inverter 9 kg', 'Thông số kỹ thuật Máy giặt Samsung Inverter 9 kg WW90J54E0BW/SV\r\nThiết kế đơn giản, gần gũi với người dùng\r\nVới gam màu trắng tinh tế cùng thiết kế cửa trước, lồng giặt nằm ngang, máy giặt Samsung Inverter 9 kg WW90J54E0BW/SV mang lại cảm giác thân thuộc cho người dùng và là một điểm nhấn cho không gian nhà bạn. Máy có khối lượng giặt 9kg thích hợp cho những gia đình từ 3 - 5 người.', 'Thông số kỹ thuật\r\nLoại máy giặt:Cửa trước, Lồng ngang\r\nKhối lượng giặt:9 Kg\r\nSố người sử dụng:Từ 3 - 5 người (8 - 9 kg)\r\nTốc độ quay vắt tối đa:1400 vòng/phút\r\nKiểu động cơ:Truyền động dây Curoa\r\nInverter:Có\r\nChương trình hoạt động:14 Chương trình\r\nCông nghệ giặt:Công nghệ giặt hơi nước Steam Cycles, Lồng giặt thiết kế kim cương, Công nghệ giặt bong bóng Eco Bubble\r\nNơi sản xuất:Việt Nam\r\nHãng:Samsung. Xem thông tin hãng', '11490000', '8490000', 0, 1, 10, 'may-giat-samsung.jpg'),
(5, 5, 'Android Tivi TCL 4K 43 inch', 'Thông số kỹ thuật Android Tivi TCL 4K 43 inch 43P615\r\nThiết kế đơn giản hòa hợp với mọi không gian\r\nAndroid Tivi TCL 4K 43 inch 43P615 được thiết kế theo phong cách tối giản để tivi có thể hòa hợp với bất kỳ không gian nội thất nào. Khung viền đen mạnh mẽ cùng chân đế chữ V ngược chắc chắn, quen thuộc cho bạn tùy thích đặt tivi ở vị trí nào bạn muốn.\r\n\r\nKích thước tivi TCL 43 inch thích hợp cho phòng ngủ hay phòng khách của những căn hộ.', 'Thông số kỹ thuật\r\nLoại tivi:Android Tivi, 43 inch\r\nMàn hình:Ultra HD 4K, có HDR\r\nHệ điều hành:Android 9.0\r\nRemote thông minh:Có remote thông minh, tích hợp micro tìm kiếm giọng nói bằng Tiếng Việt\r\nTính năng thông minh:Trợ lý ảo Google Assistant, Remote cài sẵn phím Google Play và Netflix\r\nỨng dụng:Youtube, Netflix, Clip TV, FPT Play, Clip TV, Nhaccuatui, Vie On, Trình duyệt web, Galaxy Play (Fim+), ZingTV\r\nĐiều khiển TV bằng điện thoại:Bằng ứng dụng Google Cast, Bằng ứng dụng MagiConnect\r\nChiếu màn hình điện thoại lên tivi:Bằng ứng dụng Google Cast\r\nNăm ra mắt:2020\r\nHãng:TCL. Xem thông tin hãng', '9490000', '7490000', 0, 1, 10, 'tcl-43p615-(21).jpg'),
(6, 5, 'Smart Tivi Samsung 43 inch', 'Thiết kế nhỏ gọn, tinh tế\r\nSmart Tivi Samsung 43 inch UA43R6000 được thiết kế chủ đạo tông màu đen mạnh mẽ cùng giải pháp ẩn dây cáp giúp dây nguồn, dây mạng,... sắp xếp gọn gàng.\r\n\r\nTivi Samsung 43 inch nhỏ gọn thích hợp không gian nhỏ như phòng khách, phòng ngủ,...Thông số kỹ thuật Smart Tivi Samsung 43 inch UA43R6000\r\nThiết kế nhỏ gọn, tinh tế\r\nSmart Tivi Samsung 43 inch UA43R6000 được thiết kế chủ đạo tông màu đen mạnh mẽ cùng giải pháp ẩn dây cáp giúp dây nguồn, dây mạng,... sắp xếp gọn gàng.\r\n\r\nTivi Samsung 43 inch nhỏ gọn thích hợp không gian nhỏ như phòng khách, phòng ngủ,...\r\n\r\nSmart Tivi Samsung 43 inch UA43R6000 - Thiết kế\r\n\r\nĐộ phân giải Full HD rõ nét gấp 2 lần so với độ phân giải HD\r\nSmart Tivi Samsung 43 inch UA43R6000 - Độ phân giải\r\n\r\nMàu sắc sống động với công nghệ PurColor\r\nNhờ công nghệ này, tivi Samsung được tăng cường thêm nhiều dải màu sắc phong phú và tinh tế hơn bao giờ hết, cho phép các hình ảnh thêm rực rỡ và gần với màu tự nhiên nhất.\r\n\r\n', 'Thông số kỹ thuật\r\nLoại tivi:Smart Tivi, 43 inch\r\nMàn hình:Full HD,\r\nHệ điều hành:Tizen OS\r\nRemote thông minh:One Remote đa nhiệm thông minh (Tìm kiếm bằng giọng nói có hỗ trợ Tiếng Việt)\r\nTính năng thông minh:Tìm kiếm giọng nói (Chỉ hỗ trợ tiếng Việt trong Youtube)\r\nỨng dụng:YouTube, Netflix, Trình duyệt web, Kho ứng dụng, Nhaccuatui, ZingTV, Clip TV, Galaxy Play (Fim+), FPT Play, Spotify\r\nĐiều khiển TV bằng điện thoại:Bằng ứng dụng SmartThings\r\nChiếu màn hình điện thoại lên tivi:Chiếu màn hình Screen Mirroring\r\nNăm ra mắt:2019\r\nHãng:Samsung. Xem thông tin hãng', '8690000', '7900000', 0, 0, 10, 'samsung-ua43r6000-(11).jpg'),
(7, 2, 'Samsung Inverter 647 lít ', 'Thông số kỹ thuật Tủ lạnh Samsung Inverter 647 lít RS62R5001M9/SV\r\nTủ lạnh Side by Side sang trọng, đẳng cấp\r\nTủ lạnh Samsung Inverter 647 lít RS62R5001M9/SV có thiết kế kiểu tủ lạnh side by side đẳng cấp, đi cùng gam màu bạc sang trọng, thời thượng, tủ lạnh sẽ là điểm nhấn nổi bật, mang lại cho không gian nội thất của gia đình một vẻ đẹp hiện đại.', 'Kiểu tủ:Tủ lớn - Side by side\r\nDung tích:647 lít\r\nSố người sử dụng:Trên 5 người\r\nCông nghệ Inverter:Tủ lạnh Inverter\r\nCông suất tiêu thụ công bố theo TCVN:~ 1.71 kW/ngày\r\nTiện ích:Inverter tiết kiệm điện, Ngăn đá lớn, Chuông báo khi quên đóng cửa\r\nCông nghệ làm lạnh:Công nghệ làm lạnh vòm\r\nCông nghệ kháng khuẩn khử mùi:Bộ lọc khử mùi than hoạt tính\r\nNơi sản xuất:Trung Quốc\r\nNăm ra mắt:2019\r\nHãng:Samsung. Xem thông tin hãng', '20000000', '18000000', 0, 1, 10, 'samsung-rs62r5001m9-sv-9-300x300.jpg'),
(8, 4, 'iPhone 12 Pro Max 512GB', '<h3>Thiết kế cao cấp, khẳng định đẳng cấp bản th&acirc;n</h3>\r\n\r\n<p>Được lấy cảm hứng từ &ldquo;huyền thoại&rdquo; iPhone 4 v&agrave; iPhone 5, nhưng thay v&igrave; theo đuổi những đường cong mềm mại, uyển chuyển th&igrave; nay iPhone 12 Pro Max được thay thế bằng c&aacute;c g&oacute;c cạnh được v&aacute;t thẳng, vu&ocirc;ng vức, phần viền được gọt mỏng v&agrave; bao phủ bởi khung th&eacute;p kh&ocirc;ng gỉ xử l&yacute; bởi c&ocirc;ng nghệ mạ PVD s&aacute;ng b&oacute;ng, bắt mắt.</p>\r\n\r\n<p><img alt=\"Cạnh viền vuông vức, cứng cáp | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-144921-094924.jpg\" /></p>\r\n\r\n<p>Khả năng &ldquo;ph&ograve;ng thủ&rdquo; của iPhone 12 Pro Max được Apple n&acirc;ng l&ecirc;n tầm cao mới khi mặt trước v&agrave; mặt sau đều được bao phủ bởi lớp k&iacute;nh cường lực c&oacute; độ bền cao, gi&uacute;p m&aacute;y chống trầy xước tốt khi v&ocirc; t&igrave;nh va đập.</p>\r\n\r\n<p><img alt=\"Màn hình cứng cáp | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-045520-025513.jpg\" /></p>\r\n\r\n<p>iPhone 12 Pro Max sở hữu tấm nền Super Retina XDR OLED rộng 6.7 inch, mang lại kh&ocirc;ng gian hiển thị rộng lớn, thoải m&aacute;i.</p>\r\n\r\n<p>Với độ ph&acirc;n giải cao 2.778 x 1.284 pixel, độ tương phản nhiều hơn 2.000.000 : 1, độ s&aacute;ng l&ecirc;n đến 1200 nits ở chế độ HDR, khiến bạn đắm ch&igrave;m kh&ocirc;ng lối tho&aacute;t với trải nghiệm xem video thực sự rực rỡ với m&agrave;u sắc nổi bật v&agrave; huyền ảo.</p>\r\n\r\n<p><img alt=\"Sở hữu màn hình lớn 6.7 inch | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-145021-095032.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, m&aacute;y c&oacute; khả năng chống nước v&agrave; bụi ấn tượng với ti&ecirc;u chuẩn cao nhất hiện nay IP68, cụ thể l&agrave; chịu được 30 ph&uacute;t ng&acirc;m m&igrave;nh trong nước l&ecirc;n đến 6 m.</p>\r\n\r\n<p><img alt=\"Khả năng kháng nước chuẩn IP68 | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-242820-042859.jpg\" /></p>\r\n\r\n<h3>Sức mạnh khủng khiếp với chip A14 Bionic</h3>\r\n\r\n<p>iPhone 12 Pro Max được t&iacute;ch hợp&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-ma-1302179\" target=\"_blank\">chip A14 Bionic</a>&nbsp;mạnh mẽ, l&agrave; chip đầu ti&ecirc;n trong ng&agrave;nh được sản xuất tr&ecirc;n tiến tr&igrave;nh 5 nm với 11.8 tỷ b&oacute;ng dẫn, gồm 6 nh&acirc;n CPU v&agrave; 4 nh&acirc;n GPU, c&oacute; hiệu năng nhanh hơn l&ecirc;n đến 50% so với phi&ecirc;n bản tiền nhiệm, cho sức mạnh xử l&yacute; cải tiến đ&aacute;ng kinh ngạc, trong khi vẫn tiết kiệm điện năng.</p>\r\n\r\n<p><img alt=\"A14 Bionic cho hiệu năng mạnh mẽ | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-041820-031813.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, c&ocirc;ng cụ thần kinh Neural Engine cũng n&acirc;ng l&ecirc;n 16 l&otilde;i, so với 8 l&otilde;i của A13, cho ph&eacute;p thực hiện 11 ngh&igrave;n tỷ hoạt động mỗi gi&acirc;y, bổ sung bộ vi xử l&yacute; t&iacute;n hiệu h&igrave;nh ảnh IPS cho t&iacute;nh năng Deep Fusion c&oacute; thể cải thiện c&aacute;c chi tiết trong bức ảnh của bạn nhanh hơn tới 80%.</p>\r\n\r\n<h3>Hệ thống camera qu&aacute;i vật</h3>\r\n\r\n<p>Với phi&ecirc;n bản lần n&agrave;y, Apple cho biết tất cả camera đều c&oacute; chế độ chụp đ&ecirc;m, c&ugrave;ng với cảm biến LiDAR c&oacute; thể chụp ch&acirc;n dung ban đ&ecirc;m với hiệu ứng r&otilde; r&agrave;ng v&agrave; sống động hơn nhiều.</p>\r\n\r\n<p><img alt=\"Cụm 3 camera chất lượng | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-145321-095330.jpg\" /></p>\r\n\r\n<p>Camera TrueDepth 12 MP với một loạt c&aacute;c t&iacute;nh năng nổi bật trước đ&acirc;y kh&ocirc;ng c&oacute; tr&ecirc;n camera trước th&igrave; nay đ&atilde; xuất hiện như: Chụp ảnh ban đ&ecirc;m, quay video time-lapse ở chế độ Night Mode, ghi lại video với định dạng Dolby Vision HDR, Smart HDR 3, Deep Fusion,&hellip;</p>\r\n\r\n<p>Cụm camera đồ sộ ở mặt lưng c&oacute; k&iacute;ch thước lớn v&agrave; nh&ocirc; ra hơn so với iPhone 11 Pro Max do những n&acirc;ng cấp về camera ch&iacute;nh v&agrave; ống k&iacute;nh zoom tele, c&ugrave;ng với cảm biến LiDAR mới.</p>\r\n\r\n<p><img alt=\"Hệ thống camera sau | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-244120-044129.jpg\" /></p>\r\n\r\n<p><a href=\"https://www.dienmayxanh.com/dien-thoai-camera-goc-rong\" target=\"_blank\">Camera g&oacute;c rộng</a>&nbsp;12 MP gi&uacute;p tăng g&oacute;c chụp rộng hơn, cho ph&eacute;p bạn dễ d&agrave;ng bắt trọn mọi vật thể, chi tiết tr&ecirc;n một khung h&igrave;nh.</p>\r\n\r\n<p><img alt=\"Ảnh chụp ở chế độ ban đêm | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-244220-044228.jpg\" /></p>\r\n\r\n<p>Với&nbsp;<a href=\"https://www.dienmayxanh.com/dien-thoai-camera-zoom\" target=\"_blank\">camera zoom</a>, iPhone 12 Pro Max c&oacute; c&ugrave;ng cảm biến như iPhone 12 Pro nhưng c&oacute; ti&ecirc;u cự l&ecirc;n đến 65 mm cho ph&eacute;p zoom quang học 2.5x, dễ d&agrave;ng nắm bắt mọi chi tiết cận cảnh m&agrave; kh&ocirc;ng cần ở ngay b&ecirc;n cạnh đối tượng.</p>\r\n\r\n<p>Một loạt c&aacute;c t&iacute;nh năng chụp ảnh cũng được n&acirc;ng cấp r&otilde; rệt như: Chế độ ban đ&ecirc;m cho ph&eacute;p thu s&aacute;ng, bớt nhiễu v&agrave; chụp tối tốt hơn, cảm biến LiDAR tạo bản đồ chiều s&acirc;u cho chủ thể, gi&uacute;p lấy n&eacute;t nhanh hơn v&agrave; tốt hơn.</p>\r\n\r\n<p><img alt=\"Tích hợp cảm biến LiDAR | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-245420-045402.jpg\" /></p>\r\n\r\n<p>Hơn thế nữa, Apple đ&atilde; bổ sung th&ecirc;m một t&iacute;nh năng mới ProRAW, một định dạng cho ph&eacute;p chụp nhiều bức h&igrave;nh Smart HDR, sau đ&oacute; gh&eacute;p lại th&agrave;nh một v&agrave; người d&ugrave;ng c&oacute; thể thỏa th&iacute;ch bi&ecirc;n tập với tấm ảnh RAW n&agrave;y.</p>\r\n\r\n<p><img alt=\"Hỗ trợ ảnh ProRAW | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-245920-045939.jpg\" /></p>\r\n\r\n<h3>Khả năng kết nối mạng 5G cho tốc cao</h3>\r\n\r\n<p>Tận dụng tối đa c&ocirc;ng nghệ mạng di động 5G, cho tốc độ load nhanh, xem truyền h&igrave;nh trực tiếp với độ ph&acirc;n giải cực cao 4K, h&igrave;nh ảnh r&otilde; r&agrave;ng v&agrave; sống động như thật, m&agrave;n h&igrave;nh thời gian thực như thể xảy ra ở trước mặt bạn.</p>\r\n\r\n<p><img alt=\"Khả năng kết nối 5G cho tốc độ tải nhanh chóng | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-244420-044448.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, c&ocirc;ng nghệ n&agrave;y kh&ocirc;ng chỉ c&oacute; tốc độ cao m&agrave; c&ograve;n th&ocirc;ng minh, với phần mềm Smart Data Mode được Apple ph&aacute;t triển, cho ph&eacute;p chuyển đổi linh hoạt giữa 5G v&agrave; LTE, thiết bị sẽ tự động bật 5G khi cần thiết v&agrave; ngược lại.</p>\r\n\r\n<h3>C&ocirc;ng nghệ sạc đa năng</h3>\r\n\r\n<p>D&ugrave;&nbsp;<a href=\"https://www.dienmayxanh.com/dien-thoai-apple-iphone\" target=\"_blank\">iPhone</a>&nbsp;kh&ocirc;ng sở hữu dung lượng pin lớn, nhưng nhờ sự tối ưu về pin cũng như sức mạnh của chipset cho ph&eacute;p người d&ugrave;ng c&oacute; thể xem video l&ecirc;n đến 20 giờ, xem video trực tuyến trong 12 giờ v&agrave; ph&aacute;t nhạc li&ecirc;n tục trong 80 giờ.</p>\r\n\r\n<p><img alt=\"Hỗ trợ sạc pin nhanh 15 W | iPhone 12 Pro Max 512 GB\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-041920-031904.jpg\" /></p>\r\n\r\n<p>M&aacute;y cũng c&oacute; khả năng&nbsp;<a href=\"https://www.dienmayxanh.com/dien-thoai-sac-pin-nhanh\" target=\"_blank\">sạc pin nhanh</a>&nbsp;qua củ sạc 20 W, gi&uacute;p nạp 50% năng lượng chỉ trong khoảng 30 ph&uacute;t.</p>\r\n\r\n<p>Đối với những người h&acirc;m mộ, c&ocirc;ng nghệ MagSafe như một sự đổi mới của Apple, n&oacute; l&agrave; một v&ograve;ng tr&ograve;n từ t&iacute;nh ẩn trong vỏ sau của m&aacute;y v&agrave; bạn c&oacute; thể dễ d&agrave;ng kẹp bộ sạc, vỏ v&agrave; phụ kiện v&agrave;o, nhằm bảo vệ m&aacute;y khỏi t&igrave;nh trạng khi d&acirc;y bị vướng khiến c&aacute;p sạc rời ra, từ đ&oacute; tối đa hiệu quả khi sạc.</p>\r\n\r\n<p><img alt=\"Hỗ trợ sạc nhanh | iPhone 12 Pro Max\" src=\"https://cdn.tgdd.vn/Products/Images/42/228744/iphone-12-pro-max-512gb-142621-102605.jpg\" /></p>\r\n\r\n<p>iPhone 12 Pro Max được ra mắt như một biểu tượng mang t&iacute;nh đ&oacute;n đầu tương lai, bởi những đột ph&aacute; ngoạn mục m&agrave; &ldquo;g&atilde; khổng lồ&rdquo; n&agrave;y đem đến cho những ai đam m&ecirc; c&ocirc;ng nghệ.</p>\r\n\r\n<p>iPhone 12 Pro Max kh&ocirc;ng đơn thuần chỉ l&agrave; một chiếc&nbsp;<a href=\"https://www.dienmayxanh.com/dien-thoai\" target=\"_blank\">điện thoại th&ocirc;ng minh</a>, n&oacute; đang dần trở m&igrave;nh khẳng định vị thế của m&igrave;nh khi đang lấn s&acirc;n sang lĩnh vực m&aacute;y ảnh cũng như m&aacute;y quay chuy&ecirc;n nghiệp.</p>\r\n', '<h2>Th&ocirc;ng số kỹ thuật</h2>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/cac-cong-nghe-noi-bat-tren-man-hinh-iphone-x-1021469#oled\" target=\"_blank\">OLED</a>, 6.7&quot;,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tim-hieu-cong-nghe-man-hinh-super-retina-xdr-1214864\" target=\"_blank\">Super Retina XDR</a></li>\r\n	<li>Hệ điều h&agrave;nh: iOS 14</li>\r\n	<li>Camera sau: 3 camera 12 MP</li>\r\n	<li>Camera trước:12 MP</li>\r\n	<li>CPU:&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tim-hieu-chip-xu-ly-apple-a14-bionic-hieu-nang-ma-1302179\" target=\"_blank\">Apple A14 Bionic 6 nh&acirc;n</a></li>\r\n	<li><a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-tu-596492\" target=\"_blank\">RAM:</a>&nbsp;6 GB</li>\r\n	<li>Bộ nhớ trong: 512 GB</li>\r\n	<li>Thẻ SIM:&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/cac-loai-sim-dien-thoai-pho-bien-nhat-hien-nay-1112627#esim\" target=\"_blank\">1 Nano SIM &amp; 1 eSIM</a>,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/mang-5g-la-gi-co-nhung-uu-diem-gi-so-voi-4g-1135758\" target=\"_blank\">Hỗ trợ 5G</a></li>\r\n	<li>Dung lượng pin: 3687 mAh, c&oacute; sạc nhanh</li>\r\n</ul>\r\n', '42990000', '41990000', 0, 0, 5, 'iphone-12-pro-max-vang-new-600x600-600x600.jpg'),
(11, 1, 'Asus VivoBook A415EA i3', 'Laptop Asus VivoBook A415EA i3 (EB317T) với thiết kế nhỏ gọn tiện lợi cùng cấu hình ổn định nhờ chip Intel Core i3 Tiger Lake mới hiện đại sẽ là chiếc laptop học tập văn phòng giúp bạn có thể làm việc hay học tập vô cùng hiệu quả và đạt hiệu suất cao.', 'Thông số kỹ thuật\r\nCPU:Intel Core i3 Tiger Lake, 1115G4, 3.00 GHz\r\nRAM:4 GB, DDR4 (On board), 3200 MHz\r\nỔ cứng:SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe\r\nMàn hình:14 inch, Full HD (1920 x 1080)\r\nCard màn hình:Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:2 x USB 2.0, USB 3.1, HDMI, USB Type-C\r\nHệ điều hành:Windows 10 Home SL\r\nThiết kế:Vỏ nhựa - nắp lưng bằng kim loại, PIN liền\r\nKích thước:Dày 17.9 mm, 1.4 kg\r\nThời điểm ra mắt:2020', '13690000', '13490000', 0, 1, 5, 'asus-vivobook-a415ea-i3.jpg'),
(13, 2, 'Panasonic Inverter 170 lít', 'Thông số kỹ thuật Tủ lạnh Panasonic Inverter 170 lít NR-BA190PPVN\r\nMời bạn tham khảo video review sản phẩm tủ lạnh Panasonic 167L (NR-BA189PPVN) cùng dòng cùng tính năng với sản phẩm Tủ lạnh Panasonic Inverter 170 lít NR-BA190PPVN\r\n\r\nVận hành êm ái, tiết kiệm điện tối ưu nhờ sự kết hợp giữa công nghệ Inverter và Econavi\r\nTủ lạnh Panasonic Inverter 170 lít NR-BA190PPVN sử dụng công nghệ biến tần Inverter có khả năng duy trì làm lạnh ổn định, máy nén hoạt động êm ái, ít gây tiếng ồn hơn và tiết kiệm được điện năng tiêu thụ.\r\n\r\n', 'Thông số kỹ thuật\r\nKiểu tủ:Ngăn đá trên\r\nDung tích:170 lít\r\nSố người sử dụng:2 - 3 người\r\nCông nghệ Inverter:Tủ lạnh Inverter\r\nTiện ích:Inverter tiết kiệm điện\r\nCông nghệ làm lạnh:Làm lạnh vòng cung Panorama\r\nCông nghệ kháng khuẩn khử mùi:Công nghệ kháng khuẩn Ag Clean với tinh thể bạc Ag+\r\nNơi sản xuất:Việt Nam\r\nNăm ra mắt:2020\r\nHãng:Panasonic. Xem thông tin hãng', '6290000', '4890000', 0, 1, 5, 'panasonic-nr-ba190ppvn-300x300.jpg'),
(17, 4, 'iPhone 12 256GB', 'iPhone 12 256 GB là cái tên gây sốt các diễn đàn công nghệ trong thời gian gần đây. Mẫu smartphone mới nhất của Apple gây ấn tượng với một thiết kế mới, vi xử lý A14 Bionic mạnh mẽ, camera ấn tượng và khả năng kết nối 5G. Nếu là một fan Táo “chân chính” thì đây là siêu phẩm mà bạn không thể bỏ qua.', 'Thông số kỹ thuật\r\nMàn hình:OLED, 6.1\", Super Retina XDR\r\nHệ điều hành:iOS 14\r\nCamera sau:2 camera 12 MP\r\nCamera trước:12 MP\r\nCPU:Apple A14 Bionic 6 nhân\r\nRAM:4 GB\r\nBộ nhớ trong:256 GB\r\nThẻ SIM:1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nDung lượng pin:2815 mAh, có sạc nhanh', '28490000', '27490000', 0, 1, 10, 'iphone-12-den-new.jpg'),
(18, 4, 'OnePlus 8 Pro 5G', 'OnePlus vừa trở lại đường đua smartphone với thế hệ flagship ngàn đô tiếp theo OnePlus 8 Pro 5G sau gần 1 năm kể từ OnePlus 7 Pro ra mắt. Chiếc điện thoại đầu bảng này sở hữu cấu hình khủng với vi xử lý hàng đầu Snapdragon 865, màn hình 2K+ tràn viền tần số 120 Hz cực mượt, cùng nhiều cải tiến về thiết kế lẫn camera.', 'Thông số kỹ thuật\r\nMàn hình:AMOLED, 6.78\", Quad HD+ (2K+)\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 48 MP & Phụ 48 MP, 8 MP, 5 MP\r\nCamera trước:16 MP\r\nCPU:Snapdragon 865 8 nhân\r\nRAM:12 GB\r\nBộ nhớ trong:256 GB\r\nThẻ SIM:2 Nano SIM, Hỗ trợ 5G\r\nDung lượng pin:4510 mAh, có sạc nhanh', ' 23990000', ' 21990000', 0, 1, 10, 'oneplus-8-pro-600x600-2-600x600.jpg'),
(19, 4, 'OPPO Find X2', '<h3>Tiếp nối th&agrave;nh c&ocirc;ng vang dội của thế hệ Find X,&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;ch&iacute;nh thức ra mắt&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-find-x2\" target=\"_blank\">Find X2</a>&nbsp;với những đường n&eacute;t thanh lịch từ thiết kế phần cứng cho đến trải nghiệm phần mềm, hứa hẹn một vẻ đẹp ho&agrave;n hảo, một sức mạnh xứng tầm.</h3>\r\n\r\n<h3>Trải nghiệm thị gi&aacute;c tuyệt vời</h3>\r\n\r\n<p>Find X2 sở hữu m&agrave;n h&igrave;nh AMOLED Ultra Vision cao cấp với k&iacute;ch thước&nbsp;<a href=\"https://www.thegioididong.com/dtdd-tu-6-inch\" target=\"_blank\">l&ecirc;n đến 6.78 inch</a>&nbsp;c&ugrave;ng độ ph&acirc;n giải 2K+ cực n&eacute;t được bảo vệ bằng k&iacute;nh cường lực&nbsp;Corning Gorilla Glass 6 cao cấp.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/oppo-find-x2-vs-oppo-find-x-1243396\" target=\"_blank\">OPPO Find X2 VS OPPO Find X: Phương tr&igrave;nh t&igrave;m X bậc 2 c&oacute; g&igrave; hấp dẫn hơn?</a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198150/oppo-find-x2-tgdd2-1.jpg\" onclick=\"return false;\"><img alt=\"Oppo Find X2 | Màn hình Ultra Vision \" src=\"https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-tgdd2-1.jpg\" /></a></p>\r\n\r\n<p>M&agrave;n h&igrave;nh n&agrave;y c&oacute; độ s&aacute;ng cao, h&igrave;nh ảnh sống động với hơn 1 tỷ m&agrave;u, c&ugrave;ng c&ocirc;ng nghệ HDR10+ ti&ecirc;n tiến v&agrave; nhiều t&iacute;nh năng th&ocirc;ng minh kh&aacute;c, hứa hẹn sẽ đem đến một trải nghiệm thị gi&aacute;c tuyệt vời, m&agrave;n h&igrave;nh Find X2 được Displaymate đ&aacute;nh gi&aacute; rất cao, nằm trong top những chiếc smartphone c&oacute; m&agrave;n h&igrave;nh tốt nhất t&iacute;nh đến thời điểm hiện tại (3/2020).</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198150/oppo-find-x2-tgdd6-1.jpg\" onclick=\"return false;\"><img alt=\"Oppo Find X2 | Thiết kế độc đáo\" src=\"https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-tgdd6-1.jpg\" /></a></p>\r\n\r\n<p>Đặc biệt hơn, m&agrave;n h&igrave;nh Ultra Vision của Find X2 cung cấp tốc độ l&agrave;m mới 120 Hz c&oacute; thể k&iacute;ch hoạt c&ugrave;ng độ ph&acirc;n giải QHD+, cho mọi h&igrave;nh ảnh chuyển động mượt m&agrave;, trơn tru nhất. Tốc độ lấy mẫu cảm ứng l&ecirc;n tới 240 Hz đ&aacute;p ứng ngay lập tức mọi thao t&aacute;c chạm, vuốt của bạn.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/198150/oppo-find-x2-tgdd12.jpg\" onclick=\"return false;\"><img alt=\"Oppo Find X2 | Công nghệ màn hình hiện đại\" src=\"https://cdn.tgdd.vn/Products/Images/42/198150/oppo-find-x2-tgdd12.jpg\" /></a></p>\r\n\r\n<p>C&oacute; phần cứng cao cấp, OPPO c&ograve;n hỗ trợ bằng bằng phần mềm để n&acirc;ng cấp c&aacute;c đoạn phim th&ocirc;ng thường l&ecirc;n chuẩn HDR v&agrave; tăng mức khung h&igrave;nh l&ecirc;n đến 60 Hz bằng AI, gi&uacute;p trải nghiệm xem tr&ecirc;n OPPO Find X2 lu&ocirc;n đ&atilde; mắt v&agrave; mượt m&agrave; tr&ecirc;n bất k&igrave; loại nội dung n&agrave;o.&nbsp;</p>\r\n', '<h2>Th&ocirc;ng số kỹ thuật</h2>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-amoled-la-gi-905766\" target=\"_blank\">AMOLED</a>, 6.78&quot;,&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#2k\" target=\"_blank\">Quad HD+ (2K+)</a></li>\r\n	<li>Hệ điều h&agrave;nh:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/android-10-android-q-la-gi-co-gi-moi-1237224\" target=\"_blank\">Android 10</a></li>\r\n	<li>Camera sau: Ch&iacute;nh 48 MP &amp; Phụ 13 MP, 12 MP</li>\r\n	<li>Camera trước: 32 MP</li>\r\n	<li>CPU:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/snapdragon-865-vi-xu-ly-di-dong-hang-dau-2020-1231391\" target=\"_blank\">Snapdragon 865 8 nh&acirc;n</a></li>\r\n	<li><a href=\"https://www.thegioididong.com/hoi-dap/ram-la-gi-co-y-nghia-gi-trong-cac-thiet-bi-dien-t-1216259\" target=\"_blank\">RAM:</a>&nbsp;12 GB</li>\r\n	<li>Bộ nhớ trong: 256 GB</li>\r\n	<li>Thẻ SIM:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/sim-thuong-micro-sim-nano-sim-esim-la-gi-co-gi-khac-nhau-1310659#nano-sim\" target=\"_blank\">2 Nano SIM</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/mang-5g-la-gi-co-nhung-uu-diem-gi-so-voi-4g-1312277\" target=\"_blank\">Hỗ trợ 5G</a></li>\r\n	<li>Dung lượng pin: 4200 mAh, c&oacute; sạc nhanh</li>\r\n</ul>\r\n', '23990000', '19990000', 0, 1, 10, 'oppo-find-x2-blue-600x600-600x600.jpg'),
(20, 5, 'Tivi Sony 43 inch ', '<h3>Thiết kế hiện đại, tinh tế</h3>\r\n\r\n<p><a href=\"https://www.dienmayxanh.com/tivi/sony-43w660g\" target=\"_blank\">Smart Tivi Sony 43 inch 43W660G</a>&nbsp;sở hữu thiết kế đẹp mắt, đường n&eacute;t tinh tế, mang đến phong c&aacute;ch sống hiện đại v&agrave;o gian ph&ograve;ng của bạn.</p>\r\n\r\n<p>K&iacute;ch thước&nbsp;<a href=\"https://www.dienmayxanh.com/tivi?g=tu-32-43-inch\" target=\"_blank\">tivi 43 inch</a>&nbsp; ph&ugrave; hợp với những kh&ocirc;ng gian như: Ph&ograve;ng ngủ, ph&ograve;ng ăn hoặc ph&ograve;ng kh&aacute;ch với diện t&iacute;ch nhỏ. Ngo&agrave;i ra, với ch&acirc;n đế kim loại dạng chữ V tập trung trọng t&acirc;m tivi, n&acirc;ng cao khả năng trụ vững của tivi tr&ecirc;n nhiều dạng bề mặt phẳng kh&aacute;c nhau.</p>\r\n\r\n<p><img alt=\"Tivi Sony 43 inch KDL-43W660G - Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/1942/200519/sony-kdl-43w660g-3.jpg\" /></p>\r\n\r\n<h3>Độ ph&acirc;n giải&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/diem-mat-nhung-do-phan-giai-pho-bien-hien-nay-tren-577178#full-hd\" target=\"_blank\">Full HD</a>&nbsp;r&otilde; n&eacute;t, hiển thị chi tiết gấp 2 lần HD</h3>\r\n\r\n<p><img alt=\"Tivi Sony 43 inch KDL-43W660G - Độ phân giải\" src=\"https://cdn.tgdd.vn/Products/Images/1942/200519/sony-kdl-43w660g-4.jpg\" /></p>\r\n\r\n<h3>H&igrave;nh ảnh được n&acirc;ng cao độ s&aacute;ng hiệu quả c&ugrave;ng chi tiết c&oacute; độ s&acirc;u hơn với c&ocirc;ng nghệ&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-hinh-anh-tren-tivi-sony-201-1107501#dynamic-contrast-enhancer\" target=\"_blank\">Dynamic Contrast Enhancer</a></h3>\r\n\r\n<h3><img alt=\"Tivi Sony 43 inch KDL-43W660G - Dynamic contrast\" src=\"https://cdn.tgdd.vn/Products/Images/1942/200519/sony-kdl-43w660g-5.jpg\" /></h3>\r\n\r\n<h3>H&igrave;nh ảnh được tăng độ n&eacute;t, độ tương phản đến từ c&ocirc;ng nghệ HDR10</h3>\r\n\r\n<p><img alt=\"Tivi Sony 43 inch KDL-43W660G - X-reality PRO\" src=\"https://cdn.tgdd.vn/Products/Images/1942/200519/sony-kdl-43w660g-6.jpg\" /></p>\r\n\r\n<h3>Tivi c&oacute; những cảnh chuyển động nhanh trở n&ecirc;n mượt m&agrave;, sinh động hơn với c&ocirc;ng nghệ&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/y-nghia-cua-tan-so-quet-tren-tivi-542766\" target=\"_blank\">Motionflow XR 200 Hz</a></h3>\r\n\r\n<p><img alt=\"Tivi Sony 43 inch KDL-43W660G - Motionflow\" src=\"https://cdn.tgdd.vn/Products/Images/1942/200519/sony-kdl-43w660g-7.jpg\" /></p>\r\n\r\n<h3>&Acirc;m thanh mạnh mẽ với c&ocirc;ng nghệ&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/cong-nghe-am-thanh-tren-tivi-sony-576180#s-force-front-surround\" target=\"_blank\">S-Force Front Surround</a></h3>\r\n\r\n<p><a href=\"https://www.dienmayxanh.com/tivi-sony\" target=\"_blank\">Tivi Sony</a>&nbsp;với c&ocirc;ng nghệ giả lập trường &acirc;m hiện đại, mang đến chất &acirc;m r&otilde; r&agrave;ng, mạnh mẽ, cho bạn tận hưởng những bản nhạc hay những bộ phim h&agrave;nh động th&ecirc;m phần hấp dẫn, ch&acirc;n thực hơn.</p>\r\n', '<h2>Th&ocirc;ng số kỹ thuật</h2>\r\n\r\n<ul>\r\n	<li>Loại tivi:<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/mot-so-loai-tivi-pho-bien-hien-nay-793656#smart-tivi\" target=\"_blank\">Smart tivi cơ bản</a>, 43 inch,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/diem-mat-nhung-do-phan-giai-pho-bien-hien-nay-tren-577178#full-hd\" target=\"_blank\">Full HD</a></li>\r\n	<li>Hệ điều h&agrave;nh:Linux</li>\r\n	<li>Ứng dụng:Netflix, YouTube, Galaxy Play (Fim+), FPT Play</li>\r\n	<li>C&ocirc;ng nghệ h&igrave;nh ảnh:<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/cac-cong-nghe-hinh-anh-dac-biet-tren-tivi-sony-1127776#hlg\" target=\"_blank\">HLG</a>,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/so-sanh-hdr10-hdr10-va-dolby-vision-co-gi-khac-bie-1173256#hdr-10\" target=\"_blank\">HDR10</a>,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-hinh-anh-tren-tivi-sony-201-1107501#live-colour\" target=\"_blank\">Live Colour</a>,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tivi-sony-va-cac-cong-nghe-hinh-anh-doc-dao-575662#x-reality-pro\" target=\"_blank\">X-Reality PRO</a>,&nbsp;<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-hinh-anh-tren-tivi-sony-201-1107501#dynamic-contrast-enhancer\" target=\"_blank\">Dynamic Contrast Enhancer</a></li>\r\n	<li>Remote th&ocirc;ng minh:Kh&ocirc;ng d&ugrave;ng được</li>\r\n	<li>Chiếu m&agrave;n h&igrave;nh điện thoại l&ecirc;n tivi:<a href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/huong-dan-ghep-noi-screen-mirroring-giua-dien-thoa-571562\" target=\"_blank\">Screen Mirroring</a></li>\r\n	<li>K&iacute;ch thước:Ngang 97.3 cm - Cao 63 cm - D&agrave;y 27 cm</li>\r\n	<li>Năm ra mắt:2019</li>\r\n	<li>H&atilde;ng:Sony.&nbsp;<a href=\"javascript:void(0)\" onclick=\"showManuDes()\">Xem th&ocirc;ng tin h&atilde;ng</a></li>\r\n</ul>\r\n', '10400000', '9400000', 0, 0, 10, 'sony-kdl-43w800g-550x340.jpg'),
(21, 2, 'Sharp Inverter 605 lít', 'Tủ lạnh Side by Side sang trọng, đẳng cấp\r\nTủ lạnh Samsung Inverter 647 lít RS62R5001M9/SV có thiết kế kiểu tủ lạnh side by side đẳng cấp, đi cùng gam màu bạc sang trọng, thời thượng, tủ lạnh sẽ là điểm nhấn nổi bật, mang lại cho không gian nội thất của gia đình một vẻ đẹp hiện đại.', 'Thông số kỹ thuật\r\nKiểu tủ:Tủ lớn - Side by side\r\nDung tích:647 lít\r\nSố người sử dụng:Trên 5 người\r\nCông nghệ Inverter:Tủ lạnh Inverter\r\nCông suất tiêu thụ công bố theo TCVN:~ 1.71 kW/ngày\r\nTiện ích:Inverter tiết kiệm điện, Ngăn đá lớn, Chuông báo khi quên đóng cửa\r\nCông nghệ làm lạnh:Công nghệ làm lạnh vòm\r\nCông nghệ kháng khuẩn khử mùi:Bộ lọc khử mùi than hoạt tính\r\nNơi sản xuất:Trung Quốc\r\nNăm ra mắt:2019\r\nHãng:Samsung. Xem thông tin hãng', '24490000', '22490000', 0, 0, 10, 'tu-lanh-sharp-sj-fx680v-st-300x300.png'),
(23, 1, 'HP Pavilion x360 i3', 'HP Pavilion x360 14 dw0060TU i3 (195M8PA) hướng đến người dùng trẻ hiện đại, năng động, đặc biệt là học sinh sinh viên, nhân viên văn phòng. Nổi bật với thiết kế 2 trong 1 cùng bảo mật vân tay hiện đại, đây được đánh giá là chiếc máy tính xách tay đáng để trải nghiệm.', 'Thông số kỹ thuật\r\nCPU:Intel Core i3 Ice Lake, 1005G1, 1.20 GHz\r\nRAM:4 GB, DDR4 (2 khe), 3200 MHz\r\nỔ cứng:SSD 256GB NVMe PCIe\r\nMàn hình:14 inch, Full HD (1920 x 1080)\r\nCard màn hình:Card đồ họa tích hợp, Intel UHD Graphics\r\nCổng kết nối:2 x USB 3.1, HDMI, USB Type-C\r\nĐặc biệt:Có đèn bàn phím, Có màn hình cảm ứng\r\nHệ điều hành:Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn\r\nThiết kế:Vỏ nhựa, PIN liền\r\nKích thước:Dày 19 mm, 1.65 kg\r\nThời điểm ra mắt:2020', '14190000', '13490000', 0, 1, 10, 'hp-pavilion-x360-dw0060tu-i3.jpg'),
(37, 4, 'iphone 12', '<p>12</p>\r\n', '<p>12</p>\r\n', '12000', '10000', 0, 0, 12, '11-pro-max-den.png'),
(39, 4, 'iphone 12', '<p>12</p>\r\n', '<p>12</p>\r\n', '12000', '10000', 0, 0, 12, '11-pro-max-den.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `slider_caption` text NOT NULL,
  `slider_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_image`, `slider_caption`, `slider_active`) VALUES
(1, 'b2.jpg', 'Slider khuyễn mãi', 1),
(2, 'b3.jpg', 'Slider 50%', 0),
(3, 'b4.jpg', '', 0),
(4, 'b1.jpg', '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  ADD PRIMARY KEY (`danhmuctin_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`lienhe_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tin`
--
ALTER TABLE `tbl_danhmuc_tin`
  MODIFY `danhmuctin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `lienhe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 18, 2022 lúc 10:40 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_thoitrang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `tentk` varchar(100) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `tentk`, `mk`, `admin_status`) VALUES
(2, 'trunganh', '10840107e24f75b43d807107c1235c64', 1),
(6, 'Binh', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(8, 'Loc', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` date NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_vanchuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_vanchuyen`) VALUES
(4, 12, '7240', 0, '2021-12-04', 'tien mat', 0),
(6, 12, '6410', 0, '2021-12-04', 'tien mat', 0),
(7, 12, '7460', 0, '2021-12-04', 'tien mat', 0),
(8, 12, '9422', 0, '2021-12-04', 'tien mat', 0),
(9, 12, '1802', 0, '2021-12-04', 'tien mat', 0),
(10, 12, '1228', 0, '2021-12-04', 'tien mat', 0),
(11, 12, '3894', 0, '2021-12-04', 'tien mat', 0),
(12, 12, '3584', 0, '2021-12-04', 'tien mat', 0),
(13, 12, '1480', 0, '2021-12-04', 'tien mat', 0),
(14, 12, '813', 0, '2021-12-13', 'tien mat', 0),
(15, 12, '3527', 0, '2021-12-13', 'tien mat', 0),
(16, 18, '2853', 0, '2021-12-13', 'tien mat', 0),
(19, 12, '197', 0, '2021-12-20', 'tien mat', 0),
(20, 12, '7976', 0, '2022-02-27', 'tien mat', 2),
(21, 12, '1302', 1, '2022-02-27', 'tien mat', 2),
(22, 12, '7133', 1, '2022-02-27', 'chuyen khoan', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(1, '7240', 30, 1),
(2, '7240', 31, 1),
(5, '6410', 30, 3),
(6, '6410', 33, 2),
(7, '6410', 34, 1),
(8, '7460', 30, 2),
(9, '9422', 45, 1),
(10, '1802', 29, 2),
(11, '1228', 45, 2),
(12, '3894', 44, 2),
(13, '3584', 46, 3),
(14, '1480', 45, 1),
(15, '1480', 49, 1),
(16, '1480', 61, 1),
(17, '813', 59, 2),
(18, '813', 57, 2),
(19, '813', 41, 1),
(20, '3527', 51, 1),
(21, '2853', 66, 1),
(22, '197', 33, 1),
(23, '7976', 61, 1),
(24, '1302', 62, 1),
(25, '7133', 61, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenKH` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenKH`, `email`, `diachi`, `matkhau`, `sdt`) VALUES
(12, 'Nguyễn Trung Anh', 'trunganh9933@gmail.com', 'HD,VN', '10840107e24f75b43d807107c1235c64', '0977324362'),
(13, 'loc', 'loc@gmail.com', 'nam định', '10840107e24f75b43d807107c1235c64', '025554456'),
(14, 'hoang', 'hoang@gmail.com', 'hải dương', '10840107e24f75b43d807107c1235c64', '023644846'),
(17, 'ha', 'ha@gmail.com', 'Nghệ An', '925cc8d2953eba624b2bfedf91a91613', '0927366475'),
(18, 'Nguyễn Trung Anh', 'trunganh@gmail.com', 'hải dương', 'e10adc3949ba59abbe56e057f20f883e', '0977324362');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(3, 'QUẦN SHORT NAM', 2),
(4, 'ÁO SƠ MI NAM', 3),
(5, 'ÁO LEN', 4),
(6, 'PHỤ KIỆN', 5),
(7, 'ÁO TANK-TOP', 6),
(8, 'ÁO POLO - ÁO TSHIRT', 1),
(9, 'QUẦN ÂU NAM', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giathuong` varchar(50) NOT NULL,
  `giakm` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `chitietsanpham` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giathuong`, `giakm`, `soluong`, `hinhanh`, `chitietsanpham`, `id_danhmuc`, `tinhtrang`) VALUES
(29, 'ÁO POLO NAM', '030S8', '425000', '213000', 50, '1633094447_sp1.jpg', 'Áo Polo phom dáng Slim fit trẻ trung, ôm vừa, tôn dáng người mặc. Thiết kế basic, cổ và tay áo dệt borib bo viền với đường may chạy dọc thân làm điểm nhấn. Mặt vải dệt lacoste, cho mặt tiếp xúc bên trong mềm mại, mặt ngoài thoáng mát trong thời tiết hè. Màu sắc trẻ trung và thu hút nhờ hiệu ứng màu melange.', 8, 1),
(30, 'ÁO POLO NAM', '064S8', '395000', '198000', 50, '1633094313_sp4.jpg', 'Thiết kế áo polo Aristino phom dáng Regular fit suông nhẹ, thoải mái tự do trong vận động. Kết cấu dệt jacquard mang tới bề mặt vải hiệu ứng kẻ ô li ti năng động và mạnh mẽ.', 8, 1),
(31, 'QUẦN SHORT NAM', '012S9', '395000', '237000', 50, '1633093695_sp6.jpg', 'Quần shorts thể thao phom dáng Regular Fit suông nhẹ, thoải mái, dành riêng cho các quý ông yêu thích vận động. Thiết kế cạp chun kết hợp dây rút giúp người mặc dễ dàng điều chỉnh linh hoạt theo số đo vòng bụng. Xẻ gấu độc đáo kết hợp các đường trang trí đồng điệu mang đến diện mạo khỏe khoắn cho người mặc. Quần có túi kéo khóa hai bên kín đáo và túi ngang không khuy phía sau tiện lợi. Màu sắc cơ bản, dễ kết hợp với các loại trang phục trong nhiều hoàn cảnh khác nhau.', 3, 1),
(32, 'ÁO SƠ MI DÀI TAY', '60808', '695000', '348000', 50, '1633094199_sp12.jpg', 'Áo sơ mi dài tay phom dáng Slim Fit ôm vừa vặn cơ thể, tôn dáng người mặc. Áo thiết kế tối giản, tà lượn thời trang, màu sắc tươi sáng kết hợp họa tiết kẻ ô nhỏ trẻ trung, có tính ứng dụng cao, mặc trong nhiều hoàn cảnh khác nhau.', 4, 1),
(33, 'ÁO POLO NAM', '062S8', '395000', '198000', 50, '1633094073_sp3.jpg', 'Áo polo ngắn tay kiểu dáng Slim Fit ôm gọn gàng, tôn dáng cơ thể. Thiết kế đơn giản, dễ mặc, màu sắc cơ bản, dễ kết hợp với trang phục khác, tạo nên nét trẻ trung, năng động, khỏe khoắn cho người mặc trong mùa hè.', 8, 1),
(34, 'ÁO TANK-TOP NAM', '006S9', '235000', '141000', 50, '1633093894_sp23.jpg', 'Áo Tanktop phom dáng Slim Fit ôm nhẹ và tôn dáng. Thiết kế cổ tròn basic dễ mặc. Màu sắc nam tính kết hợp hiệu ứng màu melange mang đến cho nam giới diện mạo khỏe khoắn và thu hút. Áo có thể mặc linh hoạt từ phòng tập cho đến phong cách đời thường.', 7, 1),
(35, 'QUẦN ÂU NAM', '03207', '1200000', '600000', 50, '1636874312_sp13.jpg', 'Quần âu phom dáng Regular Fit suông nhẹ dễ mặc. Kiểu dáng hiện đại, thiết kế theo phong cách Châu Âu tạo diện mạo lịch lãm cho người mặc. Đường cắt may tỉ mỉ, phần cạp quần có thêm tăng đơ co giãn giúp phù hợp với nhiều vòng bụng.', 9, 1),
(36, 'ÁO LEN', '016W8', '550000', '385.000', 50, '1633095262_ao-len-nam-aristino-AWO016W8-08.jpg', 'Áo len dài tay dáng Slim fit ôm dáng vừa vặn với cơ thể. Là item nên có trong tủ đồ của nam giới trong mùa đông này. Điểm nhấn nằm ở phần cổ tim trẻ trung đầy cuốn hút và 2 đường dệt vắt chéo hai bên cánh tay áo mang đến sự khỏe khoắn, trẻ trung cho người mặc.', 5, 1),
(37, 'ÁO POLO NAM', 'G02S1', '950000', '499000', 21, '1636875149_ao-polo-nam-APSG02S1-01x650x650x4.jpg', 'Thiết kế cổ dệt, Phần đáp cổ thân sau được in logo, kết hợp công nghệ dệt Jacquard tạo họa tiết kẻ ngang.', 8, 1),
(38, 'ÁO POLO NAM', '018S1', '550000', '309000', 50, '1636875903_ao-polo-nam-APS018S1-13x650x650x4.jpg', 'Áo Polo phom dáng Regular Fit suông nhẹ, có cổ. Áo màu trung tính, thanh lịch.', 8, 1),
(39, 'ÁO POLO NAM', '016S1', '550000', '309000', 23, '1636876221_ao-polo-nam-APS016S1-11x650x650x4.jpg', 'Áo Polo phom dáng Regular Fit suông nhẹ. Áo thiết kế cổ vải chính, cắt can, in dọc sống lưng, tay raglang.', 8, 1),
(40, 'ÁO POLO NAM', '026S1', '495000', '303000', 50, '1636876583_ao-polo-nam-aristino-APS026S1-10x650x650x4.jpg', 'Áo polo phom dáng Regular fit suông vừa. Cổ áo dệt rib, tay trái in họa tiết đầy tinh tế. Vải dry-tech thấm hút tốt, đẩy hơi ẩm nhanh.', 8, 1),
(41, 'ÁO POLO NAM', '02313', '450000', '300000', 34, '1636876724_sp2.jpg', 'Áo Polo phom dáng Regular Fit suông nhẹ. Áo thiết kế cổ vải chính, cắt can, in dọc sống lưng, tay raglang.', 8, 1),
(42, 'MẶT DÂY LƯNG NAM', '00307', '400000', '300000', 50, '1636883469_sp17.jpg', '- Mặt dây lưng hợp kim màu bạc đen sang trọng, dễ kết hợp với trang phục mang lai vẻ lịch lãm, tinh tế. Mặt trượt, đầu khóa linh hoạt làm từ hợp kim chống gỉ chắc chắn, dễ dàng thu vào, nới ra. Chất liệu kim loại không han gỉ, hạn chế tối đa sự trầy xước, bền đẹp sau thời gian sử dụng lâu dài. Dễ kết hợp với các loại dây lưng với màu sắc,  họa tiết khác.', 6, 1),
(43, 'QUẦN SHORT NAM', '84652', '399000', '250000', 50, '1638240288_sp5.jpg', 'Quần shorts thể thao phom dáng Regular Fit suông nhẹ, thoải mái, dành riêng cho các quý ông yêu thích vận động. Thiết kế cạp chun kết hợp dây rút giúp người mặc dễ dàng điều chỉnh linh hoạt theo số đo vòng bụng. Xẻ gấu độc đáo kết hợp các đường trang trí đồng điệu mang đến diện mạo khỏe khoắn cho người mặc. Quần có túi kéo khóa hai bên kín đáo và túi ngang không khuy phía sau tiện lợi. Màu sắc cơ bản, dễ kết hợp với các loại trang phục trong nhiều hoàn cảnh khác nhau.', 3, 1),
(44, 'QUẦN SHORT NAM', '20312', '395000', '239000', 34, '1638240371_sp7.jpg', 'Quần shorts thể thao phom dáng Regular Fit suông nhẹ, thoải mái, dành riêng cho các quý ông yêu thích vận động. Thiết kế cạp chun kết hợp dây rút giúp người mặc dễ dàng điều chỉnh linh hoạt theo số đo vòng bụng. Xẻ gấu độc đáo kết hợp các đường trang trí đồng điệu mang đến diện mạo khỏe khoắn cho người mặc. Quần có túi kéo khóa hai bên kín đáo và túi ngang không khuy phía sau tiện lợi. Màu sắc cơ bản, dễ kết hợp với các loại trang phục trong nhiều hoàn cảnh khác nhau.', 3, 1),
(45, 'QUẦN SHORT NAM', '053G9', '425000', '249000', 50, '1638240440_sp8.jpg', 'Quần shorts thể thao phom dáng Regular Fit suông nhẹ, thoải mái, dành riêng cho các quý ông yêu thích vận động. Thiết kế cạp chun kết hợp dây rút giúp người mặc dễ dàng điều chỉnh linh hoạt theo số đo vòng bụng. Xẻ gấu độc đáo kết hợp các đường trang trí đồng điệu mang đến diện mạo khỏe khoắn cho người mặc. Quần có túi kéo khóa hai bên kín đáo và túi ngang không khuy phía sau tiện lợi. Màu sắc cơ bản, dễ kết hợp với các loại trang phục trong nhiều hoàn cảnh khác nhau.', 3, 1),
(46, 'QUẦN SHORT NAM', '036S1', '595000', '279000', 50, '1638244708_quan-short-nam-aristino-ASO036S1-11.jpg', 'Quần short phom Regular Fit suông nhẹ và thoải mái vận động. Thiết kế basic khỏe khoắn với túi quần tiện lợi. Màu sắc dễ dàng kết hợp với các trang phục khác.', 3, 1),
(47, 'ÁO SƠ MI DÀI TAY', '246G7', '799000', '559.000', 34, '1638244946_sp9.jpg', 'Áo sơ mi dài tay phom dáng Slim Fit ôm vừa vặn cơ thể, tôn dáng người mặc. Áo thiết kế tối giản, tà lượn thời trang, màu sắc tươi sáng kết hợp họa tiết kẻ ô nhỏ trẻ trung, có tính ứng dụng cao, mặc trong nhiều hoàn cảnh khác nhau.', 4, 1),
(48, 'ÁO SƠ MI DÀI TAY', '20Q23', '850000', '490000', 50, '1638245072_sp10.jpg', 'Áo sơ mi dài tay phom dáng Slim Fit ôm vừa vặn cơ thể, tôn dáng người mặc. Áo thiết kế tối giản, tà lượn thời trang, màu sắc tươi sáng kết hợp họa tiết kẻ ô nhỏ trẻ trung, có tính ứng dụng cao, mặc trong nhiều hoàn cảnh khác nhau.', 4, 1),
(49, 'ÁO SƠ MI DÀI TAY', '193R3', '795000', '599000', 34, '1638245134_sp11.jpg', 'Áo sơ mi dài tay phom dáng Slim Fit ôm vừa vặn cơ thể, tôn dáng người mặc. Áo thiết kế tối giản, tà lượn thời trang, màu sắc tươi sáng kết hợp họa tiết kẻ ô nhỏ trẻ trung, có tính ứng dụng cao, mặc trong nhiều hoàn cảnh khác nhau.', 4, 1),
(50, 'ÁO SƠ MI DÀI TAY', '21901', '1200000', '1000000', 34, '1638245267_ao-so-mi-nam-aristino-ALS21901-05.jpg', 'Áo sơ mi dài tay phom dáng regular fit suông vừa, không ôm sát cơ thể, tạo sự thoải mái cho người mặc. Được thiết kế cơ bản với tà lượn, túi ngực tiện lợi và , họa tiết trắng kẻ sọc xanh đem lại hình ảnh ấn tượng cho các quý ông Aristino.', 4, 1),
(51, 'ÁO LEN', '001W9', '650000', '450000', 34, '1638247366_ao-len-nam-aristino-AWO001W9-13.jpg', 'Áo len dài tay dáng Slim fit ôm dáng vừa vặn với cơ thể. Là item nên có trong tủ đồ của nam giới trong mùa đông này. Điểm nhấn nằm ở phần cổ tim trẻ trung đầy cuốn hút và 2 đường dệt vắt chéo hai bên cánh tay áo mang đến sự khỏe khoắn, trẻ trung cho người mặc.', 5, 1),
(52, 'ÁO LEN', '008W8', '695000', '500000', 50, '1638247571_ao-len-nam-aristino-AWO008W8.jpg', 'Áo len dài tay dáng Slim fit ôm dáng vừa vặn với cơ thể. Là item nên có trong tủ đồ của nam giới trong mùa đông này. Điểm nhấn nằm ở phần cổ tim trẻ trung đầy cuốn hút và 2 đường dệt vắt chéo hai bên cánh tay áo mang đến sự khỏe khoắn, trẻ trung cho người mặc.', 5, 1),
(53, 'ÁO LEN', '015W8', '690000', '499000', 40, '1638247638_ao-len-nam-aristino-AWO015W8-05.jpg', 'Áo len dài tay dáng Slim fit ôm dáng vừa vặn với cơ thể. Là item nên có trong tủ đồ của nam giới trong mùa đông này. Điểm nhấn nằm ở phần cổ tim trẻ trung đầy cuốn hút và 2 đường dệt vắt chéo hai bên cánh tay áo mang đến sự khỏe khoắn, trẻ trung cho người mặc.', 5, 1),
(54, 'ÁO LEN', '005W8', '690000', '500000', 21, '1638247759_ao-len-nam-aristino-AWO005W8.jpg', 'Áo len hai lớp phom dáng Regular Fit suông nhẹ thoải mái và ấm áp. Thiết kế cổ tròn basic, bo gấu và tay áo. Thiết kế áo hai lớp giúp giữ ấm tốt hơn trong thời tiết mùa đông. Bảng màu đa dạng với những tone màu thời trang dễ kết hợp với nhiều loại trang phục.', 5, 1),
(55, 'MẶT DÂY LƯNG NAM', '03307', '500000', '350000', 44, '1638248012_sp18.jpg', 'Mặt dây lưng kim loại với màu vàng sang trọng, dễ kết hợp với trang phục mang lại vẻ lịch lãm, tinh tế. Đầu khóa linh hoạt làm từ hợp kim chống gỉ chắc chắn, dễ dàng thu vào nơi ra, không cảm thấy khó chịu khi sử dụng. Chất liệu hợp kim không han gỉ, hạn chế tối đa sự trầy xước, bền đẹp sau thời gian sử dụng lâu dài.', 6, 1),
(56, 'MẶT DÂY LƯNG NAM', '02907', '750000', '600000', 21, '1638248119_sp20.jpg', 'Mặt dây thắt lưng kết hợp tinh tế giữa bạc và đồng, tạo nên sự sang trọng cho quý ông khi sử dụng. Dễ dàng kết hợp với các loại dây lưng khác nhau. Chất liệu hợp kim không han gỉ, hạn chế tối đa sự trầy xước, bền đẹp sau thời gian sử dụng lâu dài.', 6, 1),
(57, 'VÍ DA NAM', '01807', '595000', '455000', 30, '1638248259_sp19.jpg', 'Ví đựng card nhỏ gọn và tiện dụng. Thiết kế đơn giản những không kém phần nam tính và sang trọng. Ví có nhiều ngăn chứa card giúp nam giới lữu trữ các loại thẻ/card visit một cách sang trọng. Ví nam thiết kế nhỏ gọn và tiện dụng. Bề mặt da sần vân nhỏ tinh tế, mang đến vẻ đơn giản nhưng sang trọng. Thiết kế dạng gập gọn gàng, có nhiều ngăn đựng tiền và giấy tờ cá nhân, có thể dễ dàng mang theo người mọi lúc, mọi nơi.', 6, 1),
(58, 'THẮT LƯNG DA NAM', '02909', '2000000', '1800000', 20, '1638248389_that-lung-da-nam-aristino-ABL02909.jpg', 'Thắt lưng da cao cấp màu xanh tím than kết hợp vân saffiano sang trọng. Bản dây 32mm thanh mảnh, có thể kết hợp với nhiều loại trang phục khác nhau, đặc biệt phù hợp với trang phục công sở lịch sự, chỉn chu. Mặt dây làm hoàn toàn từ thép không rỉ, mạ bạc chrome sáng màu, tạo nên diện mạo thanh lịch, tinh tế. Mặt kim đơn giản, chắc chắn với kết cấu xoay đặc biệt có thể chuyển đổi nhanh giữa hai mặt dây giúp điều chỉnh dây lưng tiện lợi.', 6, 1),
(59, 'ÁO TANK-TOP NAM', '015S9', '145000', '100000', 20, '1638248520_sp21.jpg', 'Áo Tank top phom dáng Slim fit ôm vừa, nam tính và tôn dáng người mặc. Thiết kế khỏe khoắn với phần may đắp vai trang trí, màu sắc đa dạng mang đến nhiều lựa chọn kết hợp trang phục.', 7, 1),
(60, 'ÁO TANK-TOP NAM', '003S9', '185000', '150000', 34, '1638248582_sp22.jpg', 'Áo Tanktop phom dáng Slim Fit ôm vừa vặn, tôn dáng cơ thể. Thiết kế thể thao năng động, khỏe khoắn và dễ kết hợp trang phục. Màu sắc nam tính kết hợp hiệu ứng màu melange cho bạn diện mạo thu hút. Áo thích hợp để mặc ở nhà lẫn đi phòng tập.', 7, 1),
(61, 'ÁO TANK-TOP NAM', '011S8', '149000', '120000', 35, '1638248758_sp24.jpg', 'Áo tank-top Aristino vô cùng khỏe khoắn với các đường nét thể thao. Phần logo in trên ngực áo có họa tiết dừa độc đáo.', 7, 1),
(62, 'ÁO TANK-TOP NAM', 'TTR06', '295000', '250000', 34, '1638248849_ao-tank-top-nam-aristino-ATTR06-01.jpg', 'Áo Tank-top có thiết kế cơ bản và khỏe khoắn. Màu sắc áo trung tính có thể mặc khi tham gia các hoạt động thể thao hoặc mặc layer cho phong cách ngoài công sở.', 7, 1),
(63, 'QUẦN ÂU NAM', '00509', '750000', '600000', 25, '1638249142_sp14.jpg', 'Quần âu phom dáng Slim Fit ôm nhẹ và tôn dáng. Quần có túi xẻ hai bên và túi cài khuy phía sau tiện lợi. Đường may tỉ mỉ kết hợp ứng dụng công nghệ nếp ly vĩnh viễn giúp quần luôn đứng dáng. Thiết kế basic, màu sắc cơ bản và dễ kết hợp với nhiều trang phục khác.', 9, 1),
(64, 'QUẦN ÂU NAM', 'TRR05', '795000', '600000', 87, '1638249593_sp15.jpg', 'Quần âu phom dáng Regular Fit suông nhẹ và cạp tăng-đơ co giãn đảm bảo sự vừa vặn và thoải mái cho người mặc. Ứng dụng công nghệ nếp ly vĩnh viễn Supercrease giúp quần luôn đứng dáng và mang đến diện mạo chỉn chu cho người mặc. Quần có túi xẻ 2 bên, 2 túi sau cài khuy tiện lợi. Các chi tiết được may tỉ mỉ, tinh tế. Gấu chờ, được may vừa vặn với số đo của từng khách hàng. Màu sắc cơ bản giúp quần dễ dàng kết hợp với nhiều trang phục khác nhau.', 9, 1),
(65, 'QUẦN ÂU NAM', '008S7', '950000', '600000', 44, '1638249710_sp16.jpg', 'Quần âu thiết kế phù hợp cho người chơi golf. Thiết kế cổ điển, lịch lãm với nếp ly vĩnh viễn giúp Quần đứng dáng, dễ là ủi. Túi quần rộng, sâu, tiện khi chơi golf. Gấu chờ, được may vừa vặn với số đo của từng khách hàng. ', 9, 1),
(66, 'QUẦN ÂU NAM', '03801', '750000', '600000', 34, '1638249809_quan-au-nam-aristino-ATR03801-01.jpg', 'Quần âu phom Slim fit ôm vừa vặn với cơ thể. Quần màu cơ bản, dễ kết hợp trang phục, họa tiết kẻ thời trang, nam tính. Thiết kế túi xẻ 2 bên, túi cài sau tiện lợi.', 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id_thongke` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id_thongke`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2021-02-03', 55, '16480000', 28),
(2, '2021-03-30', 55, '25500000', 25),
(3, '2021-04-20', 50, '15600000', 30),
(4, '2021-05-27', 10, '36500000', 30),
(5, '2021-06-26', 8, '6500000', 9),
(6, '2021-07-25', 50, '15500000', 25),
(7, '2021-08-24', 55, '25500000', 25),
(8, '2021-09-23', 50, '15600000', 30),
(9, '2021-10-22', 10, '36500000', 30),
(10, '2021-11-21', 8, '6500000', 9),
(11, '2021-12-04', 4, '2138000', 13),
(12, '2021-12-13', 3, '1905000', 7),
(13, '2021-12-20', 1, '198000', 1),
(14, '2022-02-27', 1, '120000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vanchuyen`
--

CREATE TABLE `tbl_vanchuyen` (
  `id_vanchuyen` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `ghichu` text NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_vanchuyen`
--

INSERT INTO `tbl_vanchuyen` (`id_vanchuyen`, `ten`, `sdt`, `diachi`, `ghichu`, `id_dangky`) VALUES
(2, 'Trung Anh', '0977324362', 'Nhị Châu, Hải Dương', 'giao nhanh nhé', 12);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `code_cart` (`code_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `code_cart` (`code_cart`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id_thongke`);

--
-- Chỉ mục cho bảng `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  ADD PRIMARY KEY (`id_vanchuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id_thongke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_vanchuyen`
--
ALTER TABLE `tbl_vanchuyen`
  MODIFY `id_vanchuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_dangky`);

--
-- Các ràng buộc cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`),
  ADD CONSTRAINT `tbl_cart_details_ibfk_2` FOREIGN KEY (`code_cart`) REFERENCES `tbl_cart` (`code_cart`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

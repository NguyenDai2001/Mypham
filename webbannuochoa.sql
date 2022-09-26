-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2022 lúc 03:37 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbannuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `giasanpham` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `id_user`, `id_sanpham`, `soluong`, `giasanpham`) VALUES
(50, 2, 20, 1, 200),
(60, 1, 20, 1, 200),
(61, 1, 20, 1, 200),
(63, 2, 20, 1, 200),
(64, 1, 60, 1, 23044);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `anh_gioithieu` text DEFAULT NULL,
  `noidung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `anh_gioithieu`, `noidung`) VALUES
(18, 'blackpink_2.jpg', 'Thương hiệu mỹ phẩm chăm sóc da với nguồn gốc từ Pháp, chuyên nghiên cứu và sáng tạo ra những sản phẩm lành tính được chiết xuất từ TRÁI NHO 🍇 cùng những thành phần tự nhiên được thu hoạch trên vùng đất trồng nho xứ Bordeaux, mang tính bền vững và thân thiện với môi trường! Những sản phẩm từ Caudalie ra đời với sứ mệnh nuôi dưỡng, bảo vệ và phục hồi vẻ đẹp của làn da.\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_SanPham` int(11) NOT NULL,
  `Ten_SanPham` text NOT NULL,
  `Anh_sanpham` text NOT NULL,
  `Gia_cu` decimal(10,0) DEFAULT current_timestamp(),
  `Gia_moi` float NOT NULL,
  `Ngay_nhap` datetime NOT NULL DEFAULT current_timestamp(),
  `Phan_loai` text NOT NULL,
  `Trang_thai` int(11) NOT NULL DEFAULT 1,
  `Ban_chay` int(11) NOT NULL DEFAULT 0,
  `anh_slide1` text DEFAULT NULL,
  `anh_slide2` text DEFAULT NULL,
  `anh_slide3` text DEFAULT NULL,
  `gioiThieu_1` text DEFAULT NULL,
  `tieude1` text DEFAULT NULL,
  `tieude2` text DEFAULT NULL,
  `tieude3` text DEFAULT NULL,
  `noidung1` text DEFAULT NULL,
  `noidung2` text DEFAULT NULL,
  `noidung3` text DEFAULT NULL,
  `anhmau1` text DEFAULT NULL,
  `anhmau2` text DEFAULT NULL,
  `anhmau3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_SanPham`, `Ten_SanPham`, `Anh_sanpham`, `Gia_cu`, `Gia_moi`, `Ngay_nhap`, `Phan_loai`, `Trang_thai`, `Ban_chay`, `anh_slide1`, `anh_slide2`, `anh_slide3`, `gioiThieu_1`, `tieude1`, `tieude2`, `tieude3`, `noidung1`, `noidung2`, `noidung3`, `anhmau1`, `anhmau2`, `anhmau3`) VALUES
(60, 'Bút Kẻ Mắt Nước Chống Trôi Merzy Another Me The First Pen Eyeliner 0.5g', '134_d98280e28b684029a62a38e7081ec03d_2048x2048.png', '342000', 23044, '2022-06-04 01:53:48', 'Pk', 1, 1, '134_d98280e28b684029a62a38e7081ec03d_2048x2048.png', '135_f013a4d920a84799abad93afeac3ebc8_2048x2048.jpg', '54_db08381f4b624448bacd72332334f591_1024x1024 (1).png', '- Bền màu, lâu trôi, không bị nhòe bởi mồ hôi hay bã nhờn</br>\r\n- Không lem, không trôi, không thấm mồ hôi</br>\r\n- Màu sắc đậm và sắc nét đến đường viền', '• Đặc trưng:', 'Eyeliner', 'Chi tiết sản phẩm', '- Bút Kẻ Mắt Nước Chống Trôi Merzy Another Me The First Pen Eyeliner hiện tại đã có tại Thế giới Skinfood có thiết kế đầu bút mảnh dễ vẽ, dễ tạo đường mắt mỏng tinh tế, giúp dễ dàng điều chỉnh từ nét mảnh đến nét dày ', 'Sản phẩm vinh dự lọt vào TOP 5 sản phẩm eyeliner tốt nhất từ chương trình Get It Beauty 2018, và chiến thắng bình chọn từ GlowPick năm 2017.\r\n\r\n', 'Bút Kẻ Mắt Nước Chống Trôi Merzy Another Me The First Pen Eyeliner là kẻ mắt nước của thương hiệu Merzy với đầu bút mềm mại giúp kẻ đường line một cách dễ dàng tạo đôi mắt sắc sảo với đường nét tinh tế lôi cuốn mọi ánh nhìn.', '135_f013a4d920a84799abad93afeac3ebc8_2048x2048.jpg', '54_db08381f4b624448bacd72332334f591_1024x1024.webp', '136_0b0e929815ef440594632f466899de37_2048x2048.webp'),
(61, 'Kem Dưỡng Da Làm Dịu, Phục Hồi Da Ban Đêm Klairs Midnight Blue Calming Cream', 'images (4).jfif', '342000', 23333, '2022-06-04 01:58:26', 'Nữ', 1, 0, 'images (2).jfif', 'images (3).jfif', 'serum-tham-x2-01-100x100.jpg', '', 'Chi tiết sản phẩm', ' Calming Cream ', '', 'Kem Dưỡng Da Làm Dịu, Phục Hồi Da Ban Đêm Klairs Midnight Blue Calming Cream là kem dưỡng với thành phần chính là Guaiazulene có nguồn gốc từ hoa cúc  và chiết xuất rau má Giúp phục hồi và làm dịu các vùng da đang dị ứng hoặc sưng đỏ, l', 'phục hồi làn da bị tổn thương, hình thành hàng rào dưỡng ẩm bảo vệ da khỏe mạnh, àm dịu da và giảm các tác hại do tia UV thuộc thương hiệu Klairs đến từ Hàn Quốc', '', 'images (3).jfif', 'images (3).jfif', ''),
(62, 'Simple Kind To Skin Refreshing Facial Wash 150ml', '4_e12dc23215be4057bc6e480adc9958ce_master.webp', '400200', 300900, '2022-06-04 02:02:02', 'Nữ', 1, 0, '6_4b6f12d62ad84e1b9645927199acb0c8_master.webp', 'p-da-sach-thoang-150ml-1652952400_img_800x800_eb97c5_fit_center_-_copy_e950bc025c6d4db4b3ac24a342eb8888_1024x1024.webp', '148877cfb3e0875dd7e3661fb8a61f56.webp', '- Dành cho mọi loại da</br>\r\n- Dành cho những làn da dễ bị kích ứng</br>\r\n- Dành cho những bạn đang tìm kiếm một loại sữa rửa mặt dịu nhẹ </br>', 'Chi tiết sản phẩm', ' Đặc trưng: ', '• Đối tượng khuyên dùng:', 'Sữa Rửa Mặt Dịu Nhẹ, Dành Cho Da Nhạy Cảm Simple Kind To Skin Refreshing Facial Wash là sữa rửa mặt thuộc thương hiệu Simple với kết cấu gel 100% không chứa xà phòng nhẹ nhàng làm sạch da, lấy đi bụi bẩn cùng bã nhờn dư thừa mà không gây kích ứng cho da', '- Vitamin E giúp da căng mịn nhờ khả năng cung cấp dưỡng chất giúp giữ ẩm, vitamin E còn ngăn ngừa sự mất nước, cân bằng độ ẩm giúp da mềm mịn và luôn đầy sức sống', '- Dành cho mọi loại da\r\n\r\n- Dành cho những làn da dễ bị kích ứng, mẩn đỏ, căng tức da khi sử dụng các loại sữa rửa mạnh có tính làm sạch cao\r\n\r\n- Dành cho những bạn đang tìm kiếm một loại sữa rửa mặt dịu nhẹ ', '577504765294332eb266924ce9198000.webp', '6_4b6f12d62ad84e1b9645927199acb0c8_master.webp', '148877cfb3e0875dd7e3661fb8a61f56.webp'),
(63, 'Senka Perfect Whip Collagen In 120g', '146 (1).webp', '932382', 434332, '2022-06-04 02:05:46', 'Nữ', 1, 1, '2_-_qtt_2d879ff91d8141b48116814067ca8e52_1024x1024.webp', '146.webp', '146_3696efa07c7b4542bf83e946775ae141_1024x1024.webp', '', 'Chi tiết sản phẩm', '- Hydrolyzed silk:', '• Đặc trưng:', 'Sữa Rửa Mặt Tạo Bọt Ẩm Mịn, Săn Chắc Da Senka Perfect Whip Collagen In là sữa rửa mặt thuộc thương hiệu Senka chứa thành phần Collagen cùng lớp bọt dày, mịn không những loại bỏ bụi bẩn, dầu thừa hiệu quả mà còn giúp da săn chắc, đàn hồi, đầy sức sống hơn. Cùng công nghệ độc quyền Aqua', ' Lớp sừng có tác dụng bảo vệ da khỏi các tác động bên ngoài. Hydrolyzed silk có khả năng thúc đẩy sự phục hồi của lớp sừng như hàng rào bảo vệ da.', '- Sữa Rửa Mặt Tạo Bọt Ẩm Mịn, Săn Chắc Da Senka Perfect Whip Collagen In hiện đang có mặt tại Thế giới Skinfood, tinh chất Collagen là một loại protein được tạo thành từ các axit amin, chiếm khoảng 90% các sợi trong lớp da của bạn. Giúp tạo độ đàn hồi cho da, làm mờ nếp nhăn, vết chân chim, hạn chế tình trạng chảy xệ da', 'a9dbe551c87fb2d51913bdab3bf6876a_quot_a7534a22cdf9481db9f53c34c07de2eb.jpg', '8927aca23aae7ec5f6560056b7d52b61_quot_75ed644161cb440cb17b844e76ea3580.webp', 'f2289fe3478baed313cb5253e33ba834_quot_1ef118dd4007438e9dd4b0bd2e92bd97.webp'),
(64, 'Simple Purifying Gel Wash 150ml', 'thiet_ke_khong_ten__4__9c164799848448468f82ca6671b0d18f_1024x1024.webp', '420000', 399200, '2022-06-04 02:08:33', 'Nam', 1, 1, '3d0717a4f71ca538a1e31b8adaee3003_482bac7e46b946258597a31475f6c2cd_1024x1024.webp', 'a28185c3f2ea8eb5fc45fb7517d9b6da_aecc10d053da4b46a85e834e07dfdecf_1024x1024.webp', '8d0c7e033f06abc801572404459844cd_8599bc0ede784fb592ffa27f1ecd76a1_1024x1024.webp', 'Gel Rửa Mặt Không Chứa Xà Phòng Kiềm Dầu</br>\r\n Ngừa Mụn Cho Da Nhạy Cảm', 'Chi tiết sản phẩm', '• Hướng dẫn sử dụng:', '• Đặc trưng: ', 'Gel Rửa Mặt Không Chứa Xà Phòng Kiềm Dầu, Ngừa Mụn Cho Da Nhạy Cảm Simple Purifying Gel Wash 150ml là gel rửa mặt có công thức \"giải độc\" từ hỗn hộp cỏ xạ hương, kẽm và nước cây phỉ giúp làm sạch sâu bụi bẩn, dầu thừa và cặn trang điểm mà vẫn êm dịu, không gây khô rát hay kích ứng cho da đến từ thương hiệu Simple', 'Làm ẩm da với nước, sau đó lấy 1 lượng sản phẩm vừa đủ ra lòng bàn tay ướt và tạo bọt rồi thoa đều lên mặt, kết hợp massage nhẹ nhàng theo chiều kết cấu da. Rửa sạch lại với nước', '-  Gel Rửa Mặt Không Chứa Xà Phòng Kiềm Dầu, Ngừa Mụn Cho Da Nhạy Cảm Simple Purifying Gel Wash 150ml hiện đang có mặt tại Thế Giới Skinfood là dòng gel rửa mặt không chứa xà phòng với độ pH cân bằng là 5 duy trì ở độ pH tự nhiên của da, không chỉ làm sạch sâu, sản phẩm còn có khả năng cân bằng độ ẩm, giúp da mền mịn, ẩm mướt', '8d0c7e033f06abc801572404459844cd_ac7f994f0ac44667970b1d4eaf2f465c_master.webp', 'a28185c3f2ea8eb5fc45fb7517d9b6da_c5096c043cd445758fa9c5b6df318b30_master.webp', '8d0c7e033f06abc801572404459844cd_ac7f994f0ac44667970b1d4eaf2f465c_master.webp'),
(65, 'Máy Đẩy Tinh Chất, Làm Sạch, Nâng Cơ', 'cleansing__4min___7__3d6e460bfb4549b682c69cca91d63a45_1024x1024.webp', '2443000', 1999000, '2022-06-04 02:13:34', 'Pk', 1, 0, '1bd69474daabc8ff19329bf87f6b4015_e1e12844cf0347e8ab148983083f8149_1024x1024.webp', '89973f2b8f24e38ecc50c6a575b78c67_7d36cef37db244e696a0f1e6f27b12ec_1024x1024.webp', '8f9f8d9fe8dd5e47adcd53ae55f62af6_b257dbeb20da42ad8b4ff35a715f01e8_1024x1024.webp', '- Dành cho mọi loại da</br>\r\n- Dành cho da xỉn màu, không đều màu</br>\r\n- Dành cho da khô, sần sùi</br>', 'Chi tiết sản phẩm', ' Ánh sáng đỏ 615nm-630nm ', '• Đặc trưng:', 'Máy Đẩy Tinh Chất, Làm Sạch, Nâng Cơ, Trẻ Hóa Làn Da Bibury Skin Therapy Facial Massage Device là máy đẩy tinh chất. Một siêu phẩm chăm sóc da chuyên sâu, với 3 chế độ làm đẹp giúp loại bỏ 100% bụi bẩn và cặn trang điểm trang điểm. Đẩy dưỡng hiệu quả hơn gấp 10 lần so với dùng tay. Đồng thời công nghệ massage, làm ấm giúp cải thiện cấu trúc da, nâng cơ và chống lão hóa thuộc thương hiệu Bibury đến từ Việt Nam.', 'đi sâu vào lớp hạ bì, thúc đẩy tăng sinh collagen và elastin, giảm nếp nhăn, phục hồi sức sống tươi trẻ cho làn da', '- Máy Đẩy Tinh Chất, Làm Sạch, Nâng Cơ, Trẻ Hóa Làn Da Bibury Skin Therapy Facial Massage Device hiện đã có mặt tại Thế Giới Skinfood là thiết bị làm đẹp da tích hợp công nghệ ion âm và dương. Kết hợp xung điện EMS, hơi ấm, vi rung và ánh sáng đỏ. Đem lại hiệu quả làm sạch sâu, đẩy dưỡng chất, nâng cơ và làm săn chắc da, giúp trẻ hóa căng bóng làn da, cải thiện đường nét của khuôn mặt.', '1bd69474daabc8ff19329bf87f6b4015_80fbf98c300147a9b6378a6f6a7f17ff_master.webp', 'may-day-tinh-chat-bibury-ionems-3_68bff633ec724ec6b4ddd34f9f44e7bf_master.webp', '8f9f8d9fe8dd5e47adcd53ae55f62af6_7813f6b625f54393b9b8e9c59da1cbb7_master.webp'),
(66, 'Máy Phun Sương Cấp Ẩm Mini K.Skin Handy Mist White KD88', 'dd_05991d4e926745cfb18b33a1b813d74d_1024x1024.webp', '490', 419, '2022-06-04 02:15:45', 'Pk', 1, 0, '584ec4a9c9a3f7eda83a94b5d65cdc80_quot_d185956edb98418eb91d2442d77347e6_1024x1024.webp', '99204bc1fc47f03c60cd4f59a492796e_quot_00a2b271b6ef470da1a7daafa96404b6_1024x1024.webp', '02b82e6cc910491b96d0e8c27ca2e1e0_quot_76cb9d8227494907a32b831fa3f59fae_1024x1024.webp', '', 'Chi tiết sản phẩm', ' Công nghệ Nano ', 'Đặc trưng:', 'Máy Phun Sương Cấp Ẩm Mini K.Skin Handy Mist White KD88 là dòng sản phẩm máy phun sương, xịt khoáng đến từ thương hiệu K.SKIN. Với chức năng cấp ẩm nhanh chóng và kịp thời nhờ công nghệ Nano giúp da tươi mát và mịn màng, thư giãn và xoa dịu làn da những ngày nắng nóng, giải quyết tình trang da khô ráp và đổ dầu ngay lập tức, cân bằng độ ẩm cho làn da thoải mái suốt cả ngày dài', ' Chức năng xông hơi, thư giãn, giảm căng thẳng, mệt mỏi, bổ sung độ ẩm cần thiết, duy trì làn da khoẻ đẹp và căng mịn.\r\n\r\n- Sử dụng xông hơi mặt với nước, sữa tươi có thể bổ sung thêm tinh dầu để tăng cường dưỡng chất bổ sung cho làn da.', ' Máy Phun Sương Cấp Ẩm Mini K.Skin Handy Mist White KD88 hiện đã có mặt tại Thế Giới Skinfood xịt khoáng giúp làn da được thư giãn sau một ngày làm việc mệt mỏi, bổ sung thêm độ ẩm cần thiết, duy trì làn da căng mịn và khoẻ mạnh, ngoài ra còn hỗ trợ giữ lớp trang điểm bền chặt và tươi sáng hơn.', 'artboard-3_bdfe64b11de34473962dd28f649c55fe_master.webp', 'e43c64e9c1d1c430c87267238efe652c_quot_2b6c1091a81b4431a3878bf0ccc32ae4_1024x1024.webp', '6da9b3ab2badd3f067645a09e407c0de_quot_216617a963854170b2e38ca416cd2b39_master.webp'),
(67, 'Nước Hoa Nam Versace Eros Man EDT 5ml', 'nuoc-hoa-versace-eros-cho-nam-say-dam-phai-nu-minisize-5ml-5db936dcd37ed-30102019140812.jpg', '250', 150, '2022-06-04 02:29:33', 'Nam', 1, 0, 'nuoc-hoa-versace-eros-5ml-cho-nam-anh-2-jpg-1572419117-30102019140517.jpg', 'nuoc-hoa-versace-eros-5ml-cho-nam-anh-1-jpg-1572419110-30102019140510.jpg', 'versace-eros-homme-jpg-1585132425-25032020173345.jpg', '', 'Giới thiệu nước hoa Versace Eros 5ml', 'Mùi hương nước hoa Versace Eros 5ml', 'Thiết kế chai nước hoa Versace Eros For Men 5ml', 'Versace Eros For Men là nhãn hiệu nước hoa của Ý, được ra đời vào năm 2012 do người cha để là Aurelen Guichard của thương hiệu Givaudan sáng tạo nên.', 'Chuyên gia Aurelien Guichard, ông đã đem hương vị phương Đông kết hợp với cảm hứng thần thoại Hy Lạp để tạo ra sản phẩm chai Versace Eros for men 5ml.', 'Hãng Versace đã cho thiết kế chai xanh ngọc trong suốt đầy ấn tượng, Nước hoa Versace Eros 5ml ẩn giấu hương thơm mạnh mẽ, cá tính pha chút nồng ấm của gỗ Phương Đông.', 'nuoc-hoa-versace-eros-5ml-cho-nam-anh-1-jpg-1572419110-30102019140510.jpg', 'nuoc-hoa-versace-eros-5ml-cho-nam-anh-3-jpg-1572419144-30102019140544.jpg', 'nuoc-hoa-versace-eros-5ml-cho-nam-anh-2-jpg-1572419117-30102019140517.jpg'),
(68, 'Nước Hoa Nữ Estée Lauder Pleasures EDP 100ml', 'nuoc-hoa-nu-estee-lauder-pleasures-edp-100ml-6298508464927-02062022125412.jpg', '1900000', 1200000, '2022-06-04 02:31:33', 'Nữ', 1, 0, 'default-percentage-2f2017-percen-jpg-1654150535-02062022131535.jpg', '3d3c396e7673980f31395ee2cc4e9af6-jpg-1654149269-02062022125429.jpg', 'f0edd290c137bade496c4fe87ec83c02-jpg-1654149276-02062022125436.jpg', '', 'Lịch sử nước hoa Estée Lauder Pleasures', 'Mùi hương nước hoa nữ Estée Lauder Pleasures EDP 100ml', 'Thiết kế chai nước hoa nữ Estée Lauder Pleasures EDP 100ml', 'Estée Lauder Pleasures được tạo ra bởi bàn tay tài hoa của các nhà thiết kế nước hoa Annie Buzantian và Alberto Morillas đến từ Firmenich và đã được ra mắt vào năm 1995. Estée Lauder Pleasures giống như bó hoa tươi thắm rực rỡ sau cơn mưa và được thiết kế dành riêng cho các chị em phụ nữ.', 'Nước Hoa Nữ Estée Lauder Pleasures EDP 100ml có lớp hương đầu có sử dụng tinh chất của các loại quả mọng màu hồng, đây là lần đầu tiên trong lịch sử nước hoa có sử dụng hương thơm này, và tạo ra một ấn tượng ban đầu thật tươi sáng và vui tươi.\r\n\r\n', 'Thiết kế nước hoa nữ Elie Saab Essence No9 Tuberose EDP 100ml là một kiệt tác của Pinard Dinand. Thân chai có thiết kế hình bầu dục thằng đứng trong suốt và nắp chai bo tròn để dễ dàng bật nắp sử dụng.', '3d3c396e7673980f31395ee2cc4e9af6-jpg-1654149269-02062022125429.jpg', 'default-percentage-2f2017-percen-jpg-1654150535-02062022131535.jpg', 'nuoc-hoa-nu-estee-lauder-pleasures-edp-100ml-6298508464927-02062022125412.jpg'),
(69, 'Set Dưỡng Da Estée Lauder The Night Is yours 2 Món', 'set-duong-da-estee-lauder-the-night-is-yours-2-mon-620606f2f0f0e-11022022134922.jpg', '700644', 234000, '2022-06-04 02:34:50', 'Nữ', 1, 0, '63b07a0255cab504cac068a5733de6d2-1-jpg-1635751267-01112021142107.jpg', 'po-jpg-1615281108-09032021161148-jpg-1615339730-10032021082850.jpg', '127039976_116800646910928_5504065917826933631_n-jpg-1635751275-01112021142115.jpg', '', 'Về thương hiệu Estée Lauder nổi tiếng', 'Set Dưỡng Da Estée Lauder The Night Is yours 2 Món', 'Serum Estée Lauder Advanced Night Repair Synchronized Multi-Recovery Complex (7 ml)', 'Estée Lauder là một trong những nhãn hiệu làm đẹp nổi tiếng thế giới. Các sản phẩm góp phần tạo nên thương hiệu cho Estée Lauder là các bộ mỹ phẩm trang điểm, chăm sóc da.', 'là dòng sản phẩm cao cấp đến từ thương hiệu Estee Lauder nổi tiếng. Ngay từ khi có mặt trên thị trường set Estée Lauder The Night Is yours được nhiều người yêu thích sử dụng.', 'sẽ thấm cực sâu dưới da, đánh thức từng tế bào. Hỗ trợ phục hồi và tái tạo các tổn thương, dưỡng da làm cho da săn chắc, căn mịn. Hỗ trợ làm giảm nhăn và làm đầy các rãnh nhăn.', '127039976_116800646910928_5504065917826933631_n-jpg-1635751275-01112021142115.jpg', 'po-jpg-1615281108-09032021161148-jpg-1615339730-10032021082850.jpg', '63b07a0255cab504cac068a5733de6d2-1-jpg-1635751267-01112021142107.jpg'),
(70, 'Nước Hoa Nữ Viktor & Rolf Flowerbomb Women Limited Edition EDP 50ml', 'nuoc-hoa-nu-viktor-rolf-flowerbomb-women-limited-edition-edp-50ml-620b06eada086-15022022085034.jpg', '500000', 300000, '2022-06-04 02:36:19', 'Nữ', 1, 0, 'a0d55376cbc224097038989b7c41dd7f-jpg-1611030829-19012021113349.jpg', 'flowerbomb-crystal-edition4-png-1611030837-19012021113357.png', 'a0d55376cbc224097038989b7c41dd7f-jpg-1611030829-19012021113349.jpg', '', 'Lịch sử nước hoa Viktor & Rolf Flowerbomb Women Limited Edition', 'Thiết kế chai nước hoa Viktor & Rolf Flowerbomb Women Limited Edition', '', 'Nước Hoa Nữ Viktor & Rolf Flowerbomb Women Limited Edition là phiên bản nước hoa dành cho Giáng Sinh mà Viktor & Rolf gửi đến khách hàng luôn đồng hành và yêu quý các sản phẩm nước hoa của thương hiệu.', 'Chai nước hoa vẫn được thiết kế mang hình dáng của viên kim cương hình quả lựu, thế nhưng nó được khoác lên một lớp áo màu trắng óng ánh sang trọng. Điểm nhấn của chai nước hoa này đó chính là chiếc nơ to bản màu trắng lấp lánh được thắt ở phần cổ chai.', '', 'flowerbomb-crystal-edition4-png-1611030837-19012021113357.png', 'a0d55376cbc224097038989b7c41dd7f-jpg-1611030829-19012021113349.jpg', ''),
(71, 'aaaaaaaaaa', 'nuoc-hoa-nu-viktor-rolf-flowerbomb-women-limited-edition-edp-50ml-620b06eada086-15022022085034.jpg', '3000', 2000, '2022-06-04 08:25:37', 'Nữ', 1, 0, '127039976_116800646910928_5504065917826933631_n-jpg-1635751275-01112021142115.jpg', 'f0edd290c137bade496c4fe87ec83c02-jpg-1654149276-02062022125436.jpg', 'default-percentage-2f2017-percen-jpg-1654150535-02062022131535.jpg', 'aaaa</br>', 'TTO - Theo thống kê của trang chuyể', '', '', ' tín transfermarkt, tại Giải U23 châu Á 2022, Việt Nam có độ tuổi trung bình trẻ hơn U23 Thái Lan và giá trị chuyển nhượn', '', '', 'nuoc-hoa-nu-viktor-rolf-flowerbomb-women-limited-edition-edp-50ml-620b06eada086-15022022085034.jpg', 'f0edd290c137bade496c4fe87ec83c02-jpg-1654149276-02062022125436.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangchu_slider`
--

CREATE TABLE `trangchu_slider` (
  `id_slider` int(11) NOT NULL,
  `name_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangchu_slider`
--

INSERT INTO `trangchu_slider` (`id_slider`, `name_slider`) VALUES
(30, '20157326_485726205095747_70194274152953922_o.png'),
(31, 'banner-2.jpg'),
(32, 'banner-1170-400-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `hoten` text NOT NULL,
  `phone` int(11) NOT NULL,
  `TinhThanh` text DEFAULT NULL,
  `QuanHuyen` text DEFAULT NULL,
  `XaPhuong` text DEFAULT NULL,
  `SoNha` text DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `password`, `hoten`, `phone`, `TinhThanh`, `QuanHuyen`, `XaPhuong`, `SoNha`, `role`) VALUES
(1, 'dai1234', '123', 'aaaaa', 123123, '', NULL, NULL, NULL, 1),
(2, 'dai123', '123', 'Nguyễn Văn Đại ', 9222222, 'Điện biên', 'điện biên', 'noong hẹt', 'số nha123', 0),
(20, 'adwđ', 'adas', 'Nguyễn Văn Đại', 1233213, '312', 'qưeq', 'áda', 'áaa', 0),
(21, 'adwđ', 'adas', 'Nguyễn Văn Đại', 1233213, '312', 'qưeq', 'áda', 'áaa', 0),
(22, '231231', 'adas', '312313', 123123123, '123123daw', 'adawdwa', 'đưa', 'ưadwad', 0),
(23, 'đaawdawd', 'đưaă', 'đưaăd', 23123123, 'adawdw', 'adwadawd', 'dădđưa', 'đawadawd', 0),
(24, 'đaawdawd', 'đưaă', 'đưaăd', 23123123, 'adawdw', 'adwadawd', 'dădđưa', 'đawadawd', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_SanPham`);

--
-- Chỉ mục cho bảng `trangchu_slider`
--
ALTER TABLE `trangchu_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_SanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `trangchu_slider`
--
ALTER TABLE `trangchu_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2024 lúc 04:36 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_payment` varchar(50) NOT NULL DEFAULT 'Thanh toán khi nhận hàng(COD)',
  `id_status` int(11) NOT NULL DEFAULT 0,
  `total_bill` int(11) NOT NULL,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `email`, `name_user`, `phone`, `address`, `id_payment`, `id_status`, `total_bill`, `date_order`) VALUES
(27, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 13750000, '2023-11-09 16:46:17'),
(28, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(29, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5500000, '2022-09-07 11:19:13'),
(30, 'admin@gmail.com', 'Công ngủ quên', '038738728', 'FPT Polytechnic', 'Thanh toán khi nhận hàng(COD)', 2, 5000000, '2023-12-08 14:47:08'),
(31, 'admin@gmail.com', 'ấds', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 2950000, '2023-12-06 14:56:50'),
(32, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 13750000, '2023-12-09 16:46:17'),
(33, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 13750000, '2023-12-09 16:46:17'),
(34, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-12-10 00:36:18'),
(35, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5500000, '2023-12-07 11:19:13'),
(36, 'admin@gmail.com', 'Công ngủ quên', '038738728', 'FPT Polytechnic', 'Thanh toán khi nhận hàng(COD)', 2, 5000000, '2023-12-08 14:47:08'),
(37, 'admin@gmail.com', 'ấds', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 2950000, '2023-12-06 14:56:50'),
(38, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 13750000, '2023-12-09 16:46:17'),
(39, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 13750000, '2023-11-09 16:46:17'),
(40, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(41, 'admin@gmail.com', 'cong', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5500000, '2023-09-07 11:19:13'),
(42, 'admin@gmail.com', 'Công ngủ quên', '038738728', 'FPT Polytechnic', 'Thanh toán khi nhận hàng(COD)', 2, 5000000, '2023-12-08 14:47:08'),
(43, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(44, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(45, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(46, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(47, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(48, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 5900000, '2023-10-10 00:36:18'),
(49, 'aaaaaa@gmail.vm', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 0, 2750000, '2023-12-10 18:17:40'),
(50, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 2, 1200000, '2023-12-12 18:22:19'),
(51, 'admin@gmail.com', 'nvb', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 1, 9600000, '2023-12-14 12:17:27'),
(52, 'sssa@gmail.com', 'nva', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', 0, 600000, '2023-12-14 12:17:57'),
(53, 'a@gmail.com', 'nva', '0359877364', 'Hà Nội', 'Thanh toán khi nhận hàng(COD)', -1, 600000, '2024-04-13 23:08:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `name`, `size`, `price`, `quantity`) VALUES
(21, 27, 'ÁO VEST ADAM BEIGE SỮA - AV308', 40, 2750000, 2),
(22, 27, 'QUẦN BEIGE TRƠN - Q308', 41, 675000, 2),
(23, 27, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 41, 600000, 3),
(24, 27, 'GIÀY BUỘC DÂY NÂU ADAM OXFORDS - GTX014N', 40, 1700000, 3),
(25, 28, 'ÁO VEST NÂU SỌC CHÌM - AV384', 39, 2950000, 2),
(26, 29, 'ÁO VEST ADAM BEIGE SỮA - AV308', 40, 2750000, 2),
(27, 31, 'ÁO VEST NÂU SỌC CHÌM - AV384', 39, 2950000, 1),
(28, 49, 'ÁO VEST ADAM BEIGE SỮA - AV308', 40, 2750000, 1),
(29, 50, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 41, 600000, 2),
(30, 51, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 40, 600000, 11),
(31, 51, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 41, 600000, 5),
(32, 52, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 40, 600000, 1),
(33, 53, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 40, 600000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Áo sơ mi'),
(2, 'Áo vest'),
(3, 'Quần âu'),
(4, 'Giày tây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date_cmt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_pro`, `content`, `date_cmt`) VALUES
(7, 6, 10, 'đẹp ghê', '2023-12-13'),
(8, 6, 45, 'bbb', '2024-01-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `img`, `date_add`, `Name`) VALUES
(1, 'Năm 2022 đánh dấu sự xuất hiện trở lại mạnh mẽ của earth tone khi mà các thiết kế sở hữu tone màu này tràn ngập trên các trang bìa tạp ch...', '▪️ Năm 2022 đánh dấu sự xuất hiện trở lại mạnh mẽ của earth tone khi mà các thiết kế sở hữu tone màu này tràn ngập trên các trang bìa tạp chí hay những sàn runway của những thương hiệu thời trang cao cấp. Có thể nói bên cạnh xanh lục, earth tone chính là ', 'lookbook1.webp', '2023-11-11', ''),
(2, 'Có câu “Quý hồ tinh, bất quý hồ đa”, nghĩa là “Chỉ cần tốt chứ không cần nhiều.” Hay nói cách khác, Chất lượng quan trọng hơn số lượng. T...', '▪️ Có câu “Quý hồ tinh, bất quý hồ đa”, nghĩa là “Chỉ cần tốt chứ không cần nhiều.” Hay nói cách khác, Chất lượng quan trọng hơn số lượng.\r\n\r\n▪️ Trong cuộc sống, mỗi một người đều chỉ có thể có được thứ phù hợp, tương xứng với mình, giống như “nghệ thuật ', 'lookbook2.webp', '2023-11-09', ''),
(3, '“Based on Vietnam, for Vietnamese people” - giống như bao thương hiệu thời trang âu phục trên toàn thế giới, Adam Store hướng tới vẻ đẹp ...', '▪️ “Based on Vietnam, for Vietnamese people” - giống như bao thương hiệu thời trang âu phục trên toàn thế giới, Adam Store hướng tới vẻ đẹp toàn diện của một người đàn ông đích thực. Sự đa dạng trong việc lựa chọn chất liệu cao cấp đi kèm với sự khắt khe ', 'lookbook3.jpg', '2023-11-10', ''),
(4, 'Câu nói “Một bộ suits làm nên giá trị của một quý ông” có lẽ luôn đúng trong mọi thời đại, mọi thời điểm. Tư tưởng này đã thấm nhuần vào ...', '▪️ Câu nói “Một bộ suits làm nên giá trị của một quý ông” có lẽ luôn đúng trong mọi thời đại, mọi thời điểm. Tư tưởng này đã thấm nhuần vào suy nghĩ để trở thành một phần không thể thiếu trong nền công nghiệp thời trang thế giới. Nó tạo thành một “Classy ', 'lookbook4.webp\r\n', '2023-11-12', ''),
(5, 'Trong tiếng Nhật có từ “Karesansui” - Nó mang ý nghĩa là “Ngôi vườn của sự thiền định” và chúng tôi nghĩ rằng “Khi một người đàn ông thực...', '▪️ Trong tiếng Nhật có từ “Karesansui” - Nó mang ý nghĩa là “Ngôi vườn của sự thiền định” và chúng tôi nghĩ rằng “Khi một người đàn ông thực sự trưởng thành - tâm hồn họ sẽ trở nên tĩnh lặng giữa hàng vạn thăng trầm của cuộc sống”\r\n\r\n▪️ Tiếp nối Collectio', 'lookbook5.jpg', '2023-11-10', ''),
(6, 'Màu đen là sắc màu ‘vĩnh cửu’ trong làng thời trang, tồn tại qua bao năm tháng, mặc các xu hướng thời trang luôn chuyển động và biến đổi ...', '▪️ Màu đen là sắc màu ‘vĩnh cửu’ trong làng thời trang, tồn tại qua bao năm tháng, mặc các xu hướng thời trang luôn chuyển động và biến đổi không ngừng. Trang phục màu đen luôn đem lại phong thái quyến rũ, mạnh mẽ, sắc lạnh và sang trọng tuyệt đối cho ngư', 'lookbook6.webp', '2023-11-13', ''),
(7, '“Tối giản” hay “gần gũi với thiên nhiên” là một trong những từ khóa được nhiều người quan tâm nhất trong khoảng thời gian 2 năm quay trở ...', '▪️ “Tối giản” hay “gần gũi với thiên nhiên” là một trong những từ khóa được nhiều người quan tâm nhất trong khoảng thời gian 2 năm quay trở lại đây. Chúng ta có thể thấy rõ xu hướng thời trang trên thế giới đã dần chuyển đổi từ maximalism sang minimalism ', 'lookbook7.webp', '2023-11-12', ''),
(8, 'Khi nói đến những giá trị làm nên một người đàn ông đích thực, sẽ có vô vàn những thước đo, quy chuẩn để đánh giá khác nhau tùy theo khôn...', ' Khi nói đến những giá trị làm nên một người đàn ông đích thực, sẽ có vô vàn những thước đo, quy chuẩn để đánh giá khác nhau tùy theo không gian và thời gian. Nhưng song song đó, vẫn luôn có những phẩm chất được xem như là giá trị cốt lõi, không bao giờ t', 'lookbook8.webp', '2023-11-15', ''),
(9, 'Phái mạnh thời đại mới không chỉ là những người “sức dài vai rộng và làm việc tốt” mà cũng phải biết “chơi” và biết “diện”! Đàn ông hiện ...', 'Phái mạnh thời đại mới không chỉ là những người “sức dài vai rộng và làm việc tốt” mà cũng phải biết “chơi” và biết “diện”! Đàn ông hiện đại phải thể hiện được sự hiểu biết nhất định về cách ăn vận phù hợp với bản thân, biết chăm chút ngoại hình chỉn chu ', 'lookbook9.webp', '2023-11-14', ''),
(10, 'Khi một người đàn ông viết ra danh sách những điều quan trọng nhất của đời mình, ở một dòng nào đó, hẳn họ cũng đã tự đặt ra cho mình một...', 'Khi một người đàn ông viết ra danh sách những điều quan trọng nhất của đời mình, ở một dòng nào đó, hẳn họ cũng đã tự đặt ra cho mình một mục tiêu về diện mạo và khí chất. Thứ khí chất ấy chính là tổng hòa của sức khỏe thể chất và cả vẻ đẹp về nội tâm. Nó', 'lookbook10.jpeg', '2023-11-14', ''),
(11, 'KEEP HOLIDAY IN YOUR OWN WAYĐối với mọi người, mùa lễ hội là những khoảnh khắc linh thiêng, ấm cúng và hạnh phúc khi quây quần bên người ...', 'Đối với mọi người, mùa lễ hội là những khoảnh khắc linh thiêng, ấm cúng và hạnh phúc khi quây quần bên người thân. Và mỗi người sẽ có một cách cảm nhận, tận hưởng mùa lễ hội cuối năm theo cách của riêng mình. Còn đối với Adam Store: \"Mùa lễ hội là dịp mà ', 'lookbook11.jpg', '2023-11-16', ''),
(12, 'HÀNH TRÌNH CHINH PHỤC CỦA NGƯỜI ĐÀN ÔNG \"Cuộc đời là một hành trình vô tận mà giữa những quãng đời được kết nối bằng những chuyến đi...', 'Khi nói đến những giá trị làm nên một người đàn ông đích thực, sẽ có vô vàn những thước đo, quy chuẩn để đánh giá khác nhau tùy theo không gian và thời gian. Nhưng song song đó, vẫn luôn có những phẩm chất được xem như là giá trị cốt lõi, không bao giờ th', 'lookbook7.webp', '2023-11-15', ''),
(13, ' Cuộc sống của người đàn ông với rất nhiều vũ điệu sắc màu khác nhau như một bản nhạc với nhiều nốt trầm, bổng. Điều đó đã tạo nên v...', 'Trong tiếng Nhật có từ “Karesansui” - Nó mang ý nghĩa là “Ngôi vườn của sự thiền định” và chúng tôi nghĩ rằng “Khi một người đàn ông thực...\r\n“Based on Vietnam, for Vietnamese people” - giống như bao thương hiệu thời trang âu phục trên toàn thế giới, Adam', 'lookbook3.webp', '2023-11-13', ''),
(14, ' Phong cách thời trang đậm chất sprezzatura đã trở thành thương hiệu của những Quý ông nước Ý. Chúng đi vào từng nhịp đập của cuộc s...', 'Phái mạnh thời đại mới không chỉ là những người “sức dài vai rộng và làm việc tốt” mà cũng phải biết “chơi” và biết “diện”! Đàn ông hiện đại phải thể hiện được sự hiểu biết nhất định về cách ăn vận phù hợp với bản thân, biết chăm chút ngoại hình chỉn chu ', 'lookbook5.webp', '2023-11-09', ''),
(15, 'Màu đen là sắc màu ‘vĩnh cửu’ trong làng thời trang, tồn tại qua bao năm tháng, mặc các xu hướng thời trang luôn chuyển động và biến đổi ...', '▪️ Câu nói “Một bộ suits làm nên giá trị của một quý ông” có lẽ luôn đúng trong mọi thời đại, mọi thời điểm. Tư tưởng này đã thấm nhuần vào suy nghĩ để trở thành một phần không thể thiếu trong nền công nghiệp thời trang thế giới. Nó tạo thành một “Classy ', 'lookbook8.webp', '2023-11-14', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `method`) VALUES
(1, 'Thanh toán khi nhận hàng(COD)'),
(2, 'Chuyển khoản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `view`, `description`, `id_cat`) VALUES
(1, 'ÁO VEST XANH ĐEN KẺ - AV359', 3300000, 'suit1.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(2, 'ÁO VEST GHI KẺ SỌC 2HK - AV336CQ', 3850000, 'suit2.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(3, 'ÁO VEST XANH KẺ - AV399', 3100000, 'suit3.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(4, 'ÁO VEST TRẮNG 23. 2HK - AVT23CQ', 3400000, 'suit4.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(5, 'ÁO VEST XANH SỌC 2HK - TXV293CQ', 5200000, 'suit5.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(6, 'ÁO VEST BE KẺ SỌC 2HK - AV337CQ', 3450000, 'suit6.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(7, 'ÁO VEST NÂU SỌC CHÌM - AV384', 2950000, 'suit7.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(8, 'ÁO VEST HỒNG - AVTN03', 2950000, 'suit8.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(9, 'ÁO VEST XANH LÁ - AVTN03', 2950000, 'suit9.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(10, 'ÁO VEST ADAM BEIGE SỮA - AV308', 2750000, 'suit10.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(11, 'ÁO VEST XANH PASTEL - AVTN02', 2950000, 'suit11.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(12, 'ÁO VEST VÀNG CHANH SỌC CHÌM - AV385', 2950000, 'suit12.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(13, 'ÁO VEST XANH SỌC 2HK - TXV293', 3500000, 'suit5.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(14, 'ÁO VEST TRẮNG 24. 2HK - AVT24CQ', 3450000, 'suit4.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(15, 'ÁO VEST XANH KẺ - AV388', 3100000, 'suit3.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(16, 'ÁO VEST NÂU SỌC CHÌM - AV385', 2950000, 'suit7.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(17, 'ÁO VEST XANH LÁ - AVTN01', 3200000, 'suit9.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(18, 'ÁO VEST XANH PASTEL - AVTN04', 2950000, 'suit11.webp', 0, 'Kiểu dáng: Phom dáng Slim-fit được cách tân để phù hợp với tỷ lệ hình thể của người đàn ông Việt Nam', 2),
(20, 'QUẦN GHI ĐẬM HỌA TIẾT XƯƠNG CÁ CHÌM - Q328', 765000, 'quan1.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(21, 'QUẦN BEIGE TRƠN - Q310', 675000, 'quan2.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(22, 'QUẦN ÂU ADAM BEIGE SIDETAB - Q308K1', 765000, 'quan3.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(23, 'QUẦN ÂU ADAM XANH SỌC CHÌM - Q331', 765000, 'quan4.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(24, 'QUẦN ÂU ADAM ĐEN SỌC CHÌM - Q335', 685000, 'quan5.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(25, 'QUẦN ÂU ADAM BE KIỂU - Q307K1', 765000, 'quan6.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(29, 'QUẦN GHI ĐẬM HỌA TIẾT XƯƠNG CÁ CHÌM - Q328', 765000, 'quan1.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(30, 'QUẦN BEIGE TRƠN - Q308', 675000, 'quan2.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(31, 'QUẦN ÂU ADAM BEIGE SIDETAB - Q308K1', 765000, 'quan3.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(32, 'QUẦN ÂU ADAM XANH SỌC CHÌM - Q331', 765000, 'quan4.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(33, 'QUẦN ÂU ADAM ĐEN SỌC CHÌM - Q332', 685000, 'quan5.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(34, 'QUẦN ÂU ADAM BE KIỂU - Q307K1', 765000, 'quan6.webp', 0, ' Chất liệu: Vải thun trơn dày dặn, co giãn tốt thất hút mồ hôi, mặc thoáng mát\r\n\r\n- Thiết kế : Quần tây baggy nam ống côn nam thanh lịch basic đơn giản dễ mặchất….\r\n\r\n- Kiểu dáng gọn nhẹ, thể thao, năng động và đầy cá tính.\r\n\r\nPhù hợp nhiều hoàn cảnh: mặc', 3),
(35, 'GIÀY BUỘC DÂY ADAM OXFORDS BURGENDY - GTX008D', 2500000, 'giay1.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(36, 'DÉP ADAM CÓ QUAI CÀI - DAD004D', 1800000, 'giay2.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(37, 'GIÀY BUỘC DÂY NÂU ADAM OXFORDS - GTX014N', 1700000, 'giay3.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(38, 'GIÀY BUỘC DÂY ADAM OXFORDS BURGENDY - GTX009D', 2500000, 'giay1.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(39, 'GIÀY BUỘC DÂY ADAM OXFORDS BURGENDY - GTX011', 2500000, 'giay1.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(40, 'DÉP ADAM CÓ QUAI CÀI - DAD006D', 1800000, 'giay2.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(41, 'GIÀY BUỘC DÂY NÂU ADAM OXFORDS - GTX015N', 1700000, 'giay3.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(42, 'GIÀY BUỘC DÂY ADAM OXFORDS BURGENDY - GTX010D', 2500000, 'giay1.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(43, 'GIÀY BUỘC DÂY ADAM OXFORDS BURGENDY - GTX012D', 2500000, 'giay1.webp', 0, 'Chất liệu da chất lượng cao nhập khẩu từ nước ngoài đi tạo cảm giác ôm chân và không gây cảm giác đau', 4),
(44, 'SƠ MI ĐỎ KẺ SỌC PHA CỔ TRẮNG - TXTK15', 900000, '1701425003_somi1.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(45, 'SƠ MI TRẮNG KẺ CARO - SDTTK0042T', 600000, '1701425031_somi2.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(46, ' SƠ MI XANH TÍM THAN KẺ SỌC TO PHA CỔ TRẮNG - TXTK13', 800000, '1701425042_somi3.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(47, 'SƠ MI NAM XANH SÁNG KẺ SỌC - SDTTK0040X', 750000, '1701424777_somi4.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(48, 'SƠ MI TRẮNG KẺ CARO - SDTTK0043T', 850000, '1701424807_somi5.jpg', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(49, 'SƠ MI BAMBOO NAM CÔNG SỞ GHI - SMBB13', 650000, '1701424845_somi6.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(50, 'SƠ MI BAMBOO NAM CÔNG SỞ XANH SÁNG - SMBB09 ', 770000, '1701424881_somi7.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(51, 'SƠ MI XANH SÁNG SỌC - TXTK17', 850000, '1701424909_somi8.jpg', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1),
(52, 'SƠ MI NAM BEIGE HỌA TIẾT KẺ CARO - SMC112', 950000, '1701424934_somi9.webp', 0, 'Chất liệu mát mẻ , chuẩn form tạo ra sự lịch lãm', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `id_size` int(11) NOT NULL DEFAULT 6,
  `added_on` datetime DEFAULT current_timestamp(),
  `quantity` int(11) DEFAULT 1,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `id_pro`, `id_size`, `added_on`, `quantity`, `status`) VALUES
(1453, 1, 2, '2023-12-09 16:35:27', 1, 0),
(1454, 1, 1, '2023-12-09 16:35:27', 1, 0),
(1455, 1, 3, '2023-12-09 16:35:27', 1, 0),
(1456, 2, 2, '2023-12-09 16:35:27', 1, 0),
(1457, 2, 1, '2023-12-09 16:35:27', 1, 0),
(1458, 2, 3, '2023-12-09 16:35:27', 1, 0),
(1459, 3, 2, '2023-12-09 16:35:27', 1, 0),
(1460, 3, 3, '2023-12-09 16:35:27', 1, 0),
(1461, 3, 1, '2023-12-09 16:35:27', 1, 0),
(1462, 4, 1, '2023-12-09 16:35:27', 1, 0),
(1463, 4, 2, '2023-12-09 16:35:27', 1, 0),
(1464, 4, 3, '2023-12-09 16:35:27', 1, 0),
(1465, 5, 2, '2023-12-09 16:35:27', 1, 0),
(1466, 5, 3, '2023-12-09 16:35:27', 1, 0),
(1467, 5, 1, '2023-12-09 16:35:27', 1, 0),
(1468, 6, 1, '2023-12-09 16:35:27', 1, 0),
(1469, 6, 2, '2023-12-09 16:35:27', 1, 0),
(1470, 6, 3, '2023-12-09 16:35:27', 1, 0),
(1471, 7, 1, '2023-12-09 16:35:27', 1, 0),
(1472, 7, 3, '2023-12-09 16:35:27', 1, 0),
(1473, 7, 2, '2023-12-09 16:35:27', 1, 0),
(1474, 8, 3, '2023-12-09 16:35:27', 1, 0),
(1475, 8, 2, '2023-12-09 16:35:27', 1, 0),
(1476, 8, 1, '2023-12-09 16:35:27', 1, 0),
(1477, 9, 2, '2023-12-09 16:35:27', 1, 0),
(1478, 9, 1, '2023-12-09 16:35:27', 1, 0),
(1479, 9, 3, '2023-12-09 16:35:27', 1, 0),
(1480, 10, 2, '2023-12-09 16:37:24', 1, 0),
(1481, 10, 3, '2023-12-09 16:37:24', 1, 0),
(1482, 10, 1, '2023-12-09 16:37:24', 1, 0),
(1483, 11, 2, '2023-12-09 16:37:24', 1, 0),
(1484, 11, 1, '2023-12-09 16:37:24', 1, 0),
(1485, 11, 3, '2023-12-09 16:37:24', 1, 0),
(1486, 12, 1, '2023-12-09 16:37:24', 1, 0),
(1487, 12, 3, '2023-12-09 16:37:24', 1, 0),
(1488, 12, 2, '2023-12-09 16:37:24', 1, 0),
(1489, 13, 1, '2023-12-09 16:37:24', 1, 0),
(1490, 13, 2, '2023-12-09 16:37:24', 1, 0),
(1491, 13, 3, '2023-12-09 16:37:24', 1, 0),
(1492, 14, 3, '2023-12-09 16:37:24', 1, 0),
(1493, 14, 1, '2023-12-09 16:37:24', 1, 0),
(1494, 14, 2, '2023-12-09 16:37:24', 1, 0),
(1495, 15, 2, '2023-12-09 16:37:24', 1, 0),
(1496, 15, 3, '2023-12-09 16:37:24', 1, 0),
(1497, 15, 1, '2023-12-09 16:37:24', 1, 0),
(1498, 16, 3, '2023-12-09 16:37:24', 1, 0),
(1499, 16, 2, '2023-12-09 16:37:24', 1, 0),
(1500, 16, 1, '2023-12-09 16:37:24', 1, 0),
(1501, 17, 2, '2023-12-09 16:37:24', 1, 0),
(1502, 17, 1, '2023-12-09 16:37:24', 1, 0),
(1503, 17, 3, '2023-12-09 16:37:24', 1, 0),
(1504, 18, 3, '2023-12-09 16:37:24', 1, 0),
(1505, 18, 2, '2023-12-09 16:37:24', 1, 0),
(1506, 18, 1, '2023-12-09 16:37:24', 1, 0),
(1507, 20, 3, '2023-12-09 16:37:24', 1, 0),
(1508, 20, 1, '2023-12-09 16:37:24', 1, 0),
(1509, 20, 2, '2023-12-09 16:37:24', 1, 0),
(1510, 21, 3, '2023-12-09 16:37:24', 1, 0),
(1511, 21, 1, '2023-12-09 16:37:24', 1, 0),
(1512, 21, 2, '2023-12-09 16:37:24', 1, 0),
(1513, 22, 1, '2023-12-09 16:37:24', 1, 0),
(1514, 22, 2, '2023-12-09 16:37:24', 1, 0),
(1515, 22, 3, '2023-12-09 16:37:24', 1, 0),
(1516, 23, 3, '2023-12-09 16:37:24', 1, 0),
(1517, 23, 1, '2023-12-09 16:37:24', 1, 0),
(1518, 23, 2, '2023-12-09 16:37:24', 1, 0),
(1519, 24, 3, '2023-12-09 16:37:24', 1, 0),
(1520, 24, 2, '2023-12-09 16:37:24', 1, 0),
(1521, 24, 1, '2023-12-09 16:37:24', 1, 0),
(1522, 25, 1, '2023-12-09 16:37:24', 1, 0),
(1523, 25, 1, '2023-12-09 16:37:24', 1, 0),
(1524, 25, 3, '2023-12-09 16:37:24', 1, 0),
(1525, 29, 4, '2023-12-09 16:37:24', 1, 0),
(1526, 29, 3, '2023-12-09 16:37:24', 1, 0),
(1527, 29, 2, '2023-12-09 16:37:24', 1, 0),
(1528, 30, 4, '2023-12-09 16:37:24', 1, 0),
(1529, 30, 3, '2023-12-09 16:37:24', 1, 0),
(1530, 30, 2, '2023-12-09 16:37:24', 1, 0),
(1531, 31, 4, '2023-12-09 16:37:24', 1, 0),
(1532, 31, 3, '2023-12-09 16:37:24', 1, 0),
(1533, 31, 2, '2023-12-09 16:37:24', 1, 0),
(1534, 32, 3, '2023-12-09 16:37:24', 1, 0),
(1535, 32, 2, '2023-12-09 16:37:24', 1, 0),
(1536, 32, 4, '2023-12-09 16:37:24', 1, 0),
(1537, 33, 4, '2023-12-09 16:37:24', 1, 0),
(1538, 33, 3, '2023-12-09 16:37:24', 1, 0),
(1539, 33, 2, '2023-12-09 16:37:24', 1, 0),
(1540, 34, 2, '2023-12-09 16:37:24', 1, 0),
(1541, 34, 3, '2023-12-09 16:37:24', 1, 0),
(1542, 34, 4, '2023-12-09 16:37:24', 1, 0),
(1543, 35, 2, '2023-12-09 16:37:24', 1, 0),
(1544, 35, 3, '2023-12-09 16:37:24', 1, 0),
(1545, 35, 4, '2023-12-09 16:37:24', 1, 0),
(1546, 36, 4, '2023-12-09 16:37:24', 1, 0),
(1547, 36, 2, '2023-12-09 16:37:24', 1, 0),
(1548, 36, 3, '2023-12-09 16:37:24', 1, 0),
(1549, 37, 2, '2023-12-09 16:37:24', 1, 0),
(1550, 37, 3, '2023-12-09 16:37:24', 1, 0),
(1551, 37, 4, '2023-12-09 16:37:24', 1, 0),
(1552, 38, 3, '2023-12-09 16:37:24', 1, 0),
(1553, 38, 2, '2023-12-09 16:37:24', 1, 0),
(1554, 38, 4, '2023-12-09 16:37:24', 1, 0),
(1555, 39, 2, '2023-12-09 16:37:24', 1, 0),
(1556, 39, 3, '2023-12-09 16:37:24', 1, 0),
(1557, 39, 4, '2023-12-09 16:37:24', 1, 0),
(1558, 40, 4, '2023-12-09 16:37:24', 1, 0),
(1559, 40, 2, '2023-12-09 16:37:24', 1, 0),
(1560, 40, 3, '2023-12-09 16:37:24', 1, 0),
(1561, 41, 4, '2023-12-09 16:37:24', 1, 0),
(1562, 41, 2, '2023-12-09 16:37:24', 1, 0),
(1563, 41, 3, '2023-12-09 16:37:24', 1, 0),
(1564, 42, 4, '2023-12-09 16:37:24', 1, 0),
(1565, 42, 3, '2023-12-09 16:37:24', 1, 0),
(1566, 42, 2, '2023-12-09 16:37:24', 1, 0),
(1567, 43, 2, '2023-12-09 16:37:24', 1, 0),
(1568, 43, 4, '2023-12-09 16:37:24', 1, 0),
(1569, 43, 3, '2023-12-09 16:37:24', 1, 0),
(1570, 44, 3, '2023-12-09 16:37:24', 1, 0),
(1571, 44, 2, '2023-12-09 16:37:24', 1, 0),
(1572, 44, 4, '2023-12-09 16:37:24', 1, 0),
(1573, 45, 2, '2023-12-09 16:37:24', 1, 0),
(1574, 45, 3, '2023-12-09 16:37:24', 1, 0),
(1575, 45, 4, '2023-12-09 16:37:24', 1, 0),
(1576, 46, 4, '2023-12-09 16:37:24', 1, 0),
(1577, 46, 3, '2023-12-09 16:37:24', 1, 0),
(1578, 46, 2, '2023-12-09 16:37:24', 1, 0),
(1579, 47, 4, '2023-12-09 16:37:24', 1, 0),
(1580, 47, 2, '2023-12-09 16:37:24', 1, 0),
(1581, 47, 3, '2023-12-09 16:37:24', 1, 0),
(1582, 48, 2, '2023-12-09 16:37:24', 1, 0),
(1583, 48, 4, '2023-12-09 16:37:24', 1, 0),
(1584, 48, 3, '2023-12-09 16:37:24', 1, 0),
(1585, 49, 4, '2023-12-09 16:37:24', 1, 0),
(1586, 49, 3, '2023-12-09 16:37:24', 1, 0),
(1587, 49, 2, '2023-12-09 16:37:24', 1, 0),
(1588, 50, 2, '2023-12-09 16:37:24', 1, 0),
(1589, 50, 3, '2023-12-09 16:37:24', 1, 0),
(1590, 50, 4, '2023-12-09 16:37:24', 1, 0),
(1591, 51, 4, '2023-12-09 16:37:24', 1, 0),
(1592, 51, 3, '2023-12-09 16:37:24', 1, 0),
(1593, 51, 2, '2023-12-09 16:37:24', 1, 0),
(1594, 52, 2, '2023-12-09 16:37:24', 1, 0),
(1595, 52, 3, '2023-12-09 16:37:24', 1, 0),
(1596, 52, 4, '2023-12-09 16:37:24', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, '39'),
(2, '40'),
(3, '41'),
(4, '42'),
(5, '43'),
(6, '48'),
(7, '50'),
(8, '52'),
(9, '54'),
(10, '56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status_bill`
--

CREATE TABLE `status_bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `status_bill`
--

INSERT INTO `status_bill` (`id`, `name`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đang giao hàng'),
(3, 'Đã nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT 0,
  `image_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `image_user`) VALUES
(1, 'admin', '123456', 'admin@gmail.com', 1, ''),
(2, 'sbn', '23062004', 'sbn@gmail.com', 0, ''),
(3, 'adminPPC', '123456', 'adminppc@gmail.com', 1, 'img_user.jpg\r\n'),
(5, 'HUy PhUc', '12345', 'a@gmail.com', 0, ''),
(6, 'HUu PhU', '1234554321a', 'aaaaaa@gmail', 0, 'img_user.jpg'),
(10, 'Ng COng', '1234554321a', 'a@gmail.com', 0, ''),
(11, 'database_login', '1', 'a@gmail.com', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Chỉ mục cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_size` (`id_size`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status_bill`
--
ALTER TABLE `status_bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1597;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `status_bill`
--
ALTER TABLE `status_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_attributes_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

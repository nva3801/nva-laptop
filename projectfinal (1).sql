-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2022 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectfinal`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) DEFAULT NULL,
  `received` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `name`, `phoneNumber`, `email`, `address`, `total`, `received`, `created_at`, `updated_at`) VALUES
(1, 1, 'An', '0966093801', 'nva030801@gmail.com', 'HN', 73898000, 0, '2022-04-19 07:16:04', '2022-04-19 07:16:04'),
(2, 5, 'Admin', '0966093801', 'admin@gmail.com', 'BN', 317664000, 0, '2022-04-23 08:33:03', '2022-04-23 08:33:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 73898000, 73898000, '2022-04-19 07:16:04', '2022-04-19 07:16:04'),
(2, 2, 1, 3, 73898000, 221694000, '2022-04-23 08:33:03', '2022-04-23 08:33:03'),
(3, 2, 3, 3, 31990000, 95970000, '2022-04-23 08:33:03', '2022-04-23 08:33:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gigabyte', 'gigabyte', 'category/N4AV2nIc1PcMxCQXLn0QzcfGFjqwgeml2xW8VqiT.webp', 'Yes', '2022-04-16 01:08:54', '2022-04-16 01:08:54'),
(2, 'Asus', 'asus', 'category/3kePDw2Nd9ub3BPS1HwOZn5zp7W1vgxidc6SqNGd.webp', 'Yes', '2022-04-16 01:11:36', '2022-04-16 01:11:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_details`
--

CREATE TABLE `category_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_details`
--

INSERT INTO `category_details` (`id`, `name`, `slug`, `category_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AERO', 'aero', 1, 'category_detail/DFSfCUmdan5qhVNTsefLeFUPCrZj8lzIupecm1QQ.webp', 'Yes', '2022-04-16 02:30:04', '2022-04-16 02:30:04'),
(2, 'Aorus', 'aorus', 1, 'category_detail/wQ9DJBiBjuc64PhMFBV0dyxbSHbaLV5XoeBGqrRF.webp', 'Yes', '2022-04-16 02:34:16', '2022-04-16 02:34:16'),
(3, 'Gigabyte', 'gigabyte', 1, 'category_detail/uXOMYWH348Hanf3Ivd25sdtoKKwBH2Edi1LEcaOO.webp', 'Yes', '2022-04-16 02:34:22', '2022-04-16 02:34:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sự khác biệt giữa chromebook và máy tính xách tay là gì？', 'Máy tính xách tay thường chạy hệ điều hành Windows trong khi chromebook chạy hệ điều hành Chrome. Chromebook có xu hướng có các thông số kỹ thuật cơ bản, điều này làm cho nó có giá cả phải chăng và hoàn hảo cho các tác vụ xử lý văn bản. Nếu bạn muốn nó xử lý các tác vụ đòi hỏi hiệu suất cao hơn như chơi game hoặc chỉnh sửa video, thiết kế đồ họa ... vv, máy tính xách tay là lựa chọn tốt hơn trong khi chromebook sẽ không đủ.', 'Yes', '2022-04-16 08:10:30', '2022-04-16 08:10:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_16_080104_create_categories_table', 2),
(6, '2022_04_16_092200_create_category_details_table', 3),
(7, '2022_04_16_145947_create_f_a_q_s_table', 4),
(8, '2022_04_17_150209_create_products_table', 5),
(9, '2022_04_19_140616_create_bills_table', 6),
(10, '2022_04_19_140808_create_bill_details_table', 6),
(11, '2022_04_20_093748_create_news_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `user_id`, `like`, `status`, `created_at`, `updated_at`) VALUES
(1, '6 điều cần suy nghĩ trước khi mua máy tính xách tay chơi game của bạn', '<p>Khi chúng ta nói về máy tính xách tay chơi game, chúng không được tạo ra và nhắm mục tiêu cho mọi người tiêu dùng.&nbsp;Nhìn chung, tất cả các sản phẩm này đều có màn hình, hiệu suất, cũng như các khía cạnh kỹ thuật cao, hiện tại so với máy tính xách tay tiêu chuẩn.&nbsp;Chúng hướng đến những người đang tìm kiếm thứ gì đó di động mang lại cho họ hiệu suất cần thiết cho tất cả các nhu cầu chơi game của họ.</p><p>Hơn nữa, những sản phẩm này là lựa chọn thay thế tuyệt vời cho PC chơi game, và hoàn hảo nếu bạn là người thích chơi game đang di chuyển.&nbsp;Họ đóng gói các thông số kỹ thuật tương tự như những người anh em máy tính để bàn lớn hơn của họ bằng cách bao gồm các thông số kỹ thuật cao cấp trong khi vẫn giữ mọi thứ nhỏ gọn.</p><p>Vì vậy, nếu bạn đang tìm kiếm một máy tính xách tay chơi game tối ưu cho tất cả các trò chơi trên PC của mình, thì đây là một số điều bạn cần cân nhắc trước khi mua.</p><h2><strong>Bạn Thường Chơi Loại Trò Chơi Nào?</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/AORUS%2015.jpg\" alt=\"\"></p><p>Vì vậy, bạn đang muốn mua một chiếc máy tính xách tay chơi game, nhưng trước khi bỏ tiền ra mua, điều quan trọng là bạn phải suy nghĩ về những trò chơi mà bạn thực sự muốn chơi.</p><p>Tại sao?&nbsp;Bởi vì&nbsp;các trò chơi bạn muốn chơi sẽ giúp xác định các thông số kỹ thuật của máy tính xách tay chơi game mà bạn muốn tìm kiếm.</p><p>Các trò chơi RTS (Chiến lược thời gian thực) thường yêu cầu sức mạnh tính toán thấp hơn so với các trò chơi khác.&nbsp;Nếu bạn là người chủ yếu chơi các trò chơi RTS, bạn có thể tiết kiệm cho mình một vài đô la bằng cách không cần phải mua một chiếc máy tính xách tay lớn nhất, xấu nhất hiện có.</p><p>Nếu bạn đang lên kế hoạch chơi những tựa game triple-A mới nhất như&nbsp;<i>Assassin\'s Creed</i> ,&nbsp;<i>Cyberpunk 2077</i> hoặc&nbsp;<i>Watch Dogs</i> , chắc chắn bạn sẽ phải nghĩ đến sức mạnh ... một lượng lớn.&nbsp;Đây là nơi bạn sẽ cần xem xét một máy tính xách tay chơi game có card đồ họa thế hệ mới nhất, CPU mạnh mẽ và một lượng RAM tốt.</p><p>Nếu bạn là người chủ yếu tập trung vào các game bắn súng cạnh tranh như Counterstrike, tốt nhất bạn nên tập trung vào một cạc đồ họa tầm trung khá và đảm bảo rằng bạn chọn một máy tính xách tay có màn hình tốc độ làm mới cao.</p><p>Máy tính xách tay chơi game mà bạn đang để mắt đến phải xử lý được các tựa game bạn muốn mua và chơi.&nbsp;Chỉ chi tiêu những gì bạn cần nhưng đảm bảo rằng nó làm mọi thứ bạn cần.</p><h2><strong>Tìm kiếm gì ở một màn hình máy tính xách tay tốt</strong></h2><p>Nói chung, kích thước, tốc độ làm mới và độ phân giải ảnh hưởng đến trải nghiệm chơi game của mọi người.&nbsp;Vì vậy, bạn phải chắc chắn rằng bạn chọn một máy tính xách tay chơi game có màn hình chất lượng.</p><h2><strong>Màn hình của màn hình</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/AORUS%2015P.jpg\" alt=\"\"></p><p>Mọi người thường bỏ qua phần này.&nbsp;Tuy nhiên, hãy lưu ý rằng màn hình được sử dụng cho máy tính xách tay cũng quan trọng như phần cứng bên trong.</p><p>Khi lựa chọn, điều quan trọng là bạn phải xem xét kích thước của màn hình.&nbsp;Hầu hết các máy tính xách tay chơi game đều có màn hình 15 \"và 17\".&nbsp;Có một số máy tính xách tay cung cấp kích thước màn hình lớn hơn và thậm chí nhỏ hơn, nhưng phổ biến nhất là 15 ”và 17”.</p><p>Nói chung, nếu bạn có thể chọn một máy tính xách tay chơi game có kích thước màn hình lớn hơn thì hãy chọn nó.&nbsp;Chơi game trên màn hình lớn hơn thường mang lại cho bạn trải nghiệm chơi game toàn diện tốt hơn, nhưng điều đó cũng phải trả giá đắt.</p><p>Thứ nhất, có một màn hình lớn hơn thường sẽ có nghĩa là giá sẽ cao hơn.&nbsp;Thứ hai, có một màn hình lớn hơn sẽ yêu cầu phần cứng thông số kỹ thuật cao hơn để có thể cung cấp năng lượng cho nó.&nbsp;Cuối cùng, màn hình lớn hơn sẽ làm tăng kích thước và trọng lượng tổng thể của máy tính xách tay, điều này có thể là một vấn đề tùy thuộc vào trường hợp sử dụng cụ thể của bạn.</p><h2><strong>Độ phân giải</strong></h2><p>Tránh các màn hình có độ phân giải thấp hơn độ phân giải 1920 × 1080.&nbsp;Máy tính xách tay bị giảm độ phân giải là rất hiếm, nhưng nếu có một chiếc trong cửa hàng mà bạn đang mua, hãy quên nó đi.&nbsp;Chơi game 1080p là độ phân giải hoàn hảo để chơi game đối với hầu hết mọi người vì nó cung cấp chất lượng hình ảnh tuyệt vời nhưng phần cứng cũng dễ chạy hơn.</p><p>Màn hình 3840 × 2160 hoặc 4K là thứ cần xem xét cho máy tính xách tay chơi game của bạn nếu bạn có số tiền bỏ ra.&nbsp;Điều này sẽ mang lại cho bạn trải nghiệm hình ảnh tổng thể tốt nhất, nhưng hãy nhớ rằng bạn sẽ cần một số phần cứng mạnh mẽ để chơi game trên màn hình ở độ phân giải này.</p><h2><strong>Tốc độ làm mới</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/AORUS%2015%2B17.jpg\" alt=\"\"></p><p>Những gì bạn thường thấy là màn hình hỗ trợ độ phân giải 1080p cùng với màn hình 60Hz.&nbsp;Đối với hầu hết các game thủ ngoài kia, những thông số kỹ thuật đó là đủ, nhưng nếu bạn có thể sử dụng tốc độ làm mới cao hơn thì hãy làm như vậy.</p><p>Hãy thử và hướng đến một máy tính xách tay chơi game hỗ trợ tốc độ làm mới ít nhất là 144Hz , tốc độ này đang bắt đầu trở thành tiêu chuẩn của các game thủ.&nbsp;Tốc độ làm mới của màn hình càng cao, thì số lần hình ảnh có thể cập nhật mỗi giây càng nhiều.&nbsp;Điều này dẫn đến hình ảnh hiển thị mượt mà hơn.&nbsp;Tóm lại, bạn có thể nhận được tốc độ làm mới càng nhanh thì hình ảnh càng đẹp.</p><p>Lợi ích bổ sung khác của tốc độ làm mới cao hơn là tốc độ làm mới cao hơn thường dẫn đến thời gian phản hồi thấp hơn.&nbsp;Điều này có nghĩa là độ trễ đầu vào trong trò chơi sẽ ít hơn nhiều, do đó, khi bạn nhấn nút lửa trong CS: GO, hành động sẽ được hiển thị ngay lập tức trên màn hình của bạn.</p><p>Nói một cách đơn giản, tốc độ làm tươi càng cao càng tốt.&nbsp;Một cái gì đó giống như&nbsp;<a href=\"https://www.gigabyte.com/Laptop/AORUS-15P--RTX-30-Series#kf\">AORUS 15P</a>máy tính xách tay chơi game hỗ trợ tốc độ làm mới 240Hz sẽ giúp mang lại cho bạn trải nghiệm hình ảnh chơi game tốt nhất có thể.</p><h2><strong>Bạn cần loại GPU nào?</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/what%20gpu.jpg\" alt=\"\"></p><p>Một trong những thành phần quan trọng nhất đối với bất kỳ thiết bị chơi game nào là card đồ họa.&nbsp;Điều này đặc biệt đúng đối với máy tính xách tay chơi game.&nbsp;Một GPU mạnh mẽ, chất lượng cho một máy tính xách tay chơi game là rất quan trọng.&nbsp;Nếu không có nó, bạn sẽ không thể tạo ra khung hình trên giây cần thiết để có thể thoải mái chơi trò chơi của mình.</p><p>Nếu có thể, bạn muốn tìm kiếm một máy tính xách tay chơi game có GPU thế hệ mới nhất như dòng RTX của Nvidia hoặc các thẻ thế hệ trước như dòng GTX.</p><p>Nếu bạn là một người hâm mộ AMD, có những lựa chọn như dòng Radeon RX 5000-M của họ.</p><p>Nếu bạn không yêu cầu phần cứng tốt nhất hiện có và bạn sẵn lòng thỏa hiệp về chất lượng đồ họa một chút cho một số trò chơi mới nhất, bạn nên chọn thứ gì đó như RX 5500-M hoặc GTX 1650. Bạn sẽ có thể chơi hầu hết các trò chơi hiện tại trên cài đặt đồ họa trung bình.</p><p>Đối với chơi game ở mức trung bình, một chiếc card tốt cho nhu cầu chơi game của bạn là GeForce RTX 2060. Với điều này, bạn sẽ có thể thưởng thức hầu hết các trò chơi với cài đặt đồ họa của bạn được đặt ở mức cao.</p><p>Nếu bạn là người muốn chơi các trò chơi mới nhất hiện có và không phải thỏa hiệp về chất lượng đồ họa, bạn sẽ xem xét loạt thẻ RTX mới nhất.&nbsp;Một cái gì đó như GPU RTX 3070 hoặc RTX 3080 sẽ cho phép bạn chơi hầu hết các trò chơi ở cài đặt tối đa mà không phải đổ mồ hôi.</p><h2><strong>Tôi nên cân nhắc những thông số kỹ thuật phần cứng nào khi chọn một máy tính xách tay chơi game?</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/ZrMNuElQ.jpg\" alt=\"\"></p><p>Không phải lúc nào bạn cũng có thể nâng cấp một máy tính xách tay hiện có với phần cứng mới, vì vậy hãy suy nghĩ trước.&nbsp;Xem xét cách bạn sẽ sử dụng hệ thống của mình và những trò chơi bạn sẽ chơi.&nbsp;Một bước tuyệt vời trong việc chọn máy tính xách tay chơi game là ưu tiên các tính năng cần thiết.</p><p>Dưới đây là các thông số kỹ thuật phần cứng bổ sung mà bạn nên xem xét trước khi mua máy tính xách tay:</p><h2><strong>CPU</strong></h2><p>Một bộ xử lý vững chắc là thứ bạn sẽ cần để chơi game.&nbsp;Với điều đó, bạn có thể đảm bảo rằng bạn có đủ sức mạnh xử lý để CPU của mình mang lại hiệu suất tốt nhất.&nbsp;Đối với hầu hết các trò chơi hiện nay, tất cả các bộ vi xử lý Intel trên Intel i5 đều tốt,&nbsp;nhưng Intel i7 rất được khuyến khích nếu bạn muốn khai thác tối đa sức mạnh của nó.</p><h2><strong>RAM</strong></h2><p>Mặc dù RAM không ảnh hưởng trực tiếp đến FPS, nhưng tốc độ của nó có thể ảnh hưởng hoặc phá vỡ trải nghiệm chơi game của bạn.&nbsp;Vì vậy, hãy chọn một máy tính xách tay chơi game có RAM tối thiểu 16GB.&nbsp;Để có hiệu suất tốt hơn và một chút khả năng chống chọi trong tương lai, hãy mua một chiếc có RAM 32 GB.</p><h2><strong>Bộ nhớ (NVMe và SSD)</strong></h2><p>Khi nói đến ổ đĩa phân mảnh máy tính xách tay, bạn chỉ nên thực sự xem xét SSD.&nbsp;Để có được hiệu suất tốt nhất, bạn muốn bao gồm một ổ NVMe chẳng hạn như<a href=\"https://www.gigabyte.com/Solid-State-Drive/AORUS-Gen4-SSD-1TB#kf\">AORUS Gen4 SSD 1TB NVMe</a>làm ổ đĩa chính của bạn vì điều này sẽ làm tăng đáng kể hiệu suất của hệ điều hành máy tính xách tay.</p><p>Bằng cách sử dụng SSD cho các trò chơi của mình, bạn sẽ thấy hiệu suất chơi game được cải thiện.&nbsp;Điều này đặc biệt đáng chú ý khi tải trò chơi, di chuyển giữa các khu vực trên bản đồ và màn hình tải trò chơi.</p><p>SSD dễ dàng vượt qua các ổ cứng cũ hơn trong hầu hết các lĩnh vực khi nói đến chơi game.</p><h2><strong>Cần thêm sức mạnh GPU?&nbsp;Xem xét một GPU bên ngoài</strong></h2><p><img src=\"https://global.aorus.com/upload/Admin/images/AORUS%20RTX%203080%20Gaming%20Box.jpg\" alt=\"\"></p><p>GPU bên ngoài, chẳng hạn như<a href=\"https://www.gigabyte.com/Graphics-Card/GV-N3080IXEB-10GD#kf\">HỘP TRÒ CHƠI AORUS RTX 3080</a>, có thể giúp cung cấp đồ họa chất lượng cho máy tính để bàn.&nbsp;Bạn có thể đã có một máy tính xách tay chơi game có các thành phần hoàn toàn chấp nhận được trong đó nhưng card đồ họa đang khiến bạn thất vọng.&nbsp;GPU bên ngoài có thể chứng minh là một giải pháp hoàn hảo cho bạn mà không yêu cầu bạn phải mua một máy tính xách tay chơi game hoàn toàn mới.</p><p>Các GPU bên ngoài cắm vào máy tính xách tay của bạn và tăng tốc hiệu suất đồ họa bằng cách xử lý tất cả các quá trình xử lý đồ họa thay vì sử dụng cạc đồ họa bên trong của bạn.</p><p>Nếu bạn quan tâm đến việc sử dụng một card đồ họa bên ngoài, điều quan trọng là phải kiểm tra xem máy tính xách tay của bạn có tương thích với nó hay không.</p><h2><strong>Xác định ngân sách của bạn và bám sát nó khi có thể</strong></h2><p>Vào cuối ngày, việc săn lùng mua máy tính xách tay chơi game của bạn dựa trên số tiền bạn sẵn sàng trả.&nbsp;Điều tốt là có rất nhiều lựa chọn có sẵn, giúp bạn dễ dàng đạt được ngân sách.</p><p>Xác định số tiền bạn sẵn sàng chi tiêu và cố gắng hết sức để bám vào ngân sách đó.&nbsp;Nếu bạn đảm bảo thực hiện nghiên cứu của mình trước khi mua, bạn thường sẽ tìm thấy một tùy chọn cung cấp cho bạn những gì bạn đang tìm kiếm với mức giá mà bạn sẵn sàng bỏ ra.</p><p>Nếu có thể, hãy tìm một máy tính xách tay chơi game có thể nâng cấp.&nbsp;Điều này sẽ cho phép bạn nâng cấp một số phần cứng vào một ngày sau đó, điều này có thể giúp giảm chi phí mua ban đầu.</p><p>Biết ngân sách cho một máy tính xách tay chơi game trong khi lựa chọn các thông số kỹ thuật tốt nhất là rất quan trọng.&nbsp;Bằng cách này, bạn có thể tận dụng tối đa số tiền của mình mà vẫn đảm bảo bạn có trải nghiệm chơi game tuyệt vời.</p><p><img src=\"https://global.aorus.com/upload/Admin/images/q0DJXV6Q.jpg\" alt=\"\"></p>', 'news/ZO5kJwfb1VQz6fzBWcsDBzgKaBM0Y9FMcbxqOi5Q.jpg', '1', 1, 'Yes', '2022-04-20 08:45:59', '2022-04-20 08:45:59'),
(2, '5 điều cần biết trước khi chọn máy tính xách tay của người sáng tạo', '<h2><strong>Máy tính xách tay của Người sáng tạo là gì?</strong></h2><p>“ Máy tính xách tay của&nbsp;<strong>Người sáng tạo</strong> ” là máy tính xách tay được thiết kế chủ yếu để phục vụ các tác vụ sáng tạo nội dung nặng.&nbsp;Với sự phổ biến của điện thoại thông minh và các dịch vụ phát video trực tuyến, nhu cầu về nội dung chất lượng cao cũng ngày càng trở nên mạnh mẽ hơn.&nbsp;Trong những năm gần đây, ngày càng có nhiều người dành sức cho việc sáng tạo nội dung ở cấp độ cá nhân và chuyên nghiệp.&nbsp;Tuy nhiên, khi đối mặt với yêu cầu của các tác vụ sáng tạo nội dung chất lượng cao, máy tính xách tay thông thường đơn giản là không thể phù hợp với nhu cầu của những người sáng tạo này, do đó, danh mục máy tính xách tay sáng tạo đã được giới thiệu, hứa hẹn hiệu quả tổng thể tốt hơn cho nhu cầu của họ.</p><h2><strong>Bạn sẽ cần một máy tính xách tay của người sáng tạo?</strong></h2><p>Nếu bạn đang làm công việc sáng tạo nội dung, thì bạn chắc chắn sẽ cần một máy tính xách tay xử lý các quy trình công việc đa phương tiện như chỉnh sửa video / âm thanh, kết xuất 3D, thiết kế đồ họa, thiết kế CG hoặc phát triển trò chơi.&nbsp;Những chiếc máy tính xách tay sáng tạo này không chỉ sở hữu hiệu suất mạnh mẽ hơn mà còn bao gồm nhiều tính năng khác nhau có thể nâng cao hiệu quả quy trình làm việc của bạn.&nbsp;</p><h2><strong>Hiệu suất: Cốt lõi của Máy tính xách tay của Người sáng tạo</strong></h2><p>Phần mềm được người sáng tạo sử dụng để tạo nội dung thường yêu cầu hiệu suất tính toán cao hơn.&nbsp;Hiệu suất kém của máy tính xách tay hoặc hệ thống thông thường của bạn có thể dẫn đến hiệu quả thấp hơn hoặc thậm chí hệ thống bị treo.&nbsp;Đó là lý do tại sao&nbsp;<strong>hiệu suất cao và ổn định là yêu cầu tối thiểu đối với một máy tính xách tay của người sáng tạo</strong> .&nbsp;Hiệu năng cao đến từ CPU và GPU, vì vậy khi chọn mua máy tính xách tay nào, bạn nên chọn mẫu có CPU Intel Core i7 dòng H và GPU NVIDIA GTX / RTX.</p><p>CPU i7 dòng H hoạt động tốt hơn 15 ~ 20% so với i7 dòng U và có nhiều lõi xử lý hơn, điều này rất quan trọng đối với những ứng dụng nhạy cảm về số lõi như Adobe Premiere Pro.&nbsp;Liên quan đến GPU GTX / RTX, NVIDIA đang phát hành các trình điều khiển đồ họa mới có thể nâng cao hiệu quả của máy tính xách tay của bạn trong khi chạy phần mềm dựa trên GPU.&nbsp;Nếu bạn cần hiệu suất mạnh hơn từ GPU của mình cho quy mô lớn hơn hoặc kết xuất 3D phức tạp hơn, thì có thể xem xét GPU cao cấp hơn như RTX 3080 Ti hoặc RTX 3070 Ti.&nbsp;</p><p><strong>Thiết kế nhiệt: Đảm bảo hiệu suất</strong></p><p>Để đảm bảo không bị giảm hiệu suất khi sử dụng CPU &amp; GPU trong thời gian dài, thiết kế tản nhiệt trên máy tính xách tay của người sáng tạo là chìa khóa.&nbsp;Thiết kế tản nhiệt kém có thể dẫn đến việc điều tiết CPU / GPU, làm giảm hiệu suất và tăng khả năng hệ thống gặp sự cố - một thảm họa đối với bất kỳ người sáng tạo nội dung nào.&nbsp;Vì vậy, khi chọn một máy tính xách tay dành cho người sáng tạo, bạn nên chọn một mẫu có nhiều&nbsp;<strong>ống dẫn nhiệt</strong> ,&nbsp;<strong>quạt hệ thống kép</strong> và&nbsp;<strong>nhiều lỗ thông khí</strong> .&nbsp;Càng sử dụng nhiều ống dẫn nhiệt trong hệ thống tản nhiệt, thì CPU và GPU càng có thể tản nhiệt nhiều hơn thông qua quạt kép, luồng không khí nóng hơn có thể được thổi ra khỏi khung máy.</p><p>Bên cạnh CPU và GPU, RAM và bộ nhớ cũng rất quan trọng đối với hiệu suất tổng thể.&nbsp;Hầu hết các phần mềm tạo sẽ tiêu tốn một lượng lớn RAM trong khi chạy, vì vậy bạn nên chọn máy tính xách tay dành cho người sáng tạo có ít nhất 16GB RAM.&nbsp;Đối với lưu trữ, một mô hình có SSD được đề xuất vì so với HDD, SSD có tốc độ truy xuất nhanh hơn nhiều và có thể giảm đáng kể thời gian cần thiết để xử lý các tệp xuất đó.&nbsp;Cuối cùng, bạn nên chọn máy tính xách tay sáng tạo có ít nhất hai khe cắm M.2 cho phép nâng cấp SSD trong tương lai.</p><h2><strong>Hiển thị: Chìa khóa của sự sáng tạo chính xác</strong></h2><p>Có&nbsp;<strong>ba yếu tố chính</strong> của màn hình:&nbsp;<strong>độ chính xác của màu sắc, gam màu và độ phân giải</strong> .&nbsp;Trong số những yếu tố này, độ chính xác của màu sắc đóng một vai trò quan trọng;&nbsp;Nếu màu sắc hiển thị trên màn hình không đủ chính xác, nó có thể mang lại một số rắc rối nghiêm trọng cho người sáng tạo, vì vậy, bạn nên chọn màn hình được hiệu chỉnh trước để hứa hẹn mang lại màu sắc chính xác nhất.&nbsp;Đối với gam màu, tốt hơn nên chọn kiểu máy có gam màu rộng hơn như AdobeRGB 100% hoặc DCI-P3 100% để có nhiều tùy chọn màu hơn trong khi tạo.&nbsp;Đối với độ phân giải, chọn mô hình có ít nhất 4K sẽ là đặt cược an toàn hơn vì sự phổ biến ngày càng tăng của nội dung có độ phân giải cao như phim 4K hoặc thậm chí 5K.</p><h2><strong>Kết nối: Làm cho việc tạo dễ dàng</strong></h2><p>Kết nối thường bị bỏ qua trên máy tính xách tay.&nbsp;Tuy nhiên, điều này cực kỳ quan trọng đối với máy tính xách tay của người sáng tạo vì trong khi tạo, người sáng tạo thường sẽ gắn một loạt thiết bị như màn hình ngoài, ổ SSD hoặc đế cắm thẻ đồ họa bên ngoài.&nbsp;Khả năng kết nối hạn chế sẽ không chỉ dẫn đến sự kém hiệu quả mà còn dẫn đến chi phí bổ sung cho các bộ điều hợp.&nbsp;Vì vậy, bạn nên chọn một mô hình có các kết nối đa năng như&nbsp;<strong>HDMI 2.0</strong> ,&nbsp;<strong>DP 1.4</strong> ,&nbsp;<strong>RJ-45</strong> hoặc&nbsp;<strong>Thunderbolt 4</strong> .&nbsp;Đầu&nbsp;<strong>đọc thẻ SD</strong> có khả năng UHS-II sẽ được ưu tiên sử dụng để chụp ảnh hoặc quay video chất lượng cao.</p><p><img src=\"https://global.aorus.com/upload/Admin/images/2021_1209_gigabyte_1169%20(1).jpg\" alt=\"\"></p><h2><strong>Tính di động: Lý do cho một máy tính xách tay</strong></h2><p>Những điều được đề cập ở trên là khá quan trọng đối với một máy tính xách tay của người sáng tạo.&nbsp;Tuy nhiên, một lý do quan trọng để người sáng tạo chọn máy tính xách tay thay vì máy tính để bàn là&nbsp;<strong>tính di động hoặc tính di động</strong> .&nbsp;Tính di động tuyệt vời đến từ việc máy tính xách tay có trọng lượng nhẹ hơn và thời lượng pin dài hơn.&nbsp;Trọng lượng nhẹ hơn có nghĩa là sẽ dễ dàng mang theo máy tính xách tay hơn và thời lượng pin dài hơn có thể cắt giảm nhu cầu tìm kiếm ổ cắm điện hoặc thậm chí mang bộ đổi nguồn ra ngoài.</p><p>Vì vậy, bạn nên chọn một chiếc máy tính xách tay dành cho người sáng tạo nặng khoảng 2kg và có thời lượng pin&nbsp;<strong>không ngắn hơn 7 giờ</strong> .&nbsp;<strong>2kg có vẻ không khá nhẹ</strong> , nhưng đừng quên rằng đó là một máy tính xách tay hiệu suất cao - sẽ cần nhiều bộ phận hoặc vật liệu hơn để xử lý nhiệt từ CPU hoặc GPU.&nbsp;Thời lượng pin 7 giờ cũng giống như vậy - CPU và GPU càng mạnh thì càng tiêu thụ nhiều năng lượng hơn, vì vậy điều quan trọng là phải đạt được sự cân bằng giữa tuổi thọ pin và hiệu suất.</p><h2><strong>Máy tính xách tay GIGABYTE AERO: Máy tính xách tay sáng tạo hoàn hảo</strong></h2><p>Bây giờ chúng ta biết rằng hiệu suất,&nbsp;<strong>màn hình hiển thị</strong> ,&nbsp;<strong>kết nối</strong> và&nbsp;<strong>tính di động</strong> là những tính năng chính của một máy tính xách tay sáng tạo tuyệt vời, vậy làm thế nào để chọn cái tốt nhất?&nbsp;Máy tính xách tay dòng AERO của GIGABYTE đã được mọi người đánh giá là một trong những dòng máy tính xách tay sáng tạo hoàn hảo.&nbsp;Dòng AERO được giới thiệu vào năm 2017 và kể từ khi tung ra thị trường, nó đã nhận được sự hoan nghênh rộng rãi nhờ hiệu suất mạnh mẽ, màn hình hiệu chỉnh độc quyền trên mỗi đơn vị và khả năng kết nối linh hoạt.</p><p>Các mẫu máy tính xách tay dòng AERO mới nhất, AERO 16 &amp; AERO 17, có GPU NVIDIA RTX 30 mới nhất, hứa hẹn mang lại hiệu suất đồ họa cao hơn cho kết xuất 3D hoặc bất kỳ ứng dụng nào có thể được tăng tốc bằng GPU.&nbsp;Để đối phó với nhiệt từ GPU mới, toàn bộ dòng máy tính xách tay AERO đều có nhiều ống dẫn nhiệt, quạt hệ thống kép và bốn lỗ thông khí, đảm bảo tất cả nhiệt tạo ra từ CPU và GPU có thể được tản ra khỏi khung máy.</p><p><img src=\"https://global.aorus.com/upload/Admin/images/2021_1209_gigabyte_0137%20(1).jpg\" alt=\"\"></p><p>Thứ khiến AERO 16 khác biệt với các máy tính xách tay khác là màn hình: nó vẫn là một trong số ít máy tính xách tay nhất có màn hình OLED và là máy tính xách tay OLED duy nhất đã được hiệu chỉnh từng đơn vị trước khi giao cho khách hàng.&nbsp;Điều này hứa hẹn Delta-E (&lt;1) tối ưu và tái tạo màu chính xác nhất trên màn hình.&nbsp;Khả năng kết nối linh hoạt là điểm nổi bật của toàn bộ máy tính xách tay dòng AERO: nó sở hữu hai cổng Thunderbolt 4 và AERO Hub đi kèm có thể cho phép người sáng tạo gắn các thiết bị HDMI, DP, RJ-45 hoặc USB Type-A.&nbsp;Tất cả các tính năng trên đã được đưa vào khung máy chỉ nặng 1,9 kg và có pin 99Wh, hứa hẹn cho thời lượng pin 7 giờ.&nbsp;Vì vậy, nếu bạn vẫn đang tìm kiếm một chiếc máy tính xách tay dành cho người sáng tạo, AERO chắc chắn là chiếc mà bạn nên đưa vào danh sách hàng đầu của mình.</p>', 'news/ei3rAMhAMBLB3CD4mYKrAgoYJhHfh6jbqu9k87as.jpg', '1', 0, 'Yes', '2022-04-20 08:58:39', '2022-04-20 08:58:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chipset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slotram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hard_disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `security` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webcam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wireless` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ports` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_new` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `image`, `description`, `trailer`, `manufacturer`, `partNumber`, `color`, `cpu`, `chipset`, `ram`, `slotram`, `maxram`, `vga`, `hard_disk`, `security`, `screen`, `webcam`, `audio`, `wireless`, `ports`, `battery`, `size`, `weight`, `operating_system`, `accessory`, `status`, `price_old`, `price_new`, `created_at`, `updated_at`) VALUES
(1, 'Laptop Gigabyte Gaming AERO 17 OLED', 'laptop-gigabyte-gaming-aero-17-oled', 1, 'product/j2fGkUCmhfZ1PXXYp74g2KiMe8AteN5Unor0xVbM.png', '<p>Gigabyte đã tạo một cú hít lớn khi lấn sân vào mảng laptop và nhanh chóng trở thành một đối thủ khiến nhiều ông lớn phải dè chừng. Hàng loạt các sản phẩm trải dài các phân khúc như Gaming, AORUS v.v. Nhưng nổi bật trong số đó là Gigabyte AERO 15 OLED với cấu hình vượt trội cùng với thiết kế quý phái sẽ đem lại cho bạn nhiều trải nghiệm mới mẻ</p><h3><strong>Thiết kế</strong></h3><p>Gigabyte AERO 15 OLED &nbsp;được chế tạo từ nhôm nguyên khối cùng với việc lấy màu đen cổ điển làm tông màu chủ đạo giúp máy giữ được nét thanh lịch nhưng không kém phần chắc chắn. Dù chiếc máy này được làm từ nhôm nguyên khối nhưng 15 OLED YD chỉ có khối lượng khoảng 2kg cực kì nhẹ nhàng, cơ động giúp việc mang máy đi xa không còn là vấn đề nữa.</p><p>Điểm thu hút người nhìn chính là logo của GIGABYTE, được đặt ở ngay giữa mặt lưng và khi mở máy logo sẽ tự động phát sáng đem lại sự sang trọng cho người sử dụng.</p><p>Đối với dân công nghệ thì nhu cầu làm việc liên tục trên chiếc laptop này là thường xuyên vì vậy GIGABYTE đã trang bị hệ thống làm mát tích hợp công nghệ WINFORCE với hai quạt tản nhiệt 71 cánh cùng với 5 ống nhiệt đem lại hiệu quá tản nhiệt cao hơn 30% so với các dòng máy khác.</p><p>Điểm cộng tiếp theo là camera của máy được trang bị ngay dưới màn hình, ngay bản lề của máy và bạn có thể tùy chỉnh đóng hay mở giúp tránh bị kẻ gian theo dõi</p><p><img src=\"https://hanoicomputercdn.com/media/lib/14-03-2022/llaptop_gigabyte_gaming_aero_15_2.png\" alt=\"Laptop Gigabyte Gaming AERO 15 OLED1\"></p><h3><strong>Cấu hình</strong></h3><p>Gigabyte AERO 15 OLED mang trên mình cấu hình một cấu hình không kiêng dè bất cứ ai với sự trang bị con chip thế hệ thứ 11 core i7-11800H với 8 nhân 16 luồng, xung nhịp tối đa lên đến 4.6GHz đem lại hiệu năng gần như hoàn hảo phá vỡ mọi giới hạn. Chưa dừng lại ở đó con chip này lại mang bộ nhớ đệm lên đến 24MB giúp cho các tác vụ đa nhiệm của máy được thực hiện một cách nhanh chóng, rút ngắn thời gian phản hồi và đem lại năng suất cao cho CPU.</p><p>Và đây cũng là một trong những nhân tố quan trọng mà nhiều bạn đang chờ mình nói tới đó chính là card đồ họa NVIDIA GeForce RTX 3060 6GB GDDR6, một sự kết hợp trên cả tuyệt vời khi chính card đồ họa mang trong mình công nghệ NVIDIA DLSS là công nghệ kết xuất đột phá nhờ sự hỗ trợ của trí tuệ nhân tạo (AI), giúp tăng tốc độ khung hình lên ít nhất 1,5 lần mà chất lượng hình ảnh không bị suy giảm nhờ sức mạnh của Nhân Tensor xử lý AI chuyên dụng trên GeForce RTX. Nhờ đó, khả năng nâng cao hiệu suất được tăng cường. Bạn có thể thiết lập các cài đặt và độ phân giải ở mức cao, cho trải nghiệm hình ảnh ấn tượng. &nbsp; &nbsp; &nbsp; &nbsp;</p><p>Điểm gây nổi bật với người dùng đó là ổ cứng lên đến 512GB M.2 SSD đem lại khả năng lưu trữ hoàn hảo cho các bạn thiết kế hay làm game cùng với đó là hai thanh RAM 16GB (2x8GB) DDR4-3200Mhz (tối đa 64GB) cho truyền tải ứng dụng dữ liệu ổn định, thao tác mượt mà, lưu trữ thông tin tốt hơn.</p><p><img src=\"https://hanoicomputercdn.com/media/lib/14-03-2022/llaptop_gigabyte_gaming_aero_15_3.png\" alt=\"Laptop Gigabyte Gaming AERO 15 OLED2\"></p><h3><strong>Màn hình</strong></h3><p>Khi đã được trang bị cấu hình khủng thì đương nhiên sẽ cần một chiếc màn hình khủng không kém để đáp ứng.Gigabyte AERO 15 OLED mang một chiếc màn hình có kích thước 15.6 inch, độ bao phủ màu 89% và độ sai lệch màu Delta E</p><p>Siêu phẩm này còn được tích hợp với công nghệ &nbsp;AMOLED của Samsung hiển thị hình ảnh chất lượng đặc biệt cao với khả năng tái tạo màu sắc cực kì cao nhờ thiết kế tự phát đem lại khả năng tiết kiệm điện năng vượt trội để kéo dài thời gian hoạt động của máy.</p><p><img src=\"https://hanoicomputercdn.com/media/lib/14-03-2022/llaptop_gigabyte_gaming_aero_15_5.png\" alt=\"Laptop Gigabyte Gaming AERO 15 OLED3\"></p><h3><strong>Bàn phím và touchpad</strong></h3><p>Bàn phím của Gigabyte AERO 15 OLED được trang bị hệ thống đèn LED nhiều setting khác nhau giúp người dùng &nbsp;thỏa sức bộc lộ cá tính của mình &nbsp;cùng với layout hợp lý, hành trình phím sâu, độ nãy tốt đem lại cảm giác đánh máy mượt mà cho người sử dụng.</p><p>Touchpad có diện tích rộng, bề mặt khá nhẵn, tốc độ di chuột khá nhanh nhạy, cảm biến đa điểm rất dễ sử dụng</p><p><img src=\"https://hanoicomputercdn.com/media/lib/14-03-2022/llaptop_gigabyte_gaming_aero_15_4.png\" alt=\"Laptop Gigabyte Gaming AERO 15 OLED4\"></p><p>&nbsp;</p><h3><strong>Cổng kết nối và thời lượng pin</strong></h3><p>Gigabyte AERO 15 OLED có đầy đủ các cổng kết nối đem lại sự tiện nghi cho người dùng cùng với hệ thống kết nối 802.11AX ( WIFI 6 ) và bluetooth v5.2 đem lại trải nghiệm mượt mà, nhanh chóng .</p><p>AERO 15 KD còn được trang bị pin lên đến 99Wh giúp người làm việc yên tâm sử dụng không lo sập nguồn.</p><p><img src=\"https://hanoicomputercdn.com/media/product/59695_laptop_gigabyte_gaming_aero_15_oled_kd_72s1623gh_den_2021_1.png\" alt=\"Laptop Gigabyte Gaming AERO 15 OLED 6\"></p>', NULL, 'Gigabyte', 'YD-73S1624GH', 'Đen; Vỏ nhôm', 'Intel i7 11800H (2.3Ghz, upto 4.6Ghz)', 'Intel HM570', '16GB DDR4 3200Mhz (8GB * 2)', '2', '64GB', 'NVIDIA® GeForce® RTX 3080 8G-GDDR6', '1TB PCIe NVMe SSD Gen 4 2x M.2 SSD slots (Type 2280, supports 1x NVMe PCIe Gen3 & SATA/ 1x NVMe PCIe Gen4)', 'GIGABYTE Fusion RGB Per-Key Backlit Keyboard; Firmware-based TPM, supports Intel® Platform Trust Technology (Intel® PTT)', '15.6\" Thin Bezel UHD 3840x2160 Samsung AMOLED Display (VESA DisplayHDR 400 True Black, 100% DCI-P3)       *X-Rite™ Color Calibrated & Pantone® Validated', 'HD', '2x 2 Watt Speaker, Dual-Array Microphone, DTS:X® Ultra', 'Intel® AX200 Wireless (802.11ax), Bluetooth® V5.2', '3x USB 3.2 Gen1 (Type-A), 1x Thunderbolt™ 4 (Type-C) (Optional), 1x HDMI 2.1, 1x mini DP 1.4, 1x 3.5mm Audio Combo Jack , 1x DC-in Jack, 1x RJ-45', 'Li Polymer 99Wh', '356(W) x 250(D) x 19.9(H) mm', '2.0kg', 'Win 10 Home', 'Cable + Sạc', 'Yes', '76898000', '73898000', '2022-04-17 08:26:11', '2022-04-17 08:26:11'),
(3, 'Laptop Gigabyte Gaming G7', 'laptop-gigabyte-gaming-g7', 3, 'product/nJMMBe18rj2FrHdKzdgy6u09x93WnxUg5nO2AVNu.png', '<p>Với vẻ ngoài có phần đơn giản, tinh gọn so với nhiều sản phẩm gaming khác; GIGABYTE Gaming G7 MD sẽ phù hợp với đối tượng học sinh, sinh viên hay bất kỳ ai với nhu cầu sử dụng đa dạng. Đi kèm với phần cứng mạnh mẽ và màn hình chất lượng cao, sản phẩm hứa hẹn sẽ đảm đương tốt không chỉ game, mà còn là nhiều tác vụ phức tạp khác liên quan đến hình ảnh, hình khối và hơn thế nữa.&nbsp;</p><h3><strong>Thiết kế đơn giản tối đa</strong></h3><p><br>Thay vì tỏ ra gai góc như nhiều sản phẩm gaming cùng phân khúc, GIGABYTE Gaming G7 MD lại có thiết kế hướng tới sự đơn giản, tinh gọn thể hiện qua nhiều chi tiết: Form dáng vuông vắn, lớp sơn matte black, nắp máy đơn giản và còn nhiều nữa. Điều này khiến G7 MD phù hợp với đa dạng nhu cầu và không gian sử dụng, qua đó dễ dàng tiếp cận ngay cả tới người dùng phổ thông.&nbsp;</p><p>Điểm nhấn của sản phẩm sẽ được GIGABYTE sắp xếp ở các mặt bên, với bề mặt hoàn thiện giả carbon cùng các khe thoát nhiệt hầm hố. Các cổng kết nối cũng được bố trí ra sau để thuận tiện hơn khi sử dụng, và GIGABYTE Gaming G7 cũng là dòng sản phẩm duy nhất của hãng có thể làm được như vậy.&nbsp;</p><p>Dù được làm hầu hết từ nhựa, nhưng bộ khung của GIGABYTE Gaming G7 MD vẫn có được độ chắc chắn cần thiết với một sản phẩm gaming. Nếu có điều gì cần lưu ý thì chủ yếu sẽ nằm ở lớp sơn bóng, dễ bám mồ hôi và dấu vân tay nên cần được vệ sinh thường xuyên để đảm bảo thẩm mỹ.&nbsp;</p><h3><strong><img src=\"https://www.hanoicomputer.vn/media/lib/25-02-2022/imagetools0.png\" alt=\"Laptop Gigabyte Gaming G7 1\"></strong></h3><h3><strong>Màn hình đa dụng, chất lượng hiển thị ấn tượng</strong></h3><p><br>Là một sản phẩm gaming, màn hình của GIGABYTE Gaming G7 MD có đủ những yếu tố cần thiết để đem lại trải nghiệm tối ưu cho game thủ. Điểm nhấn lớn nhất ở đây sẽ là tần số quét lên đến 144Hz; giúp từng khung hình được hiển thị nhanh chóng và mượt mà để người dùng làm chủ cuộc chơi.&nbsp;</p><p>Ngoài ra, với thông số màu sắc ấn tượng (72% NTSC), kích thước 17.3-inch đặc biệt rộng rãi cùng hệ thống viền mỏng; GIGABYTE Gaming G7 còn có thể được tận dụng để làm các tác vụ liên quan đến màu sắc (Chỉnh sửa ảnh, thiết kế, hậu kỳ video, v.v), xem phim,… với chất lượng đảm bảo. Viền trên của sản phẩm sẽ có cụm webcam độ phân giải HD, đủ để người dùng tận dụng trong quá trình làm việc.&nbsp;</p><h3><strong>Bàn phím, touchpad đơn giản nhưng chất lượng</strong></h3><p><br>Bàn phím của GIGABYTE Gaming G7 MD mang dáng vẻ trung tính; với font chữ rõ ràng cùng kích thước đầy đủ trải nghiệm. Cảm giác gõ cho ra cũng là rất chất lượng với độ nảy cao, khung phím chắc chắn và hành trình sâu; giúp người dùng dễ dàng làm quen và cảm thấy hài lòng trong quá trình sử dụng hàng ngày. Về hệ thống LED, GIGABYTE Gaming G7 MD sẽ sử dụng LED một vùng, với 15 tuỳ chọn màu sắc có tuỳ chỉnh qua phần mềm GIGABYTE Control Center.&nbsp;</p><p>Touchpad của GIGABYTE Gaming G7 MD có kích thước vừa đủ dùng, cho trải nghiệm đảm bảo nhờ lớp phủ kính cùng driver Windows Precision với độ chính xác cao. Bề mặt khu vực này cũng tỏ ra cứng cáp, đặc biệt ở hai phím chuột trái phải được, giúp các thao tác vuốt chạm hay click chuột được thực hiện dễ dàng.</p><p><img src=\"https://www.hanoicomputer.vn/media/lib/25-02-2022/imagetools1.png\" alt=\"Laptop Gigabyte Gaming G7 2\"></p><h3><strong>Hiệu năng mạnh mẽ, tản nhiệt hiệu quả</strong></h3><p><br>Về cấu hình, GIGABYTE Gaming G7 MD sẽ sử dụng CPU Intel Core i7-11800H 8 nhân 16 luồng mạnh mẽ, với hiệu suất có thể được đẩy lên tối đa nhờ hệ thống tản nhiệt WINDFORCE Infiinity dày dặn, thông thoáng. Không chỉ vậy, sức mạnh này còn có thể được duy trì liên tục, giúp người dùng yên tâm chơi game hoặc làm các tác vụ nặng (render 2D, 3D, export ảnh, v.v.) trong thời gian dài.&nbsp;</p><p>Còn về card đồ hoạ, tuỳ chọn NVIDIA RTX 3050Ti 4GB cho sức mạnh vừa đủ để game thủ \"chinh chiến\" các tựa game mới với thiết lập đồ hoạ Cao. Đi kèm với khả năng hỗ trợ thuật toán DLSS 2.0, hiệu suất của game sẽ được cân bằng tốt nhất ngay cả khi đang sử dụng công nghệ Ray Tracing. Kết hợp với sức mạnh từ CPU, trải nghiệm chung của người dùng sẽ được đảm bảo nhanh, mạnh gần như mọi lúc – khi phần cứng đã có đủ điều kiện phát huy tối đa khả năng.&nbsp;</p><p>Trong quá trình trải nghiệm thì nhiệt độ phần cứng cũng ở mức chấp nhận được (80 - 85 độ CPU, &lt;80 độ GPU), còn bề mặt máy cũng không bị khó chịu do máy được hạn chế về tình trạng om nhiệt. Kết quả này có được là nhờ những cải thiện mà GIGABYTE đã áp dụng lên WINDFORCE Infinity thế hệ mới, giúp hệ thống này có được khả năng lưu thông khí tốt để giữ cho phần cứng được mát mẻ.&nbsp;</p><p>Về các thành phần còn lại, GIGABYTE Gaming G7 MD tỏ ra khá dồi dào tài nguyên với 16GB RAM DDR4-3200 (nâng cấp tối đa 64GB) cùng 512GB SSD NVMe có sẵn (Còn 1 khe trống nữa, hỗ trợ nâng cấp tối đa 2TB x2)</p><p><img src=\"https://hanoicomputercdn.com/media/product/59689_laptop_gigabyte_gaming_g7_md_71s1223sh_den_2021_2.png\" alt=\"Laptop Gigabyte Gaming G7 3\"></p><h3><strong>Cổng kết nối dồi dào, đầy đủ</strong></h3><p><br>Về cổng kết nối, ấn tượng đầu tiên mà GIGABYTE Gaming G7 MD tạo nên nằm ở khả năng xuất hình đầy đủ; với lần lượt HDMI 2.1, mini-DisplayPort 1.4 cùng Thunderbolt 4. Có lẽ mục đích của việc này là để máy có thể kết hợp với các sản phẩm khác trong hệ sinh thái GIGABYTE, tất nhiên là gồm cả màn rời.&nbsp;</p><p>Ngoài ra, người dùng còn có thêm 3 cổng USB-A 3.2 Gen1, cổng LAN RJ-45, khe thẻ SD tốc độ cao - khá là thoải mái để lắp thêm gear, ổ cứng, v.v nếu có nhu cầu. Jack tai nghe trên GIGABYTE Gaming G7 MD được chia thành 2 đường audio – micro riêng biệt, giúp người dùng dễ dàng sử dụng kèm các mẫu tai nghe gaming cao cấp mà không cần cổng chuyển.&nbsp;</p><p><img src=\"https://www.hanoicomputer.vn/media/lib/25-02-2022/imagetools2.png\" alt=\"Laptop Gigabyte Gaming G7 4\"></p><h3><strong>Thời lượng pin vừa đủ dùng</strong></h3><p><br>Về pin, GIGABYTE Gaming G7 MD sẽ sở hữu viên pin dung lượng 49Wh, với thời lượng sử dụng cho ra vào khoảng 3.5-4h ở chế độ tiết kiệm pin (Maximum Battery Life) cùng các tác vụ văn phòng cơ bản. Với một sản phẩm sở hữu nhiều linh kiện mạnh mẽ thì đây là mức thời gian hoàn toàn chấp nhận được, vừa đủ sử dụng khi cần kip.&nbsp;</p><p><img src=\"https://hanoicomputercdn.com/media/product/59689_laptop_gigabyte_gaming_g7_md_71s1223sh_den_2021_3.png\" alt=\"Laptop Gigabyte Gaming G7 5\"></p>', NULL, 'Gigabyte', 'MD- 71S1223SH', 'Đen', 'Intel i7 11800H (2.3Ghz, upto 4.6Ghz)', 'Intel HM570', '16GB DDR4 3200Mhz (8GB * 2)', '2', '64GB', 'NVIDIA® GeForce® RTX 3050Ti 4G-GDDR6', '512GB SSD PCIe NVMe SSD Gen 4 (1x 2.5” HDD/ SSD slot (Only supports 7mm or thinner)2x M.2 SSD slots (Type 2280, supports 1x NVMe PCIe & SATA/ 1x NVMe PCIe)', 'All-zone of Single Colored Backlit Keyboard with 15 Colors LED Setting; Firmware-based TPM, supports Intel® Platform Trust Technology (Intel® PTT)', '17.3\" Thin Bezel FHD 1920x1080 IPS, Anti-glare LCD (144Hz, 72% NTSC)', 'HD', '2x 2 Watt Speaker, Dual-Array Microphone, DTS:X® Ultra', 'Intel® AX200 Wireless (802.11ax), Bluetooth® V5.2', '1x USB2.0 Type-A, 1x USB3.2 Gen1 Type-A, 1x USB3.2 Gen2 Type-A, 1x USB 3.2 Gen 2 Type-C, 1x HDMI 2.0 (with HDCP), 1x mini DP 1.4, 1x Audio combo jack, 1x Microphone jack, 1x DC-in Jack, 1x RJ-45', 'Li-ion 48.96Wh', '395(W) x 262(D) x 25.9(H) mm', '2.5kg', 'Win 10 Home', 'Cable + Sạc', 'Yes', '33990000', '31990000', '2022-04-23 08:26:42', '2022-04-23 08:26:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneNumber`, `address`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'An', 'nva030801@gmail.com', '0966093801', 'HN', NULL, '$2y$10$J7T.Fbvf/eVjxMeqd2DbWOSego2W.eKvMroNTxnqBbiQaAzISYMxq', 1, NULL, '2022-04-16 00:49:49', '2022-04-16 00:49:49'),
(2, 'B', 'nva03080@gmail.com', '0966093801', 'HN', NULL, '$2y$10$XFsyN2vFmfjUYp1FDz2uRebLUYpqgT4tsuyfsEWiwaWp0.00szcHm', NULL, NULL, '2022-04-16 00:52:43', '2022-04-16 00:52:43'),
(5, 'Admin', 'admin@gmail.com', '0966093801', 'BN', NULL, '$2y$10$DLPgPdHKQIqiPuU1tvY2YOgDAjHgvd4jBUw84ndB1aqJDQ4XU7i66', 1, NULL, '2022-04-23 07:56:15', '2022-04-23 07:56:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

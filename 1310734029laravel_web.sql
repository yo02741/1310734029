-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `1310734029laravel_web`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `cid` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `comments`
--

INSERT INTO `comments` (`cid`, `users_id`, `title`, `content`, `updated_at`, `created_at`) VALUES
(1, 1, '自我介紹', '我是誰', '2019-12-23 10:26:24', '2019-12-23 10:26:24'),
(2, 2, '我是動粉', 'AAAAAAAAAAAAㄇ', '2019-12-23 10:31:41', '2019-12-23 10:31:41'),
(3, 2, '自我介紹哦', '我是韓國帥帥', '2019-12-23 10:32:22', '2019-12-23 10:32:22'),
(4, 1, '今天天氣', '今天天氣真滴好', '2019-12-27 12:29:45', '2019-12-27 12:29:45'),
(5, 1, '真實的尼克', 'NICKTHEREAL', '2019-12-27 12:36:56', '2019-12-27 12:36:56'),
(6, 2, '猜猜我是誰', '我是茂昇', '2019-12-28 13:20:22', '2019-12-28 13:20:22'),
(7, 1, '2020', '新年快樂', '2020-01-02 12:23:28', '2020-01-02 12:23:28'),
(8, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:23:46', '2020-01-02 12:23:46'),
(9, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:25:45', '2020-01-02 12:25:45'),
(10, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:16', '2020-01-02 12:26:16'),
(11, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:18', '2020-01-02 12:26:18'),
(12, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:25', '2020-01-02 12:26:25'),
(13, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:26', '2020-01-02 12:26:26'),
(14, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:26', '2020-01-02 12:26:26'),
(15, 1, '香菇雞湯', '庭葦很會', '2020-01-02 12:26:36', '2020-01-02 12:26:36'),
(16, 1, '純喫茶', '綠茶', '2020-01-02 12:27:12', '2020-01-02 12:27:12'),
(17, 2, '你說', '綠色是你最愛的顏色', '2020-01-02 12:32:40', '2020-01-02 12:32:40'),
(18, 4, 'hi', 'im 33', '2020-01-02 12:35:59', '2020-01-02 12:35:59'),
(19, 1, '心得', '今天買了一個竹編腳踏車，才20塊錢，很可愛。', '2020-01-04 14:03:48', '2020-01-04 14:03:48'),
(20, 1, '數字', '111111111', '2020-01-04 14:05:01', '2020-01-04 14:05:01'),
(21, 1, '排數', '1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10', '2020-01-04 14:05:50', '2020-01-04 14:05:50'),
(22, 4, '自我介紹', '我是中科金太妍', '2020-01-04 14:52:31', '2020-01-04 14:52:31');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_12_14_163227_create_users_table', 1),
(4, '2019_12_14_163325_create_comments_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `name`, `updated_at`, `created_at`) VALUES
(1, 's1310734029', 'L125329220', '陳宥融', '2019-12-23 08:08:27', '2019-12-23 08:08:27'),
(2, 'doge666', 'only100', 'maosheng', '2019-12-23 10:30:56', '2019-12-23 10:30:56'),
(3, 'admin1', 'admin1', 'admin1', '2019-12-23 11:30:50', '2019-12-23 11:30:50'),
(4, '333333', '333333', '33', '2020-01-02 12:33:26', '2020-01-02 12:33:26'),
(5, 'tingwei', 'tingwei', '腦闆', '2020-01-02 12:37:13', '2020-01-02 12:37:13');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `comments_users_id_foreign` (`users_id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

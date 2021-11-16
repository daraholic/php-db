-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-15 09:30:16
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` int(11) NOT NULL,
  `address` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(14) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `level` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `birthday`, `address`, `mobile`, `level`, `create_time`) VALUES
(1, '', 0, '', '', 0, '2021-11-15 06:45:40'),
(2, '', 0, '', '', 0, '2021-11-15 06:45:40'),
(3, '安', 2021, '台北', '', 0, '2021-11-15 06:48:11'),
(4, '安', 2021, '台北', '', 0, '2021-11-15 06:48:11'),
(5, '安', 2021, '台北2', '', 0, '2021-11-15 06:49:48'),
(6, '安', 2021, '台北2', '', 0, '2021-11-15 06:49:48'),
(7, '安', 2021, '台北3', '', 0, '2021-11-15 06:58:30'),
(8, '安', 2021, '台北3', '', 0, '2021-11-15 06:58:30'),
(9, '安', 2021, '台北4', '', 0, '2021-11-15 06:59:06'),
(10, '安', 2021, '台北4', '', 0, '2021-11-15 06:59:06'),
(11, '安', 2021, '台北4', '', 0, '2021-11-15 07:14:05'),
(12, '安', 2021, '台北4', '', 0, '2021-11-15 07:14:05'),
(13, '安', 2021, '台北5', '032659875', 0, '2021-11-15 07:15:25'),
(14, '安', 2021, '台北5', '032659875', 0, '2021-11-15 07:15:25'),
(15, '安', 2021, '台北6', '0965656969', 0, '2021-11-15 07:17:57'),
(16, 'yui', 2022, '別的世界', '0963568968', 0, '2021-11-15 07:31:25'),
(17, 'yui', 2022, '別的世界', '0963568968', 0, '2021-11-15 07:31:25'),
(18, 'asuna', 2022, '別的世界', '0963568968', 0, '2021-11-15 07:33:30');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

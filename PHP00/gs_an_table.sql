-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_re`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(8) NOT NULL,
  `postcode` int(7) NOT NULL,
  `pref` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `block` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL,
  `distance` int(2) NOT NULL,
  `budjet` int(4) NOT NULL,
  `width` int(3) NOT NULL,
  `madori` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `postcode`, `pref`, `city`, `block`, `name`, `age`, `phone`, `mail`, `distance`, `budjet`, `width`, `madori`, `comment`) VALUES
(2, 1350042, '東京都', '江東区木場', '木場3-4-15-102', 'テスト花子', 50, '0', 'inukai-hiro@hotmail.co.jp', 6, 5000, 80, '3LDK', 'どうでしょうか'),
(3, 1350042, '東京都', '江東区木場', '木場3-4-15-102', 'テストテスト', 30, '00000000000', 'inukai-hiro@hotmail.co.jp', 6, 5000, 80, '3LDK', '電話番号はTEXTだよ'),
(5, 1350042, '東京都', '江東区木場', '木場3-4-15-102', 'test', 0, '09025757904', 'inukai-hiro@hotmail.co.jp', 5, 5000, 70, '1LDK', 'テスト'),
(6, 1350042, '東京都', '江東区', '木場', '  ヒロユキ  ', 32, '', '', 15, 5000, 70, '    ', '更新できているかな'),
(7, 1320031, '東京都', '江戸川区', '松島5-2-2', 'テスト侍', 34, 'test@test.co', '', 6, 3000, 77, '4LDK以上', '千葉県がいいな\r\nでもやっぱ東京都');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

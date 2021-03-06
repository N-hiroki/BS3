-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 10 月 07 日 05:14
-- サーバのバージョン： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `id` int(255) NOT NULL,
  `ans` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ans_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `ans`
--

INSERT INTO `ans` (`id`, `ans`, `ans_user`, `date`) VALUES
(14, 'aaa', 'ZEROFROM', '2015-09-30 07:59:09'),
(14, 'bbb', 'ZEROFROM', '2015-09-30 08:05:05'),
(14, 'bbb', 'ZEROFROM', '2015-09-30 08:05:23'),
(15, '', 'ZEROFROM', '2015-09-30 08:24:10'),
(15, 'aaa', 'aa', '2015-09-30 08:26:06'),
(11, 'ddfsf', 'aa', '2015-09-30 08:26:36'),
(16, 'qqq', 'aa', '2015-09-30 08:26:55'),
(19, '回答', 'aa', '2015-09-30 09:26:12'),
(20, 'パワポ', 'aa', '2015-10-01 07:35:41'),
(16, 'sca', 'aa', '2015-10-03 05:05:35'),
(22, 'aa', 'a', '2015-10-06 10:42:27'),
(15, 'あ', 'a', '2015-10-06 10:45:53'),
(24, 'a', 'a', '2015-10-06 10:58:52');

-- --------------------------------------------------------

--
-- テーブルの構造 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `question`
--

INSERT INTO `question` (`id`, `title`, `question`, `date`, `user_id`) VALUES
(1, '??????', '?????????????', '2015-09-28 07:38:38', 'qwe'),
(2, 'マネジメントって何ですか？', 'マネジメントを学びたいのですがそもそもマネジメントってどのようなものでしょうか？', '2015-09-28 07:43:50', 'qwe'),
(3, 'aaa', 'aaaa', '2015-09-28 08:04:29', 'dhdhdjhi'),
(4, 'aaa', 'aaassss', '2015-09-28 08:19:37', 'dhdhdjhi'),
(5, 'www', 'www', '2015-09-28 08:20:22', 'dhdhdjhi'),
(6, 'eeerrtyu', 'ugiugfvkcvk', '2015-09-28 14:33:01', 'rrtt'),
(7, '11111', '11111', '2015-09-28 15:42:49', 'pkvpjpvf'),
(8, '22222', '22222', '2015-09-28 15:42:55', 'pkvpjpvf'),
(9, 'hhh', 'hhh', '2015-09-29 18:44:38', 'qchusvhos'),
(10, 'tybsgs', 'sgszgrs', '2015-09-29 19:43:04', 'aaxaaxa'),
(11, 'aaa', 'aaa', '2015-09-29 19:56:06', 'ZEROFROM'),
(12, 'トレーニング', 'トレーニング', '2015-09-30 06:16:10', 'ZEROFROM'),
(13, '9/30', '9/30', '2015-09-30 06:27:42', 'ZEROFROM'),
(14, 'aaa', 'aaaa', '2015-09-30 07:26:30', 'ZEROFROM'),
(15, 'あああa', 'あああa', '2015-09-30 08:18:50', 'ZEROFROM'),
(16, 'aaaa', 'aaas', '2015-09-30 08:26:18', 'aa'),
(17, 'マネジメント', 'マネジメントについて教えて下さい。', '2015-09-30 08:44:52', 'aa'),
(18, 'トレーニングについて', 'ティーチングとコーチングの使い分けについて教えてください。', '2015-09-30 08:45:32', 'aa'),
(19, 'sss', 'sss', '2015-09-30 09:25:50', 'aa'),
(20, 'プレゼンについて１２３４', 'プレゼンについてですが、準備はどのようなことをすればいいでしょうか？', '2015-10-01 07:35:28', 'aa'),
(21, 'aa', 'aa', '2015-10-03 05:05:21', 'aa'),
(22, 'テスト', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '2015-10-03 08:30:25', 'a'),
(23, 'qq', 'qq', '2015-10-06 10:58:25', 'a'),
(24, 'ww', 'wwa', '2015-10-06 10:58:37', 'a');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `pass`, `mail`) VALUES
('aa', 'aa', 'aaaa@aaa.com'),
('aaa', '123', 'aaaa@aaa.com'),
('aaxaaxa', 'aaa', 'aaaa@aaa.com'),
('abcd', 'abcd', 'aaaa@aaa.com'),
('abcdefg', '12345678', 'abc@abs'),
('asd', 'aaa', 'asd@asd'),
('bbb', 'bbb', 'bbb@bbb'),
('ckjchkajbl', 'aaa', 'aaaa@aaa.com'),
('dhdhdjhi', 'aaaa', 'aaaa@aaa.com'),
('pkvpjpvf', 'ssss', 'aaaa@aaa.com'),
('qchusvhos', 'aaaaa', 'aaaa@aaa.com'),
('qwe', 'qwer', 'aaaa@aaa.com'),
('qwertyui', '12345678', 'abc@abs'),
('rhufihiwf', 'dddd', 'aaaa@aaa.com'),
('rrtt', 'pppp', 'aaaa@aaa.com'),
('sss', 'aaa', 'sss@ss'),
('tkag', 'aaa', 'aaaa@aaa.com'),
('ZEROFROM', '12345678', 'zero.flowerbox.isk76@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

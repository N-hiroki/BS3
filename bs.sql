-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 9 月 29 日 12:58
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
  `ans` text NOT NULL,
  `ans_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(8, '22222', '22222', '2015-09-28 15:42:55', 'pkvpjpvf');

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
('abcd', 'abcd', 'aaaa@aaa.com'),
('abcdefg', '12345678', 'abc@abs'),
('asd', 'aaa', 'asd@asd'),
('bbb', 'bbb', 'bbb@bbb'),
('ckjchkajbl', 'aaa', 'aaaa@aaa.com'),
('dhdhdjhi', 'aaaa', 'aaaa@aaa.com'),
('pkvpjpvf', 'ssss', 'aaaa@aaa.com'),
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 27 日 10:26
-- 服务器版本: 5.5.31
-- PHP 版本: 5.3.10-1ubuntu3.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `message` char(200) NOT NULL,
  `dateline` int(10) NOT NULL,
  `ip` char(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`id`, `username`, `message`, `dateline`, `ip`) VALUES
(1, 'admin', 'hello', 1, '8.8.8.8'),
(2, 'admin2', 'hello2', 12, '8.8.8.28'),
(3, 'aaaa', 'aaaaaaa', 1395848724, '127.0.0.1'),
(4, 'admin', 'hello world\r\n', 1395848781, '127.0.0.1'),
(5, 'topka', 'hello hello ä¸­æ–‡\r\n', 1395886696, '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

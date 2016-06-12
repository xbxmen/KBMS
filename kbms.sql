-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-12 16:16:49
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbms`
--

-- --------------------------------------------------------

--
-- 表的结构 `files`
--

CREATE TABLE `files` (
  `fid` int(100) NOT NULL,
  `filehead` varchar(30) NOT NULL DEFAULT '',
  `filebody` varchar(30) NOT NULL DEFAULT '',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `fileindex` varchar(100) NOT NULL DEFAULT '',
  `filesize` varchar(50) NOT NULL DEFAULT '',
  `filegrade` varchar(50) NOT NULL DEFAULT '',
  `createtime` varchar(100) NOT NULL DEFAULT '',
  `updatetime` varchar(100) NOT NULL DEFAULT '',
  `lastviewtime` varchar(50) NOT NULL DEFAULT '',
  `viewcount` int(100) NOT NULL,
  `remark` varchar(50) NOT NULL DEFAULT '',
  `filefolder` int(20) NOT NULL DEFAULT '-1',
  `isshare` int(1) NOT NULL DEFAULT '1',
  `uid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `folders`
--

CREATE TABLE `folders` (
  `folid` int(100) NOT NULL,
  `folname` varchar(30) NOT NULL DEFAULT '',
  `folpreid` int(100) NOT NULL DEFAULT '1',
  `grade` int(100) NOT NULL,
  `type` int(10) NOT NULL,
  `updatetime` varchar(60) NOT NULL DEFAULT '',
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `folders`
--

INSERT INTO `folders` (`folid`, `folname`, `folpreid`, `grade`, `type`, `updatetime`, `uid`) VALUES
(1, '新建文件夹', 1, 1, 2, '2016-Jun-Sat 21:48:51pm', 1),
(2, '新建文件夹222', 2, 1, 2, '2016-06-11 21:51:27', 1),
(3, '22222', 3, 1, 2, '2016-06-12 09:14:25', 1),
(4, 'SDFSDF', 4, 1, 2, '2016-06-12 15:41:15', 1),
(5, 'asdasdsad', 5, 1, 2, '2016-06-12 16:00:46', 1),
(6, '7777', 6, 1, 2, '2016-06-12 16:03:08', 1),
(7, 'dsfsd夹', 7, 1, 2, '2016-06-12 16:13:46', 1),
(8, 'sadsa', 8, 1, 2, '2016-06-12 16:56:50', 1);

-- --------------------------------------------------------

--
-- 表的结构 `notes`
--

CREATE TABLE `notes` (
  `nid` int(100) NOT NULL,
  `notehead` varchar(30) NOT NULL DEFAULT '',
  `notebody` text NOT NULL,
  `notetype` varchar(10) NOT NULL DEFAULT '',
  `noteindex` varchar(50) NOT NULL DEFAULT '',
  `notesize` varchar(50) NOT NULL DEFAULT '',
  `notegrade` varchar(10) NOT NULL DEFAULT '',
  `createtime` varchar(100) NOT NULL DEFAULT '',
  `updatetime` varchar(100) NOT NULL DEFAULT '',
  `lastviewtime` varchar(50) NOT NULL DEFAULT '',
  `viewcount` int(100) NOT NULL,
  `remark` varchar(50) NOT NULL DEFAULT '',
  `notefolder` int(20) NOT NULL DEFAULT '-1',
  `isshare` int(1) NOT NULL DEFAULT '1',
  `uid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `uid` int(20) NOT NULL,
  `account` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL DEFAULT '',
  `icon` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `account`, `password`, `username`, `icon`) VALUES
(1, 'qwe', 'qwe', 'qwe', ''),
(2, '123', '123', '123', ''),
(3, '1232', '123', '123', ''),
(4, '12322', '123', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`folid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `files`
--
ALTER TABLE `files`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `folders`
--
ALTER TABLE `folders`
  MODIFY `folid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `notes`
--
ALTER TABLE `notes`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

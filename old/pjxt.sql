-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 12 月 30 日 08:35
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pjxt`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '管理员名称',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `a_name`, `pw`) VALUES
(1, 'admin', 'admin'),
(4, 'tanglu', 'tanglu');

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_number` int(20) NOT NULL COMMENT '课程编号',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '课程名称',
  `tea_number` int(50) NOT NULL COMMENT '授课教师编号',
  `teacher` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '授课教师',
  `year` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '学年',
  `term` int(10) NOT NULL COMMENT '学期',
  `department` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '开课学院',
  `remark` text CHARACTER SET utf8 NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`id`, `course_number`, `name`, `tea_number`, `teacher`, `year`, `term`, `department`, `remark`) VALUES
(1, 1001, '软件工程', 201701, '廖周宇', '2017-2018', 1, '计算机与信息工程学院', ''),
(2, 1002, '数据库', 201702, '段艳明', '2016-2017', 2, '计算机与信息工程学院', ''),
(5, 1004, '计算机网络', 201705, '韦丽娟', '2017-2018', 1, '计信学院', ''),
(7, 2002, 'Linux操作系统', 201711, '韦静', '2017-2018', 2, '计算机与信息工程学院', '');

-- --------------------------------------------------------

--
-- 表的结构 `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '评教学生',
  `teacher` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '被评教师',
  `score` text CHARACTER SET utf8 NOT NULL COMMENT '得分',
  `advice` text CHARACTER SET utf8 NOT NULL COMMENT '意见',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `result`
--

INSERT INTO `result` (`id`, `student`, `teacher`, `score`, `advice`) VALUES
(8, '2016107002', '201701', '21', '棒棒棒'),
(9, '2016107002', '201702', '6', '思路清晰'),
(10, '2015107101', '201701', '96', '思路清晰'),
(11, '2015107101', '201702', '6', '思路清晰');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_number` int(50) NOT NULL COMMENT '学号',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '性别',
  `department` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '院系',
  `specialty` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '专业',
  `class` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '班级',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `select_course` text CHARACTER SET utf8 NOT NULL COMMENT '选修课程',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `stu_number`, `name`, `sex`, `department`, `specialty`, `class`, `pw`, `select_course`) VALUES
(2, 2016107104, '陈秀玲', '女', '计信学院', '计算机科学与技术', '151班', '123456', '1001|1002'),
(3, 2016107103, '廖颉', '女', '计信学院', '计算机科学与技术', '151班', '000000', '1002'),
(4, 2016107139, '王莹', '女', '计信学院', '计算机科学与技术', '151班', '000000', '1001|1002'),
(9, 2016107102, '王五', '男', '计信学院', '计算机科学与技术', '151班', '000000', ''),
(10, 2015107100, '张三', '男', '计信学院', '网络工程', '151班', '000000', ''),
(11, 2015107101, '李四', '女', '计信学院', '软件工程', '151班', '000000', '1001|1002'),
(12, 2016107001, '青春', '女', '计信学院', '计算机科学与技术', '16计技', '107001', '1001'),
(13, 2016107002, '死鱼', '女', '计信学院', '计算机科学与技术', '16计技', '107002', '1001|1002'),
(14, 2016107134, '小明', '男', '计信学院', '计算机科学与技术', '161班', '111', '1001');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tea_number` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '教师号',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '性别',
  `department` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '院系',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '000000' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `tea_number`, `name`, `sex`, `department`, `pw`) VALUES
(1, '201701', '廖周宇', '男', '计算机与信息工程学院', '111111'),
(2, '201702', '段艳明', '女', '计算机与信息工程学院', '123456'),
(5, '201705', '韦丽娟', '女', '计算机与信息工程学院', '000000'),
(6, '201706', '吴启明', '男', '计算机与信息工程学院', '000000'),
(7, '201707', '田光灿', '男', '马克思学院', '000000'),
(8, '201708', '王丽', '女', '外国语学院', '000000'),
(9, '201709', '唐凤仙', '女', '计算机与信息工程学院', '000000'),
(10, '201710', '王钰婷', '女', '计算机与信息工程学院', '000000'),
(11, '201711', '韦静', '女', '计算机与信息工程学院', '111111'),
(12, '201712', '吴启明', '男', '计算机与信息工程学院', '111111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

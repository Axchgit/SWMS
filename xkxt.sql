-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-12-25 09:35:07
-- 服务器版本： 5.7.24
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `xkxt`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '管理员名称',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `course`;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`id`, `course_number`, `name`, `tea_number`, `teacher`, `year`, `term`, `department`, `remark`) VALUES
(1, 1001, '软件工程', 201701, '廖周宇', '2017-2018', 1, '计算机与信息工程学院', ''),
(2, 1002, '数据库', 201702, '段艳明', '2016-2017', 2, '计算机与信息工程学院', ''),
(5, 1004, '计算机网络', 201705, '韦丽娟', '2017-2018', 1, '计信学院', ''),
(7, 2002, 'Linux操作系统', 201711, '韦静', '2017-2018', 2, '计算机与信息工程学院', ''),
(8, 11, '11', 11, '11', '11', 11, '11', '');

-- --------------------------------------------------------

--
-- 表的结构 `course_material`
--

DROP TABLE IF EXISTS `course_material`;
CREATE TABLE IF NOT EXISTS `course_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_number` int(11) NOT NULL,
  `tea_number` int(11) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uploaddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `course_material`
--

INSERT INTO `course_material` (`id`, `course_number`, `tea_number`, `mname`, `address`, `uploaddate`) VALUES
(2, 1001, 201701, '113', './files/course_material/php之进步.docx', '2019-12-24 09:09:42');

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_number` int(10) NOT NULL,
  `course_number` int(10) NOT NULL,
  `grade` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `stu_number`, `course_number`, `grade`) VALUES
(24, 2016107103, 1004, 22),
(25, 2016107103, 2002, 22),
(20, 2016107103, 1001, 22),
(21, 2016107103, 1002, 22);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_number` int(50) NOT NULL COMMENT '学号',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '性别',
  `department` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '院系',
  `specialty` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '专业',
  `class` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '班级',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `stu_number`, `name`, `sex`, `department`, `specialty`, `class`, `pw`) VALUES
(2, 2016107104, '陈秀玲', '女', '计信学院', '计算机科学与技术', '151班', '123456'),
(3, 2016107103, '廖颉', '女', '计信学院', '计算机科学与技术', '151班', '111111'),
(9, 2016107102, '王五', '男', '计信学院', '计算机科学与技术', '151班', '000000'),
(10, 2015107100, '张三', '男', '计信学院', '网络工程', '151班', '000000'),
(12, 22, '22', '22', '22', '22', '22', '22');

-- --------------------------------------------------------

--
-- 表的结构 `student_work`
--

DROP TABLE IF EXISTS `student_work`;
CREATE TABLE IF NOT EXISTS `student_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wname` varchar(20) NOT NULL,
  `stu_number` int(11) NOT NULL,
  `sname` varchar(10) NOT NULL,
  `course_number` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uploaddate` datetime NOT NULL,
  `score` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student_work`
--

INSERT INTO `student_work` (`id`, `wname`, `stu_number`, `sname`, `course_number`, `address`, `uploaddate`, `score`) VALUES
(5, '111', 2016107103, '廖颉', 1001, './files/student_work/php之进步.docx', '2019-12-25 08:18:21', 33);

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tea_number` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '教师号',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '性别',
  `department` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '院系',
  `pw` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '000000' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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
(12, '201712', '吴启明', '男', '计算机与信息工程学院', '111111'),
(14, '1000', 'aa', 'aa', 'aa', 'aaaaa');

-- --------------------------------------------------------

--
-- 表的结构 `teacher_work`
--

DROP TABLE IF EXISTS `teacher_work`;
CREATE TABLE IF NOT EXISTS `teacher_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wname` varchar(20) NOT NULL,
  `course_number` int(10) DEFAULT NULL,
  `tea_number` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uploaddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `teacher_work`
--

INSERT INTO `teacher_work` (`id`, `wname`, `course_number`, `tea_number`, `address`, `uploaddate`) VALUES
(17, '111', 1001, 201701, './files/teacher_work/php之进步.docx', '2019-12-25 08:40:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

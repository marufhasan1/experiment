-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 11:56 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodsociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `preasent_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `image` text NOT NULL,
  `joining_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `father_name`, `mother_name`, `mobile`, `designation`, `preasent_address`, `permanent_address`, `image`, `joining_date`) VALUES
(7, 'Ma aaa', 'E ha  a e fpina', 'Oemuaunoaanyp', '6846546546546546', 'designation3', 'Geg jikuvda pemgab keg juj epeide wa fuscip fuz geg ra hotuwej. Zejaz lufgi cu ukvuvup', 'Geg jikuvda pemgab keg juj epeide wa fuscip fuz geg ra hotuwej. Zejaz lufgi cu ukvuvup', 'public/employee/emep4_2eoy26l99.gif', '2016-11-09'),
(8, 'Dnnrltbbnk', 'Uetah lauulfAbk', 'Hypntnteao', 'AgkmakOh aCtyut', 'designation2', 'Mikvirub secekvi coed kaslo haow mopovira inva medow ', 'Mikvirub secekvi coed kaslo haow mopovira inva medow ', 'public/employee/5l2y1mpee13o_e4.gif', '2017-01-19'),
(9, 'IRmhmap annArha', 'Ga', 'Ntnwhhaua', '01735189237', 'designation1', 'Horukahoc nasunat nojej utzuh komka ezevak vizu ujibef gutiski vo pug ovetoni. Nal uvpalsuk ruhepeka kahuuli ', 'Horukahoc nasunat nojej utzuh komka ezevak vizu ujibef gutiski vo pug ovetoni. Nal uvpalsuk ruhepeka kahuuli ', 'public/employee/p55e076m_oee7ly.gif', '2017-01-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2020 at 08:03 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `affectation`
--

DROP TABLE IF EXISTS `affectation`;
CREATE TABLE IF NOT EXISTS `affectation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(100) NOT NULL,
  `nom_module` varchar(100) NOT NULL,
  `n_salle` int(50) NOT NULL,
  `heure_date` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `affectation`
--

INSERT INTO `affectation` (`id`, `nom_prof`, `nom_module`, `n_salle`, `heure_date`) VALUES
(1, 'Reda El Jourani', 'Architecture ordinateur', 106, '2020-06-16 11:00:00.000000'),
(13, 'Arioua Mounir', 'LC 2', 3, '2020-06-27 11:10:00.000000'),
(12, 'Yasser Mesmoudi', 'Algebre 1', 104, '2020-06-20 11:00:00.000000'),
(11, 'Alia Zakriti', 'Theorie des langages et Compilation', 6, '2020-06-17 11:00:00.000000'),
(10, 'Arioua Mounir', 'Systemes exploitation', 203, '2020-06-19 11:00:00.000000'),
(8, 'Jaber El Bouhdidi', 'Prog web', 5, '2020-06-21 11:00:00.000000'),
(9, 'Al Achhab Mohammed', 'Electronique numerique', 105, '2020-06-22 11:00:00.000000'),
(18, 'Dkhissi Ibtissam', 'MAO', 5, '2020-07-01 11:00:00.000000'),
(16, 'Reda El Jourani', 'Prog avancee en C', 103, '2020-06-18 11:00:00.000000'),
(17, 'Al Achhab Mohammed', 'LC 1', 203, '2020-06-08 10:52:00.000000'),
(19, 'Malla Hussein Sawsan', 'Electronique numerique', 105, '2020-07-02 11:00:00.000000'),
(20, 'Besri Zineb', 'Physique 3', 203, '2020-07-03 11:00:00.000000'),
(21, 'Nair Nadia', 'Chimie', 5, '2020-07-03 11:00:00.000000'),
(22, 'Adel Louly', 'Management', 205, '2020-07-04 11:00:00.000000'),
(23, 'El Khamlichi Yasser', 'Architecture ordinateur', 203, '2020-07-05 11:00:00.000000'),
(24, 'Cherkaoui Mohamed', 'Electronique', 6, '2020-07-06 11:00:00.000000'),
(25, 'Chrayah Mohammed', 'LC 3', 204, '2020-07-06 11:00:00.000000'),
(26, 'El Younoussi Yacine', 'Algebre 2', 103, '2020-07-07 11:00:00.000000'),
(27, 'El Biari Aouatef', 'Analyse 1', 205, '2020-07-08 11:00:00.000000'),
(28, 'Lajjam Azza', 'Analyse 4', 206, '2020-07-09 11:00:00.000000'),
(29, 'Hajaji Anas', 'Mathematiques Appliquees', 4, '2020-07-09 11:00:00.000000'),
(30, 'El Adib Samir', 'Physique 4', 104, '2020-07-10 11:00:00.000000'),
(31, 'Khoulji Samira', 'Informatique 2', 3, '2020-07-11 11:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id_m` int(11) NOT NULL AUTO_INCREMENT,
  `nom_module` varchar(100) NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id_m`, `nom_module`) VALUES
(1, 'Prog web'),
(2, 'Prog avancee en C'),
(3, 'Architecture ordinateur'),
(4, 'Electronique numerique'),
(5, 'Systemes exploitation'),
(6, 'Theorie des langages et Compilation'),
(8, 'Algebre 1'),
(9, 'Informatique 1'),
(10, 'Physique 1'),
(11, 'Mecanique 1'),
(12, 'Analyse 1'),
(13, 'LC 1'),
(14, 'LC 2'),
(15, 'Analyse 2'),
(16, 'Algebre 2'),
(17, 'Physique 2'),
(21, 'Chimie'),
(18, 'MAO '),
(22, 'Algebre 3'),
(23, 'Analyse 3'),
(24, 'Physique 3'),
(25, 'LC 3'),
(26, 'Informatique 2'),
(27, 'Mecanique 2'),
(28, 'LC 4'),
(29, 'Analyse 4'),
(30, 'Physique 4'),
(31, 'Electronique'),
(32, 'Management'),
(33, 'Mathematiques Appliquees');

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`) VALUES
(1, 'Reda El Jourani'),
(2, 'Jaber El Bouhdidi'),
(3, 'Al Achhab Mohammed'),
(4, 'Arioua Mounir'),
(5, 'Alia Zakriti'),
(6, 'Yasser Mesmoudi'),
(7, 'El Hajjamy Oussama'),
(9, 'Amel Nejjari'),
(10, 'Malla Hussein Sawsan'),
(11, 'Nair Nadia'),
(12, 'Besri Zineb'),
(13, 'Chrayah Mohammed'),
(14, 'Bentajer Ahmed'),
(15, 'El Khamlichi Yasser'),
(16, 'El Younoussi Yacine'),
(17, 'Adel Louly'),
(18, 'Jaber Arif'),
(19, 'Cherkaoui Mohamed'),
(20, 'Dkhissi Ibtissam'),
(21, 'El Biari Aouatef'),
(22, 'Lajjam Azza'),
(23, 'Zlaiji Loubna'),
(24, 'Sghiouer Hamid'),
(25, 'Benboubker Mohamed Badr'),
(26, 'Hajaji Anas'),
(27, 'Khamlichi Abdellatif'),
(28, 'Mahboub Oussama'),
(29, 'El Khannoussi Fadoua'),
(30, 'El Adib Samir'),
(31, 'Khoulji Samira');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `n_salle` int(30) NOT NULL,
  PRIMARY KEY (`id_salle`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`id_salle`, `n_salle`) VALUES
(1, 3),
(2, 4),
(3, 5),
(4, 6),
(5, 105),
(6, 106),
(7, 103),
(8, 104),
(9, 203),
(10, 204),
(11, 205),
(12, 206);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

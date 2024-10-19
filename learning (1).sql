-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `username`, `password`) VALUES
(1, 'somnath', '$2y$10$FZvRiLHEENNFZ7u3ZTzN..V8C4y3/F/9gO4jX8hB9YvHW.uINRYTe'),
(1, 'somnath', '$2y$10$FZvRiLHEENNFZ7u3ZTzN..V8C4y3/F/9gO4jX8hB9YvHW.uINRYTe');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('somnath', '12345'),
('guddu', '@@@$$$'),
('somnath', '$2y$10$YwbWyzaKiHgmIW80khFzbuaCiDN1c9HO8H9IFrL2Q2ICYU01oSHSa'),
('Tech', '12345'),
('som', '$2y$10$KbQc.uDOmTwrBoFyQMi3reYqx/JmAqszRQAjSkHsG1uxtGU5PbT3C'),
('school', '$2y$10$itfZnSsDJLhdrofAKNtpBehJvCo50R54mtk4Q7fr.xTypkFEgFmPK');

-- --------------------------------------------------------

--
-- Table structure for table `collectdata`
--

CREATE TABLE `collectdata` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `collectdata`
--

INSERT INTO `collectdata` (`name`, `email`, `age`, `gender`, `bio`, `cv`) VALUES
('Somnath Jha', 'snjha1109@gmail.com', '24', 'male', ',jhytredsaQWE4567YUIJK', 0x75706c6f6164732f756b2e706466),
('Somnath Jha', 'snjha1104@gmail.com', '24', 'male', 'erefvgf', 0x75706c6f6164732f756d6573682e706466);

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE `signupdata` (
  `username` varchar(112) NOT NULL,
  `email` varchar(115) NOT NULL,
  `password` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`username`, `email`, `password`) VALUES
('umesh', 'snjha1102@gmail.com', ''),
('umesh', 'snjha1102@gmail.com', ''),
('somnath', 'snjha1109@gmail.com', ''),
('somnath', 'snjha1109@gmail.com', '$2y$10$OU90P.3PWl0ZleBOk8Hl7eWKGNlsjf6Vn9PHDkUiSPFex5gNrJLIO'),
('somnath', 'snjha1109@gmail.com', '$2y$10$gkMOdPEAP5nhZYdewbj3Qe3HiNbmp29fiCNqS6sOJs0KJpAwgMYYW'),
('somnath', 'snjha1109@gmail.com', '$2y$10$NksdpGhqzzFlN8QSNIXZlOAHbg5k18nm/lFnTEt1L4OC9h8sryU06'),
('school', 'som997316@gmail.com', '$2y$10$0nd8iaAPMYGqiwH6s0D4GONzlAgR/pEIm.pIsTB/ty8Zyx8RcMRq.');

-- --------------------------------------------------------

--
-- Table structure for table `signupdata1`
--

CREATE TABLE `signupdata1` (
  `id` int(115) NOT NULL,
  `username` varchar(122) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(152) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectdata`
--
ALTER TABLE `collectdata`
  ADD PRIMARY KEY (`cv`(255));

--
-- Indexes for table `signupdata1`
--
ALTER TABLE `signupdata1`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

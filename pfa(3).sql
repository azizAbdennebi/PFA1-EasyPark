-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 12:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `p_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`, `p_code`) VALUES
('admin', 'amin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cite`
--

CREATE TABLE `cite` (
  `C_code` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cite`
--

INSERT INTO `cite` (`C_code`, `nom`) VALUES
(1, 'tunis'),
(2, 'sousse'),
(3, 'djerba'),
(4, 'monastir');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `code_client` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `tel` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`code_client`, `nom`, `tel`, `username`, `mail`, `password`) VALUES
(1, '123123', 123456, 'zizouabd', 'dsf', '0000'),
(3, 'malla jaw', 123, 'aziiiiizzooo', '', ''),
(9, '', 0, 'zizouabd77', '', '0000'),
(12, 'mouaadhh', 55116735, 'mouadh123', 'mouadhmaoudha', '0000'),
(13, 'aziz', 54360288, 'Aziz Abdennebi', 'zizouabd7@gmail.com', '12345'),
(14, 'Aziz Abdennebi', 0, '54360288', '', '12345'),
(15, '', 0, '', '', ''),
(17, '56563', 0, 'sdfvsdfsdf', 'sdfvsdfvsfdvc@dfgsdf', 'sdfsdf'),
(20, '', 0, ',;nj', '', '12345'),
(21, 'sehli mouadh', 55116735, 'waa', 'mouadhsahli47@gmail.', '1234'),
(25, '', 0, 'tttttteeeeesstttt', '', '12345'),
(26, '', 0, '54360288', '', '12345'),
(27, 'aziiz', 54360, '', '', ''),
(28, '', 0, 'aaaaa', '', '12345'),
(29, 'aziz', 54360288, '', '', ''),
(30, 'aziz', 54360288, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emplacement`
--

CREATE TABLE `emplacement` (
  `num_emp` int(11) NOT NULL,
  `p_code` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplacement`
--

INSERT INTO `emplacement` (`num_emp`, `p_code`, `etat`) VALUES
(1, 1, 1),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `p_code` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `c_code` int(11) NOT NULL,
  `prix_h` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`p_code`, `adresse`, `c_code`, `prix_h`) VALUES
(1, 'habib bourgiba', 1, 2),
(2, 'lac', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `num_res` int(11) NOT NULL,
  `code_client` int(11) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `num_emp` int(11) NOT NULL,
  `date_arr` datetime NOT NULL,
  `date_sortie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`num_res`, `code_client`, `matricule`, `num_emp`, `date_arr`, `date_sortie`) VALUES
(1, 21, '136tu152', 3, '2021-08-08 20:00:00', '2021-08-26 17:52:00'),
(5, 29, 'qzd', 2, '2021-05-07 23:07:00', '2021-05-07 23:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `matricule` varchar(15) NOT NULL,
  `couleur` varchar(15) NOT NULL,
  `puissance` int(11) NOT NULL,
  `code_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`matricule`, `couleur`, `puissance`, `code_client`) VALUES
('136tu152', 'blanche', 45, 14),
('159tu7117', 'grise', 6, 14),
('196tu457', 'grise', 5, 14),
('bcfjhn', 'blanche', 1, 14),
('bj', 'grise', 7, 14),
('bvn', 'creme', 40, 14),
('dsqd', 'blanche', 30, 14),
('dz', 'blanche', 35, 26),
('qzd', 'blanche', 40, 29),
('rffe', 'blanche', 30, 14),
('sdef', 'blanche', 2, 14),
('sdfsdf', 'blanche', 15, 14),
('sqd', 'blanche', 45, 14),
('zedsq', 'grise', 50, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`),
  ADD KEY `p_code` (`p_code`);

--
-- Indexes for table `cite`
--
ALTER TABLE `cite`
  ADD PRIMARY KEY (`C_code`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`code_client`);

--
-- Indexes for table `emplacement`
--
ALTER TABLE `emplacement`
  ADD PRIMARY KEY (`num_emp`),
  ADD KEY `p_code` (`p_code`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`p_code`),
  ADD KEY `c_code` (`c_code`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`num_res`,`code_client`,`matricule`),
  ADD KEY `code_client` (`code_client`),
  ADD KEY `matricule` (`matricule`),
  ADD KEY `num_emp` (`num_emp`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `code_client` (`code_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cite`
--
ALTER TABLE `cite`
  MODIFY `C_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `code_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emplacement`
--
ALTER TABLE `emplacement`
  MODIFY `num_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `p_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `num_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`p_code`) REFERENCES `parking` (`p_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `emplacement`
--
ALTER TABLE `emplacement`
  ADD CONSTRAINT `emplacement_ibfk_1` FOREIGN KEY (`p_code`) REFERENCES `parking` (`p_code`);

--
-- Constraints for table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `parking_ibfk_1` FOREIGN KEY (`c_code`) REFERENCES `cite` (`C_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`code_client`) REFERENCES `client` (`code_client`) ON DELETE NO ACTION,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`matricule`) REFERENCES `voiture` (`matricule`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`num_emp`) REFERENCES `emplacement` (`num_emp`);

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`code_client`) REFERENCES `client` (`code_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

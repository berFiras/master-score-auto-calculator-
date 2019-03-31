-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 10:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `anneebac` int(110) NOT NULL,
  `mentionbac` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `nbr_red_bac` int(110) NOT NULL,
  `etab_dernier_diplome` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `nature_diplome` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `annee_obtition_diplome` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `annee_p` int(110) NOT NULL,
  `etablissement_p` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `etudes_poursuivi_p` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `moyen_p` float NOT NULL,
  `nbr_red_etusup_p` int(110) NOT NULL,
  `mention_p` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `session_p` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `annee_d` int(110) NOT NULL,
  `etablissement_d` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `etudes_poursuivi_d` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `moyen_d` float NOT NULL,
  `nbr_red_etusup_d` int(110) NOT NULL,
  `mention_d` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `session_d` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `annee_t` int(110) NOT NULL,
  `etablissement_t` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `etudes_poursuivi_t` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `moyen_t` float NOT NULL,
  `nbr_red_etusup_t` int(110) NOT NULL,
  `mention_t` varchar(110) COLLATE utf8_unicode_ci NOT NULL,
  `session_t` varchar(110) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `choix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomjf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationalite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedenaiss` date DEFAULT NULL,
  `lieudenaiss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresscomplete` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gouvernourat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` int(10) NOT NULL,
  `telephone` int(14) NOT NULL,
  `adressemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `choix`, `cin`, `nom`, `prenom`, `nomjf`, `pays`, `sex`, `nationalite`, `datedenaiss`, `lieudenaiss`, `adresscomplete`, `gouvernourat`, `ville`, `codepostal`, `telephone`, `adressemail`) VALUES
(3, '1', 0, '', '', '', '1', '', '1', NULL, '', '', NULL, '', 0, 0, ''),
(5, '1', 12345678, 'test', 'test', 'test', '186', '', '186', NULL, 'test', 'test test', NULL, 'test', 2000, 0, 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_backup`
--

CREATE TABLE `users_backup` (
  `id` int(11) NOT NULL,
  `choix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cin` int(8) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomjf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationalite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedenaiss` date DEFAULT NULL,
  `lieudenaiss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresscomplete` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gouvernourat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` int(10) NOT NULL,
  `telephone` int(14) NOT NULL,
  `adressemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anneebac` int(255) NOT NULL,
  `mentionbac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbr_red_bac` int(255) NOT NULL,
  `etab_dernier_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nature_diplome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `annee_obtition_diplome` int(255) DEFAULT NULL,
  `annee_p` int(255) DEFAULT NULL,
  `etablissement_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etudes_poursuivi_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moyen_p` float DEFAULT NULL,
  `nbr_red_etusup_p` int(255) DEFAULT NULL,
  `mention_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee_d` int(255) DEFAULT NULL,
  `etablissement_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etudes_poursuivi_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moyen_d` float DEFAULT NULL,
  `nbr_red_etusup_d` int(255) DEFAULT NULL,
  `mention_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_d` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annee_t` int(255) DEFAULT NULL,
  `etablissement_t` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `etudes_poursuivi_t` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moyen_t` float DEFAULT NULL,
  `nbr_red_etusup_t` int(255) DEFAULT NULL,
  `mention_t` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_t` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_backup`
--

INSERT INTO `users_backup` (`id`, `choix`, `cin`, `nom`, `prenom`, `nomjf`, `pays`, `sex`, `nationalite`, `datedenaiss`, `lieudenaiss`, `adresscomplete`, `gouvernourat`, `ville`, `codepostal`, `telephone`, `adressemail`, `anneebac`, `mentionbac`, `nbr_red_bac`, `etab_dernier_diplome`, `nature_diplome`, `specialite`, `annee_obtition_diplome`, `annee_p`, `etablissement_p`, `etudes_poursuivi_p`, `moyen_p`, `nbr_red_etusup_p`, `mention_p`, `session_p`, `annee_d`, `etablissement_d`, `etudes_poursuivi_d`, `moyen_d`, `nbr_red_etusup_d`, `mention_d`, `session_d`, `annee_t`, `etablissement_t`, `etudes_poursuivi_t`, `moyen_t`, `nbr_red_etusup_t`, `mention_t`, `session_t`) VALUES
(1, '1', 12345678, 'test', 'test', '', '1', '', '', '0000-00-00', '', '', '', '', 0, 0, '', 0, '', 0, '', '', '', 0, 0, '', '', 0, 0, '', '', 0, '', '', 0, 0, '', '', 0, '', '', 0, 0, '', ''),
(2, '', 0, '', '', '', '1', '', '', '0000-00-00', '', '', '', '', 0, 0, '', 0, '', 0, '', '', '', 0, 0, '', '', 0, 0, '', '', 0, '', '', 0, 0, '', '', 0, '', '', 0, 0, '', ''),
(7, '1', 13448089, 'hiba', 'horcheni', 'jxnj', '1', '', '1', NULL, 'tozeur', 'http:// hhdjd', NULL, 'http:// hhdjd', 6667, 67809, 'wissem@gmail.com', 2003, '1', 0, '62', '2', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '1', 67890044, 'DD', 'DD', 'DD', '14', '', '15', NULL, 'DD', 'DD', NULL, 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '1', 456799, 'DD', 'II', 'DD', '14', '', '15', NULL, 'DD', 'DD', '1', 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', 2003, 2001, '69', 'DD', 45, 2, 'PASSABLE', 'p', 2001, '62', 'DD', 56, 1, 'BIEN', 'r', 2002, '61', 'DD', 78, 0, 'PASSABLE', 'p'),
(12, '1', 567899, 'DD', 'II', 'DD', '14', '', '15', NULL, 'DD', 'DD', '1', 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', 2003, 2001, '69', 'DD', 45, 2, 'PASSABLE', 'p', 2001, '62', 'DD', 56, 1, 'BIEN', 'r', 2002, '61', 'DD', 78, 0, 'PASSABLE', 'p'),
(14, '1', 677889, 'DD', 'II', 'DD', '14', '', '15', NULL, 'DD', 'DD', '1', 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', 2003, 2001, '69', 'DD', 45, 2, 'PASSABLE', 'p', 2001, '62', 'DD', 56, 1, 'BIEN', 'r', 2002, '61', 'DD', 78, 0, 'PASSABLE', 'p'),
(15, '1', 839900, 'DD', 'II', 'DD', '14', '', '15', NULL, 'DD', 'DD', '1', 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', 2003, 2001, '69', 'DD', 45, 2, 'PASSABLE', 'p', 2001, '62', 'DD', 56, 1, 'BIEN', 'r', 2002, '61', 'DD', 78, 0, 'PASSABLE', 'p'),
(16, '1', 6789, 'DD', 'II', 'DD', '14', '', '15', NULL, 'DD', 'DD', '1', 'DD', 5679, 67809, 'hamzaouibacha1994@hotmail.com', 2013, '4', 4, '68', '1', '55', 2003, 2001, '69', 'DD', 45, 2, 'PASSABLE', 'p', 2001, '62', 'DD', 56, 1, 'BIEN', 'r', 2002, '61', 'DD', 78, 0, 'PASSABLE', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cin` (`cin`);

--
-- Indexes for table `users_backup`
--
ALTER TABLE `users_backup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cin` (`cin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_backup`
--
ALTER TABLE `users_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

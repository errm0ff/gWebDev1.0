-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wf3_php_final_meryem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_information`
--

CREATE TABLE `game_information` (
  `game_id` int(11) NOT NULL,
  `game_startdate` date DEFAULT NULL,
  `game_winner` int(11) DEFAULT NULL,
  `game_status` varchar(11) DEFAULT NULL,
  `game_min_players` int(11) NOT NULL,
  `game_max_players` int(11) NOT NULL,
  `game_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_information`
--

INSERT INTO `game_information` (`game_id`, `game_startdate`, `game_winner`, `game_status`, `game_min_players`, `game_max_players`, `game_title`) VALUES
(1, '2023-06-14', 1, 'Finished', 5, 7, 'Fighters'),
(2, '2023-06-14', 1, 'Finished', 5, 7, 'Fighters 8'),
(3, '2023-08-14', 1, 'Finished', 5, 7, 'Fighters 2'),
(4, '2023-07-14', 1, 'Not started', 5, 7, 'Fighters 3'),
(5, '2023-09-14', 1, 'In progress', 5, 7, 'Fighters 4'),
(7, '0000-00-00', NULL, 'Not started', 2, 4, 'stupid game '),
(8, '0000-00-00', NULL, 'Not started', 6, 86, 'stupid game 2'),
(9, '0000-00-00', NULL, 'Not started', 3, 7, 'stupid game 2');

-- --------------------------------------------------------

--
-- Table structure for table `player_information`
--

CREATE TABLE `player_information` (
  `player_id` int(11) NOT NULL,
  `player_nickname` varchar(50) DEFAULT NULL,
  `player_email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_information`
--

INSERT INTO `player_information` (`player_id`, `player_nickname`, `player_email`) VALUES
(1, 'lukesawalker', 'lukesawalker@tatoon.co'),
(2, 'rey32', 'rey32@gmail.com'),
(3, 'lukesawalker', 'lukesawalker@tatoon.co'),
(4, 'rey32', 'rey32@gmail.com'),
(5, 'lukesawalker', 'lukesawalker@tatoon.co'),
(6, 'rey32', 'rey32@gmail.com'),
(7, 'lukesawalker', 'lukesawalker@tatoon.co'),
(8, 'rey32', 'rey32@gmail.com'),
(12, 'errmoff', 'errmoff@test.db'),
(13, 'errmoff', 'errmoff@test.db');

-- --------------------------------------------------------

--
-- Table structure for table `player_statistic`
--

CREATE TABLE `player_statistic` (
  `id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_statistic`
--

INSERT INTO `player_statistic` (`id`, `player_id`, `game_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 1, 2),
(4, 2, 1),
(5, 1, 2),
(6, 2, 1),
(7, 1, 2),
(8, 2, 1),
(9, 1, 2),
(10, 2, 1),
(13, 2, 1),
(14, 2, 2),
(15, 3, 3),
(16, 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_information`
--
ALTER TABLE `game_information`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `game_winner` (`game_winner`);

--
-- Indexes for table `player_information`
--
ALTER TABLE `player_information`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_statistic`
--
ALTER TABLE `player_statistic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `game_id` (`game_id`),
  ADD KEY `playerid` (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_information`
--
ALTER TABLE `game_information`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `player_information`
--
ALTER TABLE `player_information`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `player_statistic`
--
ALTER TABLE `player_statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game_information`
--
ALTER TABLE `game_information`
  ADD CONSTRAINT `game_information_ibfk_1` FOREIGN KEY (`game_winner`) REFERENCES `player_information` (`player_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

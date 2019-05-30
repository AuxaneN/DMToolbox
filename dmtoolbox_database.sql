-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2019 at 11:24 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmtoolbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `category` enum('map','item','music','gameplay','campaign') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `name`, `description`, `link`, `category`) VALUES
(1, 'RPG Ambiences', 'All the best ambiences for your RPG or D&D sessions, masterfully created by Michael Ghelfi', 'https://www.youtube.com/playlist?list=PLbHUA-o_5dgJbOXwtdVx--gTnmWfiyyys', 'music'),
(2, 'RPG Ambiences', 'All the best ambiences for your RPG or D&D sessions, masterfully created by Michael Ghelfi', 'https://www.youtube.com/playlist?list=PLbHUA-o_5dgJbOXwtdVx--gTnmWfiyyys', 'music'),
(3, 'donjon', 'A collection of RPG oriented generators. Treasure, encounters, maps and more', 'https://donjon.bin.sh', 'campaign'),
(4, '101 Silly/Useless Magic Items', 'A collection of magic items', 'https://forum.rpg.net/index.php?threads/101-silly-useless-magic-items.514681/', 'item'),
(5, 'Dakhem Uaids Big Book of Useless Magic Items', 'A compilation of some of the best and funniest "useless" magic items, from various threads on the boards and a few outside sources.', 'http://www.giantitp.com/forums/showthread.php?311144-Dakhem-Uaid-s-Big-Book-of-Useless-Magic-Items', 'item'),
(6, 'd100 Minor Magical Items', 'A list of a 100 items', 'https://goblinpunch.blogspot.com/2015/01/d100-minor-magical-items.html?m=1', 'item'),
(7, '100 Interesting Magic Items', ' The first half of a 100 item long list', 'http://www.bastionland.com/2009/07/100-interesting-magic-items-first-half.html?m=1', 'item'),
(8, 'DnD Beyond', 'DnDs official campaign and character editor', 'https://dndbeyond.com', 'campaign');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
